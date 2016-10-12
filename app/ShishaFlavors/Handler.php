<?php

namespace App\ShishaFlavors;

/**
 * Class Handler
 * @package App\ShishaFlavors
 */
class Handler
{
    /**
     * @var ShishaFlavor[]
     */
    protected $flavors = [];

    /**
     * @return ShishaFlavor[]
     */
    public function getFlavors()
    {
        return $this->flavors;
    }

    /**
     * @return bool
     */
    public function isThereShisha()
    {
        return (bool) count($this->flavors);
    }

    /**
     * @param ShishaFlavor $shishaFlavor
     */
    public function addShisha(ShishaFlavor $shishaFlavor)
    {
        array_push($this->flavors, $shishaFlavor);
    }

    /**
     * @param $name
     * @return bool
     * @throws ShishaNotFoundException
     */
    public function removeShisha($name)
    {
        foreach ($this->flavors as $key => $flavor)
            if ($flavor->getName() == $name)
            {
                unset($this->flavors[$key]);

                return true;
            }

        throw new ShishaNotFoundException;
    }
}

