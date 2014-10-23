@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="portlet box {{$_theme['portlet_colour']}} ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-edit"></i> Restaurant
                </div>
            </div>
            <div class="portlet-body form">
                {{ Form::open(['route' => 'admin.page.store','class'=>"form-horizontal ajax-submit",'role'=>"form"]) }}
                <div class="form-body">
                    <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label">Page name</label>
                        <div class="col-md-9">
                            {{ Form::text('slug', null, array('class' => 'form-control','placeholder'=>"Page name")) }}
                            <span class="msg">
                                {{ $errors->first('slug', '<span class="help-inline">:message</span>') }}
                            </span>
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('meta_title') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label">Meta Title</label>
                        <div class="col-md-9">
                            {{ Form::text('meta_title', null, array('class' => 'form-control','placeholder'=>"Meta Title")) }}
                            <span class="msg">
                                {{ $errors->first('meta_title', '<span class="help-inline">:message</span>') }}
                            </span>
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('meta_keywords') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label">Meta Keywords</label>
                        <div class="col-md-9">
                            {{ Form::textarea('', null, array('class' => 'form-control','placeholder'=>"Meta Keywords",'rows'=>5)) }}
                            <span class="msg">
                                {{ $errors->first('meta_keywords', '<span class="help-inline">:message</span>') }}
                            </span>
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('Meta Description') ? 'has-error' : '' }}">
                        <label class="col-md-3 control-label">Meta Description</label>
                        <div class="col-md-9">
                            {{ Form::textarea('meta_description', null, array('class' => 'form-control','placeholder'=>"Meta Description",'rows'=>5)) }}
                            <span class="msg">
                                {{ $errors->first('meta_description', '<span class="help-inline">:message</span>') }}
                            </span>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn {{$_theme['save_btn_colour']}}">Save</button>
                                <a href="{{route('admin.page.index')}}" type="button" class="btn {{$_theme['cancel_btn_colour']}}">Cancel</a>
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