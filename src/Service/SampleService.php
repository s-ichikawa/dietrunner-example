<?php

namespace Example\Service;

use Sichikawa\Dietrunner\Components\LoggerAwareTrait;

class SampleService
{
    use LoggerAwareTrait;

    public function sayHello(): string
    {
        return 'Hello, welcome to DietRunner';
    }
}