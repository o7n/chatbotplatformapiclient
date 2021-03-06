<?php
/**
 * ConversationTurn
 *
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

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ConversationTurn Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConversationTurn implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConversationTurn';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'text' => 'string',
        'intent' => 'string',
        'entities' => '\OpenAPI\Client\Model\Entity[]',
        'ask_entities' => 'string[]',
        'lang_code' => 'string',
        'author' => 'string',
        'response' => 'string',
        'entity' => 'string',
        'condition' => 'string',
        'quick_replies' => 'string[]',
        'conversations' => 'string[]',
        'params' => 'object',
        'preconditions' => 'string[]',
        'actions' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'text' => null,
        'intent' => null,
        'entities' => null,
        'ask_entities' => null,
        'lang_code' => null,
        'author' => null,
        'response' => null,
        'entity' => null,
        'condition' => null,
        'quick_replies' => null,
        'conversations' => null,
        'params' => null,
        'preconditions' => null,
        'actions' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'text' => 'text',
        'intent' => 'intent',
        'entities' => 'entities',
        'ask_entities' => 'ask_entities',
        'lang_code' => 'lang_code',
        'author' => 'author',
        'response' => 'response',
        'entity' => 'entity',
        'condition' => 'condition',
        'quick_replies' => 'quick_replies',
        'conversations' => 'conversations',
        'params' => 'params',
        'preconditions' => 'preconditions',
        'actions' => 'actions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'text' => 'setText',
        'intent' => 'setIntent',
        'entities' => 'setEntities',
        'ask_entities' => 'setAskEntities',
        'lang_code' => 'setLangCode',
        'author' => 'setAuthor',
        'response' => 'setResponse',
        'entity' => 'setEntity',
        'condition' => 'setCondition',
        'quick_replies' => 'setQuickReplies',
        'conversations' => 'setConversations',
        'params' => 'setParams',
        'preconditions' => 'setPreconditions',
        'actions' => 'setActions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'text' => 'getText',
        'intent' => 'getIntent',
        'entities' => 'getEntities',
        'ask_entities' => 'getAskEntities',
        'lang_code' => 'getLangCode',
        'author' => 'getAuthor',
        'response' => 'getResponse',
        'entity' => 'getEntity',
        'condition' => 'getCondition',
        'quick_replies' => 'getQuickReplies',
        'conversations' => 'getConversations',
        'params' => 'getParams',
        'preconditions' => 'getPreconditions',
        'actions' => 'getActions'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const AUTHOR_BOT = 'bot';
    const AUTHOR_USER = 'user';
    const RESPONSE_REPLY = 'reply';
    const RESPONSE_QUESTION = 'question';
    const RESPONSE_YES_NO_QUESTION = 'yes_no_question';
    const RESPONSE_CREATE_QUICK_REPLIES = 'create_quick_replies';
    const RESPONSE_QUESTION_MULTIPLE = 'question_multiple';
    const RESPONSE_API_CALL = 'api_call';
    const RESPONSE_GET_NESTED_DICT_ELEMENT = 'get_nested_dict_element';
    const RESPONSE_CREATE_LIST_VIEW = 'create_list_view';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAuthorAllowableValues()
    {
        return [
            self::AUTHOR_BOT,
            self::AUTHOR_USER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResponseAllowableValues()
    {
        return [
            self::RESPONSE_REPLY,
            self::RESPONSE_QUESTION,
            self::RESPONSE_YES_NO_QUESTION,
            self::RESPONSE_CREATE_QUICK_REPLIES,
            self::RESPONSE_QUESTION_MULTIPLE,
            self::RESPONSE_API_CALL,
            self::RESPONSE_GET_NESTED_DICT_ELEMENT,
            self::RESPONSE_CREATE_LIST_VIEW,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['intent'] = isset($data['intent']) ? $data['intent'] : null;
        $this->container['entities'] = isset($data['entities']) ? $data['entities'] : null;
        $this->container['ask_entities'] = isset($data['ask_entities']) ? $data['ask_entities'] : null;
        $this->container['lang_code'] = isset($data['lang_code']) ? $data['lang_code'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['response'] = isset($data['response']) ? $data['response'] : null;
        $this->container['entity'] = isset($data['entity']) ? $data['entity'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['quick_replies'] = isset($data['quick_replies']) ? $data['quick_replies'] : null;
        $this->container['conversations'] = isset($data['conversations']) ? $data['conversations'] : null;
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
        $this->container['preconditions'] = isset($data['preconditions']) ? $data['preconditions'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAuthorAllowableValues();
        if (!is_null($this->container['author']) && !in_array($this->container['author'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'author', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getResponseAllowableValues();
        if (!is_null($this->container['response']) && !in_array($this->container['response'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'response', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text text
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets intent
     *
     * @return string|null
     */
    public function getIntent()
    {
        return $this->container['intent'];
    }

    /**
     * Sets intent
     *
     * @param string|null $intent intent
     *
     * @return $this
     */
    public function setIntent($intent)
    {
        $this->container['intent'] = $intent;

        return $this;
    }

    /**
     * Gets entities
     *
     * @return \OpenAPI\Client\Model\Entity[]|null
     */
    public function getEntities()
    {
        return $this->container['entities'];
    }

    /**
     * Sets entities
     *
     * @param \OpenAPI\Client\Model\Entity[]|null $entities entities
     *
     * @return $this
     */
    public function setEntities($entities)
    {
        $this->container['entities'] = $entities;

        return $this;
    }

    /**
     * Gets ask_entities
     *
     * @return string[]|null
     */
    public function getAskEntities()
    {
        return $this->container['ask_entities'];
    }

    /**
     * Sets ask_entities
     *
     * @param string[]|null $ask_entities ask_entities
     *
     * @return $this
     */
    public function setAskEntities($ask_entities)
    {
        $this->container['ask_entities'] = $ask_entities;

        return $this;
    }

    /**
     * Gets lang_code
     *
     * @return string|null
     */
    public function getLangCode()
    {
        return $this->container['lang_code'];
    }

    /**
     * Sets lang_code
     *
     * @param string|null $lang_code lang_code
     *
     * @return $this
     */
    public function setLangCode($lang_code)
    {
        $this->container['lang_code'] = $lang_code;

        return $this;
    }

    /**
     * Gets author
     *
     * @return string|null
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param string|null $author author
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $allowedValues = $this->getAuthorAllowableValues();
        if (!is_null($author) && !in_array($author, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'author', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets response
     *
     * @return string|null
     */
    public function getResponse()
    {
        return $this->container['response'];
    }

    /**
     * Sets response
     *
     * @param string|null $response response
     *
     * @return $this
     */
    public function setResponse($response)
    {
        $allowedValues = $this->getResponseAllowableValues();
        if (!is_null($response) && !in_array($response, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'response', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['response'] = $response;

        return $this;
    }

    /**
     * Gets entity
     *
     * @return string|null
     */
    public function getEntity()
    {
        return $this->container['entity'];
    }

    /**
     * Sets entity
     *
     * @param string|null $entity entity
     *
     * @return $this
     */
    public function setEntity($entity)
    {
        $this->container['entity'] = $entity;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return string|null
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string|null $condition condition
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets quick_replies
     *
     * @return string[]|null
     */
    public function getQuickReplies()
    {
        return $this->container['quick_replies'];
    }

    /**
     * Sets quick_replies
     *
     * @param string[]|null $quick_replies quick_replies
     *
     * @return $this
     */
    public function setQuickReplies($quick_replies)
    {
        $this->container['quick_replies'] = $quick_replies;

        return $this;
    }

    /**
     * Gets conversations
     *
     * @return string[]|null
     */
    public function getConversations()
    {
        return $this->container['conversations'];
    }

    /**
     * Sets conversations
     *
     * @param string[]|null $conversations conversations
     *
     * @return $this
     */
    public function setConversations($conversations)
    {
        $this->container['conversations'] = $conversations;

        return $this;
    }

    /**
     * Gets params
     *
     * @return object|null
     */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
     * Sets params
     *
     * @param object|null $params params
     *
     * @return $this
     */
    public function setParams($params)
    {
        $this->container['params'] = $params;

        return $this;
    }

    /**
     * Gets preconditions
     *
     * @return string[]|null
     */
    public function getPreconditions()
    {
        return $this->container['preconditions'];
    }

    /**
     * Sets preconditions
     *
     * @param string[]|null $preconditions preconditions
     *
     * @return $this
     */
    public function setPreconditions($preconditions)
    {
        $this->container['preconditions'] = $preconditions;

        return $this;
    }

    /**
     * Gets actions
     *
     * @return string[]|null
     */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
     * Sets actions
     *
     * @param string[]|null $actions actions
     *
     * @return $this
     */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


