# ProgressionLive\HumanResourcesApi

All URIs are relative to *https://support.progressionlive.com/server/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**hrCreatePost**](HumanResourcesApi.md#hrcreatepost) | **POST** /hr/create | Create a human resource.
[**hrIdentifierGet**](HumanResourcesApi.md#hridentifierget) | **GET** /hr/{identifier} | Get a human resource.
[**hrIdentifierImageGet**](HumanResourcesApi.md#hridentifierimageget) | **GET** /hr/{identifier}/image | 
[**hrIdentifierPositionPost**](HumanResourcesApi.md#hridentifierpositionpost) | **POST** /hr/{identifier}/position | Update a human resource position.
[**hrIdentifierRemoveDelete**](HumanResourcesApi.md#hridentifierremovedelete) | **DELETE** /hr/{identifier}/remove | 
[**hrIdentifierRestorePost**](HumanResourcesApi.md#hridentifierrestorepost) | **POST** /hr/{identifier}/restore | Restore a previously removed (/remove) human resource.
[**hrIdentifierUpdatePost**](HumanResourcesApi.md#hridentifierupdatepost) | **POST** /hr/{identifier}/update | Update a human resource. Only provided fields will be updated.
[**hrListGet**](HumanResourcesApi.md#hrlistget) | **GET** /hr/list | Search for human resources.

# **hrCreatePost**
> \ProgressionLive\Model\EntityRef hrCreatePost($body)

Create a human resource.

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

$apiInstance = new ProgressionLive\Api\HumanResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProgressionLive\Model\HumanResource(); // \ProgressionLive\Model\HumanResource | HumanResource

try {
    $result = $apiInstance->hrCreatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HumanResourcesApi->hrCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProgressionLive\Model\HumanResource**](../Model/HumanResource.md)| HumanResource |

### Return type

[**\ProgressionLive\Model\EntityRef**](../Model/EntityRef.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hrIdentifierGet**
> \ProgressionLive\Model\HumanResource hrIdentifierGet($identifier)

Get a human resource.

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

$apiInstance = new ProgressionLive\Api\HumanResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Human resource's identifier. One of id, uid, externalId or label (unique).

try {
    $result = $apiInstance->hrIdentifierGet($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HumanResourcesApi->hrIdentifierGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Human resource&#x27;s identifier. One of id, uid, externalId or label (unique). |

### Return type

[**\ProgressionLive\Model\HumanResource**](../Model/HumanResource.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hrIdentifierImageGet**
> \ProgressionLive\Model\FileData hrIdentifierImageGet($identifier, $format)



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

$apiInstance = new ProgressionLive\Api\HumanResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Human resource's identifier. One of id, uid or label (unique).
$format = "format_example"; // string | Response format. json (default) or raw.

try {
    $result = $apiInstance->hrIdentifierImageGet($identifier, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HumanResourcesApi->hrIdentifierImageGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Human resource&#x27;s identifier. One of id, uid or label (unique). |
 **format** | **string**| Response format. json (default) or raw. | [optional]

### Return type

[**\ProgressionLive\Model\FileData**](../Model/FileData.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hrIdentifierPositionPost**
> hrIdentifierPositionPost($body, $identifier)

Update a human resource position.

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

$apiInstance = new ProgressionLive\Api\HumanResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProgressionLive\Model\Position(); // \ProgressionLive\Model\Position | Position
$identifier = "identifier_example"; // string | Human resource's identifier. One of id, uid, externalId or label (unique).

try {
    $apiInstance->hrIdentifierPositionPost($body, $identifier);
} catch (Exception $e) {
    echo 'Exception when calling HumanResourcesApi->hrIdentifierPositionPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProgressionLive\Model\Position**](../Model/Position.md)| Position |
 **identifier** | **string**| Human resource&#x27;s identifier. One of id, uid, externalId or label (unique). |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hrIdentifierRemoveDelete**
> hrIdentifierRemoveDelete($identifier)



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

$apiInstance = new ProgressionLive\Api\HumanResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Human resource's identifier. One of id, uid, externalId or label (unique).

try {
    $apiInstance->hrIdentifierRemoveDelete($identifier);
} catch (Exception $e) {
    echo 'Exception when calling HumanResourcesApi->hrIdentifierRemoveDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Human resource&#x27;s identifier. One of id, uid, externalId or label (unique). |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hrIdentifierRestorePost**
> hrIdentifierRestorePost($identifier)

Restore a previously removed (/remove) human resource.

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

$apiInstance = new ProgressionLive\Api\HumanResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Human resource's identifier. One of id, uid, externalId or label (unique).

try {
    $apiInstance->hrIdentifierRestorePost($identifier);
} catch (Exception $e) {
    echo 'Exception when calling HumanResourcesApi->hrIdentifierRestorePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Human resource&#x27;s identifier. One of id, uid, externalId or label (unique). |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hrIdentifierUpdatePost**
> hrIdentifierUpdatePost($body, $identifier)

Update a human resource. Only provided fields will be updated.

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

$apiInstance = new ProgressionLive\Api\HumanResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProgressionLive\Model\HumanResource(); // \ProgressionLive\Model\HumanResource | HumanResource
$identifier = "identifier_example"; // string | Human resource's identifier. One of id, uid, externalId or label (unique).

try {
    $apiInstance->hrIdentifierUpdatePost($body, $identifier);
} catch (Exception $e) {
    echo 'Exception when calling HumanResourcesApi->hrIdentifierUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProgressionLive\Model\HumanResource**](../Model/HumanResource.md)| HumanResource |
 **identifier** | **string**| Human resource&#x27;s identifier. One of id, uid, externalId or label (unique). |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hrListGet**
> \ProgressionLive\Model\HumanResource[] hrListGet($maxResults, $startResult, $updated, $properties, $metas, $externalId, $label, $type, $order, $removed)

Search for human resources.

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

$apiInstance = new ProgressionLive\Api\HumanResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$maxResults = 56; // int | Maximum number of results to return. The default maximum number is 500 and cannot be exceeded.
$startResult = 56; // int | Buffer data range to ignore before fetching the data. In combination with the maxResults, implements a pagination logic.  Example : 1000 results to fetch StartResult = 0, MaxResult = 500 (results = 1 à 500) StartResult = 500, MaxResult = 500 (results = 501 à 1000)
$updated = "updated_example"; // string | Filter by last updated timestamp.   You can specify a more recent or identical date or a period.   e.g.: updated=2018-01-25T13:00:00-05, updated=2018-01-25T13:00:00-05,2018-01-25T17:00:00-05
$properties = "properties_example"; // string | Filter by custom fields. The syntax is: properties=name:value[:operator].   The parameter can be specified multiple times to search multiple fields at once. The operator 'equal' is used as default, but it is possible to change it by precising [:operator], which can take one of these values:  Not equal -> 'ne';   Lower than -> 'lt';  Lower or equal than -> 'le';  Greater than -> 'gt';  Greater or equal than -> 'ge';  Contains sample (frame sample by %..%) -> 'like';  Does not contain sample (frame sample by %..%) -> 'nlike'.
$metas = "metas_example"; // string | Filter by metafields. The syntax is: metas=name:value.   The parameter can be specified multiple times to search multiple metas at once.
$externalId = "externalId_example"; // string | Filter by externalId. This field is unique so you will never get more than one result.
$label = "label_example"; // string | Filter by human resource label. This parameter does a LIKE search.
$type = "type_example"; // string | Filter by human resource type. This can be the name OR the label of the type.
$order = "order_example"; // string | Sort order of the results. It is possible to specify several sorts separated by commas as well as the sort direction.   e.g.: label DESC,updated ASC
$removed = true; // bool | Include removed human resources: true = removed only, false = all except those removed, nothing = all.

try {
    $result = $apiInstance->hrListGet($maxResults, $startResult, $updated, $properties, $metas, $externalId, $label, $type, $order, $removed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HumanResourcesApi->hrListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **maxResults** | **int**| Maximum number of results to return. The default maximum number is 500 and cannot be exceeded. | [optional]
 **startResult** | **int**| Buffer data range to ignore before fetching the data. In combination with the maxResults, implements a pagination logic.  Example : 1000 results to fetch StartResult &#x3D; 0, MaxResult &#x3D; 500 (results &#x3D; 1 à 500) StartResult &#x3D; 500, MaxResult &#x3D; 500 (results &#x3D; 501 à 1000) | [optional]
 **updated** | **string**| Filter by last updated timestamp.   You can specify a more recent or identical date or a period.   e.g.: updated&#x3D;2018-01-25T13:00:00-05, updated&#x3D;2018-01-25T13:00:00-05,2018-01-25T17:00:00-05 | [optional]
 **properties** | **string**| Filter by custom fields. The syntax is: properties&#x3D;name:value[:operator].   The parameter can be specified multiple times to search multiple fields at once. The operator &#x27;equal&#x27; is used as default, but it is possible to change it by precising [:operator], which can take one of these values:  Not equal -&gt; &#x27;ne&#x27;;   Lower than -&gt; &#x27;lt&#x27;;  Lower or equal than -&gt; &#x27;le&#x27;;  Greater than -&gt; &#x27;gt&#x27;;  Greater or equal than -&gt; &#x27;ge&#x27;;  Contains sample (frame sample by %..%) -&gt; &#x27;like&#x27;;  Does not contain sample (frame sample by %..%) -&gt; &#x27;nlike&#x27;. | [optional]
 **metas** | **string**| Filter by metafields. The syntax is: metas&#x3D;name:value.   The parameter can be specified multiple times to search multiple metas at once. | [optional]
 **externalId** | **string**| Filter by externalId. This field is unique so you will never get more than one result. | [optional]
 **label** | **string**| Filter by human resource label. This parameter does a LIKE search. | [optional]
 **type** | **string**| Filter by human resource type. This can be the name OR the label of the type. | [optional]
 **order** | **string**| Sort order of the results. It is possible to specify several sorts separated by commas as well as the sort direction.   e.g.: label DESC,updated ASC | [optional]
 **removed** | **bool**| Include removed human resources: true &#x3D; removed only, false &#x3D; all except those removed, nothing &#x3D; all. | [optional]

### Return type

[**\ProgressionLive\Model\HumanResource[]**](../Model/HumanResource.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

