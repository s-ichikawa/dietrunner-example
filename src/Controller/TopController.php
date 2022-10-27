<?php

namespace Example\Controller;

use Sichikawa\Dietrunner\Controller;

class TopController extends Controller
{
    public function index()
    {
        $sample_service = $this->get('service.sample');

        return $this->render('index', [
            'sample_hello' => $sample_service->sayHello(),
        ]);
    }
}