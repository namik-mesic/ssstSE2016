<!-- HTML by Damir Cengic-->
@extends( 'layouts.app' )
@section( 'content' )

    <div class="box">
        <div class="box-header">
            <i class="fa fa-calendar-plus-o"></i><h3 class="box-title">New Campaign Schedule</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="md-col-12">
                @include( 'campaignschedule._form' )
            </div>
        </div>
    </div>
    </div>
    <!-- /.box -->

@stop