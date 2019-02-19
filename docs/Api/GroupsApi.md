# Messente\Phonebook\GroupsApi

All URIs are relative to *https://api.messente.com/v1/phonebook*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createGroup**](GroupsApi.md#createGroup) | **POST** /groups | 
[**deleteGroup**](GroupsApi.md#deleteGroup) | **DELETE** /groups/{groupId} | 
[**fetchGroup**](GroupsApi.md#fetchGroup) | **GET** /groups/{groupId} | 
[**fetchGroups**](GroupsApi.md#fetchGroups) | **GET** /groups | 
[**updateGroup**](GroupsApi.md#updateGroup) | **PUT** /groups/{groupId} | 


# **createGroup**
> \Messente\Phonebook\Model\GroupEnvelope createGroup($groupName)



Creates a new group with the provided name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Messente\Phonebook\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

$apiInstance = new Messente\Phonebook\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupName = new \Messente\Phonebook\Model\GroupName(); // \Messente\Phonebook\Model\GroupName | 

try {
    $result = $apiInstance->createGroup($groupName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->createGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupName** | [**\Messente\Phonebook\Model\GroupName**](../Model/GroupName.md)|  |

### Return type

[**\Messente\Phonebook\Model\GroupEnvelope**](../Model/GroupEnvelope.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGroup**
> deleteGroup($groupId)



Deletes a group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Messente\Phonebook\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

$apiInstance = new Messente\Phonebook\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 'groupId_example'; // string | String in uuid format.

try {
    $apiInstance->deleteGroup($groupId);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->deleteGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| String in uuid format. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchGroup**
> \Messente\Phonebook\Model\GroupEnvelope fetchGroup($groupId)



Lists a group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Messente\Phonebook\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

$apiInstance = new Messente\Phonebook\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 'groupId_example'; // string | String in uuid format.

try {
    $result = $apiInstance->fetchGroup($groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->fetchGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| String in uuid format. |

### Return type

[**\Messente\Phonebook\Model\GroupEnvelope**](../Model/GroupEnvelope.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchGroups**
> \Messente\Phonebook\Model\GroupListEnvelope fetchGroups()



Returns all groups.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Messente\Phonebook\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

$apiInstance = new Messente\Phonebook\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->fetchGroups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->fetchGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Messente\Phonebook\Model\GroupListEnvelope**](../Model/GroupListEnvelope.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGroup**
> \Messente\Phonebook\Model\GroupEnvelope updateGroup($groupId, $groupName)



Updates a group with the provided name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Messente\Phonebook\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

$apiInstance = new Messente\Phonebook\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 'groupId_example'; // string | String in uuid format.
$groupName = new \Messente\Phonebook\Model\GroupName(); // \Messente\Phonebook\Model\GroupName | 

try {
    $result = $apiInstance->updateGroup($groupId, $groupName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->updateGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| String in uuid format. |
 **groupName** | [**\Messente\Phonebook\Model\GroupName**](../Model/GroupName.md)|  |

### Return type

[**\Messente\Phonebook\Model\GroupEnvelope**](../Model/GroupEnvelope.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

