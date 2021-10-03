<?php

include 'SimplyEngine.php';
include 'SimplyTransmission.php';
include 'Hyundai.php';

$engine = new SimplyEngine();
$transmission = new SimplyTransmission();

$car = new Hyundai($engine, $transmission);
$car->start();
$car->up();;
