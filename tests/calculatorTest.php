<?php
/**
 * Created by PhpStorm.
 * User: dung
 * Date: 06/11/2018
 * Time: 08:21
 */
require __DIR__ . "/../src/calculator.php";
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testCalculateAdd()
    {
        $firstOperand = 1;
        $secondOperand = 1;
        $operator = '+';
        $expected = 2;
        $calculator = new Calculator();
        $result = $calculator->calculate($firstOperand, $secondOperand, $operator);
        $this->assertEquals($expected, $result);
    }
}