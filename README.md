# Pananames.com API

- API version: 2.0.0

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
	"repositories": [
		{
			"type": "git",
			"url": "https://github.com/Pananames/php-api.git"
		}
	],
	"require": {
		"Pananames/api": "*@dev"
	}
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
require_once('/path/to//vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Pananames\Api\DomainsApi;

$domainsApi = new DomainsApi('SIGNATURE', 'URL' = '');

$response = $domainsApi->check('domain-example.com');

if ($response->hasErrors()) {
	$errors = $response->getErrors();

	//Log etc.

	return;
}

$data = $response->getData();
$meta = $response->getMeta();

$httpCode = $response->getHttpCode();

$isSuccessful = $response->isSuccessful();

$isAvailable = $data->getAvailable();
$isPremium = $data->getPremium();

?>
```

## Documentation

[docs.pananames.com](https://docs.pananames.com/)
