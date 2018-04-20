<?php

namespace App\Test\Utils;

use App\Utils\Boat;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;

/**
 * Class BoatTest.
 */
class BoatTest extends TestCase
{
    public function testBoat()
    {
        $item = new Boat();
        $this->assertEquals(false, $item->isSwim());
        $item->swim();
        $this->assertEquals(true, $item->isSwim());
        $item->stop();
        $this->assertEquals(false, $item->isSwim());
    }
}