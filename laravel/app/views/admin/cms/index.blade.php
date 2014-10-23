@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="portlet box {{$_theme['portlet_colour']}} ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-edit"></i> Restaurant
                </div>
            </div>
            <div class="portlet-body ">
                <div class="table-toolbar">
                    <div class="btn-group pull-right">
                        <a href="{{route('admin.restaurant.create')}}" class="btn green">
                            Add New <i class="fa fa-plus"></i>
                        </a>
                    </div><div class="clearfix"></div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Restaurant Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Create Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($restarents as $i => $item) { ?>
                                <tr>
                                    <td>{{($i+1)}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->owner->email}}</td>
                                    <td>{{$item->phone}}</td>
                                    <td>{{$item->created_at}}</td>                                    
                                    <td rowspan="1" colspan="1">
                                        {{btTable::edit(route('admin.restaurant.edit',$item->id))}}
                                        {{btTable::delete(route('admin.restaurant.destroy',$item->id))}}                                        
                                    </td>                                 
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-5 col-sm-12">
                            <div class="dataTables_info" id="sample_2_info" role="status" aria-live="polite">
                                Showing {{$restarents->getFrom()}} to {{$restarents->getTo()}} of {{$restarents->getTotal()}} Restaurants
                            </div>                            
                        </div>
                        <div class="col-md-7 col-sm-12">
                            <div class="pull-right">
                                {{$restarents->links()}}
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop