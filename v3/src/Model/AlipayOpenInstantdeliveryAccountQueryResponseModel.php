<?php
/**
 * AlipayOpenInstantdeliveryAccountQueryResponseModel
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
 * AlipayOpenInstantdeliveryAccountQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenInstantdeliveryAccountQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenInstantdeliveryAccountQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'balance' => 'string',
        'businessLicense' => 'string',
        'businessScope' => 'string',
        'creditCode' => 'string',
        'email' => 'string',
        'enterpriseAddress' => 'string',
        'enterpriseCity' => 'string',
        'enterpriseDistrict' => 'string',
        'enterpriseName' => 'string',
        'enterpriseProvince' => 'string',
        'enterpriseType' => 'string',
        'logisticsAccountStatus' => '\Alipay\OpenAPISDK\Model\LogisticsAccountStatusDTO[]',
        'phone' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'balance' => null,
        'businessLicense' => null,
        'businessScope' => null,
        'creditCode' => null,
        'email' => null,
        'enterpriseAddress' => null,
        'enterpriseCity' => null,
        'enterpriseDistrict' => null,
        'enterpriseName' => null,
        'enterpriseProvince' => null,
        'enterpriseType' => null,
        'logisticsAccountStatus' => null,
        'phone' => null
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
        'balance' => 'balance',
        'businessLicense' => 'business_license',
        'businessScope' => 'business_scope',
        'creditCode' => 'credit_code',
        'email' => 'email',
        'enterpriseAddress' => 'enterprise_address',
        'enterpriseCity' => 'enterprise_city',
        'enterpriseDistrict' => 'enterprise_district',
        'enterpriseName' => 'enterprise_name',
        'enterpriseProvince' => 'enterprise_province',
        'enterpriseType' => 'enterprise_type',
        'logisticsAccountStatus' => 'logistics_account_status',
        'phone' => 'phone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'balance' => 'setBalance',
        'businessLicense' => 'setBusinessLicense',
        'businessScope' => 'setBusinessScope',
        'creditCode' => 'setCreditCode',
        'email' => 'setEmail',
        'enterpriseAddress' => 'setEnterpriseAddress',
        'enterpriseCity' => 'setEnterpriseCity',
        'enterpriseDistrict' => 'setEnterpriseDistrict',
        'enterpriseName' => 'setEnterpriseName',
        'enterpriseProvince' => 'setEnterpriseProvince',
        'enterpriseType' => 'setEnterpriseType',
        'logisticsAccountStatus' => 'setLogisticsAccountStatus',
        'phone' => 'setPhone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'balance' => 'getBalance',
        'businessLicense' => 'getBusinessLicense',
        'businessScope' => 'getBusinessScope',
        'creditCode' => 'getCreditCode',
        'email' => 'getEmail',
        'enterpriseAddress' => 'getEnterpriseAddress',
        'enterpriseCity' => 'getEnterpriseCity',
        'enterpriseDistrict' => 'getEnterpriseDistrict',
        'enterpriseName' => 'getEnterpriseName',
        'enterpriseProvince' => 'getEnterpriseProvince',
        'enterpriseType' => 'getEnterpriseType',
        'logisticsAccountStatus' => 'getLogisticsAccountStatus',
        'phone' => 'getPhone'
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
        $this->container['balance'] = $data['balance'] ?? null;
        $this->container['businessLicense'] = $data['businessLicense'] ?? null;
        $this->container['businessScope'] = $data['businessScope'] ?? null;
        $this->container['creditCode'] = $data['creditCode'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['enterpriseAddress'] = $data['enterpriseAddress'] ?? null;
        $this->container['enterpriseCity'] = $data['enterpriseCity'] ?? null;
        $this->container['enterpriseDistrict'] = $data['enterpriseDistrict'] ?? null;
        $this->container['enterpriseName'] = $data['enterpriseName'] ?? null;
        $this->container['enterpriseProvince'] = $data['enterpriseProvince'] ?? null;
        $this->container['enterpriseType'] = $data['enterpriseType'] ?? null;
        $this->container['logisticsAccountStatus'] = $data['logisticsAccountStatus'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
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
     * Gets balance
     *
     * @return string|null
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param string|null $balance 账户余额
     *
     * @return self
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets businessLicense
     *
     * @return string|null
     */
    public function getBusinessLicense()
    {
        return $this->container['businessLicense'];
    }

    /**
     * Sets businessLicense
     *
     * @param string|null $businessLicense 企业营业执照图片正反面
     *
     * @return self
     */
    public function setBusinessLicense($businessLicense)
    {
        $this->container['businessLicense'] = $businessLicense;

        return $this;
    }

    /**
     * Gets businessScope
     *
     * @return string|null
     */
    public function getBusinessScope()
    {
        return $this->container['businessScope'];
    }

    /**
     * Sets businessScope
     *
     * @param string|null $businessScope 经营范围
     *
     * @return self
     */
    public function setBusinessScope($businessScope)
    {
        $this->container['businessScope'] = $businessScope;

        return $this;
    }

    /**
     * Gets creditCode
     *
     * @return string|null
     */
    public function getCreditCode()
    {
        return $this->container['creditCode'];
    }

    /**
     * Sets creditCode
     *
     * @param string|null $creditCode 统一社会信用代码
     *
     * @return self
     */
    public function setCreditCode($creditCode)
    {
        $this->container['creditCode'] = $creditCode;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email 联系人邮箱
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets enterpriseAddress
     *
     * @return string|null
     */
    public function getEnterpriseAddress()
    {
        return $this->container['enterpriseAddress'];
    }

    /**
     * Sets enterpriseAddress
     *
     * @param string|null $enterpriseAddress 企业地址
     *
     * @return self
     */
    public function setEnterpriseAddress($enterpriseAddress)
    {
        $this->container['enterpriseAddress'] = $enterpriseAddress;

        return $this;
    }

    /**
     * Gets enterpriseCity
     *
     * @return string|null
     */
    public function getEnterpriseCity()
    {
        return $this->container['enterpriseCity'];
    }

    /**
     * Sets enterpriseCity
     *
     * @param string|null $enterpriseCity 企业所在地，市编码
     *
     * @return self
     */
    public function setEnterpriseCity($enterpriseCity)
    {
        $this->container['enterpriseCity'] = $enterpriseCity;

        return $this;
    }

    /**
     * Gets enterpriseDistrict
     *
     * @return string|null
     */
    public function getEnterpriseDistrict()
    {
        return $this->container['enterpriseDistrict'];
    }

    /**
     * Sets enterpriseDistrict
     *
     * @param string|null $enterpriseDistrict 企业所在地，区编码
     *
     * @return self
     */
    public function setEnterpriseDistrict($enterpriseDistrict)
    {
        $this->container['enterpriseDistrict'] = $enterpriseDistrict;

        return $this;
    }

    /**
     * Gets enterpriseName
     *
     * @return string|null
     */
    public function getEnterpriseName()
    {
        return $this->container['enterpriseName'];
    }

    /**
     * Sets enterpriseName
     *
     * @param string|null $enterpriseName 企业全称
     *
     * @return self
     */
    public function setEnterpriseName($enterpriseName)
    {
        $this->container['enterpriseName'] = $enterpriseName;

        return $this;
    }

    /**
     * Gets enterpriseProvince
     *
     * @return string|null
     */
    public function getEnterpriseProvince()
    {
        return $this->container['enterpriseProvince'];
    }

    /**
     * Sets enterpriseProvince
     *
     * @param string|null $enterpriseProvince 企业所在地，省编码
     *
     * @return self
     */
    public function setEnterpriseProvince($enterpriseProvince)
    {
        $this->container['enterpriseProvince'] = $enterpriseProvince;

        return $this;
    }

    /**
     * Gets enterpriseType
     *
     * @return string|null
     */
    public function getEnterpriseType()
    {
        return $this->container['enterpriseType'];
    }

    /**
     * Sets enterpriseType
     *
     * @param string|null $enterpriseType 企业类型
     *
     * @return self
     */
    public function setEnterpriseType($enterpriseType)
    {
        $this->container['enterpriseType'] = $enterpriseType;

        return $this;
    }

    /**
     * Gets logisticsAccountStatus
     *
     * @return \Alipay\OpenAPISDK\Model\LogisticsAccountStatusDTO[]|null
     */
    public function getLogisticsAccountStatus()
    {
        return $this->container['logisticsAccountStatus'];
    }

    /**
     * Sets logisticsAccountStatus
     *
     * @param \Alipay\OpenAPISDK\Model\LogisticsAccountStatusDTO[]|null $logisticsAccountStatus 在配送公司的账户状态信息
     *
     * @return self
     */
    public function setLogisticsAccountStatus($logisticsAccountStatus)
    {
        $this->container['logisticsAccountStatus'] = $logisticsAccountStatus;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone 联系人手机号
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

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


