<?php

/**
 * By Sabahudin Kodro
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Contracts\Auth\Guard;

use App\Client;
use App\User;

class ClientController extends Controller
{

    /**
     * ClientController constructor.
     * @param Guard $auth
     */
    public function __construct(Guard $auth)
	{
		$this->middleware('auth');
	}

    /**
     * return index view of clients
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
	public function index()
	{
		$user = User::find(\Auth::id());
		$clients = $user->clients()->get();

		return view('client.index', array(
			'clients' => $clients
		));


	}


    /**Create function for clients
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
	
	public function create(Request $request)
	{
		$client = new Client;
		$client->user_id = \Auth::id();
		
		return view('client.create', array(
			'client' => $client
		));
	}


    /**Edit function for clients
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
	public function edit($id)
	{
		$client = Client::find($id);
		
		return view('client.edit', array(
			'client' => $client
		));
	}


    /**Store function for create and edit
     *
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
	public function store(Request $request)
	{
		$request->all();
		$input = $request['client'];
		
		$validator = \Validator::make($input, Client::$rules);
		
		if($validator->fails()){
			if($input['id']){
				return redirect()->route('client.edit', [$input['id']])->withErrors($validator)->withInput();
			}
			
			return redirect()->route('client.create')->withErrors($validator)->withInput();
		}

		if($input['id']){
			$client = Client::find($input['id']);
			$client->update($input);
			
			return redirect()->route('clients');
		}
		
		$client = new Client;
		$client->create($input);
		
		return redirect()->route('clients');
	}


    /* Inda Kreso*/
	public function delete($id) {
        $client = Client::find($id);
        $client -> delete();

        return redirect() -> route('clients');
        /* Inda Kreso*/
    }
}
