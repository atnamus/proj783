@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="portlet box {{$_theme['portlet_colour']}} ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-edit"></i> Pages
                </div>
            </div>
            <div class="portlet-body ">
                <div class="table-toolbar">
                    <div class="btn-group pull-right">
                        <a href="{{route('admin.page.create')}}" class="btn green">
                            Add New <i class="fa fa-plus"></i>
                        </a>
                    </div><div class="clearfix"></div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Page Name</th>
                                <th>Updated Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($restarents as $i => $item) { ?>
                                <tr>
                                    <td>{{($i+1)}}</td>
                                    <td>{{$item->slug}}</td>
                                    <td>{{$item->updated_at}}</td>                                   
                                    <td rowspan="1" colspan="1">
                                        {{btTable::edit(route('admin.page.edit',$item->id))}}                                       
                                    </td>                                 
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop