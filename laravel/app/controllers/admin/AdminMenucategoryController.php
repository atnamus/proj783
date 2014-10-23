<?php

class AdminMenucategoryController extends AdminController {

    public function __construct() {
        parent::__construct();
        breadCrumb::add('Menu Category', route('admin.menucategory.index'));
        $this->page_title = "Menu Category";
    }

    /**
     * Display a listing of the menucategory.
     * GET /menucategory
     *
     * @return Response
     */
    public function index() {
        $data['items'] = MenuCategory::paginate($this->item_per_page);
        return $this->render('menu.category.index', $data);
    }

    /**
     * Show the form for creating a new menucategory.
     * GET /menucategory/create
     *
     * @return Response
     */
    public function create() {
        breadCrumb::add('Create', route('admin.menucategory.create'));
        return $this->render('menu.category.create');
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
            'description' => Input::get('description'),
        );
        $validationRules = array(
            'name' => 'required|between:2, 255',
            'description' => 'max:500'
        );
        $validator = Validator::make($userData, $validationRules);
        if ($validator->fails()) {
            $this->ajax_errors = $validator->getMessageBag()->toArray();
        } else {
            $model = new MenuCategory();
            $model->name = $userData['name'];
            $model->description = $userData['description'];
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
        breadCrumb::add('Edit', route('admin.menucategory.edit'));
        $data['model'] = MenuCategory::find($id);
        return $this->render('menu.category.edit', $data);
    }

    /**
     * Update the specified resource in database.
     * PUT /menucategory/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $model = MenuCategory::find($id);
        if ($model != null) {
            $validationRules = array(
                'name' => 'required|between:2, 255|unique:menu_category,name,' . $id,
                'description' => 'max:500'
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
            $this->ajax_error = "Category not found";
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
        $model = MenuCategory::find($id);
        $model->delete();
        return Redirect::route('admin.menucategory.index')->with('message', SiteHelpers::alert("success", "Successfully deleted."));
    }

}