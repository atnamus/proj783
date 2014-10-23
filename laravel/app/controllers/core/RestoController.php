<?php

class RestoController extends BaseController {

    protected $layout = 'resto::layouts.default';
    public $_theme = [
        'portlet_colour' => 'yellow',
        'save_btn_colour' => 'blue',
        'cancel_btn_colour' => 'default',
    ];
    public $data = [];

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    function __construct() {
        breadCrumb::add('Dashboard', route('resto-home'));
        $this->ajax_area = 'resto';
        $this->view_namespace = 'resto';
    }

}
