<?php

namespace Akipe\ExampleFizzBuzz;

class FizzBuzz
{
  const FIZZ = "fizz";
  const BUZZ = "buzz";

  public function print(int $number): string
  {
    if ($number % 3 == 0 && $number % 5 == 0) {
      return self::FIZZ . self::BUZZ;
    }

    if ($number % 3 == 0) {
      return self::FIZZ;
    }

    if ($number % 5 === 0) {
      return self::BUZZ;
    }

    return (string) $number;
  }
}
