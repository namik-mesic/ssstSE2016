<?php

/*
 * By: Sabahudin Kodro
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\MailingList;
use App\User;
use App\Client;

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
    public function index()
	{
        $user = User::find(\Auth::id());
        
		$mailinglists = $user->mailinglists()->get();
		
        return view('mailinglist.index', array(
            'mailinglists' => $mailinglists
        ));

    }

    public function create()
    {
		$user = User::find(\Auth::id());
		
        $mailinglist = new MailingList;
        $mailinglist->user_id = \Auth::id();

		$clients = $user->clients()->get();
		
        return view('mailinglist.create', array(
            'mailinglist' => $mailinglist,
			'clients' => $clients
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
		
		$clients = isset($request['clients']) ? $request['clients'] : array();
		
        if($input['id'])
		{
            $mailinglist = MailingList::find($input['id']);
            $mailinglist ->update($input);
			
			$mailinglist->clients()->sync($clients);
			
            return redirect()->route('mailinglists', $input['id']);
        }

        $mailinglist = new MailingList;
        $mailinglist = $mailinglist->create($input);
	
		$mailinglist->clients()->sync($clients);
		
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
		$user = User::find(\Auth::id());
		
        $mailinglist = MailingList::find($id);
		$clients = $user->clients()->get();
		
		$mailinglistClients = array();
		
		foreach($mailinglist->clients()->get() as $mlc){
			$mailinglistClients [$mlc->id] = $mlc->id;
		}
		
        return view('mailinglist.edit', array(
            'mailinglist' => $mailinglist,
			'clients' => $clients,
			'mailinglistClients' => $mailinglistClients
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
