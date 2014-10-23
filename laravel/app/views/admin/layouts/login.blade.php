@extends('admin::layouts.master')

@section('page_level_js')
@parent
{{ HTML::script('backend/assets/admin/pages/scripts/login.js')}}
@stop

@if ($body_class = 'login') @endif
@section('main_content')
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="index.html">
        <img src="{{url('backend/assets/admin/layout/img/logo-big.png')}}" alt=""/>
    </a>
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content">
    @yield('content')                  
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
@stop
@section('document_ready')
Login.init();
@stop