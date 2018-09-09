<?php

use PHPUnit\Framework\TestCase;

final class PipeTest extends TestCase
{
    public function testPipe()
    {
        $add1times3 = L\pipe(L\add(1), L\multiply(3));
        $times3add1 = L\pipe(L\multiply(3), L\add(1));
        $this->assertEquals(9, $add1times3(2));
        $this->assertEquals(7, $times3add1(2));
    }
}
