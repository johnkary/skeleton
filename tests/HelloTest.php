<?php

namespace Acme\Tests;

use Acme\Hello;
use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{
    public function testGetGreeting()
    {
        $hello = new Hello();

        $this->assertSame('Hello World!', $hello->getGreeting());
    }
}
