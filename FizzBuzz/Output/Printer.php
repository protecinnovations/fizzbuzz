<?php

namespace FizzBuzz\Output;

use \FizzBuzz\Output\OutputInterface;

/**
 * Printer
 * 
 * @package FizzBuzz\Output
 * @author Protec Innovations <support@protecinnovations.co.uk>
 * @copyright 2012 - 2013 Protec Innovations
 */
class Printer implements OutputInterface
{

    /**
     * buzz
     * Echo buzz
     * 
     * @param text $buzzWord
     */
    public function buzz($buzzWord)
    {
        $this->printVar($buzzWord);
    }

    /**
     * defaultOutput
     * Echo deafultOutput value
     * 
     * @param int $i
     */
    public function defaultOutput($i)
    {
        $this->printVar($i);
    }

    /**
     * fizz
     * Echo fizz
     * 
     * @param text $fizzWord
     */
    public function fizz($fizzWord)
    {
        $this->printVar($fizzWord);
    }

    /**
     * fizzBuzz
     * echo fizzbuzz words
     * 
     * @param text $fizzWord
     * @param text $buzzWord
     */
    public function fizzBuzz($fizzWord, $buzzWord)
    {
        $this->printVar($fizzWord . $buzzWord);
    }

    /**
     * printVar
     * Echo formatted line
     * 
     * @param mixed $var
     */
    private function printVar($var)
    {
        echo sprintf("%s\n", $var);
    }

}
