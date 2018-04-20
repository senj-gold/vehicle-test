<?php

namespace App\Utils;

use App\Interfaces\MoveInterface;
use App\Interfaces\MusicInterface;
use App\Traits\MusicTrait;

/**
 * Class Bmw.
 */
class Bmw extends AbstractVehicle implements MusicInterface, MoveInterface
{
    use MusicTrait;

    /**
     * Bmw constructor.
     */
    public function __construct()
    {
        $this->name = 'bmw';
    }

    /**
     * @return $this
     */
    public function move()
    {
        $this->moves = true;

        return $this;
    }
}
