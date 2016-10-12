<?php

namespace App\ShishaFlavors;

/**
 * Class ShishaFlavor
 * @package App\ShishaFlavors
 */
class ShishaFlavor
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var double
     */
    protected $pricePerUnit;

    /**
     * @var double
     */
    protected $rating;

    /**
     * ShishaFlavor constructor.
     * @param $name
     * @param $pricePerUnit
     * @param $rating
     */
    public function __construct($name, $pricePerUnit, $rating)
    {
        $this->name = $name;
        $this->pricePerUnit = $pricePerUnit;
        $this->rating = $rating;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param float $pricePerUnit
     * @return ShishaFlavor
     */
    public function setPricePerUnit($pricePerUnit)
    {
        $this->pricePerUnit = $pricePerUnit;
        return $this;
    }

    /**
     * @return float
     */
    public function getPricePerUnit()
    {
        return $this->pricePerUnit;
    }

    /**
     * @return float
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param float $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }
}
