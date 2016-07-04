# Form

Groovey Form Package

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
- [Select Range](#select_range)
- [Select Month](#select_month)
- [Submit](#submit)
- [Token](#token)
- [Label](#label)
- [Form Open](#form_open)
- [Form Close](#form_close)

## Text

    $form->text('test', 'hello');</td>

## Password

    $form->password('password'); ?></td>

## Email

    $form->email('$name');

## File

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

<div id='select_range'></div>
## Select Range

    $form->selectRange('number', 10, 20);

<div id='select_month'></div>
## Select Month

    $form->selectMonth('month');

## Submit

    $form->submit('Click Me!');

## Token

    $form->token();

## Label

    $form->label('email', 'E-Mail Address');
    $form->label('email', 'e-Mail Address', ['class' => 'awesome']);

<div id='form_open'></div>
## Form Open

    $form->open(['url' => 'foo/bar']);
    $form->open(['url' => 'foo/bar', 'method' => 'put']);

<div id='form_close'></div>
# Form Close

    $form->close();
