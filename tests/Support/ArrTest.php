<?php

namespace Castiron\Peaches\Tests\Support;

use Castiron\Peaches\Support\Arr;
use Castiron\Peaches\Support\Num;

class ArrTest extends \PHPUnit_Framework_TestCase
{


    /** @var array */
    protected $arr;

    public function setUp() {
        $this->arr = array(
          'a' => 1,
          'b' => 2,
          'c' => 3,
          'd' => 4,
          'e' => 5,
          'f' => 6,
        );
    }

    /** @test */
    public function itSelectsRandomItems() {
        $this->checkForNewResultsEachTime(function() {
            return Arr::selectRand($this->arr, 3);
        });
    }

    /** @test */
    public function itSelectsRandomItemsWithCorrectCount() {
        $actual = Arr::selectRand($this->arr, 3);
        $this->assertCount(3, $actual);
    }

    /** @test */
    public function itSelectsRandomItemsWithRightKeys() {
        $actual = Arr::selectRand($this->arr, 3);
        $this->assertArrayHasKey(key($actual), $this->arr);
    }

    /** @test */
    public function itSelectsRandomItemReturningItemIfCountIsOne() {
        $actual = Arr::selectRand($this->arr, 1);
        $this->assertTrue(is_numeric($actual));
    }

    /** @test */
    public function itShufflesAssociativeArrays() {
        $this->checkForNewResultsEachTime(function() {
            return Arr::shuffleAssoc($this->arr);
        });
    }

    /** @test */
    public function itShufflesAssociativeArraysWithRightKeys() {
        $actual = Arr::shuffleAssoc($this->arr);
        $this->assertArrayHasKey(key($actual), $this->arr);
    }

    /** @test */
    public function itSplicesWithCallbacksWithCorrectResultsCount() {
        $results = Arr::spliceWhere($this->arr, function($val, $key) {
            return $key == 'b' || $val == 4;
        });
        $this->assertCount(2, $results);
    }

    /** @test */
    public function itSplicesWithCallbacksWithCorrectLeftoverCount() {
        $results = Arr::spliceWhere($this->arr, function($val, $key) {
            return $key == 'b' || $val == 4;
        });
        $this->assertCount(4, $this->arr);
    }

    /** @test */
    public function itSplicesWithCallbacksReturningEarly() {
        $iterations = 0;
        $results = Arr::spliceWhere($this->arr, function($val, $key) use (&$iterations) {
            return $val > 3 ? -1 : ++$iterations;
        });
        $this->assertEquals(3, $iterations);
    }

    /** @test */
    public function itSplicesWithCallbacksUsingLimits() {
        $iterations = 0;
        $results = Arr::spliceWhere($this->arr, function($val, $key) use (&$iterations) {
            return TRUE;
        }, 3);
        $this->assertCount(3, $results);
    }

    /** @test */
    public function itChecksKeysHaveValues() {
        $arr = array('one' => '', 'two' => 3);
        $this->assertFalse(Arr::hasValuesForKeys($arr, array_keys($arr)));
    }

    /** @test */
    public function itChecksKeysHaveValuesMissingKeys() {
        $arr = array('one' => '', 'two' => 3);
        $this->assertFalse(Arr::hasValuesForKeys($arr, array('one', 'two', 'three')));
    }

    /** @test */
    public function itChecksKeysHaveValuesIncludingSpaces() {
        $arr = array('one' => '    ', 'two' => 3);
        $this->assertFalse(Arr::hasValuesForKeys($arr, array_keys($arr)));
    }

    /** @test */
    public function itConvertsAssocArraysToStdClass() {
        $arr = array('a' => 1, 'b' => 3);
        $obj = Arr::toStdClass($arr);
        $this->assertEquals(3, $obj->b);
    }

    /** @test */
    public function itConvertsMultiAssocArraysToStdClass() {
        $arr = array('a' => 1, 'b' => array('c' => 4));
        $obj = Arr::toStdClass($arr);
        $this->assertEquals(4, $obj->b->c);
    }

