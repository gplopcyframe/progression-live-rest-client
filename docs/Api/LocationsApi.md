# ProgressionLive\LocationsApi

All URIs are relative to *https://support.progressionlive.com/server/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**locationCreatePost**](LocationsApi.md#locationcreatepost) | **POST** /location/create | Create a location.
[**locationIdentifierContactAddPost**](LocationsApi.md#locationidentifiercontactaddpost) | **POST** /location/{identifier}/contact/add | 
[**locationIdentifierContactListGet**](LocationsApi.md#locationidentifiercontactlistget) | **GET** /location/{identifier}/contact/list | 
[**locationIdentifierContactRemoveDelete**](LocationsApi.md#locationidentifiercontactremovedelete) | **DELETE** /location/{identifier}/contact/remove | 
[**locationIdentifierGet**](LocationsApi.md#locationidentifierget) | **GET** /location/{identifier} | Get a location.
[**locationIdentifierRemoveDelete**](LocationsApi.md#locationidentifierremovedelete) | **DELETE** /location/{identifier}/remove | 
[**locationIdentifierRestorePost**](LocationsApi.md#locationidentifierrestorepost) | **POST** /location/{identifier}/restore | Restore a previously removed (/remove) location.
[**locationIdentifierUpdatePost**](LocationsApi.md#locationidentifierupdatepost) | **POST** /location/{identifier}/update | Update a location. Only provided fields will be updated.
[**locationListGet**](LocationsApi.md#locationlistget) | **GET** /location/list | Search for locations.

# **locationCreatePost**
> \ProgressionLive\Model\EntityRef locationCreatePost($body)

Create a location.

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

$apiInstance = new ProgressionLive\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProgressionLive\Model\Location(); // \ProgressionLive\Model\Location | Location

try {
    $result = $apiInstance->locationCreatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProgressionLive\Model\Location**](../Model/Location.md)| Location |

### Return type

[**\ProgressionLive\Model\EntityRef**](../Model/EntityRef.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **locationIdentifierContactAddPost**
> locationIdentifierContactAddPost($body, $identifier)



Add a contact to a location.

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

$apiInstance = new ProgressionLive\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \ProgressionLive\Model\EntityRef()); // \ProgressionLive\Model\EntityRef[] | Contacts list
$identifier = "identifier_example"; // string | Location's identifier. One of id, uid, externalId or label (unique).

try {
    $apiInstance->locationIdentifierContactAddPost($body, $identifier);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationIdentifierContactAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProgressionLive\Model\EntityRef[]**](../Model/EntityRef.md)| Contacts list |
 **identifier** | **string**| Location&#x27;s identifier. One of id, uid, externalId or label (unique). |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **locationIdentifierContactListGet**
> \ProgressionLive\Model\EntityRef[] locationIdentifierContactListGet($identifier)



List a location's contacts.

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

$apiInstance = new ProgressionLive\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Location's identifier. One of id, uid, externalId or label (unique).

try {
    $result = $apiInstance->locationIdentifierContactListGet($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationIdentifierContactListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Location&#x27;s identifier. One of id, uid, externalId or label (unique). |

### Return type

[**\ProgressionLive\Model\EntityRef[]**](../Model/EntityRef.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **locationIdentifierContactRemoveDelete**
> locationIdentifierContactRemoveDelete($body, $identifier)



Remove a location's contacts.

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

$apiInstance = new ProgressionLive\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \ProgressionLive\Model\EntityRef()); // \ProgressionLive\Model\EntityRef[] | Contacts list
$identifier = "identifier_example"; // string | Location's identifier. One of id, uid, externalId or label (unique).

try {
    $apiInstance->locationIdentifierContactRemoveDelete($body, $identifier);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationIdentifierContactRemoveDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProgressionLive\Model\EntityRef[]**](../Model/EntityRef.md)| Contacts list |
 **identifier** | **string**| Location&#x27;s identifier. One of id, uid, externalId or label (unique). |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **locationIdentifierGet**
> \ProgressionLive\Model\Location locationIdentifierGet($identifier, $expand)

Get a location.

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

$apiInstance = new ProgressionLive\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Location's identifier. One of id, uid, externalId or label (unique).
$expand = "expand_example"; // string | 

try {
    $result = $apiInstance->locationIdentifierGet($identifier, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationIdentifierGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Location&#x27;s identifier. One of id, uid, externalId or label (unique). |
 **expand** | **string**|  | [optional]

### Return type

[**\ProgressionLive\Model\Location**](../Model/Location.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **locationIdentifierRemoveDelete**
> locationIdentifierRemoveDelete($identifier)



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

$apiInstance = new ProgressionLive\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Location's identifier. One of id, uid, externalId or label (unique).

try {
    $apiInstance->locationIdentifierRemoveDelete($identifier);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationIdentifierRemoveDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Location&#x27;s identifier. One of id, uid, externalId or label (unique). |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **locationIdentifierRestorePost**
> locationIdentifierRestorePost($identifier)

Restore a previously removed (/remove) location.

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

$apiInstance = new ProgressionLive\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Location's identifier. One of id, uid, externalId or label (unique).

try {
    $apiInstance->locationIdentifierRestorePost($identifier);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationIdentifierRestorePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Location&#x27;s identifier. One of id, uid, externalId or label (unique). |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **locationIdentifierUpdatePost**
> locationIdentifierUpdatePost($body, $identifier)

Update a location. Only provided fields will be updated.

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

$apiInstance = new ProgressionLive\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProgressionLive\Model\Location(); // \ProgressionLive\Model\Location | Location
$identifier = "identifier_example"; // string | Location's identifier. One of id, uid, externalId or label (unique).

try {
    $apiInstance->locationIdentifierUpdatePost($body, $identifier);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationIdentifierUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProgressionLive\Model\Location**](../Model/Location.md)| Location |
 **identifier** | **string**| Location&#x27;s identifier. One of id, uid, externalId or label (unique). |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **locationListGet**
> \ProgressionLive\Model\Location[] locationListGet($maxResults, $startResult, $updated, $properties, $metas, $externalId, $label, $searchInAddress, $client, $type, $order, $isSearchFuzzy, $expand, $removed, $identifiers)

Search for locations.

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

$apiInstance = new ProgressionLive\Api\LocationsApi(
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
$label = "label_example"; // string | Filter by location label. This parameter does a LIKE search.
$searchInAddress = true; // bool | Join address filter.  This parameter use the label parameter to do a LIKE search in every field of the address additionally to the label field.
$client = "client_example"; // string | Filter by client. It can be the identifier (number), the label (unique), or the udi.
$type = "type_example"; // string | Filter by location type. It can be the name OR the label of the type.
$order = "order_example"; // string | Sort order of the results. It is possible to specify several sorts separated by commas as well as the sort direction.   e.g.: label DESC,updated ASC
$isSearchFuzzy = true; // bool | Enable or disable wildcard search on the node name. This parameter is disabled by default
$expand = "expand_example"; // string | Fields to \"expand\". Allows to fetch all related entity data instead of only ID and label.   e.g.: client
$removed = true; // bool | Include removed locations: true = removed only, false = all except those removed, nothing = all.
$identifiers = "identifiers_example"; // string | Filter by locations identifier. One of id or uid

try {
    $result = $apiInstance->locationListGet($maxResults, $startResult, $updated, $properties, $metas, $externalId, $label, $searchInAddress, $client, $type, $order, $isSearchFuzzy, $expand, $removed, $identifiers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationListGet: ', $e->getMessage(), PHP_EOL;
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
 **label** | **string**| Filter by location label. This parameter does a LIKE search. | [optional]
 **searchInAddress** | **bool**| Join address filter.  This parameter use the label parameter to do a LIKE search in every field of the address additionally to the label field. | [optional]
 **client** | **string**| Filter by client. It can be the identifier (number), the label (unique), or the udi. | [optional]
 **type** | **string**| Filter by location type. It can be the name OR the label of the type. | [optional]
 **order** | **string**| Sort order of the results. It is possible to specify several sorts separated by commas as well as the sort direction.   e.g.: label DESC,updated ASC | [optional]
 **isSearchFuzzy** | **bool**| Enable or disable wildcard search on the node name. This parameter is disabled by default | [optional]
 **expand** | **string**| Fields to \&quot;expand\&quot;. Allows to fetch all related entity data instead of only ID and label.   e.g.: client | [optional]
 **removed** | **bool**| Include removed locations: true &#x3D; removed only, false &#x3D; all except those removed, nothing &#x3D; all. | [optional]
 **identifiers** | **string**| Filter by locations identifier. One of id or uid | [optional]

### Return type

[**\ProgressionLive\Model\Location[]**](../Model/Location.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

