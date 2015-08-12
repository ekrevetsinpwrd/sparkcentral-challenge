<?php
/**
 * Created by PhpStorm.
 * User: gene
 * Date: 8/12/15
 * Time: 10:37 AM
 */

namespace GeneKrevets\Calculator\Operation;

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