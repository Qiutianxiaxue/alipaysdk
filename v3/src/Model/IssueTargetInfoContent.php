<?php
/**
 * IssueTargetInfoContent
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
 * IssueTargetInfoContent Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class IssueTargetInfoContent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IssueTargetInfoContent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'issueQuota' => 'string',
        'ownerId' => 'string',
        'ownerOpenId' => 'string',
        'ownerType' => 'string',
        'userName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'issueQuota' => null,
        'ownerId' => null,
        'ownerOpenId' => null,
        'ownerType' => null,
        'userName' => null
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
        'issueQuota' => 'issue_quota',
        'ownerId' => 'owner_id',
        'ownerOpenId' => 'owner_open_id',
        'ownerType' => 'owner_type',
        'userName' => 'user_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'issueQuota' => 'setIssueQuota',
        'ownerId' => 'setOwnerId',
        'ownerOpenId' => 'setOwnerOpenId',
        'ownerType' => 'setOwnerType',
        'userName' => 'setUserName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'issueQuota' => 'getIssueQuota',
        'ownerId' => 'getOwnerId',
        'ownerOpenId' => 'getOwnerOpenId',
        'ownerType' => 'getOwnerType',
        'userName' => 'getUserName'
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
        $this->container['issueQuota'] = $data['issueQuota'] ?? null;
        $this->container['ownerId'] = $data['ownerId'] ?? null;
        $this->container['ownerOpenId'] = $data['ownerOpenId'] ?? null;
        $this->container['ownerType'] = $data['ownerType'] ?? null;
        $this->container['userName'] = $data['userName'] ?? null;
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
     * Gets issueQuota
     *
     * @return string|null
     */
    public function getIssueQuota()
    {
        return $this->container['issueQuota'];
    }

    /**
     * Sets issueQuota
     *
     * @param string|null $issueQuota 当发放余额或点券时，单位为元，币种以创建制度时填写的currency为准，不填写默认为人民币。当发放类型为次卡时，单位为次。
     *
     * @return self
     */
    public function setIssueQuota($issueQuota)
    {
        $this->container['issueQuota'] = $issueQuota;

        return $this;
    }

    /**
     * Gets ownerId
     *
     * @return string|null
     */
    public function getOwnerId()
    {
        return $this->container['ownerId'];
    }

    /**
     * Sets ownerId
     *
     * @param string|null $ownerId 切换open_id前请使用：owner类型为PHONE时该字段表示员工手机号，owner类型为EMPLOYEE时该字段表示为员工支付宝uid，owner类型为ENTERPRISE_PAY_UID时该字段表示为员工企业码id，owner类型为ENTERPRISE时可不填，如果填写仅支持填企业id
     *
     * @return self
     */
    public function setOwnerId($ownerId)
    {
        $this->container['ownerId'] = $ownerId;

        return $this;
    }

    /**
     * Gets ownerOpenId
     *
     * @return string|null
     */
    public function getOwnerOpenId()
    {
        return $this->container['ownerOpenId'];
    }

    /**
     * Sets ownerOpenId
     *
     * @param string|null $ownerOpenId 切换open_id后请使用：owner类型为PHONE时，填写员工手机号，EMPLOYEE时填写员工open_id
     *
     * @return self
     */
    public function setOwnerOpenId($ownerOpenId)
    {
        $this->container['ownerOpenId'] = $ownerOpenId;

        return $this;
    }

    /**
     * Gets ownerType
     *
     * @return string|null
     */
    public function getOwnerType()
    {
        return $this->container['ownerType'];
    }

    /**
     * Sets ownerType
     *
     * @param string|null $ownerType owner类型，用来表示owner_id的类型
     *
     * @return self
     */
    public function setOwnerType($ownerType)
    {
        $this->container['ownerType'] = $ownerType;

        return $this;
    }

    /**
     * Gets userName
     *
     * @return string|null
     */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
     * Sets userName
     *
     * @param string|null $userName 员工姓名
     *
     * @return self
     */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;

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


