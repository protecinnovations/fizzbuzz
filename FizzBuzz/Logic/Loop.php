<?php

namespace FizzBuzz\Logic;

use \FizzBuzz\Logic\LoopInterface;
use \FizzBuzz\Output\OutputInterface;

/**
 * Loop
 *
 * @package FizzBuzz\Logic
 * @author Protec Innovations <support@protecinnovations.co.uk>
 * @copyright 2013 Protec Innovations
 */
class Loop implements LoopInterface
{

    /**
     * $currentNum
     * Used to store the current number
     * 
     * @var int
     */
    protected $currentNum;

    /**
     * $endNum
     * Used to store the end number
     * 
     * @var int
     */
    protected $endNum;

    /**
     * $output
     * Used to store the output
     * 
     * @var \FizzBuzz\Output\OutputInterface
     */
    protected $output;

    /**
     * $fizzNum
     * Used to store the fizz number
     * 
     * @var int
     */
    protected $fizzNum;

    /**
     * $buzzNum
     * Used to store the buzz number
     * 
     * @var int
     */
    protected $buzzNum;

    /**
     * $fizzWord
     * Used to store the fizz word
     * 
     * @var text 
     */
    protected $fizzWord;

    /**
     * $buzzWord
     * Used to store the buzz word
     * 
     * @var text
     */
    protected $buzzWord;

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
     * setFizzWord
     * Set the word to be used on fizz
     * 
     * @param text $word
     * @return \FizzBuzz\Logic\Loop
     */
    public function setFizzWord($word)
    {
        $this->fizzWord = $word;
        
        return $this;
    }
    
    /**
     * setBuzzWord
     * Set the word to be used on buzz
     * 
     * @param word $word
     * @return \FizzBuzz\Logic\Loop
     */
    public function setBuzzWord($word)
    {
        $this->buzzWord = $word;
        
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
                $this->output->fizzBuzz($this->fizzWord, $this->buzzWord);
            } elseif ($this->currentNum % $this->fizzNum == 0) {
                $this->output->fizz($this->fizzWord);
            } elseif ($this->currentNum % $this->buzzNum == 0) {
                $this->output->buzz($this->buzzWord);
            } else {
                $this->output->defaultOutput($this->currentNum);
            }
        }
    }

}
