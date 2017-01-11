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

class UpdatePlaceTest extends TestCase
{
    use DatabaseTransactions;

    function testValidUpdate()
    {

        DB::table('places')
            ->where(function ($query){

                $query->where('name','=','Begova Dzamija')
                        ->where('type','=','place_of_worship');

            })
            ->update(array('name' => 'Sarajevo School of Science and Technology'),
                array('vicinity' => ' Hrasnička cesta 3a, Ilidža 71210 '));

        $this->seeInDatabase('places', [
            'name' => 'Sarajevo School of Science and Technology',
            'type' => 'place_of_worship'
        ]);


    }
}