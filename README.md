# OpenAPIClient-php

Documentation for the OBI4wan BOTS API.

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 1.0.0
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://chatbots.obilytics.com/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthenticationApi* | [**loginPost**](docs/Api/AuthenticationApi.md#loginpost) | **POST** /login | Returns JWT token
*AuthenticationApi* | [**registerPost**](docs/Api/AuthenticationApi.md#registerpost) | **POST** /register | Creates an user account givin a registration
*AuthenticationApi* | [**userChangepasswordPost**](docs/Api/AuthenticationApi.md#userchangepasswordpost) | **POST** /user/changepassword | Changes your password
*BusinessRulesApi* | [**chatbotChatbotIDRulesDelete**](docs/Api/BusinessRulesApi.md#chatbotchatbotidrulesdelete) | **DELETE** /chatbot/{chatbotID}/rules | Delete a all rules
*BusinessRulesApi* | [**chatbotChatbotIDRulesGet**](docs/Api/BusinessRulesApi.md#chatbotchatbotidrulesget) | **GET** /chatbot/{chatbotID}/rules | Returns all rules
*BusinessRulesApi* | [**chatbotChatbotIDRulesPost**](docs/Api/BusinessRulesApi.md#chatbotchatbotidrulespost) | **POST** /chatbot/{chatbotID}/rules | Create a specific rules
*BusinessRulesApi* | [**chatbotChatbotIDRulesRuleIDDelete**](docs/Api/BusinessRulesApi.md#chatbotchatbotidrulesruleiddelete) | **DELETE** /chatbot/{chatbotID}/rules/{ruleID} | Delete a specific rule
*BusinessRulesApi* | [**chatbotChatbotIDRulesRuleIDGet**](docs/Api/BusinessRulesApi.md#chatbotchatbotidrulesruleidget) | **GET** /chatbot/{chatbotID}/rules/{ruleID} | Get a specific rules
*ChatApi* | [**chatbotChatbotIDChatSessionIDGet**](docs/Api/ChatApi.md#chatbotchatbotidchatsessionidget) | **GET** /chatbot/{chatbotID}/chat/{sessionID} | Continue a chat given a sessionID
*ChatApi* | [**chatbotChatbotIDUnderstandGet**](docs/Api/ChatApi.md#chatbotchatbotidunderstandget) | **GET** /chatbot/{chatbotID}/understand | Get a understanding response
*ChatApi* | [**publicGet**](docs/Api/ChatApi.md#publicget) | **GET** /public | Chat
*ChatbotApi* | [**chatbotChatbotIDDelete**](docs/Api/ChatbotApi.md#chatbotchatbotiddelete) | **DELETE** /chatbot/{chatbotID} | Delete a chatbots
*ChatbotApi* | [**chatbotChatbotIDDeployPost**](docs/Api/ChatbotApi.md#chatbotchatbotiddeploypost) | **POST** /chatbot/{chatbotID}/deploy | Deploys a chatbot
*ChatbotApi* | [**chatbotChatbotIDExportGet**](docs/Api/ChatbotApi.md#chatbotchatbotidexportget) | **GET** /chatbot/{chatbotID}/export | Creates an export of the chatbot including all the examples, expressions and regex
*ChatbotApi* | [**chatbotChatbotIDGet**](docs/Api/ChatbotApi.md#chatbotchatbotidget) | **GET** /chatbot/{chatbotID} | Returns a specific Chatbot
*ChatbotApi* | [**chatbotChatbotIDPut**](docs/Api/ChatbotApi.md#chatbotchatbotidput) | **PUT** /chatbot/{chatbotID} | Modiefies an existing chatbot
*ChatbotApi* | [**chatbotGet**](docs/Api/ChatbotApi.md#chatbotget) | **GET** /chatbot | Returns all Chatbots
*ChatbotApi* | [**chatbotImportPost**](docs/Api/ChatbotApi.md#chatbotimportpost) | **POST** /chatbot/import | Create a complete chatbot from a dictionary
*ChatbotApi* | [**chatbotPost**](docs/Api/ChatbotApi.md#chatbotpost) | **POST** /chatbot | Create an empty chatbot
*ConversationsApi* | [**chatbotChatbotIDConversationsConversationIDDelete**](docs/Api/ConversationsApi.md#chatbotchatbotidconversationsconversationiddelete) | **DELETE** /chatbot/{chatbotID}/conversations/{conversationID} | Delete a specific Conversations
*ConversationsApi* | [**chatbotChatbotIDConversationsConversationIDGet**](docs/Api/ConversationsApi.md#chatbotchatbotidconversationsconversationidget) | **GET** /chatbot/{chatbotID}/conversations/{conversationID} | Get a specific Conversations
*ConversationsApi* | [**chatbotChatbotIDConversationsConversationIDPut**](docs/Api/ConversationsApi.md#chatbotchatbotidconversationsconversationidput) | **PUT** /chatbot/{chatbotID}/conversations/{conversationID} | Returns a specific Conversations
*ConversationsApi* | [**chatbotChatbotIDConversationsDelete**](docs/Api/ConversationsApi.md#chatbotchatbotidconversationsdelete) | **DELETE** /chatbot/{chatbotID}/conversations | Delete a all Conversations
*ConversationsApi* | [**chatbotChatbotIDConversationsGet**](docs/Api/ConversationsApi.md#chatbotchatbotidconversationsget) | **GET** /chatbot/{chatbotID}/conversations | Returns all Conversations
*ConversationsApi* | [**chatbotChatbotIDConversationsPost**](docs/Api/ConversationsApi.md#chatbotchatbotidconversationspost) | **POST** /chatbot/{chatbotID}/conversations | Create a specific Conversations
*ConversationsApi* | [**chatbotChatbotIDTurnsTurnIdPut**](docs/Api/ConversationsApi.md#chatbotchatbotidturnsturnidput) | **PUT** /chatbot/{chatbotID}/turns/{turnId} | Modifies a turn
*ExamplesApi* | [**chatbotChatbotIDEntityStatisticsGet**](docs/Api/ExamplesApi.md#chatbotchatbotidentitystatisticsget) | **GET** /chatbot/{chatbotID}/entity_statistics | Get statistics per entity
*ExamplesApi* | [**chatbotChatbotIDExamplesDelete**](docs/Api/ExamplesApi.md#chatbotchatbotidexamplesdelete) | **DELETE** /chatbot/{chatbotID}/examples | Delete a all training examples
*ExamplesApi* | [**chatbotChatbotIDExamplesExampleIDDelete**](docs/Api/ExamplesApi.md#chatbotchatbotidexamplesexampleiddelete) | **DELETE** /chatbot/{chatbotID}/examples/{exampleID} | Delete a specific training example
*ExamplesApi* | [**chatbotChatbotIDExamplesExampleIDGet**](docs/Api/ExamplesApi.md#chatbotchatbotidexamplesexampleidget) | **GET** /chatbot/{chatbotID}/examples/{exampleID} | Get a specific training example
*ExamplesApi* | [**chatbotChatbotIDExamplesExampleIDPut**](docs/Api/ExamplesApi.md#chatbotchatbotidexamplesexampleidput) | **PUT** /chatbot/{chatbotID}/examples/{exampleID} | Returns a specific examples
*ExamplesApi* | [**chatbotChatbotIDExamplesGet**](docs/Api/ExamplesApi.md#chatbotchatbotidexamplesget) | **GET** /chatbot/{chatbotID}/examples | Returns all training examples
*ExamplesApi* | [**chatbotChatbotIDExamplesPost**](docs/Api/ExamplesApi.md#chatbotchatbotidexamplespost) | **POST** /chatbot/{chatbotID}/examples | Create a specific training example
*ExamplesApi* | [**chatbotChatbotIDIntentStatisticsGet**](docs/Api/ExamplesApi.md#chatbotchatbotidintentstatisticsget) | **GET** /chatbot/{chatbotID}/intent_statistics | Get statistics per intent
*ExpressionApi* | [**chatbotChatbotIDExpressionsDelete**](docs/Api/ExpressionApi.md#chatbotchatbotidexpressionsdelete) | **DELETE** /chatbot/{chatbotID}/expressions | Delete a all training Expression
*ExpressionApi* | [**chatbotChatbotIDExpressionsExpressionIDDelete**](docs/Api/ExpressionApi.md#chatbotchatbotidexpressionsexpressioniddelete) | **DELETE** /chatbot/{chatbotID}/expressions/{expressionID} | Delete a specific training expression
*ExpressionApi* | [**chatbotChatbotIDExpressionsExpressionIDGet**](docs/Api/ExpressionApi.md#chatbotchatbotidexpressionsexpressionidget) | **GET** /chatbot/{chatbotID}/expressions/{expressionID} | Get a specific training expression
*ExpressionApi* | [**chatbotChatbotIDExpressionsExpressionIDPut**](docs/Api/ExpressionApi.md#chatbotchatbotidexpressionsexpressionidput) | **PUT** /chatbot/{chatbotID}/expressions/{expressionID} | Returns a specific Expression
*ExpressionApi* | [**chatbotChatbotIDExpressionsGet**](docs/Api/ExpressionApi.md#chatbotchatbotidexpressionsget) | **GET** /chatbot/{chatbotID}/expressions | Returns all training Expression
*ExpressionApi* | [**chatbotChatbotIDExpressionsPost**](docs/Api/ExpressionApi.md#chatbotchatbotidexpressionspost) | **POST** /chatbot/{chatbotID}/expressions | Create a specific training expression
*KTOApi* | [**chatbotChatbotIDKtoAnswersDelete**](docs/Api/KTOApi.md#chatbotchatbotidktoanswersdelete) | **DELETE** /chatbot/{chatbotID}/kto_answers | Delete all KTO results for this chatbot
*KTOApi* | [**chatbotChatbotIDKtoAnswersGet**](docs/Api/KTOApi.md#chatbotchatbotidktoanswersget) | **GET** /chatbot/{chatbotID}/kto_answers | Get all KTO results
*KTOApi* | [**chatbotChatbotIDKtoAnswersResultKTOResultDelete**](docs/Api/KTOApi.md#chatbotchatbotidktoanswersresultktoresultdelete) | **DELETE** /chatbot/{chatbotID}/kto_answers/result/{KTOResult} | Delete a specific KTO result for this chatbot
*KTOApi* | [**chatbotChatbotIDKtoQuestionsDelete**](docs/Api/KTOApi.md#chatbotchatbotidktoquestionsdelete) | **DELETE** /chatbot/{chatbotID}/kto_questions | Delete all questions for this chatbot
*KTOApi* | [**chatbotChatbotIDKtoQuestionsKTOquestionIDDelete**](docs/Api/KTOApi.md#chatbotchatbotidktoquestionsktoquestioniddelete) | **DELETE** /chatbot/{chatbotID}/kto_questions/{KTOquestionID} | Delete all questions for this chatbot
*KTOApi* | [**chatbotChatbotIDKtoQuestionsPost**](docs/Api/KTOApi.md#chatbotchatbotidktoquestionspost) | **POST** /chatbot/{chatbotID}/kto_questions | Create all KTO questions
*KTOApi* | [**chatbotChatbotIDKtoStatisticsGet**](docs/Api/KTOApi.md#chatbotchatbotidktostatisticsget) | **GET** /chatbot/{chatbotID}/kto_statistics/ | Get the KTO statistics
*KTOApi* | [**ktoAnswersPost**](docs/Api/KTOApi.md#ktoanswerspost) | **POST** /kto_answers | Post an answer to a KTOQuestion (Public)
*KTOApi* | [**ktoQuestionsGet**](docs/Api/KTOApi.md#ktoquestionsget) | **GET** /kto_questions | Get all defined KTO questions for this chatbot
*ProjectsApi* | [**chatbotChatbotIDProjectsProjectIDGet**](docs/Api/ProjectsApi.md#chatbotchatbotidprojectsprojectidget) | **GET** /chatbot/{chatbotID}/projects/{projectID} | Get a specific project
*ProjectsApi* | [**projectsPost**](docs/Api/ProjectsApi.md#projectspost) | **POST** /projects | Create a project with a username, password and role definition
*RegexApi* | [**chatbotChatbotIDRegexDelete**](docs/Api/RegexApi.md#chatbotchatbotidregexdelete) | **DELETE** /chatbot/{chatbotID}/regex | Delete a all training regex
*RegexApi* | [**chatbotChatbotIDRegexGet**](docs/Api/RegexApi.md#chatbotchatbotidregexget) | **GET** /chatbot/{chatbotID}/regex | Returns all training regex
*RegexApi* | [**chatbotChatbotIDRegexPost**](docs/Api/RegexApi.md#chatbotchatbotidregexpost) | **POST** /chatbot/{chatbotID}/regex | Create a specific training regex
*RegexApi* | [**chatbotChatbotIDRegexRegexIDDelete**](docs/Api/RegexApi.md#chatbotchatbotidregexregexiddelete) | **DELETE** /chatbot/{chatbotID}/regex/{RegexID} | Delete a specific training regex
*RegexApi* | [**chatbotChatbotIDRegexRegexIDGet**](docs/Api/RegexApi.md#chatbotchatbotidregexregexidget) | **GET** /chatbot/{chatbotID}/regex/{RegexID} | Get a specific training regex
*RegexApi* | [**chatbotChatbotIDRegexRegexIDPut**](docs/Api/RegexApi.md#chatbotchatbotidregexregexidput) | **PUT** /chatbot/{chatbotID}/regex/{RegexID} | Returns a specific Regex
*RoleDefinitionManagementApi* | [**chatbotChatbotIDRulesRuleIDPut**](docs/Api/RoleDefinitionManagementApi.md#chatbotchatbotidrulesruleidput) | **PUT** /chatbot/{chatbotID}/rules/{ruleID} | Modifies a role definition
*RoleDefinitionManagementApi* | [**projectProjectIDRolesGet**](docs/Api/RoleDefinitionManagementApi.md#projectprojectidrolesget) | **GET** /project/{projectID}/roles | Returns all role definitions
*RoleDefinitionManagementApi* | [**projectProjectIDRolesPost**](docs/Api/RoleDefinitionManagementApi.md#projectprojectidrolespost) | **POST** /project/{projectID}/roles | Creates an empty role definition
*RoleDefinitionManagementApi* | [**projectProjectIDRolesPut**](docs/Api/RoleDefinitionManagementApi.md#projectprojectidrolesput) | **PUT** /project/{projectID}/roles | Modifies a role definition
*RoleDefinitionManagementApi* | [**projectProjectIDRolesRoleIDDelete**](docs/Api/RoleDefinitionManagementApi.md#projectprojectidrolesroleiddelete) | **DELETE** /project/{projectID}/roles/{roleID} | Delete a role definition
*SessionsApi* | [**chatbotChatbotIDSessionsGet**](docs/Api/SessionsApi.md#chatbotchatbotidsessionsget) | **GET** /chatbot/{chatbotID}/sessions | Returns all training sessions
*SessionsApi* | [**chatbotChatbotIDSessionsPost**](docs/Api/SessionsApi.md#chatbotchatbotidsessionspost) | **POST** /chatbot/{chatbotID}/sessions | Create a session
*SessionsApi* | [**chatbotChatbotIDSessionsSessionIdDelete**](docs/Api/SessionsApi.md#chatbotchatbotidsessionssessioniddelete) | **DELETE** /chatbot/{chatbotID}/sessions/{sessionId} | Delete a specific session
*SessionsApi* | [**chatbotChatbotIDSessionsSessionIdGet**](docs/Api/SessionsApi.md#chatbotchatbotidsessionssessionidget) | **GET** /chatbot/{chatbotID}/sessions/{sessionId} | Get a specific session
*SessionsApi* | [**chatbotChatbotIDSessionsSessionIdPut**](docs/Api/SessionsApi.md#chatbotchatbotidsessionssessionidput) | **PUT** /chatbot/{chatbotID}/sessions/{sessionId} | Returns a specific sessions
*SessionsApi* | [**publicPost**](docs/Api/SessionsApi.md#publicpost) | **POST** /public | Create a session
*TestExamplesApi* | [**chatbotChatbotIDRegexTestPost**](docs/Api/TestExamplesApi.md#chatbotchatbotidregextestpost) | **POST** /chatbot/{chatbotID}/regex/test | Test all regex in test examples
*TestExamplesApi* | [**chatbotChatbotIDTestsDelete**](docs/Api/TestExamplesApi.md#chatbotchatbotidtestsdelete) | **DELETE** /chatbot/{chatbotID}/tests | Delete all test examples
*TestExamplesApi* | [**chatbotChatbotIDTestsExampleIDDelete**](docs/Api/TestExamplesApi.md#chatbotchatbotidtestsexampleiddelete) | **DELETE** /chatbot/{chatbotID}/tests/{exampleID} | Delete a specific Test example
*TestExamplesApi* | [**chatbotChatbotIDTestsExampleIDGet**](docs/Api/TestExamplesApi.md#chatbotchatbotidtestsexampleidget) | **GET** /chatbot/{chatbotID}/tests/{exampleID} | Get a specific Test example
*TestExamplesApi* | [**chatbotChatbotIDTestsExampleIDRunPost**](docs/Api/TestExamplesApi.md#chatbotchatbotidtestsexampleidrunpost) | **POST** /chatbot/{chatbotID}/tests/{exampleID}/run | Run a specific test examplee
*TestExamplesApi* | [**chatbotChatbotIDTestsGet**](docs/Api/TestExamplesApi.md#chatbotchatbotidtestsget) | **GET** /chatbot/{chatbotID}/tests | Returns all test examples
*TestExamplesApi* | [**chatbotChatbotIDTestsPost**](docs/Api/TestExamplesApi.md#chatbotchatbotidtestspost) | **POST** /chatbot/{chatbotID}/tests | Create a specific Test example
*TestExamplesApi* | [**chatbotChatbotIDTestsRunPost**](docs/Api/TestExamplesApi.md#chatbotchatbotidtestsrunpost) | **POST** /chatbot/{chatbotID}/tests/run | Run all test examples
*TrainingApi* | [**chatbotChatbotIDTrainPost**](docs/Api/TrainingApi.md#chatbotchatbotidtrainpost) | **POST** /chatbot/{chatbotID}/train | Train a chatbot
*TrainingApi* | [**chatbotChatbotIDTrainStatusGet**](docs/Api/TrainingApi.md#chatbotchatbotidtrainstatusget) | **GET** /chatbot/{chatbotID}/train/status | Check if the training process is completed.
*UserManagementApi* | [**projectProjectIDInviteGet**](docs/Api/UserManagementApi.md#projectprojectidinviteget) | **GET** /project/{projectID}/invite | Get all invites
*UserManagementApi* | [**projectProjectIDInviteUserPost**](docs/Api/UserManagementApi.md#projectprojectidinviteuserpost) | **POST** /project/{projectID}/invite/user | Invites a person to create an account
*UserManagementApi* | [**projectProjectIDInviteeInviteIDDelete**](docs/Api/UserManagementApi.md#projectprojectidinviteeinviteiddelete) | **DELETE** /project/{projectID}/invitee/{inviteID} | Delete a sepcific invite
*UserManagementApi* | [**projectProjectIDInviteeInviteIDGet**](docs/Api/UserManagementApi.md#projectprojectidinviteeinviteidget) | **GET** /project/{projectID}/invitee/{inviteID} | Get a specific invite
*UserManagementApi* | [**projectProjectIDUsersGet**](docs/Api/UserManagementApi.md#projectprojectidusersget) | **GET** /project/{projectID}/users | Returns all users
*UserManagementApi* | [**projectProjectIDUsersUserIDDelete**](docs/Api/UserManagementApi.md#projectprojectidusersuseriddelete) | **DELETE** /project/{projectID}/users/{userID} | Delete a specific user
*UserManagementApi* | [**projectProjectIDUsersUserIDGet**](docs/Api/UserManagementApi.md#projectprojectidusersuseridget) | **GET** /project/{projectID}/users/{userID} | Returns a specific user
*UserManagementApi* | [**projectProjectIDUsersUserIDRolePut**](docs/Api/UserManagementApi.md#projectprojectidusersuseridroleput) | **PUT** /project/{projectID}/users/{userID}/role | Modifies the role of an user
*UserManagementApi* | [**userMeGet**](docs/Api/UserManagementApi.md#usermeget) | **GET** /user/me | Returns your user object
*UserManagementApi* | [**userUserIDGet**](docs/Api/UserManagementApi.md#useruseridget) | **GET** /user/{userID} | Returns a user


## Documentation For Models

 - [BusinessRule](docs/Model/BusinessRule.md)
 - [BusinessRuleString](docs/Model/BusinessRuleString.md)
 - [ChatInput](docs/Model/ChatInput.md)
 - [Chatbot](docs/Model/Chatbot.md)
 - [CompleteChatbot](docs/Model/CompleteChatbot.md)
 - [Conversation](docs/Model/Conversation.md)
 - [ConversationTurn](docs/Model/ConversationTurn.md)
 - [EmptyChatbot](docs/Model/EmptyChatbot.md)
 - [Entity](docs/Model/Entity.md)
 - [Expression](docs/Model/Expression.md)
 - [Invitation](docs/Model/Invitation.md)
 - [KTOProps](docs/Model/KTOProps.md)
 - [KTOQuestion](docs/Model/KTOQuestion.md)
 - [KTOResult](docs/Model/KTOResult.md)
 - [LanguageModel](docs/Model/LanguageModel.md)
 - [LoginCredentials](docs/Model/LoginCredentials.md)
 - [NewPassword](docs/Model/NewPassword.md)
 - [NewRoleDict](docs/Model/NewRoleDict.md)
 - [Password](docs/Model/Password.md)
 - [Permission](docs/Model/Permission.md)
 - [Project](docs/Model/Project.md)
 - [ProjectIdentification](docs/Model/ProjectIdentification.md)
 - [ProjectWithRole](docs/Model/ProjectWithRole.md)
 - [PublicChatInput](docs/Model/PublicChatInput.md)
 - [PublicCreateSession](docs/Model/PublicCreateSession.md)
 - [RegexFeature](docs/Model/RegexFeature.md)
 - [Registration](docs/Model/Registration.md)
 - [RoleDict](docs/Model/RoleDict.md)
 - [TestExample](docs/Model/TestExample.md)
 - [TestRegexResult](docs/Model/TestRegexResult.md)
 - [TestResult](docs/Model/TestResult.md)
 - [Token](docs/Model/Token.md)
 - [TrainingExample](docs/Model/TrainingExample.md)
 - [TrainingStatus](docs/Model/TrainingStatus.md)
 - [UpdateChatbot](docs/Model/UpdateChatbot.md)
 - [UpdateRoleDict](docs/Model/UpdateRoleDict.md)
 - [User](docs/Model/User.md)
 - [UserSpec](docs/Model/UserSpec.md)


## Documentation For Authorization



## bearerAuth


- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header



## Author



