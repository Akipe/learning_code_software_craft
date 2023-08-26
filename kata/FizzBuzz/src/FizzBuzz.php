<?php

namespace Akipe\ExampleFizzBuzz;

class FizzBuzz
{
  const FIZZ = "fizz";

  public function print(int $number): string
  {
    if ($number % 3 == 0) {
      return self::FIZZ;
    }

    return (string) $number;
  }
}
