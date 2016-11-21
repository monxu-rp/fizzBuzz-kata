<?php

namespace Kata\Decorator;

/**
 * Class PrintNormalText.
 */
class PrintNormalText implements RenderElementIO
{
    /** @var mixed */
    protected $name;

    /**
     * @return mixed
     */
    public function render()
    {
        return $this->name;
    }

    /**
     * @param mixed $text
     */
    public function addText($text)
    {
        $this->name = $text;
    }
}
