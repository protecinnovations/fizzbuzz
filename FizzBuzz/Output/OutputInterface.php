<?php

namespace FizzBuzz\Output;

/**
 * OutputInterface
 * 
 * @package FizzBuzz\Output
 * @author Protec Innovations <support@protecinnovations.co.uk>
 * @copyright 2013 Protec Innovations
 */
interface OutputInterface
{
    /**
     * setFizzWord
     * Set the word to be used for fizz
     * 
     * @param text $fizz
     */
    public function setFizzWord($fizz);

    /**
     * setBuzzWord
     * Set the word to be used for buzz
     * 
     * @param text $buzz
     */
    public function setBuzzWord($buzz);

    /**
     * fizzBuzz
     * Perform the fizzBuzz output
     * 
     */
    public function fizzBuzz();

    /**
     * fizz
     * Perform the fizz output
     */
    public function fizz();

    /**
     * buzz
     * Perform the buzz output
     */
    public function buzz();

    /**
     * defaultOutput
     * Perform the defaultOutput
     * 
     * @param int $i
     */
    public function defaultOutput($i);
}
