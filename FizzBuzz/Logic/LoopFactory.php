<?php

namespace FizzBuzz\Logic;

use \Exception;
use \FizzBuzz\Logic\Loop;
use \FizzBuzz\Output\OutputInterface;

class LoopFactory
{

    /**
     * $startNum
     * Used to store the start number for the loop
     * 
     * @var int
     */
    protected $startNum = 1;

    /**
     * $endNum
     * Used to store the end number for the loop
     * 
     * @var int
     */
    protected $endNum = 100;

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
     * $fizzWord
     * Used to store the fizz word for the loop
     * 
     * @var text
     */
    protected $fizzWord = 'Fizz';

    /**
     * $buzzWord
     * Used to store the buzz word for the loop
     * 
     * @var text
     */
    protected $buzzWord = 'Buzz';

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
     * setStartNum
     * Set the start number
     * 
     * @param int $startNum
     * @return \FizzBuzz\Logic\LoopFactory
     */
    public function setStartNum($startNum)
    {
        $this->startNum = $startNum;

        return $this;
    }

    /**
     * setEndNum
     * Set the end number
     * 
     * @param int $endNum
     * @return \FizzBuzz\Logic\LoopFactory
     */
    public function setEndNum($endNum)
    {
        $this->endNum = $endNum;

        return $this;
    }

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
    public function setCollection($collect)
    {
        $this->collection = $collect;
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

        if (is_null($this->printer)) {
            throw new Exception('Must have a printer.');
        }

        $loop = new Loop();

        $loop->setCurrentNum($this->startNum);
        $loop->setEndNum($this->endNum);
        $loop->setBuzzNum($this->buzzNum);
        $loop->setFizzNum($this->fizzNum);
        $loop->setOutput($this->printer);
        $loop->setCollection($this->collection);

        return $loop;
    }

}
