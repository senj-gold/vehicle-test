<?php

namespace App\Utils;

use App\Interfaces\LoadInterface;

/**
 * Class Kamaz.
 */
class Kamaz extends AbstractVehicle implements LoadInterface
{
    private $load = false;

    /**
     * Kamaz constructor.
     */
    public function __construct()
    {
        $this->name = 'kamaz';
    }

    /**
     * @return $this
     */
    public function move()
    {
        $this->moves = true;

        return $this;
    }

    /**
     * @return $this
     */
    public function load()
    {
        $this->load = true;

        return $this;
    }

    /**
     * @return $this
     */
    public function unLoad()
    {
        $this->load = false;

        return $this;
    }
}
