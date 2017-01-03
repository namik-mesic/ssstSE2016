@extends( 'layouts.app' )
@section( 'content' )

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Clients for mailinglist: <strong>{{$mailinglist -> name}}</strong></h3>
            <div class="box-tools pull-right">
                <a href="{{route('mailinglist.edit', [$mailinglist->id])}}" class="btn btn-primary">Add or remove client(s)</a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Email</th>
                    <th>First Name</th>
                    <th>Surname</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <td><?php if((in_array($client->id, $mailinglistClients))) echo $client->mail ?> </td>
                        <td><?php if((in_array($client->id, $mailinglistClients))) echo $client->fname ?> </td>
                        <td><?php if((in_array($client->id, $mailinglistClients))) echo $client->lname ?> </td>

                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Surname</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    </div>
    <!-- /.box -->

@stop