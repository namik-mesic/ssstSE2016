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
class CurrencyController
{
    /**
     * @return View
     */
    public function index()
    {
        return view('currency.index');
    }

    /**
     * @param Request $request
     * @param ConverterService $converterService
     * @return View
     */
    public function process(ConversionRequest $request, ConverterService $converterService)
    {

        $calculatedAmount = $converterService->calculate(
            $request->get('amount'),
            $request->get('from'),
            $request->get('to')
        );


        return view('currency.index', compact(
            'calculatedAmount'
        ));
    }
}