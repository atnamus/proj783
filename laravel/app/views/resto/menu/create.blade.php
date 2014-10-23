@section('content')	
<div class="row">
    <div class="col-md-12">
        <div class="portlet box {{$_theme['portlet_colour']}} ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-edit"></i> Menu
                </div>
            </div>
            <div class="portlet-body form">
                {{ Form::open(['route' => 'resto.menu.store','class'=>"form-horizontal ajax-submit",'role'=>"form"]) }}
                <div class="form-body">
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label">Name</label>
                        <div class="col-md-9">
                            {{ Form::text('name', null, array('class' => 'form-control','placeholder'=>"Menu Name")) }}
                            <span class="msg">{{ $errors->first('name', '<span class="help-inline">:message</span>') }}</span>
                        </div>
                    </div>                     
                    <div class="form-group {{ $errors->has('category') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label">Category</label>
                        <div class="col-md-9">
                            {{-- Form::select('category',array_merge([''=>'--select--'],['4'=>'---select---']+MenuCategory::lists('name','id'),null, array('class' => 'form-control input-large select2me'))--}}
                            {{ Form::select('category',[''=>'---select---']+MenuCategory::lists('name','id'),null, array('class' => 'form-control input-large select2me'))}}
                            <span class="msg">{{ $errors->first('category', '<span class="help-inline">:message</span>') }}</span>
                        </div>
                    </div>                     
                    <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label">Description</label>
                        <div class="col-md-9">
                            {{ Form::textarea('description', null, ['class' => 'form-control','placeholder'=>"Description",'rows'=>8]) }}
                            <span class="msg">{{ $errors->first('description', '<span class="help-inline">:message</span>') }}</span>
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label">Price(IDR)</label>
                        <div class="col-md-9">
                            {{ Form::text('price', null, array('class' => 'form-control','placeholder'=>"0.00")) }}
                            <span class="msg">{{ $errors->first('price', '<span class="help-inline">:message</span>') }}</span>
                        </div>
                    </div> 
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn {{$_theme['save_btn_colour']}}">Save</button>
                            <a href="{{route('resto.menu.index')}}" type="button" class="btn {{$_theme['cancel_btn_colour']}}">Cancel</a>
                        </div>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@stop