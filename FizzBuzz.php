<?php

require_once('SplClassLoader.php');

$classLoader = new SplClassLoader('FizzBuzz', __DIR__);
$classLoader->register();

use \FizzBuzz\Logic\Loop;
use \FizzBuzz\Output\Printer;

$loop = new Loop();
$printer = new Printer();


$loop->setCurrentNum(1);
$loop->setEndNum(100);
$loop->setBuzzNum(5);
$loop->setFizzNum(3);
$loop->setOutput($printer);

$options = array(
    '--fizznum',
    '--buzznum',
    '--start',
    '--end',
);

for ($i = 0; $i < count($argv); $i++) {
    $arg = $argv[$i];

    if (substr($arg, 0, 1) != '--') {
        continue;
    }

    if (in_array($arg, $options)) {
        switch ($arg) {
            case '--fizznum':
                if (is_numeric($argv[$i + 1])) {
                    $loop->setFizzNum($argv[$i + 1]);
                }
                break;
            case '--buzznum':
                if (is_numeric($argv[$i + 1])) {
                    $loop->setBuzzNum($argv[$i + 1]);
                }
                break;
            case '--start':
                if (is_numeric($argv[$i + 1])) {
                    $loop->setCurrentNum($argv[$i + 1]);
                }
                break;
            case '--end':
                if (is_numeric($argv[$i + 1])) {
                    $loop->setEndNum($argv[$i + 1]);
                }
                break;
        }
    }
}


$loop->loop();
