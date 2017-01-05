<form action="{{route('client.store')}}" method="POST">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	
	<input type="hidden" value="{{$client->id}}" name="client[id]" />
	<input type="hidden" value="{{$client->user_id}}" name="client[user_id]" />
	
	

	<div class="form-group {{$errors->first('fname')  ? 'has-error' : ''}}">
		<label>First name</label>
		<input type="text" value="{{$client->fname}}" name="client[fname]" class="form-control" />
		@if($errors->first('fname'))
			<span>{{$errors->first('fname')}}</span>
		@endif
	</div>
	
	<div class="form-group {{$errors->first('lname')  ? 'has-error' : ''}}">
		<label>Last name</label>
		<input type="text" value="{{$client->lname}}" name="client[lname]" class="form-control" />
		@if($errors->first('lname'))
			<span>{{$errors->first('lname')}}</span>
		@endif
	</div>
	
	<div class="form-group {{$errors->first('mail')  ? 'has-error' : ''}}">
		<label>Email</label>
		<input type="email" value="{{$client->mail}}" name="client[mail]" class="form-control" />
		@if($errors->first('mail'))
			<span>{{$errors->first('mail')}}</span>
		@endif
	</div>
	
	<div class="form-group">
		<input type="submit" value="Submit" class="btn btn-success" />
	</div>
</form>