<?php

namespace App\Interfaces;

/**
 * Interface VehicleInterface.
 */
interface VehicleInterface
{
    /**
     * @return string
     */
    public function getName();

    public function stop();

    /**
     * @param FuelInterface $fuel
     */
    public function refuel(FuelInterface $fuel);
}
