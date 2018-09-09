<?php

use PHPUnit\Framework\TestCase;

final class AddTest extends TestCase
{
    public function testAdd()
    {
        $this->assertEquals(5, L\add(3, 2));
    }
}
