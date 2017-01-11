
<?php
/**
    Original Concept: Tarik Mutapcic
    Adjusted by: Adem Hadrovic
 */
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PlaceApiTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testPlaceApi()
    {
        $this->visit('/api/place')
            ->see("<body><p>[{\"id\"");

    }
}
