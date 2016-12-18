<?php

namespace  App\Http\Controllers;
use App\Http\Requests\ConversionRequest;
use App\Services\ConverterService;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Class CurrencyController
 * @package App\Http\Controllers
 */
class StartController
{
    /**
     * @return View
     */
    public function index()
    {
        return view('starting_page');
    }


}
/** This controller was written by Ajla */
