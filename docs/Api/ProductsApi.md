# ProgressionLive\ProductsApi

All URIs are relative to *https://support.progressionlive.com/server/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productCreatePost**](ProductsApi.md#productcreatepost) | **POST** /product/create | Create a product.
[**productIdentifierGet**](ProductsApi.md#productidentifierget) | **GET** /product/{identifier} | Get a product.
[**productIdentifierImageGet**](ProductsApi.md#productidentifierimageget) | **GET** /product/{identifier}/image | 
[**productIdentifierImagePost**](ProductsApi.md#productidentifierimagepost) | **POST** /product/{identifier}/image | 
[**productIdentifierRemoveDelete**](ProductsApi.md#productidentifierremovedelete) | **DELETE** /product/{identifier}/remove | 
[**productIdentifierRestorePost**](ProductsApi.md#productidentifierrestorepost) | **POST** /product/{identifier}/restore | Restore a previously removed (/remove) product.
[**productIdentifierUpdatePost**](ProductsApi.md#productidentifierupdatepost) | **POST** /product/{identifier}/update | Update a product. Only provided fields will be updated.
[**productListGet**](ProductsApi.md#productlistget) | **GET** /product/list | Search for products.

# **productCreatePost**
> \ProgressionLive\Model\EntityRef productCreatePost($body)

Create a product.

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

$apiInstance = new ProgressionLive\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProgressionLive\Model\Product(); // \ProgressionLive\Model\Product | Product

try {
    $result = $apiInstance->productCreatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProgressionLive\Model\Product**](../Model/Product.md)| Product |

### Return type

[**\ProgressionLive\Model\EntityRef**](../Model/EntityRef.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productIdentifierGet**
> \ProgressionLive\Model\Product productIdentifierGet($identifier)

Get a product.

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

$apiInstance = new ProgressionLive\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Product's identifier. One of id, uid, externalId, code or label (unique).

try {
    $result = $apiInstance->productIdentifierGet($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productIdentifierGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Product&#x27;s identifier. One of id, uid, externalId, code or label (unique). |

### Return type

[**\ProgressionLive\Model\Product**](../Model/Product.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productIdentifierImageGet**
> \ProgressionLive\Model\FileData productIdentifierImageGet($identifier, $format)



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

$apiInstance = new ProgressionLive\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Product's identifier. One of id, uid, externalId, code or label (unique).
$format = "format_example"; // string | Response format. json (default) or raw.

try {
    $result = $apiInstance->productIdentifierImageGet($identifier, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productIdentifierImageGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Product&#x27;s identifier. One of id, uid, externalId, code or label (unique). |
 **format** | **string**| Response format. json (default) or raw. | [optional]

### Return type

[**\ProgressionLive\Model\FileData**](../Model/FileData.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productIdentifierImagePost**
> \ProgressionLive\Model\EntityRef productIdentifierImagePost($body, $identifier)



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

$apiInstance = new ProgressionLive\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProgressionLive\Model\FileData(); // \ProgressionLive\Model\FileData | Image to set on the product.
$identifier = "identifier_example"; // string | Product's identifier. One of id, uid, externalId, code or label (unique).

try {
    $result = $apiInstance->productIdentifierImagePost($body, $identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productIdentifierImagePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProgressionLive\Model\FileData**](../Model/FileData.md)| Image to set on the product. |
 **identifier** | **string**| Product&#x27;s identifier. One of id, uid, externalId, code or label (unique). |

### Return type

[**\ProgressionLive\Model\EntityRef**](../Model/EntityRef.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productIdentifierRemoveDelete**
> productIdentifierRemoveDelete($identifier)



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

$apiInstance = new ProgressionLive\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Product's identifier. One of id, uid, externalId, code or label (unique).

try {
    $apiInstance->productIdentifierRemoveDelete($identifier);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productIdentifierRemoveDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Product&#x27;s identifier. One of id, uid, externalId, code or label (unique). |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productIdentifierRestorePost**
> productIdentifierRestorePost($identifier)

Restore a previously removed (/remove) product.

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

$apiInstance = new ProgressionLive\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Product's identifier. One of id, uid, externalId, code or label (unique).

try {
    $apiInstance->productIdentifierRestorePost($identifier);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productIdentifierRestorePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Product&#x27;s identifier. One of id, uid, externalId, code or label (unique). |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productIdentifierUpdatePost**
> productIdentifierUpdatePost($body, $identifier)

Update a product. Only provided fields will be updated.

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

$apiInstance = new ProgressionLive\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProgressionLive\Model\Product(); // \ProgressionLive\Model\Product | Product
$identifier = "identifier_example"; // string | Product's identifier. One of id, uid, externalId, code or label (unique).

try {
    $apiInstance->productIdentifierUpdatePost($body, $identifier);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productIdentifierUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProgressionLive\Model\Product**](../Model/Product.md)| Product |
 **identifier** | **string**| Product&#x27;s identifier. One of id, uid, externalId, code or label (unique). |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productListGet**
> \ProgressionLive\Model\Product[] productListGet($maxResults, $startResult, $updated, $properties, $metas, $externalId, $label, $code, $type, $order, $productCategories, $tags, $removed)

Search for products.

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

$apiInstance = new ProgressionLive\Api\ProductsApi(
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
$label = "label_example"; // string | Filter by product label. This parameter does a LIKE search.
$code = "code_example"; // string | Filter by product code. This parameter does a LIKE search.
$type = "type_example"; // string | Filter by product type. This can be the name OR the label of the type.
$order = "order_example"; // string | Sort order of the results. It is possible to specify several sorts separated by commas as well as the sort direction.   e.g.: label DESC,updated ASC
$productCategories = "productCategories_example"; // string | Filter by product categories. This parameter does a IN search.
$tags = "tags_example"; // string | Filter by product tags. This parameter does a IN search.
$removed = true; // bool | Include removed products: true = removed only, false = all except those removed, nothing = all.

try {
    $result = $apiInstance->productListGet($maxResults, $startResult, $updated, $properties, $metas, $externalId, $label, $code, $type, $order, $productCategories, $tags, $removed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productListGet: ', $e->getMessage(), PHP_EOL;
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
 **label** | **string**| Filter by product label. This parameter does a LIKE search. | [optional]
 **code** | **string**| Filter by product code. This parameter does a LIKE search. | [optional]
 **type** | **string**| Filter by product type. This can be the name OR the label of the type. | [optional]
 **order** | **string**| Sort order of the results. It is possible to specify several sorts separated by commas as well as the sort direction.   e.g.: label DESC,updated ASC | [optional]
 **productCategories** | **string**| Filter by product categories. This parameter does a IN search. | [optional]
 **tags** | **string**| Filter by product tags. This parameter does a IN search. | [optional]
 **removed** | **bool**| Include removed products: true &#x3D; removed only, false &#x3D; all except those removed, nothing &#x3D; all. | [optional]

### Return type

[**\ProgressionLive\Model\Product[]**](../Model/Product.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

