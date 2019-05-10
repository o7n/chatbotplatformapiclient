# OpenAPI\Client\BusinessRulesApi

All URIs are relative to *https://chatbots.obilytics.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**chatbotChatbotIDRulesDelete**](BusinessRulesApi.md#chatbotChatbotIDRulesDelete) | **DELETE** /chatbot/{chatbotID}/rules | Delete a all rules
[**chatbotChatbotIDRulesGet**](BusinessRulesApi.md#chatbotChatbotIDRulesGet) | **GET** /chatbot/{chatbotID}/rules | Returns all rules
[**chatbotChatbotIDRulesPost**](BusinessRulesApi.md#chatbotChatbotIDRulesPost) | **POST** /chatbot/{chatbotID}/rules | Create a specific rules
[**chatbotChatbotIDRulesRuleIDDelete**](BusinessRulesApi.md#chatbotChatbotIDRulesRuleIDDelete) | **DELETE** /chatbot/{chatbotID}/rules/{ruleID} | Delete a specific rule
[**chatbotChatbotIDRulesRuleIDGet**](BusinessRulesApi.md#chatbotChatbotIDRulesRuleIDGet) | **GET** /chatbot/{chatbotID}/rules/{ruleID} | Get a specific rules



## chatbotChatbotIDRulesDelete

> chatbotChatbotIDRulesDelete($chatbot_id)

Delete a all rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BusinessRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.

try {
    $apiInstance->chatbotChatbotIDRulesDelete($chatbot_id);
} catch (Exception $e) {
    echo 'Exception when calling BusinessRulesApi->chatbotChatbotIDRulesDelete: ', $e->getMessage(), PHP_EOL;
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


## chatbotChatbotIDRulesGet

> \OpenAPI\Client\Model\BusinessRule[] chatbotChatbotIDRulesGet($chatbot_id)

Returns all rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BusinessRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.

try {
    $result = $apiInstance->chatbotChatbotIDRulesGet($chatbot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessRulesApi->chatbotChatbotIDRulesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |

### Return type

[**\OpenAPI\Client\Model\BusinessRule[]**](../Model/BusinessRule.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## chatbotChatbotIDRulesPost

> \OpenAPI\Client\Model\BusinessRule chatbotChatbotIDRulesPost($chatbot_id, $business_rule_string)

Create a specific rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BusinessRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.
$business_rule_string = new \OpenAPI\Client\Model\BusinessRuleString(); // \OpenAPI\Client\Model\BusinessRuleString | 

try {
    $result = $apiInstance->chatbotChatbotIDRulesPost($chatbot_id, $business_rule_string);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessRulesApi->chatbotChatbotIDRulesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |
 **business_rule_string** | [**\OpenAPI\Client\Model\BusinessRuleString**](../Model/BusinessRuleString.md)|  |

### Return type

[**\OpenAPI\Client\Model\BusinessRule**](../Model/BusinessRule.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## chatbotChatbotIDRulesRuleIDDelete

> chatbotChatbotIDRulesRuleIDDelete($chatbot_id, $rule_id)

Delete a specific rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BusinessRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.
$rule_id = 'rule_id_example'; // string | Pass in a ruleID to identify the rules.

try {
    $apiInstance->chatbotChatbotIDRulesRuleIDDelete($chatbot_id, $rule_id);
} catch (Exception $e) {
    echo 'Exception when calling BusinessRulesApi->chatbotChatbotIDRulesRuleIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |
 **rule_id** | **string**| Pass in a ruleID to identify the rules. |

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


## chatbotChatbotIDRulesRuleIDGet

> \OpenAPI\Client\Model\BusinessRule chatbotChatbotIDRulesRuleIDGet($chatbot_id, $rule_id)

Get a specific rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BusinessRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.
$rule_id = 'rule_id_example'; // string | Pass in a ruleID to identify the rules.

try {
    $result = $apiInstance->chatbotChatbotIDRulesRuleIDGet($chatbot_id, $rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessRulesApi->chatbotChatbotIDRulesRuleIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |
 **rule_id** | **string**| Pass in a ruleID to identify the rules. |

### Return type

[**\OpenAPI\Client\Model\BusinessRule**](../Model/BusinessRule.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

