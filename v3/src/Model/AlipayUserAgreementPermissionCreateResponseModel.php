<?php
/**
 * AlipayUserAgreementPermissionCreateResponseModel
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
 * AlipayUserAgreementPermissionCreateResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayUserAgreementPermissionCreateResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayUserAgreementPermissionCreateResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'deductPermission' => 'string',
        'effectiveTimeEnd' => 'string',
        'effectiveTimeStart' => 'string',
        'isSuccessSend' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'deductPermission' => null,
        'effectiveTimeEnd' => null,
        'effectiveTimeStart' => null,
        'isSuccessSend' => null
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
        'deductPermission' => 'deduct_permission',
        'effectiveTimeEnd' => 'effective_time_end',
        'effectiveTimeStart' => 'effective_time_start',
        'isSuccessSend' => 'is_success_send'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'deductPermission' => 'setDeductPermission',
        'effectiveTimeEnd' => 'setEffectiveTimeEnd',
        'effectiveTimeStart' => 'setEffectiveTimeStart',
        'isSuccessSend' => 'setIsSuccessSend'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'deductPermission' => 'getDeductPermission',
        'effectiveTimeEnd' => 'getEffectiveTimeEnd',
        'effectiveTimeStart' => 'getEffectiveTimeStart',
        'isSuccessSend' => 'getIsSuccessSend'
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
        $this->container['deductPermission'] = $data['deductPermission'] ?? null;
        $this->container['effectiveTimeEnd'] = $data['effectiveTimeEnd'] ?? null;
        $this->container['effectiveTimeStart'] = $data['effectiveTimeStart'] ?? null;
        $this->container['isSuccessSend'] = $data['isSuccessSend'] ?? null;
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
     * Gets deductPermission
     *
     * @return string|null
     */
    public function getDeductPermission()
    {
        return $this->container['deductPermission'];
    }

    /**
     * Sets deductPermission
     *
     * @param string|null $deductPermission 商户代扣扣款许可
     *
     * @return self
     */
    public function setDeductPermission($deductPermission)
    {
        $this->container['deductPermission'] = $deductPermission;

        return $this;
    }

    /**
     * Gets effectiveTimeEnd
     *
     * @return string|null
     */
    public function getEffectiveTimeEnd()
    {
        return $this->container['effectiveTimeEnd'];
    }

    /**
     * Sets effectiveTimeEnd
     *
     * @param string|null $effectiveTimeEnd 商户代扣扣款许可生效结束时间
     *
     * @return self
     */
    public function setEffectiveTimeEnd($effectiveTimeEnd)
    {
        $this->container['effectiveTimeEnd'] = $effectiveTimeEnd;

        return $this;
    }

    /**
     * Gets effectiveTimeStart
     *
     * @return string|null
     */
    public function getEffectiveTimeStart()
    {
        return $this->container['effectiveTimeStart'];
    }

    /**
     * Sets effectiveTimeStart
     *
     * @param string|null $effectiveTimeStart 商户代扣扣款许可生效开始时间
     *
     * @return self
     */
    public function setEffectiveTimeStart($effectiveTimeStart)
    {
        $this->container['effectiveTimeStart'] = $effectiveTimeStart;

        return $this;
    }

    /**
     * Gets isSuccessSend
     *
     * @return bool|null
     */
    public function getIsSuccessSend()
    {
        return $this->container['isSuccessSend'];
    }

    /**
     * Sets isSuccessSend
     *
     * @param bool|null $isSuccessSend 消息是否发送成功
     *
     * @return self
     */
    public function setIsSuccessSend($isSuccessSend)
    {
        $this->container['isSuccessSend'] = $isSuccessSend;

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


