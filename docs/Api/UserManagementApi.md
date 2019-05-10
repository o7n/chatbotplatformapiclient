# OpenAPI\Client\UserManagementApi

All URIs are relative to *https://chatbots.obilytics.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**projectProjectIDInviteGet**](UserManagementApi.md#projectProjectIDInviteGet) | **GET** /project/{projectID}/invite | Get all invites
[**projectProjectIDInviteUserPost**](UserManagementApi.md#projectProjectIDInviteUserPost) | **POST** /project/{projectID}/invite/user | Invites a person to create an account
[**projectProjectIDInviteeInviteIDDelete**](UserManagementApi.md#projectProjectIDInviteeInviteIDDelete) | **DELETE** /project/{projectID}/invitee/{inviteID} | Delete a sepcific invite
[**projectProjectIDInviteeInviteIDGet**](UserManagementApi.md#projectProjectIDInviteeInviteIDGet) | **GET** /project/{projectID}/invitee/{inviteID} | Get a specific invite
[**projectProjectIDUsersGet**](UserManagementApi.md#projectProjectIDUsersGet) | **GET** /project/{projectID}/users | Returns all users
[**projectProjectIDUsersUserIDDelete**](UserManagementApi.md#projectProjectIDUsersUserIDDelete) | **DELETE** /project/{projectID}/users/{userID} | Delete a specific user
[**projectProjectIDUsersUserIDGet**](UserManagementApi.md#projectProjectIDUsersUserIDGet) | **GET** /project/{projectID}/users/{userID} | Returns a specific user
[**projectProjectIDUsersUserIDRolePut**](UserManagementApi.md#projectProjectIDUsersUserIDRolePut) | **PUT** /project/{projectID}/users/{userID}/role | Modifies the role of an user
[**userMeGet**](UserManagementApi.md#userMeGet) | **GET** /user/me | Returns your user object
[**userUserIDGet**](UserManagementApi.md#userUserIDGet) | **GET** /user/{userID} | Returns a user



## projectProjectIDInviteGet

> \OpenAPI\Client\Model\Invitation[] projectProjectIDInviteGet($project_id)

Get all invites

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Pass in a projectID to identify the project.

try {
    $result = $apiInstance->projectProjectIDInviteGet($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->projectProjectIDInviteGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Pass in a projectID to identify the project. |

### Return type

[**\OpenAPI\Client\Model\Invitation[]**](../Model/Invitation.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## projectProjectIDInviteUserPost

> projectProjectIDInviteUserPost($project_id, $invitation)

Invites a person to create an account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Pass in a projectID to identify the project.
$invitation = new \OpenAPI\Client\Model\Invitation(); // \OpenAPI\Client\Model\Invitation | 

try {
    $apiInstance->projectProjectIDInviteUserPost($project_id, $invitation);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->projectProjectIDInviteUserPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Pass in a projectID to identify the project. |
 **invitation** | [**\OpenAPI\Client\Model\Invitation**](../Model/Invitation.md)|  |

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


## projectProjectIDInviteeInviteIDDelete

> projectProjectIDInviteeInviteIDDelete($project_id, $invite_id)

Delete a sepcific invite

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Pass in a projectID to identify the project.
$invite_id = 'invite_id_example'; // string | Pass in a inviteID to identify the project.

try {
    $apiInstance->projectProjectIDInviteeInviteIDDelete($project_id, $invite_id);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->projectProjectIDInviteeInviteIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Pass in a projectID to identify the project. |
 **invite_id** | **string**| Pass in a inviteID to identify the project. |

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


## projectProjectIDInviteeInviteIDGet

> \OpenAPI\Client\Model\Invitation[] projectProjectIDInviteeInviteIDGet($project_id, $invite_id)

Get a specific invite

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Pass in a projectID to identify the project.
$invite_id = 'invite_id_example'; // string | Pass in a inviteID to identify the project.

try {
    $result = $apiInstance->projectProjectIDInviteeInviteIDGet($project_id, $invite_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->projectProjectIDInviteeInviteIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Pass in a projectID to identify the project. |
 **invite_id** | **string**| Pass in a inviteID to identify the project. |

### Return type

[**\OpenAPI\Client\Model\Invitation[]**](../Model/Invitation.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## projectProjectIDUsersGet

> \OpenAPI\Client\Model\User[] projectProjectIDUsersGet($project_id)

Returns all users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Pass in a projectID to identify the project.

try {
    $result = $apiInstance->projectProjectIDUsersGet($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->projectProjectIDUsersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Pass in a projectID to identify the project. |

### Return type

[**\OpenAPI\Client\Model\User[]**](../Model/User.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## projectProjectIDUsersUserIDDelete

> projectProjectIDUsersUserIDDelete($project_id, $user_id)

Delete a specific user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Pass in a projectID to identify the project.
$user_id = 'user_id_example'; // string | Pass in a userID to identify the user.

try {
    $apiInstance->projectProjectIDUsersUserIDDelete($project_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->projectProjectIDUsersUserIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Pass in a projectID to identify the project. |
 **user_id** | **string**| Pass in a userID to identify the user. |

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


## projectProjectIDUsersUserIDGet

> \OpenAPI\Client\Model\User[] projectProjectIDUsersUserIDGet($project_id, $user_id)

Returns a specific user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Pass in a projectID to identify the project.
$user_id = 'user_id_example'; // string | Pass in a userID to identify the user.

try {
    $result = $apiInstance->projectProjectIDUsersUserIDGet($project_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->projectProjectIDUsersUserIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Pass in a projectID to identify the project. |
 **user_id** | **string**| Pass in a userID to identify the user. |

### Return type

[**\OpenAPI\Client\Model\User[]**](../Model/User.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## projectProjectIDUsersUserIDRolePut

> \OpenAPI\Client\Model\User[] projectProjectIDUsersUserIDRolePut($project_id, $user_id)

Modifies the role of an user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Pass in a projectID to identify the project.
$user_id = 'user_id_example'; // string | Pass in a userID to identify the user.

try {
    $result = $apiInstance->projectProjectIDUsersUserIDRolePut($project_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->projectProjectIDUsersUserIDRolePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Pass in a projectID to identify the project. |
 **user_id** | **string**| Pass in a userID to identify the user. |

### Return type

[**\OpenAPI\Client\Model\User[]**](../Model/User.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## userMeGet

> \OpenAPI\Client\Model\User userMeGet()

Returns your user object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->userMeGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->userMeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## userUserIDGet

> \OpenAPI\Client\Model\User userUserIDGet($user_id)

Returns a user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | Pass in a userID to identify the user.

try {
    $result = $apiInstance->userUserIDGet($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->userUserIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| Pass in a userID to identify the user. |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

