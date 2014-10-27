<?php

/*
 * Manage all type of users like customer,employee, resto owner etc using this controller
 */

class AdminUserController extends AdminController {

    public function __construct() {
        parent::__construct();
        breadCrumb::add('User', route('admin.user.index'));
        $this->page_title = "User";
    }

    /**
     * Display a listing of the Users.
     * GET /user
     *
     * @return Response
     */
    public function index() {
        $data['model'] = User::paginate(10);
        return $this->render('user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     * GET /user/create
     *
     * @return Response
     */
    public function create() {
        breadCrumb::add('Create', route('admin.user.create'));
        return $this->render('user.create');
    }

    /**
     * Store a newly created resource in storage.
     * POST /user
     *
     * @return Response
     */
    public function store() {
        $userData = array(
            'name' => Input::get('name'),
            'username' => Input::get('username'),
            'email' => Input::get('email'),
            'phone' => Input::get('phone'),
        );
        $rules = array(
            'name' => 'required',
            'username' => 'required|unique:users,username,NULL,id,deleted_at,NULL',
            'email' => 'required|email|unique:users,email,NULL,id,deleted_at,NULL',
        );
        $validator = Validator::make($userData, $rules);
        if ($validator->fails()) {
            $this->ajax_errors = $validator->getMessageBag()->toArray();
        } else {
            $user = new UserRepository();
            $userData = [
                'name' => Input::get('name'),
                'username' => Input::get('username'),
                'email' => Input::get('email'),
            ];
            if ($user = $user->_register($userData)) {
                Mail::queue('emails.user_create_by_admin', ['user' => $user], function($message) use ($user) {
                            $message->to($user->email, $user->username)
                                    ->subject('Makananas :: Admin Create your account..');
                        });
                $this->ajax_success = TRUE;
                $this->ajax_message = "Successfully created.";
            } else {
                $this->ajax_error = "Error";
            }
        }
        return $this->ajaxResponse();
    }

    /**
     * Display the specified resource.
     * GET /user/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /user/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        breadCrumb::add('Edit', route('admin.user.edit'));
        $model = User::with('roles')->where('id', '=', $id)->first();
        //$roles = User::find($id)->roles();
        //$perms = $roles->perms();
        //if model not found then back to listing page and show message
        if ($model == NULL) {
            return Redirect::route('admin.user.index')->with('message', SiteHelpers::alert("error", "User not found."));
        }
        $model->password = '';
        $data['model'] = $model;
        return $this->render('user.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     * PUT /user/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $userData = array(
            'name' => Input::get('name'),
            'username' => Input::get('username'),
            'email' => Input::get('email'),
            'phone' => Input::get('phone'),
        );
        $rules = array(
            'name' => 'required',
            'username' => 'required|unique:users,username,' . $id . ',id,deleted_at,NULL',
            'email' => 'required|email|unique:users,email,' . $id . ',id,deleted_at,NULL',
        );
        $validator = Validator::make($userData, $rules);
        if ($validator->fails()) {
            $this->ajax_errors = $validator->getMessageBag()->toArray();
        } else {
            $model = User::find($id);
            //$user = new UserRepository();
            $userData = [
                'name' => Input::get('name'),
                'username' => Input::get('username'),
                'email' => Input::get('email'),
            ];
            $model->name = $userData['name'];
            $model->username = $userData['username'];
            $model->email = $userData['email'];
            if ($model->save()) {
                $this->ajax_success = TRUE;
                $this->ajax_message = "Successfully updated.";
            } else {
                $this->ajax_error = "Error";
            }
            /* if ($user = $user->_register($userData)) {
              Mail::queue('emails.user_create_by_admin', ['user' => $user], function($message) use ($user) {
              $message->to($user->email, $user->username)
              ->subject('Makananas :: Admin Create your account..');
              });
              $this->ajax_success = TRUE;
              $this->ajax_message = "Successfully created.";
              } else {
              $this->ajax_error = "Error";
              } */
        }
        return $this->ajaxResponse();
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /user/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        if (Auth::id() == $id) {
            return Redirect::route('admin.restaurant.index')->with('message', SiteHelpers::alert("error", "You can not delete your own account."));
        }
        $model = User::find($id);
        if ($model == NULL)
            return Redirect::route('admin.restaurant.index')->with('message', SiteHelpers::alert("error", "User not found."));

        if ($model->delete() && $model->hasRole('resto_owner')) {
            if ($model->restaurant)//further chek really have any restaraunt
                $model->restaurant->delete();
            //$model->restaurant->forceDelete(); //permanently delete  
        }
        return Redirect::route('admin.user.index')->with('message', SiteHelpers::alert("success", "Successfully deleted."));
    }

}