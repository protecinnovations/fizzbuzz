<?php

namespace FizzBuzz\Logic;

use \Exception;
use \FizzBuzz\Logic\Loop;
use \FizzBuzz\Output\OutputInterface;

class LoopFactory
{

    protected $startNum = 1;
    protected $endNum = 100;
    protected $buzzNum = 5;
    protected $fizzNum = 3;
    protected $fizzWord = 'Fizz';
    protected $buzzWord = 'Buzz';
    protected $printer = null;
    protected $collection;

    public function setStartNum($startNum)
    {
        $this->startNum = $startNum;

        return $this;
    }

    public function setEndNum($endNum)
    {
        $this->endNum = $endNum;

        return $this;
    }

    public function setBuzzNum($buzzNum)
    {
        $this->buzzNum = $buzzNum;

        return $this;
    }

    public function setFizzNum($fizzNum)
    {
        $this->fizzNum = $fizzNum;

        return $this;
    }

    public function setFizzWord($fizzWord)
    {
        $this->fizzWord = $fizzWord;

        return $this;
    }

    public function setBuzzWord($buzzWord)
    {
        $this->buzzWord = $buzzWord;

        return $this;
    }

    public function setPrinter(OutputInterface $printer)
    {
        $this->printer = $printer;

        return $this;
    }

    public function setCollection($collect)
    {
        $this->collection = $collect;
    }

    public function create()
    {

        if (is_null($this->printer)) {
            throw new Exception('Must have a printer.');
        }

        $loop = new Loop();

        $loop->setCurrentNum($this->startNum);
        $loop->setEndNum($this->endNum);
        $loop->setBuzzNum($this->buzzNum);
        $loop->setFizzNum($this->fizzNum);
        $loop->setFizzWord($this->fizzWord);
        $loop->setBuzzWord($this->buzzWord);
        $loop->setOutput($this->printer);
        $loop->setCollection($this->collection);

        return $loop;
    }

}
