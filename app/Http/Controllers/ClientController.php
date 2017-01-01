<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Client;

class ClientController extends Controller
{
    //
	
	public function create(Request $request)
	{
		$input = $request->all();
		$input = $request['client'];
		
		$client = new Client;
		$client->user_id = \Auth::id();
		
		return view('client.create', array(
			'client' => $client
		));
	}
	
	public function store(Request $request)
	{
		$input = $request->all();
		$input = $request['client'];
		
		$validator = \Validator::make($input, Client::$rules);
		
		if($validator->fails()){
			return redirect()->route('client.create')->withErrors($validator)->withInput();
		}

		if($input['id']){
			$client = Client::find($input['id']);
			$action->update($input);
			
			return redirect()->route('clients');
		}
		
		$client = new Client;
		$client->create($input);
		
		return redirect()->route('clients');
	}
}
