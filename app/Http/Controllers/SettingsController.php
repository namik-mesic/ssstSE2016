<?php /* Damir Cengic  and  Dino Kodro */

namespace App\Http\Controllers;
use Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

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

    $user_id = Auth::user()->id;
    $name = Auth::user()->name;
    $lastname = Auth::user()->lastname;
    $mail = Auth::user()->email;


        return view('settings', array(

            'user_id' => $user_id,
            'name' => $name,
            'lastname' => $lastname,
            'mail' => $mail,

        ));
    }

    public function store(Request $request)
    {

        $request->all();
        $input = $request['user'];


        if($input['id']){
            $user = User::find($input['id']);
            $user ->update($input);

            return redirect()->route('settings');
        }


    }


}
	