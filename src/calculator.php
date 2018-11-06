<?php
/**
 * Created by PhpStorm.
 * User: dung
 * Date: 06/11/2018
 * Time: 08:20
 */
const ADDITION = '+';

const SUBTRACTION = '-';

const MULTIPLICATION = '*';

const DIVISION = '/';


class Calculator

{

    public function calculate($firstOperand, $secondOperand, $operator) {

        switch ($operator) {

            case ADDITION:

                return $firstOperand + $secondOperand;

            case SUBTRACTION:

                return $firstOperand - $secondOperand;

            case MULTIPLICATION:

                return $firstOperand * $secondOperand;

            case DIVISION:

                if ($secondOperand != 0) {

                    return $firstOperand / $secondOperand;

                } else {

                    echo("Can not divide by 0");

                    break;

                }

            default:

                echo ("Unsupported operation");

        }

    }

}