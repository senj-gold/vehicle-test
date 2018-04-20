<?php

namespace App\Test\Utils;

use App\Utils\Helicopter;
use App\Utils\Kamaz;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;

/**
 * Class KamazTest.
 */
class KamazTest extends TestCase
{
    public function testBoat()
    {
        $item = new Kamaz();
        $this->assertEquals(false, $item->isMove());
        $item->move();
        $this->assertEquals(true, $item->isMove());
        $item->stop();
        $this->assertEquals(false, $item->isMove());
    }
}