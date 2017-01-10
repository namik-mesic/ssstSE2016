<?php
/* Inda Kreso */

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FormsTest extends TestCase
{
    public function testLoginForm() {
        $this->visit('/login')
            ->type('Inda', 'email')             /* Inda Kreso*/
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
            ->press('Register')             /* Inda Kreso*/
            ->seePageIs('/register');
    }

    public function testContactSupportForm() {
        $this->visit('/register')               /* Inda Kreso*/
            ->type('Inda', 'name')
            ->type('Kreso', 'lastname')
            ->type('Inda', 'email')

            ->type('pass','password')
            ->press('Register')
            ->seePageIs('/register');
    }

    public function testNewClientForm() {
        $user = factory(App\User::class)->create();
        /* Inda Kreso*/                         /* Inda Kreso*/
        $this->actingAs($user)
        ->visit('/client/create')
            ->withSession(['foo' => 'bar'])
            ->type('Inda', 'client[fname]')
            ->type('Kreso', 'client[lname]')
            ->type('inda@gmail.com','client[mail]')
            ->press('Submit')
            ->seePageIs('/clients');
    }

    public function testNewMailForm() {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->visit('/mail/create')
            ->withSession(['foo' => 'bar'])
            ->type('Inda', 'mail[name]')
            ->type('Subject', 'mail[subject]')
            ->type('content','mail[content]')
            ->press('Submit')                           /* Inda Kreso*/
            ->seePageIs('/mails');
    }

    public function testNewCampaignForm() {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->visit('/campaign/create')
            ->withSession(['foo' => 'bar'])
            ->type('Inda', 'campaign[name]')
            ->type('content','campaign[content]')                   /* Inda Kreso*/
            ->press('Save')
            ->seePageIs('/campaigns');
    }

    public function testNewMailingListForm() {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->visit('/mailinglist/create')
            ->withSession(['foo' => 'bar'])
            ->type('Inda', 'mailinglist[name]')
            ->press('Submit')
            ->seePageIs('/mailinglists');           /* Inda Kreso*/
    }

    /*
    public function testNewScheduleForm() {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->visit('/schedule/create')
            ->withSession(['foo' => 'bar'])
            ->select(4, 'campaignschedule[campaign_id]')
            //->select(1,'campaignschedule[mailing_list_id]')
            ->press('Submit')
            ->seePageIs('/mailinglists');
    }
    */



}


/*Inda Kreso */