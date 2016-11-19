<?php

namespace Kata\Tests;

use Kata\FizzBuzz;

/**
 * Class FizzBuzzTest.
 */
class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    /** @var FizzBuzz */
    private $fizzBuzz;

    /**
     * @test
     * @dataProvider providerFizzBuzz
     *
     * @param mixed    $input
     * @param mixed $expected
     */
    public function itShouldReturnFizzBuzz($input, $expected)
    {
        $this->assertEquals($expected, $input);
    }

    /**
     * @return array
     */
    public function providerFizzBuzz():array
    {
        $this->fizzBuzz = new FizzBuzz();
        $data = $this->fizzBuzz->createSequence();

        $testCases = [
            'T0' => [count($data), 100],
            'T1' => [$data[1], 1],
            'T2' => [$data[2], 2],
            'T3' => [$data[3], 'Fizz'],
            'T4' => [$data[4], 4],
            'T5' => [$data[5], 'Buzz'],
            'T6' => [$data[6], 'Fizz'],
            'T10' => [$data[10], 'Buzz'],
            'T13' => [$data[13], 'Fizz'],
            'T15' => [$data[15], 'FizzBuzz'],
            'T20' => [$data[20], 'Buzz'],
            'T53' => [$data[53], 'FizzBuzz'],
        ];

        return $testCases;
    }
}
