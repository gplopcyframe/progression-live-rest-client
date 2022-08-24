# ProgressionLive\PricelistsApi

All URIs are relative to *https://support.progressionlive.com/server/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pricelistCreatePost**](PricelistsApi.md#pricelistcreatepost) | **POST** /pricelist/create | Create a price list.
[**pricelistIdentifierGet**](PricelistsApi.md#pricelistidentifierget) | **GET** /pricelist/{identifier} | Get a price list.
[**pricelistIdentifierPriceListGet**](PricelistsApi.md#pricelistidentifierpricelistget) | **GET** /pricelist/{identifier}/price/list | Search for prices in a list.
[**pricelistIdentifierPriceUpdatePost**](PricelistsApi.md#pricelistidentifierpriceupdatepost) | **POST** /pricelist/{identifier}/price/update | Update prices in a list.
[**pricelistIdentifierRemoveDelete**](PricelistsApi.md#pricelistidentifierremovedelete) | **DELETE** /pricelist/{identifier}/remove | 
[**pricelistIdentifierUpdatePost**](PricelistsApi.md#pricelistidentifierupdatepost) | **POST** /pricelist/{identifier}/update | Update a price list. Only provided fields will be updated.
[**pricelistListGet**](PricelistsApi.md#pricelistlistget) | **GET** /pricelist/list | Search for price lists.
[**pricelistListIdentifierPriceProductIdentifierUpdatePost**](PricelistsApi.md#pricelistlistidentifierpriceproductidentifierupdatepost) | **POST** /pricelist/{listIdentifier}/price/{productIdentifier}/update | Update a price in a list.

# **pricelistCreatePost**
> \ProgressionLive\Model\EntityRef pricelistCreatePost($body)

Create a price list.

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

$apiInstance = new ProgressionLive\Api\PricelistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProgressionLive\Model\ProductPriceList(); // \ProgressionLive\Model\ProductPriceList | ProductPriceList

try {
    $result = $apiInstance->pricelistCreatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricelistsApi->pricelistCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProgressionLive\Model\ProductPriceList**](../Model/ProductPriceList.md)| ProductPriceList |

### Return type

[**\ProgressionLive\Model\EntityRef**](../Model/EntityRef.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pricelistIdentifierGet**
> \ProgressionLive\Model\ProductPriceList pricelistIdentifierGet($identifier)

Get a price list.

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

$apiInstance = new ProgressionLive\Api\PricelistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Price list's identifier.

try {
    $result = $apiInstance->pricelistIdentifierGet($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricelistsApi->pricelistIdentifierGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Price list&#x27;s identifier. |

### Return type

[**\ProgressionLive\Model\ProductPriceList**](../Model/ProductPriceList.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pricelistIdentifierPriceListGet**
> \ProgressionLive\Model\ProductPrice[] pricelistIdentifierPriceListGet($identifier, $maxResults, $startResult, $label, $order)

Search for prices in a list.

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

$apiInstance = new ProgressionLive\Api\PricelistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Price list's identifier.
$maxResults = 56; // int | Maximum number of results to return. The default maximum number is 500 and cannot be exceeded.
$startResult = 56; // int | Buffer data range to ignore before fetching the data. In combination with the maxResults, implements a pagination logic.  Example : 1000 results to fetch StartResult = 0, MaxResult = 500 (results = 1 à 500) StartResult = 500, MaxResult = 500 (results = 501 à 1000)
$label = "label_example"; // string | Filter by product label. This parameter does a LIKE search.
$order = "order_example"; // string | Sort order of the results. It is possible to specify several sorts separated by commas as well as the sort direction.   e.g.: label DESC,updated ASC

try {
    $result = $apiInstance->pricelistIdentifierPriceListGet($identifier, $maxResults, $startResult, $label, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricelistsApi->pricelistIdentifierPriceListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Price list&#x27;s identifier. |
 **maxResults** | **int**| Maximum number of results to return. The default maximum number is 500 and cannot be exceeded. | [optional]
 **startResult** | **int**| Buffer data range to ignore before fetching the data. In combination with the maxResults, implements a pagination logic.  Example : 1000 results to fetch StartResult &#x3D; 0, MaxResult &#x3D; 500 (results &#x3D; 1 à 500) StartResult &#x3D; 500, MaxResult &#x3D; 500 (results &#x3D; 501 à 1000) | [optional]
 **label** | **string**| Filter by product label. This parameter does a LIKE search. | [optional]
 **order** | **string**| Sort order of the results. It is possible to specify several sorts separated by commas as well as the sort direction.   e.g.: label DESC,updated ASC | [optional]

### Return type

[**\ProgressionLive\Model\ProductPrice[]**](../Model/ProductPrice.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pricelistIdentifierPriceUpdatePost**
> pricelistIdentifierPriceUpdatePost($body, $identifier)

Update prices in a list.

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

$apiInstance = new ProgressionLive\Api\PricelistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \ProgressionLive\Model\ProductPrice()); // \ProgressionLive\Model\ProductPrice[] | List
$identifier = "identifier_example"; // string | Price list's identifier.

try {
    $apiInstance->pricelistIdentifierPriceUpdatePost($body, $identifier);
} catch (Exception $e) {
    echo 'Exception when calling PricelistsApi->pricelistIdentifierPriceUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProgressionLive\Model\ProductPrice[]**](../Model/ProductPrice.md)| List |
 **identifier** | **string**| Price list&#x27;s identifier. |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pricelistIdentifierRemoveDelete**
> pricelistIdentifierRemoveDelete($identifier)



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

$apiInstance = new ProgressionLive\Api\PricelistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Price list's identifier. One of id, uid, externalId, code or label (unique).

try {
    $apiInstance->pricelistIdentifierRemoveDelete($identifier);
} catch (Exception $e) {
    echo 'Exception when calling PricelistsApi->pricelistIdentifierRemoveDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Price list&#x27;s identifier. One of id, uid, externalId, code or label (unique). |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pricelistIdentifierUpdatePost**
> pricelistIdentifierUpdatePost($body, $identifier)

Update a price list. Only provided fields will be updated.

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

$apiInstance = new ProgressionLive\Api\PricelistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProgressionLive\Model\ProductPriceList(); // \ProgressionLive\Model\ProductPriceList | ProductPriceList
$identifier = "identifier_example"; // string | Price list's identifier. One of id, uid, externalId, code or label (unique).

try {
    $apiInstance->pricelistIdentifierUpdatePost($body, $identifier);
} catch (Exception $e) {
    echo 'Exception when calling PricelistsApi->pricelistIdentifierUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProgressionLive\Model\ProductPriceList**](../Model/ProductPriceList.md)| ProductPriceList |
 **identifier** | **string**| Price list&#x27;s identifier. One of id, uid, externalId, code or label (unique). |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pricelistListGet**
> \ProgressionLive\Model\ProductPriceList[] pricelistListGet($maxResults, $startResult, $updated, $label, $order, $removed)

Search for price lists.

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

$apiInstance = new ProgressionLive\Api\PricelistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$maxResults = 56; // int | Maximum number of results to return. The default maximum number is 500 and cannot be exceeded.
$startResult = 56; // int | Buffer data range to ignore before fetching the data. In combination with the maxResults, implements a pagination logic.  Example : 1000 results to fetch StartResult = 0, MaxResult = 500 (results = 1 à 500) StartResult = 500, MaxResult = 500 (results = 501 à 1000)
$updated = "updated_example"; // string | Filter by last updated timestamp.   You can specify a more recent or identical date or a period.   e.g.: updated=2018-01-25T13:00:00-05, updated=2018-01-25T13:00:00-05,2018-01-25T17:00:00-05
$label = "label_example"; // string | Filter by price list label. This parameter does a LIKE search.
$order = "order_example"; // string | Sort order of the results. It is possible to specify several sorts separated by commas as well as the sort direction.   e.g.: label DESC,updated ASC
$removed = true; // bool | Include removed price lists: true = removed only, false = all except those removed, nothing = all.

try {
    $result = $apiInstance->pricelistListGet($maxResults, $startResult, $updated, $label, $order, $removed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricelistsApi->pricelistListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **maxResults** | **int**| Maximum number of results to return. The default maximum number is 500 and cannot be exceeded. | [optional]
 **startResult** | **int**| Buffer data range to ignore before fetching the data. In combination with the maxResults, implements a pagination logic.  Example : 1000 results to fetch StartResult &#x3D; 0, MaxResult &#x3D; 500 (results &#x3D; 1 à 500) StartResult &#x3D; 500, MaxResult &#x3D; 500 (results &#x3D; 501 à 1000) | [optional]
 **updated** | **string**| Filter by last updated timestamp.   You can specify a more recent or identical date or a period.   e.g.: updated&#x3D;2018-01-25T13:00:00-05, updated&#x3D;2018-01-25T13:00:00-05,2018-01-25T17:00:00-05 | [optional]
 **label** | **string**| Filter by price list label. This parameter does a LIKE search. | [optional]
 **order** | **string**| Sort order of the results. It is possible to specify several sorts separated by commas as well as the sort direction.   e.g.: label DESC,updated ASC | [optional]
 **removed** | **bool**| Include removed price lists: true &#x3D; removed only, false &#x3D; all except those removed, nothing &#x3D; all. | [optional]

### Return type

[**\ProgressionLive\Model\ProductPriceList[]**](../Model/ProductPriceList.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pricelistListIdentifierPriceProductIdentifierUpdatePost**
> pricelistListIdentifierPriceProductIdentifierUpdatePost($listIdentifier, $productIdentifier, $price)

Update a price in a list.

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

$apiInstance = new ProgressionLive\Api\PricelistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listIdentifier = "listIdentifier_example"; // string | Price list's identifier.
$productIdentifier = "productIdentifier_example"; // string | Product's identifier.
$price = 1.2; // float | Product's price. If null, product is removed from the list.

try {
    $apiInstance->pricelistListIdentifierPriceProductIdentifierUpdatePost($listIdentifier, $productIdentifier, $price);
} catch (Exception $e) {
    echo 'Exception when calling PricelistsApi->pricelistListIdentifierPriceProductIdentifierUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listIdentifier** | **string**| Price list&#x27;s identifier. |
 **productIdentifier** | **string**| Product&#x27;s identifier. |
 **price** | **float**| Product&#x27;s price. If null, product is removed from the list. | [optional]

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

