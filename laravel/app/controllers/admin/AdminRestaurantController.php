<?php

class AdminRestaurantController extends AdminController {

    public function __construct() {
        parent::__construct();
        breadCrumb::add('Restaurant', route('admin.restaurant.index'));
        $this->page_title = "Restaurant";
    }

    /**
     * Display a listing of the restaurant.
     * GET /restaurant
     *
     * @return Response
     */
    public function index() {
        $data['restarents'] = Restaurant::with('owner')->where('status', '!=', Restaurant::DELETE)->paginate(10);
        return $this->render('restaurant.index', $data);
    }

    /**
     * Show the form for creating a new restaurant.
     * GET /restaurant/create
     *
     * @return Response
     */
    public function create() {
        breadCrumb::add('Create', route('admin.restaurant.create'));
        return $this->render('restaurant.create');
    }

    /**
     * Store a newly created restaruant in database.
     * POST /restaurant
     *
     * @return Response
     */
    public function store() {
        $validationRules = array(
            'username' => 'required|unique:users,username,NULL,id,deleted_at,NULL',
            'email' => 'required|email|unique:users,email,NULL,id,deleted_at,NULL',
            'name' => 'between:4,255',
        );
        $validator = Validator::make(Input::all(), $validationRules);

        // If validation fails, we'll exit the operation now.
        if ($validator->fails()) {
            // Ooops.. something went wrong
            return Redirect::back()->withInput()->withErrors($validator);
        }
        //create user
        $user = new User();
        $user->username = Input::get('username');
        $user->email = Input::get('email');
        $rand_str = "ABCDEFGHIJKLMNOPQRST~!@#$%^&*()_+|`1234567890-=\abcdefghijklmnopqrstuvwxyz";
        $password = substr(str_shuffle(time() . rand(1, 999) . substr(str_shuffle($rand_str), 0, strlen($rand_str))), 0, rand(6, 12));
        $user->password = $password;
        $user->password_confirmation = $password;
        $user->confirmation_code = md5(uniqid(mt_rand(), true));
        $user->save();
        //create restaurant 
        $resto = new Restaurant();

        if ($user->save()) {
            //assign rsto_owner role to the newly created user
            $user->roles()->attach(Role::RESTO_OWNER);
            $resto->owner_id = $user->id;
            $resto->name = Input::get('restaurant_name');
            $resto->status = 1;
            $resto->save();
            //send email to restaurant ownner
            Mail::queue('emails.restaurant_create_by_admin', ['user' => $user, 'resto' => $resto], function($message) use ($user, $resto) {
                        $message->to($user->email, $user->username)
                                ->subject('Makananas :: Admin Register ' . $resto->name . " Restaurant");
                    });
        }
        return Redirect::to(route('admin.restaurant.create'))->with('message', SiteHelpers::alert("success", "Successfully created."));
    }

    /**
     * Display the specified resource.
     * GET /restaurant/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        breadCrumb::add('Show', route('admin.restaurant.show'));
    }

    /**
     * Show the form for editing the specified restaurant.
     * GET /restaurant/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        breadCrumb::add('Edit', route('admin.restaurant.edit'));
        $data['model'] = Restaurant::with('owner')->find($id);
        return $this->render('restaurant.edit', $data);
    }

    /**
     * Update the specified resource in database.
     * PUT /restaurant/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $validationRules = array(
            'name' => 'between:4,255',
            'address' => 'required',
            'phone' => 'required',
            'taxes' => 'required',
            'facebook' => 'url',
            'twitter' => 'url',
            'google_plus' => 'url',
        );
        $validator = Validator::make(Input::all(), $validationRules);

        // If validation fails, we'll exit the operation now.
        if ($validator->fails()) {
            // Ooops.. something went wrong
            return Redirect::back()->withInput()->withErrors($validator);
        } else {
            $resto = Restaurant::find($id);
            $resto->name = Input::get('name');
            $resto->address = Input::get('address');
            $resto->phone = Input::get('phone');
            $resto->backup_phone = Input::get('backup_phone');
            $resto->taxes = Input::get('taxes');
            $resto->facebook = Input::get('facebook');
            $resto->twitter = Input::get('twitter');
            $resto->google_plus = Input::get('google_plus');
            $resto->status = Input::get('status');
            $resto->is_premium = Input::get('is_premium');
            $resto->save();
        }
        return Redirect::to(route('admin.restaurant.edit', $resto->id))->with('message', SiteHelpers::alert("success", "Successfully updated."));
    }

    /**
     * Remove(soft delete) the specified restaurant from database.
     * DELETE /restaurant/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $resto = Restaurant::find($id);
        if ($resto->delete())
            $resto->owner->delete();

        return Redirect::route('admin.restaurant.index')->with('message', SiteHelpers::alert("success", "Successfully deleted."));
    }

}