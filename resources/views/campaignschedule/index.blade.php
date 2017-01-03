@extends( 'layouts.app' )
@section( 'content' )

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Scheduled Campaigns </h3>
            <div class="box-tools pull-right">
                <a href="{{route('schedule.create')}}" class="btn btn-primary">Create new campaign schedule</a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Campaign</th>
                    <th>Mailing list</th>
					<th>Status</th>
					<th></th>
                </tr>
                </thead>
                <tbody>
					@foreach ($campaignschedules as $campaignschedule)
						<tr>
							<td>{{$campaignschedule->campaign->name}}</td>
							<td>{{$campaignschedule->mailingList->name}}</td>
							<td>{{$campaignschedule->status}}</td>
							<td>
								@if($campaignschedule->status == 'pending')
									<a href="{{route('schedule.send', $campaignschedule->id)}}"><i class="fa fa-pencil"></i></a>
								@endif
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