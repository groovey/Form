<?php

namespace Groovey\Form\Providers;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Silex\Application;
use Silex\Api\BootableProviderInterface;

class FormServiceProvider implements ServiceProviderInterface, BootableProviderInterface
{
    public function register(Container $app)
    {
        $app['form'] = function ($app) {
            return new Form();
        };
    }

    public function boot(Application $app)
    {
    }
}
