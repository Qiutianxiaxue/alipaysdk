<?php
/**
 * VoucherConsultInfo
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
 * VoucherConsultInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class VoucherConsultInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VoucherConsultInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ceilingAmount' => 'string',
        'itemPromoInfo' => '\Alipay\OpenAPISDK\Model\ItemPromoInfo',
        'optimal' => 'bool',
        'promoAmount' => 'string',
        'promoText' => 'string',
        'promoType' => 'string',
        'reductionAmount' => 'string',
        'reductionRatio' => 'string',
        'specifiedAmount' => 'string',
        'thresholdAmount' => 'string',
        'voucherId' => 'string',
        'voucherName' => 'string',
        'voucherType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ceilingAmount' => null,
        'itemPromoInfo' => null,
        'optimal' => null,
        'promoAmount' => null,
        'promoText' => null,
        'promoType' => null,
        'reductionAmount' => null,
        'reductionRatio' => null,
        'specifiedAmount' => null,
        'thresholdAmount' => null,
        'voucherId' => null,
        'voucherName' => null,
        'voucherType' => null
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
        'ceilingAmount' => 'ceiling_amount',
        'itemPromoInfo' => 'item_promo_info',
        'optimal' => 'optimal',
        'promoAmount' => 'promo_amount',
        'promoText' => 'promo_text',
        'promoType' => 'promo_type',
        'reductionAmount' => 'reduction_amount',
        'reductionRatio' => 'reduction_ratio',
        'specifiedAmount' => 'specified_amount',
        'thresholdAmount' => 'threshold_amount',
        'voucherId' => 'voucher_id',
        'voucherName' => 'voucher_name',
        'voucherType' => 'voucher_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ceilingAmount' => 'setCeilingAmount',
        'itemPromoInfo' => 'setItemPromoInfo',
        'optimal' => 'setOptimal',
        'promoAmount' => 'setPromoAmount',
        'promoText' => 'setPromoText',
        'promoType' => 'setPromoType',
        'reductionAmount' => 'setReductionAmount',
        'reductionRatio' => 'setReductionRatio',
        'specifiedAmount' => 'setSpecifiedAmount',
        'thresholdAmount' => 'setThresholdAmount',
        'voucherId' => 'setVoucherId',
        'voucherName' => 'setVoucherName',
        'voucherType' => 'setVoucherType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ceilingAmount' => 'getCeilingAmount',
        'itemPromoInfo' => 'getItemPromoInfo',
        'optimal' => 'getOptimal',
        'promoAmount' => 'getPromoAmount',
        'promoText' => 'getPromoText',
        'promoType' => 'getPromoType',
        'reductionAmount' => 'getReductionAmount',
        'reductionRatio' => 'getReductionRatio',
        'specifiedAmount' => 'getSpecifiedAmount',
        'thresholdAmount' => 'getThresholdAmount',
        'voucherId' => 'getVoucherId',
        'voucherName' => 'getVoucherName',
        'voucherType' => 'getVoucherType'
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
        $this->container['ceilingAmount'] = $data['ceilingAmount'] ?? null;
        $this->container['itemPromoInfo'] = $data['itemPromoInfo'] ?? null;
        $this->container['optimal'] = $data['optimal'] ?? null;
        $this->container['promoAmount'] = $data['promoAmount'] ?? null;
        $this->container['promoText'] = $data['promoText'] ?? null;
        $this->container['promoType'] = $data['promoType'] ?? null;
        $this->container['reductionAmount'] = $data['reductionAmount'] ?? null;
        $this->container['reductionRatio'] = $data['reductionRatio'] ?? null;
        $this->container['specifiedAmount'] = $data['specifiedAmount'] ?? null;
        $this->container['thresholdAmount'] = $data['thresholdAmount'] ?? null;
        $this->container['voucherId'] = $data['voucherId'] ?? null;
        $this->container['voucherName'] = $data['voucherName'] ?? null;
        $this->container['voucherType'] = $data['voucherType'] ?? null;
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
     * Gets ceilingAmount
     *
     * @return string|null
     */
    public function getCeilingAmount()
    {
        return $this->container['ceilingAmount'];
    }

    /**
     * Sets ceilingAmount
     *
     * @param string|null $ceilingAmount 封顶优惠金额，单位为元
     *
     * @return self
     */
    public function setCeilingAmount($ceilingAmount)
    {
        $this->container['ceilingAmount'] = $ceilingAmount;

        return $this;
    }

    /**
     * Gets itemPromoInfo
     *
     * @return \Alipay\OpenAPISDK\Model\ItemPromoInfo|null
     */
    public function getItemPromoInfo()
    {
        return $this->container['itemPromoInfo'];
    }

    /**
     * Sets itemPromoInfo
     *
     * @param \Alipay\OpenAPISDK\Model\ItemPromoInfo|null $itemPromoInfo itemPromoInfo
     *
     * @return self
     */
    public function setItemPromoInfo($itemPromoInfo)
    {
        $this->container['itemPromoInfo'] = $itemPromoInfo;

        return $this;
    }

    /**
     * Gets optimal
     *
     * @return bool|null
     */
    public function getOptimal()
    {
        return $this->container['optimal'];
    }

    /**
     * Sets optimal
     *
     * @param bool|null $optimal 是否为可使用的互斥券中最优的（目前返回的记录该值均为true，即可忽略该值判断）
     *
     * @return self
     */
    public function setOptimal($optimal)
    {
        $this->container['optimal'] = $optimal;

        return $this;
    }

    /**
     * Gets promoAmount
     *
     * @return string|null
     */
    public function getPromoAmount()
    {
        return $this->container['promoAmount'];
    }

    /**
     * Sets promoAmount
     *
     * @param string|null $promoAmount 优惠总金额，单位为元
     *
     * @return self
     */
    public function setPromoAmount($promoAmount)
    {
        $this->container['promoAmount'] = $promoAmount;

        return $this;
    }

    /**
     * Gets promoText
     *
     * @return string|null
     */
    public function getPromoText()
    {
        return $this->container['promoText'];
    }

    /**
     * Sets promoText
     *
     * @param string|null $promoText 优惠文案
     *
     * @return self
     */
    public function setPromoText($promoText)
    {
        $this->container['promoText'] = $promoText;

        return $this;
    }

    /**
     * Gets promoType
     *
     * @return string|null
     */
    public function getPromoType()
    {
        return $this->container['promoType'];
    }

    /**
     * Sets promoType
     *
     * @param string|null $promoType 优惠类型： 代金(FIX),折扣(DISCOUNT),减至(SPECIAL，即特价券)
     *
     * @return self
     */
    public function setPromoType($promoType)
    {
        $this->container['promoType'] = $promoType;

        return $this;
    }

    /**
     * Gets reductionAmount
     *
     * @return string|null
     */
    public function getReductionAmount()
    {
        return $this->container['reductionAmount'];
    }

    /**
     * Sets reductionAmount
     *
     * @param string|null $reductionAmount 满减金额，单位为元，仅针对代金券
     *
     * @return self
     */
    public function setReductionAmount($reductionAmount)
    {
        $this->container['reductionAmount'] = $reductionAmount;

        return $this;
    }

    /**
     * Gets reductionRatio
     *
     * @return string|null
     */
    public function getReductionRatio()
    {
        return $this->container['reductionRatio'];
    }

    /**
     * Sets reductionRatio
     *
     * @param string|null $reductionRatio 优惠额度，如3折券，返回0.7，仅针对折扣券
     *
     * @return self
     */
    public function setReductionRatio($reductionRatio)
    {
        $this->container['reductionRatio'] = $reductionRatio;

        return $this;
    }

    /**
     * Gets specifiedAmount
     *
     * @return string|null
     */
    public function getSpecifiedAmount()
    {
        return $this->container['specifiedAmount'];
    }

    /**
     * Sets specifiedAmount
     *
     * @param string|null $specifiedAmount 减至金额，单位为元，仅针对减至券
     *
     * @return self
     */
    public function setSpecifiedAmount($specifiedAmount)
    {
        $this->container['specifiedAmount'] = $specifiedAmount;

        return $this;
    }

    /**
     * Gets thresholdAmount
     *
     * @return string|null
     */
    public function getThresholdAmount()
    {
        return $this->container['thresholdAmount'];
    }

    /**
     * Sets thresholdAmount
     *
     * @param string|null $thresholdAmount 优惠门槛，单位为元（部分券没有门槛金额）
     *
     * @return self
     */
    public function setThresholdAmount($thresholdAmount)
    {
        $this->container['thresholdAmount'] = $thresholdAmount;

        return $this;
    }

    /**
     * Gets voucherId
     *
     * @return string|null
     */
    public function getVoucherId()
    {
        return $this->container['voucherId'];
    }

    /**
     * Sets voucherId
     *
     * @param string|null $voucherId 券id
     *
     * @return self
     */
    public function setVoucherId($voucherId)
    {
        $this->container['voucherId'] = $voucherId;

        return $this;
    }

    /**
     * Gets voucherName
     *
     * @return string|null
     */
    public function getVoucherName()
    {
        return $this->container['voucherName'];
    }

    /**
     * Sets voucherName
     *
     * @param string|null $voucherName 券名称
     *
     * @return self
     */
    public function setVoucherName($voucherName)
    {
        $this->container['voucherName'] = $voucherName;

        return $this;
    }

    /**
     * Gets voucherType
     *
     * @return string|null
     */
    public function getVoucherType()
    {
        return $this->container['voucherType'];
    }

    /**
     * Sets voucherType
     *
     * @param string|null $voucherType 券类型： 1）全场券(ALL) 2）单品券(ITEM)
     *
     * @return self
     */
    public function setVoucherType($voucherType)
    {
        $this->container['voucherType'] = $voucherType;

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


