<?php

namespace App\Http\Controllers;

use App\Http\Requests\HistoricalRequest;
use App\Services\FixerService;
use Illuminate\Http\Request;

class HistoricalRatesController extends Controller
{
    public function index()
    {
        return view('currency.historicalrates');
    }

    /**
     * @param Request $request
     * @param FixerService $service
     */
    public function process(HistoricalRequest $request, FixerService $service)
    {
        $historicalrate = $service->getHistory(
        $request->get('date'),
        $request->get('curr'));


        return view('currency.historicalrates', compact(
            'historicalrate'
        ));
    }
}
/** This controller was written by Ajla */