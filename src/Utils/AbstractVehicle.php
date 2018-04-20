<?php

namespace App\Utils;

use App\Interfaces\FuelInterface;
use App\Interfaces\VehicleInterface;

abstract class AbstractVehicle implements VehicleInterface
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var float
     */
    protected $fuelValue = 0.0;

    /**
     * @var bool
     */
    protected $moves;

    /**
     * @return null|string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return $this
     */
    public function stop()
    {
        $this->moves = false;

        return $this;
    }

    /**
     * @param FuelInterface $fuel
     *
     * @return $this
     */
    public function refuel(FuelInterface $fuel)
    {
        $this->fuelValue += $fuel->getValue();

        return $this;
    }

    public function isMove(): ?bool
    {
        return $this->moves;
    }

}
