<?php
namespace GeneKrevets\Calculator;

/**
 * Class SubtractionOperation
 * @package GeneKrevets\Calculator\Operation
 */
class SubtractionOperation implements OperationInterface{

    /**
     * Implementation of Subtraction
     * @param array $operands
     * @return mixed
     */
    public function operate(array $operands = array())
    {
        return $operands[0] - $operands[1];
    }
}