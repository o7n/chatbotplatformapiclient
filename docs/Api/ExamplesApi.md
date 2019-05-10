# OpenAPI\Client\ExamplesApi

All URIs are relative to *https://chatbots.obilytics.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**chatbotChatbotIDEntityStatisticsGet**](ExamplesApi.md#chatbotChatbotIDEntityStatisticsGet) | **GET** /chatbot/{chatbotID}/entity_statistics | Get statistics per entity
[**chatbotChatbotIDExamplesDelete**](ExamplesApi.md#chatbotChatbotIDExamplesDelete) | **DELETE** /chatbot/{chatbotID}/examples | Delete a all training examples
[**chatbotChatbotIDExamplesExampleIDDelete**](ExamplesApi.md#chatbotChatbotIDExamplesExampleIDDelete) | **DELETE** /chatbot/{chatbotID}/examples/{exampleID} | Delete a specific training example
[**chatbotChatbotIDExamplesExampleIDGet**](ExamplesApi.md#chatbotChatbotIDExamplesExampleIDGet) | **GET** /chatbot/{chatbotID}/examples/{exampleID} | Get a specific training example
[**chatbotChatbotIDExamplesExampleIDPut**](ExamplesApi.md#chatbotChatbotIDExamplesExampleIDPut) | **PUT** /chatbot/{chatbotID}/examples/{exampleID} | Returns a specific examples
[**chatbotChatbotIDExamplesGet**](ExamplesApi.md#chatbotChatbotIDExamplesGet) | **GET** /chatbot/{chatbotID}/examples | Returns all training examples
[**chatbotChatbotIDExamplesPost**](ExamplesApi.md#chatbotChatbotIDExamplesPost) | **POST** /chatbot/{chatbotID}/examples | Create a specific training example
[**chatbotChatbotIDIntentStatisticsGet**](ExamplesApi.md#chatbotChatbotIDIntentStatisticsGet) | **GET** /chatbot/{chatbotID}/intent_statistics | Get statistics per intent



## chatbotChatbotIDEntityStatisticsGet

> object chatbotChatbotIDEntityStatisticsGet($chatbot_id)

Get statistics per entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ExamplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.

try {
    $result = $apiInstance->chatbotChatbotIDEntityStatisticsGet($chatbot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExamplesApi->chatbotChatbotIDEntityStatisticsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## chatbotChatbotIDExamplesDelete

> chatbotChatbotIDExamplesDelete($chatbot_id)

Delete a all training examples

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ExamplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.

try {
    $apiInstance->chatbotChatbotIDExamplesDelete($chatbot_id);
} catch (Exception $e) {
    echo 'Exception when calling ExamplesApi->chatbotChatbotIDExamplesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## chatbotChatbotIDExamplesExampleIDDelete

> chatbotChatbotIDExamplesExampleIDDelete($chatbot_id, $example_id)

Delete a specific training example

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ExamplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.
$example_id = 'example_id_example'; // string | Pass in a exampleID to identify the example.

try {
    $apiInstance->chatbotChatbotIDExamplesExampleIDDelete($chatbot_id, $example_id);
} catch (Exception $e) {
    echo 'Exception when calling ExamplesApi->chatbotChatbotIDExamplesExampleIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |
 **example_id** | **string**| Pass in a exampleID to identify the example. |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## chatbotChatbotIDExamplesExampleIDGet

> \OpenAPI\Client\Model\TrainingExample chatbotChatbotIDExamplesExampleIDGet($chatbot_id, $example_id)

Get a specific training example

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ExamplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.
$example_id = 'example_id_example'; // string | Pass in a exampleID to identify the example.

try {
    $result = $apiInstance->chatbotChatbotIDExamplesExampleIDGet($chatbot_id, $example_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExamplesApi->chatbotChatbotIDExamplesExampleIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |
 **example_id** | **string**| Pass in a exampleID to identify the example. |

### Return type

[**\OpenAPI\Client\Model\TrainingExample**](../Model/TrainingExample.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## chatbotChatbotIDExamplesExampleIDPut

> \OpenAPI\Client\Model\TrainingExample chatbotChatbotIDExamplesExampleIDPut($chatbot_id, $example_id, $training_example)

Returns a specific examples

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ExamplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.
$example_id = 'example_id_example'; // string | Pass in a exampleID to identify the example.
$training_example = new \OpenAPI\Client\Model\TrainingExample(); // \OpenAPI\Client\Model\TrainingExample | 

try {
    $result = $apiInstance->chatbotChatbotIDExamplesExampleIDPut($chatbot_id, $example_id, $training_example);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExamplesApi->chatbotChatbotIDExamplesExampleIDPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |
 **example_id** | **string**| Pass in a exampleID to identify the example. |
 **training_example** | [**\OpenAPI\Client\Model\TrainingExample**](../Model/TrainingExample.md)|  |

### Return type

[**\OpenAPI\Client\Model\TrainingExample**](../Model/TrainingExample.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## chatbotChatbotIDExamplesGet

> \OpenAPI\Client\Model\TrainingExample[] chatbotChatbotIDExamplesGet($chatbot_id)

Returns all training examples

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ExamplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.

try {
    $result = $apiInstance->chatbotChatbotIDExamplesGet($chatbot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExamplesApi->chatbotChatbotIDExamplesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |

### Return type

[**\OpenAPI\Client\Model\TrainingExample[]**](../Model/TrainingExample.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## chatbotChatbotIDExamplesPost

> \OpenAPI\Client\Model\TrainingExample chatbotChatbotIDExamplesPost($chatbot_id, $training_example)

Create a specific training example

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ExamplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.
$training_example = new \OpenAPI\Client\Model\TrainingExample(); // \OpenAPI\Client\Model\TrainingExample | 

try {
    $result = $apiInstance->chatbotChatbotIDExamplesPost($chatbot_id, $training_example);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExamplesApi->chatbotChatbotIDExamplesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |
 **training_example** | [**\OpenAPI\Client\Model\TrainingExample**](../Model/TrainingExample.md)|  |

### Return type

[**\OpenAPI\Client\Model\TrainingExample**](../Model/TrainingExample.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## chatbotChatbotIDIntentStatisticsGet

> object chatbotChatbotIDIntentStatisticsGet($chatbot_id)

Get statistics per intent

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ExamplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.

try {
    $result = $apiInstance->chatbotChatbotIDIntentStatisticsGet($chatbot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExamplesApi->chatbotChatbotIDIntentStatisticsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

