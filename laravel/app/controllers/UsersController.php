<?php

/**
 * UsersController Class
 *
 * Implements actions regarding user management
 */
class UsersController extends FrontController {

    /**
     * Displays the form for account creation
     *
     * @return  Illuminate\Http\Response
     */
    public function create() {
        return View::make(Config::get('confide::signup_form'));
    }

    /**
     * Stores new account
     *
     * @return  Illuminate\Http\Response
     */
    public function store() {
        $repo = App::make('UserRepository');
        $user = $repo->signup(Input::all());
        if ($user->id) {
            if (Config::get('confide::signup_email')) {
                Mail::queueOn(
                        Config::get('confide::email_queue'), Config::get('confide::email_account_confirmation'), compact('user'), function ($message) use ($user) {
                            $message
                                    ->to($user->email, $user->username)
                                    ->subject(Lang::get('confide::confide.email.account_confirmation.subject'));
                        }
                );
            }
            return Redirect::action('UsersController@login')
                            ->with('notice', Lang::get('confide::confide.alerts.account_created'));
        } else {
            $error = $user->errors()->all(':message');

            return Redirect::action('UsersController@create')
                            ->withInput(Input::except('password'))
                            ->with('error', $error);
        }
    }

    /**
     * Displays the login form
     *
     * @return  Illuminate\Http\Response
     */
    public function login() {
        if (Confide::user()) {
            return Redirect::to('/');
        } else {
            $data = [];
            $this->page_title = "Login";
            $data['login_page'] = true;
            return $this->render('home', $data);
            //return View::make(Config::get('confide::login_form'));
        }
    }

    /**
     * Attempt to do login
     *
     * @return  Illuminate\Http\Response
     */
    public function doLogin() {
        $repo = App::make('UserRepository');
        $input = Input::all();

        if ($repo->login($input)) {
            $user = Auth::user();
            Log::info('doLogin : ' . print_r($user, 1));

            if (Auth::user()->status != 1) {
                Auth::logout();
                return Redirect::action('UsersController@login')->with('error', "Your account has been deactivated by administrator.");
            }
            Event::fire('auth.login', [Auth::user()]);
            $user = Auth::User();
            if ($user->hasRole("admin")) {
                $redirect_url = route('admin-home');
            } elseif ($user->hasRole("resto_owner")) {
                $redirect_url = route('resto-home');
            } else {
                $redirect_url = route('home');
            }
            return Redirect::intended($redirect_url);
        } else {
            Log::info('doLogin : ' . __LINE__);
            if ($repo->isThrottled($input)) {
                $err_msg = Lang::get('confide::confide.alerts.too_many_attempts');
            } elseif ($repo->existsButNotConfirmed($input)) {
                $err_msg = Lang::get('confide::confide.alerts.not_confirmed');
            } else {
                $err_msg = Lang::get('confide::confide.alerts.wrong_credentials');
            }

            return Redirect::action('UsersController@login')
                            ->withInput(Input::except('password'))
                            ->with('error', $err_msg);
        }
    }

    /**
     * Attempt to confirm account with code
     *
     * @param  string $code
     *
     * @return  Illuminate\Http\Response
     */
    public function confirm($code) {
        $this->page_title = "Confirm user email";
        $user = User::where('confirmation_code', "=", $code)->first();
        if (Confide::confirm($code)) {
            //$notice_msg = Lang::get('confide::confide.alerts.confirmation');
            $notice_msg = "Your account has been confirmed! Please set your password.";
            //$token = Confide::forgotPassword($user->email);
            $token = $this->generateResetPwdtoken($user);
            $user->confirmation_code = '';
            $user->save();
            return Redirect::action('UsersController@resetPassword', $token)
                            ->with('notice', $notice_msg);
        } else {
            $error_msg = Lang::get('confide::confide.alerts.wrong_confirmation');
            return Redirect::action('UsersController@login')
                            ->with('error', $error_msg);
        }
    }

