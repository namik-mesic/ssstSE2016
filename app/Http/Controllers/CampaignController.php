<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Campaign;
use App\User;

class CampaignController extends Controller
{

    protected $user;

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {

        $user = User::find(\Auth::id());
        $campaigns = $user -> campaigns()->get();

        return view('campaign.index', array(

            'campaigns' => $campaigns

        ));

    }

    public function create()
    {

        $campaign = new Campaign;
        $campaign -> user_id = \Auth::id();

        return view('campaign.create', array(

            'campaign' => $campaign

        ));

    }

    public function store(Request $request)
    {

        $request->all();
        $input = $request['campaign'];

        $validator = \Validator::make($input, Campaign::$rules);

        if($validator->fails()){
            if($input['id']){
                return redirect()->route('campaign.edit', [$input['id']])->withErrors($validator)->withInput();
            }

            return redirect()->route('campaign.create')->withErrors($validator)->withInput();
        }


        if($input['id']){
            $campaign = Campaign::find($input['id']);
            $campaign->update($input);

            return redirect()->route('campaigns');
        }

        $campaign = new Campaign;
        $campaign->create($input);

        return redirect()->route('campaigns');


    }

    

}
