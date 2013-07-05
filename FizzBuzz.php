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
        $num = $argv[$i + 1];
        switch ($arg) {
            case '--fizzword':
                $outputFactory->setFizzWord($num);
                break;
            case '--buzzword':
                $outputFactory->setBuzzWord($num);
                break;
            case '--fizznum':
                if (is_numeric($num)) {
                    $loopFactory->setFizzNum($num);
                }
                break;
            case '--buzznum':
                if (is_numeric($num)) {
                    $loopFactory->setBuzzNum($num);
                }
                break;
            case '--start':
                if (is_numeric($num)) {
                    $collectionFactory->setStartPoint($num);
                }
                break;
            case '--end':
                if (is_numeric($num)) {
                    $collectionFactory->setEndPoint($num);
                }
                break;
        }
    }
}

$collectionFactory->setNumFactory($numberFactory);

$loopFactory->setCollection($collectionFactory->create());

$loopFactory->setPrinter($outputFactory->create());

$loopFactory->create()->loop();
