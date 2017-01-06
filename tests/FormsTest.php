<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FormsTest extends TestCase
{
    public function testLoginForm() {
        $this->visit('/login')
            ->type('Inda', 'email')
            ->type('pass','password')
            ->press('Log In')
            ->seePageIs('/login');
    }

    public function testRegistrationForm() {
        $this->visit('/register')
            ->type('Inda', 'name')
            ->type('Kreso', 'lastname')
            ->type('Inda', 'email')

            ->type('pass','password')
            ->press('Register')
            ->seePageIs('/register');
    }
}