    /** @test */
    public function itConvertsMultiAssocArraysToStdClassLeavingIndexedArraysAsArrays() {
        $arr = array('a' => 1, 'b' => array('c' => 4), 'd' => array(1 => 'e', '2' => 'f'));
        $obj = Arr::toStdClass($arr);
        $this->assertTrue(is_array($obj->d));
    }

    /** @test */
    public function itConvertsStdClassToArray() {
        $obj = new \stdClass();
        $obj->a = 1;
        $obj->b = 3;
        $arr = Arr::fromStdClass($obj);
        $this->assertEquals(3, $arr['b']);
    }

    /** @test */
    public function itConvertsDeepStdClassToArray() {
        $obj = new \stdClass();
        $obj->a = 1;
        $obj->b = new \stdClass();
        $obj->b->c = 4;
        $arr = Arr::fromStdClass($obj);
        $this->assertEquals(4, $arr['b']['c']);
    }

    /** @test */
    public function itFindsFirstValue() {
        $arr = array('a' => 3, 'b' => 4, 'c' => 5, 'd' => 6);
        $func = function ($val) { return $val % 2 == 0; };
        $this->assertEquals(4, Arr::find($arr, $func));
    }

    /** @test */
    public function itFailsWhenFindingAndNothingFound() {
        $arr = array('a' => 3, 'b' => 4, 'c' => 5, 'd' => 6);
        $func = function ($val) { return $val % 7 == 0; };
        $this->assertEquals(-1, Arr::find($arr, $func));
    }

    /** @test */
    public function itFindsFirstValueUsingKey() {
        $arr = array('a' => 3, 'b' => 4, 'c' => 5, 'd' => 6);
        $func = function ($val, $key) { return in_array($key, array('b','d')); };
        $this->assertEquals(4, Arr::find($arr, $func));
    }

    /** @test */
    public function itFailsWhenFindingAndNothingFoundUsingKey() {
        $arr = array('a' => 3, 'b' => 4, 'c' => 5, 'd' => 6);
        $func = function ($val, $key) { return in_array($key, array('e','f')); };
        $this->assertEquals(-1, Arr::find($arr, $func));
    }

    /** @test */
    public function itFindsFirstIncorrectValue() {
        $arr = array('a' => 2, 'b' => 4, 'c' => 5, 'd' => 6);
        $this->assertEquals(5, Arr::findNot($arr, [Num::class, 'isEven']));
    }

    /** @test */
    public function itDeterminesIsIndexed() {
        $arr = array(1 => 'one', "2" => 'two');
        $this->assertTrue(Arr::isIndexed($arr));
    }

    /** @test */
    public function itDeterminesNotIndexed() {
        $arr = array(1 => 'one', "two" => 2);
        $this->assertFalse(Arr::isIndexed($arr));
    }

    /** @test */
    public function itDeterminesIsAssociative() {
        $arr = array('one' => 1, "two" => 2);
        $this->assertTrue(Arr::isAssoc($arr));
    }

    /** @test */
    public function itDeterminesNotAssociative() {
        $arr = array(1 => 'one', "two" => 2);
        $this->assertFalse(Arr::isAssoc($arr));
    }

    /** @test */
    public function itWalksKeysRecursively() {
        $arr      = array('one.' => 1, 'more.' => array('two.' => 2));
        $expected = array('one'  => 1, 'more'  => array('two'  => 2));
        $func = function ($key) { return rtrim($key, '.'); };
        Arr::walkKeysRecursive($arr, $func);
        $this->assertEquals($expected, $arr);
    }

    /** @test */
    public function itRemovesByKeys() {
        $arr = array('one' => 1, 'two' => 2, 'three' => 3);
        $expected = array('one' => 1, 'three' => 3);
        $this->assertEquals($expected, Arr::removeByKeys($arr, array('two')));
    }

    /** @test */
    public function itRemovesByKeysEvenIfEmpty() {
        $this->assertEquals(array(), Arr::removeByKeys(array(), array('two')));
    }

    /** @test */
    public function itSafelyFindsArrayValues() {
        $this->assertEquals(3, Arr::safe(array('three' => 3), 'three'));
    }

