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

    const BUZZ_WORD = 'Buzz';
    const FIZZ_WORD = 'Fizz';

    /**
     * buzz
     * 
     * Echo buzz
     */
    public function buzz()
    {
        $this->printVar(self::BUZZ_WORD);
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
     */
    public function fizz()
    {
        $this->printVar(self::FIZZ_WORD);
    }

    /**
     * fizzBuzz
     * Echo fizzbuzz
     */
    public function fizzBuzz()
    {
        $this->printVar(self::FIZZ_WORD . self::BUZZ_WORD);
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
