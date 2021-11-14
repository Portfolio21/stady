<?php

require 'vendor/autoload.php';

$checker = new \Gruzd\Tools\Url\HostChecker();

$targetUrl = 'https://ithillel.ua/';

if ($checker->check($targetUrl)) {
    $guzzle = new GuzzleHttp\Client();
    $content = $guzzle->get($targetUrl);
    echo $content->getBody()->getContents();
} else {
    echo 'The requested host is not available';
}
