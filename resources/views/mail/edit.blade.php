<!-- Damir Cengic-->
@extends( 'layouts.app' )
@section( 'content' )

    <div class="box">
        <div class="box-header">
           <i class="fa fa-pencil-square-o"> </i> <h3 class="box-title">Edit Campaign</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="md-col-12">
                @include( 'mail._form' )
            </div>
        </div>
    </div>
    </div>
    <!-- /.box -->

@stop
