@section('content')
<section class="default_cont" id="div2">
    <div class="login_page pattern-bg-1">
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
                        <span>{{{ Session::get('error') }}}</span>
                    </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form method="POST" action="{{route('reset-password')}}" accept-charset="UTF-8">
                                <input type="hidden" name="token" value="{{{ $token }}}">
                                <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control placeholder-no-fix" tabindex="1"  autocomplete="off" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password" value="">
                                    </div>  
                                    <div class="form-group">
                                        <input class="form-control placeholder-no-fix" tabindex="1"  autocomplete="off" placeholder="{{{ Lang::get('confide::confide.password_confirmation') }}}" type="password" name="password_confirmation" id="password_confirmation" value="">
                                    </div>  
                                    <button type="submit" tabindex="3" class="btn btn-lg btn-success btn-block">
                                        {{{ Lang::get('global.submit') }}}<i class="m-icon-swapright m-icon-white"></i>
                                    </button>
                                    <div class="checkbox">
                                        <a class="forgot" href="{{route('login')}}">Back to login</a>
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