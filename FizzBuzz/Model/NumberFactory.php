<?php

namespace FizzBuzz\Model;

class NumberFactory
{
    
    public function create($number)
    {
        
        $num = new Number;
        
        $num->setNumber($number);
        
        return $num;
        
    }
    
}
