<?php
namespace GeneKrevets\Calculator;

/**
 * Class DivisionOperation
 * @package GeneKrevets\Calculator\Operation
 */
class DivisionOperation implements OperationInterface{

    /**
     * Implementation of Division with Divide by Zero check
     * @param array $operands
     * @return float|mixed|string
     */
    public function operate(array $operands = array())
    {
        if($operands[1] == 0) {
            return "Division by zero error, check operands";
        }

         return $operands[0] / $operands[1];
    }
}