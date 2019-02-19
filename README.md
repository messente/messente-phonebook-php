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
use Messente\Phonebook\Configuration;
use Messente\Phonebook\Api\BlacklistApi;
use GuzzleHttp\Client;

// Configure HTTP basic authorization: basicAuth
$config = Configuration::getDefaultConfiguration()
    ->setUsername('YOUR_MESSENTE_API_USERNAME')
    ->setPassword('YOUR_MESSENTE_API_PASSWORD');

$apiInstance = new BlacklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Client(),
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
//     $apiInstance->isBlacklisted('+37255555555');
// } catch (Exception $e) {
//     echo 'Exception when calling isBlacklisted: ', $e->getMessage(), PHP_EOL;
// }


// try {
//     $apiInstance->removeFromBlacklist('+37255555555');
// } catch (Exception $e) {
//     echo 'Exception when calling removeFromBlacklist: ', $e->getMessage(), PHP_EOL;
// }
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.messente.com/v1/phonebook*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BlacklistApi* | [**addToBlacklist**](docs/Api/BlacklistApi.md#addtoblacklist) | **POST** /blacklist | 
*BlacklistApi* | [**fetchBlacklist**](docs/Api/BlacklistApi.md#fetchblacklist) | **GET** /blacklist | 
*BlacklistApi* | [**isBlacklisted**](docs/Api/BlacklistApi.md#isblacklisted) | **GET** /blacklist/{phone} | 
*BlacklistApi* | [**removeFromBlacklist**](docs/Api/BlacklistApi.md#removefromblacklist) | **DELETE** /blacklist/{phone} | 
*ContactsApi* | [**addContactToGroup**](docs/Api/ContactsApi.md#addcontacttogroup) | **POST** /groups/{groupId}/contacts/{phone} | 
*ContactsApi* | [**createContact**](docs/Api/ContactsApi.md#createcontact) | **POST** /contacts | 
*ContactsApi* | [**deleteContact**](docs/Api/ContactsApi.md#deletecontact) | **DELETE** /contacts/{phone} | 
*ContactsApi* | [**fetchContact**](docs/Api/ContactsApi.md#fetchcontact) | **GET** /contacts/{phone} | 
*ContactsApi* | [**fetchContactGroups**](docs/Api/ContactsApi.md#fetchcontactgroups) | **GET** /contacts/{phone}/groups | 
*ContactsApi* | [**fetchContacts**](docs/Api/ContactsApi.md#fetchcontacts) | **GET** /contacts | 
*ContactsApi* | [**removeContactFromGroup**](docs/Api/ContactsApi.md#removecontactfromgroup) | **DELETE** /groups/{groupId}/contacts/{phone} | 
*ContactsApi* | [**updateContact**](docs/Api/ContactsApi.md#updatecontact) | **PATCH** /contacts/{phone} | 
*GroupsApi* | [**createGroup**](docs/Api/GroupsApi.md#creategroup) | **POST** /groups | 
*GroupsApi* | [**deleteGroup**](docs/Api/GroupsApi.md#deletegroup) | **DELETE** /groups/{groupId} | 
*GroupsApi* | [**fetchGroup**](docs/Api/GroupsApi.md#fetchgroup) | **GET** /groups/{groupId} | 
*GroupsApi* | [**fetchGroups**](docs/Api/GroupsApi.md#fetchgroups) | **GET** /groups | 
*GroupsApi* | [**updateGroup**](docs/Api/GroupsApi.md#updategroup) | **PUT** /groups/{groupId} | 


## Documentation For Models

 - [ContactEnvelope](docs/Model/ContactEnvelope.md)
 - [ContactFields](docs/Model/ContactFields.md)
 - [ContactListEnvelope](docs/Model/ContactListEnvelope.md)
 - [ContactUpdateFields](docs/Model/ContactUpdateFields.md)
 - [EmptyObject](docs/Model/EmptyObject.md)
 - [ErrorItem](docs/Model/ErrorItem.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [FetchBlacklistSuccess](docs/Model/FetchBlacklistSuccess.md)
 - [GroupEnvelope](docs/Model/GroupEnvelope.md)
 - [GroupListEnvelope](docs/Model/GroupListEnvelope.md)
 - [GroupName](docs/Model/GroupName.md)
 - [GroupResponseFields](docs/Model/GroupResponseFields.md)
 - [NumberToBlacklist](docs/Model/NumberToBlacklist.md)
 - [ResponseErrorCode](docs/Model/ResponseErrorCode.md)
 - [ResponseErrorTitle](docs/Model/ResponseErrorTitle.md)


## Documentation For Authorization


## basicAuth

- **Type**: HTTP basic authentication


## Author

messente@messente.com
