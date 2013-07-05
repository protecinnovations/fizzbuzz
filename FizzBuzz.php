<?php

require_once('SplClassLoader.php');

$classLoader = new SplClassLoader('FizzBuzz', __DIR__);
$classLoader->register();

use \FizzBuzz\Logic\LoopFactory;
use \FizzBuzz\Model\CollectionFactory;
use \FizzBuzz\Output\OutputFactory;
use \FizzBuzz\Output\Printer;

$collectionFactory = new CollectionFactory();
$loopFactory = new LoopFactory();
$outputFactory = new OutputFactory();
$printer = new Printer();

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
        switch ($arg) {
            case '--fizzword':
                $outputFactory->setFizzWord($argv[$i + 1]);
                break;
            case '--buzzword':
                $outputFactory->setBuzzWord($argv[$i + 1]);
                break;
            case '--fizznum':
                if (is_numeric($argv[$i + 1])) {
                    $loopFactory->setFizzNum($argv[$i + 1]);
                }
                break;
            case '--buzznum':
                if (is_numeric($argv[$i + 1])) {
                    $loopFactory->setBuzzNum($argv[$i + 1]);
                }
                break;
            case '--start':
                if (is_numeric($argv[$i + 1])) {
                    $collectionFactory->setStartPoint($argv[$i + 1]);
                }
                break;
            case '--end':
                if (is_numeric($argv[$i + 1])) {
                    $collectionFactory->setEndPoint($argv[$i + 1]);
                }
                break;
        }
    }
}

$collection = $collectionFactory->create();

$loopFactory->setCollection($collection);

$printer->setFactory($outputFactory);

$loopFactory->setPrinter($printer);

$loopFactory->create()->loop();
