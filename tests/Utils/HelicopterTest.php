<?php

namespace App\Test\Utils;

use App\Utils\Helicopter;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;

/**
 * Class HelicopterTest.
 */
class HelicopterTest extends TestCase
{
    public function testBoat()
    {
        $item = new Helicopter();
        $this->assertEquals(false, $item->isFly());
        $item->fly();
        $this->assertEquals(true, $item->isFly());
        $item->landing();
        $this->assertEquals(false, $item->isFly());
    }
}