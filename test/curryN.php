<?php

use PHPUnit\Framework\TestCase;

final class CurryNTest extends TestCase
{
    public function testCurryN()
    {
        $this->assertEquals(3, L\curryN(3, 'max')(1, 2, 3));
        $this->assertEquals(3, L\curryN(3, 'max')(1)(2)(3));
        $this->assertEquals(3, L\curryN(3, 'max')(1, 2)(3));
        $this->assertEquals(3, L\curryN(3, 'max')(1)(2, 3));
        $this->assertEquals(3, L\curryN(3, 'max')(3, 2, 1));
        $this->assertEquals(3, L\curryN(3, 'max')(3)(2)(1));
        $this->assertEquals(3, L\curryN(3, 'max')(3, 2)(1));
        $this->assertEquals(3, L\curryN(3, 'max')(3)(2, 1));
    }
}
