<?php
namespace GeneKrevets\Calculator;

/**
 * Class AdditionOperation
 * @package GeneKrevets\Calculator\Operation
 */
class AdditionOperation implements OperationInterface{

    /**
     * Implementation of Addition
     * @param array $operands
     * @return mixed|number
     */
    public function operate(array $operands = array())
    {
        return array_sum($operands);
    }
}