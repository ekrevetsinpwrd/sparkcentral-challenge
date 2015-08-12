<?php
namespace GeneKrevets\Calculator;

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