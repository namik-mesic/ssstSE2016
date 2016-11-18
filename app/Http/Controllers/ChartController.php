<?php

namespace App\Http\Controllers;

class ChartController extends Controller
{
    public function index()
    {
        return view('currency.chart');
    }
}