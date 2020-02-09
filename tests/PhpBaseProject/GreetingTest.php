<?php

namespace PhpBaseProject;

use PHPUnit\Framework\TestCase;

class GreetingTest extends TestCase
{
    public function testHello(): void
    {
        $greeting = new Greeting();

        $this->assertEquals('hi', $greeting->hello());
    }
}
