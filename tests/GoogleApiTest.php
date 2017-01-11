
<?php
/**
    Original Concept: Tarik Mutapcic
    Adjusted by: Adem Hadrovic
 */
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class GoogleApiTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testGoogleApi()
    {
        $this->visit('https://maps.googleapis.com/')
            ->assertResponseOk();

    }
}
