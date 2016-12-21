<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SecondTest extends TestCase
{
    /**
     * Testing feature 2. Check convert function
     *
     * @return void
     */
    public function testConversion()
    {
        $this->visit('/main')
            ->type('50', 'amount')
            ->press('Convert')
            ->seePageIs('/main');
    }
}
