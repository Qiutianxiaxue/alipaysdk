<?php
/**
 * AlipayEbppPdeductSignValidateModel
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
 * AlipayEbppPdeductSignValidateModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayEbppPdeductSignValidateModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayEbppPdeductSignValidateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'agentChannel' => 'string',
        'agentCode' => 'string',
        'billKey' => 'string',
        'bizType' => 'string',
        'chargeInst' => 'string',
        'deductType' => 'string',
        'extendField' => 'string',
        'notifyConfig' => 'string',
        'openId' => 'string',
        'outAgreementId' => 'string',
        'ownerName' => 'string',
        'payConfig' => 'string',
        'pid' => 'string',
        'signExpireDate' => 'string',
        'subBizType' => 'string',
        'userId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'agentChannel' => null,
        'agentCode' => null,
        'billKey' => null,
        'bizType' => null,
        'chargeInst' => null,
        'deductType' => null,
        'extendField' => null,
        'notifyConfig' => null,
        'openId' => null,
        'outAgreementId' => null,
        'ownerName' => null,
        'payConfig' => null,
        'pid' => null,
        'signExpireDate' => null,
        'subBizType' => null,
        'userId' => null
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
        'agentChannel' => 'agent_channel',
        'agentCode' => 'agent_code',
        'billKey' => 'bill_key',
        'bizType' => 'biz_type',
        'chargeInst' => 'charge_inst',
        'deductType' => 'deduct_type',
        'extendField' => 'extend_field',
        'notifyConfig' => 'notify_config',
        'openId' => 'open_id',
        'outAgreementId' => 'out_agreement_id',
        'ownerName' => 'owner_name',
        'payConfig' => 'pay_config',
        'pid' => 'pid',
        'signExpireDate' => 'sign_expire_date',
        'subBizType' => 'sub_biz_type',
        'userId' => 'user_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agentChannel' => 'setAgentChannel',
        'agentCode' => 'setAgentCode',
        'billKey' => 'setBillKey',
        'bizType' => 'setBizType',
        'chargeInst' => 'setChargeInst',
        'deductType' => 'setDeductType',
        'extendField' => 'setExtendField',
        'notifyConfig' => 'setNotifyConfig',
        'openId' => 'setOpenId',
        'outAgreementId' => 'setOutAgreementId',
        'ownerName' => 'setOwnerName',
        'payConfig' => 'setPayConfig',
        'pid' => 'setPid',
        'signExpireDate' => 'setSignExpireDate',
        'subBizType' => 'setSubBizType',
        'userId' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agentChannel' => 'getAgentChannel',
        'agentCode' => 'getAgentCode',
        'billKey' => 'getBillKey',
        'bizType' => 'getBizType',
        'chargeInst' => 'getChargeInst',
        'deductType' => 'getDeductType',
        'extendField' => 'getExtendField',
        'notifyConfig' => 'getNotifyConfig',
        'openId' => 'getOpenId',
        'outAgreementId' => 'getOutAgreementId',
        'ownerName' => 'getOwnerName',
        'payConfig' => 'getPayConfig',
        'pid' => 'getPid',
        'signExpireDate' => 'getSignExpireDate',
        'subBizType' => 'getSubBizType',
        'userId' => 'getUserId'
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
        $this->container['agentChannel'] = $data['agentChannel'] ?? null;
        $this->container['agentCode'] = $data['agentCode'] ?? null;
        $this->container['billKey'] = $data['billKey'] ?? null;
        $this->container['bizType'] = $data['bizType'] ?? null;
        $this->container['chargeInst'] = $data['chargeInst'] ?? null;
        $this->container['deductType'] = $data['deductType'] ?? null;
        $this->container['extendField'] = $data['extendField'] ?? null;
        $this->container['notifyConfig'] = $data['notifyConfig'] ?? null;
        $this->container['openId'] = $data['openId'] ?? null;
        $this->container['outAgreementId'] = $data['outAgreementId'] ?? null;
        $this->container['ownerName'] = $data['ownerName'] ?? null;
        $this->container['payConfig'] = $data['payConfig'] ?? null;
        $this->container['pid'] = $data['pid'] ?? null;
        $this->container['signExpireDate'] = $data['signExpireDate'] ?? null;
        $this->container['subBizType'] = $data['subBizType'] ?? null;
        $this->container['userId'] = $data['userId'] ?? null;
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
     * Gets agentChannel
     *
     * @return string|null
     */
    public function getAgentChannel()
    {
        return $this->container['agentChannel'];
    }

    /**
     * Sets agentChannel
     *
     * @param string|null $agentChannel 机构签约代扣来源渠道  PUBLICPLATFORM：服务窗
     *
     * @return self
     */
    public function setAgentChannel($agentChannel)
    {
        $this->container['agentChannel'] = $agentChannel;

        return $this;
    }

    /**
     * Gets agentCode
     *
     * @return string|null
     */
    public function getAgentCode()
    {
        return $this->container['agentCode'];
    }

    /**
     * Sets agentCode
     *
     * @param string|null $agentCode 从服务窗发起则为该服务窗的appid的值
     *
     * @return self
     */
    public function setAgentCode($agentCode)
    {
        $this->container['agentCode'] = $agentCode;

        return $this;
    }

    /**
     * Gets billKey
     *
     * @return string|null
     */
    public function getBillKey()
    {
        return $this->container['billKey'];
    }

    /**
     * Sets billKey
     *
     * @param string|null $billKey 户号，机构针对于每户的水、电都会有唯一的标识户号
     *
     * @return self
     */
    public function setBillKey($billKey)
    {
        $this->container['billKey'] = $billKey;

        return $this;
    }

    /**
     * Gets bizType
     *
     * @return string|null
     */
    public function getBizType()
    {
        return $this->container['bizType'];
    }

    /**
     * Sets bizType
     *
     * @param string|null $bizType 业务类型。  JF：缴水、电、燃气、固话宽带、有线电视、交通罚款费用  WUYE：缴物业费  HK：信用卡还款  TX：手机充值
     *
     * @return self
     */
    public function setBizType($bizType)
    {
        $this->container['bizType'] = $bizType;

        return $this;
    }

    /**
     * Gets chargeInst
     *
     * @return string|null
     */
    public function getChargeInst()
    {
        return $this->container['chargeInst'];
    }

    /**
     * Sets chargeInst
     *
     * @param string|null $chargeInst 支付宝缴费系统中的出账机构ID
     *
     * @return self
     */
    public function setChargeInst($chargeInst)
    {
        $this->container['chargeInst'] = $chargeInst;

        return $this;
    }

    /**
     * Gets deductType
     *
     * @return string|null
     */
    public function getDeductType()
    {
        return $this->container['deductType'];
    }

    /**
     * Sets deductType
     *
     * @param string|null $deductType 签约类型,可为空。目前类型有INST_DIRECT_DEDUCT
     *
     * @return self
     */
    public function setDeductType($deductType)
    {
        $this->container['deductType'] = $deductType;

        return $this;
    }

    /**
     * Gets extendField
     *
     * @return string|null
     */
    public function getExtendField()
    {
        return $this->container['extendField'];
    }

    /**
     * Sets extendField
     *
     * @param string|null $extendField 扩展字段
     *
     * @return self
     */
    public function setExtendField($extendField)
    {
        $this->container['extendField'] = $extendField;

        return $this;
    }

    /**
     * Gets notifyConfig
     *
     * @return string|null
     */
    public function getNotifyConfig()
    {
        return $this->container['notifyConfig'];
    }

    /**
     * Sets notifyConfig
     *
     * @param string|null $notifyConfig 通知方式设置，本期预留字段，固定传空。
     *
     * @return self
     */
    public function setNotifyConfig($notifyConfig)
    {
        $this->container['notifyConfig'] = $notifyConfig;

        return $this;
    }

    /**
     * Gets openId
     *
     * @return string|null
     */
    public function getOpenId()
    {
        return $this->container['openId'];
    }

    /**
     * Sets openId
     *
     * @param string|null $openId 用户UserId在应用AppId下的唯一用户标识
     *
     * @return self
     */
    public function setOpenId($openId)
    {
        $this->container['openId'] = $openId;

        return $this;
    }

    /**
     * Gets outAgreementId
     *
     * @return string|null
     */
    public function getOutAgreementId()
    {
        return $this->container['outAgreementId'];
    }

    /**
     * Sets outAgreementId
     *
     * @param string|null $outAgreementId 外部机构签约的协议id
     *
     * @return self
     */
    public function setOutAgreementId($outAgreementId)
    {
        $this->container['outAgreementId'] = $outAgreementId;

        return $this;
    }

    /**
     * Gets ownerName
     *
     * @return string|null
     */
    public function getOwnerName()
    {
        return $this->container['ownerName'];
    }

    /**
     * Sets ownerName
     *
     * @param string|null $ownerName 户名，户主真实姓名
     *
     * @return self
     */
    public function setOwnerName($ownerName)
    {
        $this->container['ownerName'] = $ownerName;

        return $this;
    }

    /**
     * Gets payConfig
     *
     * @return string|null
     */
    public function getPayConfig()
    {
        return $this->container['payConfig'];
    }

    /**
     * Sets payConfig
     *
     * @param string|null $payConfig 支付工具设置，目前可为空。类型有：BALANCE;CARTOON;BIGAMOUNT_CREDIT_CARTOON;DEBIT_EXPRESS;OPTIMIZED_MOTO;PCREDIT_PAY;MONEY_FUND
     *
     * @return self
     */
    public function setPayConfig($payConfig)
    {
        $this->container['payConfig'] = $payConfig;

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
     * @param string|null $pid 商户签约支付宝账号的userid，2088开头16位长度的字符串，在支付宝系统中唯一
     *
     * @return self
     */
    public function setPid($pid)
    {
        $this->container['pid'] = $pid;

        return $this;
    }

    /**
     * Gets signExpireDate
     *
     * @return string|null
     */
    public function getSignExpireDate()
    {
        return $this->container['signExpireDate'];
    }

    /**
     * Sets signExpireDate
     *
     * @param string|null $signExpireDate 签约到期时间。空表示无限期，一期固定传空。
     *
     * @return self
     */
    public function setSignExpireDate($signExpireDate)
    {
        $this->container['signExpireDate'] = $signExpireDate;

        return $this;
    }

    /**
     * Gets subBizType
     *
     * @return string|null
     */
    public function getSubBizType()
    {
        return $this->container['subBizType'];
    }

    /**
     * Sets subBizType
     *
     * @param string|null $subBizType 业务子类型。  WATER：缴水费  ELECTRIC：缴电费  GAS：缴燃气费  COMMUN：缴固话宽带  CATV：缴有线电视费  TRAFFIC：缴交通罚款  WUYE：缴物业费  HK：信用卡还款  CZ：手机充值
     *
     * @return self
     */
    public function setSubBizType($subBizType)
    {
        $this->container['subBizType'] = $subBizType;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param string|null $userId 用户支付宝账号id，2088开头16位长度的字符串，在支付宝系统中唯一
     *
     * @return self
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

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


