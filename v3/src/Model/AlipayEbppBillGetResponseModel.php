<?php
/**
 * AlipayEbppBillGetResponseModel
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
 * AlipayEbppBillGetResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayEbppBillGetResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayEbppBillGetResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'alipayOrderNo' => 'string',
        'billDate' => 'string',
        'billKey' => 'string',
        'chargeInst' => 'string',
        'chargeInstName' => 'string',
        'merchantOrderNo' => 'string',
        'orderStatus' => 'string',
        'orderType' => 'string',
        'ownerName' => 'string',
        'payAmount' => 'string',
        'payTime' => 'string',
        'serviceAmount' => 'string',
        'subOrderType' => 'string',
        'trafficLocation' => 'string',
        'trafficRegulations' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'alipayOrderNo' => null,
        'billDate' => null,
        'billKey' => null,
        'chargeInst' => null,
        'chargeInstName' => null,
        'merchantOrderNo' => null,
        'orderStatus' => null,
        'orderType' => null,
        'ownerName' => null,
        'payAmount' => null,
        'payTime' => null,
        'serviceAmount' => null,
        'subOrderType' => null,
        'trafficLocation' => null,
        'trafficRegulations' => null
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
        'alipayOrderNo' => 'alipay_order_no',
        'billDate' => 'bill_date',
        'billKey' => 'bill_key',
        'chargeInst' => 'charge_inst',
        'chargeInstName' => 'charge_inst_name',
        'merchantOrderNo' => 'merchant_order_no',
        'orderStatus' => 'order_status',
        'orderType' => 'order_type',
        'ownerName' => 'owner_name',
        'payAmount' => 'pay_amount',
        'payTime' => 'pay_time',
        'serviceAmount' => 'service_amount',
        'subOrderType' => 'sub_order_type',
        'trafficLocation' => 'traffic_location',
        'trafficRegulations' => 'traffic_regulations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alipayOrderNo' => 'setAlipayOrderNo',
        'billDate' => 'setBillDate',
        'billKey' => 'setBillKey',
        'chargeInst' => 'setChargeInst',
        'chargeInstName' => 'setChargeInstName',
        'merchantOrderNo' => 'setMerchantOrderNo',
        'orderStatus' => 'setOrderStatus',
        'orderType' => 'setOrderType',
        'ownerName' => 'setOwnerName',
        'payAmount' => 'setPayAmount',
        'payTime' => 'setPayTime',
        'serviceAmount' => 'setServiceAmount',
        'subOrderType' => 'setSubOrderType',
        'trafficLocation' => 'setTrafficLocation',
        'trafficRegulations' => 'setTrafficRegulations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alipayOrderNo' => 'getAlipayOrderNo',
        'billDate' => 'getBillDate',
        'billKey' => 'getBillKey',
        'chargeInst' => 'getChargeInst',
        'chargeInstName' => 'getChargeInstName',
        'merchantOrderNo' => 'getMerchantOrderNo',
        'orderStatus' => 'getOrderStatus',
        'orderType' => 'getOrderType',
        'ownerName' => 'getOwnerName',
        'payAmount' => 'getPayAmount',
        'payTime' => 'getPayTime',
        'serviceAmount' => 'getServiceAmount',
        'subOrderType' => 'getSubOrderType',
        'trafficLocation' => 'getTrafficLocation',
        'trafficRegulations' => 'getTrafficRegulations'
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
        $this->container['alipayOrderNo'] = $data['alipayOrderNo'] ?? null;
        $this->container['billDate'] = $data['billDate'] ?? null;
        $this->container['billKey'] = $data['billKey'] ?? null;
        $this->container['chargeInst'] = $data['chargeInst'] ?? null;
        $this->container['chargeInstName'] = $data['chargeInstName'] ?? null;
        $this->container['merchantOrderNo'] = $data['merchantOrderNo'] ?? null;
        $this->container['orderStatus'] = $data['orderStatus'] ?? null;
        $this->container['orderType'] = $data['orderType'] ?? null;
        $this->container['ownerName'] = $data['ownerName'] ?? null;
        $this->container['payAmount'] = $data['payAmount'] ?? null;
        $this->container['payTime'] = $data['payTime'] ?? null;
        $this->container['serviceAmount'] = $data['serviceAmount'] ?? null;
        $this->container['subOrderType'] = $data['subOrderType'] ?? null;
        $this->container['trafficLocation'] = $data['trafficLocation'] ?? null;
        $this->container['trafficRegulations'] = $data['trafficRegulations'] ?? null;
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
     * Gets alipayOrderNo
     *
     * @return string|null
     */
    public function getAlipayOrderNo()
    {
        return $this->container['alipayOrderNo'];
    }

    /**
     * Sets alipayOrderNo
     *
     * @param string|null $alipayOrderNo 支付宝的业务订单号，具有唯一性。
     *
     * @return self
     */
    public function setAlipayOrderNo($alipayOrderNo)
    {
        $this->container['alipayOrderNo'] = $alipayOrderNo;

        return $this;
    }

    /**
     * Gets billDate
     *
     * @return string|null
     */
    public function getBillDate()
    {
        return $this->container['billDate'];
    }

    /**
     * Sets billDate
     *
     * @param string|null $billDate 账单的账期，例如201203表示2012年3月的账单。
     *
     * @return self
     */
    public function setBillDate($billDate)
    {
        $this->container['billDate'] = $billDate;

        return $this;
    }

    /**
     * Gets billKey
     *
     * @return string|null
     */
    public function getBillKey()
    {
        return $this->container['billKey'];
    }

    /**
     * Sets billKey
     *
     * @param string|null $billKey 账单单据号，例如水费单号，手机号，电费号，信用卡卡号。没有唯一性要求。
     *
     * @return self
     */
    public function setBillKey($billKey)
    {
        $this->container['billKey'] = $billKey;

        return $this;
    }

    /**
     * Gets chargeInst
     *
     * @return string|null
     */
    public function getChargeInst()
    {
        return $this->container['chargeInst'];
    }

    /**
     * Sets chargeInst
     *
     * @param string|null $chargeInst 支付宝给每个出账机构指定了一个对应的英文短名称来唯一表示该收费单位。
     *
     * @return self
     */
    public function setChargeInst($chargeInst)
    {
        $this->container['chargeInst'] = $chargeInst;

        return $this;
    }

    /**
     * Gets chargeInstName
     *
     * @return string|null
     */
    public function getChargeInstName()
    {
        return $this->container['chargeInstName'];
    }

    /**
     * Sets chargeInstName
     *
     * @param string|null $chargeInstName 出账机构中文名称。
     *
     * @return self
     */
    public function setChargeInstName($chargeInstName)
    {
        $this->container['chargeInstName'] = $chargeInstName;

        return $this;
    }

    /**
     * Gets merchantOrderNo
     *
     * @return string|null
     */
    public function getMerchantOrderNo()
    {
        return $this->container['merchantOrderNo'];
    }

    /**
     * Sets merchantOrderNo
     *
     * @param string|null $merchantOrderNo 输出机构的业务流水号，需要保证唯一性。
     *
     * @return self
     */
    public function setMerchantOrderNo($merchantOrderNo)
    {
        $this->container['merchantOrderNo'] = $merchantOrderNo;

        return $this;
    }

    /**
     * Gets orderStatus
     *
     * @return string|null
     */
    public function getOrderStatus()
    {
        return $this->container['orderStatus'];
    }

    /**
     * Sets orderStatus
     *
     * @param string|null $orderStatus 账单的状态。 INIT:等待付款，SUCCESS:成功,FAILED:失败。
     *
     * @return self
     */
    public function setOrderStatus($orderStatus)
    {
        $this->container['orderStatus'] = $orderStatus;

        return $this;
    }

    /**
     * Gets orderType
     *
     * @return string|null
     */
    public function getOrderType()
    {
        return $this->container['orderType'];
    }

    /**
     * Sets orderType
     *
     * @param string|null $orderType 支付宝订单类型。公共事业缴纳JF,信用卡还款HK
     *
     * @return self
     */
    public function setOrderType($orderType)
    {
        $this->container['orderType'] = $orderType;

        return $this;
    }

    /**
     * Gets ownerName
     *
     * @return string|null
     */
    public function getOwnerName()
    {
        return $this->container['ownerName'];
    }

    /**
     * Sets ownerName
     *
     * @param string|null $ownerName 拥有该账单的用户姓名
     *
     * @return self
     */
    public function setOwnerName($ownerName)
    {
        $this->container['ownerName'] = $ownerName;

        return $this;
    }

    /**
     * Gets payAmount
     *
     * @return string|null
     */
    public function getPayAmount()
    {
        return $this->container['payAmount'];
    }

    /**
     * Sets payAmount
     *
     * @param string|null $payAmount 缴费金额。用户支付的总金额。单位为：RMB Yuan。取值范围为[0.01，100000000.00]，精确到小数点后两位。
     *
     * @return self
     */
    public function setPayAmount($payAmount)
    {
        $this->container['payAmount'] = $payAmount;

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
     * @param string|null $payTime 付款时间
     *
     * @return self
     */
    public function setPayTime($payTime)
    {
        $this->container['payTime'] = $payTime;

        return $this;
    }

    /**
     * Gets serviceAmount
     *
     * @return string|null
     */
    public function getServiceAmount()
    {
        return $this->container['serviceAmount'];
    }

    /**
     * Sets serviceAmount
     *
     * @param string|null $serviceAmount 账单的服务费
     *
     * @return self
     */
    public function setServiceAmount($serviceAmount)
    {
        $this->container['serviceAmount'] = $serviceAmount;

        return $this;
    }

    /**
     * Gets subOrderType
     *
     * @return string|null
     */
    public function getSubOrderType()
    {
        return $this->container['subOrderType'];
    }

    /**
     * Sets subOrderType
     *
     * @param string|null $subOrderType 子业务类型是业务类型的下一级概念，例如：WATER表示JF下面的水费，ELECTRIC表示JF下面的电费，GAS表示JF下面的燃气费。
     *
     * @return self
     */
    public function setSubOrderType($subOrderType)
    {
        $this->container['subOrderType'] = $subOrderType;

        return $this;
    }

    /**
     * Gets trafficLocation
     *
     * @return string|null
     */
    public function getTrafficLocation()
    {
        return $this->container['trafficLocation'];
    }

    /**
     * Sets trafficLocation
     *
     * @param string|null $trafficLocation 交通违章地点，sub_order_type=TRAFFIC时有值
     *
     * @return self
     */
    public function setTrafficLocation($trafficLocation)
    {
        $this->container['trafficLocation'] = $trafficLocation;

        return $this;
    }

    /**
     * Gets trafficRegulations
     *
     * @return string|null
     */
    public function getTrafficRegulations()
    {
        return $this->container['trafficRegulations'];
    }

    /**
     * Sets trafficRegulations
     *
     * @param string|null $trafficRegulations 违章行为，sub_order_type=TRAFFIC时有值。
     *
     * @return self
     */
    public function setTrafficRegulations($trafficRegulations)
    {
        $this->container['trafficRegulations'] = $trafficRegulations;

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


