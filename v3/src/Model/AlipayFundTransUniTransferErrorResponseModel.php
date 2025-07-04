<?php
/**
 * AlipayFundTransUniTransferErrorResponseModel
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
 * AlipayFundTransUniTransferErrorResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayFundTransUniTransferErrorResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayFundTransUniTransferErrorResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'code' => 'string',
        'links' => 'string',
        'message' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'code' => null,
        'links' => null,
        'message' => null
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
        'code' => 'code',
        'links' => 'links',
        'message' => 'message'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'links' => 'setLinks',
        'message' => 'setMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'links' => 'getLinks',
        'message' => 'getMessage'
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

    public const CODE_INVALID_PARAMETER = 'INVALID_PARAMETER';
    public const CODE_SYSTEM_ERROR = 'SYSTEM_ERROR';
    public const CODE_EXCEED_LIMIT_SM_AMOUNT = 'EXCEED_LIMIT_SM_AMOUNT';
    public const CODE_EXCEED_LIMIT_MM_AMOUNT = 'EXCEED_LIMIT_MM_AMOUNT';
    public const CODE_PAYCARD_UNABLE_PAYMENT = 'PAYCARD_UNABLE_PAYMENT';
    public const CODE_PAYER_STATUS_ERROR = 'PAYER_STATUS_ERROR';
    public const CODE_PAYER_CERTIFY_CHECK_FAIL = 'PAYER_CERTIFY_CHECK_FAIL';
    public const CODE_PAYER_BALANCE_NOT_ENOUGH = 'PAYER_BALANCE_NOT_ENOUGH';
    public const CODE_PAYER_USER_INFO_ERROR = 'PAYER_USER_INFO_ERROR';
    public const CODE_PAYMENT_INFO_INCONSISTENCY = 'PAYMENT_INFO_INCONSISTENCY';
    public const CODE_CARD_BIN_ERROR = 'CARD_BIN_ERROR';
    public const CODE_PAYEE_CARD_INFO_ERROR = 'PAYEE_CARD_INFO_ERROR';
    public const CODE_INST_PAY_UNABLE = 'INST_PAY_UNABLE';
    public const CODE_MEMO_REQUIRED_IN_TRANSFER_ERROR = 'MEMO_REQUIRED_IN_TRANSFER_ERROR';
    public const CODE_PERMIT_CHECK_PERM_IDENTITY_THEFT = 'PERMIT_CHECK_PERM_IDENTITY_THEFT';
    public const CODE_REMARK_HAS_SENSITIVE_WORD = 'REMARK_HAS_SENSITIVE_WORD';
    public const CODE_EXCEED_LIMIT_DM_AMOUNT = 'EXCEED_LIMIT_DM_AMOUNT';
    public const CODE_NO_ACCOUNT_RECEIVE_PERMISSION = 'NO_ACCOUNT_RECEIVE_PERMISSION';
    public const CODE_BALANCE_IS_NOT_ENOUGH = 'BALANCE_IS_NOT_ENOUGH';
    public const CODE_NO_ACCOUNT_PAYMENT_PERMISSION = 'NO_ACCOUNT_PAYMENT_PERMISSION';
    public const CODE_PAYER_NOT_EXIST = 'PAYER_NOT_EXIST';
    public const CODE_PRODUCT_NOT_SIGN = 'PRODUCT_NOT_SIGN';
    public const CODE_PAYMENT_TIME_EXPIRE = 'PAYMENT_TIME_EXPIRE';
    public const CODE_PAYEE_NOT_EXIST = 'PAYEE_NOT_EXIST';
    public const CODE_PAYEE_ACCOUNT_STATUS_ERROR = 'PAYEE_ACCOUNT_STATUS_ERROR';
    public const CODE_PERMIT_NON_BANK_LIMIT_PAYEE = 'PERMIT_NON_BANK_LIMIT_PAYEE';
    public const CODE_PAYEE_TRUSTEESHIP_ACC_OVER_LIMIT = 'PAYEE_TRUSTEESHIP_ACC_OVER_LIMIT';
    public const CODE_NO_PERMISSION_ACCOUNT = 'NO_PERMISSION_ACCOUNT';
    public const CODE_TRUSTEESHIP_ACCOUNT_NOT_EXIST = 'TRUSTEESHIP_ACCOUNT_NOT_EXIST';
    public const CODE_PAYEE_ACCOUNT_NOT_EXSIT = 'PAYEE_ACCOUNT_NOT_EXSIT';
    public const CODE_ORDER_NOT_EXIST = 'ORDER_NOT_EXIST';
    public const CODE_PAYEE_USERINFO_STATUS_ERROR = 'PAYEE_USERINFO_STATUS_ERROR';
    public const CODE_PAYMENT_MONEY_NOT_ENOUGH = 'PAYMENT_MONEY_NOT_ENOUGH';
    public const CODE_TRUSTEESHIP_RECIEVE_QUOTA_LIMIT = 'TRUSTEESHIP_RECIEVE_QUOTA_LIMIT';
    public const CODE_SECURITY_CHECK_FAILED = 'SECURITY_CHECK_FAILED';
    public const CODE_NO_ORDER_PERMISSION = 'NO_ORDER_PERMISSION';
    public const CODE_ORDER_STATUS_INVALID = 'ORDER_STATUS_INVALID';
    public const CODE_PERM_AML_NOT_REALNAME_REV = 'PERM_AML_NOT_REALNAME_REV';
    public const CODE_USER_AGREEMENT_VERIFY_FAIL = 'USER_AGREEMENT_VERIFY_FAIL';
    public const CODE_PAYER_NOT_EQUAL_PAYEE_ERROR = 'PAYER_NOT_EQUAL_PAYEE_ERROR';
    public const CODE_EXCEED_LIMIT_DC_RECEIVED = 'EXCEED_LIMIT_DC_RECEIVED';
    public const CODE_PAYER_PERMLIMIT_CHECK_FAILURE = 'PAYER_PERMLIMIT_CHECK_FAILURE';
    public const CODE_PAYEE_ACC_OCUPIED = 'PAYEE_ACC_OCUPIED';
    public const CODE_PAYER_PAYEE_CANNOT_SAME = 'PAYER_PAYEE_CANNOT_SAME';
    public const CODE_PERMIT_CHECK_PERM_LIMITED = 'PERMIT_CHECK_PERM_LIMITED';
    public const CODE_RESOURCE_LIMIT_EXCEED = 'RESOURCE_LIMIT_EXCEED';
    public const CODE_INVALID_PAYER_ACCOUNT = 'INVALID_PAYER_ACCOUNT';
    public const CODE_EXCEED_LIMIT_DM_MAX_AMOUNT = 'EXCEED_LIMIT_DM_MAX_AMOUNT';
    public const CODE_EXCEED_LIMIT_PERSONAL_SM_AMOUNT = 'EXCEED_LIMIT_PERSONAL_SM_AMOUNT';
    public const CODE_EXCEED_LIMIT_UNRN_DM_AMOUNT = 'EXCEED_LIMIT_UNRN_DM_AMOUNT';
    public const CODE_INVALID_CARDNO = 'INVALID_CARDNO';
    public const CODE_RELEASE_USER_FORBBIDEN_RECIEVE = 'RELEASE_USER_FORBBIDEN_RECIEVE';
    public const CODE_PAYEE_USER_TYPE_ERROR = 'PAYEE_USER_TYPE_ERROR';
    public const CODE_EXCEED_LIMIT_SM_MIN_AMOUNT = 'EXCEED_LIMIT_SM_MIN_AMOUNT';
    public const CODE_PERMIT_CHECK_RECEIVE_LIMIT = 'PERMIT_CHECK_RECEIVE_LIMIT';
    public const CODE_NOT_IN_WHITE_LIST = 'NOT_IN_WHITE_LIST';
    public const CODE_MONEY_PAY_CLOSED = 'MONEY_PAY_CLOSED';
    public const CODE_NO_AVAILABLE_PAYMENT_TOOLS = 'NO_AVAILABLE_PAYMENT_TOOLS';
    public const CODE_PAYEE_NOT_RELNAME_CERTIFY = 'PAYEE_NOT_RELNAME_CERTIFY';
    public const CODE_OVERSEA_TRANSFER_CLOSE = 'OVERSEA_TRANSFER_CLOSE';
    public const CODE_PAYMENT_FAIL = 'PAYMENT_FAIL';
    public const CODE_ALREADY_WITHDRAW_STD_RED_PACKET = 'ALREADY_WITHDRAW_STD_RED_PACKET';
    public const CODE_BLOCK_USER_FORBBIDEN_RECIEVE = 'BLOCK_USER_FORBBIDEN_RECIEVE';
    public const CODE_REQUEST_PROCESSING = 'REQUEST_PROCESSING';
    public const CODE_USER_NOT_EXIST = 'USER_NOT_EXIST';
    public const CODE_PARAM_ILLEGAL = 'PARAM_ILLEGAL';
    public const CODE_PROCESS_FAIL = 'PROCESS_FAIL';
    public const CODE_CURRENCY_NOT_SUPPORT = 'CURRENCY_NOT_SUPPORT';
    public const CODE_PAYER_REQUESTER_RELATION_INVALID = 'PAYER_REQUESTER_RELATION_INVALID';
    public const CODE_AUTHOREE_IS_NOT_MATCH = 'AUTHOREE_IS_NOT_MATCH';
    public const CODE_NO_ACCOUNT_USER_FORBBIDEN_RECIEVE = 'NO_ACCOUNT_USER_FORBBIDEN_RECIEVE';
    public const CODE_SIGN_INVALID = 'SIGN_INVALID';
    public const CODE_SIGN_INVOKE_PID_INCONSISTENT = 'SIGN_INVOKE_PID_INCONSISTENT';
    public const CODE_SIGN_QUERY_APP_INFO_ERROR = 'SIGN_QUERY_APP_INFO_ERROR';
    public const CODE_SIGN_QUERY_AGGREMENT_ERROR = 'SIGN_QUERY_AGGREMENT_ERROR';
    public const CODE_SIGN_AGREEMENT_NO_INCONSISTENT = 'SIGN_AGREEMENT_NO_INCONSISTENT';
    public const CODE_SIGN_PARAM_INVALID = 'SIGN_PARAM_INVALID';
    public const CODE_SIGN_NOT_ALLOW_SKIP = 'SIGN_NOT_ALLOW_SKIP';
    public const CODE_EXCEED_LIMIT_ENT_SM_AMOUNT = 'EXCEED_LIMIT_ENT_SM_AMOUNT';
    public const CODE_ISV_AUTH_ERROR = 'ISV_AUTH_ERROR';
    public const CODE_PAYER_USERINFO_NOT_EXSIT = 'PAYER_USERINFO_NOT_EXSIT';
    public const CODE_BLOCK_USER_FORBBIDEN_SEND = 'BLOCK_USER_FORBBIDEN_SEND';
    public const CODE_BANK_RESPONSE_ERROR = 'BANK_RESPONSE_ERROR';
    public const CODE_BIZ_UNIQUE_EXCEPTION = 'BIZ_UNIQUE_EXCEPTION';
    public const CODE_NO_ACCOUNTBOOK_PERMISSION = 'NO_ACCOUNTBOOK_PERMISSION';
    public const CODE_PERMIT_CHECK_PERM_AML_CERT_EXPIRED = 'PERMIT_CHECK_PERM_AML_CERT_EXPIRED';
    public const CODE_MRCHPROD_QUERY_ERROR = 'MRCHPROD_QUERY_ERROR';
    public const CODE_PERMIT_PAYER_FORBIDDEN = 'PERMIT_PAYER_FORBIDDEN';
    public const CODE_IDENTITY_FUND_RELATION_NOT_FOUND = 'IDENTITY_FUND_RELATION_NOT_FOUND';
    public const CODE_INST_PAY_REMARK_UNVALID_CHARS = 'INST_PAY_REMARK_UNVALID_CHARS';
    public const CODE_PERMIT_LIMIT_PAYEE = 'PERMIT_LIMIT_PAYEE';
    public const CODE_INVALID_TAX_BILL_AGREEMENT = 'INVALID_TAX_BILL_AGREEMENT';
    public const CODE_PAY_SALARY_MODE_NOT_SUPPORT = 'PAY_SALARY_MODE_NOT_SUPPORT';
    public const CODE_CONTRACTOR_ACCOUNT_BOOK_NOT_FUND = 'CONTRACTOR_ACCOUNT_BOOK_NOT_FUND';
    public const CODE_BANKCODE_OR_BRANCHNAME_INFO_ERROR = 'BANKCODE_OR_BRANCHNAME_INFO_ERROR';
    public const CODE_PAYEE_OUT_PERMLIMIT_CHECK_FAILURE = 'PAYEE_OUT_PERMLIMIT_CHECK_FAILURE';
    public const CODE_MID_ACCOUNT_STATUS_ERROR = 'MID_ACCOUNT_STATUS_ERROR';
    public const CODE_MID_ACCOUNT_TYPE_ERROR = 'MID_ACCOUNT_TYPE_ERROR';
    public const CODE_PAYEE_MID_CANNOT_SAME = 'PAYEE_MID_CANNOT_SAME';
    public const CODE_PAYER_MID_CANNOT_SAME = 'PAYER_MID_CANNOT_SAME';
    public const CODE_MID_ACCOUNT_CHECK_ERROR = 'MID_ACCOUNT_CHECK_ERROR';
    public const CODE_PERM_PAY_USER_DAILY_QUOTA_ORG_BALANCE_LIMIT = 'PERM_PAY_USER_DAILY_QUOTA_ORG_BALANCE_LIMIT';
    public const CODE_PERM_PAY_USER_MONTH_QUOTA_ORG_BALANCE_LIMIT = 'PERM_PAY_USER_MONTH_QUOTA_ORG_BALANCE_LIMIT';
    public const CODE_PERM_PAY_CUSTOMER_DAILY_QUOTA_ORG_BALANCE_LIMIT = 'PERM_PAY_CUSTOMER_DAILY_QUOTA_ORG_BALANCE_LIMIT';
    public const CODE_PERM_PAY_CUSTOMER_MONTH_QUOTA_ORG_BALANCE_LIMIT = 'PERM_PAY_CUSTOMER_MONTH_QUOTA_ORG_BALANCE_LIMIT';
    public const CODE_NOT_SUPPORT_PAYER_ACCOUNT_TYPE = 'NOT_SUPPORT_PAYER_ACCOUNT_TYPE';
    public const CODE_EXCEED_LIMIT_MM_MAX_AMOUNT = 'EXCEED_LIMIT_MM_MAX_AMOUNT';
    public const CODE_REP_INCONSISTENT = 'REP_INCONSISTENT';
    public const CODE_ILLEGAL_OPERATION = 'ILLEGAL_OPERATION';
    public const CODE_PERM_RECEIVE_CUSTOMER_ALMS_LIMIT = 'PERM_RECEIVE_CUSTOMER_ALMS_LIMIT';
    public const CODE_PAYEE_IDENTITY_NOT_MATCH = 'PAYEE_IDENTITY_NOT_MATCH';
    public const CODE_FLEXIBLE_STAFFING_RISK_CONSULT_UNSIGNED_MERCHANT = 'FLEXIBLE_STAFFING_RISK_CONSULT_UNSIGNED_MERCHANT';
    public const CODE_FLEXIBLE_STAFFING_RISK_CONSULT_UNAUTHORIZED_CONSULT = 'FLEXIBLE_STAFFING_RISK_CONSULT_UNAUTHORIZED_CONSULT';
    public const CODE_FLEXIBLE_STAFFING_RISK_CONSULT_USER_NOT_EXIST = 'FLEXIBLE_STAFFING_RISK_CONSULT_USER_NOT_EXIST';
    public const CODE_FLEXIBLE_STAFFING_RISK_CONSULT_RISK_RECEIVER = 'FLEXIBLE_STAFFING_RISK_CONSULT_RISK_RECEIVER';
    public const CODE_PAYEE_USERINFO_ERROR = 'PAYEE_USERINFO_ERROR';
    public const CODE_FLEXIBLE_STAFFING_HIGH_RISK_RECEIVER = 'FLEXIBLE_STAFFING_HIGH_RISK_RECEIVER';
    public const CODE_FLEXIBLE_STAFFING_POTENTIAL_RISK_RECEIVER = 'FLEXIBLE_STAFFING_POTENTIAL_RISK_RECEIVER';
    public const CODE_PAYER_ACCOUNT_BOOK_INFO_EXCEPTION = 'PAYER_ACCOUNT_BOOK_INFO_EXCEPTION';
    public const CODE_RECEIVER_ACCOUNT_BOOK_INFO_EXCEPTION = 'RECEIVER_ACCOUNT_BOOK_INFO_EXCEPTION';
    public const CODE_ACCOUNT_BOOK_SCENE_CODE_EXCEPTION = 'ACCOUNT_BOOK_SCENE_CODE_EXCEPTION';
    public const CODE_TRUSTEESHIP_ACCOUNT_STATUS_ERROR = 'TRUSTEESHIP_ACCOUNT_STATUS_ERROR';
    public const CODE_PAYER_NOT_EQUAL_PAYEE_FOR_BIZ_SCENE_REQUIRED = 'PAYER_NOT_EQUAL_PAYEE_FOR_BIZ_SCENE_REQUIRED';
    public const CODE_PERMIT_PAYER_LEVEL_FORBIDDEN = 'PERMIT_PAYER_LEVEL_FORBIDDEN';
    public const CODE_FLEXIBLE_STAFFING_UN_KNOWN_RISK_RECEIVER = 'FLEXIBLE_STAFFING_UN_KNOWN_RISK_RECEIVER';
    public const CODE_JUDICIAL_FREEZE = 'JUDICIAL_FREEZE';
    public const CODE_TRANS_AMOUNT_NOT_IN_PRIZE_LIMIT = 'TRANS_AMOUNT_NOT_IN_PRIZE_LIMIT';
    public const CODE_PROMO_CAMP_RELATION_CONFIG_MISSED = 'PROMO_CAMP_RELATION_CONFIG_MISSED';
    public const CODE_PAYEE_RECEIVE_COUNT_EXCEED_LIMIT = 'PAYEE_RECEIVE_COUNT_EXCEED_LIMIT';
    public const CODE_PROMO_TRANS_ORDER_DEALING = 'PROMO_TRANS_ORDER_DEALING';
    public const CODE_FUND_PROTITOPN_NOT_MATCH = 'FUND_PROTITOPN_NOT_MATCH';
    public const CODE_FUND_WALLET_INST_NOT_EXIST = 'FUND_WALLET_INST_NOT_EXIST';
    public const CODE_FUND_WALLET_UNAVAILABLE = 'FUND_WALLET_UNAVAILABLE';
    public const CODE_PARTITION_FORMAT_ERROR = 'PARTITION_FORMAT_ERROR';
    public const CODE_CURREBT_AFTER_INVALID_TIME = 'CURREBT_AFTER_INVALID_TIME';
    public const CODE_UNAUTHORIZED_CONSULT = 'UNAUTHORIZED_CONSULT';
    public const CODE_TAX_BILL_AGREEMENT_MISS = 'TAX_BILL_AGREEMENT_MISS';
    public const CODE_FORBID_OPERATION_USER_WALLET = 'FORBID_OPERATION_USER_WALLET';
    public const CODE_USER_RISK_FREEZE = 'USER_RISK_FREEZE';
    public const CODE_BALANCE_NOT_ENOUGH_FOR_CARD_FEE = 'BALANCE_NOT_ENOUGH_FOR_CARD_FEE';
    public const CODE_TRANS_ORDER_DEALING = 'TRANS_ORDER_DEALING';
    public const CODE_PAYEE_USER_IS_INST = 'PAYEE_USER_IS_INST';
    public const CODE_PAYER_NOT_RELNAME_CERTIFY = 'PAYER_NOT_RELNAME_CERTIFY';
    public const CODE_BALANCE_NOT_ENOUGH = 'BALANCE_NOT_ENOUGH';
    public const CODE_EMPLOYEE_SERVICE_NOT_EXIST = 'EMPLOYEE_SERVICE_NOT_EXIST';
    public const CODE_UN_SUPPORT_EMPLOYEE_SERVICE = 'UN_SUPPORT_EMPLOYEE_SERVICE';
    public const CODE_PERM_AML_NOT_REALNAME_PAY = 'PERM_AML_NOT_REALNAME_PAY';
    public const CODE_CONFIGURATION_ERROR = 'CONFIGURATION_ERROR';
    public const CODE_ILLEGAL_REQUEST_USER_ID = 'ILLEGAL_REQUEST_USER_ID';
    public const CODE_PARAMETER_ERROR = 'PARAMETER_ERROR';
    public const CODE_PERMIT_CHECK_PERM_AML_CERT_MISS_ACC_LIMIT = 'PERMIT_CHECK_PERM_AML_CERT_MISS_ACC_LIMIT';
    public const CODE_RECEIVER_USER_RISK_FREEZE = 'RECEIVER_USER_RISK_FREEZE';
    public const CODE_PAYER_PAYEE_ACCOUNT_NAME_CAN_NOT_SAME = 'PAYER_PAYEE_ACCOUNT_NAME_CAN_NOT_SAME';
    public const CODE_PAYEE_CERT_INFO_ERROR = 'PAYEE_CERT_INFO_ERROR';
    public const CODE_ACCOUNT_IN_NOT_EXIST = 'ACCOUNT_IN_NOT_EXIST';
    public const CODE_GLOBAL_USER_FORBBIDEN_RECIEVE = 'GLOBAL_USER_FORBBIDEN_RECIEVE';
    public const CODE_ACCOUNT_OPERATION_LIMIT = 'ACCOUNT_OPERATION_LIMIT';
    public const CODE_PAYER_UNABLE_PAYMENT = 'PAYER_UNABLE_PAYMENT';
    public const CODE_EXCEED_LIMIT_INTERNAL_SM_AMOUNT = 'EXCEED_LIMIT_INTERNAL_SM_AMOUNT';
    public const CODE_ILLEGAL_STATUS_EXCEPTION = 'ILLEGAL_STATUS_EXCEPTION';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCodeAllowableValues()
    {
        return [
            self::CODE_INVALID_PARAMETER,
            self::CODE_SYSTEM_ERROR,
            self::CODE_EXCEED_LIMIT_SM_AMOUNT,
            self::CODE_EXCEED_LIMIT_MM_AMOUNT,
            self::CODE_PAYCARD_UNABLE_PAYMENT,
            self::CODE_PAYER_STATUS_ERROR,
            self::CODE_PAYER_CERTIFY_CHECK_FAIL,
            self::CODE_PAYER_BALANCE_NOT_ENOUGH,
            self::CODE_PAYER_USER_INFO_ERROR,
            self::CODE_PAYMENT_INFO_INCONSISTENCY,
            self::CODE_CARD_BIN_ERROR,
            self::CODE_PAYEE_CARD_INFO_ERROR,
            self::CODE_INST_PAY_UNABLE,
            self::CODE_MEMO_REQUIRED_IN_TRANSFER_ERROR,
            self::CODE_PERMIT_CHECK_PERM_IDENTITY_THEFT,
            self::CODE_REMARK_HAS_SENSITIVE_WORD,
            self::CODE_EXCEED_LIMIT_DM_AMOUNT,
            self::CODE_NO_ACCOUNT_RECEIVE_PERMISSION,
            self::CODE_BALANCE_IS_NOT_ENOUGH,
            self::CODE_NO_ACCOUNT_PAYMENT_PERMISSION,
            self::CODE_PAYER_NOT_EXIST,
            self::CODE_PRODUCT_NOT_SIGN,
            self::CODE_PAYMENT_TIME_EXPIRE,
            self::CODE_PAYEE_NOT_EXIST,
            self::CODE_PAYEE_ACCOUNT_STATUS_ERROR,
            self::CODE_PERMIT_NON_BANK_LIMIT_PAYEE,
            self::CODE_PAYEE_TRUSTEESHIP_ACC_OVER_LIMIT,
            self::CODE_NO_PERMISSION_ACCOUNT,
            self::CODE_TRUSTEESHIP_ACCOUNT_NOT_EXIST,
            self::CODE_PAYEE_ACCOUNT_NOT_EXSIT,
            self::CODE_ORDER_NOT_EXIST,
            self::CODE_PAYEE_USERINFO_STATUS_ERROR,
            self::CODE_PAYMENT_MONEY_NOT_ENOUGH,
            self::CODE_TRUSTEESHIP_RECIEVE_QUOTA_LIMIT,
            self::CODE_SECURITY_CHECK_FAILED,
            self::CODE_NO_ORDER_PERMISSION,
            self::CODE_ORDER_STATUS_INVALID,
            self::CODE_PERM_AML_NOT_REALNAME_REV,
            self::CODE_USER_AGREEMENT_VERIFY_FAIL,
            self::CODE_PAYER_NOT_EQUAL_PAYEE_ERROR,
            self::CODE_EXCEED_LIMIT_DC_RECEIVED,
            self::CODE_PAYER_PERMLIMIT_CHECK_FAILURE,
            self::CODE_PAYEE_ACC_OCUPIED,
            self::CODE_PAYER_PAYEE_CANNOT_SAME,
            self::CODE_PERMIT_CHECK_PERM_LIMITED,
            self::CODE_RESOURCE_LIMIT_EXCEED,
            self::CODE_INVALID_PAYER_ACCOUNT,
            self::CODE_EXCEED_LIMIT_DM_MAX_AMOUNT,
            self::CODE_EXCEED_LIMIT_PERSONAL_SM_AMOUNT,
            self::CODE_EXCEED_LIMIT_UNRN_DM_AMOUNT,
            self::CODE_INVALID_CARDNO,
            self::CODE_RELEASE_USER_FORBBIDEN_RECIEVE,
            self::CODE_PAYEE_USER_TYPE_ERROR,
            self::CODE_EXCEED_LIMIT_SM_MIN_AMOUNT,
            self::CODE_PERMIT_CHECK_RECEIVE_LIMIT,
            self::CODE_NOT_IN_WHITE_LIST,
            self::CODE_MONEY_PAY_CLOSED,
            self::CODE_NO_AVAILABLE_PAYMENT_TOOLS,
            self::CODE_PAYEE_NOT_RELNAME_CERTIFY,
            self::CODE_OVERSEA_TRANSFER_CLOSE,
            self::CODE_PAYMENT_FAIL,
            self::CODE_ALREADY_WITHDRAW_STD_RED_PACKET,
            self::CODE_BLOCK_USER_FORBBIDEN_RECIEVE,
            self::CODE_REQUEST_PROCESSING,
            self::CODE_USER_NOT_EXIST,
            self::CODE_PARAM_ILLEGAL,
            self::CODE_PROCESS_FAIL,
            self::CODE_CURRENCY_NOT_SUPPORT,
            self::CODE_PAYER_REQUESTER_RELATION_INVALID,
            self::CODE_AUTHOREE_IS_NOT_MATCH,
            self::CODE_NO_ACCOUNT_USER_FORBBIDEN_RECIEVE,
            self::CODE_SIGN_INVALID,
            self::CODE_SIGN_INVOKE_PID_INCONSISTENT,
            self::CODE_SIGN_QUERY_APP_INFO_ERROR,
            self::CODE_SIGN_QUERY_AGGREMENT_ERROR,
            self::CODE_SIGN_AGREEMENT_NO_INCONSISTENT,
            self::CODE_SIGN_PARAM_INVALID,
            self::CODE_SIGN_NOT_ALLOW_SKIP,
            self::CODE_EXCEED_LIMIT_ENT_SM_AMOUNT,
            self::CODE_ISV_AUTH_ERROR,
            self::CODE_PAYER_USERINFO_NOT_EXSIT,
            self::CODE_BLOCK_USER_FORBBIDEN_SEND,
            self::CODE_BANK_RESPONSE_ERROR,
            self::CODE_BIZ_UNIQUE_EXCEPTION,
            self::CODE_NO_ACCOUNTBOOK_PERMISSION,
            self::CODE_PERMIT_CHECK_PERM_AML_CERT_EXPIRED,
            self::CODE_MRCHPROD_QUERY_ERROR,
            self::CODE_PERMIT_PAYER_FORBIDDEN,
            self::CODE_IDENTITY_FUND_RELATION_NOT_FOUND,
            self::CODE_INST_PAY_REMARK_UNVALID_CHARS,
            self::CODE_PERMIT_LIMIT_PAYEE,
            self::CODE_INVALID_TAX_BILL_AGREEMENT,
            self::CODE_PAY_SALARY_MODE_NOT_SUPPORT,
            self::CODE_CONTRACTOR_ACCOUNT_BOOK_NOT_FUND,
            self::CODE_BANKCODE_OR_BRANCHNAME_INFO_ERROR,
            self::CODE_PAYEE_OUT_PERMLIMIT_CHECK_FAILURE,
            self::CODE_MID_ACCOUNT_STATUS_ERROR,
            self::CODE_MID_ACCOUNT_TYPE_ERROR,
            self::CODE_PAYEE_MID_CANNOT_SAME,
            self::CODE_PAYER_MID_CANNOT_SAME,
            self::CODE_MID_ACCOUNT_CHECK_ERROR,
            self::CODE_PERM_PAY_USER_DAILY_QUOTA_ORG_BALANCE_LIMIT,
            self::CODE_PERM_PAY_USER_MONTH_QUOTA_ORG_BALANCE_LIMIT,
            self::CODE_PERM_PAY_CUSTOMER_DAILY_QUOTA_ORG_BALANCE_LIMIT,
            self::CODE_PERM_PAY_CUSTOMER_MONTH_QUOTA_ORG_BALANCE_LIMIT,
            self::CODE_NOT_SUPPORT_PAYER_ACCOUNT_TYPE,
            self::CODE_EXCEED_LIMIT_MM_MAX_AMOUNT,
            self::CODE_REP_INCONSISTENT,
            self::CODE_ILLEGAL_OPERATION,
            self::CODE_PERM_RECEIVE_CUSTOMER_ALMS_LIMIT,
            self::CODE_PAYEE_IDENTITY_NOT_MATCH,
            self::CODE_FLEXIBLE_STAFFING_RISK_CONSULT_UNSIGNED_MERCHANT,
            self::CODE_FLEXIBLE_STAFFING_RISK_CONSULT_UNAUTHORIZED_CONSULT,
            self::CODE_FLEXIBLE_STAFFING_RISK_CONSULT_USER_NOT_EXIST,
            self::CODE_FLEXIBLE_STAFFING_RISK_CONSULT_RISK_RECEIVER,
            self::CODE_PAYEE_USERINFO_ERROR,
            self::CODE_FLEXIBLE_STAFFING_HIGH_RISK_RECEIVER,
            self::CODE_FLEXIBLE_STAFFING_POTENTIAL_RISK_RECEIVER,
            self::CODE_PAYER_ACCOUNT_BOOK_INFO_EXCEPTION,
            self::CODE_RECEIVER_ACCOUNT_BOOK_INFO_EXCEPTION,
            self::CODE_ACCOUNT_BOOK_SCENE_CODE_EXCEPTION,
            self::CODE_TRUSTEESHIP_ACCOUNT_STATUS_ERROR,
            self::CODE_PAYER_NOT_EQUAL_PAYEE_FOR_BIZ_SCENE_REQUIRED,
            self::CODE_PERMIT_PAYER_LEVEL_FORBIDDEN,
            self::CODE_FLEXIBLE_STAFFING_UN_KNOWN_RISK_RECEIVER,
            self::CODE_JUDICIAL_FREEZE,
            self::CODE_TRANS_AMOUNT_NOT_IN_PRIZE_LIMIT,
            self::CODE_PROMO_CAMP_RELATION_CONFIG_MISSED,
            self::CODE_PAYEE_RECEIVE_COUNT_EXCEED_LIMIT,
            self::CODE_PROMO_TRANS_ORDER_DEALING,
            self::CODE_FUND_PROTITOPN_NOT_MATCH,
            self::CODE_FUND_WALLET_INST_NOT_EXIST,
            self::CODE_FUND_WALLET_UNAVAILABLE,
            self::CODE_PARTITION_FORMAT_ERROR,
            self::CODE_CURREBT_AFTER_INVALID_TIME,
            self::CODE_UNAUTHORIZED_CONSULT,
            self::CODE_TAX_BILL_AGREEMENT_MISS,
            self::CODE_FORBID_OPERATION_USER_WALLET,
            self::CODE_USER_RISK_FREEZE,
            self::CODE_BALANCE_NOT_ENOUGH_FOR_CARD_FEE,
            self::CODE_TRANS_ORDER_DEALING,
            self::CODE_PAYEE_USER_IS_INST,
            self::CODE_PAYER_NOT_RELNAME_CERTIFY,
            self::CODE_BALANCE_NOT_ENOUGH,
            self::CODE_EMPLOYEE_SERVICE_NOT_EXIST,
            self::CODE_UN_SUPPORT_EMPLOYEE_SERVICE,
            self::CODE_PERM_AML_NOT_REALNAME_PAY,
            self::CODE_CONFIGURATION_ERROR,
            self::CODE_ILLEGAL_REQUEST_USER_ID,
            self::CODE_PARAMETER_ERROR,
            self::CODE_PERMIT_CHECK_PERM_AML_CERT_MISS_ACC_LIMIT,
            self::CODE_RECEIVER_USER_RISK_FREEZE,
            self::CODE_PAYER_PAYEE_ACCOUNT_NAME_CAN_NOT_SAME,
            self::CODE_PAYEE_CERT_INFO_ERROR,
            self::CODE_ACCOUNT_IN_NOT_EXIST,
            self::CODE_GLOBAL_USER_FORBBIDEN_RECIEVE,
            self::CODE_ACCOUNT_OPERATION_LIMIT,
            self::CODE_PAYER_UNABLE_PAYMENT,
            self::CODE_EXCEED_LIMIT_INTERNAL_SM_AMOUNT,
            self::CODE_ILLEGAL_STATUS_EXCEPTION,
        ];
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
        $this->container['code'] = $data['code'] ?? null;
        $this->container['links'] = $data['links'] ?? null;
        $this->container['message'] = $data['message'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        //if ($this->container['code'] === null) {
        //    $invalidProperties[] = "'code' can't be null";
        //}
        $allowedValues = $this->getCodeAllowableValues();
        if (!is_null($this->container['code']) && !in_array($this->container['code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'code', must be one of '%s'",
                $this->container['code'],
                implode("', '", $allowedValues)
            );
        }

        //if ($this->container['message'] === null) {
        //    $invalidProperties[] = "'message' can't be null";
        //}
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code 错误码
     *
     * @return self
     */
    public function setCode($code)
    {
        $allowedValues = $this->getCodeAllowableValues();
        if (!is_null($code) && !in_array($code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'code', must be one of '%s'",
                    $code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets links
     *
     * @return string|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param string|null $links 解决方案链接
     *
     * @return self
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message 错误描述
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

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


