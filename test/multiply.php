<?php

use PHPUnit\Framework\TestCase;

final class MultiplyTest extends TestCase
{
    public function testMultiply()
    {
        $this->assertEquals(6, L\multiply(3, 2));
    }
}
