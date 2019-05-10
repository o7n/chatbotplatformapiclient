# OpenAPI\Client\TestExamplesApi

All URIs are relative to *https://chatbots.obilytics.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**chatbotChatbotIDRegexTestPost**](TestExamplesApi.md#chatbotChatbotIDRegexTestPost) | **POST** /chatbot/{chatbotID}/regex/test | Test all regex in test examples
[**chatbotChatbotIDTestsDelete**](TestExamplesApi.md#chatbotChatbotIDTestsDelete) | **DELETE** /chatbot/{chatbotID}/tests | Delete all test examples
[**chatbotChatbotIDTestsExampleIDDelete**](TestExamplesApi.md#chatbotChatbotIDTestsExampleIDDelete) | **DELETE** /chatbot/{chatbotID}/tests/{exampleID} | Delete a specific Test example
[**chatbotChatbotIDTestsExampleIDGet**](TestExamplesApi.md#chatbotChatbotIDTestsExampleIDGet) | **GET** /chatbot/{chatbotID}/tests/{exampleID} | Get a specific Test example
[**chatbotChatbotIDTestsExampleIDRunPost**](TestExamplesApi.md#chatbotChatbotIDTestsExampleIDRunPost) | **POST** /chatbot/{chatbotID}/tests/{exampleID}/run | Run a specific test examplee
[**chatbotChatbotIDTestsGet**](TestExamplesApi.md#chatbotChatbotIDTestsGet) | **GET** /chatbot/{chatbotID}/tests | Returns all test examples
[**chatbotChatbotIDTestsPost**](TestExamplesApi.md#chatbotChatbotIDTestsPost) | **POST** /chatbot/{chatbotID}/tests | Create a specific Test example
[**chatbotChatbotIDTestsRunPost**](TestExamplesApi.md#chatbotChatbotIDTestsRunPost) | **POST** /chatbot/{chatbotID}/tests/run | Run all test examples



## chatbotChatbotIDRegexTestPost

> \OpenAPI\Client\Model\TestRegexResult chatbotChatbotIDRegexTestPost($chatbot_id)

Test all regex in test examples

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TestExamplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.

try {
    $result = $apiInstance->chatbotChatbotIDRegexTestPost($chatbot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestExamplesApi->chatbotChatbotIDRegexTestPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |

### Return type

[**\OpenAPI\Client\Model\TestRegexResult**](../Model/TestRegexResult.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## chatbotChatbotIDTestsDelete

> chatbotChatbotIDTestsDelete($chatbot_id)

Delete all test examples

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TestExamplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.

try {
    $apiInstance->chatbotChatbotIDTestsDelete($chatbot_id);
} catch (Exception $e) {
    echo 'Exception when calling TestExamplesApi->chatbotChatbotIDTestsDelete: ', $e->getMessage(), PHP_EOL;
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


## chatbotChatbotIDTestsExampleIDDelete

> chatbotChatbotIDTestsExampleIDDelete($chatbot_id, $example_id)

Delete a specific Test example

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TestExamplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.
$example_id = 'example_id_example'; // string | Pass in a exampleID to identify the example.

try {
    $apiInstance->chatbotChatbotIDTestsExampleIDDelete($chatbot_id, $example_id);
} catch (Exception $e) {
    echo 'Exception when calling TestExamplesApi->chatbotChatbotIDTestsExampleIDDelete: ', $e->getMessage(), PHP_EOL;
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


## chatbotChatbotIDTestsExampleIDGet

> \OpenAPI\Client\Model\TestExample chatbotChatbotIDTestsExampleIDGet($chatbot_id, $example_id)

Get a specific Test example

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TestExamplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.
$example_id = 'example_id_example'; // string | Pass in a exampleID to identify the example.

try {
    $result = $apiInstance->chatbotChatbotIDTestsExampleIDGet($chatbot_id, $example_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestExamplesApi->chatbotChatbotIDTestsExampleIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |
 **example_id** | **string**| Pass in a exampleID to identify the example. |

### Return type

[**\OpenAPI\Client\Model\TestExample**](../Model/TestExample.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## chatbotChatbotIDTestsExampleIDRunPost

> \OpenAPI\Client\Model\TestExample chatbotChatbotIDTestsExampleIDRunPost($chatbot_id, $example_id, $test_example)

Run a specific test examplee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TestExamplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.
$example_id = 'example_id_example'; // string | Pass in a exampleID to identify the test example.
$test_example = new \OpenAPI\Client\Model\TestExample(); // \OpenAPI\Client\Model\TestExample | 

try {
    $result = $apiInstance->chatbotChatbotIDTestsExampleIDRunPost($chatbot_id, $example_id, $test_example);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestExamplesApi->chatbotChatbotIDTestsExampleIDRunPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |
 **example_id** | **string**| Pass in a exampleID to identify the test example. |
 **test_example** | [**\OpenAPI\Client\Model\TestExample**](../Model/TestExample.md)|  |

### Return type

[**\OpenAPI\Client\Model\TestExample**](../Model/TestExample.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## chatbotChatbotIDTestsGet

> \OpenAPI\Client\Model\TestExample[] chatbotChatbotIDTestsGet($chatbot_id)

Returns all test examples

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TestExamplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.

try {
    $result = $apiInstance->chatbotChatbotIDTestsGet($chatbot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestExamplesApi->chatbotChatbotIDTestsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |

### Return type

[**\OpenAPI\Client\Model\TestExample[]**](../Model/TestExample.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## chatbotChatbotIDTestsPost

> \OpenAPI\Client\Model\TestExample chatbotChatbotIDTestsPost($chatbot_id, $test_example)

Create a specific Test example

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TestExamplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.
$test_example = new \OpenAPI\Client\Model\TestExample(); // \OpenAPI\Client\Model\TestExample | 

try {
    $result = $apiInstance->chatbotChatbotIDTestsPost($chatbot_id, $test_example);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestExamplesApi->chatbotChatbotIDTestsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |
 **test_example** | [**\OpenAPI\Client\Model\TestExample**](../Model/TestExample.md)|  |

### Return type

[**\OpenAPI\Client\Model\TestExample**](../Model/TestExample.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## chatbotChatbotIDTestsRunPost

> \OpenAPI\Client\Model\TestExample chatbotChatbotIDTestsRunPost($chatbot_id)

Run all test examples

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TestExamplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.

try {
    $result = $apiInstance->chatbotChatbotIDTestsRunPost($chatbot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestExamplesApi->chatbotChatbotIDTestsRunPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |

### Return type

[**\OpenAPI\Client\Model\TestExample**](../Model/TestExample.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

