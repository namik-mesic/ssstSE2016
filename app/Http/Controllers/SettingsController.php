<?php /* Damir Cengic  and  Dino Kodro */

namespace App\Http\Controllers;
use Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class SettingsController extends Controller
{

    /**
     * SettingsController constructor.
     */
     public function __construct()
    {
        $this->middleware('auth');

    }


    /**
     * Function for index view settings
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
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
	