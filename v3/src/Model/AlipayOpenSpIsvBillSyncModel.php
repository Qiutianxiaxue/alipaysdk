<?php
/**
 * AlipayOpenSpIsvBillSyncModel
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
 * AlipayOpenSpIsvBillSyncModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenSpIsvBillSyncModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenSpIsvBillSyncModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'endTime' => 'string',
        'generateTime' => 'string',
        'itemCode' => 'string',
        'outBizNo' => 'string',
        'payTime' => 'string',
        'price' => 'string',
        'promotorPid' => 'string',
        'startTime' => 'string',
        'status' => 'string',
        'subPromotorPid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'endTime' => null,
        'generateTime' => null,
        'itemCode' => null,
        'outBizNo' => null,
        'payTime' => null,
        'price' => null,
        'promotorPid' => null,
        'startTime' => null,
        'status' => null,
        'subPromotorPid' => null
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
        'endTime' => 'end_time',
        'generateTime' => 'generate_time',
        'itemCode' => 'item_code',
        'outBizNo' => 'out_biz_no',
        'payTime' => 'pay_time',
        'price' => 'price',
        'promotorPid' => 'promotor_pid',
        'startTime' => 'start_time',
        'status' => 'status',
        'subPromotorPid' => 'sub_promotor_pid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'endTime' => 'setEndTime',
        'generateTime' => 'setGenerateTime',
        'itemCode' => 'setItemCode',
        'outBizNo' => 'setOutBizNo',
        'payTime' => 'setPayTime',
        'price' => 'setPrice',
        'promotorPid' => 'setPromotorPid',
        'startTime' => 'setStartTime',
        'status' => 'setStatus',
        'subPromotorPid' => 'setSubPromotorPid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'endTime' => 'getEndTime',
        'generateTime' => 'getGenerateTime',
        'itemCode' => 'getItemCode',
        'outBizNo' => 'getOutBizNo',
        'payTime' => 'getPayTime',
        'price' => 'getPrice',
        'promotorPid' => 'getPromotorPid',
        'startTime' => 'getStartTime',
        'status' => 'getStatus',
        'subPromotorPid' => 'getSubPromotorPid'
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
        $this->container['endTime'] = $data['endTime'] ?? null;
        $this->container['generateTime'] = $data['generateTime'] ?? null;
        $this->container['itemCode'] = $data['itemCode'] ?? null;
        $this->container['outBizNo'] = $data['outBizNo'] ?? null;
        $this->container['payTime'] = $data['payTime'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['promotorPid'] = $data['promotorPid'] ?? null;
        $this->container['startTime'] = $data['startTime'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['subPromotorPid'] = $data['subPromotorPid'] ?? null;
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
     * @param string|null $endTime 账单结束时间
     *
     * @return self
     */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;

        return $this;
    }

    /**
     * Gets generateTime
     *
     * @return string|null
     */
    public function getGenerateTime()
    {
        return $this->container['generateTime'];
    }

    /**
     * Sets generateTime
     *
     * @param string|null $generateTime 出账时间，回传出账信息时，必须传递
     *
     * @return self
     */
    public function setGenerateTime($generateTime)
    {
        $this->container['generateTime'] = $generateTime;

        return $this;
    }

    /**
     * Gets itemCode
     *
     * @return string|null
     */
    public function getItemCode()
    {
        return $this->container['itemCode'];
    }

    /**
     * Sets itemCode
     *
     * @param string|null $itemCode 服务优选商品编码
     *
     * @return self
     */
    public function setItemCode($itemCode)
    {
        $this->container['itemCode'] = $itemCode;

        return $this;
    }

    /**
     * Gets outBizNo
     *
     * @return string|null
     */
    public function getOutBizNo()
    {
        return $this->container['outBizNo'];
    }

    /**
     * Sets outBizNo
     *
     * @param string|null $outBizNo 外部业务号，传isv系统生成的账单号，需要保证唯一
     *
     * @return self
     */
    public function setOutBizNo($outBizNo)
    {
        $this->container['outBizNo'] = $outBizNo;

        return $this;
    }

    /**
     * Gets payTime
     *
     * @return string|null
     */
    public function getPayTime()
    {
        return $this->container['payTime'];
    }

    /**
     * Sets payTime
     *
     * @param string|null $payTime 账单支付时间，回传支付数时，必须传递
     *
     * @return self
     */
    public function setPayTime($payTime)
    {
        $this->container['payTime'] = $payTime;

        return $this;
    }

    /**
     * Gets price
     *
     * @return string|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param string|null $price 账单金额，这里填写的是整数，单位为分，比如1元，那么输入100
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets promotorPid
     *
     * @return string|null
     */
    public function getPromotorPid()
    {
        return $this->container['promotorPid'];
    }

    /**
     * Sets promotorPid
     *
     * @param string|null $promotorPid 推广服务商(S2)pid
     *
     * @return self
     */
    public function setPromotorPid($promotorPid)
    {
        $this->container['promotorPid'] = $promotorPid;

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
     * @param string|null $startTime 账单开始时间
     *
     * @return self
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

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
     * @param string|null $status GENERATE_BILL代表”已出账“，PAID_BILL代表”已支付“，选择这两者之一
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets subPromotorPid
     *
     * @return string|null
     */
    public function getSubPromotorPid()
    {
        return $this->container['subPromotorPid'];
    }

    /**
     * Sets subPromotorPid
     *
     * @param string|null $subPromotorPid S1回传的S2的操作员工子账号，如果是子账号操作，请回传
     *
     * @return self
     */
    public function setSubPromotorPid($subPromotorPid)
    {
        $this->container['subPromotorPid'] = $subPromotorPid;

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


