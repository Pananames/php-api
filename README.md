# Pananames.com API

- API version: 2.0.0

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
	"require": {
		"pananames/api": "^2.0"
	}
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
require_once(__DIR__ . '/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Pananames\Api\DomainsApi;

$domainsApi = new DomainsApi('SIGNATURE', 'URL');

$response = $domainsApi->check('domain-example.com');

if ($response->hasErrors()) {
	$errors = $response->getErrors();

	//Log etc.

	return;
}

$data = $response->getData();

$httpCode = $response->getHttpCode();

$isSuccessful = $response->isSuccessful();

$isAvailable = $data->getAvailable();
$isPremium = $data->getPremium();

?>
```

## Documentation

- [Staging environment](https://docs-staging.pananames.com/)
- [Production environment](https://docs.pananames.com/)
