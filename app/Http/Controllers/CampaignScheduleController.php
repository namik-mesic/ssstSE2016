<?php

/**
 * By Sabahudin Kodro
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use App\CampaignSchedule;

class CampaignScheduleController extends Controller
{

    /**
     *Return index view for Campaigns
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {

        $request->path();

        $user = User::find(\Auth::id());
		
        $campaignschedules = $user->campaignSchedules()->get();

        if($request->is('schedules')) {
            return view('campaignschedule.index', array(
                'campaignschedules' => $campaignschedules
            ));
        }

        else if($request->is('schedule/archived')) {
            return view('campaignschedule.archived', array(
                'campaignschedules' => $campaignschedules
            ));
        }
    }

    /**
     * Create Campaign schedules
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $user = User::find(\Auth::id());
		
        $campaignschedule = new CampaignSchedule;
        $campaignschedule->user_id = \Auth::id();
        $campaignschedule->status = 'pending';

        $mails =  $user->mails()->get();
        $mailinglists = $user->mailinglists()->get();

        return view('campaignschedule.create', array(
            'campaignschedule' => $campaignschedule,
            'mails' => $mails,
            'mailinglists' => $mailinglists,
        ));
    }

    /**
     * Store function for create and edit Campaign Schedule
     *
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */

    public function store(Request $request){

        $request -> all();
        $input = $request['campaignschedule'];
        $campaignschedule = new CampaignSchedule;

        $validator = \Validator::make($input, CampaignSchedule::$rules);

        if($validator->fails()){
            if($input['id']){
                return redirect()->route('schedule.edit', [$input['id']])->withErrors($validator)->withInput();
            }

            return redirect()->route('schedule.create')->withErrors($validator)->withInput();
        }


        if($input['id']){
            $mail = CampaignSchedule::find($input['id']);
            $mail ->update($input);

            return redirect()->route('schedules');
        }

        $campaignschedule->create($input);

        return redirect() -> route('schedules');

    }

    /**
     * Function for sending scheduled campaigns for mail
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */

	public function send(Request $request, $id)
	{
		$campaignschedule = CampaignSchedule::find($id);
		$campaignschedule->send();
		
		$campaignschedule->status = 'sent';
		$campaignschedule->save();
		
		return redirect() -> route('schedules');
	}

    /** Inda Kreso */
	public function delete($id) {
        $campaignschedule = CampaignSchedule::find($id);
        $campaignschedule -> delete();

        return redirect() -> route('schedules');
    }
    /** Inda Kreso */
}
