<?php

namespace FizzBuzz\Model;

/**
 * NumberFactory
 * 
 * @package FizzBuzz\Model
 * @author Protec Innovations <support@protecinnovations.co.uk>
 * @copyright 2013 Protec Innovations
 */

class NumberFactory implements NumberFactoryInterface
{
    /**
     * create
     * Create the numbers
     * 
     * @param int $number
     * @return \FizzBuzz\Model\Number
     */
    public function create($number)
    {
        $num = new Number;

        $num->setNumber($number);

        return $num;
    }
}
