@extends( 'layouts.app' )
@section( 'content' )

<div class="box">
	<div class="box-header">
		<h3 class="box-title"></h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<div class="md-col-12">
				@include( 'client._form' )
			</div>
		</div>
	</div>
</div>
<!-- /.box -->
 
@stop