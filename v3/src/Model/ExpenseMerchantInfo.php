<?php
/**
 * ExpenseMerchantInfo
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
 * ExpenseMerchantInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ExpenseMerchantInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExpenseMerchantInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'merchantName' => 'string',
        'pid' => 'string',
        'roleId' => 'string',
        'roleType' => 'string',
        'shopId' => 'string',
        'shopName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'merchantName' => null,
        'pid' => null,
        'roleId' => null,
        'roleType' => null,
        'shopId' => null,
        'shopName' => null
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
        'merchantName' => 'merchant_name',
        'pid' => 'pid',
        'roleId' => 'role_id',
        'roleType' => 'role_type',
        'shopId' => 'shop_id',
        'shopName' => 'shop_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchantName' => 'setMerchantName',
        'pid' => 'setPid',
        'roleId' => 'setRoleId',
        'roleType' => 'setRoleType',
        'shopId' => 'setShopId',
        'shopName' => 'setShopName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchantName' => 'getMerchantName',
        'pid' => 'getPid',
        'roleId' => 'getRoleId',
        'roleType' => 'getRoleType',
        'shopId' => 'getShopId',
        'shopName' => 'getShopName'
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
        $this->container['merchantName'] = $data['merchantName'] ?? null;
        $this->container['pid'] = $data['pid'] ?? null;
        $this->container['roleId'] = $data['roleId'] ?? null;
        $this->container['roleType'] = $data['roleType'] ?? null;
        $this->container['shopId'] = $data['shopId'] ?? null;
        $this->container['shopName'] = $data['shopName'] ?? null;
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
     * Gets merchantName
     *
     * @return string|null
     */
    public function getMerchantName()
    {
        return $this->container['merchantName'];
    }

    /**
     * Sets merchantName
     *
     * @param string|null $merchantName 商户名称
     *
     * @return self
     */
    public function setMerchantName($merchantName)
    {
        $this->container['merchantName'] = $merchantName;

        return $this;
    }

    /**
     * Gets pid
     *
     * @return string|null
     */
    public function getPid()
    {
        return $this->container['pid'];
    }

    /**
     * Sets pid
     *
     * @param string|null $pid 商户ID
     *
     * @return self
     */
    public function setPid($pid)
    {
        $this->container['pid'] = $pid;

        return $this;
    }

    /**
     * Gets roleId
     *
     * @return string|null
     */
    public function getRoleId()
    {
        return $this->container['roleId'];
    }

    /**
     * Sets roleId
     *
     * @param string|null $roleId 商户ID
     *
     * @return self
     */
    public function setRoleId($roleId)
    {
        $this->container['roleId'] = $roleId;

        return $this;
    }

    /**
     * Gets roleType
     *
     * @return string|null
     */
    public function getRoleType()
    {
        return $this->container['roleType'];
    }

    /**
     * Sets roleType
     *
     * @param string|null $roleType 角色类型 0-直连商户 1-间联商户
     *
     * @return self
     */
    public function setRoleType($roleType)
    {
        $this->container['roleType'] = $roleType;

        return $this;
    }

    /**
     * Gets shopId
     *
     * @return string|null
     */
    public function getShopId()
    {
        return $this->container['shopId'];
    }

    /**
     * Sets shopId
     *
     * @param string|null $shopId 门店ID
     *
     * @return self
     */
    public function setShopId($shopId)
    {
        $this->container['shopId'] = $shopId;

        return $this;
    }

    /**
     * Gets shopName
     *
     * @return string|null
     */
    public function getShopName()
    {
        return $this->container['shopName'];
    }

    /**
     * Sets shopName
     *
     * @param string|null $shopName 门店名称
     *
     * @return self
     */
    public function setShopName($shopName)
    {
        $this->container['shopName'] = $shopName;

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


