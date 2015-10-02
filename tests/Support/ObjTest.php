<?php

namespace Castiron\Peaches\Tests\Support;

use Castiron\Peaches\Support\Obj;

class ObjTest extends \PHPUnit_Framework_TestCase
{

    public $prop1 = 'uno';

    public function method2()
    {
        return 'dos';
    }

    public function hitMe()
    {
        return 'cuatro';
    }

    public function stay()
    {
        return 'cinco';
    }

    public function testAccessObjectProperties()
    {
        $this->assertEquals('uno', Obj::access($this, 'prop1'));
    }

    public function testAccessObjectMethods()
    {
        $this->assertEquals('dos', Obj::access($this, 'method2'));
    }

    public function testAccessArrayValues()
    {
        $arr = ['three' => 'tres'];
        $this->assertEquals('tres', Obj::access($arr, 'three'));
    }

    public function testAccessObjectWithCallable()
    {
        $this->assertEquals('cuatro', Obj::access($this, function ($obj) {
            return $obj->hitMe();
        }));
    }

    public function testAccessor()
    {
        $accessor = Obj::accessor('stay');
        $this->assertEquals('cinco', $accessor($this));
    }
}