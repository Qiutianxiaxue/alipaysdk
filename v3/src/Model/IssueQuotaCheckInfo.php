<?php
/**
 * IssueQuotaCheckInfo
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
 * IssueQuotaCheckInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class IssueQuotaCheckInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IssueQuotaCheckInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'issueQuota' => 'string',
        'message' => 'string',
        'ownerId' => 'string',
        'ownerOpenId' => 'string',
        'ownerType' => 'string',
        'result' => 'bool',
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
        'message' => null,
        'ownerId' => null,
        'ownerOpenId' => null,
        'ownerType' => null,
        'result' => null,
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
        'message' => 'message',
        'ownerId' => 'owner_id',
        'ownerOpenId' => 'owner_open_id',
        'ownerType' => 'owner_type',
        'result' => 'result',
        'userName' => 'user_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'issueQuota' => 'setIssueQuota',
        'message' => 'setMessage',
        'ownerId' => 'setOwnerId',
        'ownerOpenId' => 'setOwnerOpenId',
        'ownerType' => 'setOwnerType',
        'result' => 'setResult',
        'userName' => 'setUserName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'issueQuota' => 'getIssueQuota',
        'message' => 'getMessage',
        'ownerId' => 'getOwnerId',
        'ownerOpenId' => 'getOwnerOpenId',
        'ownerType' => 'getOwnerType',
        'result' => 'getResult',
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
        $this->container['message'] = $data['message'] ?? null;
        $this->container['ownerId'] = $data['ownerId'] ?? null;
        $this->container['ownerOpenId'] = $data['ownerOpenId'] ?? null;
        $this->container['ownerType'] = $data['ownerType'] ?? null;
        $this->container['result'] = $data['result'] ?? null;
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
     * @param string|null $issueQuota 发放点券和余额时，单位为元，发放次卡时，单位为次
     *
     * @return self
     */
    public function setIssueQuota($issueQuota)
    {
        $this->container['issueQuota'] = $issueQuota;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message 校验结果的原因
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

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
     * @param string|null $ownerId 入参的 owner_id
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
     * @param string|null $ownerOpenId 入参的  owner_open_id
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
     * @param string|null $ownerType owner_type
     *
     * @return self
     */
    public function setOwnerType($ownerType)
    {
        $this->container['ownerType'] = $ownerType;

        return $this;
    }

    /**
     * Gets result
     *
     * @return bool|null
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param bool|null $result 校验结果
     *
     * @return self
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

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
     * @param string|null $userName 用户姓名
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


