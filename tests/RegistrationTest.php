<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class RegistrationTest
 */
class RegistrationTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testValidRegistration()
    {
        $this->post('register', [
            'name' => 'Namik',
            'email' => 'namik.mesic@hotmail.com',
            'password' => 'password',
            'password_confirmation' => 'password'
        ]);

        $this->seeInDatabase('users', [
            'email' => 'namik.mesic@hotmail.com'
        ]);
    }
}
