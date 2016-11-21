<?php

namespace Kata\Decorator;

/**
 * Interface RenderElementIO.
 */
interface RenderElementIO
{
    /**
     * @param mixed $text
     */
    public function addText($text);

    /**
     * @return mixed
     */
    public function render();
}
