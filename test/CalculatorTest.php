<?php

require "src/Calculator.php";

class CalculatorTest extends \PHPUnit_Framework_TestCase {

    private $calculator;

    protected function setUp()
    {
        $this->calculator = new Calculator();
    }

    public function test10plus10()
    {
        $this->assertEquals(20,$this->calculator->plus(10,10));
    }

    public function test10minus10()
    {
        $this->assertEquals(0,$this->calculator->minus(10,10));
    }

    public function test10multiply10()
    {
        $this->assertEquals(100,$this->calculator->multiply(10,10));
    }

    public function test10divide10()
    {
        $this->assertEquals(1,$this->calculator->divide(10,10));
    }

    public function testDivideByZero()
    {
        $this->assertEquals(0,$this->calculator->divide(10,0));
    }

    public function testNullDivide10()
    {
        $this->assertEquals("Please Input Number",$this->calculator->divide(null,10));
    }

    public function testZeroDivideNumber()
    {
        $this->assertEquals(0,$this->calculator->divide(0,10));
    }
}