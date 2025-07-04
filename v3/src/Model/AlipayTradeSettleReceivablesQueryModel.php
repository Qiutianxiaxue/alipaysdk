<?php
/**
 * AlipayTradeSettleReceivablesQueryModel
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
 * AlipayTradeSettleReceivablesQueryModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayTradeSettleReceivablesQueryModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayTradeSettleReceivablesQueryModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bizProduct' => 'string',
        'extendParams' => 'string',
        'merchantInfo' => '\Alipay\OpenAPISDK\Model\SettleEntity',
        'outRequestNo' => 'string',
        'queryHisDate' => 'string',
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
        'bizProduct' => null,
        'extendParams' => null,
        'merchantInfo' => null,
        'outRequestNo' => null,
        'queryHisDate' => null,
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
        'bizProduct' => 'biz_product',
        'extendParams' => 'extend_params',
        'merchantInfo' => 'merchant_info',
        'outRequestNo' => 'out_request_no',
        'queryHisDate' => 'query_his_date',
        'tradeNo' => 'trade_no'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bizProduct' => 'setBizProduct',
        'extendParams' => 'setExtendParams',
        'merchantInfo' => 'setMerchantInfo',
        'outRequestNo' => 'setOutRequestNo',
        'queryHisDate' => 'setQueryHisDate',
        'tradeNo' => 'setTradeNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bizProduct' => 'getBizProduct',
        'extendParams' => 'getExtendParams',
        'merchantInfo' => 'getMerchantInfo',
        'outRequestNo' => 'getOutRequestNo',
        'queryHisDate' => 'getQueryHisDate',
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
        $this->container['bizProduct'] = $data['bizProduct'] ?? null;
        $this->container['extendParams'] = $data['extendParams'] ?? null;
        $this->container['merchantInfo'] = $data['merchantInfo'] ?? null;
        $this->container['outRequestNo'] = $data['outRequestNo'] ?? null;
        $this->container['queryHisDate'] = $data['queryHisDate'] ?? null;
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
     * Gets bizProduct
     *
     * @return string|null
     */
    public function getBizProduct()
    {
        return $this->container['bizProduct'];
    }

    /**
     * Sets bizProduct
     *
     * @param string|null $bizProduct 收单产品码，商家和支付宝签约的产品码
     *
     * @return self
     */
    public function setBizProduct($bizProduct)
    {
        $this->container['bizProduct'] = $bizProduct;

        return $this;
    }

    /**
     * Gets extendParams
     *
     * @return string|null
     */
    public function getExtendParams()
    {
        return $this->container['extendParams'];
    }

    /**
     * Sets extendParams
     *
     * @param string|null $extendParams 扩展参数
     *
     * @return self
     */
    public function setExtendParams($extendParams)
    {
        $this->container['extendParams'] = $extendParams;

        return $this;
    }

    /**
     * Gets merchantInfo
     *
     * @return \Alipay\OpenAPISDK\Model\SettleEntity|null
     */
    public function getMerchantInfo()
    {
        return $this->container['merchantInfo'];
    }

    /**
     * Sets merchantInfo
     *
     * @param \Alipay\OpenAPISDK\Model\SettleEntity|null $merchantInfo merchantInfo
     *
     * @return self
     */
    public function setMerchantInfo($merchantInfo)
    {
        $this->container['merchantInfo'] = $merchantInfo;

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
     * @param string|null $outRequestNo 外部请求号，32个字符以内，可包含字母、数字、下划线。
     *
     * @return self
     */
    public function setOutRequestNo($outRequestNo)
    {
        $this->container['outRequestNo'] = $outRequestNo;

        return $this;
    }

    /**
     * Gets queryHisDate
     *
     * @return string|null
     */
    public function getQueryHisDate()
    {
        return $this->container['queryHisDate'];
    }

    /**
     * Sets queryHisDate
     *
     * @param string|null $queryHisDate 当trade_no不为空时，该字段不生效。 查询历史日期，格式为 yyyyMMdd ，取值范围为昨日起至往前30日内； 不传入时，查询实时待结算余额返回； 传入过去某一天日期，查询对应日期的日终待结算余额返回（注意：日常场景下，昨日日终待结算余额只可在当天 02:00 后查询，在当天 02:00 前查询返回查询错误；大促场景下昨日日终可查时间会适当延后）； 传入过去某一天非近30天内，返回参数错误。
     *
     * @return self
     */
    public function setQueryHisDate($queryHisDate)
    {
        $this->container['queryHisDate'] = $queryHisDate;

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
     * @param string|null $tradeNo 支付宝交易号，当该笔交易为直付通账期模式，查询该笔交易待确认结算金额时必传
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


