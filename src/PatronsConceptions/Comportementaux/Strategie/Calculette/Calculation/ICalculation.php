<?php

namespace Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Strategie\Calculette\Calculation;

interface ICalculation
{
    public function calculTwoNumbers(float $x, float $y): float;
    public function getOperation(): string;
}
