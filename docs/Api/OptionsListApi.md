# ProgressionLive\OptionsListApi

All URIs are relative to *https://support.progressionlive.com/server/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**optionslistIdentifierGet**](OptionsListApi.md#optionslistidentifierget) | **GET** /optionslist/{identifier} | Get an options list.
[**optionslistListGet**](OptionsListApi.md#optionslistlistget) | **GET** /optionslist/list | Search for options lists.

# **optionslistIdentifierGet**
> \ProgressionLive\Model\OptionsList optionslistIdentifierGet($identifier)

Get an options list.

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

$apiInstance = new ProgressionLive\Api\OptionsListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Options list's identifier (id).

try {
    $result = $apiInstance->optionslistIdentifierGet($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionsListApi->optionslistIdentifierGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Options list&#x27;s identifier (id). |

### Return type

[**\ProgressionLive\Model\OptionsList**](../Model/OptionsList.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **optionslistListGet**
> \ProgressionLive\Model\OptionsList[] optionslistListGet($label)

Search for options lists.

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

$apiInstance = new ProgressionLive\Api\OptionsListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$label = "label_example"; // string | Filter by options list label. This parameter does a LIKE search.

try {
    $result = $apiInstance->optionslistListGet($label);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionsListApi->optionslistListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **label** | **string**| Filter by options list label. This parameter does a LIKE search. | [optional]

### Return type

[**\ProgressionLive\Model\OptionsList[]**](../Model/OptionsList.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

