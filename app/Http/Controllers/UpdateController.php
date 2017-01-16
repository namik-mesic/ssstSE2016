<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;


use App\User;

use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Redirect;


class UpdateController extends Controller
{
    /**
     * @param User $user
     * @param Request $request
     * @return Redirect
     */
    public function update(Request $request)
    {
        $credentials=Session::get('data'); //variable that holds session data provided by user during profile update
        /**
         * $loggedPassword - password entered into the form
         * $userPassword - users password from DB
         * $isSame - result of Hash::check() method
         * method that updates an account if entered password matches. It also return an error message if password
         * doesn't match. -Nedzad
         */

        $loggedPassword=$request->get('password');
        $userPassword = Auth::user()->password;
        $isSame = Hash::check($loggedPassword, $userPassword);
        if($isSame == 1) {

            /**
             * if eneterd password matches the user's password, data will change and session will be destroyed. -Nejra
             */
            $user = Auth::user();
            if (array_key_exists('name',$credentials)) $user->name = $credentials['name'];
            if (array_key_exists('email',$credentials)) $user->email =$credentials['email'];
            if (array_key_exists('password',$credentials)) $user->password = bcrypt($credentials['password']);
            $user->save();
            Session::forget('data');
            return redirect('/profile');

        }else{

            return redirect()->back()->with('message', 'Password does not match!');
        }


    }


}
