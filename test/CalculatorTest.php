<?php

require "src/Calculator.php";

class CalculatorTest extends \PHPUnit_Framework_TestCase {
    public function test10plus10()
    {
        $calculator = new Calculator();
        $this->assertEquals(20,$calculator->plus(10,10));
    }

    public function test10minus10()
    {
        $calculator = new Calculator();
        $this->assertEquals(0,$calculator->minus(10,10));
    }

    public function test10multiply10()
    {
        $calculator = new Calculator();
        $this->assertEquals(100,$calculator->multiply(10,10));
    }

    public function test10divide10()
    {
        $calculator = new Calculator();
        $this->assertEquals(1,$calculator->divide(10,10));
    }

    public function testDivideByZero()
    {
        $calculator = new Calculator();
        $this->assertEquals(0,$calculator->divide(10,0));
    }

    public function testNullDivide10()
    {
        $calculator = new Calculator();
        $this->assertEquals("Please Input Number",$calculator->divide(null,10));
    }

    public function testZeroDivideNumber()
    {
        $calculator = new Calculator();
        $this->assertEquals(0,$calculator->divide(0,10));
    }
}