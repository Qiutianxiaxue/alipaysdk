<?php
/**
 * AlipayMarketingActivityOrdervoucherUseModel
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
 * AlipayMarketingActivityOrdervoucherUseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayMarketingActivityOrdervoucherUseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayMarketingActivityOrdervoucherUseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bizDt' => 'string',
        'goodsDetail' => '\Alipay\OpenAPISDK\Model\GoodsDetailDTO[]',
        'merchantAccessMode' => 'string',
        'outBizNo' => 'string',
        'realShopId' => 'string',
        'storeId' => 'string',
        'totalFee' => 'string',
        'tradeChannel' => 'string',
        'tradeNo' => 'string',
        'voucherUseDetailInfo' => '\Alipay\OpenAPISDK\Model\VoucherUseDetailInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bizDt' => null,
        'goodsDetail' => null,
        'merchantAccessMode' => null,
        'outBizNo' => null,
        'realShopId' => null,
        'storeId' => null,
        'totalFee' => null,
        'tradeChannel' => null,
        'tradeNo' => null,
        'voucherUseDetailInfo' => null
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
        'bizDt' => 'biz_dt',
        'goodsDetail' => 'goods_detail',
        'merchantAccessMode' => 'merchant_access_mode',
        'outBizNo' => 'out_biz_no',
        'realShopId' => 'real_shop_id',
        'storeId' => 'store_id',
        'totalFee' => 'total_fee',
        'tradeChannel' => 'trade_channel',
        'tradeNo' => 'trade_no',
        'voucherUseDetailInfo' => 'voucher_use_detail_info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bizDt' => 'setBizDt',
        'goodsDetail' => 'setGoodsDetail',
        'merchantAccessMode' => 'setMerchantAccessMode',
        'outBizNo' => 'setOutBizNo',
        'realShopId' => 'setRealShopId',
        'storeId' => 'setStoreId',
        'totalFee' => 'setTotalFee',
        'tradeChannel' => 'setTradeChannel',
        'tradeNo' => 'setTradeNo',
        'voucherUseDetailInfo' => 'setVoucherUseDetailInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bizDt' => 'getBizDt',
        'goodsDetail' => 'getGoodsDetail',
        'merchantAccessMode' => 'getMerchantAccessMode',
        'outBizNo' => 'getOutBizNo',
        'realShopId' => 'getRealShopId',
        'storeId' => 'getStoreId',
        'totalFee' => 'getTotalFee',
        'tradeChannel' => 'getTradeChannel',
        'tradeNo' => 'getTradeNo',
        'voucherUseDetailInfo' => 'getVoucherUseDetailInfo'
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
        $this->container['bizDt'] = $data['bizDt'] ?? null;
        $this->container['goodsDetail'] = $data['goodsDetail'] ?? null;
        $this->container['merchantAccessMode'] = $data['merchantAccessMode'] ?? null;
        $this->container['outBizNo'] = $data['outBizNo'] ?? null;
        $this->container['realShopId'] = $data['realShopId'] ?? null;
        $this->container['storeId'] = $data['storeId'] ?? null;
        $this->container['totalFee'] = $data['totalFee'] ?? null;
        $this->container['tradeChannel'] = $data['tradeChannel'] ?? null;
        $this->container['tradeNo'] = $data['tradeNo'] ?? null;
        $this->container['voucherUseDetailInfo'] = $data['voucherUseDetailInfo'] ?? null;
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
     * Gets bizDt
     *
     * @return string|null
     */
    public function getBizDt()
    {
        return $this->container['bizDt'];
    }

    /**
     * Sets bizDt
     *
     * @param string|null $bizDt 外部优惠券的核销时间，用于流水记录。 格式为：yyyy-MM-dd HH:mm:ss
     *
     * @return self
     */
    public function setBizDt($bizDt)
    {
        $this->container['bizDt'] = $bizDt;

        return $this;
    }

    /**
     * Gets goodsDetail
     *
     * @return \Alipay\OpenAPISDK\Model\GoodsDetailDTO[]|null
     */
    public function getGoodsDetail()
    {
        return $this->container['goodsDetail'];
    }

    /**
     * Sets goodsDetail
     *
     * @param \Alipay\OpenAPISDK\Model\GoodsDetailDTO[]|null $goodsDetail 商品明细信息
     *
     * @return self
     */
    public function setGoodsDetail($goodsDetail)
    {
        $this->container['goodsDetail'] = $goodsDetail;

        return $this;
    }

    /**
     * Gets merchantAccessMode
     *
     * @return string|null
     */
    public function getMerchantAccessMode()
    {
        return $this->container['merchantAccessMode'];
    }

    /**
     * Sets merchantAccessMode
     *
     * @param string|null $merchantAccessMode 商户接入模式
     *
     * @return self
     */
    public function setMerchantAccessMode($merchantAccessMode)
    {
        $this->container['merchantAccessMode'] = $merchantAccessMode;

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
     * @param string|null $outBizNo 外部业务单号，用作幂等控制。    幂等作用：  参数不变的情况下，再次请求返回与上一次相同的结果。    外部接入方需保证业务单号唯一。
     *
     * @return self
     */
    public function setOutBizNo($outBizNo)
    {
        $this->container['outBizNo'] = $outBizNo;

        return $this;
    }

    /**
     * Gets realShopId
     *
     * @return string|null
     */
    public function getRealShopId()
    {
        return $this->container['realShopId'];
    }

    /**
     * Sets realShopId
     *
     * @param string|null $realShopId 用户核销优惠券的代运营商业关系门店id，调用接口alipay.business.relation.shop.create创建门店返回的real_shop_id。 限制: 传入的门店id必须是创建商家券voucher_use_rule. voucher_available_scope.  order_voucher_available_shop对象中real_shop_ids中的门店id
     *
     * @return self
     */
    public function setRealShopId($realShopId)
    {
        $this->container['realShopId'] = $realShopId;

        return $this;
    }

    /**
     * Gets storeId
     *
     * @return string|null
     */
    public function getStoreId()
    {
        return $this->container['storeId'];
    }

    /**
     * Sets storeId
     *
     * @param string|null $storeId 用户核销优惠券的支付门店id,调用接口<a href=\"https://opendocs.alipay.com/open/03s3jk?pathHash=04312530&scene=common\" target=\"_blank\">ant.merchant.expand.shop.create</a>创建门店返回的门店id。 限制: 传入的门店id必须是创建商家券voucher_use_rule. voucher_available_scope.  order_voucher_available_shop对象中shop_ids中的门店id
     *
     * @return self
     */
    public function setStoreId($storeId)
    {
        $this->container['storeId'] = $storeId;

        return $this;
    }

    /**
     * Gets totalFee
     *
     * @return string|null
     */
    public function getTotalFee()
    {
        return $this->container['totalFee'];
    }

    /**
     * Sets totalFee
     *
     * @param string|null $totalFee 订单总金额
     *
     * @return self
     */
    public function setTotalFee($totalFee)
    {
        $this->container['totalFee'] = $totalFee;

        return $this;
    }

    /**
     * Gets tradeChannel
     *
     * @return string|null
     */
    public function getTradeChannel()
    {
        return $this->container['tradeChannel'];
    }

    /**
     * Sets tradeChannel
     *
     * @param string|null $tradeChannel 交易渠道。
     *
     * @return self
     */
    public function setTradeChannel($tradeChannel)
    {
        $this->container['tradeChannel'] = $tradeChannel;

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
     * @param string|null $tradeNo 该交易在支付宝系统中的交易流水号。 注意：若用户使用支付宝为交易的渠道，本参数必填。
     *
     * @return self
     */
    public function setTradeNo($tradeNo)
    {
        $this->container['tradeNo'] = $tradeNo;

        return $this;
    }

    /**
     * Gets voucherUseDetailInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherUseDetailInfo|null
     */
    public function getVoucherUseDetailInfo()
    {
        return $this->container['voucherUseDetailInfo'];
    }

    /**
     * Sets voucherUseDetailInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherUseDetailInfo|null $voucherUseDetailInfo voucherUseDetailInfo
     *
     * @return self
     */
    public function setVoucherUseDetailInfo($voucherUseDetailInfo)
    {
        $this->container['voucherUseDetailInfo'] = $voucherUseDetailInfo;

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