    /** @test */
    public function itSafelyFindsArrayValuesRecursively() {
        $arr = array('three' => array('four' => array('five' => 3)));
        $this->assertEquals(3, Arr::safe($arr, array('three', 'four', 'five')));
    }

    /** @test */
    public function itSafelyFailsToFindArrayValuesRecursively() {
        $arr = array('three' => array('four' => array('six' => 3)));
        $this->assertEquals('oops', Arr::safe($arr, array('three', 'four', 'five'), 'oops'));
    }

    /** @test */
    public function itSafelyFailsToFindArrayValuesRecursivelyAgain() {
        $arr = array('three' => array('four' => array('six' => array('five' => 3))));
        $this->assertEquals('oops', Arr::safe($arr, array('three', 'four', 'five'), 'oops'));
    }

    /** @test */
    public function itSafelyFailsToFindArrayValuesRecursivelyAgainAgain() {
        $arr = array('three' => array('four' => 4));
        $this->assertEquals('oops', Arr::safe($arr, array('three', 'four', 'five'), 'oops'));
    }

    /** @test */
    public function itSafelyFindsNestedArrayWithinArray() {
        $arr = array('me' => array('dad' => array('grampa' => array('great-gramp' => "Joe"))));
        $grampa = array('grampa' => array('great-gramp' => "Joe"));
        $this->assertEquals($grampa, Arr::safe($arr, array('me','dad')));
    }

    /** @test */
    public function itChecksThatTwoArraysAreTheSameByKeys() {
        $one = array('a' => 2, 'b' => 3, 'c' => 4);
        $two = array('c' => 4, 'a' => 2, 'b' => 3);
        $this->assertTrue(Arr::isSameByKeys($one, $two, array('a', 'b')));
    }

    /** @test */
    public function itChecksThatTwoArraysAreDifferentByKeys() {
        $one = array('a' => 2, 'b' => 3, 'c' => 4);
        $two = array('c' => 4, 'a' => 1, 'b' => 3);
        $this->assertFalse(Arr::isSameByKeys($one, $two, array('a', 'b')));
    }

    /** @test */
    public function itChecksThatTwoArraysAreDifferentByKeysBecauseKeyIsMissing() {
        $one = array('a' => 2, 'b' => 3, 'c' => 4);
        $two = array('c' => 4, 'b' => 3);
        $this->assertFalse(Arr::isSameByKeys($one, $two, array('a', 'b')));
    }

    /** @test */
    public function itChecksThatTwoEmptyArraysAreTheSameByKeys() {
        $this->assertTrue(Arr::isSameByKeys(array(), array(), array('four', 'five')));
    }

    /** @test */
    public function itCanRequireKeysWhenComparingArrays() {
        $one = array('a' => 2, 'c' => 4);
        $two = array('c' => 4, 'a' => 2);
        $this->assertFalse(Arr::isSameByKeys($one, $two, array('a', 'b'), TRUE));
        $this->assertTrue(Arr::isSameByKeys($one, $two, array('a', 'b')));
    }

    /** @test */
    public function itDescribesDifferencesByKeys() {
        $alpha = array_fill_keys(array(1, 2, 3, 4, 8), 0);
        $beta = array_fill_keys(array(3, 4, 5, 6, 7), 0);
        $diff = Arr::describeDifferencesByKeys($alpha, $beta);
        $this->assertEquals(array_keys($diff['both']), array(3, 4));
        $this->assertEquals(array_keys($diff['alpha']), array(1, 2, 8));
        $this->assertEquals(array_keys($diff['beta']), array(5, 6, 7));
    }

    /** @test */
    public function itDescribesDifferences() {
        $alpha = array(1, 2, 3, 4, 8);
        $beta = array(3, 4, 5, 6, 7);
        $diff = Arr::describeDifferences($alpha, $beta);
        $this->assertEquals($diff['both'], array(2 => 3, 3 => 4));
        $this->assertEquals($diff['alpha'], array(1, 2, 4 => 8));
        $this->assertEquals($diff['beta'], array(2 => 5, 3 => 6, 4 => 7));
    }

