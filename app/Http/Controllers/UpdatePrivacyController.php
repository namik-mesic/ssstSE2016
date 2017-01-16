<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UpdatePrivacyController extends Controller
{
    public function privacy()
    {
        return view('privacy');
    }

    public function toggleNameHidden()
    {
        /*
         * after the button is clicked,
         * isNameHidden changes value
         * and info becomes public/private - Dalila*/

        /** @var User $user */
        $user = \Auth::user();

        if ($user->isNameHidden == null)
            $user->isNameHidden = 1;

        else
            $user->isNameHidden = null;

        $user->save();

        return redirect()->back();
    }
}