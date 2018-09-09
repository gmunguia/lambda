<?php

use PHPUnit\Framework\TestCase;

final class TransduceTest extends TestCase
{
    public function testTransduce()
    {
        $xfilter = L\curryN(2, function ($predicate, $concat) {
            return function ($acc, $x) use ($predicate, $concat) {
                return $predicate($x) ? $concat($acc, $x) : $acc;
            };
        });

        $xisOdd = $xfilter(function ($x) {
            return $x % 2 === 1;
        });

        $this->assertEquals(4, L\transduce($xisOdd, 'L\add', 0, [1, 2, 3]));
    }
}
