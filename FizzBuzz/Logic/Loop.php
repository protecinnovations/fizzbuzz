<?php

namespace FizzBuzz\Logic;

use \FizzBuzz\Logic\LoopInterface;
use \FizzBuzz\Output\OutputInterface;

/**
 * Loop
 *
 * @package FizzBuzz\Logic
 * @author Protec Innovations <support@protecinnovations.co.uk>
 * @copyright 2012 - 2013 Protec Innovations
 */
class Loop implements LoopInterface
{

    /**
     * $currentNum
     * Used to store the current number
     * 
     * @var int
     */
    public $currentNum;

    /**
     * $endNum
     * Used to store the end number
     * 
     * @var int
     */
    public $endNum;

    /**
     * $output
     * Used to store the output
     * 
     * @var \FizzBuzz\Output\OutputInterface
     */
    public $output;

    /**
     * $fizzNum
     * Used to store the fizz number
     * 
     * @var int
     */
    public $fizzNum;

    /**
     * $buzzNum
     * Used to store the buzz number
     * 
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
