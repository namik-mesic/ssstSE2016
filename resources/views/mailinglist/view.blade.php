<!-- HTML by Damir Cengic, PHP by Sabahudin Kodro-->
@extends( 'layouts.app' )
@section( 'content' )

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Mailinglist: <strong>{{$mailinglist -> name}}</strong></h3>
            <div class="box-tools pull-right">
                <a href="{{route('mailinglist.edit', [$mailinglist->id])}}" class="btn btn-primary">Edit</a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
			<h4>Clients</h4>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($mailinglist->clients as $client)
                    <tr>
                        <td>{{$client->fname}} {{$client->lname}}</td>
                        <td>{{$client->fname}} {{$client->lname}}</td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    </div>
    <!-- /.box -->

@stop