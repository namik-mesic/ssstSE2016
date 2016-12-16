<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ColorController extends Controller
{

    /**
     * @param Request $requ
     * should save the color from the request to the database
     * curently just diplays that the color has succesfuly been
     * forwarded to the controller - Edim
     */

    public function update(Request $requ)
    {
        $color = $requ->get('color');
        var_dump($color);
    }
}