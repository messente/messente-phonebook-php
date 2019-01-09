# Messente\Phonebook\BlacklistApi

All URIs are relative to *https://api.messente.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addToBlacklist**](BlacklistApi.md#addToBlacklist) | **POST** /phonebook/blacklist | 
[**fetchBlacklist**](BlacklistApi.md#fetchBlacklist) | **GET** /phonebook/blacklist | 
[**isBlacklisted**](BlacklistApi.md#isBlacklisted) | **GET** /phonebook/blacklist/{phone_number} | 
[**removeFromBlacklist**](BlacklistApi.md#removeFromBlacklist) | **DELETE** /phonebook/blacklist/{phone_number} | 


# **addToBlacklist**
> addToBlacklist($numberToBlacklist)



Adds a phone number to the blacklist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Messente\Phonebook\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

$apiInstance = new Messente\Phonebook\Api\BlacklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$numberToBlacklist = new \Messente\Phonebook\Model\NumberToBlacklist(); // \Messente\Phonebook\Model\NumberToBlacklist | Phone number to be blacklisted

try {
    $apiInstance->addToBlacklist($numberToBlacklist);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistApi->addToBlacklist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **numberToBlacklist** | [**\Messente\Phonebook\Model\NumberToBlacklist**](../Model/NumberToBlacklist.md)| Phone number to be blacklisted |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchBlacklist**
> \Messente\Phonebook\Model\FetchBlacklistSuccess fetchBlacklist()



Returns all blacklisted phone numbers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Messente\Phonebook\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

$apiInstance = new Messente\Phonebook\Api\BlacklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->fetchBlacklist();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistApi->fetchBlacklist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Messente\Phonebook\Model\FetchBlacklistSuccess**](../Model/FetchBlacklistSuccess.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **isBlacklisted**
> isBlacklisted($phoneNumber)



Checks if a phone number is blacklisted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Messente\Phonebook\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

$apiInstance = new Messente\Phonebook\Api\BlacklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phoneNumber = 'phoneNumber_example'; // string | A phone number

try {
    $apiInstance->isBlacklisted($phoneNumber);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistApi->isBlacklisted: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phoneNumber** | **string**| A phone number |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeFromBlacklist**
> removeFromBlacklist($phoneNumber)



Removes a phone number from the blacklist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Messente\Phonebook\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

$apiInstance = new Messente\Phonebook\Api\BlacklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phoneNumber = 'phoneNumber_example'; // string | A phone number

try {
    $apiInstance->removeFromBlacklist($phoneNumber);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistApi->removeFromBlacklist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phoneNumber** | **string**| A phone number |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

