<?php
/**
 * DepositBackInfo
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
 * DepositBackInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DepositBackInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DepositBackInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bankAckTime' => 'string',
        'dbackAmount' => 'string',
        'dbackStatus' => 'string',
        'estBankReceiptTime' => 'string',
        'hasDepositBack' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bankAckTime' => null,
        'dbackAmount' => null,
        'dbackStatus' => null,
        'estBankReceiptTime' => null,
        'hasDepositBack' => null
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
        'bankAckTime' => 'bank_ack_time',
        'dbackAmount' => 'dback_amount',
        'dbackStatus' => 'dback_status',
        'estBankReceiptTime' => 'est_bank_receipt_time',
        'hasDepositBack' => 'has_deposit_back'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bankAckTime' => 'setBankAckTime',
        'dbackAmount' => 'setDbackAmount',
        'dbackStatus' => 'setDbackStatus',
        'estBankReceiptTime' => 'setEstBankReceiptTime',
        'hasDepositBack' => 'setHasDepositBack'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bankAckTime' => 'getBankAckTime',
        'dbackAmount' => 'getDbackAmount',
        'dbackStatus' => 'getDbackStatus',
        'estBankReceiptTime' => 'getEstBankReceiptTime',
        'hasDepositBack' => 'getHasDepositBack'
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
        $this->container['bankAckTime'] = $data['bankAckTime'] ?? null;
        $this->container['dbackAmount'] = $data['dbackAmount'] ?? null;
        $this->container['dbackStatus'] = $data['dbackStatus'] ?? null;
        $this->container['estBankReceiptTime'] = $data['estBankReceiptTime'] ?? null;
        $this->container['hasDepositBack'] = $data['hasDepositBack'] ?? null;
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
     * Gets bankAckTime
     *
     * @return string|null
     */
    public function getBankAckTime()
    {
        return $this->container['bankAckTime'];
    }

    /**
     * Sets bankAckTime
     *
     * @param string|null $bankAckTime 银行响应时间，格式为yyyy-MM-dd HH:mm:ss
     *
     * @return self
     */
    public function setBankAckTime($bankAckTime)
    {
        $this->container['bankAckTime'] = $bankAckTime;

        return $this;
    }

    /**
     * Gets dbackAmount
     *
     * @return string|null
     */
    public function getDbackAmount()
    {
        return $this->container['dbackAmount'];
    }

    /**
     * Sets dbackAmount
     *
     * @param string|null $dbackAmount 银行卡冲退金额。单位：元。
     *
     * @return self
     */
    public function setDbackAmount($dbackAmount)
    {
        $this->container['dbackAmount'] = $dbackAmount;

        return $this;
    }

    /**
     * Gets dbackStatus
     *
     * @return string|null
     */
    public function getDbackStatus()
    {
        return $this->container['dbackStatus'];
    }

    /**
     * Sets dbackStatus
     *
     * @param string|null $dbackStatus 银行卡冲退状态。S-成功，F-失败，P-处理中。银行卡冲退失败，资金自动转入用户支付宝余额。
     *
     * @return self
     */
    public function setDbackStatus($dbackStatus)
    {
        $this->container['dbackStatus'] = $dbackStatus;

        return $this;
    }

    /**
     * Gets estBankReceiptTime
     *
     * @return string|null
     */
    public function getEstBankReceiptTime()
    {
        return $this->container['estBankReceiptTime'];
    }

    /**
     * Sets estBankReceiptTime
     *
     * @param string|null $estBankReceiptTime 预估银行到账时间，格式为yyyy-MM-dd HH:mm:ss
     *
     * @return self
     */
    public function setEstBankReceiptTime($estBankReceiptTime)
    {
        $this->container['estBankReceiptTime'] = $estBankReceiptTime;

        return $this;
    }

    /**
     * Gets hasDepositBack
     *
     * @return string|null
     */
    public function getHasDepositBack()
    {
        return $this->container['hasDepositBack'];
    }

    /**
     * Sets hasDepositBack
     *
     * @param string|null $hasDepositBack 是否存在银行卡冲退信息。
     *
     * @return self
     */
    public function setHasDepositBack($hasDepositBack)
    {
        $this->container['hasDepositBack'] = $hasDepositBack;

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


