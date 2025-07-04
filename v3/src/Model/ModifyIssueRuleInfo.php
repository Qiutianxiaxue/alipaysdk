<?php
/**
 * ModifyIssueRuleInfo
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
 * ModifyIssueRuleInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ModifyIssueRuleInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ModifyIssueRuleInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'effectivePeriod' => 'string',
        'issueRuleId' => 'string',
        'issueRuleName' => 'string',
        'issueType' => 'string',
        'quotaType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'effectivePeriod' => null,
        'issueRuleId' => null,
        'issueRuleName' => null,
        'issueType' => null,
        'quotaType' => null
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
        'effectivePeriod' => 'effective_period',
        'issueRuleId' => 'issue_rule_id',
        'issueRuleName' => 'issue_rule_name',
        'issueType' => 'issue_type',
        'quotaType' => 'quota_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'effectivePeriod' => 'setEffectivePeriod',
        'issueRuleId' => 'setIssueRuleId',
        'issueRuleName' => 'setIssueRuleName',
        'issueType' => 'setIssueType',
        'quotaType' => 'setQuotaType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'effectivePeriod' => 'getEffectivePeriod',
        'issueRuleId' => 'getIssueRuleId',
        'issueRuleName' => 'getIssueRuleName',
        'issueType' => 'getIssueType',
        'quotaType' => 'getQuotaType'
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
        $this->container['effectivePeriod'] = $data['effectivePeriod'] ?? null;
        $this->container['issueRuleId'] = $data['issueRuleId'] ?? null;
        $this->container['issueRuleName'] = $data['issueRuleName'] ?? null;
        $this->container['issueType'] = $data['issueType'] ?? null;
        $this->container['quotaType'] = $data['quotaType'] ?? null;
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
     * Gets effectivePeriod
     *
     * @return string|null
     */
    public function getEffectivePeriod()
    {
        return $this->container['effectivePeriod'];
    }

    /**
     * Sets effectivePeriod
     *
     * @param string|null $effectivePeriod 发放资产的有效时间段，该字段为空时，默认为不限制。当发放资产为余额时，仅支持设置为不限，当发放资产为点券时，可支持设置多种值。具体传值格式请参考文档 <a href=\"https://opendocs.alipay.com/pre-open/07nwcs\">接入文档</a>
     *
     * @return self
     */
    public function setEffectivePeriod($effectivePeriod)
    {
        $this->container['effectivePeriod'] = $effectivePeriod;

        return $this;
    }

    /**
     * Gets issueRuleId
     *
     * @return string|null
     */
    public function getIssueRuleId()
    {
        return $this->container['issueRuleId'];
    }

    /**
     * Sets issueRuleId
     *
     * @param string|null $issueRuleId 发放规则id
     *
     * @return self
     */
    public function setIssueRuleId($issueRuleId)
    {
        $this->container['issueRuleId'] = $issueRuleId;

        return $this;
    }

    /**
     * Gets issueRuleName
     *
     * @return string|null
     */
    public function getIssueRuleName()
    {
        return $this->container['issueRuleName'];
    }

    /**
     * Sets issueRuleName
     *
     * @param string|null $issueRuleName 发放规则名称
     *
     * @return self
     */
    public function setIssueRuleName($issueRuleName)
    {
        $this->container['issueRuleName'] = $issueRuleName;

        return $this;
    }

    /**
     * Gets issueType
     *
     * @return string|null
     */
    public function getIssueType()
    {
        return $this->container['issueType'];
    }

    /**
     * Sets issueType
     *
     * @param string|null $issueType 额度发放周期
     *
     * @return self
     */
    public function setIssueType($issueType)
    {
        $this->container['issueType'] = $issueType;

        return $this;
    }

    /**
     * Gets quotaType
     *
     * @return string|null
     */
    public function getQuotaType()
    {
        return $this->container['quotaType'];
    }

    /**
     * Sets quotaType
     *
     * @param string|null $quotaType 发放规则发放的额度类型
     *
     * @return self
     */
    public function setQuotaType($quotaType)
    {
        $this->container['quotaType'] = $quotaType;

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


