<?php

namespace App\Test\Utils;

use App\Utils\Bmw;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;

/**
 * Class BmwTest.
 */
class BmwTest extends TestCase
{
    public function testBmw()
    {
        $item = new Bmw();
        $this->assertEquals(false, $item->isMove());
        $item->move();
        $this->assertEquals(true, $item->isMove());
        $item->stop();
        $this->assertEquals(false, $item->isMove());
    }
}