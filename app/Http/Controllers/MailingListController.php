<?php

/*
 * By: Sabahudin Kodro
 */

namespace App\Http\Controllers;

use App\MailingList;
use Illuminate\Http\Request;

use App\Http\Requests;

class MailingListController extends Controller
{

    protected $user ;


    /**
     * Constuctor for user authentication.
     */
     public function __construct()
        {
            $this->middleware('auth');
            $this->user =  \Auth::user();

        }

    /**
    * Return view with mailing_list table info where user_id is equal to the logged in user.
    */
    public function index(){

        $mailinglists = \DB::table('mailing_lists')->where('user_id', $this->id = \Auth::id())->get();
        return view('mailing', array(
            'mailinglists' => $mailinglists
        ));

    }

    /**
     * Fill in table mailing_list from form.
     *
     * Return the MailingListController@index with a success message.
    */
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
