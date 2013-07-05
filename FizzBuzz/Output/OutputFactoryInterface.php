<?php

namespace FizzBuzz\Output;

/**
 * OutputFactoryInterface
 * 
 * @package FizzBuzz\Output
 * @author Protec Innovations <support@protecinnovations.co.uk>
 * @copyright 2013 Protec Innovations
 */

interface OutputFactoryInterface
{
    /**
     * setBuzzWord
     * Set the word to be used for buzz
     * 
     * @param text $buzzWord
     * @return \FizzBuzz\Output\OutputFactory
     */
    public function setBuzzWord($buzzWord);
    /**
     * setFizzWord
     * Set the word to be used for fizz
     * 
     * @param text $fizzWord
     * @return \FizzBuzz\Output\OutputFactory
     */
    public function setFizzWord($fizzWord);

    /**
     * create
     * Create the printer
     * 
     * @return \FizzBuzz\Output\Printer
     */
    public function create();
}
