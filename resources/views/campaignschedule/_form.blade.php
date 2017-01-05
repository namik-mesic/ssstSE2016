<form action="{{route('schedule.store')}}" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">

    <input type="hidden" value="{{$campaignschedule->id}}" name="campaignschedule[id]" />
    <input type="hidden" value="{{$campaignschedule->user_id}}" name="campaignschedule[user_id]" />
    <input type="hidden" value="{{$campaignschedule->status}}" name="campaignschedule[status]" />




    <div class="form-group {{$errors->first('campaign_id')  ? 'has-error' : ''}}">
        <label>Email name</label>
		<select name="campaignschedule[campaign_id]" class="form-control">
			@foreach($campaigns as $campaign)
				<option value="{{$campaign->id}}">{{$campaign->name}}</option>
			@endforeach
		</select>
        @if($errors->first('campaign_id'))
            <span>{{$errors->first('campaign_id')}}</span>
        @endif
    </div>

    


    <div class="form-group {{$errors->first('mailing_list_id')  ? 'has-error' : ''}}">
        <label>Mailing Lists</label>
        <select name="campaignschedule[mailing_list_id]" class="form-control">
            @foreach($mailinglists as $mailinglist)
                <option value="{{$mailinglist->id}}">{{$mailinglist->name}}</option>
            @endforeach
        </select>
        @if($errors->first('mailing_list_id'))
            <span>{{$errors->first('mailing_list_id')}}</span>
        @endif
    </div>

    <div class="form-group">
        <input type="submit" value="Submit" class="btn btn-success" />
    </div>
</form>