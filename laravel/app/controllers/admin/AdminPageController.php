<?php

class AdminPageController extends AdminController {

    public function __construct() {
        parent::__construct();
        breadCrumb::add('Page', route('admin.page.index'));
        $this->page_title = "Page Management";
    }

    /**
     * Display a listing of the resource.
     * GET /admin.adminpage
     *
     * @return Response
     */
    public function index() {
        $data['restarents'] = Page::all();
        return $this->render('page.index', $data);
    }

    /**
     * Show the form for editing the specified resource.
     * GET /admin.adminpage/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        breadCrumb::add('Edit', route('admin.page.edit'));
        $data['model'] = Page::find($id);
        return $this->render('page.edit', $data);
    }

    /**
     * Show the form for creating a new restaurant.
     * GET /restaurant/create
     *
     * @return Response
     */
    public function create() {
        breadCrumb::add('Create', route('admin.page.create'));
        return $this->render('page.create');
    }

    /**
     * Store a newly created restaruant in database.
     * POST /restaurant
     *
     * @return Response
     */
    public function store() {
        $validationRules = array(
            'slug' => 'required|alpha_dash|unique:pages'
        );
        $validator = Validator::make(Input::all(), $validationRules);

        if ($validator->fails()) {
            $this->ajax_errors = $validator->getMessageBag()->toArray();
        } else {
            $page = new Page();
            $page->slug = Input::get('slug');
            $page->meta_title = Input::get('meta_title');
            $page->meta_keywords = Input::get('meta_keywords');
            $page->meta_description = Input::get('meta_description');
            if ($page->save()) {
                $this->ajax_success = TRUE;
                $this->ajax_message = "Successfully Created.";
            } else {
                $this->ajax_error = "Error";
            }
        }
        return $this->ajaxResponse();
    }

    /**
     * Update the specified resource in storage.
     * PUT /admin.adminpage/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $page = Page::find($id);
        if ($page != NULL) {
            $page->meta_title = Input::get('meta_title');
            $page->meta_keywords = Input::get('meta_keywords');
            $page->meta_description = Input::get('meta_description');
            $page->save();
            $this->ajax_success = TRUE;
            $this->ajax_message = "Successfully updated.";
        } else {
            $this->ajax_error = "Page not found";
        }
        return $this->ajaxResponse();
    }

}