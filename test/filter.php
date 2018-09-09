<?php

use PHPUnit\Framework\TestCase;

final class FilterTest extends TestCase
{
    public function testFilter()
    {
        $numbers = [1, 2, 3, 4];

        $isOdd = function ($n) {
            return $n % 2 === 1;
        };

        $this->assertEquals([0 => 1, 2 => 3], L\filter($isOdd, $numbers));
    }
}
