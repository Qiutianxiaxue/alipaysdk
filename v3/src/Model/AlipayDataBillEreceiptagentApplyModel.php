<?php
/**
 * AlipayDataBillEreceiptagentApplyModel
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
 * AlipayDataBillEreceiptagentApplyModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayDataBillEreceiptagentApplyModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayDataBillEreceiptagentApplyModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'agreementNo' => 'string',
        'agreementType' => 'string',
        'endTime' => 'string',
        'key' => 'string',
        'startTime' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'agreementNo' => null,
        'agreementType' => null,
        'endTime' => null,
        'key' => null,
        'startTime' => null,
        'type' => null
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
        'agreementNo' => 'agreement_no',
        'agreementType' => 'agreement_type',
        'endTime' => 'end_time',
        'key' => 'key',
        'startTime' => 'start_time',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agreementNo' => 'setAgreementNo',
        'agreementType' => 'setAgreementType',
        'endTime' => 'setEndTime',
        'key' => 'setKey',
        'startTime' => 'setStartTime',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agreementNo' => 'getAgreementNo',
        'agreementType' => 'getAgreementType',
        'endTime' => 'getEndTime',
        'key' => 'getKey',
        'startTime' => 'getStartTime',
        'type' => 'getType'
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
        $this->container['agreementNo'] = $data['agreementNo'] ?? null;
        $this->container['agreementType'] = $data['agreementType'] ?? null;
        $this->container['endTime'] = $data['endTime'] ?? null;
        $this->container['key'] = $data['key'] ?? null;
        $this->container['startTime'] = $data['startTime'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
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
     * @param string|null $agreementNo ISV与商户签约授权协议号
     *
     * @return self
     */
    public function setAgreementNo($agreementNo)
    {
        $this->container['agreementNo'] = $agreementNo;

        return $this;
    }

    /**
     * Gets agreementType
     *
     * @return string|null
     */
    public function getAgreementType()
    {
        return $this->container['agreementType'];
    }

    /**
     * Sets agreementType
     *
     * @param string|null $agreementType 根据不同业务协议类型，传入不同参数。传入协议产品码（personal_product_code，通过协议查询接口、协议签约通知响应参数获取），不填的话默认按照示例值传入。 安全发协议：FUND_SAFT_SIGN_WITHHOLDING_P 专用金协议：FLEXIBLE_EMPLOYMENT_SERVICE_P 批量有密：FUND_AUTHORIZE_FLOW
     *
     * @return self
     */
    public function setAgreementType($agreementType)
    {
        $this->container['agreementType'] = $agreementType;

        return $this;
    }

    /**
     * Gets endTime
     *
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
     * Sets endTime
     *
     * @param string|null $endTime 查询时间区间的结束时间，属于闭区间。 [start_time,end_time]
     *
     * @return self
     */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string|null $key 根据不同业务类型，传入不同参数。格式如下： * FUND_DETAIL - 资金业务回单。传入资金单号(fundOrderId，可通过充值、转账、提现接口获取)
     *
     * @return self
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets startTime
     *
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     *
     * @param string|null $startTime 搜索范围的起始时间
     *
     * @return self
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type 申请的类型（目前仅支持资金业务回单）。可传入： * FUND_DETAIL - 资金业务回单。
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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


