<?php

class FrontController extends BaseController {

    protected $layout = 'frontend::layouts.default';
    public $data = [];

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    function __construct() {
        $this->item_per_page = 10;
        $this->ajax_area = 'fronend';
        $this->view_namespace = 'frontend';
    }

}
