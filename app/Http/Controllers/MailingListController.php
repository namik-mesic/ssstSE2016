<?php

namespace App\Http\Controllers;

use App\MailingList;
use Illuminate\Http\Request;

use App\Http\Requests;

class MailingListController extends Controller
{

    protected $user ;

     public function __construct()
        {
            $this->middleware('auth');
            $this->user =  \Auth::user();

        }

    public function index(){

        $mailinglists = \DB::table('mailing_lists')->where('user_id', $this->id = \Auth::id())->get();
        return view('mailing', array(
            'mailinglists' => $mailinglists
        ));

    }


    public function store(Request $request)
    {

        $mailinglist = new MailingList;

        $mailinglist -> fname = $request -> fname;
        $mailinglist -> lname = $request -> lname;
        $mailinglist -> mail = $request -> mail;
        $mailinglist -> user_id = $this->id = \Auth::id();

        $mailinglist -> save();

        return redirect()->action('MailingListController@index')->with(\Session::flash('success', 'Succsessfully added user'));
    }

    public function show(){



    }

}
