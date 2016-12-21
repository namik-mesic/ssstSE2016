<?php

namespace App\Http\Controllers;

use App\Services\LiveRateService;

class LiveRatesController extends Controller
{
    public function index(LiveRateService $service)
    {
        $lrate = $service->getLive();

        return view('currency.liverates', compact(
            'lrate'
        ));
    }
}
/** This controller was written by Ajla */
