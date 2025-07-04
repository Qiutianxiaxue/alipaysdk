<?php
/**
 * InvoiceSendOpenModel
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
 * InvoiceSendOpenModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InvoiceSendOpenModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InvoiceSendOpenModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'applyId' => 'string',
        'checkCode' => 'string',
        'checker' => 'string',
        'clerk' => 'string',
        'exTaxAmount' => 'string',
        'extendFields' => 'string',
        'fileDownloadType' => 'string',
        'fileDownloadUrl' => 'string',
        'financialElectronicType' => 'string',
        'invoiceCode' => 'string',
        'invoiceContent' => '\Alipay\OpenAPISDK\Model\InvoiceItemOpenModel[]',
        'invoiceDate' => 'string',
        'invoiceKind' => 'string',
        'invoiceMemo' => 'string',
        'invoiceNo' => 'string',
        'invoiceTitle' => '\Alipay\OpenAPISDK\Model\InvoiceTitleOpenModel',
        'invoiceType' => 'string',
        'openId' => 'string',
        'oriBlueInvCode' => 'string',
        'oriBlueInvNo' => 'string',
        'outInvoiceId' => 'string',
        'outTradeNo' => 'string',
        'payee' => 'string',
        'payeeAddressTel' => 'string',
        'payeeBankNameAccount' => 'string',
        'payeeRegisterName' => 'string',
        'payeeRegisterNo' => 'string',
        'sumAmount' => 'string',
        'taxAmount' => 'string',
        'tradeList' => '\Alipay\OpenAPISDK\Model\EinvTrade[]',
        'userId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'applyId' => null,
        'checkCode' => null,
        'checker' => null,
        'clerk' => null,
        'exTaxAmount' => null,
        'extendFields' => null,
        'fileDownloadType' => null,
        'fileDownloadUrl' => null,
        'financialElectronicType' => null,
        'invoiceCode' => null,
        'invoiceContent' => null,
        'invoiceDate' => null,
        'invoiceKind' => null,
        'invoiceMemo' => null,
        'invoiceNo' => null,
        'invoiceTitle' => null,
        'invoiceType' => null,
        'openId' => null,
        'oriBlueInvCode' => null,
        'oriBlueInvNo' => null,
        'outInvoiceId' => null,
        'outTradeNo' => null,
        'payee' => null,
        'payeeAddressTel' => null,
        'payeeBankNameAccount' => null,
        'payeeRegisterName' => null,
        'payeeRegisterNo' => null,
        'sumAmount' => null,
        'taxAmount' => null,
        'tradeList' => null,
        'userId' => null
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
        'applyId' => 'apply_id',
        'checkCode' => 'check_code',
        'checker' => 'checker',
        'clerk' => 'clerk',
        'exTaxAmount' => 'ex_tax_amount',
        'extendFields' => 'extend_fields',
        'fileDownloadType' => 'file_download_type',
        'fileDownloadUrl' => 'file_download_url',
        'financialElectronicType' => 'financial_electronic_type',
        'invoiceCode' => 'invoice_code',
        'invoiceContent' => 'invoice_content',
        'invoiceDate' => 'invoice_date',
        'invoiceKind' => 'invoice_kind',
        'invoiceMemo' => 'invoice_memo',
        'invoiceNo' => 'invoice_no',
        'invoiceTitle' => 'invoice_title',
        'invoiceType' => 'invoice_type',
        'openId' => 'open_id',
        'oriBlueInvCode' => 'ori_blue_inv_code',
        'oriBlueInvNo' => 'ori_blue_inv_no',
        'outInvoiceId' => 'out_invoice_id',
        'outTradeNo' => 'out_trade_no',
        'payee' => 'payee',
        'payeeAddressTel' => 'payee_address_tel',
        'payeeBankNameAccount' => 'payee_bank_name_account',
        'payeeRegisterName' => 'payee_register_name',
        'payeeRegisterNo' => 'payee_register_no',
        'sumAmount' => 'sum_amount',
        'taxAmount' => 'tax_amount',
        'tradeList' => 'trade_list',
        'userId' => 'user_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'applyId' => 'setApplyId',
        'checkCode' => 'setCheckCode',
        'checker' => 'setChecker',
        'clerk' => 'setClerk',
        'exTaxAmount' => 'setExTaxAmount',
        'extendFields' => 'setExtendFields',
        'fileDownloadType' => 'setFileDownloadType',
        'fileDownloadUrl' => 'setFileDownloadUrl',
        'financialElectronicType' => 'setFinancialElectronicType',
        'invoiceCode' => 'setInvoiceCode',
        'invoiceContent' => 'setInvoiceContent',
        'invoiceDate' => 'setInvoiceDate',
        'invoiceKind' => 'setInvoiceKind',
        'invoiceMemo' => 'setInvoiceMemo',
        'invoiceNo' => 'setInvoiceNo',
        'invoiceTitle' => 'setInvoiceTitle',
        'invoiceType' => 'setInvoiceType',
        'openId' => 'setOpenId',
        'oriBlueInvCode' => 'setOriBlueInvCode',
        'oriBlueInvNo' => 'setOriBlueInvNo',
        'outInvoiceId' => 'setOutInvoiceId',
        'outTradeNo' => 'setOutTradeNo',
        'payee' => 'setPayee',
        'payeeAddressTel' => 'setPayeeAddressTel',
        'payeeBankNameAccount' => 'setPayeeBankNameAccount',
        'payeeRegisterName' => 'setPayeeRegisterName',
        'payeeRegisterNo' => 'setPayeeRegisterNo',
        'sumAmount' => 'setSumAmount',
        'taxAmount' => 'setTaxAmount',
        'tradeList' => 'setTradeList',
        'userId' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'applyId' => 'getApplyId',
        'checkCode' => 'getCheckCode',
        'checker' => 'getChecker',
        'clerk' => 'getClerk',
        'exTaxAmount' => 'getExTaxAmount',
        'extendFields' => 'getExtendFields',
        'fileDownloadType' => 'getFileDownloadType',
        'fileDownloadUrl' => 'getFileDownloadUrl',
        'financialElectronicType' => 'getFinancialElectronicType',
        'invoiceCode' => 'getInvoiceCode',
        'invoiceContent' => 'getInvoiceContent',
        'invoiceDate' => 'getInvoiceDate',
        'invoiceKind' => 'getInvoiceKind',
        'invoiceMemo' => 'getInvoiceMemo',
        'invoiceNo' => 'getInvoiceNo',
        'invoiceTitle' => 'getInvoiceTitle',
        'invoiceType' => 'getInvoiceType',
        'openId' => 'getOpenId',
        'oriBlueInvCode' => 'getOriBlueInvCode',
        'oriBlueInvNo' => 'getOriBlueInvNo',
        'outInvoiceId' => 'getOutInvoiceId',
        'outTradeNo' => 'getOutTradeNo',
        'payee' => 'getPayee',
        'payeeAddressTel' => 'getPayeeAddressTel',
        'payeeBankNameAccount' => 'getPayeeBankNameAccount',
        'payeeRegisterName' => 'getPayeeRegisterName',
        'payeeRegisterNo' => 'getPayeeRegisterNo',
        'sumAmount' => 'getSumAmount',
        'taxAmount' => 'getTaxAmount',
        'tradeList' => 'getTradeList',
        'userId' => 'getUserId'
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
        $this->container['applyId'] = $data['applyId'] ?? null;
        $this->container['checkCode'] = $data['checkCode'] ?? null;
        $this->container['checker'] = $data['checker'] ?? null;
        $this->container['clerk'] = $data['clerk'] ?? null;
        $this->container['exTaxAmount'] = $data['exTaxAmount'] ?? null;
        $this->container['extendFields'] = $data['extendFields'] ?? null;
        $this->container['fileDownloadType'] = $data['fileDownloadType'] ?? null;
        $this->container['fileDownloadUrl'] = $data['fileDownloadUrl'] ?? null;
        $this->container['financialElectronicType'] = $data['financialElectronicType'] ?? null;
        $this->container['invoiceCode'] = $data['invoiceCode'] ?? null;
        $this->container['invoiceContent'] = $data['invoiceContent'] ?? null;
        $this->container['invoiceDate'] = $data['invoiceDate'] ?? null;
        $this->container['invoiceKind'] = $data['invoiceKind'] ?? null;
        $this->container['invoiceMemo'] = $data['invoiceMemo'] ?? null;
        $this->container['invoiceNo'] = $data['invoiceNo'] ?? null;
        $this->container['invoiceTitle'] = $data['invoiceTitle'] ?? null;
        $this->container['invoiceType'] = $data['invoiceType'] ?? null;
        $this->container['openId'] = $data['openId'] ?? null;
        $this->container['oriBlueInvCode'] = $data['oriBlueInvCode'] ?? null;
        $this->container['oriBlueInvNo'] = $data['oriBlueInvNo'] ?? null;
        $this->container['outInvoiceId'] = $data['outInvoiceId'] ?? null;
        $this->container['outTradeNo'] = $data['outTradeNo'] ?? null;
        $this->container['payee'] = $data['payee'] ?? null;
        $this->container['payeeAddressTel'] = $data['payeeAddressTel'] ?? null;
        $this->container['payeeBankNameAccount'] = $data['payeeBankNameAccount'] ?? null;
        $this->container['payeeRegisterName'] = $data['payeeRegisterName'] ?? null;
        $this->container['payeeRegisterNo'] = $data['payeeRegisterNo'] ?? null;
        $this->container['sumAmount'] = $data['sumAmount'] ?? null;
        $this->container['taxAmount'] = $data['taxAmount'] ?? null;
        $this->container['tradeList'] = $data['tradeList'] ?? null;
        $this->container['userId'] = $data['userId'] ?? null;
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
     * Gets applyId
     *
     * @return string|null
     */
    public function getApplyId()
    {
        return $this->container['applyId'];
    }

    /**
     * Sets applyId
     *
     * @param string|null $applyId 支付宝端的申请id。如果在开票过程中，是通过支付宝提交的申请到机构端，支付宝会带上开票申请在支付宝生成的申请id，机构在回传发票的时候只需要回传这个申请id，不用获取用户的uid，支付宝可以根据申请id将发票归集到对应的用户名下
     *
     * @return self
     */
    public function setApplyId($applyId)
    {
        $this->container['applyId'] = $applyId;

        return $this;
    }

    /**
     * Gets checkCode
     *
     * @return string|null
     */
    public function getCheckCode()
    {
        return $this->container['checkCode'];
    }

    /**
     * Sets checkCode
     *
     * @param string|null $checkCode 票面上的校验码信息。
     *
     * @return self
     */
    public function setCheckCode($checkCode)
    {
        $this->container['checkCode'] = $checkCode;

        return $this;
    }

    /**
     * Gets checker
     *
     * @return string|null
     */
    public function getChecker()
    {
        return $this->container['checker'];
    }

    /**
     * Sets checker
     *
     * @param string|null $checker 票面上复核人信息。
     *
     * @return self
     */
    public function setChecker($checker)
    {
        $this->container['checker'] = $checker;

        return $this;
    }

    /**
     * Gets clerk
     *
     * @return string|null
     */
    public function getClerk()
    {
        return $this->container['clerk'];
    }

    /**
     * Sets clerk
     *
     * @param string|null $clerk 票面上开票员信息。
     *
     * @return self
     */
    public function setClerk($clerk)
    {
        $this->container['clerk'] = $clerk;

        return $this;
    }

    /**
     * Gets exTaxAmount
     *
     * @return string|null
     */
    public function getExTaxAmount()
    {
        return $this->container['exTaxAmount'];
    }

    /**
     * Sets exTaxAmount
     *
     * @param string|null $exTaxAmount 不含税金额，票面上的不含税金额，单位（元），保留两位小数。
     *
     * @return self
     */
    public function setExTaxAmount($exTaxAmount)
    {
        $this->container['exTaxAmount'] = $exTaxAmount;

        return $this;
    }

    /**
     * Gets extendFields
     *
     * @return string|null
     */
    public function getExtendFields()
    {
        return $this->container['extendFields'];
    }

    /**
     * Sets extendFields
     *
     * @param string|null $extendFields 预留的扩展字段，格式如：key1=value1\\nkey2=value2\\nkey3=value3，字段之间以\\n分隔。
     *
     * @return self
     */
    public function setExtendFields($extendFields)
    {
        $this->container['extendFields'] = $extendFields;

        return $this;
    }

    /**
     * Gets fileDownloadType
     *
     * @return string|null
     */
    public function getFileDownloadType()
    {
        return $this->container['fileDownloadType'];
    }

    /**
     * Sets fileDownloadType
     *
     * @param string|null $fileDownloadType 下载版式文件类型，需要回传文件下载链接的情况下必传
     *
     * @return self
     */
    public function setFileDownloadType($fileDownloadType)
    {
        $this->container['fileDownloadType'] = $fileDownloadType;

        return $this;
    }

    /**
     * Gets fileDownloadUrl
     *
     * @return string|null
     */
    public function getFileDownloadUrl()
    {
        return $this->container['fileDownloadUrl'];
    }

    /**
     * Sets fileDownloadUrl
     *
     * @param string|null $fileDownloadUrl 发票版式文件下载地址。
     *
     * @return self
     */
    public function setFileDownloadUrl($fileDownloadUrl)
    {
        $this->container['fileDownloadUrl'] = $fileDownloadUrl;

        return $this;
    }

    /**
     * Gets financialElectronicType
     *
     * @return string|null
     */
    public function getFinancialElectronicType()
    {
        return $this->container['financialElectronicType'];
    }

    /**
     * Sets financialElectronicType
     *
     * @param string|null $financialElectronicType 财政电子票据子类型
     *
     * @return self
     */
    public function setFinancialElectronicType($financialElectronicType)
    {
        $this->container['financialElectronicType'] = $financialElectronicType;

        return $this;
    }

    /**
     * Gets invoiceCode
     *
     * @return string|null
     */
    public function getInvoiceCode()
    {
        return $this->container['invoiceCode'];
    }

    /**
     * Sets invoiceCode
     *
     * @param string|null $invoiceCode 发票代码，该字段与invoice_no构成一张发票的唯一标识。
     *
     * @return self
     */
    public function setInvoiceCode($invoiceCode)
    {
        $this->container['invoiceCode'] = $invoiceCode;

        return $this;
    }

    /**
     * Gets invoiceContent
     *
     * @return \Alipay\OpenAPISDK\Model\InvoiceItemOpenModel[]|null
     */
    public function getInvoiceContent()
    {
        return $this->container['invoiceContent'];
    }

    /**
     * Sets invoiceContent
     *
     * @param \Alipay\OpenAPISDK\Model\InvoiceItemOpenModel[]|null $invoiceContent 发票明细项。
     *
     * @return self
     */
    public function setInvoiceContent($invoiceContent)
    {
        $this->container['invoiceContent'] = $invoiceContent;

        return $this;
    }

    /**
     * Gets invoiceDate
     *
     * @return string|null
     */
    public function getInvoiceDate()
    {
        return $this->container['invoiceDate'];
    }

    /**
     * Sets invoiceDate
     *
     * @param string|null $invoiceDate 开票日期，格式如：YYYY-MM-DD。
     *
     * @return self
     */
    public function setInvoiceDate($invoiceDate)
    {
        $this->container['invoiceDate'] = $invoiceDate;

        return $this;
    }

    /**
     * Gets invoiceKind
     *
     * @return string|null
     */
    public function getInvoiceKind()
    {
        return $this->container['invoiceKind'];
    }

    /**
     * Sets invoiceKind
     *
     * @param string|null $invoiceKind 标识发票的类型， PLAIN:增值税电子普通发票; SPECIAL:增值税专用发票; ALL_ELECTRONIC_GENERAL:电子发票（普通发票）; ALL_ELECTRONIC_SPECIAL:电子发票（增值税专用发票）; PLAIN_INVOICE:增值税普通发票; FINANCIAL_ELECTRONIC_BILL:财政电子票据;
     *
     * @return self
     */
    public function setInvoiceKind($invoiceKind)
    {
        $this->container['invoiceKind'] = $invoiceKind;

        return $this;
    }

    /**
     * Gets invoiceMemo
     *
     * @return string|null
     */
    public function getInvoiceMemo()
    {
        return $this->container['invoiceMemo'];
    }

    /**
     * Sets invoiceMemo
     *
     * @param string|null $invoiceMemo 票面上备注信息。
     *
     * @return self
     */
    public function setInvoiceMemo($invoiceMemo)
    {
        $this->container['invoiceMemo'] = $invoiceMemo;

        return $this;
    }

    /**
     * Gets invoiceNo
     *
     * @return string|null
     */
    public function getInvoiceNo()
    {
        return $this->container['invoiceNo'];
    }

    /**
     * Sets invoiceNo
     *
     * @param string|null $invoiceNo 发票号码，该字段与invoice_code构成一张发票的唯一标识。
     *
     * @return self
     */
    public function setInvoiceNo($invoiceNo)
    {
        $this->container['invoiceNo'] = $invoiceNo;

        return $this;
    }

    /**
     * Gets invoiceTitle
     *
     * @return \Alipay\OpenAPISDK\Model\InvoiceTitleOpenModel|null
     */
    public function getInvoiceTitle()
    {
        return $this->container['invoiceTitle'];
    }

    /**
     * Sets invoiceTitle
     *
     * @param \Alipay\OpenAPISDK\Model\InvoiceTitleOpenModel|null $invoiceTitle invoiceTitle
     *
     * @return self
     */
    public function setInvoiceTitle($invoiceTitle)
    {
        $this->container['invoiceTitle'] = $invoiceTitle;

        return $this;
    }

    /**
     * Gets invoiceType
     *
     * @return string|null
     */
    public function getInvoiceType()
    {
        return $this->container['invoiceType'];
    }

    /**
     * Sets invoiceType
     *
     * @param string|null $invoiceType 标识是红票还是蓝票，RED:红票;BLUE:蓝票。
     *
     * @return self
     */
    public function setInvoiceType($invoiceType)
    {
        $this->container['invoiceType'] = $invoiceType;

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
     * @param string|null $openId 支付宝用户userId，当发送红字发票时，即invoice_type＝RED时，可选填；或者apply_id不为空的时候，可选填；其他情况必填。
     *
     * @return self
     */
    public function setOpenId($openId)
    {
        $this->container['openId'] = $openId;

        return $this;
    }

    /**
     * Gets oriBlueInvCode
     *
     * @return string|null
     */
    public function getOriBlueInvCode()
    {
        return $this->container['oriBlueInvCode'];
    }

    /**
     * Sets oriBlueInvCode
     *
     * @param string|null $oriBlueInvCode 红票情况下，必须填入原始蓝票的发票代码（全电票时为空）。
     *
     * @return self
     */
    public function setOriBlueInvCode($oriBlueInvCode)
    {
        $this->container['oriBlueInvCode'] = $oriBlueInvCode;

        return $this;
    }

    /**
     * Gets oriBlueInvNo
     *
     * @return string|null
     */
    public function getOriBlueInvNo()
    {
        return $this->container['oriBlueInvNo'];
    }

    /**
     * Sets oriBlueInvNo
     *
     * @param string|null $oriBlueInvNo 红票情况下，必须填入原始蓝票的发票号码。
     *
     * @return self
     */
    public function setOriBlueInvNo($oriBlueInvNo)
    {
        $this->container['oriBlueInvNo'] = $oriBlueInvNo;

        return $this;
    }

    /**
     * Gets outInvoiceId
     *
     * @return string|null
     */
    public function getOutInvoiceId()
    {
        return $this->container['outInvoiceId'];
    }

    /**
     * Sets outInvoiceId
     *
     * @param string|null $outInvoiceId 外部发票id，isv生成发票之后所生成的发票流水号，主要用做存储。
     *
     * @return self
     */
    public function setOutInvoiceId($outInvoiceId)
    {
        $this->container['outInvoiceId'] = $outInvoiceId;

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
     * @param string|null $outTradeNo 该发票基于的实际交易流水号。
     *
     * @return self
     */
    public function setOutTradeNo($outTradeNo)
    {
        $this->container['outTradeNo'] = $outTradeNo;

        return $this;
    }

    /**
     * Gets payee
     *
     * @return string|null
     */
    public function getPayee()
    {
        return $this->container['payee'];
    }

    /**
     * Sets payee
     *
     * @param string|null $payee 票面上收款人信息。
     *
     * @return self
     */
    public function setPayee($payee)
    {
        $this->container['payee'] = $payee;

        return $this;
    }

    /**
     * Gets payeeAddressTel
     *
     * @return string|null
     */
    public function getPayeeAddressTel()
    {
        return $this->container['payeeAddressTel'];
    }

    /**
     * Sets payeeAddressTel
     *
     * @param string|null $payeeAddressTel 票面上销售方地址、电话信息。
     *
     * @return self
     */
    public function setPayeeAddressTel($payeeAddressTel)
    {
        $this->container['payeeAddressTel'] = $payeeAddressTel;

        return $this;
    }

    /**
     * Gets payeeBankNameAccount
     *
     * @return string|null
     */
    public function getPayeeBankNameAccount()
    {
        return $this->container['payeeBankNameAccount'];
    }

    /**
     * Sets payeeBankNameAccount
     *
     * @param string|null $payeeBankNameAccount 票面上销售方开户行及账号。
     *
     * @return self
     */
    public function setPayeeBankNameAccount($payeeBankNameAccount)
    {
        $this->container['payeeBankNameAccount'] = $payeeBankNameAccount;

        return $this;
    }

    /**
     * Gets payeeRegisterName
     *
     * @return string|null
     */
    public function getPayeeRegisterName()
    {
        return $this->container['payeeRegisterName'];
    }

    /**
     * Sets payeeRegisterName
     *
     * @param string|null $payeeRegisterName 票面上销售方企业名称。
     *
     * @return self
     */
    public function setPayeeRegisterName($payeeRegisterName)
    {
        $this->container['payeeRegisterName'] = $payeeRegisterName;

        return $this;
    }

    /**
     * Gets payeeRegisterNo
     *
     * @return string|null
     */
    public function getPayeeRegisterNo()
    {
        return $this->container['payeeRegisterNo'];
    }

    /**
     * Sets payeeRegisterNo
     *
     * @param string|null $payeeRegisterNo 票面上销售方税号信息。
     *
     * @return self
     */
    public function setPayeeRegisterNo($payeeRegisterNo)
    {
        $this->container['payeeRegisterNo'] = $payeeRegisterNo;

        return $this;
    }

    /**
     * Gets sumAmount
     *
     * @return string|null
     */
    public function getSumAmount()
    {
        return $this->container['sumAmount'];
    }

    /**
     * Sets sumAmount
     *
     * @param string|null $sumAmount 价税合计，票面上的总开票金额，单位（元），保留两位小数，sum_amount=ex_tax_amount+tax_amount。
     *
     * @return self
     */
    public function setSumAmount($sumAmount)
    {
        $this->container['sumAmount'] = $sumAmount;

        return $this;
    }

    /**
     * Gets taxAmount
     *
     * @return string|null
     */
    public function getTaxAmount()
    {
        return $this->container['taxAmount'];
    }

    /**
     * Sets taxAmount
     *
     * @param string|null $taxAmount 合计税额，票面上的合计税额，单位（元），保留两位小数。
     *
     * @return self
     */
    public function setTaxAmount($taxAmount)
    {
        $this->container['taxAmount'] = $taxAmount;

        return $this;
    }

    /**
     * Gets tradeList
     *
     * @return \Alipay\OpenAPISDK\Model\EinvTrade[]|null
     */
    public function getTradeList()
    {
        return $this->container['tradeList'];
    }

    /**
     * Sets tradeList
     *
     * @param \Alipay\OpenAPISDK\Model\EinvTrade[]|null $tradeList 交易内容，非必填但是不可以传空值，如果无需回传trade_list则不需要传该对象
     *
     * @return self
     */
    public function setTradeList($tradeList)
    {
        $this->container['tradeList'] = $tradeList;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param string|null $userId 支付宝用户userId，当发送红字发票时，即invoice_type＝RED时，可选填；或者apply_id不为空的时候，可选填；其他情况必填。
     *
     * @return self
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

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


