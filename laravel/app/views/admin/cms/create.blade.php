@section('content')
@if(Session::has('message'))	  
{{ Session::get('message') }}
@endif	
<div class="row">
    <div class="col-md-12">
        <div class="portlet box {{$_theme['portlet_colour']}} ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-edit"></i> Restaurant
                </div>
            </div>
            <div class="portlet-body form">
                {{ Form::open(['route' => 'admin.restaurant.index','class'=>"form-horizontal",'role'=>"form"]) }}
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
                    <div class="form-group {{ $errors->has('restaurant_name') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label">Restaurant Name</label>
                        <div class="col-md-9">
                            {{ Form::text('restaurant_name', null, array('class' => 'form-control','placeholder'=>"Restaurant Name")) }}
                            {{ $errors->first('restaurant_name', '<span class="help-inline">:message</span>') }}
                        </div>
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
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@stop