<?php

namespace Kata;

/**
 * Class FizzBuzz.
 */
class FizzBuzz
{
    const DIVISIBLE_BY_THREE = 3;
    const DIVISIBLE_BY_FIVE = 5;
    const FIZZ = 'Fizz';
    const BUZZ = 'Buzz';

    /**
     * @param int $input
     *
     * @return string
     */
    public function process($input): string
    {
        $response = '';
        if ($this->isDivisibleBy($input, self::DIVISIBLE_BY_THREE)) {
            $response .= self::FIZZ;
        }

        if ($this->isDivisibleBy($input, self::DIVISIBLE_BY_FIVE)) {
            $response .= self::BUZZ;
        }

        return ($response) ? $response : (string) $input;
    }

    /**
     * @param int $input
     * @param int $divisibleBy
     *
     * @return bool
     */
    private function isDivisibleBy(int $input, int $divisibleBy): bool
    {
        return $input % $divisibleBy === 0;
    }
}
