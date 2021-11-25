<?php

require 'ClassAutoloader.php';

new ClassAutoloader();

$router = new Router1();
$app = new Application($router);

$app->run();
