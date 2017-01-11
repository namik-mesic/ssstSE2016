<?php
// Damir Cengic //

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class DashboardController extends Controller
{
    
        /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

public function index () {


$name = Auth::user()->name; 
$lastname = Auth::user()->lastname;
$mail = Auth::user()->email;


        return view('dashboard', array(

            'name' => $name,
            'lastname' => $lastname,
            

        ));
	
}
}
