<?php

/**
 * Created by PhpStorm.
 * User: Adem
 * Date: 1/8/2017
 * Time: 11:28 PM
 * This Test is design to test the valid place operations
 */

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CreatePlaceTest extends TestCase
{
    use DatabaseTransactions;

    function testValidCreation()
    {
        $this->post('places', [
            'name' => 'Begova Dzamija',
            'vicinity' => 'Hrasnicka Cesta 3a',
            'lat' => 43.8238573,
            'lng' => 18.306216,
            'type' => 'place_of_worship'
        ]);

        $this->seeInDatabase('places', [
            'name' => 'Begova Dzamija',
            'type' => 'place_of_worship'
        ]);


    }
}