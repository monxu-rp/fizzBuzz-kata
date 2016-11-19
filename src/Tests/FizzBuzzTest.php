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

    public function setUp()
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    /**
     * @test
     * @dataProvider providerFizzBuzz
     *
     * @param int    $input
     * @param string $expected
     */
    public function itShouldReturnFizzBuzz(int $input, string $expected)
    {
        $this->assertSame($expected, $this->fizzBuzz->process($input));
    }

    /**
     * @return array
     */
    public function providerFizzBuzz():array
    {
        return [
            [1, '1'],
            [2, '2'],
            [3, 'Fizz'],
            [4, 4],
            [5, 'Buzz'],
            [6, 'Fizz'],
            [10, 'Buzz'],
            [15, 'FizzBuzz'],
            [30, 'FizzBuzz'],
            [100, 'Buzz'],
        ];
    }
}
