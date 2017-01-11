@extends( 'layouts.app' )
@section( 'content' )

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Archived Scheduled Campaigns </h3>

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

                </tr>
                </thead>
                <tbody>
                @foreach ($campaignschedules as $campaignschedule)
                    <tr> @if ($campaignschedule -> status == 'sent')
                        <td>{{$campaignschedule->mail->name}}</td>
                        <td>{{$campaignschedule->mail->subject}}</td>
                        <td>{{$campaignschedule->mailingList->name}}</td>
                        <td>{{$campaignschedule->status}}</td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
                <tfoot>

                </tfoot>

            </table>
            </br>

        </div>
    </div>
    </div>
    <!-- /.box -->

@stop