# hooks
PHP Hooks System
## Installing
Install using Composer.
```sh
$ composer require oscdenox/hooks
```
## Usage Action
```php
$hooks = new oscdenox\Hooks\Manager;

$hooks->action->add("header", function() {
	echo "Hello!";
});

$hooks->action->run("header");
```
## Usage Filter
```php
$hooks = new oscdenox\Hooks\Manager;

$hooks->filter->add("header", function($value) {
	return $value . " World!";
});

echo $hooks->filter->apply("header", "Hello");
```
