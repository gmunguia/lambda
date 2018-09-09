<?php

use PHPUnit\Framework\TestCase;

final class UnapplyTest extends TestCase
{
    public function testUnapply()
    {
        $sum = L\fn('array_sum');
        $this->assertEquals(8, L\unapply($sum)(1, 3, 4));
    }
}
