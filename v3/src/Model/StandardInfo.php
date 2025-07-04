<?php
/**
 * StandardInfo
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
 * StandardInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class StandardInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StandardInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'assetShareSourceInfo' => '\Alipay\OpenAPISDK\Model\AssetShareSourceInfo',
        'consumeMode' => 'string',
        'expenseTypeSubCategory' => 'string',
        'openRuleId' => 'string',
        'outerSourceId' => 'string',
        'paymentPolicy' => 'string',
        'personalQrcodeMode' => 'int',
        'standardConditionInfoList' => '\Alipay\OpenAPISDK\Model\StandardConditionInfo[]',
        'standardDesc' => 'string',
        'standardId' => 'string',
        'standardName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'assetShareSourceInfo' => null,
        'consumeMode' => null,
        'expenseTypeSubCategory' => null,
        'openRuleId' => null,
        'outerSourceId' => null,
        'paymentPolicy' => null,
        'personalQrcodeMode' => null,
        'standardConditionInfoList' => null,
        'standardDesc' => null,
        'standardId' => null,
        'standardName' => null
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
        'assetShareSourceInfo' => 'asset_share_source_info',
        'consumeMode' => 'consume_mode',
        'expenseTypeSubCategory' => 'expense_type_sub_category',
        'openRuleId' => 'open_rule_id',
        'outerSourceId' => 'outer_source_id',
        'paymentPolicy' => 'payment_policy',
        'personalQrcodeMode' => 'personal_qrcode_mode',
        'standardConditionInfoList' => 'standard_condition_info_list',
        'standardDesc' => 'standard_desc',
        'standardId' => 'standard_id',
        'standardName' => 'standard_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assetShareSourceInfo' => 'setAssetShareSourceInfo',
        'consumeMode' => 'setConsumeMode',
        'expenseTypeSubCategory' => 'setExpenseTypeSubCategory',
        'openRuleId' => 'setOpenRuleId',
        'outerSourceId' => 'setOuterSourceId',
        'paymentPolicy' => 'setPaymentPolicy',
        'personalQrcodeMode' => 'setPersonalQrcodeMode',
        'standardConditionInfoList' => 'setStandardConditionInfoList',
        'standardDesc' => 'setStandardDesc',
        'standardId' => 'setStandardId',
        'standardName' => 'setStandardName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assetShareSourceInfo' => 'getAssetShareSourceInfo',
        'consumeMode' => 'getConsumeMode',
        'expenseTypeSubCategory' => 'getExpenseTypeSubCategory',
        'openRuleId' => 'getOpenRuleId',
        'outerSourceId' => 'getOuterSourceId',
        'paymentPolicy' => 'getPaymentPolicy',
        'personalQrcodeMode' => 'getPersonalQrcodeMode',
        'standardConditionInfoList' => 'getStandardConditionInfoList',
        'standardDesc' => 'getStandardDesc',
        'standardId' => 'getStandardId',
        'standardName' => 'getStandardName'
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
        $this->container['assetShareSourceInfo'] = $data['assetShareSourceInfo'] ?? null;
        $this->container['consumeMode'] = $data['consumeMode'] ?? null;
        $this->container['expenseTypeSubCategory'] = $data['expenseTypeSubCategory'] ?? null;
        $this->container['openRuleId'] = $data['openRuleId'] ?? null;
        $this->container['outerSourceId'] = $data['outerSourceId'] ?? null;
        $this->container['paymentPolicy'] = $data['paymentPolicy'] ?? null;
        $this->container['personalQrcodeMode'] = $data['personalQrcodeMode'] ?? null;
        $this->container['standardConditionInfoList'] = $data['standardConditionInfoList'] ?? null;
        $this->container['standardDesc'] = $data['standardDesc'] ?? null;
        $this->container['standardId'] = $data['standardId'] ?? null;
        $this->container['standardName'] = $data['standardName'] ?? null;
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
     * Gets assetShareSourceInfo
     *
     * @return \Alipay\OpenAPISDK\Model\AssetShareSourceInfo|null
     */
    public function getAssetShareSourceInfo()
    {
        return $this->container['assetShareSourceInfo'];
    }

    /**
     * Sets assetShareSourceInfo
     *
     * @param \Alipay\OpenAPISDK\Model\AssetShareSourceInfo|null $assetShareSourceInfo assetShareSourceInfo
     *
     * @return self
     */
    public function setAssetShareSourceInfo($assetShareSourceInfo)
    {
        $this->container['assetShareSourceInfo'] = $assetShareSourceInfo;

        return $this;
    }

    /**
     * Gets consumeMode
     *
     * @return string|null
     */
    public function getConsumeMode()
    {
        return $this->container['consumeMode'];
    }

    /**
     * Sets consumeMode
     *
     * @param string|null $consumeMode 消费模式，不填为默认模式，枚举值：COUPON_ONLY（仅支持点券） COUPON_AND_CAP（支持点券+余额） COUNT（仅支持次卡） DEFAULT（默认模式） 点券：消费时找员工的点券，没有或者用完了不可付； 点券+余额：消费时找员工的点券，没有找员工的余额，没有或者用完了不可付； 次卡：消费时找员工的次卡，没有或者用完了不可付； 默认：有给员工设置员工余额以员工余额为准，用完为止。否则只受规则里的限额和企业账户资金上限管控；
     *
     * @return self
     */
    public function setConsumeMode($consumeMode)
    {
        $this->container['consumeMode'] = $consumeMode;

        return $this;
    }

    /**
     * Gets expenseTypeSubCategory
     *
     * @return string|null
     */
    public function getExpenseTypeSubCategory()
    {
        return $this->container['expenseTypeSubCategory'];
    }

    /**
     * Sets expenseTypeSubCategory
     *
     * @param string|null $expenseTypeSubCategory 费用类型子类
     *
     * @return self
     */
    public function setExpenseTypeSubCategory($expenseTypeSubCategory)
    {
        $this->container['expenseTypeSubCategory'] = $expenseTypeSubCategory;

        return $this;
    }

    /**
     * Gets openRuleId
     *
     * @return string|null
     */
    public function getOpenRuleId()
    {
        return $this->container['openRuleId'];
    }

    /**
     * Sets openRuleId
     *
     * @param string|null $openRuleId 开票规则id，可通过接口alipay.ebpp.invoice.enterpriseconsume.enterpriseopenrule.create 创建并得到开票规则ID
     *
     * @return self
     */
    public function setOpenRuleId($openRuleId)
    {
        $this->container['openRuleId'] = $openRuleId;

        return $this;
    }

    /**
     * Gets outerSourceId
     *
     * @return string|null
     */
    public function getOuterSourceId()
    {
        return $this->container['outerSourceId'];
    }

    /**
     * Sets outerSourceId
     *
     * @param string|null $outerSourceId 外部使用规则id，制度内使用规则该字段不允许重复
     *
     * @return self
     */
    public function setOuterSourceId($outerSourceId)
    {
        $this->container['outerSourceId'] = $outerSourceId;

        return $this;
    }

    /**
     * Gets paymentPolicy
     *
     * @return string|null
     */
    public function getPaymentPolicy()
    {
        return $this->container['paymentPolicy'];
    }

    /**
     * Sets paymentPolicy
     *
     * @param string|null $paymentPolicy 支付策略 当笔消费金额大于规则可用余额时，用于控制支付策略，该字段缺省时采取因公账户和个人账户组合支付策略
     *
     * @return self
     */
    public function setPaymentPolicy($paymentPolicy)
    {
        $this->container['paymentPolicy'] = $paymentPolicy;

        return $this;
    }

    /**
     * Gets personalQrcodeMode
     *
     * @return int|null
     */
    public function getPersonalQrcodeMode()
    {
        return $this->container['personalQrcodeMode'];
    }

    /**
     * Sets personalQrcodeMode
     *
     * @param int|null $personalQrcodeMode 个人收款码转账是否支持因公付，默认为0。可选值：0（不支持）、1（支持）
     *
     * @return self
     */
    public function setPersonalQrcodeMode($personalQrcodeMode)
    {
        $this->container['personalQrcodeMode'] = $personalQrcodeMode;

        return $this;
    }

    /**
     * Gets standardConditionInfoList
     *
     * @return \Alipay\OpenAPISDK\Model\StandardConditionInfo[]|null
     */
    public function getStandardConditionInfoList()
    {
        return $this->container['standardConditionInfoList'];
    }

    /**
     * Sets standardConditionInfoList
     *
     * @param \Alipay\OpenAPISDK\Model\StandardConditionInfo[]|null $standardConditionInfoList 使用规则条件列表
     *
     * @return self
     */
    public function setStandardConditionInfoList($standardConditionInfoList)
    {
        $this->container['standardConditionInfoList'] = $standardConditionInfoList;

        return $this;
    }

    /**
     * Gets standardDesc
     *
     * @return string|null
     */
    public function getStandardDesc()
    {
        return $this->container['standardDesc'];
    }

    /**
     * Sets standardDesc
     *
     * @param string|null $standardDesc 使用规则描述(敏感词校验)
     *
     * @return self
     */
    public function setStandardDesc($standardDesc)
    {
        $this->container['standardDesc'] = $standardDesc;

        return $this;
    }

    /**
     * Gets standardId
     *
     * @return string|null
     */
    public function getStandardId()
    {
        return $this->container['standardId'];
    }

    /**
     * Sets standardId
     *
     * @param string|null $standardId 制度ID（创建使用规则时非必填）
     *
     * @return self
     */
    public function setStandardId($standardId)
    {
        $this->container['standardId'] = $standardId;

        return $this;
    }

    /**
     * Gets standardName
     *
     * @return string|null
     */
    public function getStandardName()
    {
        return $this->container['standardName'];
    }

    /**
     * Sets standardName
     *
     * @param string|null $standardName 规则名称
     *
     * @return self
     */
    public function setStandardName($standardName)
    {
        $this->container['standardName'] = $standardName;

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


