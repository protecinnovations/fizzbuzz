<?php

namespace FizzBuzz\Model;

use \FizzBuzz\Model\Collection;
use \FizzBuzz\Model\NumberFactoryInterface;

/**
 * CollectionFactory
 * 
 * @package FizzBuzz\Model
 * @author Protec Innovations <support@protecinnovations.co.uk>
 * @copyright 2013 Protec Innovations
 */

class CollectionFactory implements CollectionFactoryInterface
{
    /**
     * startPoint
     * Store the start point for the creation
     * 
     * @var int 
     */
    protected $startPoint = 1;

    /**
     * endPoint
     * Store the end point for the creation 
     * 
     * @var int
     */
    protected $endPoint = 100;

    /**
     * $numFactory
     * Used to store the instance of NumberFactory
     * 
     * @var \FizzBuzz\Model\NumberFactory
     */
    protected $numFactory = null;

    /**
     * setStartPoint
     * set the start point number
     * 
     * @param int $start
     * @return \FizzBuzz\Model\CollectionFactory
     */
    public function setStartPoint($start)
    {
        $this->startPoint = $start;

        return $this;
    }

    /**
     * setEndPoint
     * set the end point number
     * 
     * @param int $end
     * @return \FizzBuzz\Model\CollectionFactory
     */
    public function setEndPoint($end)
    {
        $this->endPoint = $end;

        return $this;
    }

    /**
     * setNumberFactory
     * Used to set the instance of NumberFactory
     * 
     * @param \FizzBuzz\Model\NumberFactoryInterface $numberFactory
     * @return \FizzBuzz\Model\CollectionFactory
     */
    public function setNumFactory(NumberFactoryInterface $numberFactory)
    {
        $this->numFactory = $numberFactory;

        return $this;
    }

    /**
     * create
     * Create all numbers pass to Collection class
     * 
     * @return array $collection
     */
    public function create()
    {
        if (is_null($this->numFactory)) {
            throw new Exception('Need to create a number factory');
        }
        $collection = new Collection;

        for ($i = $this->startPoint; $i <= $this->endPoint; $i++) {

            $number = $this->numFactory->create($i);

            $collection->addItem($number);
        }
        return $collection;
    }
}
