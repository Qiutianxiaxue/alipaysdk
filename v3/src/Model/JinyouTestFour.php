<?php
/**
 * JinyouTestFour
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
 * JinyouTestFour Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class JinyouTestFour implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'JinyouTestFour';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'f1Openid' => 'string',
        'f1Y' => 'string',
        'f2F' => '\Alipay\OpenAPISDK\Model\JinyouTestThree',
        'f3Openid' => 'string',
        'f3Y' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'f1Openid' => null,
        'f1Y' => null,
        'f2F' => null,
        'f3Openid' => null,
        'f3Y' => null
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
        'f1Openid' => 'f_1_openid',
        'f1Y' => 'f_1_y',
        'f2F' => 'f_2_f',
        'f3Openid' => 'f_3_openid',
        'f3Y' => 'f_3_y'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'f1Openid' => 'setF1Openid',
        'f1Y' => 'setF1Y',
        'f2F' => 'setF2F',
        'f3Openid' => 'setF3Openid',
        'f3Y' => 'setF3Y'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'f1Openid' => 'getF1Openid',
        'f1Y' => 'getF1Y',
        'f2F' => 'getF2F',
        'f3Openid' => 'getF3Openid',
        'f3Y' => 'getF3Y'
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
        $this->container['f1Openid'] = $data['f1Openid'] ?? null;
        $this->container['f1Y'] = $data['f1Y'] ?? null;
        $this->container['f2F'] = $data['f2F'] ?? null;
        $this->container['f3Openid'] = $data['f3Openid'] ?? null;
        $this->container['f3Y'] = $data['f3Y'] ?? null;
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
     * Gets f1Openid
     *
     * @return string|null
     */
    public function getF1Openid()
    {
        return $this->container['f1Openid'];
    }

    /**
     * Sets f1Openid
     *
     * @param string|null $f1Openid 1
     *
     * @return self
     */
    public function setF1Openid($f1Openid)
    {
        $this->container['f1Openid'] = $f1Openid;

        return $this;
    }

    /**
     * Gets f1Y
     *
     * @return string|null
     */
    public function getF1Y()
    {
        return $this->container['f1Y'];
    }

    /**
     * Sets f1Y
     *
     * @param string|null $f1Y 1
     *
     * @return self
     */
    public function setF1Y($f1Y)
    {
        $this->container['f1Y'] = $f1Y;

        return $this;
    }

    /**
     * Gets f2F
     *
     * @return \Alipay\OpenAPISDK\Model\JinyouTestThree|null
     */
    public function getF2F()
    {
        return $this->container['f2F'];
    }

    /**
     * Sets f2F
     *
     * @param \Alipay\OpenAPISDK\Model\JinyouTestThree|null $f2F f2F
     *
     * @return self
     */
    public function setF2F($f2F)
    {
        $this->container['f2F'] = $f2F;

        return $this;
    }

    /**
     * Gets f3Openid
     *
     * @return string|null
     */
    public function getF3Openid()
    {
        return $this->container['f3Openid'];
    }

    /**
     * Sets f3Openid
     *
     * @param string|null $f3Openid 1
     *
     * @return self
     */
    public function setF3Openid($f3Openid)
    {
        $this->container['f3Openid'] = $f3Openid;

        return $this;
    }

    /**
     * Gets f3Y
     *
     * @return int|null
     */
    public function getF3Y()
    {
        return $this->container['f3Y'];
    }

    /**
     * Sets f3Y
     *
     * @param int|null $f3Y 1
     *
     * @return self
     */
    public function setF3Y($f3Y)
    {
        $this->container['f3Y'] = $f3Y;

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


