# Messente\Phonebook\ContactsApi

All URIs are relative to *https://api.messente.com/v1/phonebook*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addContactToGroup**](ContactsApi.md#addContactToGroup) | **POST** /groups/{groupId}/contacts/{phone} | 
[**createContact**](ContactsApi.md#createContact) | **POST** /contacts | 
[**deleteContact**](ContactsApi.md#deleteContact) | **DELETE** /contacts/{phone} | 
[**fetchContact**](ContactsApi.md#fetchContact) | **GET** /contacts/{phone} | 
[**fetchContactGroups**](ContactsApi.md#fetchContactGroups) | **GET** /contacts/{phone}/groups | 
[**fetchContacts**](ContactsApi.md#fetchContacts) | **GET** /contacts | 
[**removeContactFromGroup**](ContactsApi.md#removeContactFromGroup) | **DELETE** /groups/{groupId}/contacts/{phone} | 
[**updateContact**](ContactsApi.md#updateContact) | **PATCH** /contacts/{phone} | 


# **addContactToGroup**
> \Messente\Phonebook\Model\EmptyObject addContactToGroup($groupId, $phone)



Adds a contact to a group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Messente\Phonebook\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

$apiInstance = new Messente\Phonebook\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 'groupId_example'; // string | String in uuid format.
$phone = 'phone_example'; // string | A phone number

try {
    $result = $apiInstance->addContactToGroup($groupId, $phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->addContactToGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| String in uuid format. |
 **phone** | **string**| A phone number |

### Return type

[**\Messente\Phonebook\Model\EmptyObject**](../Model/EmptyObject.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createContact**
> \Messente\Phonebook\Model\ContactEnvelope createContact($contactFields)



Creates a new contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Messente\Phonebook\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

$apiInstance = new Messente\Phonebook\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactFields = new \Messente\Phonebook\Model\ContactFields(); // \Messente\Phonebook\Model\ContactFields | 

try {
    $result = $apiInstance->createContact($contactFields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->createContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactFields** | [**\Messente\Phonebook\Model\ContactFields**](../Model/ContactFields.md)|  |

### Return type

[**\Messente\Phonebook\Model\ContactEnvelope**](../Model/ContactEnvelope.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContact**
> deleteContact($phone)



Deletes a contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Messente\Phonebook\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

$apiInstance = new Messente\Phonebook\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = 'phone_example'; // string | A phone number

try {
    $apiInstance->deleteContact($phone);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone** | **string**| A phone number |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchContact**
> \Messente\Phonebook\Model\ContactEnvelope fetchContact($phone)



Lists a contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Messente\Phonebook\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

$apiInstance = new Messente\Phonebook\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = 'phone_example'; // string | A phone number

try {
    $result = $apiInstance->fetchContact($phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->fetchContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone** | **string**| A phone number |

### Return type

[**\Messente\Phonebook\Model\ContactEnvelope**](../Model/ContactEnvelope.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchContactGroups**
> \Messente\Phonebook\Model\GroupListEnvelope fetchContactGroups($phone)



Lists groups of a contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Messente\Phonebook\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

$apiInstance = new Messente\Phonebook\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = 'phone_example'; // string | A phone number

try {
    $result = $apiInstance->fetchContactGroups($phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->fetchContactGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone** | **string**| A phone number |

### Return type

[**\Messente\Phonebook\Model\GroupListEnvelope**](../Model/GroupListEnvelope.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchContacts**
> \Messente\Phonebook\Model\ContactListEnvelope fetchContacts($groupIds)



Returns all contacts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Messente\Phonebook\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

$apiInstance = new Messente\Phonebook\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupIds = array('groupIds_example'); // string[] | Group id string in uuid format.

try {
    $result = $apiInstance->fetchContacts($groupIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->fetchContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupIds** | [**string[]**](../Model/string.md)| Group id string in uuid format. | [optional]

### Return type

[**\Messente\Phonebook\Model\ContactListEnvelope**](../Model/ContactListEnvelope.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeContactFromGroup**
> removeContactFromGroup($groupId, $phone)



Remove a contact from a group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Messente\Phonebook\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

$apiInstance = new Messente\Phonebook\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 'groupId_example'; // string | String in uuid format.
$phone = 'phone_example'; // string | A phone number

try {
    $apiInstance->removeContactFromGroup($groupId, $phone);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->removeContactFromGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| String in uuid format. |
 **phone** | **string**| A phone number |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContact**
> \Messente\Phonebook\Model\ContactEnvelope updateContact($phone, $contactUpdateFields)



Updates a contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Messente\Phonebook\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

$apiInstance = new Messente\Phonebook\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = 'phone_example'; // string | A phone number
$contactUpdateFields = new \Messente\Phonebook\Model\ContactUpdateFields(); // \Messente\Phonebook\Model\ContactUpdateFields | 

try {
    $result = $apiInstance->updateContact($phone, $contactUpdateFields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->updateContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone** | **string**| A phone number |
 **contactUpdateFields** | [**\Messente\Phonebook\Model\ContactUpdateFields**](../Model/ContactUpdateFields.md)|  |

### Return type

[**\Messente\Phonebook\Model\ContactEnvelope**](../Model/ContactEnvelope.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

