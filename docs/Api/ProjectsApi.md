# OpenAPI\Client\ProjectsApi

All URIs are relative to *https://chatbots.obilytics.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**chatbotChatbotIDProjectsProjectIDGet**](ProjectsApi.md#chatbotChatbotIDProjectsProjectIDGet) | **GET** /chatbot/{chatbotID}/projects/{projectID} | Get a specific project
[**projectsPost**](ProjectsApi.md#projectsPost) | **POST** /projects | Create a project with a username, password and role definition



## chatbotChatbotIDProjectsProjectIDGet

> \OpenAPI\Client\Model\Project chatbotChatbotIDProjectsProjectIDGet($chatbot_id, $project_id)

Get a specific project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string | Pass in a chatbotID to identify the chatbot.
$project_id = 'project_id_example'; // string | Pass in a projectID to identify the projects.

try {
    $result = $apiInstance->chatbotChatbotIDProjectsProjectIDGet($chatbot_id, $project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->chatbotChatbotIDProjectsProjectIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chatbot_id** | **string**| Pass in a chatbotID to identify the chatbot. |
 **project_id** | **string**| Pass in a projectID to identify the projects. |

### Return type

[**\OpenAPI\Client\Model\Project**](../Model/Project.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## projectsPost

> \OpenAPI\Client\Model\ProjectWithRole projectsPost($project_identification)

Create a project with a username, password and role definition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_identification = new \OpenAPI\Client\Model\ProjectIdentification(); // \OpenAPI\Client\Model\ProjectIdentification | 

try {
    $result = $apiInstance->projectsPost($project_identification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_identification** | [**\OpenAPI\Client\Model\ProjectIdentification**](../Model/ProjectIdentification.md)|  |

### Return type

[**\OpenAPI\Client\Model\ProjectWithRole**](../Model/ProjectWithRole.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

