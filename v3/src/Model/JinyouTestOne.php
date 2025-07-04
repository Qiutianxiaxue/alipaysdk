<?php
/**
 * JinyouTestOne
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * 支付宝开放平台API
 *
 * 支付宝开放平台v3协议文档
 *
 * The version of the OpenAPI document: 2025-02-19
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Alipay\OpenAPISDK\Model;

use \ArrayAccess;
use \Alipay\OpenAPISDK\ObjectSerializer;

/**
 * JinyouTestOne Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class JinyouTestOne implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'JinyouTestOne';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'o1N' => 'string',
        'o2Openid' => 'string',
        'o2Y' => 'string',
        'o3Openid' => 'string',
        'o3Y' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'o1N' => null,
        'o2Openid' => null,
        'o2Y' => null,
        'o3Openid' => null,
        'o3Y' => null
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
        'o1N' => 'o_1_n',
        'o2Openid' => 'o_2_openid',
        'o2Y' => 'o_2_y',
        'o3Openid' => 'o_3_openid',
        'o3Y' => 'o_3_y'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'o1N' => 'setO1N',
        'o2Openid' => 'setO2Openid',
        'o2Y' => 'setO2Y',
        'o3Openid' => 'setO3Openid',
        'o3Y' => 'setO3Y'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'o1N' => 'getO1N',
        'o2Openid' => 'getO2Openid',
        'o2Y' => 'getO2Y',
        'o3Openid' => 'getO3Openid',
        'o3Y' => 'getO3Y'
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
    public function __construct(?array $data = null)
    {
        $this->container['o1N'] = $data['o1N'] ?? null;
        $this->container['o2Openid'] = $data['o2Openid'] ?? null;
        $this->container['o2Y'] = $data['o2Y'] ?? null;
        $this->container['o3Openid'] = $data['o3Openid'] ?? null;
        $this->container['o3Y'] = $data['o3Y'] ?? null;
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
     * Gets o1N
     *
     * @return string|null
     */
    public function getO1N()
    {
        return $this->container['o1N'];
    }

    /**
     * Sets o1N
     *
     * @param string|null $o1N 1
     *
     * @return self
     */
    public function setO1N($o1N)
    {
        $this->container['o1N'] = $o1N;

        return $this;
    }

    /**
     * Gets o2Openid
     *
     * @return string|null
     */
    public function getO2Openid()
    {
        return $this->container['o2Openid'];
    }

    /**
     * Sets o2Openid
     *
     * @param string|null $o2Openid o_2_y
     *
     * @return self
     */
    public function setO2Openid($o2Openid)
    {
        $this->container['o2Openid'] = $o2Openid;

        return $this;
    }

    /**
     * Gets o2Y
     *
     * @return string|null
     */
    public function getO2Y()
    {
        return $this->container['o2Y'];
    }

    /**
     * Sets o2Y
     *
     * @param string|null $o2Y o_2_y
     *
     * @return self
     */
    public function setO2Y($o2Y)
    {
        $this->container['o2Y'] = $o2Y;

        return $this;
    }

    /**
     * Gets o3Openid
     *
     * @return string|null
     */
    public function getO3Openid()
    {
        return $this->container['o3Openid'];
    }

    /**
     * Sets o3Openid
     *
     * @param string|null $o3Openid o_3_y
     *
     * @return self
     */
    public function setO3Openid($o3Openid)
    {
        $this->container['o3Openid'] = $o3Openid;

        return $this;
    }

    /**
     * Gets o3Y
     *
     * @return int|null
     */
    public function getO3Y()
    {
        return $this->container['o3Y'];
    }

    /**
     * Sets o3Y
     *
     * @param int|null $o3Y o_3_y
     *
     * @return self
     */
    public function setO3Y($o3Y)
    {
        $this->container['o3Y'] = $o3Y;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


