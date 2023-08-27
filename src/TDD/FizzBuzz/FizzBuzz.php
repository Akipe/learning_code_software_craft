<?php

namespace Akipe\Learning\TDD\FizzBuzz;

class FizzBuzz
{
    public const FIZZ = "fizz";
    public const BUZZ = "buzz";

    public function print(int $number): string
    {
        if ($this->isMultipleOf($number, [3, 5])) {
            return self::FIZZ . self::BUZZ;
        }

        if ($this->isMultipleOf($number, [3])) {
            return self::FIZZ;
        }

        if ($this->isMultipleOf($number, [5])) {
            return self::BUZZ;
        }

        return (string) $number;
    }

    /**
     * Check if $number is a multiple of several dividers.
     *
     * @param int $number to check if it can be divider
     * @param int[] $dividers list of dividers to check if $number can be divider
     * @return bool if the $number can be divide by all dividers.
     */
    private function isMultipleOf(int $number, array $dividers)
    {
        foreach ($dividers as $divider) {
            if ($number % $divider != 0) {
                return false;
            }
        }
        return true;
    }
}
