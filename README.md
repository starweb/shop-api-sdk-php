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

All you need to get started with the sdk is to create an instance of [`ClientCredentials`](src/Api/Authentication/ClientCredentials.php) passing your client id and client secret to the constructor.
Together with your APIs base url you can than use the static factory method to create the sdk:
 
    $credentials = new ClientCredentials('my-client-id', 'my-client-secret');
    $starweb = Starweb::create($credentials, 'https://my-shop.starwebserver.se/api/v2');

**Make sure to store your credentials in a secure way**. We recommend using environment variables. 

Once you have the sdk created you can get the client and start using it: 

    // get the client from the sdk
    $client = $starweb->getClient();

    // fetch products
    $products = $client->listProducts();
    
    /** 
     * @see \Starweb\Api\Generated\Model\ProductModelCollection
     * @see \Starweb\Api\Generated\Model\ProductModel
     */     
    foreach($products->getData() as $product) {
        $categories = $product->getCategories();
    }  

    // get a single product
    $product = $client->getProduct(123);        
     
# Issues
Please use the [issue tracker](https://github.com/starweb/shop-api-sdk-php/issues?target=_blank) if you find any issues.

## License
This software is licensed under the BSD 3-Clause License - see the [LICENSE](LICENSE.md) file for details.



