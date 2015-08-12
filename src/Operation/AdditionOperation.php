<?php
/**
 * Created by PhpStorm.
 * User: gene
 * Date: 8/12/15
 * Time: 10:37 AM
 */

namespace GeneKrevets\Calculator\Operation;

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