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

    public function testLoginPage() {
        $this->visit('/')
            -> click('login')
            -> seePageIs('/login');
    }

    public function testRegistrationPage() {
        $this->visit('/')
            -> click('register')
            -> seePageIs('/register');
    }

    public function testFeaturesPage() {
        $this->visit('/')
            -> click('Features')
            -> see('#features');
    }

    public function testContactPage()
    {
        $this->visit('/')
            -> click('Contact')
            -> see('#contact');
    }

}
