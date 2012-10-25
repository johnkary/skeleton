<?php

namespace Acme\Tests;

use Acme\PdfMaker;

class PdfMakerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PdfMaker
     */
    private $object;

    public function setUp()
    {
        $this->object = new PdfMaker();
    }
 
    public function testMake()
    {
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );

        $this->assertSame('Hello World!', $this->object->make());
    }
}
