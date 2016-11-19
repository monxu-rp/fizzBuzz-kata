<?php

namespace Kata;

/**
 * Class FizzBuzz.
 */
class FizzBuzz
{
    const ELEMENT_THREE = 3;
    const ELEMENT_FIVE = 5;
    const FIZZ = 'Fizz';
    const BUZZ = 'Buzz';

    /**
     * @param int $numElements
     *
     * @return array
     */
    public function createSequence($numElements = 100): array
    {
        $output = [];
        foreach (range(1, $numElements) as $element) {
            $output[$element] = $this->process($element);
        }
        return $output;
    }

    /**
     * @param int $input
     *
     * @return mixed
     */
    private function process(int $input)
    {
        $response = '';
        if ($this->isDivisibleBy($input, self::ELEMENT_THREE) || $this->containElement($input, self::ELEMENT_THREE)) {
            $response .= self::FIZZ;
        }

        if ($this->isDivisibleBy($input, self::ELEMENT_FIVE)  || $this->containElement($input, self::ELEMENT_FIVE)) {
            $response .= self::BUZZ;
        }

        return ($response) ? $response : $input;
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

    /**
     * @param int $input
     * @param int $element
     *
     * @return bool
     */
    private function containElement(int $input, int $element): bool
    {
        return strpos((string) $input, (string) $element) !== false;
    }
}
