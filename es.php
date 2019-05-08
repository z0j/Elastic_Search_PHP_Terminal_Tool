<?php
require 'vendor/autoload.php';
use Elasticsearch\ClientBuilder;

// config
$esConfig =  include('config/elasticSearch.php');

// file
$ES = ClientBuilder::create()->setHosts($esConfig)->build();
$paramsPath = isset($argv[1]) ? $argv[1] : 'query.php';;
$searchParams = include($paramsPath);

if (!empty($searchParams)) {
    echo json_encode($searchParams, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);        // 格式化输出
}

exit(0);
