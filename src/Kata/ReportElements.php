<?php

namespace Kata;

use Kata\Repository\SequenceRepository;

/**
 * Class ReportElements.
 */
class ReportElements
{
    /** @var Element  */
    protected $element;
    /** @var SequenceRepository  */
    protected $repository;

    /**
     * @param $element
     */
    public function __construct(Element $element, SequenceRepository $repository)
    {
        $this->element = $element;
        $this->repository = $repository;
    }

    /**
     * @return array
     */
    public function getReport(): array
    {
        $output = [];
        foreach ($this->repository->findAll() as $sequenceNumber) {
            $output[$sequenceNumber] = $this->process($sequenceNumber);
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
        $this->element->check($input);

        return $this->element->showElement();
    }
}
