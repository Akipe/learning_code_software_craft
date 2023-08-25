<?php

use Akipe\ExampleFizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{
  public function test_should_return_same_number_when_it_is_not_multiple_of_three_or_five(): void
  {
    $fizzBuzz = new FizzBuzz();

    $number = 1;
    $value = $fizzBuzz->print($number);
    $this->assertSame($number, $value);
  }
}
