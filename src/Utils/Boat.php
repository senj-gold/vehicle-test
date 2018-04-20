<?php

namespace App\Utils;

use App\Interfaces\SwimInterface;

/**
 * Class Boat.
 */
class Boat extends AbstractVehicle implements SwimInterface
{
    private $swim = false;

    /**
     * Boat constructor.
     */
    public function __construct()
    {
        $this->name = 'boat';
    }

    /**
     * @return $this
     */
    public function swim()
    {
        $this->moves = true;
        $this->swim = true;

        return $this;
    }

    /**
     * @return $this
     */
    public function stop()
    {
        $this->swim = false;
        parent::stop();

        return $this;
    }

    /**
     * @return bool
     */
    public function isSwim(): ?bool
    {
        return $this->swim;
    }
}
