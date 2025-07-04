<?php
/**
 * AlipayEbppInvoiceExpenserulesGroupemployeeModifyModel
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
 * AlipayEbppInvoiceExpenserulesGroupemployeeModifyModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayEbppInvoiceExpenserulesGroupemployeeModifyModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayEbppInvoiceExpenserulesGroupemployeeModifyModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'string',
        'addEmployeeList' => 'string[]',
        'addEmployeeOpenIdList' => 'string[]',
        'agreementNo' => 'string',
        'enterpriseId' => 'string',
        'groupIdList' => 'string[]',
        'removeEmployeeList' => 'string[]',
        'removeEmployeeOpenIdList' => 'string[]'
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
        'addEmployeeList' => null,
        'addEmployeeOpenIdList' => null,
        'agreementNo' => null,
        'enterpriseId' => null,
        'groupIdList' => null,
        'removeEmployeeList' => null,
        'removeEmployeeOpenIdList' => null
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
        'addEmployeeList' => 'add_employee_list',
        'addEmployeeOpenIdList' => 'add_employee_open_id_list',
        'agreementNo' => 'agreement_no',
        'enterpriseId' => 'enterprise_id',
        'groupIdList' => 'group_id_list',
        'removeEmployeeList' => 'remove_employee_list',
        'removeEmployeeOpenIdList' => 'remove_employee_open_id_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'addEmployeeList' => 'setAddEmployeeList',
        'addEmployeeOpenIdList' => 'setAddEmployeeOpenIdList',
        'agreementNo' => 'setAgreementNo',
        'enterpriseId' => 'setEnterpriseId',
        'groupIdList' => 'setGroupIdList',
        'removeEmployeeList' => 'setRemoveEmployeeList',
        'removeEmployeeOpenIdList' => 'setRemoveEmployeeOpenIdList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'addEmployeeList' => 'getAddEmployeeList',
        'addEmployeeOpenIdList' => 'getAddEmployeeOpenIdList',
        'agreementNo' => 'getAgreementNo',
        'enterpriseId' => 'getEnterpriseId',
        'groupIdList' => 'getGroupIdList',
        'removeEmployeeList' => 'getRemoveEmployeeList',
        'removeEmployeeOpenIdList' => 'getRemoveEmployeeOpenIdList'
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
        $this->container['addEmployeeList'] = $data['addEmployeeList'] ?? null;
        $this->container['addEmployeeOpenIdList'] = $data['addEmployeeOpenIdList'] ?? null;
        $this->container['agreementNo'] = $data['agreementNo'] ?? null;
        $this->container['enterpriseId'] = $data['enterpriseId'] ?? null;
        $this->container['groupIdList'] = $data['groupIdList'] ?? null;
        $this->container['removeEmployeeList'] = $data['removeEmployeeList'] ?? null;
        $this->container['removeEmployeeOpenIdList'] = $data['removeEmployeeOpenIdList'] ?? null;
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
     * @param string|null $accountId 企业共同账户id
     *
     * @return self
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets addEmployeeList
     *
     * @return string[]|null
     */
    public function getAddEmployeeList()
    {
        return $this->container['addEmployeeList'];
    }

    /**
     * Sets addEmployeeList
     *
     * @param string[]|null $addEmployeeList 未切换 open_id 时请使用此字段： 需要添加的员工UID列表 特殊说明：一次最多50个
     *
     * @return self
     */
    public function setAddEmployeeList($addEmployeeList)
    {
        $this->container['addEmployeeList'] = $addEmployeeList;

        return $this;
    }

    /**
     * Gets addEmployeeOpenIdList
     *
     * @return string[]|null
     */
    public function getAddEmployeeOpenIdList()
    {
        return $this->container['addEmployeeOpenIdList'];
    }

    /**
     * Sets addEmployeeOpenIdList
     *
     * @param string[]|null $addEmployeeOpenIdList 切换 open_id 后请使用此字段： 需要添加的open_id/企业码员工ID列表 特殊说明：一次最多50个
     *
     * @return self
     */
    public function setAddEmployeeOpenIdList($addEmployeeOpenIdList)
    {
        $this->container['addEmployeeOpenIdList'] = $addEmployeeOpenIdList;

        return $this;
    }

    /**
     * Gets agreementNo
     *
     * @return string|null
     */
    public function getAgreementNo()
    {
        return $this->container['agreementNo'];
    }

    /**
     * Sets agreementNo
     *
     * @param string|null $agreementNo 授权签约协议号
     *
     * @return self
     */
    public function setAgreementNo($agreementNo)
    {
        $this->container['agreementNo'] = $agreementNo;

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
     * @param string|null $enterpriseId 企业码企业id
     *
     * @return self
     */
    public function setEnterpriseId($enterpriseId)
    {
        $this->container['enterpriseId'] = $enterpriseId;

        return $this;
    }

    /**
     * Gets groupIdList
     *
     * @return string[]|null
     */
    public function getGroupIdList()
    {
        return $this->container['groupIdList'];
    }

    /**
     * Sets groupIdList
     *
     * @param string[]|null $groupIdList 费控规则ID列表
     *
     * @return self
     */
    public function setGroupIdList($groupIdList)
    {
        $this->container['groupIdList'] = $groupIdList;

        return $this;
    }

    /**
     * Gets removeEmployeeList
     *
     * @return string[]|null
     */
    public function getRemoveEmployeeList()
    {
        return $this->container['removeEmployeeList'];
    }

    /**
     * Sets removeEmployeeList
     *
     * @param string[]|null $removeEmployeeList 未切换 open_id 时请使用此字段： 需要移除的员工UID列表 特殊说明：一次最多50个
     *
     * @return self
     */
    public function setRemoveEmployeeList($removeEmployeeList)
    {
        $this->container['removeEmployeeList'] = $removeEmployeeList;

        return $this;
    }

    /**
     * Gets removeEmployeeOpenIdList
     *
     * @return string[]|null
     */
    public function getRemoveEmployeeOpenIdList()
    {
        return $this->container['removeEmployeeOpenIdList'];
    }

    /**
     * Sets removeEmployeeOpenIdList
     *
     * @param string[]|null $removeEmployeeOpenIdList 切换 open_id 后请使用此字段： 需要移除的open_id/企业码员工ID列表 特殊说明：一次最多50个
     *
     * @return self
     */
    public function setRemoveEmployeeOpenIdList($removeEmployeeOpenIdList)
    {
        $this->container['removeEmployeeOpenIdList'] = $removeEmployeeOpenIdList;

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


