@section('content')
@if(Session::has('message'))	  
{{ Session::get('message') }}
@endif	
<div class="row">
    <div class="col-md-12">
        <div class="portlet box {{$_theme['portlet_colour']}} ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-edit"></i> User
                </div>
            </div>
            <div class="portlet-body form">
                {{ Form::open(['route' => 'admin.user.store','class'=>"form-horizontal ajax-submit",'role'=>"form"]) }}
                <div class="form-body">
                    <div class="form-group required {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label">Name</label>
                        <div class="col-md-9">
                            {{ Form::text('name', null, array('class' => 'form-control','placeholder'=>"Name")) }}
                            <span class="msg">{{ $errors->first('name', '<span class="help-inline">:message</span>') }}</span>
                        </div>
                    </div>
                    <div class="form-group required {{ $errors->has('username') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label">Username</label>
                        <div class="col-md-9">
                            {{ Form::text('username', null, array('class' => 'form-control','placeholder'=>"Username")) }}
                            <span class="msg">{{ $errors->first('username', '<span class="help-inline">:message</span>') }}</span>
                        </div>
                    </div>
                    <div class="form-group required {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label">Email</label>
                        <div class="col-md-9">
                            {{ Form::text('email', null, array('class' => 'form-control','placeholder'=>"Email")) }}
                            <span class="msg">{{ $errors->first('email', '<span class="help-inline">:message</span>') }}</span>
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label">Phone</label>
                        <div class="col-md-9">
                            {{ Form::text('phone', null, array('class' => 'form-control','placeholder'=>"Phone")) }}
                            <span class="msg">{{ $errors->first('phone', '<span class="help-inline">:message</span>') }}</span>
                        </div>
                    </div>                     
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn {{$_theme['save_btn_colour']}}">Save</button>
                            <a href="{{route('admin.user.index')}}" type="button" class="btn {{$_theme['cancel_btn_colour']}}">Cancel</a>
                        </div>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@stop