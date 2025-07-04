<?php
/**
 * VoucherAvailableGeographyShopResultInfo
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
 * VoucherAvailableGeographyShopResultInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class VoucherAvailableGeographyShopResultInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VoucherAvailableGeographyShopResultInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'availableGeographyAllShopResultInfo' => '\Alipay\OpenAPISDK\Model\VoucherAvailableGeographyAllShopResultInfo',
        'failAvailableRealShopInfos' => '\Alipay\OpenAPISDK\Model\VoucherFailShopInfo[]',
        'failAvailableShopInfos' => '\Alipay\OpenAPISDK\Model\VoucherFailShopInfo[]',
        'successAvailableRealShopIds' => 'string[]',
        'successAvailableShopIds' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'availableGeographyAllShopResultInfo' => null,
        'failAvailableRealShopInfos' => null,
        'failAvailableShopInfos' => null,
        'successAvailableRealShopIds' => null,
        'successAvailableShopIds' => null
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
        'availableGeographyAllShopResultInfo' => 'available_geography_all_shop_result_info',
        'failAvailableRealShopInfos' => 'fail_available_real_shop_infos',
        'failAvailableShopInfos' => 'fail_available_shop_infos',
        'successAvailableRealShopIds' => 'success_available_real_shop_ids',
        'successAvailableShopIds' => 'success_available_shop_ids'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'availableGeographyAllShopResultInfo' => 'setAvailableGeographyAllShopResultInfo',
        'failAvailableRealShopInfos' => 'setFailAvailableRealShopInfos',
        'failAvailableShopInfos' => 'setFailAvailableShopInfos',
        'successAvailableRealShopIds' => 'setSuccessAvailableRealShopIds',
        'successAvailableShopIds' => 'setSuccessAvailableShopIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'availableGeographyAllShopResultInfo' => 'getAvailableGeographyAllShopResultInfo',
        'failAvailableRealShopInfos' => 'getFailAvailableRealShopInfos',
        'failAvailableShopInfos' => 'getFailAvailableShopInfos',
        'successAvailableRealShopIds' => 'getSuccessAvailableRealShopIds',
        'successAvailableShopIds' => 'getSuccessAvailableShopIds'
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
        $this->container['availableGeographyAllShopResultInfo'] = $data['availableGeographyAllShopResultInfo'] ?? null;
        $this->container['failAvailableRealShopInfos'] = $data['failAvailableRealShopInfos'] ?? null;
        $this->container['failAvailableShopInfos'] = $data['failAvailableShopInfos'] ?? null;
        $this->container['successAvailableRealShopIds'] = $data['successAvailableRealShopIds'] ?? null;
        $this->container['successAvailableShopIds'] = $data['successAvailableShopIds'] ?? null;
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
     * Gets availableGeographyAllShopResultInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherAvailableGeographyAllShopResultInfo|null
     */
    public function getAvailableGeographyAllShopResultInfo()
    {
        return $this->container['availableGeographyAllShopResultInfo'];
    }

    /**
     * Sets availableGeographyAllShopResultInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherAvailableGeographyAllShopResultInfo|null $availableGeographyAllShopResultInfo availableGeographyAllShopResultInfo
     *
     * @return self
     */
    public function setAvailableGeographyAllShopResultInfo($availableGeographyAllShopResultInfo)
    {
        $this->container['availableGeographyAllShopResultInfo'] = $availableGeographyAllShopResultInfo;

        return $this;
    }

    /**
     * Gets failAvailableRealShopInfos
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherFailShopInfo[]|null
     */
    public function getFailAvailableRealShopInfos()
    {
        return $this->container['failAvailableRealShopInfos'];
    }

    /**
     * Sets failAvailableRealShopInfos
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherFailShopInfo[]|null $failAvailableRealShopInfos 失败的物理门店详情。
     *
     * @return self
     */
    public function setFailAvailableRealShopInfos($failAvailableRealShopInfos)
    {
        $this->container['failAvailableRealShopInfos'] = $failAvailableRealShopInfos;

        return $this;
    }

    /**
     * Gets failAvailableShopInfos
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherFailShopInfo[]|null
     */
    public function getFailAvailableShopInfos()
    {
        return $this->container['failAvailableShopInfos'];
    }

    /**
     * Sets failAvailableShopInfos
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherFailShopInfo[]|null $failAvailableShopInfos 失败的可用门店。
     *
     * @return self
     */
    public function setFailAvailableShopInfos($failAvailableShopInfos)
    {
        $this->container['failAvailableShopInfos'] = $failAvailableShopInfos;

        return $this;
    }

    /**
     * Gets successAvailableRealShopIds
     *
     * @return string[]|null
     */
    public function getSuccessAvailableRealShopIds()
    {
        return $this->container['successAvailableRealShopIds'];
    }

    /**
     * Sets successAvailableRealShopIds
     *
     * @param string[]|null $successAvailableRealShopIds 代运营商业关系门店列表，列表中的门店id是调用接口alipay.business.relation.shop.create创建门店返回的real_shop_id  接口参数是列表类型。
     *
     * @return self
     */
    public function setSuccessAvailableRealShopIds($successAvailableRealShopIds)
    {
        $this->container['successAvailableRealShopIds'] = $successAvailableRealShopIds;

        return $this;
    }

    /**
     * Gets successAvailableShopIds
     *
     * @return string[]|null
     */
    public function getSuccessAvailableShopIds()
    {
        return $this->container['successAvailableShopIds'];
    }

    /**
     * Sets successAvailableShopIds
     *
     * @param string[]|null $successAvailableShopIds 券可使用的门店列表。列表中的门店id是通过调用接口ant.merchant.expand.shop.create创建门店返回的支付宝门店id  接口参数是列表类型。
     *
     * @return self
     */
    public function setSuccessAvailableShopIds($successAvailableShopIds)
    {
        $this->container['successAvailableShopIds'] = $successAvailableShopIds;

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


