<?php
/* Inda Kreso */
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LinkingTest extends TestCase
{
    public function testHomePage() {
        $this->visit('/')
            -> click('Home')
            -> seePageIs('/');              /* Inda Kreso*/
    }

    public function testLoginPage() {           /* Inda Kreso*/
        $this->visit('/')
            -> click('login')
            -> seePageIs('/login');
    }

    public function testRegistrationPage() {
        $this->visit('/')
            -> click('register')                    /* Inda Kreso*/
            -> seePageIs('/register');
    }

    public function testFeaturesPage() {
        $this->visit('/')
            -> click('Features')                /* Inda Kreso*/
            -> see('#features');
    }

    public function testContactPage()
    {
        $this->visit('/')
            -> click('Contact')
            -> see('#contact');             /* Inda Kreso*/
    }
}


/* Inda Kreso */