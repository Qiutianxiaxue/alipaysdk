<?php
/**
 * AlipayMerchantIotDeviceBindModel
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
 * AlipayMerchantIotDeviceBindModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayMerchantIotDeviceBindModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayMerchantIotDeviceBindModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bizTid' => 'string',
        'deviceIdType' => 'string',
        'deviceSn' => 'string',
        'merchantType' => 'string',
        'pid' => 'string',
        'shopId' => 'string',
        'smid' => 'string',
        'supplierId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bizTid' => null,
        'deviceIdType' => null,
        'deviceSn' => null,
        'merchantType' => null,
        'pid' => null,
        'shopId' => null,
        'smid' => null,
        'supplierId' => null
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
        'bizTid' => 'biz_tid',
        'deviceIdType' => 'device_id_type',
        'deviceSn' => 'device_sn',
        'merchantType' => 'merchant_type',
        'pid' => 'pid',
        'shopId' => 'shop_id',
        'smid' => 'smid',
        'supplierId' => 'supplier_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bizTid' => 'setBizTid',
        'deviceIdType' => 'setDeviceIdType',
        'deviceSn' => 'setDeviceSn',
        'merchantType' => 'setMerchantType',
        'pid' => 'setPid',
        'shopId' => 'setShopId',
        'smid' => 'setSmid',
        'supplierId' => 'setSupplierId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bizTid' => 'getBizTid',
        'deviceIdType' => 'getDeviceIdType',
        'deviceSn' => 'getDeviceSn',
        'merchantType' => 'getMerchantType',
        'pid' => 'getPid',
        'shopId' => 'getShopId',
        'smid' => 'getSmid',
        'supplierId' => 'getSupplierId'
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
        $this->container['bizTid'] = $data['bizTid'] ?? null;
        $this->container['deviceIdType'] = $data['deviceIdType'] ?? null;
        $this->container['deviceSn'] = $data['deviceSn'] ?? null;
        $this->container['merchantType'] = $data['merchantType'] ?? null;
        $this->container['pid'] = $data['pid'] ?? null;
        $this->container['shopId'] = $data['shopId'] ?? null;
        $this->container['smid'] = $data['smid'] ?? null;
        $this->container['supplierId'] = $data['supplierId'] ?? null;
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
     * Gets bizTid
     *
     * @return string|null
     */
    public function getBizTid()
    {
        return $this->container['bizTid'];
    }

    /**
     * Sets bizTid
     *
     * @param string|null $bizTid 设备 ID ，仅device_id_type 为 ID 时填写。
     *
     * @return self
     */
    public function setBizTid($bizTid)
    {
        $this->container['bizTid'] = $bizTid;

        return $this;
    }

    /**
     * Gets deviceIdType
     *
     * @return string|null
     */
    public function getDeviceIdType()
    {
        return $this->container['deviceIdType'];
    }

    /**
     * Sets deviceIdType
     *
     * @param string|null $deviceIdType 可选方式。枚举支持： *  ID：表示使用 biztid 作为设备唯一识别标识， *  SN：表示使用 supplier_id、device_sn联合作为设备唯一识别标识。 注意：由于不同机型的supplier_id不同，推荐使用 ID 。
     *
     * @return self
     */
    public function setDeviceIdType($deviceIdType)
    {
        $this->container['deviceIdType'] = $deviceIdType;

        return $this;
    }

    /**
     * Gets deviceSn
     *
     * @return string|null
     */
    public function getDeviceSn()
    {
        return $this->container['deviceSn'];
    }

    /**
     * Sets deviceSn
     *
     * @param string|null $deviceSn 设备序列号 ，device_id_type 为 SN 时填写。需配合supplier_id使用。
     *
     * @return self
     */
    public function setDeviceSn($deviceSn)
    {
        $this->container['deviceSn'] = $deviceSn;

        return $this;
    }

    /**
     * Gets merchantType
     *
     * @return string|null
     */
    public function getMerchantType()
    {
        return $this->container['merchantType'];
    }

    /**
     * Sets merchantType
     *
     * @param string|null $merchantType 商户类型。枚举支持： *  direct：直连商户； *  indirect：间连商户。
     *
     * @return self
     */
    public function setMerchantType($merchantType)
    {
        $this->container['merchantType'] = $merchantType;

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
     * @param string|null $pid 直连场景填写商户收单pid。间连场景填写smid绑定的pid（可通过代运营授权API获取）。
     *
     * @return self
     */
    public function setPid($pid)
    {
        $this->container['pid'] = $pid;

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
     * @param string|null $shopId 商户pid名下的门店 ID。可通过门店管理API获取，需注意请勿使用smid创建门店 ID。
     *
     * @return self
     */
    public function setShopId($shopId)
    {
        $this->container['shopId'] = $shopId;

        return $this;
    }

    /**
     * Gets smid
     *
     * @return string|null
     */
    public function getSmid()
    {
        return $this->container['smid'];
    }

    /**
     * Sets smid
     *
     * @param string|null $smid 直连场景不填，间连场景填写商户收单smid
     *
     * @return self
     */
    public function setSmid($smid)
    {
        $this->container['smid'] = $smid;

        return $this;
    }

    /**
     * Gets supplierId
     *
     * @return string|null
     */
    public function getSupplierId()
    {
        return $this->container['supplierId'];
    }

    /**
     * Sets supplierId
     *
     * @param string|null $supplierId 设备供应商ID ，device_id_type 为 SN 时填写。需注意不同机型的供应商ID可能不同。
     *
     * @return self
     */
    public function setSupplierId($supplierId)
    {
        $this->container['supplierId'] = $supplierId;

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


