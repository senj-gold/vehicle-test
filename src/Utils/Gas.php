<?php

namespace App\Utils;

use App\Interfaces\FuelInterface;

class Gas implements FuelInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $value = 0;

    /**
     * Gas constructor.
     */
    public function __construct()
    {
        $this->name = 'gas';
        $this->value = 20.0;
    }

    /**
     * @return null|string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getValue(): ?float
    {
        return $this->value;
    }
}
