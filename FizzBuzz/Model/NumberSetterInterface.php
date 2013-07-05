<?php

namespace FizzBuzz\Model;

use \FizzBuzz\Model\NumberProviderInterface;

interface NumberSetterInterface extends NumberProviderInterface
{

    /**
     * setNumber
     * Set number
     * 
     * @param int $number
     */
    public function setNumber($number);
}
