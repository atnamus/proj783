<?php

class HomeController extends FrontController {

    public function getIndex() {
        $data = [];
        $this->page_title = "Home";
        $data['login_page'] = false;
        return $this->render('home', $data);
    }

}
