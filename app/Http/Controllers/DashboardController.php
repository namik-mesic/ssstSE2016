<?php
// Damir Cengic //

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class DashboardController extends Controller
{

    /**
     * DashboardController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Return view dashboard
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

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
