<?php

namespace Castiron\Peaches\Tests\Support;

use Castiron\Peaches\Support\Date;

class DateTest extends \PHPUnit_Framework_TestCase
{

    public function testSameYear()
    {
        $this->assertTrue(Date::hasSameYear(new \DateTime('July 2008'), new \DateTime('June 2008')));
        $this->assertFalse(Date::hasSameYear(new \DateTime('July 2008'), new \DateTime('July 2007')));
    }

    public function testLaterYear()
    {
        $this->assertFalse(Date::hasLaterYear(new \DateTime('July 2008'), new \DateTime('July 2007')));
        $this->assertTrue(Date::hasLaterYear(new \DateTime('July 2007'), new \DateTime('July 2008')));
    }

    public function testLaterMonth()
    {
        $this->assertTrue(Date::hasLaterMonth(new \DateTime('July 2007'), new \DateTime('July 2008')));
        $this->assertTrue(Date::hasLaterMonth(new \DateTime('December 2007'), new \DateTime('July 2008')));
        $this->assertFalse(Date::hasLaterMonth(new \DateTime('December 2007'), new \DateTime('July 2007')));
        $this->assertTrue(Date::hasLaterMonth(new \DateTime('July 2007'), new \DateTime('August 2007')));
    }

    public function testLaterDay()
    {
        $this->assertTrue(Date::hasLaterDay(new \DateTime('July 3 2007'), new \DateTime('July 5 2007')));
        $this->assertTrue(Date::hasLaterDay(new \DateTime('July 3 2007'), new \DateTime('July 5 2008')));
        $this->assertTrue(Date::hasLaterDay(new \DateTime('July 3 2007'), new \DateTime('June 5 2008')));
        $this->assertFalse(Date::hasLaterDay(new \DateTime('July 3 2007'), new \DateTime('June 5 2007')));
    }

    public function testMonthIntegerToString()
    {
        $this->assertEquals('January', Date::monthIntegerToString(1));
        $this->assertEquals('April', Date::monthIntegerToString(4));
    }
}