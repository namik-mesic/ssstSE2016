@extends( 'layouts.app' )
@section( 'content' )

    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><i class="fa fa-calendar"> Scheduled Campaigns </i> </h3>
          
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Mail Name</th>
                    <th>Subject</th>
                    <th>Mailing list</th>
					<th>Status</th>
					<th>Send/Delete</th>
                    
                </tr>
                </thead>
                <tbody>
					@foreach ($campaignschedules as $campaignschedule)
						<tr>
							<td>{{$campaignschedule->mail->name}}</td>
                            <td>{{$campaignschedule->mail->subject}}</td>
							<td>{{$campaignschedule->mailingList->name}}</td>
							<td>{{$campaignschedule->status}}</td>
							<td>
								@if($campaignschedule->status == 'pending')
									<a href="{{route('schedule.send', $campaignschedule->id)}}" class="btn btn-primary"><i class="fa fa-paper-plane"></i></a>
								@endif
							
                                <a href="{{route('schedule.delete', [$campaignschedule->id])}}" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                            </td>
						</tr>
					@endforeach
                </tbody>
                <tfoot>

                </tfoot>

            </table>
            </br>
              <div class="box-tools pull-right">
                <a href="{{route('schedule.create')}}" class="btn btn-primary"><i class="fa fa-calendar-plus-o fa-2x"></i></a>
            </div>
        </div>
    </div>
    </div>
    <!-- /.box -->

@stop