<?php
/**
 * LanguageModel
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
 * LanguageModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LanguageModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LanguageModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'lang_code' => 'string',
        'date_created' => 'string',
        'changed' => 'bool',
        'date_changed' => 'string',
        'num_examples' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'lang_code' => null,
        'date_created' => null,
        'changed' => null,
        'date_changed' => null,
        'num_examples' => null
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
        'lang_code' => 'lang_code',
        'date_created' => 'date_created',
        'changed' => 'changed',
        'date_changed' => 'date_changed',
        'num_examples' => 'num_examples'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lang_code' => 'setLangCode',
        'date_created' => 'setDateCreated',
        'changed' => 'setChanged',
        'date_changed' => 'setDateChanged',
        'num_examples' => 'setNumExamples'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lang_code' => 'getLangCode',
        'date_created' => 'getDateCreated',
        'changed' => 'getChanged',
        'date_changed' => 'getDateChanged',
        'num_examples' => 'getNumExamples'
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
        $this->container['lang_code'] = isset($data['lang_code']) ? $data['lang_code'] : null;
        $this->container['date_created'] = isset($data['date_created']) ? $data['date_created'] : null;
        $this->container['changed'] = isset($data['changed']) ? $data['changed'] : null;
        $this->container['date_changed'] = isset($data['date_changed']) ? $data['date_changed'] : null;
        $this->container['num_examples'] = isset($data['num_examples']) ? $data['num_examples'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets date_created
     *
     * @return string|null
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     *
     * @param string|null $date_created date_created
     *
     * @return $this
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets changed
     *
     * @return bool|null
     */
    public function getChanged()
    {
        return $this->container['changed'];
    }

    /**
     * Sets changed
     *
     * @param bool|null $changed changed
     *
     * @return $this
     */
    public function setChanged($changed)
    {
        $this->container['changed'] = $changed;

        return $this;
    }

    /**
     * Gets date_changed
     *
     * @return string|null
     */
    public function getDateChanged()
    {
        return $this->container['date_changed'];
    }

    /**
     * Sets date_changed
     *
     * @param string|null $date_changed date_changed
     *
     * @return $this
     */
    public function setDateChanged($date_changed)
    {
        $this->container['date_changed'] = $date_changed;

        return $this;
    }

    /**
     * Gets num_examples
     *
     * @return float|null
     */
    public function getNumExamples()
    {
        return $this->container['num_examples'];
    }

    /**
     * Sets num_examples
     *
     * @param float|null $num_examples num_examples
     *
     * @return $this
     */
    public function setNumExamples($num_examples)
    {
        $this->container['num_examples'] = $num_examples;

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


