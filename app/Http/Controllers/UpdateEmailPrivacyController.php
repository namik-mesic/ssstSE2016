<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UpdateEmailPrivacyController extends Controller
{
    public function privacy()
    {
        return view('privacy');
    }

    public function toggleEmailHidden()
    {
        /*
         * after the button is clicked,
         * isEmailHidden changes value to null/1
         * and birthday info becomes public/private - Dalila*/

        /** @var User $user */
        $user = \Auth::user();

        if ($user->isEmailHidden == null)
            $user->isEmailHidden = 1;

        else
            $user->isEmailHidden = null;

        $user->save();

        return redirect()->back();
    }
}