<?php
/**
 * Created by PhpStorm.
 * User: gene
 * Date: 8/12/15
 * Time: 10:35 AM
 */

namespace GeneKrevets\Calculator\Operation;

/**
 * Interface OperationInterface
 * @package GeneKrevets\Calculator\Operation
 */
interface OperationInterface {

    /**
     * Basic binary operate method
     * @param array $operands
     * @return mixed
     */
    public function operate(array $operands = array());
} 