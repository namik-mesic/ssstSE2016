<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Place;



/**
 * Class PlaceController
 * @package App\Http\Controllers\Api
 */
class PlaceDataController extends Controller
{
   /**
    * returns places array
    * from DB

    */
    public function index()
    {

        $places = Place::all();

        return $places;

    }



}