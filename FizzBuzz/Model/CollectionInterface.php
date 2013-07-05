<?php

namespace FizzBuzz\Model;

interface CollectionInterface
{

    /**
     * setCollection
     * Set the collection array
     * 
     * @param array $value
     */
    public function setCollection(array $value);

    /**
     * addItem
     * Adds items to the array
     * 
     * @param \FizzBuzz\Model\NumberProviderInterface $item
     * @return \FizzBuzz\Model\Collection
     */
    public function addItem(NumberProviderInterface $item);
}