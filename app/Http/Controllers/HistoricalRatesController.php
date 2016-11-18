<?php

namespace App\Http\Controllers;

class HistoricalRatesController extends Controller
{
    public function index()
    {
        return view('currency.historicalrates');
    }
}