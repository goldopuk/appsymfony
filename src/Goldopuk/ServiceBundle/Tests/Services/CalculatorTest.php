<?php

namespace Goldopuk\ServiceBundle\Tests\Services;

use Goldopuk\ServiceBundle\Services\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $calc = new Calculator();
        $result = $calc->sum(30, 12);

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(42, $result);
    }
}