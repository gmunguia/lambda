<?php

use PHPUnit\Framework\TestCase;

final class ComposeTest extends TestCase
{
    public function testCompose()
    {
        $add1times3 = L\compose(L\multiply(3), L\add(1));
        $times3add1 = L\compose(L\add(1), L\multiply(3));
        $this->assertEquals(9, $add1times3(2));
        $this->assertEquals(7, $times3add1(2));
    }
}