    public function generateResetPwdtoken($user) {
        $email = $user->getReminderEmail();
        $token = md5(uniqid(mt_rand(), true));
        DB::table('password_reminders')->insert(
                array(
                    'email' => $email,
                    'token' => $token,
                    'created_at' => new \DateTime
                )
        );
        return $token;
    }

    /**
     * Displays the forgot password form
     *
     * @return  Illuminate\Http\Response
     */
    public function forgotPassword() {
        $this->page_title = "Forgot Password";
        //return View::make(Config::get('confide::forgot_password_form'));
        return $this->render("forgot-password");
    }

    /**
     * Attempt to send change password link to the given email
     *
     * @return  Illuminate\Http\Response
     */
    public function doForgotPassword() {
        if (Confide::forgotPassword(Input::get('email'))) {
            $notice_msg = Lang::get('confide::confide.alerts.password_forgot');
            return Redirect::action('UsersController@login')
                            ->with('notice', $notice_msg);
        } else {
            $error_msg = Lang::get('confide::confide.alerts.wrong_password_forgot');
            return Redirect::action('UsersController@doForgotPassword')
                            ->withInput()
                            ->with('error', $error_msg);
        }
    }

    /**
     * Shows the change password form with the given token
     *
     * @param  string $token
     *
     * @return  Illuminate\Http\Response
     */
    public function resetPassword($token) {
        $this->page_title = "Reset Password";
        return $this->render('reset-password', ['token' => $token]);
    }

    /**
     * Attempt change password of the user
     *
     * @return  Illuminate\Http\Response
     */
    public function doResetPassword() {
        $repo = App::make('UserRepository');
        $input = array(
            'token' => Input::get('token'),
            'password' => Input::get('password'),
            'password_confirmation' => Input::get('password_confirmation'),
        );
        //fetch user details by token
        $user = Confide::userByResetPasswordToken($input['token']);
        // By passing an array with the token, password and confirmation
        if ($repo->resetPassword($input)) {
            /* $notice_msg = Lang::get('confide::confide.alerts.password_reset');
              return Redirect::action('UsersController@login')
              ->with('notice', $notice_msg);
             */
            $user_credintials = [
                'email' => $user->email,
                'username' => $user->username,
                'password' => $input['password'],
            ];
            //loged the user in 
            if ($repo->login($user_credintials)) {
                if (Auth::user()->status != 1) {
                    Auth::logout();
                    return Redirect::action('UsersController@login')->with('error', "Your account has been deactivated by administrator.");
                }
                Event::fire('auth.login', [Auth::user()]);
                $user = Auth::User();
                if ($user->hasRole("admin")) {
                    $redirect_url = route('admin-home');
                } elseif ($user->hasRole("resto_owner")) {
                    $redirect_url = route('resto-home');
                } else {
                    $redirect_url = route('home');
                }
                return Redirect::intended($redirect_url);
            } else {
                if ($repo->isThrottled($input)) {
                    $err_msg = Lang::get('confide::confide.alerts.too_many_attempts');
                } elseif ($repo->existsButNotConfirmed($input)) {
                    $err_msg = Lang::get('confide::confide.alerts.not_confirmed');
                } else {
                    $err_msg = Lang::get('confide::confide.alerts.wrong_credentials');
                }

                return Redirect::action('UsersController@login')
                                ->withInput(Input::except('password'))
                                ->with('error', $err_msg);
            }
            //end loged the user in
        } else {
            $error_msg = Lang::get('confide::confide.alerts.wrong_password_reset');
            return Redirect::action('UsersController@resetPassword', array('token' => $input['token']))
                            ->withInput()
                            ->with('error', $error_msg);
        }
    }

    /**
     * Log the user out of the application.
     *
     * @return  Illuminate\Http\Response
     */
    public function logout() {
        Confide::logout();
        return Redirect::to('/');
    }

}
