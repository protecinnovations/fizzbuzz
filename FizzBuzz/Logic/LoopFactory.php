<?php

namespace FizzBuzz\Logic;

use \Exception;
use \FizzBuzz\Logic\Loop;
use \FizzBuzz\Model\CollectionInterface;
use \FizzBuzz\Output\OutputInterface;

/**
 * LoopFactory
 * 
 * @package FizzBuzz\Logic
 * @author Protec Innovations <support@protecinnovations.co.uk>
 * @copyright 2013 Protec Innovations
 */

class LoopFactory implements LoopFactoryInterface
{
    /**
     * $buzzNum
     * Used to store the buzz number for the loop
     * 
     * @var int
     */
    protected $buzzNum = 5;

    /**
     * $fizzNum
     * Used to store the fizz number for the loop
     * 
     * @var int
     */
    protected $fizzNum = 3;

    /**
     * $printer
     * Used to store the printer instance
     * 
     * @var \FizzBuzz\Output\Printer
     */
    protected $printer = null;

    /**
     * $collection
     * Used to store the collection of numbers for the loop
     * 
     * @var array
     */
    protected $collection;

    /**
     * setBuzzNum
     * Set the buzz number
     * 
     * @param int $buzzNum
     * @return \FizzBuzz\Logic\LoopFactory
     */
    public function setBuzzNum($buzzNum)
    {
        $this->buzzNum = $buzzNum;

        return $this;
    }

    /**
     * setFizzNum
     * Set the fizz number
     * 
     * @param int $fizzNum
     * @return \FizzBuzz\Logic\LoopFactory
     */
    public function setFizzNum($fizzNum)
    {
        $this->fizzNum = $fizzNum;

        return $this;
    }

    /**
     * setPrinter
     * Set the printer
     * 
     * @param \FizzBuzz\Output\OutputInterface $printer
     * @return \FizzBuzz\Logic\LoopFactory
     */
    public function setPrinter(OutputInterface $printer)
    {
        $this->printer = $printer;

        return $this;
    }

    /**
     * setCollection
     * Set the collection of numbers
     * 
     * @param array $collect
     */
    public function setCollection(CollectionInterface $collect)
    {
        $this->collection = $collect;

        return $this;
    }

    /**
     * create
     * Create the loop
     * 
     * @return \FizzBuzz\Logic\Loop
     * @throws Exception
     */
    public function create()
    {
        if (is_null($this->collection)) {
            throw new Exception('Collection Must be created');
        }

        if (is_null($this->printer)) {
            throw new Exception('Must have a printer.');
        }

        $loop = new Loop();

        $loop->setBuzzNum($this->buzzNum);
        $loop->setFizzNum($this->fizzNum);
        $loop->setOutput($this->printer);
        $loop->setCollection($this->collection);

        return $loop;
    }

}
