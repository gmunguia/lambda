<?php

use PHPUnit\Framework\TestCase;

final class ApplyTest extends TestCase
{
    public function testApply()
    {
        $pow = L\fn('pow');
        $this->assertEquals(8, L\apply($pow)([2, 3]));
    }
}
