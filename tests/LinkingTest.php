<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LinkingTest extends TestCase
{
    public function testHomePage() {
        $this->visit('/')
            -> click('Home')
            -> seePageIs('/');
    }

}
