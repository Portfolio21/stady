<?php

include 'ClassAutoloader.php';
new ClassAutoloader();

$engine = new engine\SimplyEngine();
$transmission = new transmission\SimplyTransmission();
$car = new car\Hyundai($engine, $transmission);
$car::showInfo();
$car->start();
$car->up();
