<?php

use PHPUnit\Framework\TestCase;

final class ReduceTest extends TestCase
{
    public function testReduce()
    {
        $this->assertEquals(6, L\reduce('L\add', 0, [1, 2, 3]));
        $this->assertEquals(6, L\reduce('L\add', 0)([1, 2, 3]));

        // Todo: add test for foldable instance, eg transducer.
    }
}
