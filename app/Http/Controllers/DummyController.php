<?php

namespace App\Http\Controllers;

use App\ShishaFlavors\Handler;
use App\ShishaFlavors\ShishaFactory;
use App\ShishaFlavors\ShishaNotFoundException;
use Illuminate\View\View;

/**
 * Class DummyController
 * @package App\Http\Controllers
 */
class DummyController extends Controller
{
    /**
     * @return View
     */
    public function index()
    {
        $shishaHandler = new Handler();

        $factory = new ShishaFactory();

        $shishaHandler->addShisha(
            $factory->create(
                'PineApple',
                7,
                4.5
            )
        );

        try {
            $shishaHandler->removeShisha('PineApple');
        }

        catch (ShishaNotFoundException $e)
        {
            return 'Oops nema te';
        }

        $flavors = $shishaHandler->getFlavors();
        $isThereShisha = $shishaHandler->isThereShisha();

        return view('shisha.flavors', compact(
            'flavors',
            'isThereShisha'
        ));
    }
}