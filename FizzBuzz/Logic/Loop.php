<?php

namespace FizzBuzz\Logic;

use \FizzBuzz\Output\OutputInterface;

/**
 * Loop
 *
 * @package FizzBuzz\Logic
 * @author Protec Innovations <support@protecinnovations.co.uk>
 * @copyright 2012 - 2013 Protec Innovations
 */
class Loop
{

    /**
     * @var int
     */
    public $currentNum;

    /**
     * @var int
     */
    public $endNum;

    /**
     * @var \FizzBuzz\Output\OutputInterface
     */
    public $output;

    /**
     * @var int
     */
    public $fizzNum;

    /**
     * @var int
     */
    public $buzzNum;

    /**
     * setCurrentNum
     * Set the current number
     * 
     * @param int $i
     * @return \FizzBuzz\Logic\Loop
     */
    public function setCurrentNum($i)
    {
        $this->currentNum = $i;

        return $this;
    }

    /**
     * setEndNum
     * Set the number to end loop on
     * 
     * @param int $i
     * @return \FizzBuzz\Logic\Loop
     */
    public function setEndNum($i)
    {
        $this->endNum = $i;

        return $this;
    }

    /**
     * setOutput
     * Set the output handler
     * 
     * @param \FizzBuzz\Output\OutputInterface $output
     * @return \FizzBuzz\Logic\Loop
     */
    public function setOutput(OutputInterface $output)
    {
        $this->output = $output;

        return $this;
    }

    /**
     * setFizzNum
     * Set the number to fizz on
     * 
     * @param int $i
     * @return \FizzBuzz\Logic\Loop
     */
    public function setFizzNum($i)
    {
        $this->fizzNum = $i;

        return $this;
    }

    /**
     * setBuzzNum
     * Set the number to buzz on
     * 
     * @param int $i
     * @return \FizzBuzz\Logic\Loop
     */
    public function setBuzzNum($i)
    {
        $this->buzzNum = $i;

        return $this;
    }

    /**
     * loop
     * Provides the main loop of the FizzBuzz program
     */
    public function loop()
    {

        for ($this->currentNum; $this->currentNum <= $this->endNum; $this->currentNum++) {

            if ($this->currentNum % $this->fizzNum == 0 && $this->currentNum % $this->buzzNum == 0) {
                $this->output->fizzBuzz();
            } elseif ($this->currentNum % $this->fizzNum == 0) {
                $this->output->fizz();
            } elseif ($this->currentNum % $this->buzzNum == 0) {
                $this->output->buzz();
            } else {
                $this->output->defaultOutput($this->currentNum);
            }
        }
    }

}