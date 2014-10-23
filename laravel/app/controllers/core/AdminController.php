<?php

class AdminController extends BaseController {

    protected $layout = 'admin::layouts.default';
    public $_theme = [
        'portlet_colour' => 'yellow',
        'save_btn_colour' => 'blue',
        'cancel_btn_colour' => 'default',
    ];
    public $data = [];

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    function __construct() {
        $this->item_per_page = 10;
        breadCrumb::add('Dashboard', route('admin-home'));
        $this->ajax_area = 'admin';
        $this->view_namespace = 'admin';
    }

    public function gii($table) {
        $t = DB::select('DESCRIBE site_' . $table);
        foreach ($t as $i => $c) {
            if ($c->Field == 'id' || $c->Field == 'created_at' || $c->Field == 'updated_at' || $c->Field == 'deleted_at') {
                unset($t[$i]);
            } else {
                //preg_match('/^enum\((.*)\)$/', $type, $matches);
                $type = explode("(", $c->Type);
                $c->Type = $type[0];
                $c->length = isset($type[1]) ? rtrim($type[1], ")") : '';
            }
            switch ($c->Type) {
                case 'varchar':
                    ?>
                    <div class="form-group {{ $errors->has('<?php echo $c->Field ?>') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label"><?php echo ucwords(str_replace("_", " ", $c->Field)) ?></label>
                        <div class="col-md-9">
                            {{ Form::text('<?php echo $c->Field ?>', null, array('class' => 'form-control','placeholder'=>"<?php echo ucwords(str_replace("_", " ", $c->Field)) ?>")) }}
                            {{ $errors->first('<?php echo $c->Field ?>', '<span class="help-inline">:message</span>') }}
                        </div>
                    </div>
                    <?php
                    break;
                case 'text':
                    ?>
                    <div class="form-group {{ $errors->has('<?php echo $c->Field ?>') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label"><?php echo ucwords(str_replace("_", " ", $c->Field)) ?></label>
                        <div class="col-md-9">
                            {{ Form::textarea('<?php echo $c->Field ?>', null, array('class' => 'form-control','placeholder'=>"<?php echo ucwords(str_replace("_", " ", $c->Field)) ?>",'rows'=>3))}}
                            {{ $errors->first('<?php echo $c->Field ?>', '<span class="help-inline">:message</span>') }}
                        </div>
                    </div>
                    <?php
                    break;
                case 'tinyint':
                    if ($c->Field == 'status') {
                        ?>
                        <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
                            <label class="col-md-3 control-label">Status</label>
                            <div class="col-md-9 radio-list">
                                <label class="radio-inline">
                                    {{ Form::radio('status',1, true, ['class' => 'field','id'=>'status_active']) }} Active
                                </label>
                                <label class="radio-inline">
                                    {{ Form::radio('status',0, true, ['class' => 'field','id'=>'status_inactive']) }} In Active
                                </label>
                                {{ $errors->first('status', '<span class="help-inline">:message</span>') }}
                            </div>
                        </div>                        
                        <?php
                    } else {
                        ?>
                        <div class="form-group {{ $errors->has('<?php echo $c->Field ?>') ? 'has-error' : '' }}">
                            <label class="col-md-3 control-label"><?php echo ucwords(str_replace("_", " ", $c->Field)) ?></label>
                            <div class="col-md-9">
                                {{ Form::text('<?php echo $c->Field ?>', null, array('class' => 'form-control','placeholder'=>"<?php echo ucwords(str_replace("_", " ", $c->Field)) ?>")) }}
                                {{ $errors->first('<?php echo $c->Field ?>', '<span class="help-inline">:message</span>') }}
                            </div>
                        </div>
                        <?php
                    }
            }
        }
        exit;
    }

}
