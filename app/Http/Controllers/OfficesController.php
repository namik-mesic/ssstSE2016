<?php

namespace App\Http\Controllers;

class OfficesController extends Controller
{
    public function index()
    {
        return view('currency.offices');
    }
    public function index1()
    {
        return view('currency.offices1');
    }

    public function index2()
    {
        return view('currency.offices2');
    }
}