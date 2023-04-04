# Slovenia vat format validator

![Code Coverage Badge](./badge.svg)

This component provides Slovenia vat number format validator.

Implementation of interface **rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface**

Depends on https://github.com/rocketfellows/country-vat-format-validator-interface

## Installation

```shell
composer require rocketfellows/si-vat-format-validator
```

## Usage example

Valid Slovenia vat number:

```php
$validator = new SIVatFormatValidator();
$validator->isValid('SI12345678');
$validator->isValid('12345678');
```

Returns:

```shell
true
true
```

Invalid Slovenia vat number:

```php
$validator = new SIVatFormatValidator();
$validator->isValid('SI123456789');
$validator->isValid('SI1234567');
$validator->isValid('DE12345678');
$validator->isValid('123456789');
$validator->isValid('1234567');
$validator->isValid('');
```

```shell
false
false
false
false
false
false
```

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.
