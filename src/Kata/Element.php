<?php

namespace Kata;

use Kata\Decorator\RenderElementIO;

/**
 * Class Element.
 */
class Element
{
    /** @var RenderElementIO */
    protected $renderElement;

    /** @var ElementTypesIO[] */
    protected $elementTypes;

    /** @var mixed */
    protected $elementToShow;

    /**
     * @param ElementTypesIO[] $elementTypes
     * @param RenderElementIO  $renderElement
     */
    public function __construct(array $elementTypes, RenderElementIO $renderElement)
    {
        $this->elementTypes = $elementTypes;
        $this->renderElement = $renderElement;
    }

    /**
     * @param int $input
     */
    public function check($input)
    {
        $response = '';
        foreach ($this->elementTypes as $element) {
            if ($this->isDivisibleBy($input, $element->getDivisibleBy())
                || $this->containElement($input, $element->getDivisibleBy())
            ) {
                $response .= $element->getElementTypeName();
            }
        }

        $this->elementToShow = ($response) ? $response : $input;
    }

    /**
     * @return mixed
     */
    public function showElement()
    {
        $this->renderElement->addText($this->elementToShow);

        return $this->renderElement->render();
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
