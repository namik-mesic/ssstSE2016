<!-- Damir Cengic-->
@extends( 'layouts.app' )
@section( 'content' )

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Edit Mailinglist</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="md-col-12">
                @include( 'mailinglist._form' )
            </div>
        </div>
    </div>
    </div>
    <!-- /.box -->

@stop