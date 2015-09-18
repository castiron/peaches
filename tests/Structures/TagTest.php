<?php

namespace Castiron\Peaches\Tests\Structures;


use Castiron\Peaches\Structures\Tag;

class TagTest extends \PHPUnit_Framework_TestCase
{

    public function testItWorks()
    {
        $t = new Tag('div');
        $this->assertSame("<div></div>\n", (string) $t);
    }
}