@section('content')
@if(Auth::guest())
<div class="btn_container_1 clearfix">
    <a href="#" class="home-btn login-btn" id="login-btn"  @if($login_page)style="display: none;" @endif>
       <div class="icon__menu" id="icon_menu_login">
            <div class="slide_icon login-icon"></div>
            <span class="slide_text">Login</span>
        </div>
    </a>
</div>
@else
<div class="btn_container_1 clearfix">
    <?php
    $user = Auth::User();
    ?>
    @if($user->hasRole("admin"))
    <a href="{{route('admin-home')}}" class="home-btn login-btn" id="login-btn">
        <div class="icon__menu">

            <span class="slide_text">Dashoboard</span>

        </div>
    </a>
    @elseif($user->hasRole("resto_owner"))
    <a href="{{route('resto-home')}}" class="home-btn login-btn" id="login-btn">
        <div class="icon__menu">

            <span class="slide_text">Dashoboard</span>

        </div>
    </a>
    @endif
</div>
@endif
<section class="home_cont" id="div1" @if($login_page)style="display: none;" @endif>
         <div class="home_cont_wrapper">
        <h1 class="home_logo">
            <a href="{{route('home')}}">
                <img src="{{url('frontend/images/logo.png')}}" alt="logo">
            </a>
        </h1>
        <div class="order_btn text-center">
            <a href="#" class="btn order_here">Order Here</a>
        </div>
        <div class="home_seacrh">
            <input type="text" class="form-control" value="" placeholder="Or Enter address Manually">
        </div>
        <div class="home_social_sectoin text-center">
            <ul class="social_list">
                <li>
                    <a href="#"><i><i class="fa fa-facebook fa-lg"></i></i></a>
                    <span class="feedback_counter">100+</span>
                </li>
                <li>
                    <a href="#"><i><i class="fa fa-twitter fa-lg"></i></i></a>
                    <span class="feedback_counter">100k  followers</span>
                </li>
                <li>
                    <a href="#"><i><i class="fa fa-google-plus fa-lg"></i></i></a>
                    <span class="feedback_counter">100+</span>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="default_cont right_slide_holder" id="div2" @if(!$login_page)style="display: none;" @endif>
         <div class="btn_container clearfix">
        <a href="#" class="home-btn back-btn" id="login-btn">
            <div class="icon__menu" id="icon_menu_back">
                <div class="slide_icon login-icon"></div>
                <span class="slide_text">Back</span>
            </div>
        </a>
    </div>
    <div class="login_page slide_cont pattern-bg-1">
        <h1 class="home_logo">
            <a href="{{route('home')}}">
                <img src="{{url('frontend/images/logo.png')}}" alt="logo">
            </a>
        </h1>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    @if (Session::get('error'))
                    <div class="alert alert-danger">
                        <button class="close" data-close="alert"></button>
                        <span>{{{ Session::get('error') }}}</span>
                    </div>
                    @endif
                </div>
                <div class="col-md-4 col-md-offset-4">
                    @if (Session::get('notice'))
                    <div class="alert">
                        <button class="close" data-close="alert"></button>
                        <span>{{{ Session::get('notice') }}}</span>
                    </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form class="login-form" action="{{{ URL::to('/users/login') }}}" method="post">
                                <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control placeholder-no-fix" tabindex="1"  autocomplete="off" placeholder="{{{ Lang::get('confide::confide.username_e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control placeholder-no-fix"  tabindex="2"  type="password" autocomplete="off" placeholder="{{{ Lang::get('confide::confide.password') }}}"  name="password" id="password"/>
                                    </div>   
                                    <button type="submit" tabindex="3" class="btn btn-lg btn-success btn-block">
                                        {{{ Lang::get('confide::confide.login.submit') }}}<i class="m-icon-swapright m-icon-white"></i>
                                    </button>
                                    <div class="checkbox">
                                        <label>
                                            <input type="hidden" name="remember" value="0">
                                            <input tabindex="4" type="checkbox" name="remember" id="remember" value="1">
                                            {{{ Lang::get('confide::confide.login.remember') }}} 
                                        </label>
                                        <a class="forgot pull-right" href="{{route('forgot-password')}}">Register / Lost password?</a>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
@section('page_level_js')
@parent
@if($login_page)
{{ HTML::script('frontend/js/pages/login.js') }}
@else
{{ HTML::script('frontend/js/pages/home.js') }}
@endif
@stop
@section('document_ready')
<script>
    jQuery(document).ready(function() {


    });
</script>
@show