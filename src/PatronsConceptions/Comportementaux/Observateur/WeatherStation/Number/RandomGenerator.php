<?php

namespace Akipe\LearningCodeSoftwareCraft\PatronsConceptions\Comportementaux\Observateur\WeatherStation\Number;

class RandomGenerator
{
  public static function getFloat(float $min, float $max): float
  {
    return rand($min, $max);
  }

  public static function getBetweenZeroOne(): float
  {
    return self::getFloat(0, 10) / 10;
  }

  public static function getBoolean(): bool
  {
    return rand(0, 1) == 1;
  }

  public static function increaseOrDecrease(float $number, float $steps): float
  {
    if (self::getBoolean()) {
      return $number + $steps;
    }

    return $number - $steps;
  }

  public static function increaseOrDecreaseBetweenZeroOne(float $number): float
  {
    return self::increaseOrDecrease(
      $number,
      RandomGenerator::getBetweenZeroOne()
    );
  }
}
