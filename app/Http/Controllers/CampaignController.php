<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

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
    }

}
