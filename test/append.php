<?php

use PHPUnit\Framework\TestCase;

final class AppendTest extends TestCase
{
    public function testAppend()
    {
        $numbers = [1, 2, 3, 4];
        $this->assertEquals(L\append(5, $numbers), [1, 2, 3, 4, 5]);
        $this->assertEquals(L\append(6, $numbers), [1, 2, 3, 4, 6]);
    }
}
