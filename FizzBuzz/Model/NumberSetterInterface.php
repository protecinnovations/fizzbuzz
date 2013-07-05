<?php

namespace FizzBuzz\Model;

use \FizzBuzz\Model\NumberProviderInterface;

/**
 * NumberSetterInterface
 * 
 * @package FizzBuzz\Model
 * @author Protec Innovations <support@protecinnovations.co.uk>
 * @copyright 2013 Protec Innovations
 */

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
