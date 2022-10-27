<?php

namespace Example;

use Sichikawa\Dietrunner\RouteInterface;
use Pimple\Container;

class Route implements RouteInterface
{

    public function definition(Container $container): array
    {
        return [
            ['GET', '/', 'Top::index']
        ];
    }
}