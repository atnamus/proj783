<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
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
        {{ HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all')}}
        {{ HTML::style('backend/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}
        {{ HTML::style('backend/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}
        {{ HTML::style('backend/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}
        {{ HTML::style('backend/assets/global/plugins/uniform/css/uniform.default.css')}}
        {{ HTML::style('backend/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}
        <!-- END GLOBAL MANDATORY STYLES -->

        <!-- BEGIN PAGE LEVEL STYLES -->
        @section('plugin_level_css')@show        
        {{ HTML::style('backend/assets/admin/pages/css/login.css')}}
        @section('page_level_css')@show

        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME STYLES -->
        {{ HTML::style('backend/assets/global/css/components.css')}}
        {{ HTML::style('backend/assets/global/css/plugins.css')}}
        {{ HTML::style('backend/assets/admin/layout/css/layout.css')}}
        <link id="style_color" href="{{ url('backend/assets/admin/layout/css/themes/default.css') }}" rel="stylesheet" type="text/css"/>
        {{ HTML::style('backend/assets/admin/layout/css/custom.css')}}
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="{{ url('favicon.ico') }}"/>
        <style>.form-group.required .control-label:after { 
                content:"*";
                color:red;
            }
        </style>  
        <script type="text/javascript">
            //<![CDATA[
            var _gks = {
                base_url: '{{URL::to("/")}}',
                assets_url: '{{URL::to("backend/assets")}}'
            };
            //   ]]>
        </script>
    </head>
    <body class="{{$body_class}}">
        @yield('main_content')
        <!-- For delete item this is hidden form for destroy method in controller-->
        <div style="display: none;">
            {{ Form::open(array('url' => '', 'method' => 'delete','id'=>'delete_item')) }}
            <button type="submit" class="btn btn-danger btn-mini">Delete</button>
            {{ Form::close() }}
        </div>
        <!--End destroy form-->
        <!-- BEGIN COPYRIGHT -->  
        @if($body_class=='login')
        <div class="copyright">
            <?php echo date("Y"); ?> &copy; Makananas.
        </div>
        @else
        <div class="page-footer">
            <div class="page-footer-inner">
                <?php echo date("Y"); ?> &copy;Makananas.
            </div>
            <div class="page-footer-tools">
                <span class="go-top">
                    <i class="fa fa-angle-up"></i>
                </span>
            </div>
        </div>  
        @endif
        <!-- END COPYRIGHT -->
        <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- BEGIN CORE PLUGINS -->
        <!--[if lt IE 9]>
        {{ HTML::script('backend/assets/global/plugins/respond.min.js')}}
        {{ HTML::script('backend/assets/global/plugins/excanvas.min.js')}}></script>
        <![endif]-->
        {{ HTML::script('backend/assets/global/plugins/jquery-1.11.0.min.js')}}
        {{ HTML::script('backend/assets/global/plugins/jquery-migrate-1.2.1.min.js')}}
        <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
        {{ HTML::script('backend/assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js')}}
        {{ HTML::script('backend/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}
        {{ HTML::script('backend/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}
        {{ HTML::script('backend/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}
        {{ HTML::script('backend/assets/global/plugins/jquery.blockui.min.js')}}
        {{ HTML::script('backend/assets/global/plugins/jquery.cokie.min.js')}}
        {{ HTML::script('backend/assets/global/plugins/uniform/jquery.uniform.min.js')}}
        {{ HTML::script('backend/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        {{ HTML::script('backend/assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}
        @section('plugin_level_js')@show
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        @section('page_level_js')
        {{ HTML::script('backend/assets/global/scripts/admin_core.js')}}
        {{ HTML::script('backend/assets/admin/layout/scripts/layout.js')}}
        {{ HTML::script('backend/assets/admin/layout/scripts/quick-sidebar.js')}}
        {{ HTML::script('backend/assets/admin/layout/scripts/gks_admin.js')}}
        @show
        <!-- END PAGE LEVEL SCRIPTS -->
        <script>
            jQuery(document).ready(function() {
                Metronic.init(); // init metronic core components
                Layout.init(); // init current layout
                QuickSidebar.init(); // init quick sidebar
                Admin.init();
                //Demo.init(); // init demo features                
            });
        </script>
        @section('inline_script')@show
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>