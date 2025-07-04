<?php
/**
 * AlipayFundJointaccountMemberBindModel
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
 * AlipayFundJointaccountMemberBindModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayFundJointaccountMemberBindModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayFundJointaccountMemberBindModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'string',
        'accountQuota' => '\Alipay\OpenAPISDK\Model\JointAccountQuotaDTO',
        'agreementNo' => 'string',
        'agreementSignInfo' => 'string',
        'bizScene' => 'string',
        'businessParams' => '\Alipay\OpenAPISDK\Model\InviteMemberBusinessParamsDTO',
        'identity' => 'string',
        'identityType' => 'string',
        'identityVerifiedInfo' => '\Alipay\OpenAPISDK\Model\IdentityVerifiedInfoDTO',
        'name' => 'string',
        'productCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'accountId' => null,
        'accountQuota' => null,
        'agreementNo' => null,
        'agreementSignInfo' => null,
        'bizScene' => null,
        'businessParams' => null,
        'identity' => null,
        'identityType' => null,
        'identityVerifiedInfo' => null,
        'name' => null,
        'productCode' => null
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
        'accountId' => 'account_id',
        'accountQuota' => 'account_quota',
        'agreementNo' => 'agreement_no',
        'agreementSignInfo' => 'agreement_sign_info',
        'bizScene' => 'biz_scene',
        'businessParams' => 'business_params',
        'identity' => 'identity',
        'identityType' => 'identity_type',
        'identityVerifiedInfo' => 'identity_verified_info',
        'name' => 'name',
        'productCode' => 'product_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'accountQuota' => 'setAccountQuota',
        'agreementNo' => 'setAgreementNo',
        'agreementSignInfo' => 'setAgreementSignInfo',
        'bizScene' => 'setBizScene',
        'businessParams' => 'setBusinessParams',
        'identity' => 'setIdentity',
        'identityType' => 'setIdentityType',
        'identityVerifiedInfo' => 'setIdentityVerifiedInfo',
        'name' => 'setName',
        'productCode' => 'setProductCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'accountQuota' => 'getAccountQuota',
        'agreementNo' => 'getAgreementNo',
        'agreementSignInfo' => 'getAgreementSignInfo',
        'bizScene' => 'getBizScene',
        'businessParams' => 'getBusinessParams',
        'identity' => 'getIdentity',
        'identityType' => 'getIdentityType',
        'identityVerifiedInfo' => 'getIdentityVerifiedInfo',
        'name' => 'getName',
        'productCode' => 'getProductCode'
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
        $this->container['accountId'] = $data['accountId'] ?? null;
        $this->container['accountQuota'] = $data['accountQuota'] ?? null;
        $this->container['agreementNo'] = $data['agreementNo'] ?? null;
        $this->container['agreementSignInfo'] = $data['agreementSignInfo'] ?? null;
        $this->container['bizScene'] = $data['bizScene'] ?? null;
        $this->container['businessParams'] = $data['businessParams'] ?? null;
        $this->container['identity'] = $data['identity'] ?? null;
        $this->container['identityType'] = $data['identityType'] ?? null;
        $this->container['identityVerifiedInfo'] = $data['identityVerifiedInfo'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['productCode'] = $data['productCode'] ?? null;
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
     * Gets accountId
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param string|null $accountId 账本ID
     *
     * @return self
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets accountQuota
     *
     * @return \Alipay\OpenAPISDK\Model\JointAccountQuotaDTO|null
     */
    public function getAccountQuota()
    {
        return $this->container['accountQuota'];
    }

    /**
     * Sets accountQuota
     *
     * @param \Alipay\OpenAPISDK\Model\JointAccountQuotaDTO|null $accountQuota accountQuota
     *
     * @return self
     */
    public function setAccountQuota($accountQuota)
    {
        $this->container['accountQuota'] = $accountQuota;

        return $this;
    }

    /**
     * Gets agreementNo
     *
     * @return string|null
     */
    public function getAgreementNo()
    {
        return $this->container['agreementNo'];
    }

    /**
     * Sets agreementNo
     *
     * @param string|null $agreementNo 授权签约协议号
     *
     * @return self
     */
    public function setAgreementNo($agreementNo)
    {
        $this->container['agreementNo'] = $agreementNo;

        return $this;
    }

    /**
     * Gets agreementSignInfo
     *
     * @return string|null
     */
    public function getAgreementSignInfo()
    {
        return $this->container['agreementSignInfo'];
    }

    /**
     * Sets agreementSignInfo
     *
     * @param string|null $agreementSignInfo 关联代扣协议签约串
     *
     * @return self
     */
    public function setAgreementSignInfo($agreementSignInfo)
    {
        $this->container['agreementSignInfo'] = $agreementSignInfo;

        return $this;
    }

    /**
     * Gets bizScene
     *
     * @return string|null
     */
    public function getBizScene()
    {
        return $this->container['bizScene'];
    }

    /**
     * Sets bizScene
     *
     * @param string|null $bizScene 业务场景，联系支付宝分配
     *
     * @return self
     */
    public function setBizScene($bizScene)
    {
        $this->container['bizScene'] = $bizScene;

        return $this;
    }

    /**
     * Gets businessParams
     *
     * @return \Alipay\OpenAPISDK\Model\InviteMemberBusinessParamsDTO|null
     */
    public function getBusinessParams()
    {
        return $this->container['businessParams'];
    }

    /**
     * Sets businessParams
     *
     * @param \Alipay\OpenAPISDK\Model\InviteMemberBusinessParamsDTO|null $businessParams businessParams
     *
     * @return self
     */
    public function setBusinessParams($businessParams)
    {
        $this->container['businessParams'] = $businessParams;

        return $this;
    }

    /**
     * Gets identity
     *
     * @return string|null
     */
    public function getIdentity()
    {
        return $this->container['identity'];
    }

    /**
     * Sets identity
     *
     * @param string|null $identity 该字段为被邀请方账号ID： 当identity_type为ALIPAY_USER_ID时，需要填支付宝ID；当identity_type为ALIPAY_LOGON_ID时，需要填支付宝登录号；当identity_type为ALIPAY_OPEN_ID时，需要填支付宝openId
     *
     * @return self
     */
    public function setIdentity($identity)
    {
        $this->container['identity'] = $identity;

        return $this;
    }

    /**
     * Gets identityType
     *
     * @return string|null
     */
    public function getIdentityType()
    {
        return $this->container['identityType'];
    }

    /**
     * Sets identityType
     *
     * @param string|null $identityType 账号类型，目前支持如下类型： 1、ALIPAY_USER_ID 支付宝的会员ID  2、ALIPAY_LOGON_ID：支付宝登录号，支持邮箱和手机号格式 3、ALIPAY_OPEN_ID：支付宝openId
     *
     * @return self
     */
    public function setIdentityType($identityType)
    {
        $this->container['identityType'] = $identityType;

        return $this;
    }

    /**
     * Gets identityVerifiedInfo
     *
     * @return \Alipay\OpenAPISDK\Model\IdentityVerifiedInfoDTO|null
     */
    public function getIdentityVerifiedInfo()
    {
        return $this->container['identityVerifiedInfo'];
    }

    /**
     * Sets identityVerifiedInfo
     *
     * @param \Alipay\OpenAPISDK\Model\IdentityVerifiedInfoDTO|null $identityVerifiedInfo identityVerifiedInfo
     *
     * @return self
     */
    public function setIdentityVerifiedInfo($identityVerifiedInfo)
    {
        $this->container['identityVerifiedInfo'] = $identityVerifiedInfo;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name 成员姓名，账号类型为ALIPAY_LOGON_ID时必填
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets productCode
     *
     * @return string|null
     */
    public function getProductCode()
    {
        return $this->container['productCode'];
    }

    /**
     * Sets productCode
     *
     * @param string|null $productCode 产品码
     *
     * @return self
     */
    public function setProductCode($productCode)
    {
        $this->container['productCode'] = $productCode;

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


