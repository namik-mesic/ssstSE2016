<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Client;

class ClientController extends Controller
{
    //
	
	public function create()
	{
		$client = new Client;
		$client->user_id = \Auth::id();
		
		return view('client.create', array(
			'client' => $client
		));
	}
}
