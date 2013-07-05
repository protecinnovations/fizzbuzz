<?php

namespace FizzBuzz\Model;

class NumberFactory
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
