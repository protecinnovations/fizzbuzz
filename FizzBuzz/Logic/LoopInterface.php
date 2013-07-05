<?php

namespace FizzBuzz\Logic;

use \FizzBuzz\Model\CollectionInterface;
use \FizzBuzz\Output\OutputInterface;

/**
 * LoopInterface
 * 
 * @package FizzBuzz\Logic
 * @author Protec Innovations <support@protecinnovations.co.uk>
 * @copyright 2013 Protec Innovations
 */
interface LoopInterface
{
    /**
     * setOutput
     * Set the output handler
     * 
     * @param \FizzBuzz\Output\OutputInterface $output
     */
    public function setOutput(OutputInterface $output);

    /**
     * setFizzNum
     * Set the number to fizz on
     * 
     * @param int $i
     */
    public function setFizzNum($i);

    /**
     * setBuzzNum
     * Set the number to buzz on
     * 
     * @param int $i
     */
    public function setBuzzNum($i);

    /**
     * setCollection
     * Set the collection
     * 
     * @param array $collect
     */
    public function setCollection(CollectionInterface $collect);

    /**
     * loop
     * Provides the main loop of the FizzBuzz program
     */
    public function loop();
}
