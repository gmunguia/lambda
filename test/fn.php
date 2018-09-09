<?php

use PHPUnit\Framework\TestCase;

final class FnTest extends TestCase
{
    public function testFn()
    {
        $pow = L\fn('pow');
        $this->assertEquals(8, $pow(2, 3));

        $pow = L\fn(function ($b, $e) {
            return $b ** $e;
        });
        $this->assertEquals(8, $pow(2, 3));
    }
}
