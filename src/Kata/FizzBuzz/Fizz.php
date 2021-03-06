<?php

namespace Kata\FizzBuzz;

use Kata\ElementTypesIO;

/**
 * Class Fizz.
 */
class Fizz implements ElementTypesIO
{
    const ELEMENT_NUM = 3;
    const ELEMENT_TYPE_NAME = 'Fizz';

    /** @var int */
    protected $divisible;
    /** @var string */
    protected $elementTypeName;

    public function __construct()
    {
        $this->divisible = self::ELEMENT_NUM;
        $this->elementTypeName = self::ELEMENT_TYPE_NAME;
    }

    /**
     * @return int
     */
    public function getDivisibleBy():int
    {
        return $this->divisible;
    }

    /**
     * @return string
     */
    public function getElementTypeName():string
    {
        return $this->elementTypeName;
    }
}
