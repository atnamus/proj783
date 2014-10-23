@section('content')
<?php
$errors->has('password') ? $active_tab = 'tab_password' : '';
$errors->has('confirm_password') ? $active_tab = 'tab_password' : '';

?>
<div class="row">
    <div class="col-md-12">
        <div class="portlet box {{$_theme['portlet_colour']}} ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-edit"></i> My Account
                </div>
            </div>
            <div class="portlet-body ">
                <ul class="nav nav-tabs">
                    <li class="@if($active_tab=='tab_account')active @endif">
                        <a href="#tab_account" data-toggle="tab">Account</a>
                    </li>
                    <li class="@if($active_tab=='tab_password')active @endif">
                        <a href="#tab_password" data-toggle="tab">Password </a>
                    </li>
                </ul>
                <div class="tab-content form">
                    <div class="tab-pane @if($active_tab=='tab_account')active in @endif" id="tab_account">                       

                        {{ Form::model($model,['route' => 'update-admin-profile','class'=>"form-horizontal",'role'=>"form"]) }}
                        <input type="hidden" name='tab' value="tab_account">
                        <div class="form-body">
                            <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
                                <label class="col-md-3 control-label">User name</label>
                                <div class="col-md-9">
                                    {{ Form::text('username', null, array('class' => 'form-control','placeholder'=>"User Name")) }}
                                    {{ $errors->first('username', '<span class="help-inline">:message</span>') }}
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                <label class="col-md-3 control-label">Email</label>                                
                                <div class="col-md-9">
                                    {{ Form::text('email', null, array('class' => 'form-control','placeholder'=>"Email")) }}
                                    {{ $errors->first('email', '<span class="help-inline">:message</span>') }}
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn {{$_theme['save_btn_colour']}}">Save</button>
                                        <a href="{{route('admin-home')}}" type="button" class="btn {{$_theme['cancel_btn_colour']}}">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{ Form::close() }}

                    </div>       
                    <div class="tab-pane @if($active_tab =='tab_password') active in @endif" id="tab_password">
                        {{ Form::model($model,['route' => 'update-admin-profile','class'=>"form-horizontal",'role'=>"form"]) }}
                        <input type="hidden" name='tab' value="tab_password">
                        <div class="form-body">                       
                            <div class="form-group {{ $errors->has('confirm_password') ? 'has-error' : '' }}">
                                <label class="col-md-3 control-label">New Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password" id="Password" placeholder="Password">
                                    {{ $errors->first('password', '<span class="help-inline">:message</span>') }}
                                </div>
                            </div>                        
                            <div class="form-group {{ $errors->has('confirm_password') ? 'has-error' : '' }}">
                                <label class="col-md-3 control-label">Confirm Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="confirm_password" id="ConfirmPassword" placeholder="Confirm Password">
                                    {{ $errors->first('confirm_password', '<span class="help-inline">:message</span>') }}
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn {{$_theme['save_btn_colour']}}">Save</button>
                                        <a href="{{route('admin-home')}}" type="button" class="btn {{$_theme['cancel_btn_colour']}}">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop