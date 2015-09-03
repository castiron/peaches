<?php

namespace Peaches\Tests\Support;

use Peaches\Support\Html;

class HtmlTest extends \PHPUnit_Framework_TestCase
{

    public function testIsEmpty()
    {
        $this->assertTrue(Html::is_empty(""));
        $this->assertTrue(Html::is_empty("<p></p>"));
        $this->assertTrue(Html::is_empty("<p></p><p></p>"));
        $this->assertFalse(Html::is_empty("<p>1;hv af </p></p><p></p>"));
        $this->assertFalse(Html::is_empty("<p></p><p>adf adsf</p>"));
    }

}