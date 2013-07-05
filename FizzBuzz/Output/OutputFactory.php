<?php

namespace FizzBuzz\Output;

use \FizzBuzz\Output;

class OutputFactory
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
     * createBuzz
     * Allow access to buzz word
     * 
     * @return text
     */
    public function createBuzz()
    {

        return $this->buzzWord;
    }

    /**
     * createFizz
     * Allow access to fizz word
     * 
     * @return text
     */
    public function createFizz()
    {

        return $this->fizzWord;
    }

    /**
     * createFizzBuzz
     * Allow access to both the fizz and buzz word
     * 
     * @return text
     */
    public function createFizzBuzz()
    {

        return $this->fizzWord . $this->buzzWord;
    }

}
