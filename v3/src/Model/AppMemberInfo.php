<?php
/**
 * AppMemberInfo
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
 * AppMemberInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AppMemberInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AppMemberInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'gmtInvite' => 'string',
        'gmtJoin' => 'string',
        'logonId' => 'string',
        'nickName' => 'string',
        'openId' => 'string',
        'portrait' => 'string',
        'role' => 'string',
        'status' => 'string',
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
        'gmtInvite' => null,
        'gmtJoin' => null,
        'logonId' => null,
        'nickName' => null,
        'openId' => null,
        'portrait' => null,
        'role' => null,
        'status' => null,
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
        'gmtInvite' => 'gmt_invite',
        'gmtJoin' => 'gmt_join',
        'logonId' => 'logon_id',
        'nickName' => 'nick_name',
        'openId' => 'open_id',
        'portrait' => 'portrait',
        'role' => 'role',
        'status' => 'status',
        'userId' => 'user_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'gmtInvite' => 'setGmtInvite',
        'gmtJoin' => 'setGmtJoin',
        'logonId' => 'setLogonId',
        'nickName' => 'setNickName',
        'openId' => 'setOpenId',
        'portrait' => 'setPortrait',
        'role' => 'setRole',
        'status' => 'setStatus',
        'userId' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'gmtInvite' => 'getGmtInvite',
        'gmtJoin' => 'getGmtJoin',
        'logonId' => 'getLogonId',
        'nickName' => 'getNickName',
        'openId' => 'getOpenId',
        'portrait' => 'getPortrait',
        'role' => 'getRole',
        'status' => 'getStatus',
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
        $this->container['gmtInvite'] = $data['gmtInvite'] ?? null;
        $this->container['gmtJoin'] = $data['gmtJoin'] ?? null;
        $this->container['logonId'] = $data['logonId'] ?? null;
        $this->container['nickName'] = $data['nickName'] ?? null;
        $this->container['openId'] = $data['openId'] ?? null;
        $this->container['portrait'] = $data['portrait'] ?? null;
        $this->container['role'] = $data['role'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
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
     * Gets gmtInvite
     *
     * @return string|null
     */
    public function getGmtInvite()
    {
        return $this->container['gmtInvite'];
    }

    /**
     * Sets gmtInvite
     *
     * @param string|null $gmtInvite 邀请时间，格式为yyyy-MM-dd HH:mm:ss
     *
     * @return self
     */
    public function setGmtInvite($gmtInvite)
    {
        $this->container['gmtInvite'] = $gmtInvite;

        return $this;
    }

    /**
     * Gets gmtJoin
     *
     * @return string|null
     */
    public function getGmtJoin()
    {
        return $this->container['gmtJoin'];
    }

    /**
     * Sets gmtJoin
     *
     * @param string|null $gmtJoin 加入时间，格式为yyyy-MM-dd
     *
     * @return self
     */
    public function setGmtJoin($gmtJoin)
    {
        $this->container['gmtJoin'] = $gmtJoin;

        return $this;
    }

    /**
     * Gets logonId
     *
     * @return string|null
     */
    public function getLogonId()
    {
        return $this->container['logonId'];
    }

    /**
     * Sets logonId
     *
     * @param string|null $logonId 支付宝登录账号
     *
     * @return self
     */
    public function setLogonId($logonId)
    {
        $this->container['logonId'] = $logonId;

        return $this;
    }

    /**
     * Gets nickName
     *
     * @return string|null
     */
    public function getNickName()
    {
        return $this->container['nickName'];
    }

    /**
     * Sets nickName
     *
     * @param string|null $nickName 昵称
     *
     * @return self
     */
    public function setNickName($nickName)
    {
        $this->container['nickName'] = $nickName;

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
     * @param string|null $openId 支付宝用户openId
     *
     * @return self
     */
    public function setOpenId($openId)
    {
        $this->container['openId'] = $openId;

        return $this;
    }

    /**
     * Gets portrait
     *
     * @return string|null
     */
    public function getPortrait()
    {
        return $this->container['portrait'];
    }

    /**
     * Sets portrait
     *
     * @param string|null $portrait 头像地址fileId(完整地址需自行拼接)
     *
     * @return self
     */
    public function setPortrait($portrait)
    {
        $this->container['portrait'] = $portrait;

        return $this;
    }

    /**
     * Gets role
     *
     * @return string|null
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string|null $role 角色类型
     *
     * @return self
     */
    public function setRole($role)
    {
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status 成员的状态
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * @param string|null $userId 支付宝用户id
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


