<?php

/*
 * By: Sabahudin Kodro
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

use App\MailingList;
use App\User;
use App\Client;

class MailingListController extends Controller
{

    protected $user;


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

        $client_exist = false;

        foreach($mailinglists as $mailinglist)
        {
            if ($mailinglist -> id != NULL) {
                $clients[] = DB::table('mailing_list_clients')->where('mailing_list_id', $mailinglist->id)->count();
                $client_exist = true;
            }
        }

        if ($client_exist)
        {
            return view('mailinglist.index', array(
                'mailinglists' => $mailinglists,
                'clients' => $clients
            ));
        }



        else
        {
            return view('mailinglist.index', array(
                'mailinglists' => $mailinglists
            ));
        }




    }

    public function create()
    {
		$user = User::find(\Auth::id());
		
        $mailinglist = new MailingList;
        $mailinglist->user_id = \Auth::id();

		$clients = $user->clients()->get();
		
		$mailinglistClients = array();
		
        return view('mailinglist.create', array(
            'mailinglist' => $mailinglist,
			'clients' => $clients,
			'mailinglistClients' => $mailinglistClients
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
            $mailinglist -> update($input);
			
			$mailinglist -> clients()->sync($clients);
			
            return redirect()->route('mailinglist.view', $input['id']);
        }

        $validator = \Validator::make($input, MailingList::$rules);

        if($validator->fails()){
            if($input['id']){
                return redirect()->route('mailinglist.edit', [$input['id']])->withErrors($validator)->withInput();
            }

            return redirect()->route('mailinglist.create')->withErrors($validator)->withInput();
        }


        if($input['id']){
            $mail = MailingList::find($input['id']);
            $mail ->update($input);

            return redirect()->route('mailinglists');
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

	
    public function view($id)
    {
        $mailinglist = MailingList::find($id);
        
		return view('mailinglist.view', array(
            'mailinglist' => $mailinglist,
        ));
    }

    public function delete($id) {
        $mailinglist = MailingList::find($id);
        $mailinglist -> delete();

        return redirect() -> route('mailinglists'); /* Inda Kreso*/

    }



}