<?php

use Silex\Application;
use Groovey\Form\Providers\FormServiceProvider;

class FormTest extends PHPUnit_Framework_TestCase
{
    private function init()
    {
        $app = new Application();
        $app['debug'] = true;

        $app->register(new FormServiceProvider());

        return $app;
    }

    public function testText()
    {
        $app = $this->init();

        $text = $app['form']->text('test', 'hello');
        $this->assertRegExp('/input/', $text);
    }
}
