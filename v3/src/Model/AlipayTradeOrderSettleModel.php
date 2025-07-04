<?php
/**
 * AlipayTradeOrderSettleModel
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
 * AlipayTradeOrderSettleModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayTradeOrderSettleModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayTradeOrderSettleModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'extendParams' => '\Alipay\OpenAPISDK\Model\SettleExtendParams',
        'operatorId' => 'string',
        'outRequestNo' => 'string',
        'royaltyMode' => 'string',
        'royaltyParameters' => '\Alipay\OpenAPISDK\Model\OpenApiRoyaltyDetailInfoPojo[]',
        'tradeNo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'extendParams' => null,
        'operatorId' => null,
        'outRequestNo' => null,
        'royaltyMode' => null,
        'royaltyParameters' => null,
        'tradeNo' => null
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
        'extendParams' => 'extend_params',
        'operatorId' => 'operator_id',
        'outRequestNo' => 'out_request_no',
        'royaltyMode' => 'royalty_mode',
        'royaltyParameters' => 'royalty_parameters',
        'tradeNo' => 'trade_no'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'extendParams' => 'setExtendParams',
        'operatorId' => 'setOperatorId',
        'outRequestNo' => 'setOutRequestNo',
        'royaltyMode' => 'setRoyaltyMode',
        'royaltyParameters' => 'setRoyaltyParameters',
        'tradeNo' => 'setTradeNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'extendParams' => 'getExtendParams',
        'operatorId' => 'getOperatorId',
        'outRequestNo' => 'getOutRequestNo',
        'royaltyMode' => 'getRoyaltyMode',
        'royaltyParameters' => 'getRoyaltyParameters',
        'tradeNo' => 'getTradeNo'
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
        $this->container['extendParams'] = $data['extendParams'] ?? null;
        $this->container['operatorId'] = $data['operatorId'] ?? null;
        $this->container['outRequestNo'] = $data['outRequestNo'] ?? null;
        $this->container['royaltyMode'] = $data['royaltyMode'] ?? null;
        $this->container['royaltyParameters'] = $data['royaltyParameters'] ?? null;
        $this->container['tradeNo'] = $data['tradeNo'] ?? null;
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
     * Gets extendParams
     *
     * @return \Alipay\OpenAPISDK\Model\SettleExtendParams|null
     */
    public function getExtendParams()
    {
        return $this->container['extendParams'];
    }

    /**
     * Sets extendParams
     *
     * @param \Alipay\OpenAPISDK\Model\SettleExtendParams|null $extendParams extendParams
     *
     * @return self
     */
    public function setExtendParams($extendParams)
    {
        $this->container['extendParams'] = $extendParams;

        return $this;
    }

    /**
     * Gets operatorId
     *
     * @return string|null
     */
    public function getOperatorId()
    {
        return $this->container['operatorId'];
    }

    /**
     * Sets operatorId
     *
     * @param string|null $operatorId 操作员 ID，商家自定义操作员编号。
     *
     * @return self
     */
    public function setOperatorId($operatorId)
    {
        $this->container['operatorId'] = $operatorId;

        return $this;
    }

    /**
     * Gets outRequestNo
     *
     * @return string|null
     */
    public function getOutRequestNo()
    {
        return $this->container['outRequestNo'];
    }

    /**
     * Sets outRequestNo
     *
     * @param string|null $outRequestNo 结算请求流水号，由商家自定义。32个字符以内，仅可包含字母、数字、下划线。需保证在商户端不重复。
     *
     * @return self
     */
    public function setOutRequestNo($outRequestNo)
    {
        $this->container['outRequestNo'] = $outRequestNo;

        return $this;
    }

    /**
     * Gets royaltyMode
     *
     * @return string|null
     */
    public function getRoyaltyMode()
    {
        return $this->container['royaltyMode'];
    }

    /**
     * Sets royaltyMode
     *
     * @param string|null $royaltyMode 分账模式，目前有两种分账同步执行sync，分账异步执行async，不传默认同步执行
     *
     * @return self
     */
    public function setRoyaltyMode($royaltyMode)
    {
        $this->container['royaltyMode'] = $royaltyMode;

        return $this;
    }

    /**
     * Gets royaltyParameters
     *
     * @return \Alipay\OpenAPISDK\Model\OpenApiRoyaltyDetailInfoPojo[]|null
     */
    public function getRoyaltyParameters()
    {
        return $this->container['royaltyParameters'];
    }

    /**
     * Sets royaltyParameters
     *
     * @param \Alipay\OpenAPISDK\Model\OpenApiRoyaltyDetailInfoPojo[]|null $royaltyParameters 分账明细信息。单独调用分账完结时，可以不传此参数。其他场景必传。 注意：商家分账场景下分账收入方 trans_in 只支持支付宝账户，不支持使用 cardAliasNo 卡编号。
     *
     * @return self
     */
    public function setRoyaltyParameters($royaltyParameters)
    {
        $this->container['royaltyParameters'] = $royaltyParameters;

        return $this;
    }

    /**
     * Gets tradeNo
     *
     * @return string|null
     */
    public function getTradeNo()
    {
        return $this->container['tradeNo'];
    }

    /**
     * Sets tradeNo
     *
     * @param string|null $tradeNo 支付宝订单号
     *
     * @return self
     */
    public function setTradeNo($tradeNo)
    {
        $this->container['tradeNo'] = $tradeNo;

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


