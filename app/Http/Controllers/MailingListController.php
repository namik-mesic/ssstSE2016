<?php

namespace App\Http\Controllers;

use App\MailingList;
use Illuminate\Http\Request;

use App\Http\Requests;

class MailingListController extends Controller
{

    protected $user;
    protected $id;


    public function index(){

        return view('mailing');

    }

     public function __construct()
        {
            $this->middleware('auth');
            $this->user =  \Auth::user();

        }



    public function store(Request $request)
    {

        $mailinglist = new MailingList;

        $mailinglist -> fname = $request -> fname;
        $mailinglist -> lname = $request -> lname;
        $mailinglist -> mail = $request -> mail;
        $mailinglist -> user_id = $this->id = \Auth::id();

        $mailinglist -> save();
    }

    public function show(){



    }

}
