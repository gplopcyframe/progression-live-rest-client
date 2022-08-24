# ProgressionLive\DynasApi

All URIs are relative to *https://support.progressionlive.com/server/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dynaCreatePost**](DynasApi.md#dynacreatepost) | **POST** /dyna/create | Create a dynamic entity.
[**dynaIdentifierGet**](DynasApi.md#dynaidentifierget) | **GET** /dyna/{identifier} | Get a dynamic entity.
[**dynaIdentifierRemoveDelete**](DynasApi.md#dynaidentifierremovedelete) | **DELETE** /dyna/{identifier}/remove | 
[**dynaIdentifierUpdatePost**](DynasApi.md#dynaidentifierupdatepost) | **POST** /dyna/{identifier}/update | Update a dynamic entity. Only provided fields will be updated.
[**dynaListGet**](DynasApi.md#dynalistget) | **GET** /dyna/list | Search for dynamic entities.

# **dynaCreatePost**
> \ProgressionLive\Model\EntityRef dynaCreatePost($body)

Create a dynamic entity.

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

$apiInstance = new ProgressionLive\Api\DynasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProgressionLive\Model\Dyna(); // \ProgressionLive\Model\Dyna | Dyna

try {
    $result = $apiInstance->dynaCreatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynasApi->dynaCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProgressionLive\Model\Dyna**](../Model/Dyna.md)| Dyna |

### Return type

[**\ProgressionLive\Model\EntityRef**](../Model/EntityRef.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynaIdentifierGet**
> \ProgressionLive\Model\Dyna dynaIdentifierGet($identifier)

Get a dynamic entity.

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

$apiInstance = new ProgressionLive\Api\DynasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Dynamic entity's identifier. One of id, uid, externalId, code or label (unique).

try {
    $result = $apiInstance->dynaIdentifierGet($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynasApi->dynaIdentifierGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Dynamic entity&#x27;s identifier. One of id, uid, externalId, code or label (unique). |

### Return type

[**\ProgressionLive\Model\Dyna**](../Model/Dyna.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynaIdentifierRemoveDelete**
> dynaIdentifierRemoveDelete($identifier)



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

$apiInstance = new ProgressionLive\Api\DynasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Dynamic entity's identifier. One of id, uid, externalId, code or label (unique).

try {
    $apiInstance->dynaIdentifierRemoveDelete($identifier);
} catch (Exception $e) {
    echo 'Exception when calling DynasApi->dynaIdentifierRemoveDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Dynamic entity&#x27;s identifier. One of id, uid, externalId, code or label (unique). |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynaIdentifierUpdatePost**
> dynaIdentifierUpdatePost($body, $identifier)

Update a dynamic entity. Only provided fields will be updated.

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

$apiInstance = new ProgressionLive\Api\DynasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProgressionLive\Model\Dyna(); // \ProgressionLive\Model\Dyna | Dyna
$identifier = "identifier_example"; // string | Dynamic entity's identifier. One of id, uid, externalId, code or label (unique).

try {
    $apiInstance->dynaIdentifierUpdatePost($body, $identifier);
} catch (Exception $e) {
    echo 'Exception when calling DynasApi->dynaIdentifierUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProgressionLive\Model\Dyna**](../Model/Dyna.md)| Dyna |
 **identifier** | **string**| Dynamic entity&#x27;s identifier. One of id, uid, externalId, code or label (unique). |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynaListGet**
> \ProgressionLive\Model\Dyna[] dynaListGet($maxResults, $startResult, $updated, $properties, $metas, $externalId, $label, $type, $order, $tags)

Search for dynamic entities.

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

$apiInstance = new ProgressionLive\Api\DynasApi(
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
$label = "label_example"; // string | Filter by dynamic entity label. This parameter does a LIKE search.
$type = "type_example"; // string | Filter by dynamic entity type. This can be the name OR the label of the type.
$order = "order_example"; // string | Sort order of the results. It is possible to specify several sorts separated by commas as well as the sort direction.   e.g.: label DESC,updated ASC
$tags = "tags_example"; // string | Filter by dynamic entity tags. This parameter does a IN search.

try {
    $result = $apiInstance->dynaListGet($maxResults, $startResult, $updated, $properties, $metas, $externalId, $label, $type, $order, $tags);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynasApi->dynaListGet: ', $e->getMessage(), PHP_EOL;
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
 **label** | **string**| Filter by dynamic entity label. This parameter does a LIKE search. | [optional]
 **type** | **string**| Filter by dynamic entity type. This can be the name OR the label of the type. | [optional]
 **order** | **string**| Sort order of the results. It is possible to specify several sorts separated by commas as well as the sort direction.   e.g.: label DESC,updated ASC | [optional]
 **tags** | **string**| Filter by dynamic entity tags. This parameter does a IN search. | [optional]

### Return type

[**\ProgressionLive\Model\Dyna[]**](../Model/Dyna.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

