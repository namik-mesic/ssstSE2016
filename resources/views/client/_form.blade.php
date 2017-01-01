<form action="{{route('client.store')}}">
	<input type="hidden" value="{{$client->user_id}}" name="client['user_id]" />
	
	<div class="form-group">
		<label>First name</label>
		<input type="text" value="{{$client->fname}}" name="client['fname]" class="form-control" />
	</div>
	
	<div class="form-group">
		<label>Last name</label>
		<input type="text" value="{{$client->lname}}" name="client['lname]" class="form-control" />
	</div>
	
	<div class="form-group">
		<label>Email</label>
		<input type="email" value="{{$client->email}}" name="client['email]" class="form-control" />
	</div>
	
	<div class="form-group">
		<input type="submit" value="Submit" class="btn btn-default" />
	</div>
</form>