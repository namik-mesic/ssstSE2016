@extends( 'layouts.app' )
@section( 'content' )

<div class="box">
	<div class="box-header">
		<h3 class="box-title">Clients</h3>
		<div class="box-tools pull-right">
			<a href="{{route('client.create')}}" class="btn btn-primary">Create new client</a>
		</div>
	</div>
		<!-- /.box-header -->
		<div class="box-body">
			<table id="example1" class="table table-bordered table-striped">
                <thead>
					<tr>
						<th>Email</th>
						<th>Name</th>
						<th>Surname</th>
						<th>Date Added</th>
						<th>Edit/Delete</th>
					</tr>
                </thead>
					<tbody>
						@foreach ($clients as $client) 
						<tr>
							<td>{{$client->mail}}</td> 
							<td>{{$client->fname}}</td> 
							<td>{{$client->lname }}</td> 
							<td>{{$client->created_at}} </td>
							<td>
								<a href="{{route('client.edit', [$client->id])}}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
								<a href="{{route('client.delete', [$client->id])}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
                <tfoot>
					<tr>
						<th>Email</th>
						<th>Name</th>
						<th>Surname</th>
						<th>Date Added</th>
						<th>Edit/Delete</th>
					</tr>
                </tfoot>
              </table>
		</div>
	</div>
</div>
<!-- /.box -->
 
@stop