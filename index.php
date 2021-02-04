<?php

require __DIR__ . '/vendor/autoload.php';

$log = new Monolog\Logger('env');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));


App\Log::p(123456);


