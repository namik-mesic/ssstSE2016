<?php /* Damir Cengic  and  Dino Kodro */

namespace App\Http\Controllers;
use Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class SettingsController extends Controller
{
    //

     public function __construct()
    {
        $this->middleware('auth');

    }

    public function index () {

    $name = Auth::user()->name; 
    $lastname = Auth::user()->lastname;
    $mail = Auth::user()->email;


        return view('settings', array(

            'name' => $name,
            'lastname' => $lastname,
            'mail' => $mail,

        ));
    }

}
	