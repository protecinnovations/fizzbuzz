<?php
require_once('SplClassLoader.php');

$classLoader = new SplClassLoader('FizzBuzz', __DIR__);
$classLoader->register();

use \FizzBuzz\Logic\LoopFactory;
use \FizzBuzz\Model\CollectionFactory;
use \FizzBuzz\Model\NumberFactory;
use \FizzBuzz\Output\OutputFactory;

$collectionFactory = new CollectionFactory();
$loopFactory = new LoopFactory();
$numberFactory = new NumberFactory();
$outputFactory = new OutputFactory();

$options = array(
    '--fizzword',
    '--buzzword',
    '--fizznum',
    '--buzznum',
    '--start',
    '--end',
);

for ($i = 0; $i < count($argv); $i++) {
    $arg = $argv[$i];

    if (substr($arg, 0, 2) != '--') {
        continue;
    }

    if (in_array($arg, $options)) {
        $option = $argv[$i + 1];
        switch ($arg) {
            case '--fizzword':
                $outputFactory->setFizzWord($option);
                break;
            case '--buzzword':
                $outputFactory->setBuzzWord($option);
                break;
            case '--fizznum':
                if (is_numeric($option)) {
                    $loopFactory->setFizzNum($option);
                }
                break;
            case '--buzznum':
                if (is_numeric($option)) {
                    $loopFactory->setBuzzNum($option);
                }
                break;
            case '--start':
                if (is_numeric($option)) {
                    $collectionFactory->setStartPoint($option);
                }
                break;
            case '--end':
                if (is_numeric($option)) {
                    $collectionFactory->setEndPoint($option);
                }
                break;
        }
    }
}

$collectionFactory->setNumFactory($numberFactory);

$loopFactory->setCollection($collectionFactory->create());

$loopFactory->setPrinter($outputFactory->create());

$loopFactory->create()->loop();
