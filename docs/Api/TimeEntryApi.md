# ProgressionLive\TimeEntryApi

All URIs are relative to *https://support.progressionlive.com/server/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**timeEntryCreatePost**](TimeEntryApi.md#timeentrycreatepost) | **POST** /timeEntry/create | Create a time entry.
[**timeEntryIdentifierGet**](TimeEntryApi.md#timeentryidentifierget) | **GET** /timeEntry/{identifier} | Get a time entry.
[**timeEntryIdentifierRemoveDelete**](TimeEntryApi.md#timeentryidentifierremovedelete) | **DELETE** /timeEntry/{identifier}/remove | 
[**timeEntryIdentifierUnapprovePost**](TimeEntryApi.md#timeentryidentifierunapprovepost) | **POST** /timeEntry/{identifier}/unapprove | Reject approval of a time entry.
[**timeEntryIdentifierUpdatePost**](TimeEntryApi.md#timeentryidentifierupdatepost) | **POST** /timeEntry/{identifier}/update | Update a time entry. Only provided fields will be updated.
[**timeEntryListGet**](TimeEntryApi.md#timeentrylistget) | **GET** /timeEntry/list | Search for time entries.
[**timeEntryUnapprovePost**](TimeEntryApi.md#timeentryunapprovepost) | **POST** /timeEntry/unapprove | Reject approval of multiple time entries.

# **timeEntryCreatePost**
> \ProgressionLive\Model\EntityRef timeEntryCreatePost($body)

Create a time entry.

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

$apiInstance = new ProgressionLive\Api\TimeEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProgressionLive\Model\TimeEntry(); // \ProgressionLive\Model\TimeEntry | TimeEntry

try {
    $result = $apiInstance->timeEntryCreatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeEntryApi->timeEntryCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProgressionLive\Model\TimeEntry**](../Model/TimeEntry.md)| TimeEntry |

### Return type

[**\ProgressionLive\Model\EntityRef**](../Model/EntityRef.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timeEntryIdentifierGet**
> \ProgressionLive\Model\TimeEntry timeEntryIdentifierGet($identifier, $expand)

Get a time entry.

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

$apiInstance = new ProgressionLive\Api\TimeEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Time entry's identifier. One of id or uid.
$expand = "expand_example"; // string | 

try {
    $result = $apiInstance->timeEntryIdentifierGet($identifier, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeEntryApi->timeEntryIdentifierGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Time entry&#x27;s identifier. One of id or uid. |
 **expand** | **string**|  | [optional]

### Return type

[**\ProgressionLive\Model\TimeEntry**](../Model/TimeEntry.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timeEntryIdentifierRemoveDelete**
> timeEntryIdentifierRemoveDelete($identifier)



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

$apiInstance = new ProgressionLive\Api\TimeEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Time entry's identifier. One of id or uid.

try {
    $apiInstance->timeEntryIdentifierRemoveDelete($identifier);
} catch (Exception $e) {
    echo 'Exception when calling TimeEntryApi->timeEntryIdentifierRemoveDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Time entry&#x27;s identifier. One of id or uid. |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timeEntryIdentifierUnapprovePost**
> \ProgressionLive\Model\Result timeEntryIdentifierUnapprovePost($identifier)

Reject approval of a time entry.

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

$apiInstance = new ProgressionLive\Api\TimeEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Time entry's identifier. Either the id or uid.

try {
    $result = $apiInstance->timeEntryIdentifierUnapprovePost($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeEntryApi->timeEntryIdentifierUnapprovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Time entry&#x27;s identifier. Either the id or uid. |

### Return type

[**\ProgressionLive\Model\Result**](../Model/Result.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timeEntryIdentifierUpdatePost**
> timeEntryIdentifierUpdatePost($body, $identifier)

Update a time entry. Only provided fields will be updated.

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

$apiInstance = new ProgressionLive\Api\TimeEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProgressionLive\Model\TimeEntry(); // \ProgressionLive\Model\TimeEntry | TimeEntry
$identifier = "identifier_example"; // string | Time entry's identifier. One of id or uid.

try {
    $apiInstance->timeEntryIdentifierUpdatePost($body, $identifier);
} catch (Exception $e) {
    echo 'Exception when calling TimeEntryApi->timeEntryIdentifierUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProgressionLive\Model\TimeEntry**](../Model/TimeEntry.md)| TimeEntry |
 **identifier** | **string**| Time entry&#x27;s identifier. One of id or uid. |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timeEntryListGet**
> \ProgressionLive\Model\TimeEntry[] timeEntryListGet($maxResults, $startResult, $humanResource, $task, $activity, $client, $location, $start, $end, $updated, $metas, $order, $identifiers)

Search for time entries.

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

$apiInstance = new ProgressionLive\Api\TimeEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$maxResults = 56; // int | Maximum number of results to return. The default maximum number is 500 and cannot be exceeded.
$startResult = 56; // int | Buffer data range to ignore before fetching the data. In combination with the maxResults, implements a pagination logic.  Example : 1000 results to fetch StartResult = 0, MaxResult = 500 (results = 1 à 500) StartResult = 500, MaxResult = 500 (results = 501 à 1000)
$humanResource = "humanResource_example"; // string | Filter time entry human resource. The syntax is: humanResource=[uid, id, externalId, label:]value.  For example, to search for a human resource by its externalId we specify: humanResource=externalId:1234.  If the field is not specified we search by label by default.
$task = "task_example"; // string | Filter time entry task. The syntax is: task=[id, uid, externalId, code:]value.  For example, to search for a task by its code we specify: task=code:AS12345.
$activity = "activity_example"; // string | Filter time entry activity. The syntax is: activity=[uid, id, label:]value.  For example, to search for an activity by its uid we specify: activity=uid:1234.  If the field is not specified we search by label by default.
$client = "client_example"; // string | Filter time entry client. The syntax is: client=[uid, id, externalId, label:]value.  For example, to search for a client by its externalId we specify: client=externalId:1234.  If the field is not specified we search by label by default.
$location = "location_example"; // string | Filter time entry location. The syntax is: location=[uid, id, externalId, label:]value.  For example, to search for a location by its externalId we specify: location=externalId:1234.  If the field is not specified we search by label by default.
$start = "start_example"; // string | Filter by time entry start timestamp.   You can specify an identical date or a period.   e.g.: start=2018-01-25T13:00:00-05, start=2018-01-25T13:00:00-05,2018-01-25T17:00:00-05
$end = "end_example"; // string | Filter by time entry end timestamp.   You can specify an identical date or a period.   e.g.: end=2018-01-25T13:00:00-05, end=2018-01-25T13:00:00-05,2018-01-25T17:00:00-05
$updated = "updated_example"; // string | Filter by last updated timestamp.   You can specify any more recent or identical date or a period.   e.g.: updated=2018-01-25T13:00:00-05, updated=2018-01-25T13:00:00-05,2018-01-25T17:00:00-05
$metas = "metas_example"; // string | Filter by metafields. The syntax is: metas=name:value.   The parameter can be specified multiple times to search multiple metas at once.
$order = "order_example"; // string | Sort order of the results. It is possible to specify several sorts separated by commas as well as the sort direction.   e.g.: label DESC,updated ASC
$identifiers = "identifiers_example"; // string | Filter by time entries identifier. Either the id or uid

try {
    $result = $apiInstance->timeEntryListGet($maxResults, $startResult, $humanResource, $task, $activity, $client, $location, $start, $end, $updated, $metas, $order, $identifiers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeEntryApi->timeEntryListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **maxResults** | **int**| Maximum number of results to return. The default maximum number is 500 and cannot be exceeded. | [optional]
 **startResult** | **int**| Buffer data range to ignore before fetching the data. In combination with the maxResults, implements a pagination logic.  Example : 1000 results to fetch StartResult &#x3D; 0, MaxResult &#x3D; 500 (results &#x3D; 1 à 500) StartResult &#x3D; 500, MaxResult &#x3D; 500 (results &#x3D; 501 à 1000) | [optional]
 **humanResource** | **string**| Filter time entry human resource. The syntax is: humanResource&#x3D;[uid, id, externalId, label:]value.  For example, to search for a human resource by its externalId we specify: humanResource&#x3D;externalId:1234.  If the field is not specified we search by label by default. | [optional]
 **task** | **string**| Filter time entry task. The syntax is: task&#x3D;[id, uid, externalId, code:]value.  For example, to search for a task by its code we specify: task&#x3D;code:AS12345. | [optional]
 **activity** | **string**| Filter time entry activity. The syntax is: activity&#x3D;[uid, id, label:]value.  For example, to search for an activity by its uid we specify: activity&#x3D;uid:1234.  If the field is not specified we search by label by default. | [optional]
 **client** | **string**| Filter time entry client. The syntax is: client&#x3D;[uid, id, externalId, label:]value.  For example, to search for a client by its externalId we specify: client&#x3D;externalId:1234.  If the field is not specified we search by label by default. | [optional]
 **location** | **string**| Filter time entry location. The syntax is: location&#x3D;[uid, id, externalId, label:]value.  For example, to search for a location by its externalId we specify: location&#x3D;externalId:1234.  If the field is not specified we search by label by default. | [optional]
 **start** | **string**| Filter by time entry start timestamp.   You can specify an identical date or a period.   e.g.: start&#x3D;2018-01-25T13:00:00-05, start&#x3D;2018-01-25T13:00:00-05,2018-01-25T17:00:00-05 | [optional]
 **end** | **string**| Filter by time entry end timestamp.   You can specify an identical date or a period.   e.g.: end&#x3D;2018-01-25T13:00:00-05, end&#x3D;2018-01-25T13:00:00-05,2018-01-25T17:00:00-05 | [optional]
 **updated** | **string**| Filter by last updated timestamp.   You can specify any more recent or identical date or a period.   e.g.: updated&#x3D;2018-01-25T13:00:00-05, updated&#x3D;2018-01-25T13:00:00-05,2018-01-25T17:00:00-05 | [optional]
 **metas** | **string**| Filter by metafields. The syntax is: metas&#x3D;name:value.   The parameter can be specified multiple times to search multiple metas at once. | [optional]
 **order** | **string**| Sort order of the results. It is possible to specify several sorts separated by commas as well as the sort direction.   e.g.: label DESC,updated ASC | [optional]
 **identifiers** | **string**| Filter by time entries identifier. Either the id or uid | [optional]

### Return type

[**\ProgressionLive\Model\TimeEntry[]**](../Model/TimeEntry.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timeEntryUnapprovePost**
> \ProgressionLive\Model\Result[] timeEntryUnapprovePost($body)

Reject approval of multiple time entries.

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

$apiInstance = new ProgressionLive\Api\TimeEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProgressionLive\Model\MultipleUnapproveTimeEntryRequest(); // \ProgressionLive\Model\MultipleUnapproveTimeEntryRequest | Time entries' identifiers. Either the id or uid.

try {
    $result = $apiInstance->timeEntryUnapprovePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeEntryApi->timeEntryUnapprovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProgressionLive\Model\MultipleUnapproveTimeEntryRequest**](../Model/MultipleUnapproveTimeEntryRequest.md)| Time entries&#x27; identifiers. Either the id or uid. |

### Return type

[**\ProgressionLive\Model\Result[]**](../Model/Result.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

