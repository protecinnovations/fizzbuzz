<?php

namespace FizzBuzz\Model;

/**
 * NumberFactoryInterface
 * 
 * @package FizzBuzz\Model
 * @author Protec Innovations <support@protecinnovations.co.uk>
 * @copyright 2013 Protec Innovations
 */

interface NumberFactoryInterface
{
    /**
     * create
     * Create the numbers
     * 
     * @param int $number
     * @return \FizzBuzz\Model\Number
     */
    public function create($number);
}
