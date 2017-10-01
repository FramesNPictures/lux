<?php

namespace Fnp\Lux;

use Illuminate\Support\ServiceProvider;
use Laravel\Lumen\Routing\Router;

class Provider extends ServiceProvider
{
    public function boot(Router $router)
    {
        $router->get('/', function() {
            return '<h1>Hello World</h1>';
        });
    }
}