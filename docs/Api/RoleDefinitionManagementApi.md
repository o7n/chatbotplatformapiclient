# OpenAPI\Client\RoleDefinitionManagementApi

All URIs are relative to *https://chatbots.obilytics.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**chatbotChatbotIDRulesRuleIDPut**](RoleDefinitionManagementApi.md#chatbotChatbotIDRulesRuleIDPut) | **PUT** /chatbot/{chatbotID}/rules/{ruleID} | Modifies a role definition
[**projectProjectIDRolesGet**](RoleDefinitionManagementApi.md#projectProjectIDRolesGet) | **GET** /project/{projectID}/roles | Returns all role definitions
[**projectProjectIDRolesPost**](RoleDefinitionManagementApi.md#projectProjectIDRolesPost) | **POST** /project/{projectID}/roles | Creates an empty role definition
[**projectProjectIDRolesPut**](RoleDefinitionManagementApi.md#projectProjectIDRolesPut) | **PUT** /project/{projectID}/roles | Modifies a role definition
[**projectProjectIDRolesRoleIDDelete**](RoleDefinitionManagementApi.md#projectProjectIDRolesRoleIDDelete) | **DELETE** /project/{projectID}/roles/{roleID} | Delete a role definition



## chatbotChatbotIDRulesRuleIDPut

> \OpenAPI\Client\Model\RoleDict chatbotChatbotIDRulesRuleIDPut($chatbot_id, $rule_id, $update_role_dict)

Modifies a role definition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RoleDefinitionManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the project.
$rule_id = 'rule_id_example'; // string | Pass in a ruleID to identify the project.
$update_role_dict = new \OpenAPI\Client\Model\UpdateRoleDict(); // \OpenAPI\Client\Model\UpdateRoleDict | 

try {
    $result = $apiInstance->chatbotChatbotIDRulesRuleIDPut($chatbot_id, $rule_id, $update_role_dict);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleDefinitionManagementApi->chatbotChatbotIDRulesRuleIDPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the project. |
 **rule_id** | **string**| Pass in a ruleID to identify the project. |
 **update_role_dict** | [**\OpenAPI\Client\Model\UpdateRoleDict**](../Model/UpdateRoleDict.md)|  |

### Return type

[**\OpenAPI\Client\Model\RoleDict**](../Model/RoleDict.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## projectProjectIDRolesGet

> \OpenAPI\Client\Model\RoleDict[] projectProjectIDRolesGet($project_id)

Returns all role definitions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RoleDefinitionManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Pass in a projectID to identify the project.

try {
    $result = $apiInstance->projectProjectIDRolesGet($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleDefinitionManagementApi->projectProjectIDRolesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Pass in a projectID to identify the project. |

### Return type

[**\OpenAPI\Client\Model\RoleDict[]**](../Model/RoleDict.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## projectProjectIDRolesPost

> \OpenAPI\Client\Model\RoleDict projectProjectIDRolesPost($project_id, $new_role_dict)

Creates an empty role definition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RoleDefinitionManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Pass in a projectID to identify the project.
$new_role_dict = new \OpenAPI\Client\Model\NewRoleDict(); // \OpenAPI\Client\Model\NewRoleDict | 

try {
    $result = $apiInstance->projectProjectIDRolesPost($project_id, $new_role_dict);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleDefinitionManagementApi->projectProjectIDRolesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Pass in a projectID to identify the project. |
 **new_role_dict** | [**\OpenAPI\Client\Model\NewRoleDict**](../Model/NewRoleDict.md)|  |

### Return type

[**\OpenAPI\Client\Model\RoleDict**](../Model/RoleDict.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## projectProjectIDRolesPut

> \OpenAPI\Client\Model\RoleDict projectProjectIDRolesPut($project_id, $update_role_dict)

Modifies a role definition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RoleDefinitionManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Pass in a projectID to identify the project.
$update_role_dict = new \OpenAPI\Client\Model\UpdateRoleDict(); // \OpenAPI\Client\Model\UpdateRoleDict | 

try {
    $result = $apiInstance->projectProjectIDRolesPut($project_id, $update_role_dict);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleDefinitionManagementApi->projectProjectIDRolesPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Pass in a projectID to identify the project. |
 **update_role_dict** | [**\OpenAPI\Client\Model\UpdateRoleDict**](../Model/UpdateRoleDict.md)|  |

### Return type

[**\OpenAPI\Client\Model\RoleDict**](../Model/RoleDict.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## projectProjectIDRolesRoleIDDelete

> projectProjectIDRolesRoleIDDelete($project_id, $role_id)

Delete a role definition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RoleDefinitionManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Pass in a projectID to identify the project.
$role_id = 'role_id_example'; // string | Pass in a roleID to identify the role.

try {
    $apiInstance->projectProjectIDRolesRoleIDDelete($project_id, $role_id);
} catch (Exception $e) {
    echo 'Exception when calling RoleDefinitionManagementApi->projectProjectIDRolesRoleIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Pass in a projectID to identify the project. |
 **role_id** | **string**| Pass in a roleID to identify the role. |

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

