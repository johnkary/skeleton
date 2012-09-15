<?php

namespace Acme\Tests;

use Acme\Hello;

class HelloTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Hello
     */
    private $object;

    public function setUp()
    {
        $this->object = new Hello();
    }
    
    public function testGetGreeting()
    {
        $this->assertSame('Hello World!', $this->object->getGreeting());
    }
}
