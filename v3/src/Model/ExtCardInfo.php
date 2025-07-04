<?php
/**
 * ExtCardInfo
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
 * ExtCardInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ExtCardInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExtCardInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bankAccName' => 'string',
        'cardBank' => 'string',
        'cardBranch' => 'string',
        'cardDeposit' => 'string',
        'cardLocation' => 'string',
        'cardNo' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bankAccName' => null,
        'cardBank' => null,
        'cardBranch' => null,
        'cardDeposit' => null,
        'cardLocation' => null,
        'cardNo' => null,
        'status' => null
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
        'bankAccName' => 'bank_acc_name',
        'cardBank' => 'card_bank',
        'cardBranch' => 'card_branch',
        'cardDeposit' => 'card_deposit',
        'cardLocation' => 'card_location',
        'cardNo' => 'card_no',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bankAccName' => 'setBankAccName',
        'cardBank' => 'setCardBank',
        'cardBranch' => 'setCardBranch',
        'cardDeposit' => 'setCardDeposit',
        'cardLocation' => 'setCardLocation',
        'cardNo' => 'setCardNo',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bankAccName' => 'getBankAccName',
        'cardBank' => 'getCardBank',
        'cardBranch' => 'getCardBranch',
        'cardDeposit' => 'getCardDeposit',
        'cardLocation' => 'getCardLocation',
        'cardNo' => 'getCardNo',
        'status' => 'getStatus'
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
        $this->container['bankAccName'] = $data['bankAccName'] ?? null;
        $this->container['cardBank'] = $data['cardBank'] ?? null;
        $this->container['cardBranch'] = $data['cardBranch'] ?? null;
        $this->container['cardDeposit'] = $data['cardDeposit'] ?? null;
        $this->container['cardLocation'] = $data['cardLocation'] ?? null;
        $this->container['cardNo'] = $data['cardNo'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
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
     * Gets bankAccName
     *
     * @return string|null
     */
    public function getBankAccName()
    {
        return $this->container['bankAccName'];
    }

    /**
     * Sets bankAccName
     *
     * @param string|null $bankAccName 记账的外卡户名
     *
     * @return self
     */
    public function setBankAccName($bankAccName)
    {
        $this->container['bankAccName'] = $bankAccName;

        return $this;
    }

    /**
     * Gets cardBank
     *
     * @return string|null
     */
    public function getCardBank()
    {
        return $this->container['cardBank'];
    }

    /**
     * Sets cardBank
     *
     * @param string|null $cardBank 记账的外卡开户行
     *
     * @return self
     */
    public function setCardBank($cardBank)
    {
        $this->container['cardBank'] = $cardBank;

        return $this;
    }

    /**
     * Gets cardBranch
     *
     * @return string|null
     */
    public function getCardBranch()
    {
        return $this->container['cardBranch'];
    }

    /**
     * Sets cardBranch
     *
     * @param string|null $cardBranch 记账的外卡支行
     *
     * @return self
     */
    public function setCardBranch($cardBranch)
    {
        $this->container['cardBranch'] = $cardBranch;

        return $this;
    }

    /**
     * Gets cardDeposit
     *
     * @return string|null
     */
    public function getCardDeposit()
    {
        return $this->container['cardDeposit'];
    }

    /**
     * Sets cardDeposit
     *
     * @param string|null $cardDeposit 记账的外卡联行号
     *
     * @return self
     */
    public function setCardDeposit($cardDeposit)
    {
        $this->container['cardDeposit'] = $cardDeposit;

        return $this;
    }

    /**
     * Gets cardLocation
     *
     * @return string|null
     */
    public function getCardLocation()
    {
        return $this->container['cardLocation'];
    }

    /**
     * Sets cardLocation
     *
     * @param string|null $cardLocation 记账的外卡开户地址
     *
     * @return self
     */
    public function setCardLocation($cardLocation)
    {
        $this->container['cardLocation'] = $cardLocation;

        return $this;
    }

    /**
     * Gets cardNo
     *
     * @return string|null
     */
    public function getCardNo()
    {
        return $this->container['cardNo'];
    }

    /**
     * Sets cardNo
     *
     * @param string|null $cardNo 记账的外卡卡号
     *
     * @return self
     */
    public function setCardNo($cardNo)
    {
        $this->container['cardNo'] = $cardNo;

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
     * @param string|null $status 记账的外卡状态, A：正常状态;  其他：异常
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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


