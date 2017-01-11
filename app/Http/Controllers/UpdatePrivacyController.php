<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UpdatePrivacyController extends Controller
{



    public function privacy()
    {
        return view('privacy');
    }
}