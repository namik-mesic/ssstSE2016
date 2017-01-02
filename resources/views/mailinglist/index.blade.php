@extends( 'layouts.app' )
@section( 'content' )

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Mailinglist</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Name</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($mailinglists as $mailinglist)
                    <tr>
                        <td>{{$mailinglist->name}}</td>
                        <td>
                            <a href="{{route('mailinglist.edit', [$mailinglist->id])}}"><i class="fa fa-pencil"></i></a>
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