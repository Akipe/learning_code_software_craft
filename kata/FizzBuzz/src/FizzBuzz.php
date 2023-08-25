<?php

namespace Akipe\ExampleFizzBuzz;

class FizzBuzz
{
  public function print(int $number): string
  {
    if ($number % 3 == 0) {
      return "fizz";
    }

    return (string) $number;
  }
}
