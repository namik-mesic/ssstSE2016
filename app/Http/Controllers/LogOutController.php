<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;

class LogOutController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function getSignOut() {

        Auth::logout();
        return view('main');

    }
}
