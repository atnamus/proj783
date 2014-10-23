<?php

class AdminDashboardController extends AdminController {

    /**
     * Display the admin dashboard
     *
     * @return Response
     */
    public function getIndex() {
        $this->page_title = "Dashboard";
        //breadCrumb::add('Home', 'sdsds');
        return $this->render('dashboard');
    }

    /*
     * get loged user own details
     */

    public function getAccount() {
        $this->page_title = 'My Profile';
        breadCrumb::add('My Profile');
        $myprofile = User::find(Auth::User()->id);
        return $this->render('my_profile', ['model' => $myprofile, 'active_tab' => 'tab_account']);
    }

    /**
     * Save admin details
     * @return Response
     */
    public function postAccount() {
        if (Input::get('tab') == 'tab_account') {
            $validationRules = array(
                'username' => 'required|alpha_dash|unique:users,username,' . Auth::User()->id,
                'email' => 'required|email|unique:users,email,' . Auth::User()->id,
            );
            $validator = Validator::make(Input::all(), $validationRules);
        } elseif (Input::get('tab') == 'tab_password') {
            $validationRules = array(
                'password' => 'required|between:6,15',
                'confirm_password' => 'required|same:password',
            );
            $validator = Validator::make(Input::all(), $validationRules);
        }
        // If validation fails, we'll exit the operation now.
        if (!isset($validator) || $validator->fails()) {
            // Ooops.. something went wrong
            return Redirect::back()->withInput()->withErrors($validator);
        } else {
            //$user = new User();

            $myprofile = $User = Auth::user(); //User::find(Auth::User()->id); //Auth::User()->id;
            if (Input::get('tab') == 'tab_account') {
                $myprofile->username = Input::get('username');
                $myprofile->email = Input::get('email');
            } elseif (Input::get('tab') == 'tab_password') {
                $myprofile->password = Input::get('password');
            }
            $myprofile->update();
        }
        return Redirect::to(route('admin-profile'))->with('message', SiteHelpers::alert("success", "Successfully updated."));
    }

}
