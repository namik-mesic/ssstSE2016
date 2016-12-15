<?php

namespace App\Http\Controllers;

use App\Services\LiveRateService;

class LiveRatesController extends Controller
{
    public function index()
    {
        return view('currency.liverates');
    }

    public function process(LiveRateService $service)
    {
        $lrate = $service->getLive();

        return view('currency.liverates', compact(
            'lrate'
        ));
    }
}