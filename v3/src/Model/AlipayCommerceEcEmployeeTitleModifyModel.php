<?php
/**
 * AlipayCommerceEcEmployeeTitleModifyModel
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
 * AlipayCommerceEcEmployeeTitleModifyModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayCommerceEcEmployeeTitleModifyModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayCommerceEcEmployeeTitleModifyModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'string',
        'createBy' => 'string',
        'employeeId' => 'string',
        'enterpriseId' => 'string',
        'modifyBy' => 'string',
        'newTitleId' => 'string',
        'oldTitleId' => 'string',
        'openId' => 'string',
        'titleTag' => 'string',
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
        'accountId' => null,
        'createBy' => null,
        'employeeId' => null,
        'enterpriseId' => null,
        'modifyBy' => null,
        'newTitleId' => null,
        'oldTitleId' => null,
        'openId' => null,
        'titleTag' => null,
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
        'accountId' => 'account_id',
        'createBy' => 'create_by',
        'employeeId' => 'employee_id',
        'enterpriseId' => 'enterprise_id',
        'modifyBy' => 'modify_by',
        'newTitleId' => 'new_title_id',
        'oldTitleId' => 'old_title_id',
        'openId' => 'open_id',
        'titleTag' => 'title_tag',
        'userId' => 'user_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'createBy' => 'setCreateBy',
        'employeeId' => 'setEmployeeId',
        'enterpriseId' => 'setEnterpriseId',
        'modifyBy' => 'setModifyBy',
        'newTitleId' => 'setNewTitleId',
        'oldTitleId' => 'setOldTitleId',
        'openId' => 'setOpenId',
        'titleTag' => 'setTitleTag',
        'userId' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'createBy' => 'getCreateBy',
        'employeeId' => 'getEmployeeId',
        'enterpriseId' => 'getEnterpriseId',
        'modifyBy' => 'getModifyBy',
        'newTitleId' => 'getNewTitleId',
        'oldTitleId' => 'getOldTitleId',
        'openId' => 'getOpenId',
        'titleTag' => 'getTitleTag',
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
        $this->container['accountId'] = $data['accountId'] ?? null;
        $this->container['createBy'] = $data['createBy'] ?? null;
        $this->container['employeeId'] = $data['employeeId'] ?? null;
        $this->container['enterpriseId'] = $data['enterpriseId'] ?? null;
        $this->container['modifyBy'] = $data['modifyBy'] ?? null;
        $this->container['newTitleId'] = $data['newTitleId'] ?? null;
        $this->container['oldTitleId'] = $data['oldTitleId'] ?? null;
        $this->container['openId'] = $data['openId'] ?? null;
        $this->container['titleTag'] = $data['titleTag'] ?? null;
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
     * Gets accountId
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param string|null $accountId 共同账号id，与enterprise_id两者必填其一
     *
     * @return self
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets createBy
     *
     * @return string|null
     */
    public function getCreateBy()
    {
        return $this->container['createBy'];
    }

    /**
     * Sets createBy
     *
     * @param string|null $createBy 创建人
     *
     * @return self
     */
    public function setCreateBy($createBy)
    {
        $this->container['createBy'] = $createBy;

        return $this;
    }

    /**
     * Gets employeeId
     *
     * @return string|null
     */
    public function getEmployeeId()
    {
        return $this->container['employeeId'];
    }

    /**
     * Sets employeeId
     *
     * @param string|null $employeeId 企业域定义的员工id，与user_id两者必填其一
     *
     * @return self
     */
    public function setEmployeeId($employeeId)
    {
        $this->container['employeeId'] = $employeeId;

        return $this;
    }

    /**
     * Gets enterpriseId
     *
     * @return string|null
     */
    public function getEnterpriseId()
    {
        return $this->container['enterpriseId'];
    }

    /**
     * Sets enterpriseId
     *
     * @param string|null $enterpriseId 企业域定义下的企业id，与accountId两者必填其一
     *
     * @return self
     */
    public function setEnterpriseId($enterpriseId)
    {
        $this->container['enterpriseId'] = $enterpriseId;

        return $this;
    }

    /**
     * Gets modifyBy
     *
     * @return string|null
     */
    public function getModifyBy()
    {
        return $this->container['modifyBy'];
    }

    /**
     * Sets modifyBy
     *
     * @param string|null $modifyBy 修改人
     *
     * @return self
     */
    public function setModifyBy($modifyBy)
    {
        $this->container['modifyBy'] = $modifyBy;

        return $this;
    }

    /**
     * Gets newTitleId
     *
     * @return string|null
     */
    public function getNewTitleId()
    {
        return $this->container['newTitleId'];
    }

    /**
     * Sets newTitleId
     *
     * @param string|null $newTitleId 修改后的抬头id
     *
     * @return self
     */
    public function setNewTitleId($newTitleId)
    {
        $this->container['newTitleId'] = $newTitleId;

        return $this;
    }

    /**
     * Gets oldTitleId
     *
     * @return string|null
     */
    public function getOldTitleId()
    {
        return $this->container['oldTitleId'];
    }

    /**
     * Sets oldTitleId
     *
     * @param string|null $oldTitleId 修改前的抬头id
     *
     * @return self
     */
    public function setOldTitleId($oldTitleId)
    {
        $this->container['oldTitleId'] = $oldTitleId;

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
     * @param string|null $openId 支付宝open_id，与employee_id两者必填其一
     *
     * @return self
     */
    public function setOpenId($openId)
    {
        $this->container['openId'] = $openId;

        return $this;
    }

    /**
     * Gets titleTag
     *
     * @return string|null
     */
    public function getTitleTag()
    {
        return $this->container['titleTag'];
    }

    /**
     * Sets titleTag
     *
     * @param string|null $titleTag 员工抬头关系标
     *
     * @return self
     */
    public function setTitleTag($titleTag)
    {
        $this->container['titleTag'] = $titleTag;

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
     * @param string|null $userId 支付宝id2088，与employee_id两者必填其一
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


