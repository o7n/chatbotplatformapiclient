# OpenAPI\Client\ChatApi

All URIs are relative to *https://chatbots.obilytics.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**chatbotChatbotIDChatSessionIDGet**](ChatApi.md#chatbotChatbotIDChatSessionIDGet) | **GET** /chatbot/{chatbotID}/chat/{sessionID} | Continue a chat given a sessionID
[**chatbotChatbotIDUnderstandGet**](ChatApi.md#chatbotChatbotIDUnderstandGet) | **GET** /chatbot/{chatbotID}/understand | Get a understanding response
[**publicGet**](ChatApi.md#publicGet) | **GET** /public | Chat



## chatbotChatbotIDChatSessionIDGet

> object chatbotChatbotIDChatSessionIDGet($chatbot_id, $session_id, $q, $platform)

Continue a chat given a sessionID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.
$session_id = 'session_id_example'; // string | Pass in a sessionID to identify the rules.
$q = 'q_example'; // string | A message from a user
$platform = 'platform_example'; // string | Facebook, whatsapp, twitter

try {
    $result = $apiInstance->chatbotChatbotIDChatSessionIDGet($chatbot_id, $session_id, $q, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->chatbotChatbotIDChatSessionIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |
 **session_id** | **string**| Pass in a sessionID to identify the rules. |
 **q** | **string**| A message from a user |
 **platform** | **string**| Facebook, whatsapp, twitter |

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


## chatbotChatbotIDUnderstandGet

> object chatbotChatbotIDUnderstandGet($chatbot_id, $q, $platform)

Get a understanding response

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.
$q = 'q_example'; // string | A message from a user
$platform = 'platform_example'; // string | Facebook, whatsapp, twitter

try {
    $result = $apiInstance->chatbotChatbotIDUnderstandGet($chatbot_id, $q, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->chatbotChatbotIDUnderstandGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |
 **q** | **string**| A message from a user |
 **platform** | **string**| Facebook, whatsapp, twitter |

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


## publicGet

> object publicGet($q, $platform, $chatbot_id, $session_id)

Chat

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q = 'q_example'; // string | A message from a user
$platform = 'platform_example'; // string | Facebook, whatsapp, twitter
$chatbot_id = 'chatbot_id_example'; // string | ID of the chatbot
$session_id = 'session_id_example'; // string | ID of the session

try {
    $result = $apiInstance->publicGet($q, $platform, $chatbot_id, $session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->publicGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| A message from a user |
 **platform** | **string**| Facebook, whatsapp, twitter |
 **chatbot_id** | **string**| ID of the chatbot |
 **session_id** | **string**| ID of the session |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

