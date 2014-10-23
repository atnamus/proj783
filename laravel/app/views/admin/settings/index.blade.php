@section('content')
<style>
    .reason{
        width: 277px;
        height: 254px;
    }
    p {
        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
        font-size: 13px;
        line-height: 18px;
        margin: 0 0 9px;
    }
    .label {
        background-color: #999999;
        border-radius: 3px 3px 3px 3px;
        color: #FFFFFF;
        font-size: 11.05px;
        font-weight: bold;
        padding: 2px 4px 3px;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    }

    .label {
        padding: 1px 4px 3px;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }
    .label-success {
        background-color: #468847;
    }
    .label-warning {
        background-color: #F89406;
    }
    .label-important {
        background-color: #B94A48;
    }
    .label-info {
        background-color: #3A87AD;
    }
    .sub_title{
        margin: 5px 0 0 170px;
        font-family: Arial, Helvetica, sans-serif!important;
        line-height: 1.231;
        text-rendering: optimizeLegibility;
        display: block;
        font-weight: normal;
        font-style: italic;
        font-size: 12px;
        color: #aaa;
    }
    label {
        width: 23% !important;
    }
    .form_default2 fieldset label{
        font-family: Arial, Helvetica, sans-serif;
        line-height: 1.231;
        text-rendering: optimizeLegibility;
        font-size: 100%;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
    }
    .form_default2 label {
        width: 250px;
    }
    .form_default2 fieldset{
        width: auto;
        padding: 25px;
        margin: 5px 0 15px 0;
        border: 0px solid #eeeeee;

        display: block;
        -webkit-margin-start: 2px;
        -webkit-margin-end: 2px;
        -webkit-padding-before: 0.35em;
        -webkit-padding-start: 0.75em;
        -webkit-padding-end: 0.75em;
        -webkit-padding-after: 0.625em;
    }
    .form_default2 fieldset > ul, .form_default2 > ul {
        width: 100%;
        list-style: disc;
        display: block;
        -webkit-margin-before: 1em;
        -webkit-margin-after: 1em;
        -webkit-margin-start: 0px;
        -webkit-margin-end: 0px;
        -webkit-padding-start: 0px;
    }
    .form_default2 ul > li{
        float: left;
        width: 100%;
        border-bottom: 1px solid #efefef;
        padding-bottom: 10px;
        margin-bottom: 10px;
        line-height: 15px;
        color: #808080;
        isplay: list-item;
        list-style: none;
        text-align: -webkit-match-parent;
    }
    .form_default2 ul>li>label{
        width: 35%!important;
        float: left;
        cursor: pointer;
        font-size: 12px;
        font-weight: bold;
    }
    .form_default2 label small {
        margin-left: 0;
        margin-bottom: 0;
        display: block;
        font-weight: normal;
        font-style: italic;
        font-size: 11px;
        color: #aaa;
    }
    .form_default2 .input {
        float: left!important;
        padding-left: 10px;
        width: 59%;
    }
    .form_default2 .input > input {
        min-width: 210px!important;
        color: #666;
    }
    .form_default2 fieldset > ul > li > label, .form_default2 fieldset > ul > div > li > label, .form_default2 > ul > div > li > label, .form_default2 > ul > li > label, .form_default2 fieldset > ul > li .label,
    .form_default2 > ul > li .label {
        float: left;
        text-align: left;
        margin: 0 3% 0 0;
        padding: 8px;
    }
    .form_default2 input[type="text"], input[type="password"], input[type="file"], textarea {
        background: #f1f1f1;
        padding: 8px;
        border: 1px solid #d9d9d9;
        border-radius: 5px;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
    }
    .form_default2 button, input, select, textarea {
        font-size: 100%;
        margin: 0;
        vertical-align: baseline;
        margin: 5px 0 5px 0;
        outline: none;
    }

    .form_default2 input, textarea, keygen, select, button, isindex, meter, progress {
        -webkit-writing-mode: horizontal-tb;
    }
    label.inline {
        margin-right: 4px;
        font-weight: normal!important;
        display: inline;
        width: auto!important;
        margin-right: 8px;
    }

    input[type="radio"] {
        -webkit-appearance: radio;
        box-sizing: border-box;
    }
    div.type-checkbox label {
        text-align: left;
        font-weight: normal;
        width: auto!important;
        margin-right: 8px !important;
    }
    select{
        background-color: rgb(255, 255, 255);
        border-bottom-color: rgb(51, 51, 51);
        border-bottom-left-radius: 0px;
        border-bottom-right-radius: 0px;
        border-bottom-style: solid;
        border-bottom-width: 1px;
        border-left-color: rgb(51, 51, 51);
        border-left-style: solid;
        border-left-width: 1px;
        border-right-color: rgb(51, 51, 51);
        border-right-style: solid;
        border-right-width: 1px;
        border-top-color: rgb(51, 51, 51);
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
        border-top-style: solid;
        border-top-width: 1px;
        box-sizing: border-box;
        color: rgb(51, 51, 51);
        cursor: default;
        display: none;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 13px;
        height: auto;
        letter-spacing: normal;
        line-height: normal;
        list-style-image: none;
        list-style-position: outside;
        list-style-type: none;
        margin-bottom: 5px;
        margin-left: 0px;
        margin-right: 0px;
        margin-top: 5px;
        min-width: 260px;
        outline-color: rgb(51, 51, 51);
        outline-style: none;
        outline-width: 0px;
        text-align: start;
        text-indent: 0px;
        text-rendering: optimizelegibility;
        text-shadow: none;
        text-transform: none;
        vertical-align: baseline;
        visibility: hidden;
        white-space: pre;
        width: auto;
        word-spacing: 0px;
        writing-mode: lr-tb;
    }
    .show_slug{}
    .show_slug input[type="text"]{
        background-color: #ffffcc;
        width: 250px;
        padding: 2px;
        border: 1px solid #d9d9d9;
        border-radius: inherit!important;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
    }
