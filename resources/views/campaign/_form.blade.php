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

        <label>Content</label>
        <input type="text" value="{{$campaign->content}}" name="campaign[content]" class="form-control" />
        @if($errors->first('content'))
            <span>{{$errors->first('content')}}</span>
        @endif
    </div>


    <div class="form-group">
        <input type="submit" value="Submit" class="btn btn-default" />
    </div>
</form>