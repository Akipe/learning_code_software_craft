<?php

namespace Akipe\Learning\PatronsConceptions\Comportementaux\Strategie\Calculette\Calculation\Method;

use Akipe\Learning\PatronsConceptions\Comportementaux\Strategie\Calculette\Calculation\ICalculation;

abstract class BaseMethod implements ICalculation
{
    private float $x;
    private float $y;

    public function __construct()
    {
        $this->x = 0.0;
        $this->y = 0.0;
    }

    protected function setX(float $x): void
    {
        $this->x = $x;
    }

    protected function getX(): float
    {
        return $this->x;
    }

    protected function setY(float $y): void
    {
        $this->y = $y;
    }

    protected function getY(): float
    {
        return $this->y;
    }
}
