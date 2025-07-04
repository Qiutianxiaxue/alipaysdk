<?php
/**
 * AlipayMarketingActivityVoucherpackageQueryResponseModel
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
 * AlipayMarketingActivityVoucherpackageQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayMarketingActivityVoucherpackageQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayMarketingActivityVoucherpackageQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'voucherPackageActivityInfo' => '\Alipay\OpenAPISDK\Model\VoucherPackageActivityInfo[]',
        'voucherPackageBaseInfo' => '\Alipay\OpenAPISDK\Model\VoucherPackageBaseInfo',
        'voucherPackageSalesInfo' => '\Alipay\OpenAPISDK\Model\VoucherPackageSalesInfo',
        'voucherPackageUseRule' => '\Alipay\OpenAPISDK\Model\VoucherPackageUseRule'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'voucherPackageActivityInfo' => null,
        'voucherPackageBaseInfo' => null,
        'voucherPackageSalesInfo' => null,
        'voucherPackageUseRule' => null
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
        'voucherPackageActivityInfo' => 'voucher_package_activity_info',
        'voucherPackageBaseInfo' => 'voucher_package_base_info',
        'voucherPackageSalesInfo' => 'voucher_package_sales_info',
        'voucherPackageUseRule' => 'voucher_package_use_rule'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'voucherPackageActivityInfo' => 'setVoucherPackageActivityInfo',
        'voucherPackageBaseInfo' => 'setVoucherPackageBaseInfo',
        'voucherPackageSalesInfo' => 'setVoucherPackageSalesInfo',
        'voucherPackageUseRule' => 'setVoucherPackageUseRule'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'voucherPackageActivityInfo' => 'getVoucherPackageActivityInfo',
        'voucherPackageBaseInfo' => 'getVoucherPackageBaseInfo',
        'voucherPackageSalesInfo' => 'getVoucherPackageSalesInfo',
        'voucherPackageUseRule' => 'getVoucherPackageUseRule'
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
        $this->container['voucherPackageActivityInfo'] = $data['voucherPackageActivityInfo'] ?? null;
        $this->container['voucherPackageBaseInfo'] = $data['voucherPackageBaseInfo'] ?? null;
        $this->container['voucherPackageSalesInfo'] = $data['voucherPackageSalesInfo'] ?? null;
        $this->container['voucherPackageUseRule'] = $data['voucherPackageUseRule'] ?? null;
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
     * Gets voucherPackageActivityInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherPackageActivityInfo[]|null
     */
    public function getVoucherPackageActivityInfo()
    {
        return $this->container['voucherPackageActivityInfo'];
    }

    /**
     * Sets voucherPackageActivityInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherPackageActivityInfo[]|null $voucherPackageActivityInfo 券包活动信息
     *
     * @return self
     */
    public function setVoucherPackageActivityInfo($voucherPackageActivityInfo)
    {
        $this->container['voucherPackageActivityInfo'] = $voucherPackageActivityInfo;

        return $this;
    }

    /**
     * Gets voucherPackageBaseInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherPackageBaseInfo|null
     */
    public function getVoucherPackageBaseInfo()
    {
        return $this->container['voucherPackageBaseInfo'];
    }

    /**
     * Sets voucherPackageBaseInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherPackageBaseInfo|null $voucherPackageBaseInfo voucherPackageBaseInfo
     *
     * @return self
     */
    public function setVoucherPackageBaseInfo($voucherPackageBaseInfo)
    {
        $this->container['voucherPackageBaseInfo'] = $voucherPackageBaseInfo;

        return $this;
    }

    /**
     * Gets voucherPackageSalesInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherPackageSalesInfo|null
     */
    public function getVoucherPackageSalesInfo()
    {
        return $this->container['voucherPackageSalesInfo'];
    }

    /**
     * Sets voucherPackageSalesInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherPackageSalesInfo|null $voucherPackageSalesInfo voucherPackageSalesInfo
     *
     * @return self
     */
    public function setVoucherPackageSalesInfo($voucherPackageSalesInfo)
    {
        $this->container['voucherPackageSalesInfo'] = $voucherPackageSalesInfo;

        return $this;
    }

    /**
     * Gets voucherPackageUseRule
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherPackageUseRule|null
     */
    public function getVoucherPackageUseRule()
    {
        return $this->container['voucherPackageUseRule'];
    }

    /**
     * Sets voucherPackageUseRule
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherPackageUseRule|null $voucherPackageUseRule voucherPackageUseRule
     *
     * @return self
     */
    public function setVoucherPackageUseRule($voucherPackageUseRule)
    {
        $this->container['voucherPackageUseRule'] = $voucherPackageUseRule;

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


