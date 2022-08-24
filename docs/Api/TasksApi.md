# ProgressionLive\TasksApi

All URIs are relative to *https://support.progressionlive.com/server/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**taskAssignPost**](TasksApi.md#taskassignpost) | **POST** /task/assign | Assign many tasks.
[**taskAttachmentIdentifierGet**](TasksApi.md#taskattachmentidentifierget) | **GET** /task/attachment/{identifier} | 
[**taskAttachmentIdentifierPost**](TasksApi.md#taskattachmentidentifierpost) | **POST** /task/attachment/{identifier} | 
[**taskCreatePost**](TasksApi.md#taskcreatepost) | **POST** /task/create | Create a task.
[**taskDispatchPost**](TasksApi.md#taskdispatchpost) | **POST** /task/dispatch | Dispatch many tasks. Sends the task to the mobile device of the resource. If no resource is specified, the currently assigned resource will be used.
[**taskIdentifierAssignPost**](TasksApi.md#taskidentifierassignpost) | **POST** /task/{identifier}/assign | Assign a task.
[**taskIdentifierAttachmentPost**](TasksApi.md#taskidentifierattachmentpost) | **POST** /task/{identifier}/attachment | 
[**taskIdentifierAttachmentsGet**](TasksApi.md#taskidentifierattachmentsget) | **GET** /task/{identifier}/attachments | 
[**taskIdentifierDispatchPost**](TasksApi.md#taskidentifierdispatchpost) | **POST** /task/{identifier}/dispatch | Dispatch a task. Sends the task to the mobile device of the resource.  If no resource is specified, the currently assigned resource will be used.
[**taskIdentifierEventPost**](TasksApi.md#taskidentifiereventpost) | **POST** /task/{identifier}/event | 
[**taskIdentifierGet**](TasksApi.md#taskidentifierget) | **GET** /task/{identifier} | Get a task.
[**taskIdentifierLinkPost**](TasksApi.md#taskidentifierlinkpost) | **POST** /task/{identifier}/link | Link a task to a parent task. If no parent task found, an error is returned.
[**taskIdentifierLinksGet**](TasksApi.md#taskidentifierlinksget) | **GET** /task/{identifier}/links | Get a task&#x27;s subtasks.
[**taskIdentifierSignatureGet**](TasksApi.md#taskidentifiersignatureget) | **GET** /task/{identifier}/signature | 
[**taskIdentifierSignatureHrGet**](TasksApi.md#taskidentifiersignaturehrget) | **GET** /task/{identifier}/signature/hr | 
[**taskIdentifierSignatureOtherGet**](TasksApi.md#taskidentifiersignatureotherget) | **GET** /task/{identifier}/signature/other | 
[**taskIdentifierStateGet**](TasksApi.md#taskidentifierstateget) | **GET** /task/{identifier}/state | Get a task&#x27;s state history.
[**taskIdentifierStatePost**](TasksApi.md#taskidentifierstatepost) | **POST** /task/{identifier}/state | Change task&#x27;s state.
[**taskIdentifierTimeEntriesGet**](TasksApi.md#taskidentifiertimeentriesget) | **GET** /task/{identifier}/timeEntries | Get a task&#x27;s time entries.
[**taskIdentifierUnlinkPost**](TasksApi.md#taskidentifierunlinkpost) | **POST** /task/{identifier}/unlink | Unlink a task from its parent task, if a parent task is linked to it.
[**taskIdentifierUpdatePost**](TasksApi.md#taskidentifierupdatepost) | **POST** /task/{identifier}/update | Update a task. Only provided fields will be updated.
[**taskListGet**](TasksApi.md#tasklistget) | **GET** /task/list | Search for tasks.
[**taskStateListGet**](TasksApi.md#taskstatelistget) | **GET** /task/state/list | Get multiple tasks state history.
[**taskStatePost**](TasksApi.md#taskstatepost) | **POST** /task/state | Change multiple tasks state.

# **taskAssignPost**
> \ProgressionLive\Model\ProgressResult[] taskAssignPost($body)

Assign many tasks.

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

$apiInstance = new ProgressionLive\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProgressionLive\Model\MultipleProgressRequest(); // \ProgressionLive\Model\MultipleProgressRequest | MultipleProgressRequest

try {
    $result = $apiInstance->taskAssignPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->taskAssignPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProgressionLive\Model\MultipleProgressRequest**](../Model/MultipleProgressRequest.md)| MultipleProgressRequest |

### Return type

[**\ProgressionLive\Model\ProgressResult[]**](../Model/ProgressResult.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskAttachmentIdentifierGet**
> \ProgressionLive\Model\Attachment taskAttachmentIdentifierGet($identifier)



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

$apiInstance = new ProgressionLive\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Attachment's identifier. Id or uid. See 'Task.attachments'.

try {
    $result = $apiInstance->taskAttachmentIdentifierGet($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->taskAttachmentIdentifierGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Attachment&#x27;s identifier. Id or uid. See &#x27;Task.attachments&#x27;. |

### Return type

[**\ProgressionLive\Model\Attachment**](../Model/Attachment.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskAttachmentIdentifierPost**
> taskAttachmentIdentifierPost($body, $identifier)



Allows to update an existing attachment.

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

$apiInstance = new ProgressionLive\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProgressionLive\Model\Attachment(); // \ProgressionLive\Model\Attachment | Attachment to update.
$identifier = "identifier_example"; // string | Attachment's identifier. id or uid.

try {
    $apiInstance->taskAttachmentIdentifierPost($body, $identifier);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->taskAttachmentIdentifierPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProgressionLive\Model\Attachment**](../Model/Attachment.md)| Attachment to update. |
 **identifier** | **string**| Attachment&#x27;s identifier. id or uid. |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskCreatePost**
> \ProgressionLive\Model\EntityRef taskCreatePost($body)

Create a task.

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

$apiInstance = new ProgressionLive\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProgressionLive\Model\Task(); // \ProgressionLive\Model\Task | Task

try {
    $result = $apiInstance->taskCreatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->taskCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProgressionLive\Model\Task**](../Model/Task.md)| Task |

### Return type

[**\ProgressionLive\Model\EntityRef**](../Model/EntityRef.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskDispatchPost**
> \ProgressionLive\Model\ProgressResult[] taskDispatchPost($body)

Dispatch many tasks. Sends the task to the mobile device of the resource. If no resource is specified, the currently assigned resource will be used.

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

$apiInstance = new ProgressionLive\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProgressionLive\Model\MultipleProgressRequest(); // \ProgressionLive\Model\MultipleProgressRequest | MultipleProgressRequest

try {
    $result = $apiInstance->taskDispatchPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->taskDispatchPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProgressionLive\Model\MultipleProgressRequest**](../Model/MultipleProgressRequest.md)| MultipleProgressRequest |

### Return type

[**\ProgressionLive\Model\ProgressResult[]**](../Model/ProgressResult.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskIdentifierAssignPost**
> \ProgressionLive\Model\ProgressResult taskIdentifierAssignPost($body, $identifier)

Assign a task.

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

$apiInstance = new ProgressionLive\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProgressionLive\Model\EntityRef(); // \ProgressionLive\Model\EntityRef | 
$identifier = "identifier_example"; // string | Task's identifier. id, externalId or code.

try {
    $result = $apiInstance->taskIdentifierAssignPost($body, $identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->taskIdentifierAssignPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProgressionLive\Model\EntityRef**](../Model/EntityRef.md)|  |
 **identifier** | **string**| Task&#x27;s identifier. id, externalId or code. |

### Return type

[**\ProgressionLive\Model\ProgressResult**](../Model/ProgressResult.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskIdentifierAttachmentPost**
> \ProgressionLive\Model\EntityRef taskIdentifierAttachmentPost($body, $identifier)



Allows to add an attachment to a task.

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

$apiInstance = new ProgressionLive\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProgressionLive\Model\Attachment(); // \ProgressionLive\Model\Attachment | Attachment to add.
$identifier = "identifier_example"; // string | Task's identifier. id, externalId or code.

try {
    $result = $apiInstance->taskIdentifierAttachmentPost($body, $identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->taskIdentifierAttachmentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProgressionLive\Model\Attachment**](../Model/Attachment.md)| Attachment to add. |
 **identifier** | **string**| Task&#x27;s identifier. id, externalId or code. |

### Return type

[**\ProgressionLive\Model\EntityRef**](../Model/EntityRef.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskIdentifierAttachmentsGet**
> string taskIdentifierAttachmentsGet($identifier)



Allows you to download all attachments of a task as a ZIP file.

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

$apiInstance = new ProgressionLive\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Task's identifier. id, externalId or code.

try {
    $result = $apiInstance->taskIdentifierAttachmentsGet($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->taskIdentifierAttachmentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Task&#x27;s identifier. id, externalId or code. |

### Return type

**string**

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/zip, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskIdentifierDispatchPost**
> \ProgressionLive\Model\ProgressResult taskIdentifierDispatchPost($identifier, $body)

Dispatch a task. Sends the task to the mobile device of the resource.  If no resource is specified, the currently assigned resource will be used.

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

$apiInstance = new ProgressionLive\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Task's identifier. id, externalId or code.
$body = new \ProgressionLive\Model\EntityRef(); // \ProgressionLive\Model\EntityRef | 

try {
    $result = $apiInstance->taskIdentifierDispatchPost($identifier, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->taskIdentifierDispatchPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Task&#x27;s identifier. id, externalId or code. |
 **body** | [**\ProgressionLive\Model\EntityRef**](../Model/EntityRef.md)|  | [optional]

### Return type

[**\ProgressionLive\Model\ProgressResult**](../Model/ProgressResult.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskIdentifierEventPost**
> taskIdentifierEventPost($identifier, $type, $msg)



Allows to add an event in the task.

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

$apiInstance = new ProgressionLive\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | The Id of the task
$type = "type_example"; // string | The type of the event (DEBUG, INFO, WARN or ERROR)
$msg = "msg_example"; // string | The message to add in the event

try {
    $apiInstance->taskIdentifierEventPost($identifier, $type, $msg);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->taskIdentifierEventPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| The Id of the task |
 **type** | **string**| The type of the event (DEBUG, INFO, WARN or ERROR) | [optional]
 **msg** | **string**| The message to add in the event | [optional]

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskIdentifierGet**
> \ProgressionLive\Model\Task taskIdentifierGet($identifier, $expand)

Get a task.

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

$apiInstance = new ProgressionLive\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Task's identifier. One of id, uid, externalId or code.
$expand = "expand_example"; // string | 

try {
    $result = $apiInstance->taskIdentifierGet($identifier, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->taskIdentifierGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Task&#x27;s identifier. One of id, uid, externalId or code. |
 **expand** | **string**|  | [optional]

### Return type

[**\ProgressionLive\Model\Task**](../Model/Task.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskIdentifierLinkPost**
> \ProgressionLive\Model\ProgressResult taskIdentifierLinkPost($body, $identifier)

Link a task to a parent task. If no parent task found, an error is returned.

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

$apiInstance = new ProgressionLive\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProgressionLive\Model\EntityRef(); // \ProgressionLive\Model\EntityRef | 
$identifier = "identifier_example"; // string | Task's identifier. id, externalId or code.

try {
    $result = $apiInstance->taskIdentifierLinkPost($body, $identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->taskIdentifierLinkPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProgressionLive\Model\EntityRef**](../Model/EntityRef.md)|  |
 **identifier** | **string**| Task&#x27;s identifier. id, externalId or code. |

### Return type

[**\ProgressionLive\Model\ProgressResult**](../Model/ProgressResult.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskIdentifierLinksGet**
> \ProgressionLive\Model\Task[] taskIdentifierLinksGet($identifier, $expand)

Get a task's subtasks.

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

$apiInstance = new ProgressionLive\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Task's identifier. One of id, uid, externalId or code.
$expand = "expand_example"; // string | 

try {
    $result = $apiInstance->taskIdentifierLinksGet($identifier, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->taskIdentifierLinksGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Task&#x27;s identifier. One of id, uid, externalId or code. |
 **expand** | **string**|  | [optional]

### Return type

[**\ProgressionLive\Model\Task[]**](../Model/Task.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskIdentifierSignatureGet**
> \ProgressionLive\Model\FileData taskIdentifierSignatureGet($identifier)



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

$apiInstance = new ProgressionLive\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Task's identifier. id, externalId or code.

try {
    $result = $apiInstance->taskIdentifierSignatureGet($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->taskIdentifierSignatureGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Task&#x27;s identifier. id, externalId or code. |

### Return type

[**\ProgressionLive\Model\FileData**](../Model/FileData.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskIdentifierSignatureHrGet**
> \ProgressionLive\Model\FileData taskIdentifierSignatureHrGet($identifier)



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

$apiInstance = new ProgressionLive\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Task's identifier. id, externalId or code.

try {
    $result = $apiInstance->taskIdentifierSignatureHrGet($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->taskIdentifierSignatureHrGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Task&#x27;s identifier. id, externalId or code. |

### Return type

[**\ProgressionLive\Model\FileData**](../Model/FileData.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskIdentifierSignatureOtherGet**
> \ProgressionLive\Model\FileData taskIdentifierSignatureOtherGet($identifier)



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

$apiInstance = new ProgressionLive\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Task's identifier. id, externalId or code.

try {
    $result = $apiInstance->taskIdentifierSignatureOtherGet($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->taskIdentifierSignatureOtherGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Task&#x27;s identifier. id, externalId or code. |

### Return type

[**\ProgressionLive\Model\FileData**](../Model/FileData.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskIdentifierStateGet**
> \ProgressionLive\Model\TaskState[] taskIdentifierStateGet($identifier, $expand)

Get a task's state history.

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

$apiInstance = new ProgressionLive\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Task's identifier. id, externalId or code.
$expand = "expand_example"; // string | 

try {
    $result = $apiInstance->taskIdentifierStateGet($identifier, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->taskIdentifierStateGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Task&#x27;s identifier. id, externalId or code. |
 **expand** | **string**|  | [optional]

### Return type

[**\ProgressionLive\Model\TaskState[]**](../Model/TaskState.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskIdentifierStatePost**
> \ProgressionLive\Model\ProgressResult taskIdentifierStatePost($identifier, $body, $logicId)

Change task's state.

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

$apiInstance = new ProgressionLive\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Task's identifier. id, externalId or code.
$body = new \ProgressionLive\Model\Position(); // \ProgressionLive\Model\Position | To add a manual position (GPS point), the task must absolutely have an assigned human resource or else this command will be ignored
$logicId = 56; // int | 

try {
    $result = $apiInstance->taskIdentifierStatePost($identifier, $body, $logicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->taskIdentifierStatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Task&#x27;s identifier. id, externalId or code. |
 **body** | [**\ProgressionLive\Model\Position**](../Model/Position.md)| To add a manual position (GPS point), the task must absolutely have an assigned human resource or else this command will be ignored | [optional]
 **logicId** | **int**|  | [optional]

### Return type

[**\ProgressionLive\Model\ProgressResult**](../Model/ProgressResult.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskIdentifierTimeEntriesGet**
> \ProgressionLive\Model\TimeEntry[] taskIdentifierTimeEntriesGet($identifier)

Get a task's time entries.

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

$apiInstance = new ProgressionLive\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Task's identifier. One of id, uid, externalId or code.

try {
    $result = $apiInstance->taskIdentifierTimeEntriesGet($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->taskIdentifierTimeEntriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Task&#x27;s identifier. One of id, uid, externalId or code. |

### Return type

[**\ProgressionLive\Model\TimeEntry[]**](../Model/TimeEntry.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskIdentifierUnlinkPost**
> \ProgressionLive\Model\ProgressResult taskIdentifierUnlinkPost($identifier)

Unlink a task from its parent task, if a parent task is linked to it.

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

$apiInstance = new ProgressionLive\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Task's identifier. id, externalId or code.

try {
    $result = $apiInstance->taskIdentifierUnlinkPost($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->taskIdentifierUnlinkPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Task&#x27;s identifier. id, externalId or code. |

### Return type

[**\ProgressionLive\Model\ProgressResult**](../Model/ProgressResult.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskIdentifierUpdatePost**
> taskIdentifierUpdatePost($body, $identifier)

Update a task. Only provided fields will be updated.

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

$apiInstance = new ProgressionLive\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProgressionLive\Model\Task(); // \ProgressionLive\Model\Task | Task
$identifier = "identifier_example"; // string | Task's identifier. One of id, uid, externalId or code.

try {
    $apiInstance->taskIdentifierUpdatePost($body, $identifier);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->taskIdentifierUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProgressionLive\Model\Task**](../Model/Task.md)| Task |
 **identifier** | **string**| Task&#x27;s identifier. One of id, uid, externalId or code. |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskListGet**
> \ProgressionLive\Model\Task[] taskListGet($maxResults, $startResult, $type, $logicId, $rv, $updated, $properties, $metas, $externalId, $itemExternalId, $order, $client, $location, $humanResource, $parent, $expand, $onlyFieldsToInclude)

Search for tasks.

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

$apiInstance = new ProgressionLive\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$maxResults = 56; // int | Maximum number of results to return. The default maximum number is 500 and cannot be exceeded.
$startResult = 56; // int | Buffer data range to ignore before fetching the data. In combination with the maxResults, implements a pagination logic.  Example : 1000 results to fetch StartResult = 0, MaxResult = 500 (results = 1 à 500) StartResult = 500, MaxResult = 500 (results = 501 à 1000)
$type = "type_example"; // string | Filter by task type. This can be the label OR prefix code of the type.
$logicId = "logicId_example"; // string | Filter by logicId of the current state of the task.   Multiple states can be specified separated by commas, e.g.: 100,200.   It is also possible to specify the operators '>' or '<', e.g.: >100,<600.
$rv = "rv_example"; // string | Filter by task date (rendez-vous).   You can specify a date or a period with or without times.   e.g.: rv=null, rv=2018-01-25, rv=2018-01-25,2018-01-28, rv=2018-01-25T13:00:00-05,2018-01-25T17:00:00-05
$updated = "updated_example"; // string | Filter by task last updated timestamp.   You can specify a more recent date or a period.   e.g.: updated=2018-01-25T13:00:00-05, updated=2018-01-25T13:00:00-05,2018-01-25T17:00:00-05
$properties = "properties_example"; // string | Filter by custom fields. The syntax is: properties=name:value[:operator].   The parameter can be specified multiple times to search multiple fields at once. The operator 'equal' is used as default, but it is possible to change it by precising [:operator], which can take one of these values:  Not equal -> 'ne';   Lower than -> 'lt';  Lower or equal than -> 'le';  Greater than -> 'gt';  Greater or equal than -> 'ge';  Contains sample (frame sample by %..%) -> 'like';  Does not contain sample (frame sample by %..%) -> 'nlike'.
$metas = "metas_example"; // string | Filter by metafields. The syntax is: metas=name:value.   The parameter can be specified multiple times to search multiple metas at once.
$externalId = "externalId_example"; // string | Filter by externalId. This field is unique so you will never get more than one result.
$itemExternalId = "itemExternalId_example"; // string | Filter by items externalId. This field is unique so you will never get more than one result.
$order = "order_example"; // string | Sort order of the results. It is possible to specify several sorts separated by commas as well as the sort direction.   e.g.: rv DESC,updated ASC
$client = "client_example"; // string | Filter by task client. The syntax is: client=[uid, id, externalId, label:]value.  For example, to search for a client by its externalId we specify: client=externalId:1234.  If the field is not specified we search by label by default.
$location = "location_example"; // string | Filter by task location. The syntax is: location=[uid, id, externalId, label:]value.  For example, to search for a location by its externalId we specify: location=externalId:1234.  If the field is not specified we search by label by default.
$humanResource = "humanResource_example"; // string | Filter by task human resource. The syntax is: humanResource=[uid, id, externalId, label:]value.  For example, to search for a human resource by its externalId we specify: humanResource=externalId:1234.  If the field is not specified we search by label by default.
$parent = "parent_example"; // string | Filter by parent task: get all children task of the task provided. One of id or code
$expand = "expand_example"; // string | Fields to \"expand\". Allows to fetch all related entity data instead of only ID and label.   e.g.: client
$onlyFieldsToInclude = "onlyFieldsToInclude_example"; // string | Fields to include exclusively in the JSON response body. Allows to get faster response when doing huge batch researches.  e.g.: properties,client,location,address (id,uid,label,code are included by default)

try {
    $result = $apiInstance->taskListGet($maxResults, $startResult, $type, $logicId, $rv, $updated, $properties, $metas, $externalId, $itemExternalId, $order, $client, $location, $humanResource, $parent, $expand, $onlyFieldsToInclude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->taskListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **maxResults** | **int**| Maximum number of results to return. The default maximum number is 500 and cannot be exceeded. | [optional]
 **startResult** | **int**| Buffer data range to ignore before fetching the data. In combination with the maxResults, implements a pagination logic.  Example : 1000 results to fetch StartResult &#x3D; 0, MaxResult &#x3D; 500 (results &#x3D; 1 à 500) StartResult &#x3D; 500, MaxResult &#x3D; 500 (results &#x3D; 501 à 1000) | [optional]
 **type** | **string**| Filter by task type. This can be the label OR prefix code of the type. | [optional]
 **logicId** | **string**| Filter by logicId of the current state of the task.   Multiple states can be specified separated by commas, e.g.: 100,200.   It is also possible to specify the operators &#x27;&gt;&#x27; or &#x27;&lt;&#x27;, e.g.: &gt;100,&lt;600. | [optional]
 **rv** | **string**| Filter by task date (rendez-vous).   You can specify a date or a period with or without times.   e.g.: rv&#x3D;null, rv&#x3D;2018-01-25, rv&#x3D;2018-01-25,2018-01-28, rv&#x3D;2018-01-25T13:00:00-05,2018-01-25T17:00:00-05 | [optional]
 **updated** | **string**| Filter by task last updated timestamp.   You can specify a more recent date or a period.   e.g.: updated&#x3D;2018-01-25T13:00:00-05, updated&#x3D;2018-01-25T13:00:00-05,2018-01-25T17:00:00-05 | [optional]
 **properties** | **string**| Filter by custom fields. The syntax is: properties&#x3D;name:value[:operator].   The parameter can be specified multiple times to search multiple fields at once. The operator &#x27;equal&#x27; is used as default, but it is possible to change it by precising [:operator], which can take one of these values:  Not equal -&gt; &#x27;ne&#x27;;   Lower than -&gt; &#x27;lt&#x27;;  Lower or equal than -&gt; &#x27;le&#x27;;  Greater than -&gt; &#x27;gt&#x27;;  Greater or equal than -&gt; &#x27;ge&#x27;;  Contains sample (frame sample by %..%) -&gt; &#x27;like&#x27;;  Does not contain sample (frame sample by %..%) -&gt; &#x27;nlike&#x27;. | [optional]
 **metas** | **string**| Filter by metafields. The syntax is: metas&#x3D;name:value.   The parameter can be specified multiple times to search multiple metas at once. | [optional]
 **externalId** | **string**| Filter by externalId. This field is unique so you will never get more than one result. | [optional]
 **itemExternalId** | **string**| Filter by items externalId. This field is unique so you will never get more than one result. | [optional]
 **order** | **string**| Sort order of the results. It is possible to specify several sorts separated by commas as well as the sort direction.   e.g.: rv DESC,updated ASC | [optional]
 **client** | **string**| Filter by task client. The syntax is: client&#x3D;[uid, id, externalId, label:]value.  For example, to search for a client by its externalId we specify: client&#x3D;externalId:1234.  If the field is not specified we search by label by default. | [optional]
 **location** | **string**| Filter by task location. The syntax is: location&#x3D;[uid, id, externalId, label:]value.  For example, to search for a location by its externalId we specify: location&#x3D;externalId:1234.  If the field is not specified we search by label by default. | [optional]
 **humanResource** | **string**| Filter by task human resource. The syntax is: humanResource&#x3D;[uid, id, externalId, label:]value.  For example, to search for a human resource by its externalId we specify: humanResource&#x3D;externalId:1234.  If the field is not specified we search by label by default. | [optional]
 **parent** | **string**| Filter by parent task: get all children task of the task provided. One of id or code | [optional]
 **expand** | **string**| Fields to \&quot;expand\&quot;. Allows to fetch all related entity data instead of only ID and label.   e.g.: client | [optional]
 **onlyFieldsToInclude** | **string**| Fields to include exclusively in the JSON response body. Allows to get faster response when doing huge batch researches.  e.g.: properties,client,location,address (id,uid,label,code are included by default) | [optional]

### Return type

[**\ProgressionLive\Model\Task[]**](../Model/Task.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskStateListGet**
> \ProgressionLive\Model\TaskState[] taskStateListGet($maxResults, $startResult, $logicId, $datetime, $rv, $expand)

Get multiple tasks state history.

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

$apiInstance = new ProgressionLive\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$maxResults = 56; // int | Maximum number of results to return. The default maximum number is 500 and cannot be exceeded.
$startResult = 56; // int | Buffer data range to ignore before fetching the data. In combination with the maxResults, implements a pagination logic.  Example : 1000 results to fetch StartResult = 0, MaxResult = 500 (results = 1 à 500) StartResult = 500, MaxResult = 500 (results = 501 à 1000)
$logicId = "logicId_example"; // string | Filter by logicId of the state.   Multiple states can be specified separated by commas, e.g.: 100,200.   It is also possible to specify the operators '>' or '<', e.g.: >100,<600.
$datetime = "datetime_example"; // string | Filter by state change date and time.   You can specify a date or a period with or without times.   e.g.: rv=2018-01-25, rv=2018-01-25,2018-01-28, rv=2018-01-25T13:00:00-05,2018-01-25T17:00:00-05
$rv = "rv_example"; // string | Filter states by task date (rendez-vous).   You can specify a date or a period with or without times.   e.g.: rv=null, rv=2018-01-25, rv=2018-01-25,2018-01-28, rv=2018-01-25T13:00:00-05,2018-01-25T17:00:00-05
$expand = "expand_example"; // string | 

try {
    $result = $apiInstance->taskStateListGet($maxResults, $startResult, $logicId, $datetime, $rv, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->taskStateListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **maxResults** | **int**| Maximum number of results to return. The default maximum number is 500 and cannot be exceeded. | [optional]
 **startResult** | **int**| Buffer data range to ignore before fetching the data. In combination with the maxResults, implements a pagination logic.  Example : 1000 results to fetch StartResult &#x3D; 0, MaxResult &#x3D; 500 (results &#x3D; 1 à 500) StartResult &#x3D; 500, MaxResult &#x3D; 500 (results &#x3D; 501 à 1000) | [optional]
 **logicId** | **string**| Filter by logicId of the state.   Multiple states can be specified separated by commas, e.g.: 100,200.   It is also possible to specify the operators &#x27;&gt;&#x27; or &#x27;&lt;&#x27;, e.g.: &gt;100,&lt;600. | [optional]
 **datetime** | **string**| Filter by state change date and time.   You can specify a date or a period with or without times.   e.g.: rv&#x3D;2018-01-25, rv&#x3D;2018-01-25,2018-01-28, rv&#x3D;2018-01-25T13:00:00-05,2018-01-25T17:00:00-05 | [optional]
 **rv** | **string**| Filter states by task date (rendez-vous).   You can specify a date or a period with or without times.   e.g.: rv&#x3D;null, rv&#x3D;2018-01-25, rv&#x3D;2018-01-25,2018-01-28, rv&#x3D;2018-01-25T13:00:00-05,2018-01-25T17:00:00-05 | [optional]
 **expand** | **string**|  | [optional]

### Return type

[**\ProgressionLive\Model\TaskState[]**](../Model/TaskState.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskStatePost**
> \ProgressionLive\Model\ProgressResult[] taskStatePost($body)

Change multiple tasks state.

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

$apiInstance = new ProgressionLive\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProgressionLive\Model\MultipleProgressRequest(); // \ProgressionLive\Model\MultipleProgressRequest | To add a manual position (GPS point), the task must absolutely have an assigned human resource or else this command will be ignored

try {
    $result = $apiInstance->taskStatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->taskStatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProgressionLive\Model\MultipleProgressRequest**](../Model/MultipleProgressRequest.md)| To add a manual position (GPS point), the task must absolutely have an assigned human resource or else this command will be ignored |

### Return type

[**\ProgressionLive\Model\ProgressResult[]**](../Model/ProgressResult.md)

### Authorization

[basic](../../README.md#basic), [bearer](../../README.md#bearer), [query](../../README.md#query)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

