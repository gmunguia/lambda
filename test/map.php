<?php

use PHPUnit\Framework\TestCase;

final class MapTest extends TestCase
{
    public function testMap()
    {
        $numbers = [1, 2, 3, 4];
        $this->assertEquals(
            L\map(function ($n) {
                return $n + 1;
            }, $numbers),
            [2, 3, 4, 5]
        );
    }
}
