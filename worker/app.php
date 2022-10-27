<?php

use Sichikawa\Dietrunner\Dispatcher;
use Spiral\RoadRunner;
use Nyholm\Psr7;

include "vendor/autoload.php";

$worker = RoadRunner\Worker::create();
$psrFactory = new Psr7\Factory\Psr17Factory();

$psr7 = new RoadRunner\Http\PSR7Worker($worker, $psrFactory, $psrFactory, $psrFactory);

$env = Dispatcher::getEnv();
$app = new \Example\Application(dirname(__DIR__).'/src' , $env);

while (true) {
    try {
        $request = $psr7->waitRequest();

        if (!($request instanceof \Psr\Http\Message\ServerRequestInterface)) { // Termination request received
            break;
        }
    } catch (\Throwable) {
        $psr7->respond(new Psr7\Response(400)); // Bad Request
        continue;
    }

    try {
        // Application code logic
        $psr7->respond(Dispatcher::invokePsr7($app, $request));
    } catch (\Throwable $exception) {
        $psr7->respond(new Psr7\Response(500, [], 'Something Went Wrong!' . $exception->getMessage()));
    }
}
