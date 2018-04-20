<?php

namespace App\Traits;

/**
 * Trait MusicTrait.
 */
 trait MusicTrait
{
    protected $musicEnabled = false;

    public function musicOn()
    {
        $this->musicEnabled = true;
    }

    public function musicOff()
    {
        $this->musicEnabled = false;
    }
}
