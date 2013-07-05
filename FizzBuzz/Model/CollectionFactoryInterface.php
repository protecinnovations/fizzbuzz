<?php

namespace FizzBuzz\Model;

use \FizzBuzz\Model\NumberFactoryInterface;

/**
 * CollectionFactoryInterface
 * 
 * @package FizzBuzz\Model
 * @author Protec Innovations <support@protecinnovations.co.uk>
 * @copyright 2013 Protec Innovations
 */

interface CollectionFactoryInterface
{
    /**
     * setStartPoint
     * set the start point number
     * 
     * @param int $start
     * @return \FizzBuzz\Model\CollectionFactory
     */
    public function setStartPoint($start);

    /**
     * setEndPoint
     * set the end point number
     * 
     * @param int $end
     * @return \FizzBuzz\Model\CollectionFactory
     */
    public function setEndPoint($end);

    /**
     * setNumberFactory
     * Used to set the instance of NumberFactory
     * 
     * @param \FizzBuzz\Model\NumberFactory $numberFactory
     * @return \FizzBuzz\Model\CollectionFactory
     */
    public function setNumFactory(NumberFactoryInterface $numberFactory);

    /**
     * create
     * Create all numbers pass to Collection class
     * 
     * @return array $collection
     */
    public function create();
}
