<?php
namespace GeneKrevets\Calculator;

/**
 * Interface ComplexOperationInterface
 * @package GeneKrevets\Calculator
 */
interface ComplexOperationInterface
{
    /**
     * Solve a complex arithmetic operation
     * @param $expression
     * @return mixed
     */
    public function solveExpression($expression);
} 