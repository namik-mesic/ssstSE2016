
<!-- Dino Kodro and Damir Čengić -->


@extends( 'layouts.app' )
@section( 'content' )

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Mails</h3>

        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Content</th>
                    <th>Created at</th>
					<th>Edit</th>
                    <th>Delete</th>
                    

                </tr>
                </thead>
                <tbody>
                @foreach ($mails as $mail)
                    <tr>
                        <td>{{$mail->name}}</td>
                        <td>{!!$mail->content!!}</td>
                        <td>{{$mail->created_at}}</td>
                        <td><a href="{{route('mail.edit', $mail->id)}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a> </td>
                        <td><a href="{{route('mail.delete', $mail->id)}}" class="btn btn-danger"> <i class="fa fa-trash"></i></a></td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>

                </tfoot>
            </table>
            </br>
            <div class="box-tools pull-right">
                <a href="{{route('mail.create')}}" class="btn btn-primary"><i class="fa fa-envelope fa-2x"></i></a>
            </div>
        </div>
    </div>
    </div>
    <!-- /.box -->


@stop
