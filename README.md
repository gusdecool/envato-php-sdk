# Envato PHP SDK
Implementation API source: https://build.envato.com/api

## User usage
Install the package with

```shell script
composer require gusdecool/php-envato-sdk
```

Create your API instances with

```php
$personalAuthToken = \Gusdecool\EnvatoSDK\Utility\HttpClientBuilder::personal('YOUR_AUTH_TOKEN');
$api = new \Gusdecool\EnvatoSDK\Api\MarketCatalogApi($personalAuthToken);

$response = $api->searchItems([]);
var_dump($response);
```

Each API methods has documentation that link to the Envato API documentation page where you can see the possible
parameters and response values. All parameters and response value are matches with the docs.  

## Development guide
We only need CLI to develop and test the code. Please use PHPUnit to test the code.

### How to install 
Use Docker for the easiest installation steps and run these commands

```shell script
docker-compose run app bash

# we're now in shell of the docker instance

# install dependencies
composer install 

# test the code
vendor/bin/phpunit
```
