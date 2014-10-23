<?php

class BaseController extends Controller {

    protected $item_per_page = 10;
    protected $page_title = '';
    protected $view_namespace;
    protected $_theme = '';
    //ajax related attributes
    protected $ajax_fail = TRUE;
    protected $ajax_success = FALSE;
    protected $ajax_message = '';
    protected $ajax_error = '';
    protected $ajax_errors = [];
    protected $ajax_area = 'front'; //override from admin corresponding area

    public function render($view, array $data = []) {
        $data['_theme'] = $this->_theme;
        //share value to master layout
        View::share('_page_title', $this->page_title);
        $data = array_merge($data, $this->data);
        if (Request::ajax()) {
            return Response::json($data);
        }
        $this->layout->content = View::make($this->view_namespace . "::$view")->with($data);
    }

    protected function setupLayout() {
        if (!is_null($this->layout)) {
            $this->layout = View::make($this->layout);
        }
    }

    protected function ajaxResponse($data = []) {
        $fixed_data = [
            'is_login' => Auth::check(),
            'area' => $this->ajax_area,
            'message' => $this->ajax_message,
            'fail' => $this->ajax_fail,
            'success' => $this->ajax_success,
            'errors' => $this->ajax_errors,
            'error' => $this->ajax_error,
        ];
        $response = array_merge($fixed_data, $data);
        return Response::json($response);
    }

}