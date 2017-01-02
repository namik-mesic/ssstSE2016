<?php

/*
 * By: Sabahudin Kodro
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\MailingList;
use App\User;

class MailingListController extends Controller
{

    protected $user ;


    /**
     * Constuctor for user authentication.
     */
     public function __construct()
        {
            $this->middleware('auth');

        }

    /**
    * Return view with mailing_list table info where user_id is equal to the logged in user.
    */
    public function index(){

        $user = User::find(\Auth::id());
        $mailinglists = $user->mailinglists()->get();

        return view('mailinglist.index', array(
            'mailinglists' => $mailinglists
        ));

    }

    public function create()
    {
        $mailinglist = new MailingList;
        $mailinglist->user_id = \Auth::id();

        return view('mailinglist.create', array(
            'mailinglist' => $mailinglist
        ));
    }

    /**
     * Fill in table mailing_list from form.
     *
     *
    */
    public function store(Request $request)
    {
        $request->all();
        $input = $request['mailinglist'];


        if($input['id']){
            $mailinglist = MailingList::find($input['id']);
            $mailinglist ->update($input);

            return redirect()->route('mailinglists');
        }

        $mailinglist  = new MailingList;
        $mailinglist ->create($input);

        return redirect()->route('mailinglists');
    }



    /**
     * Show form for editing
     *
     * @param $id
     *
     * @return response
     */

    public function edit($id)
    {
        $mailinglist = MailingList::find($id);

        return view('mailinglist.edit', array(
            'mailinglist' => $mailinglist
        ));


    }

    /**
     * Update specified resource from DB
     *
     * @param $id
     *
     * @return response
     */







}
