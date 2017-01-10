<!-- Dino Kodro and Damir Čengić -->

@extends( 'layouts.app' )
@section( 'content' )

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Emails</h3>
            
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Email Name</th>
                    <th>Subject</th>
                    <th>Created at</th>
					<th>Edit/Delete</th>

                    /* Inda Kreso*/
                </tr>
                </thead>
                <tbody>
                @foreach ($mails as $mail)
                    <tr>
                        <td>{{$mail->name}}</td>
                        <td>{{$mail->subject}}</td>
                        <td>{{$mail->created_at}}</td>
                        <td>
                            <a href="{{route('mail.edit', $mail->id)}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                            <a href="{{route('mail.delete', $mail->id)}}" class="btn btn-danger"> <i class="fa fa-trash"></i></a></td>
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