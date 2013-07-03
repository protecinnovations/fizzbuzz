<?php

namespace FizzBuzz\Model;

use \Iterator;
use \FizzBuzz\Model\NumberProviderInterface;

class Collection implements Iterator, CollectionInterface
{

    /**
     * $collection
     * Setup the collection array
     * 
     * @var array 
     */
    protected $collection = array();

    /**
     * $position
     * Position for iterator
     * 
     * @var int
     */
    protected $position = 0;

    /**
     * setCollection
     * Setting the array
     * 
     * @param array $value
     * @return \FizzBuzz\Model\Collection
     */
    public function setCollection(array $value)
    {

        $this->collection = $value;

        return $this;
    }

    /**
     * addItem
     * Adds items to the array
     * 
     * @param \FizzBuzz\Model\NumberProviderInterface $item
     * @return \FizzBuzz\Model\Collection
     */
    public function addItem(NumberProviderInterface $item)
    {

        $this->collection[] = $item;

        return $this;
    }

    /**
     * current
     * Returns the current item
     * 
     * @return NumberProviderInterface
     */
    public function current()
    {
        return $this->collection[$this->position];
    }

    /**
     * key
     * Returns the key of the item
     * 
     * @return key
     */
    public function key()
    {
        return $this->position;
    }

    /**
     * next
     * Moves onto the next item in array
     */
    public function next()
    {
        ++$this->position;
    }

    /**
     * rewind
     * Returns to the start of the iterator
     */
    public function rewind()
    {
        $this->position = 0;
    }

    /**
     * valid
     * Checks if item exsists
     * 
     * @return boolen
     */
    public function valid()
    {
        return isset($this->collection[$this->position]);
    }

}
