<?php

/**
 * By Sabahudin Kodro
 */

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;

class LogOutController extends Controller
{

    /**
     * LogOutController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function getSignOut() {

        Auth::logout();
        return view('main');

    }
}
