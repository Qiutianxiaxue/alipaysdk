<?php
/**
 * ModifyIssueRuleDetailInfo
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
 * ModifyIssueRuleDetailInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ModifyIssueRuleDetailInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ModifyIssueRuleDetailInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'addIssueRuleList' => '\Alipay\OpenAPISDK\Model\IssueRuleInfo[]',
        'deleteIssueRuleIdList' => 'string[]',
        'modifyIssueRuleList' => '\Alipay\OpenAPISDK\Model\ModifyIssueRuleInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'addIssueRuleList' => null,
        'deleteIssueRuleIdList' => null,
        'modifyIssueRuleList' => null
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
        'addIssueRuleList' => 'add_issue_rule_list',
        'deleteIssueRuleIdList' => 'delete_issue_rule_id_list',
        'modifyIssueRuleList' => 'modify_issue_rule_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'addIssueRuleList' => 'setAddIssueRuleList',
        'deleteIssueRuleIdList' => 'setDeleteIssueRuleIdList',
        'modifyIssueRuleList' => 'setModifyIssueRuleList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'addIssueRuleList' => 'getAddIssueRuleList',
        'deleteIssueRuleIdList' => 'getDeleteIssueRuleIdList',
        'modifyIssueRuleList' => 'getModifyIssueRuleList'
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
        $this->container['addIssueRuleList'] = $data['addIssueRuleList'] ?? null;
        $this->container['deleteIssueRuleIdList'] = $data['deleteIssueRuleIdList'] ?? null;
        $this->container['modifyIssueRuleList'] = $data['modifyIssueRuleList'] ?? null;
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
     * Gets addIssueRuleList
     *
     * @return \Alipay\OpenAPISDK\Model\IssueRuleInfo[]|null
     */
    public function getAddIssueRuleList()
    {
        return $this->container['addIssueRuleList'];
    }

    /**
     * Sets addIssueRuleList
     *
     * @param \Alipay\OpenAPISDK\Model\IssueRuleInfo[]|null $addIssueRuleList 新增发放规则列表
     *
     * @return self
     */
    public function setAddIssueRuleList($addIssueRuleList)
    {
        $this->container['addIssueRuleList'] = $addIssueRuleList;

        return $this;
    }

    /**
     * Gets deleteIssueRuleIdList
     *
     * @return string[]|null
     */
    public function getDeleteIssueRuleIdList()
    {
        return $this->container['deleteIssueRuleIdList'];
    }

    /**
     * Sets deleteIssueRuleIdList
     *
     * @param string[]|null $deleteIssueRuleIdList 删除的发放规则id列表
     *
     * @return self
     */
    public function setDeleteIssueRuleIdList($deleteIssueRuleIdList)
    {
        $this->container['deleteIssueRuleIdList'] = $deleteIssueRuleIdList;

        return $this;
    }

    /**
     * Gets modifyIssueRuleList
     *
     * @return \Alipay\OpenAPISDK\Model\ModifyIssueRuleInfo|null
     */
    public function getModifyIssueRuleList()
    {
        return $this->container['modifyIssueRuleList'];
    }

    /**
     * Sets modifyIssueRuleList
     *
     * @param \Alipay\OpenAPISDK\Model\ModifyIssueRuleInfo|null $modifyIssueRuleList modifyIssueRuleList
     *
     * @return self
     */
    public function setModifyIssueRuleList($modifyIssueRuleList)
    {
        $this->container['modifyIssueRuleList'] = $modifyIssueRuleList;

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


