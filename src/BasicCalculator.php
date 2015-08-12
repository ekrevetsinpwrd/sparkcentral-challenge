<?php
/**
 * Created by PhpStorm.
 * User: gene
 * Date: 8/12/15
 * Time: 9:30 AM
 */

namespace GeneKrevets\Calculator;
use GeneKrevets\Calculator;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * This is the main test harness for the library classes
 * Create a new Calculator, assign operands, set and operation type, and run the operate method
 */
class BasicCalculator
{
    protected $operands = array();

    public function setOperands(array $operands = array())
    {
        $this->operands = $operands;
    }

    public function addOperand($operand)
    {
        $this->operands[] = $operand;
    }

    public function setOperation(OperationInterface $operation)
    {
        $this->operation = $operation;
    }

    public function operate()
    {
        return $this->operation->operate($this->operands);
    }
}

$calculator = new BasicCalculator();
$calculator->setOperands(array(7,5));
$calculator->setOperation(new Operation\AdditionOperation);
echo $calculator->operate();