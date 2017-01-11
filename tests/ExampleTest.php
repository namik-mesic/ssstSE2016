
<?php
/**
    Original Concept: Tarik Mutapcic
    Adjusted by: Adem Hadrovic
 */
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testVisitPages()
    {
        $this->visit('/map_food')
             ->see('Food');
        $this->visit('/map_drink')
            ->see('Drink');
        $this->visit('/map_entertainment')
            ->see('Entertainment');
        $this->visit('/map_hotel')
            ->see('Hotel');
        $this->visit('/map_bank')
            ->see('Bank');
        $this->visit('/map_parking')
            ->see('Parking');
        $this->visit('/map_shopping')
            ->see('Shopping');
        $this->visit('/map_worship')
            ->see('Worship');

    }
}
