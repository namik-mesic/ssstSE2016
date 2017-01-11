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

    /**Return index view for Campaigns
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {

        $request->path(); // request url

        $user = User::find(\Auth::id()); //find logged in user ID
		
        $campaignschedules = $user->campaignSchedules()->get(); //get campaignschedule based on user_id

        if($request->is('schedules')) { //if path equal to 'schedules' return valid view
            return view('campaignschedule.index', array(
                'campaignschedules' => $campaignschedules
            ));
        }

        else if($request->is('schedule/archived')) { //if path equal to 'schedule/archived' return valid view
            return view('campaignschedule.archived', array(
                'campaignschedules' => $campaignschedules
            ));
        }
    }


    public function create() //function for creation
    {
        $user = User::find(\Auth::id()); //find logged in user ID
		
        $campaignschedule = new CampaignSchedule; //create new CampaignSchedule object
        $campaignschedule->user_id = \Auth::id(); // input the current logged in user_id to the CampaignSchedule object
        $campaignschedule->status = 'pending'; //set default status to pending

        $mails =  $user->mails()->get(); //get all mails based on the logged in user
        $mailinglists = $user->mailinglists()->get(); //get all mailinglists based on the logged in user

        return view('campaignschedule.create', array( //return correct view
            'campaignschedule' => $campaignschedule,
            'mails' => $mails,                        //pass parameters to view
            'mailinglists' => $mailinglists,
        ));
    }

    public function store(Request $request){ //request input from view

        $request -> all(); //request all from view
        $input = $request['campaignschedule']; //save input to variable
        $campaignschedule = new CampaignSchedule; //create new CampaignSchedule object

        $validator = \Validator::make($input, CampaignSchedule::$rules); //create validatir based on rules

        if($validator->fails()){ //do the validations
            if($input['id']){
                return redirect()->route('schedule.edit', [$input['id']])->withErrors($validator)->withInput();
            } //if validations fails redirect to correct view

            return redirect()->route('schedule.create')->withErrors($validator)->withInput();
        } //if validations is correct redirect to correct view


        if($input['id']){ //check if the view contains the id
            $mail = CampaignSchedule::find($input['id']);
            $mail ->update($input); //update view if input contains id

            return redirect()->route('schedules'); //redirect to correct view
        }

        $campaignschedule->create($input); //if the view does not contain id, we create a new campaignschedule

        return redirect() -> route('schedules'); //redirect to correct view

    }
	
	public function send(Request $request, $id) //function for sending mail
	{
		$campaignschedule = CampaignSchedule::find($id);
		$campaignschedule->send();
		
		$campaignschedule->status = 'sent';
		$campaignschedule->save();
		
		return redirect() -> route('schedules'); //redirect to correct view
	}

    /** Inda Kreso */
	public function delete($id) {
        $campaignschedule = CampaignSchedule::find($id);
        $campaignschedule -> delete();

        return redirect() -> route('schedules');
    }
    /** Inda Kreso */
}
