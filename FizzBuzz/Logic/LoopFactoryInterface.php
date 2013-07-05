<?php

namespace FizzBuzz\Logic;

use \FizzBuzz\Model\CollectionInterface;
use \FizzBuzz\Output\OutputInterface;

/**
 * LoopFactoryInterface
 * 
 * @package FizzBuzz\Logic
 * @author Protec Innovations <support@protecinnovations.co.uk>
 * @copyright 2013 Protec Innovations
 */

interface LoopFactoryInterface
{
    /**
     * setBuzzNum
     * Set the buzz number
     * 
     * @param int $buzzNum
     * @return \FizzBuzz\Logic\LoopFactory
     */
    public function setBuzzNum($buzzNum);

    /**
     * setFizzNum
     * Set the fizz number
     * 
     * @param int $fizzNum
     * @return \FizzBuzz\Logic\LoopFactory
     */
    public function setFizzNum($fizzNum);

    /**
     * setPrinter
     * Set the printer
     * 
     * @param \FizzBuzz\Output\OutputInterface $printer
     * @return \FizzBuzz\Logic\LoopFactory
     */
    public function setPrinter(OutputInterface $printer);

    /**
     * setCollection
     * Set the collection of numbers
     * 
     * @param array $collect
     */
    public function setCollection(CollectionInterface $collect);

    /**
     * create
     * Create the loop
     * 
     * @return \FizzBuzz\Logic\Loop
     * @throws Exception
     */
    public function create();
}