# OpenAPI\Client\KTOApi

All URIs are relative to *https://chatbots.obilytics.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**chatbotChatbotIDKtoAnswersDelete**](KTOApi.md#chatbotChatbotIDKtoAnswersDelete) | **DELETE** /chatbot/{chatbotID}/kto_answers | Delete all KTO results for this chatbot
[**chatbotChatbotIDKtoAnswersGet**](KTOApi.md#chatbotChatbotIDKtoAnswersGet) | **GET** /chatbot/{chatbotID}/kto_answers | Get all KTO results
[**chatbotChatbotIDKtoAnswersResultKTOResultDelete**](KTOApi.md#chatbotChatbotIDKtoAnswersResultKTOResultDelete) | **DELETE** /chatbot/{chatbotID}/kto_answers/result/{KTOResult} | Delete a specific KTO result for this chatbot
[**chatbotChatbotIDKtoQuestionsDelete**](KTOApi.md#chatbotChatbotIDKtoQuestionsDelete) | **DELETE** /chatbot/{chatbotID}/kto_questions | Delete all questions for this chatbot
[**chatbotChatbotIDKtoQuestionsKTOquestionIDDelete**](KTOApi.md#chatbotChatbotIDKtoQuestionsKTOquestionIDDelete) | **DELETE** /chatbot/{chatbotID}/kto_questions/{KTOquestionID} | Delete all questions for this chatbot
[**chatbotChatbotIDKtoQuestionsPost**](KTOApi.md#chatbotChatbotIDKtoQuestionsPost) | **POST** /chatbot/{chatbotID}/kto_questions | Create all KTO questions
[**chatbotChatbotIDKtoStatisticsGet**](KTOApi.md#chatbotChatbotIDKtoStatisticsGet) | **GET** /chatbot/{chatbotID}/kto_statistics/ | Get the KTO statistics
[**ktoAnswersPost**](KTOApi.md#ktoAnswersPost) | **POST** /kto_answers | Post an answer to a KTOQuestion (Public)
[**ktoQuestionsGet**](KTOApi.md#ktoQuestionsGet) | **GET** /kto_questions | Get all defined KTO questions for this chatbot



## chatbotChatbotIDKtoAnswersDelete

> chatbotChatbotIDKtoAnswersDelete($chatbot_id)

Delete all KTO results for this chatbot

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\KTOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.

try {
    $apiInstance->chatbotChatbotIDKtoAnswersDelete($chatbot_id);
} catch (Exception $e) {
    echo 'Exception when calling KTOApi->chatbotChatbotIDKtoAnswersDelete: ', $e->getMessage(), PHP_EOL;
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


## chatbotChatbotIDKtoAnswersGet

> \OpenAPI\Client\Model\KTOResult[] chatbotChatbotIDKtoAnswersGet($chatbot_id)

Get all KTO results

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\KTOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.

try {
    $result = $apiInstance->chatbotChatbotIDKtoAnswersGet($chatbot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KTOApi->chatbotChatbotIDKtoAnswersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |

### Return type

[**\OpenAPI\Client\Model\KTOResult[]**](../Model/KTOResult.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## chatbotChatbotIDKtoAnswersResultKTOResultDelete

> chatbotChatbotIDKtoAnswersResultKTOResultDelete($chatbot_id, $kto_result)

Delete a specific KTO result for this chatbot

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\KTOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.
$kto_result = 'kto_result_example'; // string | Pass in a KTOResult to identify the KTO result.

try {
    $apiInstance->chatbotChatbotIDKtoAnswersResultKTOResultDelete($chatbot_id, $kto_result);
} catch (Exception $e) {
    echo 'Exception when calling KTOApi->chatbotChatbotIDKtoAnswersResultKTOResultDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |
 **kto_result** | **string**| Pass in a KTOResult to identify the KTO result. |

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


## chatbotChatbotIDKtoQuestionsDelete

> chatbotChatbotIDKtoQuestionsDelete($chatbot_id)

Delete all questions for this chatbot

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\KTOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.

try {
    $apiInstance->chatbotChatbotIDKtoQuestionsDelete($chatbot_id);
} catch (Exception $e) {
    echo 'Exception when calling KTOApi->chatbotChatbotIDKtoQuestionsDelete: ', $e->getMessage(), PHP_EOL;
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


## chatbotChatbotIDKtoQuestionsKTOquestionIDDelete

> chatbotChatbotIDKtoQuestionsKTOquestionIDDelete($chatbot_id, $kt_oquestion_id)

Delete all questions for this chatbot

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\KTOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.
$kt_oquestion_id = 'kt_oquestion_id_example'; // string | Pass in a KTOquestionID to identify the KTOquestion.

try {
    $apiInstance->chatbotChatbotIDKtoQuestionsKTOquestionIDDelete($chatbot_id, $kt_oquestion_id);
} catch (Exception $e) {
    echo 'Exception when calling KTOApi->chatbotChatbotIDKtoQuestionsKTOquestionIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |
 **kt_oquestion_id** | **string**| Pass in a KTOquestionID to identify the KTOquestion. |

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


## chatbotChatbotIDKtoQuestionsPost

> \OpenAPI\Client\Model\KTOQuestion[] chatbotChatbotIDKtoQuestionsPost($chatbot_id, $kto_question)

Create all KTO questions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\KTOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.
$kto_question = array(new \OpenAPI\Client\Model\array()); // \OpenAPI\Client\Model\KTOQuestion[] | 

try {
    $result = $apiInstance->chatbotChatbotIDKtoQuestionsPost($chatbot_id, $kto_question);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KTOApi->chatbotChatbotIDKtoQuestionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |
 **kto_question** | [**\OpenAPI\Client\Model\KTOQuestion[]**](../Model/array.md)|  |

### Return type

[**\OpenAPI\Client\Model\KTOQuestion[]**](../Model/KTOQuestion.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## chatbotChatbotIDKtoStatisticsGet

> chatbotChatbotIDKtoStatisticsGet($chatbot_id)

Get the KTO statistics

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\KTOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.

try {
    $apiInstance->chatbotChatbotIDKtoStatisticsGet($chatbot_id);
} catch (Exception $e) {
    echo 'Exception when calling KTOApi->chatbotChatbotIDKtoStatisticsGet: ', $e->getMessage(), PHP_EOL;
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


## ktoAnswersPost

> \OpenAPI\Client\Model\KTOResult ktoAnswersPost($kto_result)

Post an answer to a KTOQuestion (Public)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\KTOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$kto_result = new \OpenAPI\Client\Model\KTOResult(); // \OpenAPI\Client\Model\KTOResult | 

try {
    $result = $apiInstance->ktoAnswersPost($kto_result);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KTOApi->ktoAnswersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kto_result** | [**\OpenAPI\Client\Model\KTOResult**](../Model/KTOResult.md)|  |

### Return type

[**\OpenAPI\Client\Model\KTOResult**](../Model/KTOResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## ktoQuestionsGet

> \OpenAPI\Client\Model\KTOQuestion[] ktoQuestionsGet($chatbot_id, $lang_code)

Get all defined KTO questions for this chatbot

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\KTOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.
$lang_code = 'lang_code_example'; // string | Pass in a chatbotID to identify the chatbot.

try {
    $result = $apiInstance->ktoQuestionsGet($chatbot_id, $lang_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KTOApi->ktoQuestionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |
 **lang_code** | **string**| Pass in a chatbotID to identify the chatbot. |

### Return type

[**\OpenAPI\Client\Model\KTOQuestion[]**](../Model/KTOQuestion.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

