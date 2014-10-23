@extends('resto::layouts.master')
@if ($body_class = 'page-header-fixed page-quick-sidebar-over-content') @endif
@section('main_content')
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    @include('resto::layouts.menu.top')
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix"></div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    @include('resto::layouts.menu.left')
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            Widget settings form goes here
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn blue">Save changes</button>
                            <button type="button" class="btn default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <!-- BEGIN STYLE CUSTOMIZER -->

            <!-- END STYLE CUSTOMIZER -->
            <!-- BEGIN PAGE HEADER-->
            <style>
                .page-breadcrumb li{
                    color: #666;
                    font-size: 14px;
                    text-shadow: none;
                }
            </style>
            <div class="page-bar">
                {{breadCrumb::generate()}}                    
            </div>
            <?php //$this->renderPartial('//message/index')  ?>
            <!-- END PAGE HEADER-->
            <div class="content">
                <div class="row" id="session_message">
                    @if(Session::has('message'))	  
                    {{ Session::get('message') }}
                    @endif
                </div>
                <div class="row" id="js_message"></div>
                @yield('content')                  
            </div>
        </div>
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->

@stop

@section('plugin_level_js')
@parent
{{ HTML::script('backend/assets/global/plugins/bootbox/bootbox.min.js')}}
@stop
@section('document_ready')

@stop