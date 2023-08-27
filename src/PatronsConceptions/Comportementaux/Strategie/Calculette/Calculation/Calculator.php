<?php

namespace Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Strategie\Calculette\Calculation;

class Calculator
{
    private ?ICalculation $calculation;
    private float $result;
    private string $operation;

    public function __construct()
    {
        $this->calculation = null;
        $this->result = 0.0;
        $this->operation = "";
    }

    public function setCalculation(?ICalculation $calculation): self
    {
        $this->calculation = $calculation;

        return $this;
    }

    public function executeCalculation(float $x, float $y): self
    {
        $this->throwExceptionIfNotCalculationMethods();

        $this->result = $this->calculation->calculTwoNumbers($x, $y);
        $this->operation .= "{$this->calculation->getOperation()}";

        return $this;
    }

    public function appendCalculation(float $x): self
    {
        $this->throwExceptionIfNotCalculationMethods();

        $this->result = $this->calculation->calculTwoNumbers($this->result, $x);
        $this->operation .= " then {$this->calculation->getOperation()}";

        return $this;
    }

    public function getResult(): float
    {
        return $this->result;
    }

    public function getOperation(): string
    {
        return $this->operation;
    }

    public function resetResult(): self
    {
        $this->result = 0.0;
        $this->operation = "";

        return $this;
    }

    private function throwExceptionIfNotCalculationMethods(): void
    {
        if ($this->calculation == null) {
            throw new \Exception("You don't have set calculation method");
        }
    }
}
