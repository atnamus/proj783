@section('content')
@if(Session::has('message'))
{{ Session::get('message') }}
@endif
<div class="row">
    <div class="col-md-12">
        <div class="portlet box {{$_theme['portlet_colour']}} ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-edit"></i> User Edit
                </div>
            </div>
            <div class="portlet-body form">
                {{ Form::model($model,['url' => route('admin.user.update',$model->id),'class'=>"form-horizontal aja-submit",'role'=>"form",'method'=>'put']) }}
                <div class="form-body">
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label">User Full Name</label>
                        <div class="col-md-9">
                            {{ Form::text('name', null, array('class' => 'form-control','placeholder'=>"User Full Name")) }}
                            {{ $errors->first('name', '<span class="help-inline">:message</span>') }}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label">Username</label>
                        <div class="col-md-9">
                            {{ Form::text('username', null, array('class' => 'form-control','placeholder'=>"Username")) }}
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
                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label">Password</label>
                        <div class="col-md-9">
                            {{ Form::text('password', null, array('class' => 'form-control','placeholder'=>"Password")) }}
                            {{ $errors->first('password', '<span class="help-inline">:message</span>') }}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label">Phone</label>
                        <div class="col-md-9">
                            {{ Form::text('phone', null, array('class' => 'form-control','placeholder'=>"Phone")) }}
                            {{ $errors->first('phone', '<span class="help-inline">:message</span>') }}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label">Address</label>
                        <div class="col-md-9">
                            {{ Form::textarea('address', null, array('class' => 'form-control','placeholder'=>"Address",'rows'=>3))}}
                            {{ $errors->first('address', '<span class="help-inline">:message</span>') }}
                        </div>
                    </div>
                    @if($model->id !=Auth::id())
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
                    <div class="form-group {{ $errors->has('role') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label">Role</label>
                        <div class="col-md-9">
                            {{ Form::select('role',Role::lists('name','id'),$model->role->id, array('class' => 'form-control input-large select2me'))}}
                            {{ $errors->first('role', '<span class="help-inline">:message</span>') }}
                        </div>
                    </div>
                    @endif
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn {{$_theme['save_btn_colour']}}">Save</button>
                                <a href="{{route('admin.user.index')}}" type="button" class="btn {{$_theme['cancel_btn_colour']}}">Cancel</a>
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