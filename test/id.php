<?php

use PHPUnit\Framework\TestCase;

final class IdTest extends TestCase
{
    public function testId()
    {
        $this->assertEquals(1, L\id(1));
    }
}
