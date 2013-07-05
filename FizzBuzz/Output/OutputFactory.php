<?php

namespace FizzBuzz\Output;

use \FizzBuzz\Output\OutputFactoryInterface;
use \FizzBuzz\Output\Printer;

/**
 * OutputFactory
 * 
 * @package FizzBuzz\Output
 * @author Protec Innovations <support@protecinnovations.co.uk>
 * @copyright 2013 Protec Innovations
 */

class OutputFactory implements OutputFactoryInterface
{
    /**
     * $buzzWord
     * Store the buzz word
     * 
     * @var text
     */
    protected $buzzWord = 'Buzz';

    /**
     * $fizzWord
     * Store the fizz word
     * 
     * @var text
     */
    protected $fizzWord = 'Fizz';

    /**
     * setBuzzWord
     * Set the word to be used for buzz
     * 
     * @param text $buzzWord
     * @return \FizzBuzz\Output\OutputFactory
     */
    public function setBuzzWord($buzzWord)
    {
        $this->buzzWord = $buzzWord;

        return $this;
    }

    /**
     * setFizzWord
     * Set the word to be used for fizz
     * 
     * @param text $fizzWord
     * @return \FizzBuzz\Output\OutputFactory
     */
    public function setFizzWord($fizzWord)
    {
        $this->fizzWord = $fizzWord;

        return $this;
    }

    /**
     * create
     * Create the printer
     * 
     * @return \FizzBuzz\Output\Printer
     */
    public function create()
    {
        $printer = new Printer();
        
        $printer->setBuzzWord($this->buzzWord);
        $printer->setFizzWord($this->fizzWord);
        
        return $printer;
    }
}
