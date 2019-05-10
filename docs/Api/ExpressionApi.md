# OpenAPI\Client\ExpressionApi

All URIs are relative to *https://chatbots.obilytics.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**chatbotChatbotIDExpressionsDelete**](ExpressionApi.md#chatbotChatbotIDExpressionsDelete) | **DELETE** /chatbot/{chatbotID}/expressions | Delete a all training Expression
[**chatbotChatbotIDExpressionsExpressionIDDelete**](ExpressionApi.md#chatbotChatbotIDExpressionsExpressionIDDelete) | **DELETE** /chatbot/{chatbotID}/expressions/{expressionID} | Delete a specific training expression
[**chatbotChatbotIDExpressionsExpressionIDGet**](ExpressionApi.md#chatbotChatbotIDExpressionsExpressionIDGet) | **GET** /chatbot/{chatbotID}/expressions/{expressionID} | Get a specific training expression
[**chatbotChatbotIDExpressionsExpressionIDPut**](ExpressionApi.md#chatbotChatbotIDExpressionsExpressionIDPut) | **PUT** /chatbot/{chatbotID}/expressions/{expressionID} | Returns a specific Expression
[**chatbotChatbotIDExpressionsGet**](ExpressionApi.md#chatbotChatbotIDExpressionsGet) | **GET** /chatbot/{chatbotID}/expressions | Returns all training Expression
[**chatbotChatbotIDExpressionsPost**](ExpressionApi.md#chatbotChatbotIDExpressionsPost) | **POST** /chatbot/{chatbotID}/expressions | Create a specific training expression



## chatbotChatbotIDExpressionsDelete

> chatbotChatbotIDExpressionsDelete($chatbot_id)

Delete a all training Expression

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ExpressionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.

try {
    $apiInstance->chatbotChatbotIDExpressionsDelete($chatbot_id);
} catch (Exception $e) {
    echo 'Exception when calling ExpressionApi->chatbotChatbotIDExpressionsDelete: ', $e->getMessage(), PHP_EOL;
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


## chatbotChatbotIDExpressionsExpressionIDDelete

> chatbotChatbotIDExpressionsExpressionIDDelete($chatbot_id, $expression_id)

Delete a specific training expression

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ExpressionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.
$expression_id = 'expression_id_example'; // string | Pass in a expressionID to identify the expression.

try {
    $apiInstance->chatbotChatbotIDExpressionsExpressionIDDelete($chatbot_id, $expression_id);
} catch (Exception $e) {
    echo 'Exception when calling ExpressionApi->chatbotChatbotIDExpressionsExpressionIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |
 **expression_id** | **string**| Pass in a expressionID to identify the expression. |

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


## chatbotChatbotIDExpressionsExpressionIDGet

> \OpenAPI\Client\Model\Expression chatbotChatbotIDExpressionsExpressionIDGet($chatbot_id, $expression_id)

Get a specific training expression

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ExpressionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.
$expression_id = 'expression_id_example'; // string | Pass in a expressionID to identify the expression.

try {
    $result = $apiInstance->chatbotChatbotIDExpressionsExpressionIDGet($chatbot_id, $expression_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressionApi->chatbotChatbotIDExpressionsExpressionIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |
 **expression_id** | **string**| Pass in a expressionID to identify the expression. |

### Return type

[**\OpenAPI\Client\Model\Expression**](../Model/Expression.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## chatbotChatbotIDExpressionsExpressionIDPut

> \OpenAPI\Client\Model\Expression chatbotChatbotIDExpressionsExpressionIDPut($chatbot_id, $expression_id, $expression)

Returns a specific Expression

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ExpressionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.
$expression_id = 'expression_id_example'; // string | Pass in a expressionID to identify the expression.
$expression = new \OpenAPI\Client\Model\Expression(); // \OpenAPI\Client\Model\Expression | 

try {
    $result = $apiInstance->chatbotChatbotIDExpressionsExpressionIDPut($chatbot_id, $expression_id, $expression);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressionApi->chatbotChatbotIDExpressionsExpressionIDPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |
 **expression_id** | **string**| Pass in a expressionID to identify the expression. |
 **expression** | [**\OpenAPI\Client\Model\Expression**](../Model/Expression.md)|  |

### Return type

[**\OpenAPI\Client\Model\Expression**](../Model/Expression.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## chatbotChatbotIDExpressionsGet

> \OpenAPI\Client\Model\Expression[] chatbotChatbotIDExpressionsGet($chatbot_id)

Returns all training Expression

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ExpressionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.

try {
    $result = $apiInstance->chatbotChatbotIDExpressionsGet($chatbot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressionApi->chatbotChatbotIDExpressionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |

### Return type

[**\OpenAPI\Client\Model\Expression[]**](../Model/Expression.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## chatbotChatbotIDExpressionsPost

> \OpenAPI\Client\Model\Expression chatbotChatbotIDExpressionsPost($chatbot_id, $expression)

Create a specific training expression

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ExpressionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.
$expression = new \OpenAPI\Client\Model\Expression(); // \OpenAPI\Client\Model\Expression | 

try {
    $result = $apiInstance->chatbotChatbotIDExpressionsPost($chatbot_id, $expression);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressionApi->chatbotChatbotIDExpressionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |
 **expression** | [**\OpenAPI\Client\Model\Expression**](../Model/Expression.md)|  |

### Return type

[**\OpenAPI\Client\Model\Expression**](../Model/Expression.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

