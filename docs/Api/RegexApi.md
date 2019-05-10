# OpenAPI\Client\RegexApi

All URIs are relative to *https://chatbots.obilytics.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**chatbotChatbotIDRegexDelete**](RegexApi.md#chatbotChatbotIDRegexDelete) | **DELETE** /chatbot/{chatbotID}/regex | Delete a all training regex
[**chatbotChatbotIDRegexGet**](RegexApi.md#chatbotChatbotIDRegexGet) | **GET** /chatbot/{chatbotID}/regex | Returns all training regex
[**chatbotChatbotIDRegexPost**](RegexApi.md#chatbotChatbotIDRegexPost) | **POST** /chatbot/{chatbotID}/regex | Create a specific training regex
[**chatbotChatbotIDRegexRegexIDDelete**](RegexApi.md#chatbotChatbotIDRegexRegexIDDelete) | **DELETE** /chatbot/{chatbotID}/regex/{RegexID} | Delete a specific training regex
[**chatbotChatbotIDRegexRegexIDGet**](RegexApi.md#chatbotChatbotIDRegexRegexIDGet) | **GET** /chatbot/{chatbotID}/regex/{RegexID} | Get a specific training regex
[**chatbotChatbotIDRegexRegexIDPut**](RegexApi.md#chatbotChatbotIDRegexRegexIDPut) | **PUT** /chatbot/{chatbotID}/regex/{RegexID} | Returns a specific Regex



## chatbotChatbotIDRegexDelete

> chatbotChatbotIDRegexDelete($chatbot_id)

Delete a all training regex

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RegexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.

try {
    $apiInstance->chatbotChatbotIDRegexDelete($chatbot_id);
} catch (Exception $e) {
    echo 'Exception when calling RegexApi->chatbotChatbotIDRegexDelete: ', $e->getMessage(), PHP_EOL;
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


## chatbotChatbotIDRegexGet

> \OpenAPI\Client\Model\RegexFeature[] chatbotChatbotIDRegexGet($chatbot_id)

Returns all training regex

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RegexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.

try {
    $result = $apiInstance->chatbotChatbotIDRegexGet($chatbot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegexApi->chatbotChatbotIDRegexGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |

### Return type

[**\OpenAPI\Client\Model\RegexFeature[]**](../Model/RegexFeature.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## chatbotChatbotIDRegexPost

> \OpenAPI\Client\Model\RegexFeature chatbotChatbotIDRegexPost($chatbot_id, $regex_feature)

Create a specific training regex

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RegexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.
$regex_feature = new \OpenAPI\Client\Model\RegexFeature(); // \OpenAPI\Client\Model\RegexFeature | 

try {
    $result = $apiInstance->chatbotChatbotIDRegexPost($chatbot_id, $regex_feature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegexApi->chatbotChatbotIDRegexPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |
 **regex_feature** | [**\OpenAPI\Client\Model\RegexFeature**](../Model/RegexFeature.md)|  |

### Return type

[**\OpenAPI\Client\Model\RegexFeature**](../Model/RegexFeature.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## chatbotChatbotIDRegexRegexIDDelete

> chatbotChatbotIDRegexRegexIDDelete($chatbot_id, $regex_id)

Delete a specific training regex

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RegexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.
$regex_id = 'regex_id_example'; // string | Pass in a RegexID to identify the Regex.

try {
    $apiInstance->chatbotChatbotIDRegexRegexIDDelete($chatbot_id, $regex_id);
} catch (Exception $e) {
    echo 'Exception when calling RegexApi->chatbotChatbotIDRegexRegexIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |
 **regex_id** | **string**| Pass in a RegexID to identify the Regex. |

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


## chatbotChatbotIDRegexRegexIDGet

> \OpenAPI\Client\Model\RegexFeature chatbotChatbotIDRegexRegexIDGet($chatbot_id, $regex_id)

Get a specific training regex

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RegexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.
$regex_id = 'regex_id_example'; // string | Pass in a RegexID to identify the Regex.

try {
    $result = $apiInstance->chatbotChatbotIDRegexRegexIDGet($chatbot_id, $regex_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegexApi->chatbotChatbotIDRegexRegexIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |
 **regex_id** | **string**| Pass in a RegexID to identify the Regex. |

### Return type

[**\OpenAPI\Client\Model\RegexFeature**](../Model/RegexFeature.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## chatbotChatbotIDRegexRegexIDPut

> \OpenAPI\Client\Model\RegexFeature chatbotChatbotIDRegexRegexIDPut($chatbot_id, $regex_id, $regex_feature)

Returns a specific Regex

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RegexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.
$regex_id = 'regex_id_example'; // string | Pass in a RegexID to identify the Regex.
$regex_feature = new \OpenAPI\Client\Model\RegexFeature(); // \OpenAPI\Client\Model\RegexFeature | 

try {
    $result = $apiInstance->chatbotChatbotIDRegexRegexIDPut($chatbot_id, $regex_id, $regex_feature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegexApi->chatbotChatbotIDRegexRegexIDPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |
 **regex_id** | **string**| Pass in a RegexID to identify the Regex. |
 **regex_feature** | [**\OpenAPI\Client\Model\RegexFeature**](../Model/RegexFeature.md)|  |

### Return type

[**\OpenAPI\Client\Model\RegexFeature**](../Model/RegexFeature.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

