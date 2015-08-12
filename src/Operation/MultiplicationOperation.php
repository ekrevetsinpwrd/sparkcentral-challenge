<?php
/**
 * Created by PhpStorm.
 * User: gene
 * Date: 8/12/15
 * Time: 10:37 AM
 */

namespace GeneKrevets\Calculator\Operation;

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