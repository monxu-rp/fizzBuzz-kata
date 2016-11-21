<?php

namespace Kata\Repository;

/**
 * Class SequenceRepositoryInMemoryImpl.
 */
class SequenceRepositoryInMemoryImpl implements SequenceRepository
{
    /** @var [] */
    protected $data;

    /** @var [] */
    protected $sequence;

    /**
     * @param int $dataNum
     */
    public function __construct(int $dataNum = 100)
    {
        $this->sequence = $this->getArrayRange($dataNum);
    }

    /**
     * @param $dataNum
     *
     * @return array
     */
    private function getArrayRange($dataNum)
    {
        return range(1, $dataNum);
    }

    /**
     * @return array
     */
    public function findAll()
    {
        return $this->sequence;
    }
}
