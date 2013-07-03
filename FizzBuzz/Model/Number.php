<?php

namespace FizzBuzz\Model;

use \FizzBuzz\Model\NumberSetterInterface;

class Number implements NumberSetterInterface
{

    /**
     * $number
     * Stores number
     * 
     * @var int
     */
    protected $number;

    /**
     * setNumber
     * Sets the value of $number
     * 
     * @param int $number
     * @return \FizzBuzz\Model\Number
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * getNumber
     * Returns the number
     * 
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

}
