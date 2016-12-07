<?php

namespace App\Http\Controllers;

class LiveRatesController extends Controller
{
    public function index()
    {
        return view('currency.liverates');
    }
}