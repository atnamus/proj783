@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="portlet box {{$_theme['portlet_colour']}} ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-edit"></i> User
                </div>
            </div>
            <div class="portlet-body ">
                <div class="table-toolbar">
                    <div class="btn-group pull-right">
                        <a href="{{route('admin.user.create')}}" class="btn green">
                            Add New <i class="fa fa-plus"></i>
                        </a>
                    </div><div class="clearfix"></div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Last Login</th>
                                <th>Create Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($model as $index => $row) { ?>
                                <tr>
                                    <td>{{($index+1)}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->phone}}</td>
                                    <td>{{$row->last_login}}</td>                                    
                                    <td>{{$row->created_at}}</td>                                    
                                    <td rowspan="1" colspan="1">
                                        {{--btTable::edit(route('admin.user.edit',$row->id))--}}
                                        {{-- User can't suicide --}}
                                        @if(Auth::id()!=$row->id)
                                        {{btTable::delete(route('admin.user.destroy',$row->id))}}    
                                        @endif
                                    </td>                                 
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-5 col-sm-12">
                            <div class="dataTables_info" id="sample_2_info" role="status" aria-live="polite">
                                Showing {{$model->getFrom()}} to {{$model->getTo()}} of {{$model->getTotal()}} Users
                            </div>                            
                        </div>
                        <div class="col-md-7 col-sm-12">
                            <div class="pull-right">
                                {{$model->links()}}
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop