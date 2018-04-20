<?php

namespace App\Utils;

use App\Interfaces\FlyInterface;

/**
 * Class Helicopter.
 */
class Helicopter extends AbstractVehicle implements FlyInterface
{
    private $fly = false;

    /**
     * Helicopter constructor.
     */
    public function __construct()
    {
        $this->name = 'helicopter';
    }

    /**
     * @return $this
     */
    public function fly()
    {
        $this->moves = true;
        $this->fly = true;

        return $this;
    }

    /**
     * @return $this
     */
    public function landing()
    {
        $this->fly = false;

        return $this;
    }

    /**
     * @return bool
     */
    public function isFly(): ?bool
    {
        return $this->fly;
    }
}
