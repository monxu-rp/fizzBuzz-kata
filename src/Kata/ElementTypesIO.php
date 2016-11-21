<?php

namespace Kata;

/**
 * Interface ElementTypesIO.
 */
interface ElementTypesIO
{
    /**
     * @return int
     */
    public function getDivisibleBy():int;

    /**
     * @return string
     */
    public function getElementTypeName():string;
}
