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
            <li class="start @if($__controller == 'AdminDashboardController')active open @endif">
                <a href="{{route('admin-home')}}">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>  
                    @if($__controller == 'AdminDashboardController') <span class="selected"></span> @endif
                </a>
            </li>
            <li class="@if($__controller == 'AdminRestaurantController')active open @endif">
                <a href="{{route('admin.restaurant.index')}}">
                    <i class="fa fa-cutlery"></i>
                    <span class="title">Restaurant</span>
                    @if($__controller == 'AdminRestaurantController') <span class="selected"></span> @endif
                </a>
            </li>
            <li class="@if($__controller == 'AdminMenucategoryController')active open @endif">
                <a href="{{route('admin.menucategory.index')}}">
                    <i class="fa fa-tree"></i>
                    <span class="title">Menu Category</span>
                    @if($__controller == 'AdminMenucategoryController') <span class="selected"></span> @endif
                </a>
            </li>
            <li class="@if($__controller == 'AdminUserController')active open @endif">
                <a href="{{route('admin.user.index')}}">
                    <i class="fa fa-users"></i>
                    <span class="title">Users</span>
                    @if($__controller == 'AdminUserController') <span class="selected"></span> @endif
                </a>
            </li>
            <!--            <li>-->
<!--            <li class="@if($__controller == 'AdminMenucategoryController')active open @endif">
                <a href="{{route('admin.menu-category.index')}}">
                    <i class="fa fa-tree"></i>
                    <span class="title">Manage Category</span>
                    @if($__controller == 'AdminMenucategoryController') <span class="selected"></span> @endif
                </a>
            </li>
            <li>-->
                <!--                <a href="#">
                                    <i class="icon-users"></i>
                                    <span class="title">Users</span>
                                    <span class="arrow "></span>
                                </a>-->
                <!--                <ul class="sub-menu">
                                    <li>
                                        <a href="login.html">
                                            Login Form 1</a>
                                    </li>
                                    <li>
                                        <a href="login_soft.html">
                                            Login Form 2</a>
                                    </li>
                                </ul>-->
<!--            </li>-->
            <!--            <li>
                            <a href="#">
                                <i class="fa fa-building-o"></i>
                                <span class="title">SEO</span>
                            </a>
                        </li>            
                        <li>
                            <a href="#">
                                <i class="fa fa-code-fork"></i>
                                <span class="title">Lesson Category</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-bulb"></i>
                                <span class="title">Manage News</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-call-in"></i>
                                <span class="title">Contact Us</span>
                            </a>
                        </li>            
            
                        <li>
                            <a href="#">
                                <i class="fa fa-file-word-o"></i>
                                <span class="title">Manage CMS</span>
                            </a>
                        </li>            
                        <li>
                            <a href="#">
                                <i class="fa fa-file-word-o"></i>
                                <span class="title">Newsletter Subscriber</span>
                            </a>
                        </li>            
                        <li>
                            <a href="#">
                                <i class="fa fa-file-word-o"></i>
                                <span class="title">Blog Category</span>
                            </a>
                        </li> 
                        <li>
                            <a href="javascript:;">
                                <i class="icon-users"></i>
                                <span class="title">Forum</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Category</a>
                                </li>
                                <li>
                                    <a href="#">Forum Name</a>
                                </li>
                            </ul>
                        </li>-->
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>