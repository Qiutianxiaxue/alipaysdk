<?php
/**
 * AlipaySecurityRiskCustomerriskSendModel
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
 * AlipaySecurityRiskCustomerriskSendModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipaySecurityRiskCustomerriskSendModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipaySecurityRiskCustomerriskSendModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bankCardNo' => 'string',
        'businessLicenseNo' => 'string',
        'certNo' => 'string',
        'emailAddress' => 'string',
        'externalId' => 'string',
        'merchName' => 'string',
        'mobile' => 'string',
        'mobileIp' => 'string',
        'orderIp' => 'string',
        'pid' => 'string',
        'platAccount' => 'string',
        'processCode' => 'string',
        'smid' => 'string',
        'tradeNo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bankCardNo' => null,
        'businessLicenseNo' => null,
        'certNo' => null,
        'emailAddress' => null,
        'externalId' => null,
        'merchName' => null,
        'mobile' => null,
        'mobileIp' => null,
        'orderIp' => null,
        'pid' => null,
        'platAccount' => null,
        'processCode' => null,
        'smid' => null,
        'tradeNo' => null
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
        'bankCardNo' => 'bank_card_no',
        'businessLicenseNo' => 'business_license_no',
        'certNo' => 'cert_no',
        'emailAddress' => 'email_address',
        'externalId' => 'external_id',
        'merchName' => 'merch_name',
        'mobile' => 'mobile',
        'mobileIp' => 'mobile_ip',
        'orderIp' => 'order_ip',
        'pid' => 'pid',
        'platAccount' => 'plat_account',
        'processCode' => 'process_code',
        'smid' => 'smid',
        'tradeNo' => 'trade_no'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bankCardNo' => 'setBankCardNo',
        'businessLicenseNo' => 'setBusinessLicenseNo',
        'certNo' => 'setCertNo',
        'emailAddress' => 'setEmailAddress',
        'externalId' => 'setExternalId',
        'merchName' => 'setMerchName',
        'mobile' => 'setMobile',
        'mobileIp' => 'setMobileIp',
        'orderIp' => 'setOrderIp',
        'pid' => 'setPid',
        'platAccount' => 'setPlatAccount',
        'processCode' => 'setProcessCode',
        'smid' => 'setSmid',
        'tradeNo' => 'setTradeNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bankCardNo' => 'getBankCardNo',
        'businessLicenseNo' => 'getBusinessLicenseNo',
        'certNo' => 'getCertNo',
        'emailAddress' => 'getEmailAddress',
        'externalId' => 'getExternalId',
        'merchName' => 'getMerchName',
        'mobile' => 'getMobile',
        'mobileIp' => 'getMobileIp',
        'orderIp' => 'getOrderIp',
        'pid' => 'getPid',
        'platAccount' => 'getPlatAccount',
        'processCode' => 'getProcessCode',
        'smid' => 'getSmid',
        'tradeNo' => 'getTradeNo'
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
        $this->container['bankCardNo'] = $data['bankCardNo'] ?? null;
        $this->container['businessLicenseNo'] = $data['businessLicenseNo'] ?? null;
        $this->container['certNo'] = $data['certNo'] ?? null;
        $this->container['emailAddress'] = $data['emailAddress'] ?? null;
        $this->container['externalId'] = $data['externalId'] ?? null;
        $this->container['merchName'] = $data['merchName'] ?? null;
        $this->container['mobile'] = $data['mobile'] ?? null;
        $this->container['mobileIp'] = $data['mobileIp'] ?? null;
        $this->container['orderIp'] = $data['orderIp'] ?? null;
        $this->container['pid'] = $data['pid'] ?? null;
        $this->container['platAccount'] = $data['platAccount'] ?? null;
        $this->container['processCode'] = $data['processCode'] ?? null;
        $this->container['smid'] = $data['smid'] ?? null;
        $this->container['tradeNo'] = $data['tradeNo'] ?? null;
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
     * Gets bankCardNo
     *
     * @return string|null
     */
    public function getBankCardNo()
    {
        return $this->container['bankCardNo'];
    }

    /**
     * Sets bankCardNo
     *
     * @param string|null $bankCardNo 交易对应的银行卡的卡号（支付宝直连和间连合作伙伴均可回传此参数）
     *
     * @return self
     */
    public function setBankCardNo($bankCardNo)
    {
        $this->container['bankCardNo'] = $bankCardNo;

        return $this;
    }

    /**
     * Gets businessLicenseNo
     *
     * @return string|null
     */
    public function getBusinessLicenseNo()
    {
        return $this->container['businessLicenseNo'];
    }

    /**
     * Sets businessLicenseNo
     *
     * @param string|null $businessLicenseNo 该账号对应的营业执照号码（支付宝直连和间连合作伙伴均可回传此参数）
     *
     * @return self
     */
    public function setBusinessLicenseNo($businessLicenseNo)
    {
        $this->container['businessLicenseNo'] = $businessLicenseNo;

        return $this;
    }

    /**
     * Gets certNo
     *
     * @return string|null
     */
    public function getCertNo()
    {
        return $this->container['certNo'];
    }

    /**
     * Sets certNo
     *
     * @param string|null $certNo 该用户对应的身份证号码（支付宝直连和间连合作伙伴均可回传此参数）
     *
     * @return self
     */
    public function setCertNo($certNo)
    {
        $this->container['certNo'] = $certNo;

        return $this;
    }

    /**
     * Gets emailAddress
     *
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->container['emailAddress'];
    }

    /**
     * Sets emailAddress
     *
     * @param string|null $emailAddress 账户注册时填写的邮箱地址(适用于支付宝直连商户回传此信息)
     *
     * @return self
     */
    public function setEmailAddress($emailAddress)
    {
        $this->container['emailAddress'] = $emailAddress;

        return $this;
    }

    /**
     * Gets externalId
     *
     * @return string|null
     */
    public function getExternalId()
    {
        return $this->container['externalId'];
    }

    /**
     * Sets externalId
     *
     * @param string|null $externalId 适用于间连业务场景下，商户在银行被分配的ID（适用于支付宝间连合作伙伴回传此信息）
     *
     * @return self
     */
    public function setExternalId($externalId)
    {
        $this->container['externalId'] = $externalId;

        return $this;
    }

    /**
     * Gets merchName
     *
     * @return string|null
     */
    public function getMerchName()
    {
        return $this->container['merchName'];
    }

    /**
     * Sets merchName
     *
     * @param string|null $merchName 该笔风险交易购买的具体商品名称（适用于支付宝直连商户回传此信息）
     *
     * @return self
     */
    public function setMerchName($merchName)
    {
        $this->container['merchName'] = $merchName;

        return $this;
    }

    /**
     * Gets mobile
     *
     * @return string|null
     */
    public function getMobile()
    {
        return $this->container['mobile'];
    }

    /**
     * Sets mobile
     *
     * @param string|null $mobile 手机（支付宝直连和间连合作伙伴均可回传此参数）
     *
     * @return self
     */
    public function setMobile($mobile)
    {
        $this->container['mobile'] = $mobile;

        return $this;
    }

    /**
     * Gets mobileIp
     *
     * @return string|null
     */
    public function getMobileIp()
    {
        return $this->container['mobileIp'];
    }

    /**
     * Sets mobileIp
     *
     * @param string|null $mobileIp 该账号登录合作伙伴平台时的IP地址（适用于支付宝直连商户回传此信息）
     *
     * @return self
     */
    public function setMobileIp($mobileIp)
    {
        $this->container['mobileIp'] = $mobileIp;

        return $this;
    }

    /**
     * Gets orderIp
     *
     * @return string|null
     */
    public function getOrderIp()
    {
        return $this->container['orderIp'];
    }

    /**
     * Sets orderIp
     *
     * @param string|null $orderIp 该账户在商户平台下单时的MAC地址或IP地址（适用于支付宝直连商户回传此信息）
     *
     * @return self
     */
    public function setOrderIp($orderIp)
    {
        $this->container['orderIp'] = $orderIp;

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
     * @param string|null $pid 适用于直连商户场景下的支付宝合作伙伴ID（适用于支付宝直连合作伙伴回传此信息）
     *
     * @return self
     */
    public function setPid($pid)
    {
        $this->container['pid'] = $pid;

        return $this;
    }

    /**
     * Gets platAccount
     *
     * @return string|null
     */
    public function getPlatAccount()
    {
        return $this->container['platAccount'];
    }

    /**
     * Sets platAccount
     *
     * @param string|null $platAccount 指第三方在商户平台注册成功后，平台给予的账户号（适用于支付宝直连商户回传此信息）
     *
     * @return self
     */
    public function setPlatAccount($platAccount)
    {
        $this->container['platAccount'] = $platAccount;

        return $this;
    }

    /**
     * Gets processCode
     *
     * @return string|null
     */
    public function getProcessCode()
    {
        return $this->container['processCode'];
    }

    /**
     * Sets processCode
     *
     * @param string|null $processCode 直连场景下，商户对该账户采取的措施：  多种处理结果可调用多次，每次回传一种处理结果。  （01：暂停发货；  02：延迟结算；  03：关停账户；  04：暂停发货+关停账户；  05：延迟结算+关停账户；  06：其他；  07：平台进行退款退订；  08：平台跟用户沟通后，用户撤诉。  间连场景下，商户回传处理结果：  对商户的处理情况：  01：已延迟结算，02：关停商户，99：其他  多重处理结果可调用多次，每次回传一种处理结果
     *
     * @return self
     */
    public function setProcessCode($processCode)
    {
        $this->container['processCode'] = $processCode;

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
     * @param string|null $smid 指间连交易场景下商家被支付宝分配的ID（适用于支付宝间连合作伙伴回传此信息）
     *
     * @return self
     */
    public function setSmid($smid)
    {
        $this->container['smid'] = $smid;

        return $this;
    }

    /**
     * Gets tradeNo
     *
     * @return string|null
     */
    public function getTradeNo()
    {
        return $this->container['tradeNo'];
    }

    /**
     * Sets tradeNo
     *
     * @param string|null $tradeNo 支付宝推送的风险消息中的交易号（支付宝直连和间连合作伙伴均需回传此参数）
     *
     * @return self
     */
    public function setTradeNo($tradeNo)
    {
        $this->container['tradeNo'] = $tradeNo;

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


