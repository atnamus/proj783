<?php

class LoginController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getLogin() {
        //echo $action = Route::currentRouteAction();
        $user = Auth::user();
        if (!empty($user->id)) {
            return Redirect::to('/');
        }
        return View::make('admin::login', ['sd' => 'sds']);
    }

    /**
     * Attempt to do login
     *
     */
    public function postLogin() {
        $input = array(
            'email' => Input::get('username'),
            'username' => Input::get('username'),
            'password' => Input::get('password'),
            'remember' => Input::get('remember'),
        );
        // If you wish to only allow login from confirmed users, call logAttempt
        // with the second parameter as true.
        // logAttempt will check if the 'email' perhaps is the username.
        // Check that the user is confirmed.
        if (Confide::logAttempt($input, true)) {
            return Redirect::intended('/');
        } else {
            // Check if there was too many login attempts
            if (Confide::isThrottled($input)) {
                $err_msg = Lang::get('confide::confide.alerts.too_many_attempts');
            } elseif ($this->user->checkUserExists($input) && !$this->user->isConfirmed($input)) {
                $err_msg = Lang::get('confide::confide.alerts.not_confirmed');
            } else {
                $err_msg = Lang::get('confide::confide.alerts.wrong_credentials');
            }
            return Redirect::to(route('user-login'))
                            ->withInput(Input::except('password'))
                            ->with('error', $err_msg);
        }
    }

}
