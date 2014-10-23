<?php
$__controller = SiteHelpers::getControllerName();
?>
<div class="page-header-inner">
    <!-- BEGIN LOGO -->
    <div class="page-logo">
        <a href="{{route('resto-home')}}">
            <img src="{{ asset('/backend/assets/images/logo-big.png') }}" alt="logo" class="logo-default" width="170" style="margin: 5px 0 0 0;"/>
        </a>
        <div class="menu-toggler sidebar-toggler hide">
            <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
        </div>
    </div>
    <!-- END LOGO -->
    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
    </a>
    <!-- END RESPONSIVE MENU TOGGLER -->
    <!-- BEGIN TOP NAVIGATION MENU -->
    <div class="top-menu">
        <ul class="nav navbar-nav pull-right"> 
            <li>
                <a href="{{route('home')}}" >
                    <span class="username username-hide-on-mobile">Visit Site</span>
                </a>
            </li>
            <!-- BEGIN USER LOGIN DROPDOWN -->
            <li class="dropdown dropdown-user">                
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <img alt="" class="img-circle" src="{{ asset('/backend/assets/admin/layout/img/default_admin_img.png') }}"/>
                    <span class="username username-hide-on-mobile">{{Auth::user()->username}}</span>
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{route('resto-profile')}}">
                            <i class="icon-user"></i> My Profile </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="{{url('users/logout')}}">
                            <i class="icon-key"></i> Log Out </a>
                    </li>
                </ul>
            </li>
            <!-- END USER LOGIN DROPDOWN -->
        </ul>
    </div>
    <!-- END TOP NAVIGATION MENU -->
</div>