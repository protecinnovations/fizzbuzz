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
     * fizzBuzz
     * Perform the fizzBuzz output
     * 
     * @param text $fizzWord
     * @param text $buzzWord
     */
    public function fizzBuzz($fizzWord, $buzzWord);

    /**
     * fizz
     * Perform the fizz output
     * 
     * @param text $fizzWord
     */
    public function fizz($fizzWord);

    /**
     * buzz
     * Perform the buzz output
     * 
     * @param text $buzzWord
     */
    public function buzz($buzzWord);

    /**
     * defaultOutput
     * Perform the defaultOutput
     * 
     * @param int $i
     */
    public function defaultOutput($i);
}
