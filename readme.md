## Currencies name list

With this package you can have currencies names list

### Requirement

1. This is a Laravel package
2. PHP >= 7.4

### Installation

```bash
composer require "vahidkaargar/currencies"
```

## Documentation

```php

use vahidkaargar\Currencies\Currency;

/*
 * There two ways to use 
 * Output must be an array of currencies names
 */
$currencies = currency();
$currencies = Currency::fetch();

/*
 * Give you details of currency
 */
$currencies = currency('USD');
$currencies = Currency::fetch('USD');
```

### Test

```bash
./vendor/bin/phpunit
```