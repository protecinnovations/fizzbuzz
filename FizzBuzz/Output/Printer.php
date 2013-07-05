<?php

namespace FizzBuzz\Output;

use \FizzBuzz\Output\OutputInterface;

/**
 * Printer
 * 
 * @package FizzBuzz\Output
 * @author Protec Innovations <support@protecinnovations.co.uk>
 * @copyright 2013 Protec Innovations
 */
class Printer implements OutputInterface
{
    /**
     * $fizzWord
     * Used to store the fizz word
     * 
     * @var string
     */
    protected $fizzWord;
    
    /**
     * $buzzWord
     * Used to store the buzz word
     * 
     * @var string
     */
    protected $buzzWord;
    
    /**
     * setFizzWord
     * Set the word to be used for fizz
     * 
     * @param string $fizz
     */
    public function setFizzWord($fizz)
    {
        $this->fizzWord = $fizz;
        
        return $this;
    }
    
    /**
     * setBuzzWord
     * Set the word to be used for buzz
     * 
     * @param string $buzz
     */
    public function setBuzzWord($buzz)
    {
        $this->buzzWord = $buzz;
        
        return $this;
    }
    
    /**
     * buzz
     * Echo buzz
     */
    public function buzz()
    {
        $this->printVar($this->buzzWord);
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
        $this->printVar($this->fizzWord);
    }

    /**
     * fizzBuzz
     * echo fizzbuzz words
     */
    public function fizzBuzz()
    {
        $this->printVar($this->fizzWord . $this->buzzWord);
    }

    /**
     * printVar
     * Echo formatted line
     * 
     * @param mixed $var
     */
    protected function printVar($var)
    {
        echo sprintf("%s\n", $var);
    }

}
