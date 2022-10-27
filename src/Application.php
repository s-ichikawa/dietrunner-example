<?php

namespace Example;

use Example\Service\SampleService;
use Pimple\Container;

class Application extends \Sichikawa\Dietrunner\Application
{
    public function init(Container $container)
    {
        // do something before boot
    }

    public function config(Container $container)
    {
        $container['service.sample'] = function () use ($container) {
            $sample_service = new SampleService();
            $sample_service->setLogger($container['logger']);

            return $sample_service;
        };
    }
}