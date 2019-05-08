<?php
require 'vendor/autoload.php';
use Elasticsearch\ClientBuilder;

// config
$esConfig = [
    [
        'host' => '127.0.0.1',
        'port' => '9200',
        'scheme' => 'http',
    ]
];

// file
$ES = ClientBuilder::create()->setHosts($esConfig)->build()->setDebug(true);

$hosts = '';
$esConfig = current($esConfig);
$hosts .= ($esConfig['scheme'] ? $esConfig['scheme'] : "http"). "://";
$hosts .= ($esConfig['host'] ? $esConfig['host'] : "127.0.0.1"). ":";
$hosts .= $esConfig['port'] ? $esConfig['port'] : "9200";

$paramsPath = isset($argv[1]) ? $argv[1] : 'query.php';

$curlStr = include($paramsPath);

if (!empty($curlStr)) {
    $str = str_replace('{hosts}', $hosts, $curlStr);
    echo $str;
}
exit(0);
