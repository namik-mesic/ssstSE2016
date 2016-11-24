<?php

namespace App\Http\Controllers;

use App\Services\FixerService;
use Illuminate\Http\Request;

class HistoricalRatesController extends Controller
{
    public function index()
    {
        return view('currency.historicalrates');
    }

    public function process(Request $request, FixerService $service)
    {
        $responseObject = $service->getHistory('2010-01-01', 'USD');

        dump($responseObject);
    }
}