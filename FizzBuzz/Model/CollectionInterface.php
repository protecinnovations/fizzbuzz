<?php

namespace FizzBuzz\Model;

interface CollectionInterface
{

    public function setCollection(array $value);

    /**
     * addItem
     * Adds items to the array
     * 
     * @param \FizzBuzz\Model\NumberProviderInterface $item
     * @return \FizzBuzz\Model\Collection
     */
    public function addItem(NumberProviderInterface $item);

    /**
     * current
     * Returns the current item
     * 
     * @return NumberProviderInterface
     */
    public function current();

    /**
     * key
     * Returns the key of the item
     * 
     * @return key
     */
    public function key();

    /**
     * next
     * Moves onto the next item in array
     */
    public function next();

    /**
     * rewind
     * Returns to the start of the iterator
     */
    public function rewind();

    /**
     * valid
     * Checks if item exsists
     * 
     * @return boolen
     */
    public function valid();
}