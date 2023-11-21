<?php

namespace App\Tests;

use App\Hello;
use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{
    public function testGetGreeting()
    {
        $hello = new Hello();

        $this->assertSame('Hello World!', $hello->getGreeting());
    }
}
