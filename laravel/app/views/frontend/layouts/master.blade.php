<!DOCTYPE html>
<!--[if IE 7]>					<html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if IE 9]>					<html class="ie9 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
    <html lang="en">
        <!--<![endif]-->
        <!-- BEGIN HEAD -->
        <head>
            <meta charset="utf-8"/>
            <title>{{{@$_page_title}}}</title>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
            <meta content="" name="description"/>
            <meta content="" name="author"/>
            <!-- BEGIN GLOBAL MANDATORY STYLES -->
            {{ HTML::style('frontend/css/bootstrap.css')}}
            {{ HTML::style('frontend/css/style.css')}}
            {{ HTML::style('frontend/css/responsive.css')}}
            {{ HTML::style('frontend/css/font-awesome.css')}}
            <!-- END THEME STYLES -->
            <link rel="shortcut icon" href="{{ url('favicon.ico') }}"/>
        </head>
        <body class="{{$body_class}}">
            @yield('main_content')  
            <!-- START CORE PLUGINS -->
            {{ HTML::script('frontend/js/jquery-1.11.1.min.js')}}
            {{ HTML::script('frontend/js/bootstrap.min.js')}}
            <!-- END CORE PLUGINS -->
            <!-- BEGIN PAGE LEVEL PLUGINS -->
            @section('plugin_level_js')
            {{-- load any plugin related js file from view page  --}}
            @show
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN PAGE LEVEL SCRIPTS -->
            @section('page_level_js')
            {{ HTML::script('frontend/js/common.js')}}
            @show
            <!-- END PAGE LEVEL SCRIPTS -->           
            @section('inline_script')
            @show        
            <!-- END JAVASCRIPTS -->
        </body>
        <!-- END BODY -->
    </html>