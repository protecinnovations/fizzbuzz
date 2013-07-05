<?php

namespace FizzBuzz\Model;

use \FizzBuzz\Model\Collection;

class CollectionFactory
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
     * create
     * Create all numbers pass to Collection class
     * 
     * @return array $collection
     */
    public function create()
    {

        $collection = new Collection;

        for ($i = $this->startPoint; $i <= $this->endPoint; $i++) {

            $num = new NumberFactory;

            $number = $num->create($i);

            $collection->addItem($number);
        }

        return $collection;
    }

}
