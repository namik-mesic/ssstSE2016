<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use App\CampaignSchedule;

class CampaignScheduleController extends Controller
{

    public function index()
    {
        $user = User::find(\Auth::id());
		
        $campaignschedules = $user->campaignSchedules()->get();

        return view('campaignschedule.index', array(
            'campaignschedules' => $campaignschedules
        ));
    }


    public function create()
    {
        $user = User::find(\Auth::id());
		
        $campaignschedule = new CampaignSchedule;
        $campaignschedule->user_id = \Auth::id();
        $campaignschedule->status = 'pending';

        $campaigns =  $user->campaigns()->get();
        $mailinglists = $user->mailinglists()->get();

        return view('campaignschedule.create', array(
            'campaignschedule' => $campaignschedule,
            'campaigns' => $campaigns,
            'mailinglists' => $mailinglists,
        ));
    }

    public function store(Request $request){

        $request -> all();
        $input = $request['campaignschedule'];
        $campaignschedule = new CampaignSchedule;

        $campaignschedule->create($input);

        return redirect() -> route('schedules');

    }
	
	public function send(Request $request, $id)
	{
		$campaignschedule = CampaignSchedule::find($id);
		$campaignschedule->send();
		
		$campaignschedule->status = 'sent';
		$campaignschedule->save();
		
		return redirect() -> route('schedules');
	}

	public function delete($id) {
        $campaignschedule = CampaignSchedule::find($id);
        $campaignschedule -> delete();

        return redirect() -> route('schedules');
    }

}
