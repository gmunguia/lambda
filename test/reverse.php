<?php

use PHPUnit\Framework\TestCase;

final class ReverseTest extends TestCase
{
    public function testReverse()
    {
        $numbers = [1, 2, 3, 4];
        $this->assertEquals([4, 3, 2, 1], L\reverse($numbers));
    }
}
