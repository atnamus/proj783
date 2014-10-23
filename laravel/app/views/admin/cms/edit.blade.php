@section('content')
@if(Session::has('message'))
{{ Session::get('message') }}
@endif
<div class="row">
    <div class="col-md-12">
        <div class="portlet box {{$_theme['portlet_colour']}} ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-edit"></i> Restaurant Edit
                </div>
            </div>
            <div class="portlet-body form">
                {{ Form::model($model,['url' => route('admin.restaurant.index')."/".$model->id,'class'=>"form-horizontal",'role'=>"form",'method'=>'put']) }}
                <div class="form-body">
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label">Restaurant name</label>
                        <div class="col-md-9">
                            {{ Form::text('name', null, array('class' => 'form-control','placeholder'=>"Restaurant name")) }}
                            {{ $errors->first('name', '<span class="help-inline">:message</span>') }}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label">Address</label>
                        <div class="col-md-9">
                            {{ Form::textarea('address', null, array('class' => 'form-control','placeholder'=>"Address",'rows'=>3)) }}
                            {{ $errors->first('address', '<span class="help-inline">:message</span>') }}
                        </div>
                    </div>
                       <div class="form-group {{ $errors->has('latitude') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label">Latitude</label>
                        <div class="col-md-9">
                            {{ Form::text('latitude', null, array('class' => 'form-control','placeholder'=>"Latitude")) }}
                            {{ $errors->first('latitude', '<span class="help-inline">:message</span>') }}
                        </div>
                    </div>
                       <div class="form-group {{ $errors->has('longitude') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label">Longitude</label>
                        <div class="col-md-9">
                            {{ Form::text('longitude', null, array('class' => 'form-control','placeholder'=>"Longitude")) }}
                            {{ $errors->first('longitude', '<span class="help-inline">:message</span>') }}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label">Phone</label>
                        <div class="col-md-9">
                            {{ Form::text('phone', null, array('class' => 'form-control','placeholder'=>"Phone")) }}
                            {{ $errors->first('phone', '<span class="help-inline">:message</span>') }}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('backup_phone') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label">Backup Phone</label>
                        <div class="col-md-9">
                            {{ Form::text('backup_phone', null, array('class' => 'form-control','placeholder'=>"Backup Phone")) }}
                            {{ $errors->first('backup_phone', '<span class="help-inline">:message</span>') }}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('taxes') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label">Taxes(%)</label>
                        <div class="col-md-9">
                            {{ Form::text('taxes', null, array('class' => 'form-control','placeholder'=>"Taxes")) }}
                            {{ $errors->first('taxes', '<span class="help-inline">:message</span>') }}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('facebook') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label">Facebook Page Url</label>
                        <div class="col-md-9">
                            {{ Form::text('facebook', null, array('class' => 'form-control','placeholder'=>"Facebook Page Url")) }}
                            {{ $errors->first('facebook', '<span class="help-inline">:message</span>') }}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('twitter') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label">Twitter Page Url</label>
                        <div class="col-md-9">
                            {{ Form::text('twitter', null, array('class' => 'form-control','placeholder'=>"Twitter Page Url")) }}
                            {{ $errors->first('twitter', '<span class="help-inline">:message</span>') }}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('google_plus') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label">Google+ Page Url</label>
                        <div class="col-md-9">
                            {{ Form::text('google_plus', null, array('class' => 'form-control','placeholder'=>"Google+ Page Url")) }}
                            {{ $errors->first('google_plus', '<span class="help-inline">:message</span>') }}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('is_premium') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label">Is Premium</label>
                        <div class="col-md-9 radio-list">
                            <label class="radio-inline">
                                {{ Form::radio('is_premium',1, true, ['class' => 'field','id'=>'is_premium_yes']) }} Yes
                            </label>
                            <label class="radio-inline">
                                {{ Form::radio('is_premium',0, true, ['class' => 'field','id'=>'is_premium_no']) }} No
                            </label>
                            {{ $errors->first('status', '<span class="help-inline">:message</span>') }}
                        </div>
                        {{ $errors->first('is_premium', '<span class="help-inline">:message</span>') }}
                    </div>
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
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn {{$_theme['save_btn_colour']}}">Save</button>
                                <a href="{{route('admin.restaurant.index')}}" type="button" class="btn {{$_theme['cancel_btn_colour']}}">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@stop