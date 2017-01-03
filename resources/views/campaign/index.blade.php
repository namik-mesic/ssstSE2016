@extends( 'layouts.app' )
@section( 'content' )

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Campaigns</h3>
            <div class="box-tools pull-right">
                <a href="{{route('campaign.create')}}" class="btn btn-primary">Create new campaign</a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Created at</th>
					<th></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($campaigns as $campaign)
                    <tr>
                        <td>{{$campaign->name}}</td>
                        <td>{{$campaign->created_at}}</td>
                        <td>
                            <a href="{{route('campaign.edit', $campaign->id)}}"><i class="fa fa-pencil"></i></a>
                            <a href="#"> <i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>

                </tfoot>
            </table>
        </div>
    </div>
    </div>
    <!-- /.box -->

@stop