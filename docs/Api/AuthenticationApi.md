# OpenAPI\Client\AuthenticationApi

All URIs are relative to *https://chatbots.obilytics.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**loginPost**](AuthenticationApi.md#loginPost) | **POST** /login | Returns JWT token
[**registerPost**](AuthenticationApi.md#registerPost) | **POST** /register | Creates an user account givin a registration
[**userChangepasswordPost**](AuthenticationApi.md#userChangepasswordPost) | **POST** /user/changepassword | Changes your password



## loginPost

> \OpenAPI\Client\Model\Token loginPost($login_credentials)

Returns JWT token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$login_credentials = new \OpenAPI\Client\Model\LoginCredentials(); // \OpenAPI\Client\Model\LoginCredentials | 

try {
    $result = $apiInstance->loginPost($login_credentials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->loginPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login_credentials** | [**\OpenAPI\Client\Model\LoginCredentials**](../Model/LoginCredentials.md)|  |

### Return type

[**\OpenAPI\Client\Model\Token**](../Model/Token.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## registerPost

> registerPost($registration)

Creates an user account givin a registration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$registration = new \OpenAPI\Client\Model\Registration(); // \OpenAPI\Client\Model\Registration | 

try {
    $apiInstance->registerPost($registration);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->registerPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration** | [**\OpenAPI\Client\Model\Registration**](../Model/Registration.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## userChangepasswordPost

> userChangepasswordPost($new_password)

Changes your password

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_password = new \OpenAPI\Client\Model\NewPassword(); // \OpenAPI\Client\Model\NewPassword | 

try {
    $apiInstance->userChangepasswordPost($new_password);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->userChangepasswordPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_password** | [**\OpenAPI\Client\Model\NewPassword**](../Model/NewPassword.md)|  |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

