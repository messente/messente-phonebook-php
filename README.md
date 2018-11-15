# Messente Phonebook API

PhonebookApi - PHP client for Messente Phonebook API

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
      "url": "https://github.com/messente/messente-phonebook-php.git"
    }
  ],
  "require": {
    "messente/messente-phonebook-php": "*@master"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Messente\Phonebook\Configuration::getDefaultConfiguration()
    ->setUsername('YOUR_MESSENTE_API_USERNAME')
    ->setPassword('YOUR_MESSENTE_API_PASSWORD');

$apiInstance = new Messente\Phonebook\Api\BlacklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $response = $apiInstance->fetchBlacklist();
    echo $response;
} catch (Exception $e) {
    echo 'Exception when calling fetchBlacklist: ', $e->getMessage(), PHP_EOL;
}

// try {
//     $apiInstance->addToBlacklist(['phoneNumber' => '+37255555555']);
// } catch (Exception $e) {
//     echo 'Exception when calling addToBlacklist: ', $e->getMessage(), PHP_EOL;
// }

// try {
//     $apiInstance->removeFromBlacklist('+37255555555');
// } catch (Exception $e) {
//     echo 'Exception when calling removeFromBlacklist: ', $e->getMessage(), PHP_EOL;
// }
```

## Documentation for API Endpoints

All URIs are relative to *https://api.messente.com/v1*

Class | Method | HTTP request |
------------ | ------------- | ------------- |
*BlacklistApi* | [**addToBlacklist**](docs/Api/BlacklistApi.md#addtoblacklist) | **POST** /phonebook/blacklist |
*BlacklistApi* | [**fetchBlacklist**](docs/Api/BlacklistApi.md#fetchblacklist) | **GET** /phonebook/blacklist |
*BlacklistApi* | [**removeFromBlacklist**](docs/Api/BlacklistApi.md#removefromblacklist) | **DELETE** /phonebook/blacklist/{phone_number} |


## Documentation For Models

 - [ErrorItem](docs/Model/ErrorItem.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [FetchBlacklistSuccess](docs/Model/FetchBlacklistSuccess.md)
 - [NumberToBlacklist](docs/Model/NumberToBlacklist.md)
 - [ResponseErrorCode](docs/Model/ResponseErrorCode.md)
 - [ResponseErrorTitle](docs/Model/ResponseErrorTitle.md)


## Documentation For Authorization


## basicAuth

- **Type**: HTTP basic authentication


## Author

messente@messente.com
