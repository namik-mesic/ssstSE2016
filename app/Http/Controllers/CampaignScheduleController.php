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
        $campaignschedules = $user->clients()->get();

        return view('campaignschedule.index', array(
            'campaignschedule' => $campaignschedules
        ));
    }


    public function create()
    {
        $user = User::find(\Auth::id());
		
        $campaignschedule = new CampaignSchedule;
        $campaignschedule->user_id = \Auth::id();

        $campaigns =  $user->campaigns()->get();
        $mailinglists = $user->mailinglists()->get();

        return view('campaignschedule.create', array(
            'campaignschedule' => $campaignschedule,
            'campaigns' => $campaigns,
            'mailinglists' => $mailinglists,
        ));
    }

}
