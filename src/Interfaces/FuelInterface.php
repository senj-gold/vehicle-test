<?php

namespace App\Interfaces;

/**
 * Interface FuelInterface.
 */
interface FuelInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @return float
     */
    public function getValue();
}