    /** @test */
    public function itFlattensArrays() {
        $arr = [1, [2, 3, [4, 5], [6], 7]];
        $this->assertEquals([1, 2, 3, 4, 5, 6, 7], Arr::flatten($arr));
    }

    /** @test */
    public function itFlattensEmptyArrays() {
        $arr = [];
        $this->assertEquals([], Arr::flatten($arr));
    }

    public function testSafelyAppends()
    {
        $arr = [];
        Arr::safeAppend($arr, 'howdy', 'hello');
        $this->assertEquals(['howdy' => ['hello']], $arr);
    }

    public function testSafelyAppendsDeeply()
    {
        $arr = [];
        Arr::safeAppend($arr, 'howdy', 'hello', 'greetings', 'salutations');
        $this->assertEquals(['howdy' => ['hello' => ['greetings' => ['salutations']]]], $arr);
        Arr::safeAppend($arr, 'howdy', 'hello', 'greetings', 'good days');
        $this->assertEquals(['howdy' => ['hello' => ['greetings' => ['salutations', 'good days']]]], $arr);
    }

    public function testSafelySets()
    {
        $arr = [];
        Arr::safeSet($arr, 'howdy', 'hello');
        $this->assertEquals(['howdy' => 'hello'], $arr);
    }

    public function testSafelySetsDeeply()
    {
        $arr = [];
        Arr::safeSet($arr, 'howdy', 'hello', 'greetings', 'salutations');
        $this->assertEquals(['howdy' => ['hello' => ['greetings' => 'salutations']]], $arr);
        Arr::safeSet($arr, 'howdy', 'hello', 'greetings', 'good days');
        $this->assertEquals(['howdy' => ['hello' => ['greetings' => 'good days']]], $arr);
    }


    public function testSwapByKeys()
    {
        $arr = [1,2,3,4,5,6];
        Arr::swapByKeys($arr, 1, 2);
        $this->assertEquals([1,3,2,4,5,6], $arr);
    }

    public function testMoveToFirstByKey()
    {
        $arr = ['a' => 1, 'b' => 2, 'c' => 3];
        Arr::moveToFirstByKey($arr, 'b');
        $this->assertEquals(['b' => 2, 'a' => 1, 'c' => 3], $arr);
    }

    public function testMapMethod()
    {
        $arr = [
            \DateTime::createFromFormat('j-M-Y', '15-Feb-2009'),
            \DateTime::createFromFormat('j-M-Y', '10-Feb-2009'),
            \DateTime::createFromFormat('j-M-Y', '05-Feb-2009'),
        ];
        $days = Arr::mapMethod($arr, 'format', 'j');
        $this->assertEquals(['15','10','5'], $days);
    }

    public function testMapMethodCallable()
    {
        list($b1, $b2, $b3) = [new \stdClass, new \stdClass, new \stdClass];
        $b1->book = 4;
        $b2->book = 8;
        $b3->book = 10;
        $arr = [$b1, $b2, $b3];
        $books = Arr::mapMethod($arr, 'book');
        $this->assertEquals([4,8,10], $books);
    }

    public function testSortBy()
    {
        $start = [
            'carol' => ['id' => 4],
            'anna'  => ['id' => 2],
            'betty' => ['id' => 3],
        ];
        $end = [
            'anna'  => ['id' => 2],
            'betty' => ['id' => 3],
            'carol' => ['id' => 4],
        ];

        $res = Arr::sortBy($start, 'id');
        $this->assertEquals($res, $end);
    }

    /**
     * @param callable $callable
     */
    protected function checkForNewResultsEachTime(callable $callable) {
        $sameCount = $diffCount = 0;
        $old = $callable();
        for($i = 0; $i < 1000; ++$i) {
            $new = $callable();
            if ($old === $new) {
                ++$sameCount;
            } else {
                ++$diffCount;
            }
            $old = $new;
        }
        $this->assertGreaterThan($sameCount, $diffCount);
    }
}