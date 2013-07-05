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

$collectionFactory->setNumFactory($numberFactory);

$collection = $collectionFactory->create();

$loopFactory->setCollection($collection);

$loopFactory->setPrinter($outputFactory->create());

$loopFactory->create()->loop();
