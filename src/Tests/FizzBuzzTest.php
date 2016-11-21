<?php

namespace Kata\Tests;

use Kata\Decorator\PrintNormalText;
use Kata\FizzBuzz\Buzz;
use Kata\FizzBuzz\Fizz;
use Kata\ReportElements;
use Kata\Element;
use Kata\Repository\SequenceRepositoryInMemoryImpl;

/**
 * Class FizzBuzzTest.
 */
class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    /** @var ReportElements */
    private $fizzBuzz;

    public function setUp()
    {
        $elementTypes = [new Fizz(), new Buzz()];
        $element = new Element($elementTypes, new PrintNormalText());
        $repositoryInMemory = new SequenceRepositoryInMemoryImpl();
        $this->fizzBuzz = new ReportElements($element, $repositoryInMemory);
        $this->fizzBuzz->getReport();
    }

    /**
     * @test
     * @dataProvider providerFizzBuzz
     *
     * @param mixed $input
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
        $elementTypes = [new Fizz(), new Buzz()];
        $element = new Element($elementTypes, new PrintNormalText());
        $repositoryInMemory = new SequenceRepositoryInMemoryImpl();
        $this->fizzBuzz = new ReportElements($element, $repositoryInMemory);
        $report = $this->fizzBuzz->getReport();

        $testCases = [
            'TC0' => [count($report), 100],
            'TC1' => [$report[1], 1],
            'TC2' => [$report[2], 2],
            'TC3' => [$report[3], 'Fizz'],
            'TC4' => [$report[4], 4],
            'TC5' => [$report[5], 'Buzz'],
            'TC6' => [$report[6], 'Fizz'],
            'TC10' => [$report[10], 'Buzz'],
            'TC13' => [$report[13], 'Fizz'],
            'TC15' => [$report[15], 'FizzBuzz'],
            'TC20' => [$report[20], 'Buzz'],
            'TC53' => [$report[53], 'FizzBuzz'],
            'TC100' => [$report[100], 'Buzz']
        ];

        return $testCases;
    }
}
