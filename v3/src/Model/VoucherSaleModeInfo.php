<?php
/**
 * VoucherSaleModeInfo
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
 * VoucherSaleModeInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class VoucherSaleModeInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VoucherSaleModeInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fundCustodyMode' => 'string',
        'overdueRefundable' => 'bool',
        'overdueRefundableNeedConfirm' => 'bool',
        'payeePid' => 'string',
        'refundable' => 'bool',
        'refundableNeedConfirm' => 'bool',
        'saleAmount' => 'string',
        'settleInfo' => '\Alipay\OpenAPISDK\Model\BizfundSettleInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fundCustodyMode' => null,
        'overdueRefundable' => null,
        'overdueRefundableNeedConfirm' => null,
        'payeePid' => null,
        'refundable' => null,
        'refundableNeedConfirm' => null,
        'saleAmount' => null,
        'settleInfo' => null
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
        'fundCustodyMode' => 'fund_custody_mode',
        'overdueRefundable' => 'overdue_refundable',
        'overdueRefundableNeedConfirm' => 'overdue_refundable_need_confirm',
        'payeePid' => 'payee_pid',
        'refundable' => 'refundable',
        'refundableNeedConfirm' => 'refundable_need_confirm',
        'saleAmount' => 'sale_amount',
        'settleInfo' => 'settle_info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fundCustodyMode' => 'setFundCustodyMode',
        'overdueRefundable' => 'setOverdueRefundable',
        'overdueRefundableNeedConfirm' => 'setOverdueRefundableNeedConfirm',
        'payeePid' => 'setPayeePid',
        'refundable' => 'setRefundable',
        'refundableNeedConfirm' => 'setRefundableNeedConfirm',
        'saleAmount' => 'setSaleAmount',
        'settleInfo' => 'setSettleInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fundCustodyMode' => 'getFundCustodyMode',
        'overdueRefundable' => 'getOverdueRefundable',
        'overdueRefundableNeedConfirm' => 'getOverdueRefundableNeedConfirm',
        'payeePid' => 'getPayeePid',
        'refundable' => 'getRefundable',
        'refundableNeedConfirm' => 'getRefundableNeedConfirm',
        'saleAmount' => 'getSaleAmount',
        'settleInfo' => 'getSettleInfo'
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
        $this->container['fundCustodyMode'] = $data['fundCustodyMode'] ?? null;
        $this->container['overdueRefundable'] = $data['overdueRefundable'] ?? null;
        $this->container['overdueRefundableNeedConfirm'] = $data['overdueRefundableNeedConfirm'] ?? null;
        $this->container['payeePid'] = $data['payeePid'] ?? null;
        $this->container['refundable'] = $data['refundable'] ?? null;
        $this->container['refundableNeedConfirm'] = $data['refundableNeedConfirm'] ?? null;
        $this->container['saleAmount'] = $data['saleAmount'] ?? null;
        $this->container['settleInfo'] = $data['settleInfo'] ?? null;
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
     * Gets fundCustodyMode
     *
     * @return string|null
     */
    public function getFundCustodyMode()
    {
        return $this->container['fundCustodyMode'];
    }

    /**
     * Sets fundCustodyMode
     *
     * @param string|null $fundCustodyMode 资金托管方式
     *
     * @return self
     */
    public function setFundCustodyMode($fundCustodyMode)
    {
        $this->container['fundCustodyMode'] = $fundCustodyMode;

        return $this;
    }

    /**
     * Gets overdueRefundable
     *
     * @return bool|null
     */
    public function getOverdueRefundable()
    {
        return $this->container['overdueRefundable'];
    }

    /**
     * Sets overdueRefundable
     *
     * @param bool|null $overdueRefundable 是否支持优惠券过期后，自动退款给用户。 不填默认否，枚举值： true：是  false：否。自动退款功能需要服务商在优惠券过期时，主动调用alipay.marketing.activity.order.refund接口进行退款。  如果配置优惠券时选择了过期自动退款，但是实际券过期后，服务商没有进行退款，那么用户投诉后，需要服务商进行解决。
     *
     * @return self
     */
    public function setOverdueRefundable($overdueRefundable)
    {
        $this->container['overdueRefundable'] = $overdueRefundable;

        return $this;
    }

    /**
     * Gets overdueRefundableNeedConfirm
     *
     * @return bool|null
     */
    public function getOverdueRefundableNeedConfirm()
    {
        return $this->container['overdueRefundableNeedConfirm'];
    }

    /**
     * Sets overdueRefundableNeedConfirm
     *
     * @param bool|null $overdueRefundableNeedConfirm 在支持过期自动退款后，支付宝发起自动退款前 是否需要向商户确认退款。 不填默认否，枚举值： true：是 false：否。  如果选择了 true:是 ，则需要商户配合接入  过期自动退款前是否需要向商户确认SPI(spi.alipay.marketing.activity.order.refundconfirm)  以及   退款确认结果API(alipay.marketing.activity.order.refundconfirmcommit)
     *
     * @return self
     */
    public function setOverdueRefundableNeedConfirm($overdueRefundableNeedConfirm)
    {
        $this->container['overdueRefundableNeedConfirm'] = $overdueRefundableNeedConfirm;

        return $this;
    }

    /**
     * Gets payeePid
     *
     * @return string|null
     */
    public function getPayeePid()
    {
        return $this->container['payeePid'];
    }

    /**
     * Sets payeePid
     *
     * @param string|null $payeePid 收款账号。 目前的结算规则是，每核销一笔优惠券，支付宝会打款到该收款账户。
     *
     * @return self
     */
    public function setPayeePid($payeePid)
    {
        $this->container['payeePid'] = $payeePid;

        return $this;
    }

    /**
     * Gets refundable
     *
     * @return bool|null
     */
    public function getRefundable()
    {
        return $this->container['refundable'];
    }

    /**
     * Sets refundable
     *
     * @param bool|null $refundable 购买的优惠券是否允许退款。 不填默认否，枚举值： true：是 false：否
     *
     * @return self
     */
    public function setRefundable($refundable)
    {
        $this->container['refundable'] = $refundable;

        return $this;
    }

    /**
     * Gets refundableNeedConfirm
     *
     * @return bool|null
     */
    public function getRefundableNeedConfirm()
    {
        return $this->container['refundableNeedConfirm'];
    }

    /**
     * Sets refundableNeedConfirm
     *
     * @param bool|null $refundableNeedConfirm 在支持随时退后，支付宝发起退款前用于判断是否需要向商户确认退款。 不填默认否，枚举值： true：是 false：否。 如果选择了 true:是  ，则需要商户配合接入退款前是否需要向商户确认SPI(spi.alipay.marketing.activity.order.refundconfirm)
     *
     * @return self
     */
    public function setRefundableNeedConfirm($refundableNeedConfirm)
    {
        $this->container['refundableNeedConfirm'] = $refundableNeedConfirm;

        return $this;
    }

    /**
     * Gets saleAmount
     *
     * @return string|null
     */
    public function getSaleAmount()
    {
        return $this->container['saleAmount'];
    }

    /**
     * Sets saleAmount
     *
     * @param string|null $saleAmount 用户购买优惠券需要支付的金额
     *
     * @return self
     */
    public function setSaleAmount($saleAmount)
    {
        $this->container['saleAmount'] = $saleAmount;

        return $this;
    }

    /**
     * Gets settleInfo
     *
     * @return \Alipay\OpenAPISDK\Model\BizfundSettleInfo|null
     */
    public function getSettleInfo()
    {
        return $this->container['settleInfo'];
    }

    /**
     * Sets settleInfo
     *
     * @param \Alipay\OpenAPISDK\Model\BizfundSettleInfo|null $settleInfo settleInfo
     *
     * @return self
     */
    public function setSettleInfo($settleInfo)
    {
        $this->container['settleInfo'] = $settleInfo;

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


