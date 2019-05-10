<?php
/**
 * ChatApi
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * OBI4wan Bots API
 *
 * Documentation for the OBI4wan BOTS API.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0-beta3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * ChatApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ChatApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation chatbotChatbotIDChatSessionIDGet
     *
     * Continue a chat given a sessionID
     *
     * @param  string $chatbot_id Pass in a chatbotID to identify the chatbot. (required)
     * @param  string $session_id Pass in a sessionID to identify the rules. (required)
     * @param  string $q A message from a user (required)
     * @param  string $platform Facebook, whatsapp, twitter (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function chatbotChatbotIDChatSessionIDGet($chatbot_id, $session_id, $q, $platform)
    {
        list($response) = $this->chatbotChatbotIDChatSessionIDGetWithHttpInfo($chatbot_id, $session_id, $q, $platform);
        return $response;
    }

    /**
     * Operation chatbotChatbotIDChatSessionIDGetWithHttpInfo
     *
     * Continue a chat given a sessionID
     *
     * @param  string $chatbot_id Pass in a chatbotID to identify the chatbot. (required)
     * @param  string $session_id Pass in a sessionID to identify the rules. (required)
     * @param  string $q A message from a user (required)
     * @param  string $platform Facebook, whatsapp, twitter (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function chatbotChatbotIDChatSessionIDGetWithHttpInfo($chatbot_id, $session_id, $q, $platform)
    {
        $request = $this->chatbotChatbotIDChatSessionIDGetRequest($chatbot_id, $session_id, $q, $platform);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('object' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'object';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation chatbotChatbotIDChatSessionIDGetAsync
     *
     * Continue a chat given a sessionID
     *
     * @param  string $chatbot_id Pass in a chatbotID to identify the chatbot. (required)
     * @param  string $session_id Pass in a sessionID to identify the rules. (required)
     * @param  string $q A message from a user (required)
     * @param  string $platform Facebook, whatsapp, twitter (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function chatbotChatbotIDChatSessionIDGetAsync($chatbot_id, $session_id, $q, $platform)
    {
        return $this->chatbotChatbotIDChatSessionIDGetAsyncWithHttpInfo($chatbot_id, $session_id, $q, $platform)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation chatbotChatbotIDChatSessionIDGetAsyncWithHttpInfo
     *
     * Continue a chat given a sessionID
     *
     * @param  string $chatbot_id Pass in a chatbotID to identify the chatbot. (required)
     * @param  string $session_id Pass in a sessionID to identify the rules. (required)
     * @param  string $q A message from a user (required)
     * @param  string $platform Facebook, whatsapp, twitter (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function chatbotChatbotIDChatSessionIDGetAsyncWithHttpInfo($chatbot_id, $session_id, $q, $platform)
    {
        $returnType = 'object';
        $request = $this->chatbotChatbotIDChatSessionIDGetRequest($chatbot_id, $session_id, $q, $platform);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'chatbotChatbotIDChatSessionIDGet'
     *
     * @param  string $chatbot_id Pass in a chatbotID to identify the chatbot. (required)
     * @param  string $session_id Pass in a sessionID to identify the rules. (required)
     * @param  string $q A message from a user (required)
     * @param  string $platform Facebook, whatsapp, twitter (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function chatbotChatbotIDChatSessionIDGetRequest($chatbot_id, $session_id, $q, $platform)
    {
        // verify the required parameter 'chatbot_id' is set
        if ($chatbot_id === null || (is_array($chatbot_id) && count($chatbot_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $chatbot_id when calling chatbotChatbotIDChatSessionIDGet'
            );
        }
        // verify the required parameter 'session_id' is set
        if ($session_id === null || (is_array($session_id) && count($session_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $session_id when calling chatbotChatbotIDChatSessionIDGet'
            );
        }
        // verify the required parameter 'q' is set
        if ($q === null || (is_array($q) && count($q) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $q when calling chatbotChatbotIDChatSessionIDGet'
            );
        }
        // verify the required parameter 'platform' is set
        if ($platform === null || (is_array($platform) && count($platform) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $platform when calling chatbotChatbotIDChatSessionIDGet'
            );
        }

        $resourcePath = '/chatbot/{chatbotID}/chat/{sessionID}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($q !== null) {
            $queryParams['q'] = ObjectSerializer::toQueryValue($q);
        }
        // query params
        if ($platform !== null) {
            $queryParams['platform'] = ObjectSerializer::toQueryValue($platform);
        }

        // path params
        if ($chatbot_id !== null) {
            $resourcePath = str_replace(
                '{' . 'chatbotID' . '}',
                ObjectSerializer::toPathValue($chatbot_id),
                $resourcePath
            );
        }
        // path params
        if ($session_id !== null) {
            $resourcePath = str_replace(
                '{' . 'sessionID' . '}',
                ObjectSerializer::toPathValue($session_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation chatbotChatbotIDUnderstandGet
     *
     * Get a understanding response
     *
     * @param  string $chatbot_id Pass in a chatbotID to identify the chatbot. (required)
     * @param  string $q A message from a user (required)
     * @param  string $platform Facebook, whatsapp, twitter (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function chatbotChatbotIDUnderstandGet($chatbot_id, $q, $platform)
    {
        list($response) = $this->chatbotChatbotIDUnderstandGetWithHttpInfo($chatbot_id, $q, $platform);
        return $response;
    }

    /**
     * Operation chatbotChatbotIDUnderstandGetWithHttpInfo
     *
     * Get a understanding response
     *
     * @param  string $chatbot_id Pass in a chatbotID to identify the chatbot. (required)
     * @param  string $q A message from a user (required)
     * @param  string $platform Facebook, whatsapp, twitter (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function chatbotChatbotIDUnderstandGetWithHttpInfo($chatbot_id, $q, $platform)
    {
        $request = $this->chatbotChatbotIDUnderstandGetRequest($chatbot_id, $q, $platform);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('object' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'object';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation chatbotChatbotIDUnderstandGetAsync
     *
     * Get a understanding response
     *
     * @param  string $chatbot_id Pass in a chatbotID to identify the chatbot. (required)
     * @param  string $q A message from a user (required)
     * @param  string $platform Facebook, whatsapp, twitter (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function chatbotChatbotIDUnderstandGetAsync($chatbot_id, $q, $platform)
    {
        return $this->chatbotChatbotIDUnderstandGetAsyncWithHttpInfo($chatbot_id, $q, $platform)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation chatbotChatbotIDUnderstandGetAsyncWithHttpInfo
     *
     * Get a understanding response
     *
     * @param  string $chatbot_id Pass in a chatbotID to identify the chatbot. (required)
     * @param  string $q A message from a user (required)
     * @param  string $platform Facebook, whatsapp, twitter (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function chatbotChatbotIDUnderstandGetAsyncWithHttpInfo($chatbot_id, $q, $platform)
    {
        $returnType = 'object';
        $request = $this->chatbotChatbotIDUnderstandGetRequest($chatbot_id, $q, $platform);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'chatbotChatbotIDUnderstandGet'
     *
     * @param  string $chatbot_id Pass in a chatbotID to identify the chatbot. (required)
     * @param  string $q A message from a user (required)
     * @param  string $platform Facebook, whatsapp, twitter (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function chatbotChatbotIDUnderstandGetRequest($chatbot_id, $q, $platform)
    {
        // verify the required parameter 'chatbot_id' is set
        if ($chatbot_id === null || (is_array($chatbot_id) && count($chatbot_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $chatbot_id when calling chatbotChatbotIDUnderstandGet'
            );
        }
        // verify the required parameter 'q' is set
        if ($q === null || (is_array($q) && count($q) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $q when calling chatbotChatbotIDUnderstandGet'
            );
        }
        // verify the required parameter 'platform' is set
        if ($platform === null || (is_array($platform) && count($platform) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $platform when calling chatbotChatbotIDUnderstandGet'
            );
        }

        $resourcePath = '/chatbot/{chatbotID}/understand';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($q !== null) {
            $queryParams['q'] = ObjectSerializer::toQueryValue($q);
        }
        // query params
        if ($platform !== null) {
            $queryParams['platform'] = ObjectSerializer::toQueryValue($platform);
        }

        // path params
        if ($chatbot_id !== null) {
            $resourcePath = str_replace(
                '{' . 'chatbotID' . '}',
                ObjectSerializer::toPathValue($chatbot_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation publicGet
     *
     * Chat
     *
     * @param  string $q A message from a user (required)
     * @param  string $platform Facebook, whatsapp, twitter (required)
     * @param  string $chatbot_id ID of the chatbot (required)
     * @param  string $session_id ID of the session (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function publicGet($q, $platform, $chatbot_id, $session_id)
    {
        list($response) = $this->publicGetWithHttpInfo($q, $platform, $chatbot_id, $session_id);
        return $response;
    }

    /**
     * Operation publicGetWithHttpInfo
     *
     * Chat
     *
     * @param  string $q A message from a user (required)
     * @param  string $platform Facebook, whatsapp, twitter (required)
     * @param  string $chatbot_id ID of the chatbot (required)
     * @param  string $session_id ID of the session (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function publicGetWithHttpInfo($q, $platform, $chatbot_id, $session_id)
    {
        $request = $this->publicGetRequest($q, $platform, $chatbot_id, $session_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('object' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'object';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation publicGetAsync
     *
     * Chat
     *
     * @param  string $q A message from a user (required)
     * @param  string $platform Facebook, whatsapp, twitter (required)
     * @param  string $chatbot_id ID of the chatbot (required)
     * @param  string $session_id ID of the session (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function publicGetAsync($q, $platform, $chatbot_id, $session_id)
    {
        return $this->publicGetAsyncWithHttpInfo($q, $platform, $chatbot_id, $session_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation publicGetAsyncWithHttpInfo
     *
     * Chat
     *
     * @param  string $q A message from a user (required)
     * @param  string $platform Facebook, whatsapp, twitter (required)
     * @param  string $chatbot_id ID of the chatbot (required)
     * @param  string $session_id ID of the session (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function publicGetAsyncWithHttpInfo($q, $platform, $chatbot_id, $session_id)
    {
        $returnType = 'object';
        $request = $this->publicGetRequest($q, $platform, $chatbot_id, $session_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'publicGet'
     *
     * @param  string $q A message from a user (required)
     * @param  string $platform Facebook, whatsapp, twitter (required)
     * @param  string $chatbot_id ID of the chatbot (required)
     * @param  string $session_id ID of the session (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function publicGetRequest($q, $platform, $chatbot_id, $session_id)
    {
        // verify the required parameter 'q' is set
        if ($q === null || (is_array($q) && count($q) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $q when calling publicGet'
            );
        }
        // verify the required parameter 'platform' is set
        if ($platform === null || (is_array($platform) && count($platform) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $platform when calling publicGet'
            );
        }
        // verify the required parameter 'chatbot_id' is set
        if ($chatbot_id === null || (is_array($chatbot_id) && count($chatbot_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $chatbot_id when calling publicGet'
            );
        }
        // verify the required parameter 'session_id' is set
        if ($session_id === null || (is_array($session_id) && count($session_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $session_id when calling publicGet'
            );
        }

        $resourcePath = '/public';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($q !== null) {
            $queryParams['q'] = ObjectSerializer::toQueryValue($q);
        }
        // query params
        if ($platform !== null) {
            $queryParams['platform'] = ObjectSerializer::toQueryValue($platform);
        }
        // query params
        if ($chatbot_id !== null) {
            $queryParams['chatbot_id'] = ObjectSerializer::toQueryValue($chatbot_id);
        }
        // query params
        if ($session_id !== null) {
            $queryParams['session_id'] = ObjectSerializer::toQueryValue($session_id);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}