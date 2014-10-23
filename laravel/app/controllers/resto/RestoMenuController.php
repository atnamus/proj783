<?php

class RestoMenuController extends RestoController {

    public function __construct() {
        parent::__construct();
        breadCrumb::add('Restaurent Menu', route('resto.menu.index'));
        $this->page_title = "Restaurent Menu";
    }

    /**
     * Display a listing of the menucategory.
     * GET /menucategory
     *
     * @return Response
     */
    public function index() {
        $data['items'] = RestaurantMenu::where('restaurant_id', '=', Auth::User()->getRestaurantId())
                ->paginate($this->item_per_page);
        return $this->render('menu.index', $data);
    }

    /**
     * Show the form for creating a new menucategory.
     * GET /menucategory/create
     *
     * @return Response
     */
    public function create() {
        breadCrumb::add('Create', route('resto.menu.create'));
        return $this->render('menu.create');
    }

    /**
     * Store a newly created restaruant in database.
     * POST /menucategory
     *
     * @return Response
     */
    public function store() {
        $userData = array(
            'name' => Input::get('name'),
            'category' => Input::get('category'),
            'description' => Input::get('description'),
            'price' => Input::get('price'),
        );
        $validationRules = array(
            'name' => 'required|between:2, 255',
            'category' => 'required|exists:menu_category,id',
            'description' => 'max:1000',
            'price' => 'regex:/^[0-9]+(\.[0-9]{0,2})?$/', ///^\d*(\.\d{2})?$/
        );
        $validator = Validator::make($userData, $validationRules);
        if ($validator->fails()) {
            $this->ajax_errors = $validator->getMessageBag()->toArray();
        } else {
            $model = new RestaurantMenu();
            $model->restaurant_id = Auth::User()->getRestaurantId();
            $model->category_id = $userData['category'];
            $model->name = $userData['name'];
            $model->description = $userData['description'];
            $model->price = $userData['price'];
            //save model and check is there any error
            if ($model->save()) {
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
     * GET /menucategory/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        breadCrumb::add('Show', route('admin.menucategory.show'));
    }

    /**
     * Show the form for editing the specified menucategory.
     * GET /menucategory/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $model = RestaurantMenu::where('id', '=', $id)
                        ->where('restaurant_id', '=', Auth::User()->getRestaurantId())->first();
        if ($model != null) {
            $data['model'] = $model;
            breadCrumb::add('Edit', route('admin.menucategory.edit'));
            return $this->render('menu.edit', $data);
        } else {
            
        }
    }

    /**
     * Update the specified resource in database.
     * PUT /menucategory/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $model = RestaurantMenu::where('id', '=', $id)
                        ->where('restaurant_id', '=', Auth::User()->getRestaurantId())->first();
        if ($model != null) {
            $validationRules = array(
                'name' => 'required|between:2, 255',
                'category_id' => 'required|exists:menu_category,id',
                'description' => 'max:1000',
                'price' => 'regex:/^[0-9]+(\.[0-9]{0,2})?$/', ///^\d*(\.\d{2})?$/
            );
            $validator = Validator::make(Input::all(), $validationRules);
            // If validation fails, we'll exit the operation now.
            if ($validator->fails()) {
                $this->ajax_errors = $validator->getMessageBag()->toArray();
            } else {
                $model->name = Input::get('name');
                $model->description = Input::get('description');
                //save model and check is there any error
                if ($model->save()) {
                    $this->ajax_success = TRUE;
                    $this->ajax_message = "Successfully created.";
                } else {
                    $this->ajax_error = "Error";
                }
            }
        } else {
            $this->ajax_error = "Menu not found";
        }
        return $this->ajaxResponse();
    }

    /**
     * Remove(soft delete) the specified menucategory from database.
     * DELETE /menucategory/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $model = RestaurantMenu::find($id);
        $model->delete();
        return Redirect::route('resto.menu.index')->with('message', SiteHelpers::alert("success", "Successfully deleted."));
    }

}