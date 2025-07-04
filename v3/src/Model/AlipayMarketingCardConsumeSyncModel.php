<?php
/**
 * AlipayMarketingCardConsumeSyncModel
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
 * AlipayMarketingCardConsumeSyncModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayMarketingCardConsumeSyncModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayMarketingCardConsumeSyncModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'actPayAmount' => 'string',
        'cardInfo' => '\Alipay\OpenAPISDK\Model\MerchantCard',
        'gainBenefitList' => '\Alipay\OpenAPISDK\Model\BenefitInfoDetail[]',
        'memo' => 'string',
        'shopCode' => 'string',
        'swipeCertType' => 'string',
        'targetCardNo' => 'string',
        'targetCardNoType' => 'string',
        'tradeAmount' => 'string',
        'tradeName' => 'string',
        'tradeNo' => 'string',
        'tradeTime' => 'string',
        'tradeType' => 'string',
        'useBenefitList' => '\Alipay\OpenAPISDK\Model\BenefitInfoDetail[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'actPayAmount' => null,
        'cardInfo' => null,
        'gainBenefitList' => null,
        'memo' => null,
        'shopCode' => null,
        'swipeCertType' => null,
        'targetCardNo' => null,
        'targetCardNoType' => null,
        'tradeAmount' => null,
        'tradeName' => null,
        'tradeNo' => null,
        'tradeTime' => null,
        'tradeType' => null,
        'useBenefitList' => null
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
        'actPayAmount' => 'act_pay_amount',
        'cardInfo' => 'card_info',
        'gainBenefitList' => 'gain_benefit_list',
        'memo' => 'memo',
        'shopCode' => 'shop_code',
        'swipeCertType' => 'swipe_cert_type',
        'targetCardNo' => 'target_card_no',
        'targetCardNoType' => 'target_card_no_type',
        'tradeAmount' => 'trade_amount',
        'tradeName' => 'trade_name',
        'tradeNo' => 'trade_no',
        'tradeTime' => 'trade_time',
        'tradeType' => 'trade_type',
        'useBenefitList' => 'use_benefit_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'actPayAmount' => 'setActPayAmount',
        'cardInfo' => 'setCardInfo',
        'gainBenefitList' => 'setGainBenefitList',
        'memo' => 'setMemo',
        'shopCode' => 'setShopCode',
        'swipeCertType' => 'setSwipeCertType',
        'targetCardNo' => 'setTargetCardNo',
        'targetCardNoType' => 'setTargetCardNoType',
        'tradeAmount' => 'setTradeAmount',
        'tradeName' => 'setTradeName',
        'tradeNo' => 'setTradeNo',
        'tradeTime' => 'setTradeTime',
        'tradeType' => 'setTradeType',
        'useBenefitList' => 'setUseBenefitList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'actPayAmount' => 'getActPayAmount',
        'cardInfo' => 'getCardInfo',
        'gainBenefitList' => 'getGainBenefitList',
        'memo' => 'getMemo',
        'shopCode' => 'getShopCode',
        'swipeCertType' => 'getSwipeCertType',
        'targetCardNo' => 'getTargetCardNo',
        'targetCardNoType' => 'getTargetCardNoType',
        'tradeAmount' => 'getTradeAmount',
        'tradeName' => 'getTradeName',
        'tradeNo' => 'getTradeNo',
        'tradeTime' => 'getTradeTime',
        'tradeType' => 'getTradeType',
        'useBenefitList' => 'getUseBenefitList'
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
        $this->container['actPayAmount'] = $data['actPayAmount'] ?? null;
        $this->container['cardInfo'] = $data['cardInfo'] ?? null;
        $this->container['gainBenefitList'] = $data['gainBenefitList'] ?? null;
        $this->container['memo'] = $data['memo'] ?? null;
        $this->container['shopCode'] = $data['shopCode'] ?? null;
        $this->container['swipeCertType'] = $data['swipeCertType'] ?? null;
        $this->container['targetCardNo'] = $data['targetCardNo'] ?? null;
        $this->container['targetCardNoType'] = $data['targetCardNoType'] ?? null;
        $this->container['tradeAmount'] = $data['tradeAmount'] ?? null;
        $this->container['tradeName'] = $data['tradeName'] ?? null;
        $this->container['tradeNo'] = $data['tradeNo'] ?? null;
        $this->container['tradeTime'] = $data['tradeTime'] ?? null;
        $this->container['tradeType'] = $data['tradeType'] ?? null;
        $this->container['useBenefitList'] = $data['useBenefitList'] ?? null;
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
     * Gets actPayAmount
     *
     * @return string|null
     */
    public function getActPayAmount()
    {
        return $this->container['actPayAmount'];
    }

    /**
     * Sets actPayAmount
     *
     * @param string|null $actPayAmount 用户实际付的现金金额  1.针对预付卡面额的核销金额在use_benefit_list展现，作为权益金额  2.权益金额不叠加在该金额上
     *
     * @return self
     */
    public function setActPayAmount($actPayAmount)
    {
        $this->container['actPayAmount'] = $actPayAmount;

        return $this;
    }

    /**
     * Gets cardInfo
     *
     * @return \Alipay\OpenAPISDK\Model\MerchantCard|null
     */
    public function getCardInfo()
    {
        return $this->container['cardInfo'];
    }

    /**
     * Sets cardInfo
     *
     * @param \Alipay\OpenAPISDK\Model\MerchantCard|null $cardInfo cardInfo
     *
     * @return self
     */
    public function setCardInfo($cardInfo)
    {
        $this->container['cardInfo'] = $cardInfo;

        return $this;
    }

    /**
     * Gets gainBenefitList
     *
     * @return \Alipay\OpenAPISDK\Model\BenefitInfoDetail[]|null
     */
    public function getGainBenefitList()
    {
        return $this->container['gainBenefitList'];
    }

    /**
     * Sets gainBenefitList
     *
     * @param \Alipay\OpenAPISDK\Model\BenefitInfoDetail[]|null $gainBenefitList 获取权益列表
     *
     * @return self
     */
    public function setGainBenefitList($gainBenefitList)
    {
        $this->container['gainBenefitList'] = $gainBenefitList;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string|null
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string|null $memo 备注信息，现有直接填写门店信息
     *
     * @return self
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets shopCode
     *
     * @return string|null
     */
    public function getShopCode()
    {
        return $this->container['shopCode'];
    }

    /**
     * Sets shopCode
     *
     * @param string|null $shopCode 门店编号
     *
     * @return self
     */
    public function setShopCode($shopCode)
    {
        $this->container['shopCode'] = $shopCode;

        return $this;
    }

    /**
     * Gets swipeCertType
     *
     * @return string|null
     */
    public function getSwipeCertType()
    {
        return $this->container['swipeCertType'];
    }

    /**
     * Sets swipeCertType
     *
     * @param string|null $swipeCertType 产生该笔交易时，用户出具的凭证类型。枚举支持： *ALIPAY：支付宝电子卡； *ENTITY：实体卡； *OTHER：其他。
     *
     * @return self
     */
    public function setSwipeCertType($swipeCertType)
    {
        $this->container['swipeCertType'] = $swipeCertType;

        return $this;
    }

    /**
     * Gets targetCardNo
     *
     * @return string|null
     */
    public function getTargetCardNo()
    {
        return $this->container['targetCardNo'];
    }

    /**
     * Sets targetCardNo
     *
     * @param string|null $targetCardNo 支付宝业务卡号，即通过<a  href=\"https://opendocs.alipay.com/apis/009zw3\">alipay.marketing.card.open</a>(会员卡开卡)接口开卡后获取的  card_info.biz_card_no 值。
     *
     * @return self
     */
    public function setTargetCardNo($targetCardNo)
    {
        $this->container['targetCardNo'] = $targetCardNo;

        return $this;
    }

    /**
     * Gets targetCardNoType
     *
     * @return string|null
     */
    public function getTargetCardNoType()
    {
        return $this->container['targetCardNoType'];
    }

    /**
     * Sets targetCardNoType
     *
     * @param string|null $targetCardNoType 卡号ID类型。支持： *BIZ_CARD：支付宝业务卡号（商户会员卡场景使用）。
     *
     * @return self
     */
    public function setTargetCardNoType($targetCardNoType)
    {
        $this->container['targetCardNoType'] = $targetCardNoType;

        return $this;
    }

    /**
     * Gets tradeAmount
     *
     * @return string|null
     */
    public function getTradeAmount()
    {
        return $this->container['tradeAmount'];
    }

    /**
     * Sets tradeAmount
     *
     * @param string|null $tradeAmount 交易金额：本次交易的实际总金额（可认为标价金额）
     *
     * @return self
     */
    public function setTradeAmount($tradeAmount)
    {
        $this->container['tradeAmount'] = $tradeAmount;

        return $this;
    }

    /**
     * Gets tradeName
     *
     * @return string|null
     */
    public function getTradeName()
    {
        return $this->container['tradeName'];
    }

    /**
     * Sets tradeName
     *
     * @param string|null $tradeName 交易名称。为空时支付宝将根据交易类型提供默认名称。
     *
     * @return self
     */
    public function setTradeName($tradeName)
    {
        $this->container['tradeName'] = $tradeName;

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
     * @param string|null $tradeNo 支付宝交易号
     *
     * @return self
     */
    public function setTradeNo($tradeNo)
    {
        $this->container['tradeNo'] = $tradeNo;

        return $this;
    }

    /**
     * Gets tradeTime
     *
     * @return string|null
     */
    public function getTradeTime()
    {
        return $this->container['tradeTime'];
    }

    /**
     * Sets tradeTime
     *
     * @param string|null $tradeTime 线下交易时间，为用户付款的交易时间。 说明：当交易时间晚于上次消费记录同步时间时，将变更会员卡信息。
     *
     * @return self
     */
    public function setTradeTime($tradeTime)
    {
        $this->container['tradeTime'] = $tradeTime;

        return $this;
    }

    /**
     * Gets tradeType
     *
     * @return string|null
     */
    public function getTradeType()
    {
        return $this->container['tradeType'];
    }

    /**
     * Sets tradeType
     *
     * @param string|null $tradeType 交易类型。枚举支持： *开卡：OPEN； *消费：TRADE； *充值：DEPOSIT； *退卡：RETURN。
     *
     * @return self
     */
    public function setTradeType($tradeType)
    {
        $this->container['tradeType'] = $tradeType;

        return $this;
    }

    /**
     * Gets useBenefitList
     *
     * @return \Alipay\OpenAPISDK\Model\BenefitInfoDetail[]|null
     */
    public function getUseBenefitList()
    {
        return $this->container['useBenefitList'];
    }

    /**
     * Sets useBenefitList
     *
     * @param \Alipay\OpenAPISDK\Model\BenefitInfoDetail[]|null $useBenefitList 实际消耗的权益
     *
     * @return self
     */
    public function setUseBenefitList($useBenefitList)
    {
        $this->container['useBenefitList'] = $useBenefitList;

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


