<?php

use PHPUnit\Framework\TestCase;
use Akipe\LearningCodeSoftwareCraft\TDD\FizzBuzz\FizzBuzz;

final class FizzBuzzTest extends TestCase
{
  const MAX = 100;

  public function test_should_return_same_number_when_it_is_not_multiple_of_three_or_five(): void
  {
    $numbersCheck = $this->getListNumbersNotMultipleOfThreeAndFive(self::MAX);

    $this->assertEquals($numbersCheck, $this->getListResultsFizzBuzz($numbersCheck));
  }

  public function test_should_return_fizz_when_number_is_multiple_of_three(): void
  {
    $multiplesThree = $this->getListNumbersMultipleOfThreeAndNotFive(self::MAX);
    $resultExpected = $this->getFizzBuzzArrayResultsExpected(count($multiplesThree), FizzBuzz::FIZZ);

    $this->assertEquals($resultExpected, $this->getListResultsFizzBuzz($multiplesThree));
  }

  public function test_should_return_buzz_when_number_is_multiple_of_five(): void
  {
    $multiplesFive = $this->getListNumbersMultipleOfFiveAndNotThree(self::MAX);
    $resultExpected = $this->getFizzBuzzArrayResultsExpected(count($multiplesFive), FizzBuzz::BUZZ);

    $this->assertEquals($resultExpected, $this->getListResultsFizzBuzz($multiplesFive));
  }

  public function test_should_return_fizzbuzz_when_number_is_multiple_of_three_and_five(): void
  {
    $multiplesFifteen = $this->getListNumbersMultipleOfFifteen(self::MAX);
    $resultExpected = $this->getFizzBuzzArrayResultsExpected(count($multiplesFifteen), FizzBuzz::FIZZ . FizzBuzz::BUZZ);

    $this->assertEquals($resultExpected, $this->getListResultsFizzBuzz($multiplesFifteen));
  }

  private function getFizzBuzzArrayResultsExpected(int $numberRows, string $resultExpected)
  {
    return \array_fill(0, $numberRows, $resultExpected);
  }

  private function getListResultsFizzBuzz(array $numbers): array
  {
    $fizzBuzz = new FizzBuzz();

    $results = [];

    foreach($numbers as $number) {
      $results[] = $fizzBuzz->print($number);
    }

    return $results;
  }

  /**
   *
   * @return int[]
   */
  private function getListNumbersNotMultipleOfThreeAndFive(int $max): array
  {
    $results = [];

    for($number = 0; $number <= $max; $number++) {
      if ($number % 3 != 0 AND $number % 5 != 0) {
        $results[] = $number;
      }
    }

    return $results;
  }

  /**
   *
   * @return int[]
   */
  private function getListNumbersMultipleOfFifteen(int $max): array
  {
    $results = [];

    for($number = 0; $number <= $max; $number++) {
      if ($number % 3 == 0 AND $number % 5 == 0) {
        $results[] = $number;
      }
    }

    return $results;
  }

  /**
   *
   * @return int[]
   */
  private function getListNumbersMultipleOfThreeAndNotFive(int $max): array
  {
    $results = [];

    for($number = 0; $number <= $max; $number++) {
      if ($number % 3 == 0 AND $number % 5 != 0) {
        $results[] = $number;
      }
    }

    return $results;
  }

  /**
   *
   * @return int[]
   */
  private function getListNumbersMultipleOfFiveAndNotThree(int $max): array
  {
    $results = [];

    for($number = 0; $number <= $max; $number++) {
      if ($number % 3 != 0 AND $number % 5 == 0) {
        $results[] = $number;
      }
    }

    return $results;
  }
}
