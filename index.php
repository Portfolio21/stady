<?php

require 'Formatter.php';
require 'FileWriter.php';
require 'Logger.php';

$formatter = new Formatter();
$writer = new FileWriter();

$logger = new Logger($writer, $formatter);
$logger->log('info', 'Test Log');


