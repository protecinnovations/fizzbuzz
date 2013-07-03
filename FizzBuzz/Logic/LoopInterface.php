<?php

namespace FizzBuzz\Logic;

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
     * setCurrentNum
     * Set the surrent number
     * 
     * @param int $i
     */
    public function setCurrentNum($i);

    /**
     * setEndNum
     * Set the number to end loop on
     * 
     * @param int $i
     */
    public function setEndNum($i);

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
     * setFizzWord
     * Set the word to be used on fizz
     * 
     * @param text $word
     * @return \FizzBuzz\Logic\Loop
     */
    public function setFizzWord($word);

    /**
     * setBuzzWord
     * Set the word to be used on buzz
     * 
     * @param word $word
     * @return \FizzBuzz\Logic\Loop
     */
    public function setBuzzWord($word);

    public function setCollection($collect);

    /**
     * loop
     * Provides the main loop of the FizzBuzz program
     */
    public function loop();
}
