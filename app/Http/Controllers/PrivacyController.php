<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PrivacyController extends Controller
{



    public function privacy()
    {
        return view('privacy');
    }
}