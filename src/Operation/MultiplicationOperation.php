<?php
namespace GeneKrevets\Calculator;

/**
 * Class MultiplicationOperation
 * @package GeneKrevets\Calculator\Operation
 */
class MultiplicationOperation implements OperationInterface{

    /**
     * Implementation of Multiplication
     * @param array $operands
     * @return mixed
     */
    public function operate(array $operands = array())
    {
        return $operands[0] * $operands[1];
    }
}