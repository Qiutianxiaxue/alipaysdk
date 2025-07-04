<?php
/**
 * AlipayMerchantOrderSyncResponseModel
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
 * AlipayMerchantOrderSyncResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayMerchantOrderSyncResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayMerchantOrderSyncResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'distributeResult' => '\Alipay\OpenAPISDK\Model\OrderDataDistributeInfo[]',
        'orderId' => 'string',
        'orderStatus' => 'string',
        'recordId' => 'string',
        'syncSuggestions' => '\Alipay\OpenAPISDK\Model\OrderDataSyncSuggestion[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'distributeResult' => null,
        'orderId' => null,
        'orderStatus' => null,
        'recordId' => null,
        'syncSuggestions' => null
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
        'distributeResult' => 'distribute_result',
        'orderId' => 'order_id',
        'orderStatus' => 'order_status',
        'recordId' => 'record_id',
        'syncSuggestions' => 'sync_suggestions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'distributeResult' => 'setDistributeResult',
        'orderId' => 'setOrderId',
        'orderStatus' => 'setOrderStatus',
        'recordId' => 'setRecordId',
        'syncSuggestions' => 'setSyncSuggestions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'distributeResult' => 'getDistributeResult',
        'orderId' => 'getOrderId',
        'orderStatus' => 'getOrderStatus',
        'recordId' => 'getRecordId',
        'syncSuggestions' => 'getSyncSuggestions'
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
        $this->container['distributeResult'] = $data['distributeResult'] ?? null;
        $this->container['orderId'] = $data['orderId'] ?? null;
        $this->container['orderStatus'] = $data['orderStatus'] ?? null;
        $this->container['recordId'] = $data['recordId'] ?? null;
        $this->container['syncSuggestions'] = $data['syncSuggestions'] ?? null;
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
     * Gets distributeResult
     *
     * @return \Alipay\OpenAPISDK\Model\OrderDataDistributeInfo[]|null
     */
    public function getDistributeResult()
    {
        return $this->container['distributeResult'];
    }

    /**
     * Sets distributeResult
     *
     * @param \Alipay\OpenAPISDK\Model\OrderDataDistributeInfo[]|null $distributeResult \"分发结果 若未分发到场景侧，则会返回具体的未分发原因\"
     *
     * @return self
     */
    public function setDistributeResult($distributeResult)
    {
        $this->container['distributeResult'] = $distributeResult;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string|null $orderId 支付宝订单号
     *
     * @return self
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

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
     * @param string|null $orderStatus 订单状态
     *
     * @return self
     */
    public function setOrderStatus($orderStatus)
    {
        $this->container['orderStatus'] = $orderStatus;

        return $this;
    }

    /**
     * Gets recordId
     *
     * @return string|null
     */
    public function getRecordId()
    {
        return $this->container['recordId'];
    }

    /**
     * Sets recordId
     *
     * @param string|null $recordId 同步订单记录id
     *
     * @return self
     */
    public function setRecordId($recordId)
    {
        $this->container['recordId'] = $recordId;

        return $this;
    }

    /**
     * Gets syncSuggestions
     *
     * @return \Alipay\OpenAPISDK\Model\OrderDataSyncSuggestion[]|null
     */
    public function getSyncSuggestions()
    {
        return $this->container['syncSuggestions'];
    }

    /**
     * Sets syncSuggestions
     *
     * @param \Alipay\OpenAPISDK\Model\OrderDataSyncSuggestion[]|null $syncSuggestions 订单同步优化建议，供开发者参考
     *
     * @return self
     */
    public function setSyncSuggestions($syncSuggestions)
    {
        $this->container['syncSuggestions'] = $syncSuggestions;

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


