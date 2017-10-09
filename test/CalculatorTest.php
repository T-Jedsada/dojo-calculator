<?php

require "src/Calculator.php";

class CalculatorTest extends \PHPUnit_Framework_TestCase {

    public function testPlus() {
        $calculator = new Calculator;
        $this->assertEquals(2, $calculator->plus(1, 1));
    }
    
    public function testMinus() {
        $calculator = new Calculator;
        $this->assertEquals(0, $calculator->minus(1, 1));
    }
    
    public function testMulti() {
        $calculator = new Calculator;
        $this->assertEquals(1, $calculator->multi(1, 1));
    }

    public function testDivide() {
        $calculator = new Calculator;
        $this->assertEquals(1, $calculator->divide(1, 1));
    }

    public function testDivideByZero() {
        $calculator = new Calculator;
        $this->assertEquals(0, $calculator->divide(1, 0));
    }
}