<?php

namespace Akipe\Learning\PatronsConceptions\Comportementaux\Strategie\Calculette\Calculation\Method;

use Akipe\Learning\PatronsConceptions\Comportementaux\Strategie\Calculette\Calculation\ICalculation;

class Division extends BaseMethod implements ICalculation
{
    public function calculTwoNumbers(float $x, float $y): float
    {
        $this->setX($x);
        $this->setY($y);

        return $x / $y;
    }

    public function getOperation(): string
    {
        return "{$this->getX()} / {$this->getY()}";
    }
}
