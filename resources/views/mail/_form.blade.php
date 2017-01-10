/* Inda Kreso*/
<form action="{{route('mail.store')}}" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">

    <input type="hidden" value="{{$mail->id}}" name="mail[id]" />
    <input type="hidden" value="{{$mail->user_id}}" name="mail[user_id]" />

    <div class="form-group {{$errors->first('name')  ? 'has-error' : ''}}">
        <label>Name</label>
        <input type="text" value="{{$mail->name}}" name="mail[name]" class="form-control" />
        @if($errors->first('name'))
            <span>{{$errors->first('name')}}</span>
        @endif
	    </div>

     <div class="form-group {{$errors->first('subject')  ? 'has-error' : ''}}">
        <label>Subject</label>
        <input type="text" value="{{$mail->subject}}" name="mail[subject]" class="form-control" />
        @if($errors->first('subject'))
            <span>{{$errors->first('subject')}}</span>
        @endif
        </div>

	<div class="form-group {{$errors->first('content')  ? 'has-error' : ''}}">
        <label>Content</label>
		
		<textarea name="mail[content]" id="mail-content" rows="10" cols="80" class="form-control">
               {{$mail->content}}
		</textarea>
			
        @if($errors->first('content'))
            <span>{{$errors->first('content')}}</span>
        @endif
    </div>


    <div class="form-group">
        <input type="submit" value="Submit" class="btn btn-success" />
    </div>
</form>

<script src="{{ asset ("/bower_components/AdminLTE/plugins/ckeditor/ckeditor.js") }}" type="text/javascript"></script>

<script>
	CKEDITOR.replace('mail-content');
</script>
/* Inda Kreso*/