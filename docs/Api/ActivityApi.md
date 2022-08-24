# ProgressionLive\ActivityApi

All URIs are relative to *https://support.progressionlive.com/server/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activityCreatePost**](ActivityApi.md#activitycreatepost) | **POST** /activity/create | Create an activity.
[**activityIdentifierGet**](ActivityApi.md#activityidentifierget) | **GET** /activity/{identifier} | Get an activity.
[**activityIdentifierRemoveDelete**](ActivityApi.md#activityidentifierremovedelete) | **DELETE** /activity/{identifier}/remove | 
[**activityIdentifierRestorePost**](ActivityApi.md#activityidentifierrestorepost) | **POST** /activity/{identifier}/restore | Restore a previously removed (/remove) activity.
[**activityIdentifierUpdatePost**](ActivityApi.md#activityidentifierupdatepost) | **POST** /activity/{identifier}/update | Update an activity. Only provided fields will be updated.
[**activityListGet**](ActivityApi.md#activitylistget) | **GET** /activity/list | Search for activities.

# **activityCreatePost**
> \ProgressionLive\Model\EntityRef activityCreatePost($body)

Create an activity.

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

$apiInstance = new ProgressionLive\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProgressionLive\Model\Activity(); // \ProgressionLive\Model\Activity | Activity

try {
    $result = $apiInstance->activityCreatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->activityCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProgressionLive\Model\Activity**](../Model/Activity.md)| Activity |

### Return type

[**\ProgressionLive\Model\EntityRef**](../Model/EntityRef.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activityIdentifierGet**
> \ProgressionLive\Model\Activity activityIdentifierGet($identifier, $expand)

Get an activity.

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

$apiInstance = new ProgressionLive\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Activity's identifier. One of id, logicId or name.
$expand = "expand_example"; // string | 

try {
    $result = $apiInstance->activityIdentifierGet($identifier, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->activityIdentifierGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Activity&#x27;s identifier. One of id, logicId or name. |
 **expand** | **string**|  | [optional]

### Return type

[**\ProgressionLive\Model\Activity**](../Model/Activity.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activityIdentifierRemoveDelete**
> activityIdentifierRemoveDelete($identifier)



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

$apiInstance = new ProgressionLive\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Activity's identifier. One of id or uid.

try {
    $apiInstance->activityIdentifierRemoveDelete($identifier);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->activityIdentifierRemoveDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Activity&#x27;s identifier. One of id or uid. |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activityIdentifierRestorePost**
> activityIdentifierRestorePost($identifier)

Restore a previously removed (/remove) activity.

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

$apiInstance = new ProgressionLive\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Activity's identifier. One of id or uid.

try {
    $apiInstance->activityIdentifierRestorePost($identifier);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->activityIdentifierRestorePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Activity&#x27;s identifier. One of id or uid. |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activityIdentifierUpdatePost**
> activityIdentifierUpdatePost($body, $identifier)

Update an activity. Only provided fields will be updated.

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

$apiInstance = new ProgressionLive\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProgressionLive\Model\Activity(); // \ProgressionLive\Model\Activity | Activity
$identifier = "identifier_example"; // string | Activity's identifier. One of id or uid.

try {
    $apiInstance->activityIdentifierUpdatePost($body, $identifier);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->activityIdentifierUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProgressionLive\Model\Activity**](../Model/Activity.md)| Activity |
 **identifier** | **string**| Activity&#x27;s identifier. One of id or uid. |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activityListGet**
> \ProgressionLive\Model\Activity[] activityListGet($maxResults, $startResult, $billable, $product, $humanResource, $updated, $metas, $order, $removed)

Search for activities.

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

$apiInstance = new ProgressionLive\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$maxResults = 56; // int | Maximum number of results to return. The default maximum number is 500 and cannot be exceeded.
$startResult = 56; // int | Buffer data range to ignore before fetching the data. In combination with the maxResults, implements a pagination logic.  Example : 1000 results to fetch StartResult = 0, MaxResult = 500 (results = 1 à 500) StartResult = 500, MaxResult = 500 (results = 501 à 1000)
$billable = true; // bool | Filter billable activities.
$product = "product_example"; // string | Filter by activity product. The syntax is: product=[uid, id, label, code:]value.  For example, to search for a product by its uid we specify: product=uid:1234.  If the field is not specified we search by label by default.
$humanResource = "humanResource_example"; // string | Filter the available activities for specified hr. The syntax is: humanResource=[id, uid, label]:value.  For example, to search for a product by its uid we specify: humanResource=id:1234.  If the field is not specified we search by label by default.
$updated = "updated_example"; // string | Filter by last updated timestamp.   You can specify a more recent or identical date or a period.   e.g.: updated=2018-01-25T13:00:00-05, updated=2018-01-25T13:00:00-05,2018-01-25T17:00:00-05
$metas = "metas_example"; // string | Filter by  metafields. The syntax is: metas=name:value.   The parameter can be specified multiple times to search multiple metas at once.
$order = "order_example"; // string | Sort order of the results. It is possible to specify several sorts separated by commas as well as the sort direction.   e.g.: label DESC,updated ASC
$removed = true; // bool | Include removed activities: true = removed only, false = all except those removed, nothing = all.

try {
    $result = $apiInstance->activityListGet($maxResults, $startResult, $billable, $product, $humanResource, $updated, $metas, $order, $removed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->activityListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **maxResults** | **int**| Maximum number of results to return. The default maximum number is 500 and cannot be exceeded. | [optional]
 **startResult** | **int**| Buffer data range to ignore before fetching the data. In combination with the maxResults, implements a pagination logic.  Example : 1000 results to fetch StartResult &#x3D; 0, MaxResult &#x3D; 500 (results &#x3D; 1 à 500) StartResult &#x3D; 500, MaxResult &#x3D; 500 (results &#x3D; 501 à 1000) | [optional]
 **billable** | **bool**| Filter billable activities. | [optional]
 **product** | **string**| Filter by activity product. The syntax is: product&#x3D;[uid, id, label, code:]value.  For example, to search for a product by its uid we specify: product&#x3D;uid:1234.  If the field is not specified we search by label by default. | [optional]
 **humanResource** | **string**| Filter the available activities for specified hr. The syntax is: humanResource&#x3D;[id, uid, label]:value.  For example, to search for a product by its uid we specify: humanResource&#x3D;id:1234.  If the field is not specified we search by label by default. | [optional]
 **updated** | **string**| Filter by last updated timestamp.   You can specify a more recent or identical date or a period.   e.g.: updated&#x3D;2018-01-25T13:00:00-05, updated&#x3D;2018-01-25T13:00:00-05,2018-01-25T17:00:00-05 | [optional]
 **metas** | **string**| Filter by  metafields. The syntax is: metas&#x3D;name:value.   The parameter can be specified multiple times to search multiple metas at once. | [optional]
 **order** | **string**| Sort order of the results. It is possible to specify several sorts separated by commas as well as the sort direction.   e.g.: label DESC,updated ASC | [optional]
 **removed** | **bool**| Include removed activities: true &#x3D; removed only, false &#x3D; all except those removed, nothing &#x3D; all. | [optional]

### Return type

[**\ProgressionLive\Model\Activity[]**](../Model/Activity.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

