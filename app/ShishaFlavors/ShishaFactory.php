<?php

namespace App\ShishaFlavors;

/**
 * Class ShishaFactory
 * @package App\ShishaFlavors
 */
class ShishaFactory
{
    /**
     * @param $name
     * @param $pricePerUnit
     * @param $rating
     * @return ShishaFlavor
     */
    public function create($name, $pricePerUnit, $rating)
    {
        return new ShishaFlavor(
            $name,
            $pricePerUnit,
            $rating
        );
    }
}
