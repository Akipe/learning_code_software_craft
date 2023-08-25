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
    $this->assertSame((string) $number, $value);
  }

  public function test_should_return_fizz_when_number_is_multiple_of_three(): void
  {
    $fizzBuzz = new FizzBuzz();

    $multiplesThree = [
      3,
      6,
      9,
      12,
    ];
    $resultExpected = \array_fill(0, 4, "fizz");

    $resultMultiplesThree = [];

    foreach($multiplesThree as $multipleThree) {
      $resultMultiplesThree[] = $fizzBuzz->print($multipleThree);
    }

    $this->assertEquals($resultExpected, $resultMultiplesThree);
  }
}
