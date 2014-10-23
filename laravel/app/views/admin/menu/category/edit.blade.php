@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="portlet box {{$_theme['portlet_colour']}} ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-edit"></i> Menu Category Details
                </div>
            </div>
            <div class="portlet-body form">
                {{ Form::model($model,['url' => route('admin.menucategory.update',$model->id),'class'=>"form-horizontal ajax-submit",'role'=>"form",'method'=>'put']) }}
                <div class="form-body">
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label">Name</label>
                        <div class="col-md-9">
                            {{ Form::text('name', null, array('class' => 'form-control','placeholder'=>"Category Name")) }}
                            <span class="msg">{{ $errors->first('name', '<span class="help-inline">:message</span>') }}</span>
                        </div>
                    </div>                     
                    <div class="form-group {{ $errors->has('restaurant_name') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label">Description</label>
                        <div class="col-md-9">
                            {{ Form::textarea('description', null, ['class' => 'form-control','placeholder'=>"Description",'rows'=>3]) }}
                            <span class="msg">{{ $errors->first('description', '<span class="help-inline">:message</span>') }}</span>
                        </div>
                    </div>                          
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn {{$_theme['save_btn_colour']}}">Save</button>
                                <a href="{{route('admin.menucategory.index')}}" type="button" class="btn {{$_theme['cancel_btn_colour']}}">Cancel</a>
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