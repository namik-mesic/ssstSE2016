<?php

/**
 * Created by PhpStorm.
 * User: Adem
 * Date: 1/8/2017
 * Time: 11:28 PM
 */

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CreatePlaceTest extends TestCase
{
    use DatabaseTransactions;

    function testValidCreation()
    {
        $this->post('create', [
            'name' => '',
            'vicinity' => '',
            'lat' => 0.0,
            'lng' => 0.0,
            'type' => ''
        ]);

        $this->seeInDatabase('places', [
            'name' => ''
        ]);


    }
}