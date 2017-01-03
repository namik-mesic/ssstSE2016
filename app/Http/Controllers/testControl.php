<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;


use App\User;

use Auth;
use Illuminate\Support\Facades\Hash;
use Redirect;


class testControl extends Controller
{

    /**
     * @param User $user
     * @param Request $request
     * @return Redirect
     */
    public function destroy(User $user, Request $request)
    {
        /**
         * $loggedPassword - password entered into the form
         * $userPassword - users password from DB
         * $isSame - result of Hash::check() method
         * method that deletes an account if entered password matches. It also return an error message if password
         * doesn't match
         */
        $loggedPassword=$request->get('password');
        $userPassword = Auth::user()->password;
        $isSame = Hash::check($loggedPassword, $userPassword);
        if($isSame == 1) {

            $userid = Auth::user()->id;
            $usertodelete = User::find($userid);
            $usertodelete->delete();


            return redirect('/') -> with('message2', 'Account successfully deleted!');
        }
        else {

            return redirect()->back()->with('message', 'Password does not match!');
        }
    }


}
