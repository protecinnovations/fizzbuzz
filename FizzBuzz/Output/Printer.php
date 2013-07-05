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
     * $factory
     * Stores the OutputFactory
     * 
     * @var \FizzBuzz\Output\OutputFactory
     */
    protected $factory;

    /**
     * setFactory
     * Sets the OutputFactory
     * 
     * @param \FizzBuzz\Output\Factory $outputFactory
     * @return \FizzBuzz\Output\Printer
     */
    public function setFactory($outputFactory)
    {

        $this->factory = $outputFactory;

        return $this;
    }

    /**
     * buzz
     * Echo buzz
     */
    public function buzz()
    {

        $this->printVar($this->factory->createBuzz());
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

        $this->printVar($this->factory->createFizz());
    }

    /**
     * fizzBuzz
     * echo fizzbuzz words
     */
    public function fizzBuzz()
    {

        $this->printVar($this->factory->createFizzBuzz());
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
