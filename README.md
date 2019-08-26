# Starweb Shop API Software Development Kit for PHP

[![Build Status](https://travis-ci.org/starweb/shop-api-sdk-php.svg?branch=master)](https://travis-ci.org/starweb/shop-api-sdk-php)
[![Code Coverage](https://scrutinizer-ci.com/g/starweb/shop-api-sdk-php/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/starweb/shop-api-sdk-php/?branch=master)

## ATTENTION: This sdk is under development and should not be used in a production environment!

## System Requirements
- PHP >= 7.1  (extension requirements in composer.json).

## Installation
The sdk uses the [httplug](http://docs.php-http.org/en/latest/httplug/introduction.html) library for the http client implementation, 
so you will need to install a library that provides the virtual `php-http/client-implementation` composer package, e.g. `php-http/guzzle6-adapter`. 

Use [composer](https://getcomposer.org/?target=_blank) to install a http client of your choice 

```bash
$ composer require php-http/guzzle6-adapter
```

and the sdk itself:

```bash
$ composer require starweb/shop-api-sdk
```

# Documentation
The Starweb Shop API SDK uses an auto generated client based on [Jane](https://jane.readthedocs.io/) at its core.

# Issues
Please use the [issue tracker](https://github.com/starweb/shop-api-sdk-php/issues?target=_blank) if you find any issues.

## License
This software is licensed under the BSD 3-Clause License - see the [LICENSE](LICENSE.md) file for details.



