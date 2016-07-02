# Groovey Form

A Silex 2 service provider that uses HTML form components.

## Installation

    $ composer require groovey/form

## Setup

```php
#!/usr/bin/env php
<?php

require_once __DIR__.'/vendor/autoload.php';

use Silex\Application;
use Groovey\Form\Providers\FormServiceProvider;

$app = new Application();
$app['debug'] = true;

$app->register(new FormServiceProvider());

$app['form']->text('test', 'Hello World');
```

## Standalone

```php
use Groovey\Form\Form;

$form = new Form();
$form->text('test', 'Hello World');

```

## Form Elements

- [Text](#text)
- [Password](#password)
- [Email](#email)
- [File](#file)
- [Checkbox](#checkbox)
- [Radio](#radio)
- [Select](#select)
- [Select Range](#select range)
- [Select Month](#select month)
- [Submit](#submit)
- [Token](#token)
- [Label](#label)
- [Form Open](#form open)
- [Form Close](#form close)

## Text

    $form->text('test', 'hello');</td>

## Password

    $form->password('password'); ?></td>

## Email

    $form->email('$name');

## Test

    $form->file('test');

## Checkbox

    $form->checkbox('name', 'value');
    $form->checkbox('name', 'value', true);

## Radio

    $form->radio('name', 'value');
    $form->radio('name', 'value', true);

## Select

    $form->select('size', array('L' => 'Large', 'S' => 'Small'));
    $form->select('size', array('L' => 'Large', 'S' => 'Small'), 'S');
    $form->select('animal', array(
                'Cats' => array('leopard' => 'Leopard'),
                'Dogs' => array('spaniel' => 'Spaniel'),
            ));

## Select Range

    $form->selectRange('number', 10, 20);

## Select Month

    $form->selectMonth('month');

## Submit

    $form->submit('Click Me!');

## Token

    $form->token();

## Email

    $form->label('email', 'E-Mail Address');
    $form->label('email', 'e-Mail Address', ['class' => 'awesome']);

## Form Open

    $form->open(['url' => 'foo/bar']);
    $form->open(['url' => 'foo/bar', 'method' => 'put']);

## Form Close

    $form->close();
