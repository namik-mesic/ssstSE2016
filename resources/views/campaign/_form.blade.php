<form action="{{route('campaign.store')}}" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">

    <input type="hidden" value="{{$campaign->id}}" name="campaign[id]" />
    <input type="hidden" value="{{$campaign->user_id}}" name="campaign[user_id]" />

    <div class="form-group {{$errors->first('name')  ? 'has-error' : ''}}">
        <label>Name</label>
        <input type="text" value="{{$campaign->name}}" name="campaign[name]" class="form-control" />
        @if($errors->first('name'))
            <span>{{$errors->first('name')}}</span>
        @endif
	    </div>

     <div class="form-group {{$errors->first('subject')  ? 'has-error' : ''}}">
        <label>Subject</label>
        <input type="text" value="{{$campaign->subject}}" name="campaign[subject]" class="form-control" />
        @if($errors->first('subject'))
            <span>{{$errors->first('subject')}}</span>
        @endif
        </div>

	<div class="form-group {{$errors->first('content')  ? 'has-error' : ''}}">
        <label>Content</label>
		
		<textarea name="campaign[content]" id="campaign-content" rows="10" cols="80" class="form-control">
               {{$campaign->content}}
		</textarea>
			
        @if($errors->first('content'))
            <span>{{$errors->first('content')}}</span>
        @endif
    </div>


    <div class="form-group">
        <input type="submit" value="Submit" class="btn btn-default" />
    </div>
</form>

<script src="{{ asset ("/bower_components/AdminLTE/plugins/ckeditor/ckeditor.js") }}" type="text/javascript"></script>

<script>
	CKEDITOR.replace('campaign-content');
</script>