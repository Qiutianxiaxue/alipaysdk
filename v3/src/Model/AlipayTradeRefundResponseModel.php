<?php
/**
 * AlipayTradeRefundResponseModel
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
 * AlipayTradeRefundResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayTradeRefundResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayTradeRefundResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'buyerLogonId' => 'string',
        'buyerOpenId' => 'string',
        'buyerUserId' => 'string',
        'fundChange' => 'string',
        'gmtRefundPay' => 'string',
        'hasDepositBack' => 'string',
        'openId' => 'string',
        'outTradeNo' => 'string',
        'preAuthCancelFee' => 'string',
        'presentRefundBuyerAmount' => 'string',
        'presentRefundDiscountAmount' => 'string',
        'presentRefundMdiscountAmount' => 'string',
        'refundChargeAmount' => 'string',
        'refundChargeInfoList' => '\Alipay\OpenAPISDK\Model\RefundChargeInfo[]',
        'refundCurrency' => 'string',
        'refundDetailItemList' => '\Alipay\OpenAPISDK\Model\TradeFundBill[]',
        'refundFee' => 'string',
        'refundHybAmount' => 'string',
        'refundPresetPaytoolList' => '\Alipay\OpenAPISDK\Model\PresetPayToolInfo',
        'refundSettlementId' => 'string',
        'refundVoucherDetailList' => '\Alipay\OpenAPISDK\Model\VoucherDetail[]',
        'sendBackFee' => 'string',
        'storeName' => 'string',
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
        'buyerLogonId' => null,
        'buyerOpenId' => null,
        'buyerUserId' => null,
        'fundChange' => null,
        'gmtRefundPay' => null,
        'hasDepositBack' => null,
        'openId' => null,
        'outTradeNo' => null,
        'preAuthCancelFee' => null,
        'presentRefundBuyerAmount' => null,
        'presentRefundDiscountAmount' => null,
        'presentRefundMdiscountAmount' => null,
        'refundChargeAmount' => null,
        'refundChargeInfoList' => null,
        'refundCurrency' => null,
        'refundDetailItemList' => null,
        'refundFee' => null,
        'refundHybAmount' => null,
        'refundPresetPaytoolList' => null,
        'refundSettlementId' => null,
        'refundVoucherDetailList' => null,
        'sendBackFee' => null,
        'storeName' => null,
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
        'buyerLogonId' => 'buyer_logon_id',
        'buyerOpenId' => 'buyer_open_id',
        'buyerUserId' => 'buyer_user_id',
        'fundChange' => 'fund_change',
        'gmtRefundPay' => 'gmt_refund_pay',
        'hasDepositBack' => 'has_deposit_back',
        'openId' => 'open_id',
        'outTradeNo' => 'out_trade_no',
        'preAuthCancelFee' => 'pre_auth_cancel_fee',
        'presentRefundBuyerAmount' => 'present_refund_buyer_amount',
        'presentRefundDiscountAmount' => 'present_refund_discount_amount',
        'presentRefundMdiscountAmount' => 'present_refund_mdiscount_amount',
        'refundChargeAmount' => 'refund_charge_amount',
        'refundChargeInfoList' => 'refund_charge_info_list',
        'refundCurrency' => 'refund_currency',
        'refundDetailItemList' => 'refund_detail_item_list',
        'refundFee' => 'refund_fee',
        'refundHybAmount' => 'refund_hyb_amount',
        'refundPresetPaytoolList' => 'refund_preset_paytool_list',
        'refundSettlementId' => 'refund_settlement_id',
        'refundVoucherDetailList' => 'refund_voucher_detail_list',
        'sendBackFee' => 'send_back_fee',
        'storeName' => 'store_name',
        'tradeNo' => 'trade_no'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'buyerLogonId' => 'setBuyerLogonId',
        'buyerOpenId' => 'setBuyerOpenId',
        'buyerUserId' => 'setBuyerUserId',
        'fundChange' => 'setFundChange',
        'gmtRefundPay' => 'setGmtRefundPay',
        'hasDepositBack' => 'setHasDepositBack',
        'openId' => 'setOpenId',
        'outTradeNo' => 'setOutTradeNo',
        'preAuthCancelFee' => 'setPreAuthCancelFee',
        'presentRefundBuyerAmount' => 'setPresentRefundBuyerAmount',
        'presentRefundDiscountAmount' => 'setPresentRefundDiscountAmount',
        'presentRefundMdiscountAmount' => 'setPresentRefundMdiscountAmount',
        'refundChargeAmount' => 'setRefundChargeAmount',
        'refundChargeInfoList' => 'setRefundChargeInfoList',
        'refundCurrency' => 'setRefundCurrency',
        'refundDetailItemList' => 'setRefundDetailItemList',
        'refundFee' => 'setRefundFee',
        'refundHybAmount' => 'setRefundHybAmount',
        'refundPresetPaytoolList' => 'setRefundPresetPaytoolList',
        'refundSettlementId' => 'setRefundSettlementId',
        'refundVoucherDetailList' => 'setRefundVoucherDetailList',
        'sendBackFee' => 'setSendBackFee',
        'storeName' => 'setStoreName',
        'tradeNo' => 'setTradeNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'buyerLogonId' => 'getBuyerLogonId',
        'buyerOpenId' => 'getBuyerOpenId',
        'buyerUserId' => 'getBuyerUserId',
        'fundChange' => 'getFundChange',
        'gmtRefundPay' => 'getGmtRefundPay',
        'hasDepositBack' => 'getHasDepositBack',
        'openId' => 'getOpenId',
        'outTradeNo' => 'getOutTradeNo',
        'preAuthCancelFee' => 'getPreAuthCancelFee',
        'presentRefundBuyerAmount' => 'getPresentRefundBuyerAmount',
        'presentRefundDiscountAmount' => 'getPresentRefundDiscountAmount',
        'presentRefundMdiscountAmount' => 'getPresentRefundMdiscountAmount',
        'refundChargeAmount' => 'getRefundChargeAmount',
        'refundChargeInfoList' => 'getRefundChargeInfoList',
        'refundCurrency' => 'getRefundCurrency',
        'refundDetailItemList' => 'getRefundDetailItemList',
        'refundFee' => 'getRefundFee',
        'refundHybAmount' => 'getRefundHybAmount',
        'refundPresetPaytoolList' => 'getRefundPresetPaytoolList',
        'refundSettlementId' => 'getRefundSettlementId',
        'refundVoucherDetailList' => 'getRefundVoucherDetailList',
        'sendBackFee' => 'getSendBackFee',
        'storeName' => 'getStoreName',
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
        $this->container['buyerLogonId'] = $data['buyerLogonId'] ?? null;
        $this->container['buyerOpenId'] = $data['buyerOpenId'] ?? null;
        $this->container['buyerUserId'] = $data['buyerUserId'] ?? null;
        $this->container['fundChange'] = $data['fundChange'] ?? null;
        $this->container['gmtRefundPay'] = $data['gmtRefundPay'] ?? null;
        $this->container['hasDepositBack'] = $data['hasDepositBack'] ?? null;
        $this->container['openId'] = $data['openId'] ?? null;
        $this->container['outTradeNo'] = $data['outTradeNo'] ?? null;
        $this->container['preAuthCancelFee'] = $data['preAuthCancelFee'] ?? null;
        $this->container['presentRefundBuyerAmount'] = $data['presentRefundBuyerAmount'] ?? null;
        $this->container['presentRefundDiscountAmount'] = $data['presentRefundDiscountAmount'] ?? null;
        $this->container['presentRefundMdiscountAmount'] = $data['presentRefundMdiscountAmount'] ?? null;
        $this->container['refundChargeAmount'] = $data['refundChargeAmount'] ?? null;
        $this->container['refundChargeInfoList'] = $data['refundChargeInfoList'] ?? null;
        $this->container['refundCurrency'] = $data['refundCurrency'] ?? null;
        $this->container['refundDetailItemList'] = $data['refundDetailItemList'] ?? null;
        $this->container['refundFee'] = $data['refundFee'] ?? null;
        $this->container['refundHybAmount'] = $data['refundHybAmount'] ?? null;
        $this->container['refundPresetPaytoolList'] = $data['refundPresetPaytoolList'] ?? null;
        $this->container['refundSettlementId'] = $data['refundSettlementId'] ?? null;
        $this->container['refundVoucherDetailList'] = $data['refundVoucherDetailList'] ?? null;
        $this->container['sendBackFee'] = $data['sendBackFee'] ?? null;
        $this->container['storeName'] = $data['storeName'] ?? null;
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
     * Gets buyerLogonId
     *
     * @return string|null
     */
    public function getBuyerLogonId()
    {
        return $this->container['buyerLogonId'];
    }

    /**
     * Sets buyerLogonId
     *
     * @param string|null $buyerLogonId 用户的登录id
     *
     * @return self
     */
    public function setBuyerLogonId($buyerLogonId)
    {
        $this->container['buyerLogonId'] = $buyerLogonId;

        return $this;
    }

    /**
     * Gets buyerOpenId
     *
     * @return string|null
     */
    public function getBuyerOpenId()
    {
        return $this->container['buyerOpenId'];
    }

    /**
     * Sets buyerOpenId
     *
     * @param string|null $buyerOpenId 买家支付宝用户唯一标识
     *
     * @return self
     */
    public function setBuyerOpenId($buyerOpenId)
    {
        $this->container['buyerOpenId'] = $buyerOpenId;

        return $this;
    }

    /**
     * Gets buyerUserId
     *
     * @return string|null
     */
    public function getBuyerUserId()
    {
        return $this->container['buyerUserId'];
    }

    /**
     * Sets buyerUserId
     *
     * @param string|null $buyerUserId 买家在支付宝的用户id
     *
     * @return self
     */
    public function setBuyerUserId($buyerUserId)
    {
        $this->container['buyerUserId'] = $buyerUserId;

        return $this;
    }

    /**
     * Gets fundChange
     *
     * @return string|null
     */
    public function getFundChange()
    {
        return $this->container['fundChange'];
    }

    /**
     * Sets fundChange
     *
     * @param string|null $fundChange 本次退款是否发生了资金变化
     *
     * @return self
     */
    public function setFundChange($fundChange)
    {
        $this->container['fundChange'] = $fundChange;

        return $this;
    }

    /**
     * Gets gmtRefundPay
     *
     * @return string|null
     */
    public function getGmtRefundPay()
    {
        return $this->container['gmtRefundPay'];
    }

    /**
     * Sets gmtRefundPay
     *
     * @param string|null $gmtRefundPay 退款支付时间
     *
     * @return self
     */
    public function setGmtRefundPay($gmtRefundPay)
    {
        $this->container['gmtRefundPay'] = $gmtRefundPay;

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
     * @param string|null $hasDepositBack 是否有银行卡冲退，仅当query_options中传入deposit_back_info时返回
     *
     * @return self
     */
    public function setHasDepositBack($hasDepositBack)
    {
        $this->container['hasDepositBack'] = $hasDepositBack;

        return $this;
    }

    /**
     * Gets openId
     *
     * @return string|null
     */
    public function getOpenId()
    {
        return $this->container['openId'];
    }

    /**
     * Sets openId
     *
     * @param string|null $openId 买家支付宝用户号，该参数已废弃，请不要使用
     *
     * @return self
     */
    public function setOpenId($openId)
    {
        $this->container['openId'] = $openId;

        return $this;
    }

    /**
     * Gets outTradeNo
     *
     * @return string|null
     */
    public function getOutTradeNo()
    {
        return $this->container['outTradeNo'];
    }

    /**
     * Sets outTradeNo
     *
     * @param string|null $outTradeNo 商户订单号
     *
     * @return self
     */
    public function setOutTradeNo($outTradeNo)
    {
        $this->container['outTradeNo'] = $outTradeNo;

        return $this;
    }

    /**
     * Gets preAuthCancelFee
     *
     * @return string|null
     */
    public function getPreAuthCancelFee()
    {
        return $this->container['preAuthCancelFee'];
    }

    /**
     * Sets preAuthCancelFee
     *
     * @param string|null $preAuthCancelFee 当用户使用芝麻信用先享后付时，且当前的操作为预授权撤销动作时，会返回该字段，代表当前撤销的预授权金额，单位元。
     *
     * @return self
     */
    public function setPreAuthCancelFee($preAuthCancelFee)
    {
        $this->container['preAuthCancelFee'] = $preAuthCancelFee;

        return $this;
    }

    /**
     * Gets presentRefundBuyerAmount
     *
     * @return string|null
     */
    public function getPresentRefundBuyerAmount()
    {
        return $this->container['presentRefundBuyerAmount'];
    }

    /**
     * Sets presentRefundBuyerAmount
     *
     * @param string|null $presentRefundBuyerAmount 本次退款金额中买家退款金额;单位：元。 该字段默认不返回；
     *
     * @return self
     */
    public function setPresentRefundBuyerAmount($presentRefundBuyerAmount)
    {
        $this->container['presentRefundBuyerAmount'] = $presentRefundBuyerAmount;

        return $this;
    }

    /**
     * Gets presentRefundDiscountAmount
     *
     * @return string|null
     */
    public function getPresentRefundDiscountAmount()
    {
        return $this->container['presentRefundDiscountAmount'];
    }

    /**
     * Sets presentRefundDiscountAmount
     *
     * @param string|null $presentRefundDiscountAmount 本次退款金额中平台优惠退款金额；单位：元。 该字段默认不返回；
     *
     * @return self
     */
    public function setPresentRefundDiscountAmount($presentRefundDiscountAmount)
    {
        $this->container['presentRefundDiscountAmount'] = $presentRefundDiscountAmount;

        return $this;
    }

    /**
     * Gets presentRefundMdiscountAmount
     *
     * @return string|null
     */
    public function getPresentRefundMdiscountAmount()
    {
        return $this->container['presentRefundMdiscountAmount'];
    }

    /**
     * Sets presentRefundMdiscountAmount
     *
     * @param string|null $presentRefundMdiscountAmount 本次退款金额中商家优惠退款金额；单位：元。 该字段默认不返回；
     *
     * @return self
     */
    public function setPresentRefundMdiscountAmount($presentRefundMdiscountAmount)
    {
        $this->container['presentRefundMdiscountAmount'] = $presentRefundMdiscountAmount;

        return $this;
    }

    /**
     * Gets refundChargeAmount
     *
     * @return string|null
     */
    public function getRefundChargeAmount()
    {
        return $this->container['refundChargeAmount'];
    }

    /**
     * Sets refundChargeAmount
     *
     * @param string|null $refundChargeAmount 本次退款针对收款方的退收费金额；单位：元。 只在机构间联模式下返回，其它场景下不返回该字段；
     *
     * @return self
     */
    public function setRefundChargeAmount($refundChargeAmount)
    {
        $this->container['refundChargeAmount'] = $refundChargeAmount;

        return $this;
    }

    /**
     * Gets refundChargeInfoList
     *
     * @return \Alipay\OpenAPISDK\Model\RefundChargeInfo[]|null
     */
    public function getRefundChargeInfoList()
    {
        return $this->container['refundChargeInfoList'];
    }

    /**
     * Sets refundChargeInfoList
     *
     * @param \Alipay\OpenAPISDK\Model\RefundChargeInfo[]|null $refundChargeInfoList 退费信息
     *
     * @return self
     */
    public function setRefundChargeInfoList($refundChargeInfoList)
    {
        $this->container['refundChargeInfoList'] = $refundChargeInfoList;

        return $this;
    }

    /**
     * Gets refundCurrency
     *
     * @return string|null
     */
    public function getRefundCurrency()
    {
        return $this->container['refundCurrency'];
    }

    /**
     * Sets refundCurrency
     *
     * @param string|null $refundCurrency 退款币种信息
     *
     * @return self
     */
    public function setRefundCurrency($refundCurrency)
    {
        $this->container['refundCurrency'] = $refundCurrency;

        return $this;
    }

    /**
     * Gets refundDetailItemList
     *
     * @return \Alipay\OpenAPISDK\Model\TradeFundBill[]|null
     */
    public function getRefundDetailItemList()
    {
        return $this->container['refundDetailItemList'];
    }

    /**
     * Sets refundDetailItemList
     *
     * @param \Alipay\OpenAPISDK\Model\TradeFundBill[]|null $refundDetailItemList 退款使用的资金渠道。 只有在签约中指定需要返回资金明细，或者入参的query_options中指定时才返回该字段信息。
     *
     * @return self
     */
    public function setRefundDetailItemList($refundDetailItemList)
    {
        $this->container['refundDetailItemList'] = $refundDetailItemList;

        return $this;
    }

    /**
     * Gets refundFee
     *
     * @return string|null
     */
    public function getRefundFee()
    {
        return $this->container['refundFee'];
    }

    /**
     * Sets refundFee
     *
     * @param string|null $refundFee 退款总金额。单位：元。 指该笔交易累计已经退款成功的金额。
     *
     * @return self
     */
    public function setRefundFee($refundFee)
    {
        $this->container['refundFee'] = $refundFee;

        return $this;
    }

    /**
     * Gets refundHybAmount
     *
     * @return string|null
     */
    public function getRefundHybAmount()
    {
        return $this->container['refundHybAmount'];
    }

    /**
     * Sets refundHybAmount
     *
     * @param string|null $refundHybAmount 本次请求退惠营宝金额。单位：元。
     *
     * @return self
     */
    public function setRefundHybAmount($refundHybAmount)
    {
        $this->container['refundHybAmount'] = $refundHybAmount;

        return $this;
    }

    /**
     * Gets refundPresetPaytoolList
     *
     * @return \Alipay\OpenAPISDK\Model\PresetPayToolInfo|null
     */
    public function getRefundPresetPaytoolList()
    {
        return $this->container['refundPresetPaytoolList'];
    }

    /**
     * Sets refundPresetPaytoolList
     *
     * @param \Alipay\OpenAPISDK\Model\PresetPayToolInfo|null $refundPresetPaytoolList refundPresetPaytoolList
     *
     * @return self
     */
    public function setRefundPresetPaytoolList($refundPresetPaytoolList)
    {
        $this->container['refundPresetPaytoolList'] = $refundPresetPaytoolList;

        return $this;
    }

    /**
     * Gets refundSettlementId
     *
     * @return string|null
     */
    public function getRefundSettlementId()
    {
        return $this->container['refundSettlementId'];
    }

    /**
     * Sets refundSettlementId
     *
     * @param string|null $refundSettlementId 退款清算编号，用于清算对账使用； 只在机构间联模式下返回，其它场景下不返回该字段；
     *
     * @return self
     */
    public function setRefundSettlementId($refundSettlementId)
    {
        $this->container['refundSettlementId'] = $refundSettlementId;

        return $this;
    }

    /**
     * Gets refundVoucherDetailList
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherDetail[]|null
     */
    public function getRefundVoucherDetailList()
    {
        return $this->container['refundVoucherDetailList'];
    }

    /**
     * Sets refundVoucherDetailList
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherDetail[]|null $refundVoucherDetailList 本交易支付时使用的所有优惠券信息。 只有在query_options中指定了refund_voucher_detail_list时才返回该字段信息。
     *
     * @return self
     */
    public function setRefundVoucherDetailList($refundVoucherDetailList)
    {
        $this->container['refundVoucherDetailList'] = $refundVoucherDetailList;

        return $this;
    }

    /**
     * Gets sendBackFee
     *
     * @return string|null
     */
    public function getSendBackFee()
    {
        return $this->container['sendBackFee'];
    }

    /**
     * Sets sendBackFee
     *
     * @param string|null $sendBackFee 本次商户实际退回金额。单位：元。 说明：如需获取该值，需在入参query_options中传入 refund_detail_item_list。
     *
     * @return self
     */
    public function setSendBackFee($sendBackFee)
    {
        $this->container['sendBackFee'] = $sendBackFee;

        return $this;
    }

    /**
     * Gets storeName
     *
     * @return string|null
     */
    public function getStoreName()
    {
        return $this->container['storeName'];
    }

    /**
     * Sets storeName
     *
     * @param string|null $storeName 交易在支付时候的门店名称
     *
     * @return self
     */
    public function setStoreName($storeName)
    {
        $this->container['storeName'] = $storeName;

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
     * @param string|null $tradeNo 支付宝交易号
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


