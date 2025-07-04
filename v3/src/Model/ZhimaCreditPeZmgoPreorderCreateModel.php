<?php
/**
 * ZhimaCreditPeZmgoPreorderCreateModel
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
 * ZhimaCreditPeZmgoPreorderCreateModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ZhimaCreditPeZmgoPreorderCreateModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ZhimaCreditPeZmgoPreorderCreateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'alipayOpenId' => 'string',
        'alipayUserId' => 'string',
        'bizTime' => 'string',
        'customTempConf' => 'string',
        'expireAisleData' => 'string',
        'extTemplateConf' => '\Alipay\OpenAPISDK\Model\ExtTemplateConf',
        'extendParams' => '\Alipay\OpenAPISDK\Model\PreOrderExtInfo',
        'freezeAmount' => 'string',
        'isvPid' => 'string',
        'outRequestNo' => 'string',
        'partnerId' => 'string',
        'partnerUserIdentifier' => 'string',
        'payAisleData' => 'string',
        'signAisleData' => 'string',
        'templateId' => 'string',
        'timeoutExpress' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'alipayOpenId' => null,
        'alipayUserId' => null,
        'bizTime' => null,
        'customTempConf' => null,
        'expireAisleData' => null,
        'extTemplateConf' => null,
        'extendParams' => null,
        'freezeAmount' => null,
        'isvPid' => null,
        'outRequestNo' => null,
        'partnerId' => null,
        'partnerUserIdentifier' => null,
        'payAisleData' => null,
        'signAisleData' => null,
        'templateId' => null,
        'timeoutExpress' => null
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
        'alipayOpenId' => 'alipay_open_id',
        'alipayUserId' => 'alipay_user_id',
        'bizTime' => 'biz_time',
        'customTempConf' => 'custom_temp_conf',
        'expireAisleData' => 'expire_aisle_data',
        'extTemplateConf' => 'ext_template_conf',
        'extendParams' => 'extend_params',
        'freezeAmount' => 'freeze_amount',
        'isvPid' => 'isv_pid',
        'outRequestNo' => 'out_request_no',
        'partnerId' => 'partner_id',
        'partnerUserIdentifier' => 'partner_user_identifier',
        'payAisleData' => 'pay_aisle_data',
        'signAisleData' => 'sign_aisle_data',
        'templateId' => 'template_id',
        'timeoutExpress' => 'timeout_express'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alipayOpenId' => 'setAlipayOpenId',
        'alipayUserId' => 'setAlipayUserId',
        'bizTime' => 'setBizTime',
        'customTempConf' => 'setCustomTempConf',
        'expireAisleData' => 'setExpireAisleData',
        'extTemplateConf' => 'setExtTemplateConf',
        'extendParams' => 'setExtendParams',
        'freezeAmount' => 'setFreezeAmount',
        'isvPid' => 'setIsvPid',
        'outRequestNo' => 'setOutRequestNo',
        'partnerId' => 'setPartnerId',
        'partnerUserIdentifier' => 'setPartnerUserIdentifier',
        'payAisleData' => 'setPayAisleData',
        'signAisleData' => 'setSignAisleData',
        'templateId' => 'setTemplateId',
        'timeoutExpress' => 'setTimeoutExpress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alipayOpenId' => 'getAlipayOpenId',
        'alipayUserId' => 'getAlipayUserId',
        'bizTime' => 'getBizTime',
        'customTempConf' => 'getCustomTempConf',
        'expireAisleData' => 'getExpireAisleData',
        'extTemplateConf' => 'getExtTemplateConf',
        'extendParams' => 'getExtendParams',
        'freezeAmount' => 'getFreezeAmount',
        'isvPid' => 'getIsvPid',
        'outRequestNo' => 'getOutRequestNo',
        'partnerId' => 'getPartnerId',
        'partnerUserIdentifier' => 'getPartnerUserIdentifier',
        'payAisleData' => 'getPayAisleData',
        'signAisleData' => 'getSignAisleData',
        'templateId' => 'getTemplateId',
        'timeoutExpress' => 'getTimeoutExpress'
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
        $this->container['alipayOpenId'] = $data['alipayOpenId'] ?? null;
        $this->container['alipayUserId'] = $data['alipayUserId'] ?? null;
        $this->container['bizTime'] = $data['bizTime'] ?? null;
        $this->container['customTempConf'] = $data['customTempConf'] ?? null;
        $this->container['expireAisleData'] = $data['expireAisleData'] ?? null;
        $this->container['extTemplateConf'] = $data['extTemplateConf'] ?? null;
        $this->container['extendParams'] = $data['extendParams'] ?? null;
        $this->container['freezeAmount'] = $data['freezeAmount'] ?? null;
        $this->container['isvPid'] = $data['isvPid'] ?? null;
        $this->container['outRequestNo'] = $data['outRequestNo'] ?? null;
        $this->container['partnerId'] = $data['partnerId'] ?? null;
        $this->container['partnerUserIdentifier'] = $data['partnerUserIdentifier'] ?? null;
        $this->container['payAisleData'] = $data['payAisleData'] ?? null;
        $this->container['signAisleData'] = $data['signAisleData'] ?? null;
        $this->container['templateId'] = $data['templateId'] ?? null;
        $this->container['timeoutExpress'] = $data['timeoutExpress'] ?? null;
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
     * Gets alipayOpenId
     *
     * @return string|null
     */
    public function getAlipayOpenId()
    {
        return $this->container['alipayOpenId'];
    }

    /**
     * Sets alipayOpenId
     *
     * @param string|null $alipayOpenId 支付宝用户ID。同一个外部请求号，调用方要确保支付宝userId取值不变
     *
     * @return self
     */
    public function setAlipayOpenId($alipayOpenId)
    {
        $this->container['alipayOpenId'] = $alipayOpenId;

        return $this;
    }

    /**
     * Gets alipayUserId
     *
     * @return string|null
     */
    public function getAlipayUserId()
    {
        return $this->container['alipayUserId'];
    }

    /**
     * Sets alipayUserId
     *
     * @param string|null $alipayUserId 支付宝用户ID。同一个外部请求号，调用方要确保支付宝userId取值不变
     *
     * @return self
     */
    public function setAlipayUserId($alipayUserId)
    {
        $this->container['alipayUserId'] = $alipayUserId;

        return $this;
    }

    /**
     * Gets bizTime
     *
     * @return string|null
     */
    public function getBizTime()
    {
        return $this->container['bizTime'];
    }

    /**
     * Sets bizTime
     *
     * @param string|null $bizTime 业务发生时间，如2016-07-06 00:00:02 签约超时关单时间依赖这个时间 这个时间会做幂等校验，如果创单幂等，但时间不同会失败
     *
     * @return self
     */
    public function setBizTime($bizTime)
    {
        $this->container['bizTime'] = $bizTime;

        return $this;
    }

    /**
     * Gets customTempConf
     *
     * @return string|null
     */
    public function getCustomTempConf()
    {
        return $this->container['customTempConf'];
    }

    /**
     * Sets customTempConf
     *
     * @param string|null $customTempConf 废弃字段，勿用
     *
     * @return self
     */
    public function setCustomTempConf($customTempConf)
    {
        $this->container['customTempConf'] = $customTempConf;

        return $this;
    }

    /**
     * Gets expireAisleData
     *
     * @return string|null
     */
    public function getExpireAisleData()
    {
        return $this->container['expireAisleData'];
    }

    /**
     * Sets expireAisleData
     *
     * @param string|null $expireAisleData 协议到期后通知
     *
     * @return self
     */
    public function setExpireAisleData($expireAisleData)
    {
        $this->container['expireAisleData'] = $expireAisleData;

        return $this;
    }

    /**
     * Gets extTemplateConf
     *
     * @return \Alipay\OpenAPISDK\Model\ExtTemplateConf|null
     */
    public function getExtTemplateConf()
    {
        return $this->container['extTemplateConf'];
    }

    /**
     * Sets extTemplateConf
     *
     * @param \Alipay\OpenAPISDK\Model\ExtTemplateConf|null $extTemplateConf extTemplateConf
     *
     * @return self
     */
    public function setExtTemplateConf($extTemplateConf)
    {
        $this->container['extTemplateConf'] = $extTemplateConf;

        return $this;
    }

    /**
     * Gets extendParams
     *
     * @return \Alipay\OpenAPISDK\Model\PreOrderExtInfo|null
     */
    public function getExtendParams()
    {
        return $this->container['extendParams'];
    }

    /**
     * Sets extendParams
     *
     * @param \Alipay\OpenAPISDK\Model\PreOrderExtInfo|null $extendParams extendParams
     *
     * @return self
     */
    public function setExtendParams($extendParams)
    {
        $this->container['extendParams'] = $extendParams;

        return $this;
    }

    /**
     * Gets freezeAmount
     *
     * @return string|null
     */
    public function getFreezeAmount()
    {
        return $this->container['freezeAmount'];
    }

    /**
     * Sets freezeAmount
     *
     * @param string|null $freezeAmount 冻结金额，单位：元
     *
     * @return self
     */
    public function setFreezeAmount($freezeAmount)
    {
        $this->container['freezeAmount'] = $freezeAmount;

        return $this;
    }

    /**
     * Gets isvPid
     *
     * @return string|null
     */
    public function getIsvPid()
    {
        return $this->container['isvPid'];
    }

    /**
     * Sets isvPid
     *
     * @param string|null $isvPid ISV商户ID
     *
     * @return self
     */
    public function setIsvPid($isvPid)
    {
        $this->container['isvPid'] = $isvPid;

        return $this;
    }

    /**
     * Gets outRequestNo
     *
     * @return string|null
     */
    public function getOutRequestNo()
    {
        return $this->container['outRequestNo'];
    }

    /**
     * Sets outRequestNo
     *
     * @param string|null $outRequestNo 外部请求号，唯一
     *
     * @return self
     */
    public function setOutRequestNo($outRequestNo)
    {
        $this->container['outRequestNo'] = $outRequestNo;

        return $this;
    }

    /**
     * Gets partnerId
     *
     * @return string|null
     */
    public function getPartnerId()
    {
        return $this->container['partnerId'];
    }

    /**
     * Sets partnerId
     *
     * @param string|null $partnerId 商户ID
     *
     * @return self
     */
    public function setPartnerId($partnerId)
    {
        $this->container['partnerId'] = $partnerId;

        return $this;
    }

    /**
     * Gets partnerUserIdentifier
     *
     * @return string|null
     */
    public function getPartnerUserIdentifier()
    {
        return $this->container['partnerUserIdentifier'];
    }

    /**
     * Sets partnerUserIdentifier
     *
     * @param string|null $partnerUserIdentifier 商户侧用户唯一标识。ex.商户侧uid
     *
     * @return self
     */
    public function setPartnerUserIdentifier($partnerUserIdentifier)
    {
        $this->container['partnerUserIdentifier'] = $partnerUserIdentifier;

        return $this;
    }

    /**
     * Gets payAisleData
     *
     * @return string|null
     */
    public function getPayAisleData()
    {
        return $this->container['payAisleData'];
    }

    /**
     * Sets payAisleData
     *
     * @param string|null $payAisleData 结算成功后通知
     *
     * @return self
     */
    public function setPayAisleData($payAisleData)
    {
        $this->container['payAisleData'] = $payAisleData;

        return $this;
    }

    /**
     * Gets signAisleData
     *
     * @return string|null
     */
    public function getSignAisleData()
    {
        return $this->container['signAisleData'];
    }

    /**
     * Sets signAisleData
     *
     * @param string|null $signAisleData 签约成功后通知
     *
     * @return self
     */
    public function setSignAisleData($signAisleData)
    {
        $this->container['signAisleData'] = $signAisleData;

        return $this;
    }

    /**
     * Gets templateId
     *
     * @return string|null
     */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
     * Sets templateId
     *
     * @param string|null $templateId 签约芝麻GO的模板ID
     *
     * @return self
     */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;

        return $this;
    }

    /**
     * Gets timeoutExpress
     *
     * @return string|null
     */
    public function getTimeoutExpress()
    {
        return $this->container['timeoutExpress'];
    }

    /**
     * Sets timeoutExpress
     *
     * @param string|null $timeoutExpress 超时关单时间 默认1H。1m～15d。m表示分钟，h表示小时，d表示天。该参数数值不接受小数点， 如1.5h，可转换为90m 签约超时关单时间依赖这个时间
     *
     * @return self
     */
    public function setTimeoutExpress($timeoutExpress)
    {
        $this->container['timeoutExpress'] = $timeoutExpress;

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


