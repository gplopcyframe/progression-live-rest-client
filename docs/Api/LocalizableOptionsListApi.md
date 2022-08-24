# ProgressionLive\LocalizableOptionsListApi

All URIs are relative to *https://support.progressionlive.com/server/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**localizablelistIdentifierGet**](LocalizableOptionsListApi.md#localizablelistidentifierget) | **GET** /localizablelist/{identifier} | Get a localizable options list.
[**localizablelistListGet**](LocalizableOptionsListApi.md#localizablelistlistget) | **GET** /localizablelist/list | Search for localizable options lists.

# **localizablelistIdentifierGet**
> \ProgressionLive\Model\LocalizableOptionsList localizablelistIdentifierGet($identifier)

Get a localizable options list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = ProgressionLive\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearer
    $config = ProgressionLive\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: query
$config = ProgressionLive\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProgressionLive\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new ProgressionLive\Api\LocalizableOptionsListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Localizable options list's identifier (id).

try {
    $result = $apiInstance->localizablelistIdentifierGet($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocalizableOptionsListApi->localizablelistIdentifierGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Localizable options list&#x27;s identifier (id). |

### Return type

[**\ProgressionLive\Model\LocalizableOptionsList**](../Model/LocalizableOptionsList.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **localizablelistListGet**
> \ProgressionLive\Model\LocalizableOptionsList[] localizablelistListGet($label)

Search for localizable options lists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = ProgressionLive\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearer
    $config = ProgressionLive\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: query
$config = ProgressionLive\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProgressionLive\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new ProgressionLive\Api\LocalizableOptionsListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$label = "label_example"; // string | Filter by localizable options list label. This parameter does a LIKE search.

try {
    $result = $apiInstance->localizablelistListGet($label);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocalizableOptionsListApi->localizablelistListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **label** | **string**| Filter by localizable options list label. This parameter does a LIKE search. | [optional]

### Return type

[**\ProgressionLive\Model\LocalizableOptionsList[]**](../Model/LocalizableOptionsList.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

