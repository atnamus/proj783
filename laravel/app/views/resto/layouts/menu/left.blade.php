<?php
$__controller = SiteHelpers::getControllerName();
?>
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <li class="sidebar-toggler-wrapper">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler">
                </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            <li class="divider"><br/></li>
            <li class="start @if($__controller == 'RestoDashboardController')active open @endif">
                <a href="{{route('resto-home')}}">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>  
                    @if($__controller == 'RestoDashboardController') <span class="selected"></span> @endif
                </a>
            </li>
            <li class="@if($__controller == 'RestoRestaurantController')active open @endif">
                <a href="{{route('my-restaurant')}}">
                    <i class="fa fa-cutlery"></i>
                    <span class="title">Restaurant</span>
                    @if($__controller == 'RestoRestaurantController') <span class="selected"></span> @endif
                </a>
            </li>
            <li class="@if($__controller == 'RestoMenuController')active open @endif">
                <a href="{{route('resto.menu.index')}}">
                    <i class="fa fa-cutlery"></i>
                    <span class="title">Menu</span>
                    @if($__controller == 'RestoMenuController') <span class="selected"></span> @endif
                </a>
            </li>
<!--            <li class="@if($__controller == 'RestoUserController')active open @endif">
                <a href="{{route('resto.user.index')}}">
                    <i class="fa fa-users"></i>
                    <span class="title">Users</span>
                    @if($__controller == 'RestoUserController') <span class="selected"></span> @endif
                </a>
            </li>-->
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>