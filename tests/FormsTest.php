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

    public function testContactSupportForm() {
        $this->visit('/register')
            ->type('Inda', 'name')
            ->type('Kreso', 'lastname')
            ->type('Inda', 'email')

            ->type('pass','password')
            ->press('Register')
            ->seePageIs('/register');
    }

    public function testNewClientForm() {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
        ->visit('/client/create')
            ->withSession(['foo' => 'bar'])
            ->type('Inda', 'client[fname]')
            ->type('Kreso', 'client[lname]')
            ->type('inda@gmail.com','client[mail]')
            ->press('Submit')
            ->seePageIs('/clients');
    }

}
