<?php
/**
 * SignAddressInfo
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
 * SignAddressInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SignAddressInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SignAddressInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cityCode' => 'string',
        'countryCode' => 'string',
        'detailAddress' => 'string',
        'districtCode' => 'string',
        'latitude' => 'string',
        'longitude' => 'string',
        'provinceCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cityCode' => null,
        'countryCode' => null,
        'detailAddress' => null,
        'districtCode' => null,
        'latitude' => null,
        'longitude' => null,
        'provinceCode' => null
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
        'cityCode' => 'city_code',
        'countryCode' => 'country_code',
        'detailAddress' => 'detail_address',
        'districtCode' => 'district_code',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'provinceCode' => 'province_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cityCode' => 'setCityCode',
        'countryCode' => 'setCountryCode',
        'detailAddress' => 'setDetailAddress',
        'districtCode' => 'setDistrictCode',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'provinceCode' => 'setProvinceCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cityCode' => 'getCityCode',
        'countryCode' => 'getCountryCode',
        'detailAddress' => 'getDetailAddress',
        'districtCode' => 'getDistrictCode',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'provinceCode' => 'getProvinceCode'
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
        $this->container['cityCode'] = $data['cityCode'] ?? null;
        $this->container['countryCode'] = $data['countryCode'] ?? null;
        $this->container['detailAddress'] = $data['detailAddress'] ?? null;
        $this->container['districtCode'] = $data['districtCode'] ?? null;
        $this->container['latitude'] = $data['latitude'] ?? null;
        $this->container['longitude'] = $data['longitude'] ?? null;
        $this->container['provinceCode'] = $data['provinceCode'] ?? null;
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
     * Gets cityCode
     *
     * @return string|null
     */
    public function getCityCode()
    {
        return $this->container['cityCode'];
    }

    /**
     * Sets cityCode
     *
     * @param string|null $cityCode 城市编码。请按照<a href=\"https://gw.alipayobjects.com/os/basement_prod/253c4dcb-b8a4-4a1e-8be2-79e191a9b6db.xlsx\">表格</a> 中内容填写。 （参考资料： <a href=\"http://www.stats.gov.cn/tjsj/tjbz/tjyqhdmhcxhfdm/\">参考资料</a>）
     *
     * @return self
     */
    public function setCityCode($cityCode)
    {
        $this->container['cityCode'] = $cityCode;

        return $this;
    }

    /**
     * Gets countryCode
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['countryCode'];
    }

    /**
     * Sets countryCode
     *
     * @param string|null $countryCode 国家编码，中国默认：156
     *
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->container['countryCode'] = $countryCode;

        return $this;
    }

    /**
     * Gets detailAddress
     *
     * @return string|null
     */
    public function getDetailAddress()
    {
        return $this->container['detailAddress'];
    }

    /**
     * Sets detailAddress
     *
     * @param string|null $detailAddress 详细地址
     *
     * @return self
     */
    public function setDetailAddress($detailAddress)
    {
        $this->container['detailAddress'] = $detailAddress;

        return $this;
    }

    /**
     * Gets districtCode
     *
     * @return string|null
     */
    public function getDistrictCode()
    {
        return $this->container['districtCode'];
    }

    /**
     * Sets districtCode
     *
     * @param string|null $districtCode 区县编码。请按照<a href=\"https://gw.alipayobjects.com/os/basement_prod/253c4dcb-b8a4-4a1e-8be2-79e191a9b6db.xlsx\">表格</a> 中内容填写。 （参考资料： <a href=\"http://www.stats.gov.cn/tjsj/tjbz/tjyqhdmhcxhfdm/\">参考资料</a>）
     *
     * @return self
     */
    public function setDistrictCode($districtCode)
    {
        $this->container['districtCode'] = $districtCode;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return string|null
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param string|null $latitude 纬度，浮点型,小数点后最多保留6位 如需要录入经纬度，请以高德坐标系为准，录入时请确保经纬度参数准确。高德经纬度查询：<a href=\"http://lbs.amap.com/console/show/picker\">查询地址</a>
     *
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return string|null
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param string|null $longitude 经度，浮点型, 小数点后最多保留6位。 如需要录入经纬度，请以高德坐标系为准，录入时请确保经纬度参数准确。高德经纬度查询：<a href=\"http://lbs.amap.com/console/show/picker\">查询地址</a>
     *
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets provinceCode
     *
     * @return string|null
     */
    public function getProvinceCode()
    {
        return $this->container['provinceCode'];
    }

    /**
     * Sets provinceCode
     *
     * @param string|null $provinceCode 省份编码。请按照<a href=\"https://gw.alipayobjects.com/os/basement_prod/253c4dcb-b8a4-4a1e-8be2-79e191a9b6db.xlsx\">表格</a> 中内容填写。 （参考资料： <a href=\"http://www.stats.gov.cn/tjsj/tjbz/tjyqhdmhcxhfdm/\">参考资料</a>）
     *
     * @return self
     */
    public function setProvinceCode($provinceCode)
    {
        $this->container['provinceCode'] = $provinceCode;

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


