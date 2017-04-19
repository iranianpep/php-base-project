<?php

namespace PhpBaseProject;

use PHPUnit\Framework\TestCase;

class GreetingTest extends TestCase
{
    public function testHi()
    {
        $greeting = new Greeting();

        $this->assertEquals('hi', $greeting->hi());
    }
}
