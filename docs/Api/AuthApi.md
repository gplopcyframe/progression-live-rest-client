# ProgressionLive\AuthApi

All URIs are relative to *https://support.progressionlive.com/server/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authKeyGet**](AuthApi.md#authkeyget) | **GET** /auth/key | 
[**authOtpGet**](AuthApi.md#authotpget) | **GET** /auth/otp | 
[**authProfileGet**](AuthApi.md#authprofileget) | **GET** /auth/profile | 

# **authKeyGet**
> map[string,string] authKeyGet($username, $password)



Returns the API key of the provided user and password. A key will be created if not present. This operation can be called without an API key.

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

$apiInstance = new ProgressionLive\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = "username_example"; // string | 
$password = "password_example"; // string | 

try {
    $result = $apiInstance->authKeyGet($username, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authKeyGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**|  | [optional]
 **password** | **string**|  | [optional]

### Return type

**map[string,string]**

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authOtpGet**
> map[string,string] authOtpGet($identifier, $otp)



Returns the API key of the provided one time password authentication.  A key will be created if not present. This operation can be called without an API key.

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

$apiInstance = new ProgressionLive\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | 
$otp = "otp_example"; // string | 

try {
    $result = $apiInstance->authOtpGet($identifier, $otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authOtpGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**|  | [optional]
 **otp** | **string**|  | [optional]

### Return type

**map[string,string]**

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authProfileGet**
> \ProgressionLive\Model\Profile authProfileGet($expand)



Get current user profile informations. (Related to provided API key)

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

$apiInstance = new ProgressionLive\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$expand = "expand_example"; // string | Fields to \"expand\". Allows to fetch all related entity data instead of only ID and label.   e.g.: cie

try {
    $result = $apiInstance->authProfileGet($expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authProfileGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expand** | **string**| Fields to \&quot;expand\&quot;. Allows to fetch all related entity data instead of only ID and label.   e.g.: cie | [optional]

### Return type

[**\ProgressionLive\Model\Profile**](../Model/Profile.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

