<form action="{{route('mailinglist.store')}}" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">

    <input type="hidden" value="{{$mailinglist->id}}" name="mailinglist[id]" />
    <input type="hidden" value="{{$mailinglist->user_id}}" name="mailinglist[user_id]" />


    <div class="form-group {{$errors->first('name')  ? 'has-error' : ''}}">
        <label>Name</label>
        <input type="text" value="{{$mailinglist->name}}" name="mailinglist[name]" class="form-control" />
        @if($errors->first('name'))
            <span>{{$errors->first('name')}}</span>
        @endif
    </div>


    <div class="form-group">
        <input type="submit" value="Submit" class="btn btn-default" />
    </div>
</form>