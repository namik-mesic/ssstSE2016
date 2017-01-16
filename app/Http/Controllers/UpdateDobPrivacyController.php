<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UpdateDobPrivacyController extends Controller
{
    public function privacy()
    {
        return view('privacy');
    }

    public function toggleDobHidden()
    {
        /*
         * after the button is clicked,
         * isHidden changes value
         * and birthday info becomes public/private - Dalila*/

        /** @var User $user */
        $user = \Auth::user();

        if ($user->isHidden == null)
            $user->isHidden = 1;

        else
            $user->isHidden = null;

        $user->save();

        return redirect()->back();
    }
}