<?php

namespace Kata;

/**
 * Class FizzBuzz.
 */
class FizzBuzz
{
    const DIVISIBLE_BY_THREE = 3;
    const DIVISIBLE_BY_FIVE = 5;

    /**
     * @param int $input
     *
     * @return string
     */
    public function process($input): string
    {
        $response = '';
        if ($this->isisDivisibleBy($input, self::DIVISIBLE_BY_THREE)) {
            $response .= 'Fizz';
        }

        if ($this->isisDivisibleBy($input, self::DIVISIBLE_BY_FIVE)) {
            $response .= 'Buzz';
        }

        return ($response) ? $response : (string) $input;
    }

    /**
     * @param int $input
     * @param int $multiple
     *
     * @return bool
     */
    private function isisDivisibleBy(int $input, int $multiple): bool
    {
        return $input % $multiple === 0;
    }
}
