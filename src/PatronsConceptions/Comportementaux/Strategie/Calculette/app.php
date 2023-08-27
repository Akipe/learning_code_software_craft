<?php

use Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Strategie\Calculette\Calculation\Calculator;
use Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Strategie\Calculette\Calculation\Method\Addition;
use Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Strategie\Calculette\Calculation\Method\Division;
use Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Strategie\Calculette\Calculation\Method\Subtraction;
use Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Strategie\Calculette\Calculation\Method\Multiplication;

require __DIR__ . '/../vendor/autoload.php';

$addition = new Addition();
$subtraction = new Subtraction();
$multiplication = new Multiplication();
$division = new Division();

$calculator = new Calculator();

$calculator
  ->setCalculation($addition)
  ->executeCalculation(5, 8)
  ->appendCalculation(3)
  ->setCalculation($subtraction)
  ->appendCalculation(6)
  ->appendCalculation(5)
  ->setCalculation($multiplication)
  ->appendCalculation(2)
  ->setCalculation($division)
  ->appendCalculation(10);

echo "{$calculator->getOperation()} : {$calculator->getResult()}" . PHP_EOL;
