<?php

namespace FizzBuzz\Logic;

use \FizzBuzz\Logic\LoopInterface;
use \FizzBuzz\Model\CollectionInterface;
use \FizzBuzz\Output\OutputInterface;

/**
 * Loop
 *
 * @package FizzBuzz\Logic
 * @author Protec Innovations <support@protecinnovations.co.uk>
 * @copyright 2013 Protec Innovations
 */
class Loop implements LoopInterface
{
    /**
     * $output
     * Used to store the output
     * 
     * @var \FizzBuzz\Output\OutputInterface
     */
    protected $output;

    /**
     * $fizzNum
     * Used to store the fizz number
     * 
     * @var int
     */
    protected $fizzNum;

    /**
     * $buzzNum
     * Used to store the buzz number
     * 
     * @var int
     */
    protected $buzzNum;

    /**
     * $collection
     * Used to store the collection of numbers
     * 
     * @var array
     */
    protected $collection;

    /**
     * setOutput
     * Set the output handler
     * 
     * @param \FizzBuzz\Output\OutputInterface $output
     * @return \FizzBuzz\Logic\Loop
     */
    public function setOutput(OutputInterface $output)
    {
        $this->output = $output;

        return $this;
    }

    /**
     * setFizzNum
     * Set the number to fizz on
     * 
     * @param int $i
     * @return \FizzBuzz\Logic\Loop
     */
    public function setFizzNum($i)
    {
        $this->fizzNum = $i;

        return $this;
    }

    /**
     * setBuzzNum
     * Set the number to buzz on
     * 
     * @param int $i
     * @return \FizzBuzz\Logic\Loop
     */
    public function setBuzzNum($i)
    {
        $this->buzzNum = $i;

        return $this;
    }

    /**
     * setCollection
     * Set the collection of numbers
     * 
     * @param array $collect
     * @return \FizzBuzz\Logic\Loop
     */
    public function setCollection(CollectionInterface $collect)
    {
        $this->collection = $collect;

        return $this;
    }

    /**
     * loop
     * Provides the main loop of the FizzBuzz program
     */
    public function loop()
    {
        foreach ($this->collection as $value) {
            if ($value->getNumber() % $this->fizzNum == 0 && $value->getNumber() % $this->buzzNum == 0) {
                $this->output->fizzBuzz();
            } elseif ($value->getNumber() % $this->buzzNum == 0) {
                $this->output->buzz();
            } elseif ($value->getNumber() % $this->fizzNum == 0) {
                $this->output->fizz();
            } else {
                $this->output->defaultOutput($value->getNumber());
            }
        }
    }
}
