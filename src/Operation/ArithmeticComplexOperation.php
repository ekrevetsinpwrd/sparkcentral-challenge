<?php
namespace GeneKrevets\Calculator;

use jlawrence\eos\Parser;

/**
 * Class ArithmeticOperation
 * @package GeneKrevets\Calculator\Operation
 */
class ArithmeticComplexOperation implements ComplexOperationInterface {

    public function solveExpression($expression)
    {
       return Parser::solve($expression);
    }
}