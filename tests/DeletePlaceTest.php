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

class DeletePlaceTest extends TestCase
{
    use DatabaseTransactions;

    function testValidDeletion()
    {


        DB::table('places')->where('name', 'Begova Dzamija')->delete();

        $this->missingFromDatabase('places', [
            'name' => 'Begova Dzamija',
            'type' => 'place_of_worship'
        ]);


    }
}