</style>
<div class="tabbable-custom ">
    <ul class="nav nav-tabs ">
        <?php
        $selected_tab = $tab - 1;
        foreach (array_keys($modules) as $index => $module_name) {
            $class = ($selected_tab == $index) ? 'active' : '';
            ?>
            <li class="<?php echo $class; ?>">
                <a href="#tab_s_<?php echo $index; ?>" data-toggle="tab"><?php echo $module_name ?></a>
            </li>
        <?php } ?>
    </ul>
    <div class="tab-content">
        <?php
        $count = 0;
        foreach ($modules as $module_name => $module) {
            $class = ($selected_tab == $count) ? 'active' : '';
            ?>
            <div class="tab-pane <?php echo $class; ?>" id="tab_s_<?php echo $count; ?>">
                {{ Form::open(['url' => route('admin.settings.update',$module_name),'class'=>"ajax-submit",'role'=>"form",'method'=>'put','id'=>$module_name]) }}
                <div class="form_default2">
                    <fieldset>
                        <ul class="ui-sortable">
                            <?php
                            $html = '';
                            //'text','textarea','password','select','select-multiple','radio','checkbox'
                            foreach ($module as $settings) {
                                $html .= "<li id=\"$settings->slug\">";
                                $html .= "<label for='{$settings->slug}'>{$settings->title}<small>{$settings->description}</small></label>";
                                if (Input::get('debug')) {
                                    $show_slug = '<br/><span class="show_slug"><input type="text" value="SiteSettings::get(\'' . $settings->slug . '\')"/></span>&nbsp;&nbsp;&nbsp;<a href="' . route("admin.settings.edit", $settings->slug) . '">Edit</a>';
                                } else {
                                    $show_slug = '';
                                }
                                switch ($settings->type) {
                                    case 'text':
                                        $html .="<div class=\"input type-{$settings->type}\">";
                                        $html .= "<input type=\"text\" class=\"form-control\" id=\"{$settings->slug}\" name=\"settings[{$settings->slug}]\" value=\"{$settings->value}\">";
                                        $html .=$show_slug;
                                        $html .="</div>";
                                        break;
                                    case 'textarea':
                                        $html .="<div class=\"input type-{$settings->type}\">";
                                        // $html .= "<div class = \"widgetbox inlineblock\">";
                                        // $html .= "<h3><span>Editor</span></h3>";
                                        //  $html .= "<div class = \"content nopadding\">";
                                        $html .= "<textarea rows = \"10\" cols = \"90\" style=\"width:auto;\" name = \"settings[{$settings->slug}]\" id = \"{$settings->slug}\">{$settings->value}</textarea>";
                                        $html .=$show_slug;
                                        $html .="</div>";
                                        break;
                                    case 'password':
                                        $html .="<div class=\"input type-{$settings->type}\">";
                                        $html .= "<input type=\"password\" class=\"form-control\" id=\"{$settings->slug}\" name=\"settings[{$settings->slug}]\" value=\"{$settings->value}\">";
                                        $html .=$show_slug;
                                        $html .="</div>";
                                        break;
                                    case 'select':
                                        $html .="<div class=\"input type-{$settings->type}\">";
                                        $html .= Form::select("settings[$settings->slug]", $settings->options, $settings->value, ["id" => $settings->slug, "class" => "form-control input-large select2me"]);
                                        $html .=$show_slug;
                                        $html .="</div>";
                                        break;
                                    case 'select-multiple':
                                        $html .="<div class=\"input type-{$settings->type}\">";
                                        $html .= Form::select("settings[$settings->slug]", $settings->options, $settings->value, ["id" => $settings->slug, "class" => "form-control input-large select2me"]);
                                        $html .=$show_slug;
                                        $html .="</div>";
                                        break;
                                    case 'radio':
                                        $html .="<div class=\"input type-{$settings->type}\">";
                                        foreach ($settings->options as $k2 => $v2) {
                                            $checked = $k2 == $settings->value ? "checked=\checked\"" : "";
                                            $html .="<label class=\"inline\">";
                                            $html .="<input type=\"radio\" name=\"settings[$settings->slug]\" value=\"{$k2}\" {$checked}>&nbsp;{$v2}";
                                            $html .="</label>";
                                        }
                                        $html .=$show_slug;
                                        $html .="</div>";
                                        break;
                                    case 'checkbox':
                                        $html .="<div class=\"input type-{$settings->type}\">";
                                        foreach ($settings->options as $k2 => $v2) {
                                            $checked = in_array($k2, explode("|", $settings->value)) ? "checked=\checked\"" : "";
                                            $html .="<label class=\"inline\">";
                                            $html .="<input type=\"checkbox\" name=\"settings[$settings->slug]\" value=\"{$k2}\" {$checked}>&nbsp;{$v2}";
                                            $html .="</label>";
                                        }
                                        $html .=$show_slug;
                                        $html .="</div>";
                                        break;
                                    default : $html .="<div class=\"input type-{$settings->type}\">";
                                        $html .="<label class=\"inline\">";
                                        $html .="$settings->value";
                                        $html .="</label>";
                                        $html .=$show_slug;
                                        $html .="</div>";
                                }
                                $html .='</li>';
                            }
                            echo $html;
                            ?>
                        </ul>
                        <input type="hidden" value="<?php echo $module_name ?>" name="save_module_settings"/>
                        <input type="hidden" value="<?php echo $tab++; ?>" name="tab"/>
                        <?php
                        if ($module_name !== 'System') {
                            ?>
                            <p>
                                <button class="btn green"><i class="fa fa-check"></i> Save</button>

                            </p>
                        <?php } ?>
                    </fieldset>
                </div>
                {{ Form::close() }}
            </div>
            <?php
            $count++;
        }
        ?>                
    </div>
</div>
@stop

@section('plugin_level_css')
{{ HTML::style('backend/assets/global/plugins/select2/select2.css')}}
@stop
@section('plugin_level_js')
{{ HTML::script('backend/assets/global/plugins/select2/select2.min.js')}}
@stop