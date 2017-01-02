<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Contracts\Auth\Guard;

use App\Client;
use App\User;

class ClientController extends Controller
{
    public function __construct(Guard $auth)
	{	
		$this->middleware('auth');
	}
	
	public function index()
	{
		$user = User::find(\Auth::id());
		$clients = $user->clients()->get();
		
		return view('client.index', array(
			'clients' => $clients
		));
	}
	
	public function create(Request $request)
	{
		$client = new Client;
		$client->user_id = \Auth::id();
		
		return view('client.create', array(
			'client' => $client
		));
	}
	
	public function edit($id)
	{
		$client = Client::find($id);
		
		return view('client.edit', array(
			'client' => $client
		));
	}
	
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
}
