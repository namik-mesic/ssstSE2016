<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class ExampleTest extends TestCase
{
    /**
     *
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
            ->see('Proceed to our website!');
    }
}