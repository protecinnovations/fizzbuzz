<?php

namespace FizzBuzz\Model;

use \FizzBuzz\Model\NumberProviderInterface;

interface NumberSetterInterface extends NumberProviderInterface
{

    public function setNumber($number);
}
