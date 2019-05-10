# OpenAPI\Client\ConversationsApi

All URIs are relative to *https://chatbots.obilytics.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**chatbotChatbotIDConversationsConversationIDDelete**](ConversationsApi.md#chatbotChatbotIDConversationsConversationIDDelete) | **DELETE** /chatbot/{chatbotID}/conversations/{conversationID} | Delete a specific Conversations
[**chatbotChatbotIDConversationsConversationIDGet**](ConversationsApi.md#chatbotChatbotIDConversationsConversationIDGet) | **GET** /chatbot/{chatbotID}/conversations/{conversationID} | Get a specific Conversations
[**chatbotChatbotIDConversationsConversationIDPut**](ConversationsApi.md#chatbotChatbotIDConversationsConversationIDPut) | **PUT** /chatbot/{chatbotID}/conversations/{conversationID} | Returns a specific Conversations
[**chatbotChatbotIDConversationsDelete**](ConversationsApi.md#chatbotChatbotIDConversationsDelete) | **DELETE** /chatbot/{chatbotID}/conversations | Delete a all Conversations
[**chatbotChatbotIDConversationsGet**](ConversationsApi.md#chatbotChatbotIDConversationsGet) | **GET** /chatbot/{chatbotID}/conversations | Returns all Conversations
[**chatbotChatbotIDConversationsPost**](ConversationsApi.md#chatbotChatbotIDConversationsPost) | **POST** /chatbot/{chatbotID}/conversations | Create a specific Conversations
[**chatbotChatbotIDTurnsTurnIdPut**](ConversationsApi.md#chatbotChatbotIDTurnsTurnIdPut) | **PUT** /chatbot/{chatbotID}/turns/{turnId} | Modifies a turn



## chatbotChatbotIDConversationsConversationIDDelete

> chatbotChatbotIDConversationsConversationIDDelete($chatbot_id, $conversation_id)

Delete a specific Conversations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.
$conversation_id = 'conversation_id_example'; // string | Pass in a conversationID to identify the Conversations.

try {
    $apiInstance->chatbotChatbotIDConversationsConversationIDDelete($chatbot_id, $conversation_id);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->chatbotChatbotIDConversationsConversationIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |
 **conversation_id** | **string**| Pass in a conversationID to identify the Conversations. |

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


## chatbotChatbotIDConversationsConversationIDGet

> \OpenAPI\Client\Model\Conversation chatbotChatbotIDConversationsConversationIDGet($chatbot_id, $conversation_id)

Get a specific Conversations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.
$conversation_id = 'conversation_id_example'; // string | Pass in a conversationID to identify the Conversations.

try {
    $result = $apiInstance->chatbotChatbotIDConversationsConversationIDGet($chatbot_id, $conversation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->chatbotChatbotIDConversationsConversationIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |
 **conversation_id** | **string**| Pass in a conversationID to identify the Conversations. |

### Return type

[**\OpenAPI\Client\Model\Conversation**](../Model/Conversation.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## chatbotChatbotIDConversationsConversationIDPut

> \OpenAPI\Client\Model\Conversation chatbotChatbotIDConversationsConversationIDPut($chatbot_id, $conversation_id, $conversation)

Returns a specific Conversations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.
$conversation_id = 'conversation_id_example'; // string | Pass in a conversationID to identify the Conversations.
$conversation = new \OpenAPI\Client\Model\Conversation(); // \OpenAPI\Client\Model\Conversation | 

try {
    $result = $apiInstance->chatbotChatbotIDConversationsConversationIDPut($chatbot_id, $conversation_id, $conversation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->chatbotChatbotIDConversationsConversationIDPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |
 **conversation_id** | **string**| Pass in a conversationID to identify the Conversations. |
 **conversation** | [**\OpenAPI\Client\Model\Conversation**](../Model/Conversation.md)|  |

### Return type

[**\OpenAPI\Client\Model\Conversation**](../Model/Conversation.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## chatbotChatbotIDConversationsDelete

> chatbotChatbotIDConversationsDelete($chatbot_id)

Delete a all Conversations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.

try {
    $apiInstance->chatbotChatbotIDConversationsDelete($chatbot_id);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->chatbotChatbotIDConversationsDelete: ', $e->getMessage(), PHP_EOL;
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


## chatbotChatbotIDConversationsGet

> \OpenAPI\Client\Model\Conversation[] chatbotChatbotIDConversationsGet($chatbot_id)

Returns all Conversations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.

try {
    $result = $apiInstance->chatbotChatbotIDConversationsGet($chatbot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->chatbotChatbotIDConversationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |

### Return type

[**\OpenAPI\Client\Model\Conversation[]**](../Model/Conversation.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## chatbotChatbotIDConversationsPost

> \OpenAPI\Client\Model\Conversation chatbotChatbotIDConversationsPost($chatbot_id, $conversation)

Create a specific Conversations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.
$conversation = new \OpenAPI\Client\Model\Conversation(); // \OpenAPI\Client\Model\Conversation | 

try {
    $result = $apiInstance->chatbotChatbotIDConversationsPost($chatbot_id, $conversation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->chatbotChatbotIDConversationsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |
 **conversation** | [**\OpenAPI\Client\Model\Conversation**](../Model/Conversation.md)|  |

### Return type

[**\OpenAPI\Client\Model\Conversation**](../Model/Conversation.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## chatbotChatbotIDTurnsTurnIdPut

> \OpenAPI\Client\Model\Conversation chatbotChatbotIDTurnsTurnIdPut($chatbot_id, $turn_id, $conversation_turn)

Modifies a turn

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.
$turn_id = 'turn_id_example'; // string | Pass in a turnId to identify the turn.
$conversation_turn = new \OpenAPI\Client\Model\ConversationTurn(); // \OpenAPI\Client\Model\ConversationTurn | 

try {
    $result = $apiInstance->chatbotChatbotIDTurnsTurnIdPut($chatbot_id, $turn_id, $conversation_turn);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->chatbotChatbotIDTurnsTurnIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |
 **turn_id** | **string**| Pass in a turnId to identify the turn. |
 **conversation_turn** | [**\OpenAPI\Client\Model\ConversationTurn**](../Model/ConversationTurn.md)|  |

### Return type

[**\OpenAPI\Client\Model\Conversation**](../Model/Conversation.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

