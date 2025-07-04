<?php
/**
 * AlipayFundTransPayErrorResponseModel
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
 * AlipayFundTransPayErrorResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayFundTransPayErrorResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayFundTransPayErrorResponseModel';

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

    public const CODE_PRODUCT_NOT_SIGN = 'PRODUCT_NOT_SIGN';
    public const CODE_NO_PERMISSION_ACCOUNT = 'NO_PERMISSION_ACCOUNT';
    public const CODE_PAYMENT_TIME_EXPIRE = 'PAYMENT_TIME_EXPIRE';
    public const CODE_PAYER_USERINFO_NOT_EXSIT = 'PAYER_USERINFO_NOT_EXSIT';
    public const CODE_PAYER_NOT_RELNAME_CERTIFY = 'PAYER_NOT_RELNAME_CERTIFY';
    public const CODE_PAYER_NOT_EXIST = 'PAYER_NOT_EXIST';
    public const CODE_PAYEE_NOT_EXIST = 'PAYEE_NOT_EXIST';
    public const CODE_PAYER_STATUS_ERROR = 'PAYER_STATUS_ERROR';
    public const CODE_PAYEE_ACCOUNT_STATUS_ERROR = 'PAYEE_ACCOUNT_STATUS_ERROR';
    public const CODE_NO_ACCOUNT_RECEIVE_PERMISSION = 'NO_ACCOUNT_RECEIVE_PERMISSION';
    public const CODE_MEMO_REQUIRED_IN_TRANSFER_ERROR = 'MEMO_REQUIRED_IN_TRANSFER_ERROR';
    public const CODE_SYSTEM_ERROR = 'SYSTEM_ERROR';
    public const CODE_PERMIT_NON_BANK_LIMIT_PAYEE = 'PERMIT_NON_BANK_LIMIT_PAYEE';
    public const CODE_PAYER_PAYEE_CANNOT_SAME = 'PAYER_PAYEE_CANNOT_SAME';
    public const CODE_REMARK_HAS_SENSITIVE_WORD = 'REMARK_HAS_SENSITIVE_WORD';
    public const CODE_PAYEE_ACCOUNT_NOT_EXSIT = 'PAYEE_ACCOUNT_NOT_EXSIT';
    public const CODE_TRUSTEESHIP_RECIEVE_QUOTA_LIMIT = 'TRUSTEESHIP_RECIEVE_QUOTA_LIMIT';
    public const CODE_EXCEED_LIMIT_SM_AMOUNT = 'EXCEED_LIMIT_SM_AMOUNT';
    public const CODE_EXCEED_LIMIT_DM_AMOUNT = 'EXCEED_LIMIT_DM_AMOUNT';
    public const CODE_REFUND_TIME_INVALID = 'REFUND_TIME_INVALID';
    public const CODE_AUTH_CODE_ERROR = 'AUTH_CODE_ERROR';
    public const CODE_PAYMENT_TIME_INVALID = 'PAYMENT_TIME_INVALID';
    public const CODE_INVALID_PARAMETER = 'INVALID_PARAMETER';
    public const CODE_MONEY_PAY_CLOSED = 'MONEY_PAY_CLOSED';
    public const CODE_USER_BALANCE_NOT_ENOUGH = 'USER_BALANCE_NOT_ENOUGH';
    public const CODE_USER_BANKCARD_BALANCE_NOT_ENOUGH = 'USER_BANKCARD_BALANCE_NOT_ENOUGH';
    public const CODE_SECURITY_CHECK_FAILED = 'SECURITY_CHECK_FAILED';
    public const CODE_PERMIT_CHECK_FAIL = 'PERMIT_CHECK_FAIL';
    public const CODE_ORDER_PAY_SUCCESS = 'ORDER_PAY_SUCCESS';
    public const CODE_NO_AVAILABLE_PAYMENT_TOOLS = 'NO_AVAILABLE_PAYMENT_TOOLS';
    public const CODE_PAYMENT_INFO_INCONSISTENCY = 'PAYMENT_INFO_INCONSISTENCY';
    public const CODE_ORDER_STATUS_INVALID = 'ORDER_STATUS_INVALID';
    public const CODE_ORDER_PAY_SUCCESS_PAYEE_ERROR = 'ORDER_PAY_SUCCESS_PAYEE_ERROR';
    public const CODE_USER_BLOCKED = 'USER_BLOCKED';
    public const CODE_ORDER_OTHER_PAY_SUCCESS = 'ORDER_OTHER_PAY_SUCCESS';
    public const CODE_TRUSTEESHIP_ACCOUNT_NOT_EXIST = 'TRUSTEESHIP_ACCOUNT_NOT_EXIST';
    public const CODE_NO_ACCOUNT_PAYMENT_PERMISSION = 'NO_ACCOUNT_PAYMENT_PERMISSION';
    public const CODE_PAYMENT_FAIL = 'PAYMENT_FAIL';
    public const CODE_AUTHOREE_IS_NOT_MATCH = 'AUTHOREE_IS_NOT_MATCH';
    public const CODE_USER_AGREEMENT_STATUS_ABNORMAL = 'USER_AGREEMENT_STATUS_ABNORMAL';
    public const CODE_USER_AGREEMENT_IS_OUT_OF_DATE = 'USER_AGREEMENT_IS_OUT_OF_DATE';
    public const CODE_USER_AGREEMENT_VERIFY_FAIL = 'USER_AGREEMENT_VERIFY_FAIL';
    public const CODE_MERCHANT_AGREEMENT_VERIFY_FAIL = 'MERCHANT_AGREEMENT_VERIFY_FAIL';
    public const CODE_RESOURCE_LIMIT_EXCEED = 'RESOURCE_LIMIT_EXCEED';
    public const CODE_INVALID_PAYEE_ACCOUNT = 'INVALID_PAYEE_ACCOUNT';
    public const CODE_PAYER_IS_NOT_SAME_PAYEE = 'PAYER_IS_NOT_SAME_PAYEE';
    public const CODE_ILLEGAL_REQUEST_USER_ID = 'ILLEGAL_REQUEST_USER_ID';
    public const CODE_FREEZE_AMOUNT_IS_NOT_ENOUGH = 'FREEZE_AMOUNT_IS_NOT_ENOUGH';
    public const CODE_AGREEMENT_SCENE_VERIFY_FAIL = 'AGREEMENT_SCENE_VERIFY_FAIL';
    public const CODE_AUTH_USERID_IS_NOT_MATCH = 'AUTH_USERID_IS_NOT_MATCH';
    public const CODE_RELEASE_USER_FORBBIDEN_RECIEVE = 'RELEASE_USER_FORBBIDEN_RECIEVE';
    public const CODE_AMOUNT_COMPARE_INCONSISTENCY = 'AMOUNT_COMPARE_INCONSISTENCY';
    public const CODE_PAYEE_USERINFO_STATUS_ERROR = 'PAYEE_USERINFO_STATUS_ERROR';
    public const CODE_PAYER_BALANCE_NOT_ENOUGH = 'PAYER_BALANCE_NOT_ENOUGH';
    public const CODE_BIZ_UNIQUE_EXCEPTION = 'BIZ_UNIQUE_EXCEPTION';
    public const CODE_BLOCK_USER_FORBBIDEN_RECIEVE = 'BLOCK_USER_FORBBIDEN_RECIEVE';
    public const CODE_NO_ACCOUNT_USER_FORBBIDEN_RECIEVE = 'NO_ACCOUNT_USER_FORBBIDEN_RECIEVE';
    public const CODE_SUB_BIZ_SCENE_ERROR = 'SUB_BIZ_SCENE_ERROR';
    public const CODE_PAYER_NOT_ADMIT_ERROR = 'PAYER_NOT_ADMIT_ERROR';
    public const CODE_PAYEE_CARD_INFO_ERROR = 'PAYEE_CARD_INFO_ERROR';
    public const CODE_PERM_AML_NOT_REALNAME_REV = 'PERM_AML_NOT_REALNAME_REV';
    public const CODE_EXCEED_LIMIT_MM_AMOUNT = 'EXCEED_LIMIT_MM_AMOUNT';
    public const CODE_CARD_BIN_ERROR = 'CARD_BIN_ERROR';
    public const CODE_INST_PAY_UNABLE = 'INST_PAY_UNABLE';
    public const CODE_PERMIT_CHECK_PERM_IDENTITY_THEFT = 'PERMIT_CHECK_PERM_IDENTITY_THEFT';
    public const CODE_BALANCE_IS_NOT_ENOUGH = 'BALANCE_IS_NOT_ENOUGH';
    public const CODE_INVALID_CARDNO = 'INVALID_CARDNO';
    public const CODE_PAYEE_TRUSTEESHIP_ACC_OVER_LIMIT = 'PAYEE_TRUSTEESHIP_ACC_OVER_LIMIT';
    public const CODE_EXCEED_LIMIT_DC_RECEIVED = 'EXCEED_LIMIT_DC_RECEIVED';
    public const CODE_PAYER_PERMLIMIT_CHECK_FAILURE = 'PAYER_PERMLIMIT_CHECK_FAILURE';
    public const CODE_PAYEE_ACC_OCUPIED = 'PAYEE_ACC_OCUPIED';
    public const CODE_PERMIT_CHECK_PERM_LIMITED = 'PERMIT_CHECK_PERM_LIMITED';
    public const CODE_EXCEED_LIMIT_DM_MAX_AMOUNT = 'EXCEED_LIMIT_DM_MAX_AMOUNT';
    public const CODE_EXCEED_LIMIT_PERSONAL_SM_AMOUNT = 'EXCEED_LIMIT_PERSONAL_SM_AMOUNT';
    public const CODE_EXCEED_LIMIT_UNRN_DM_AMOUNT = 'EXCEED_LIMIT_UNRN_DM_AMOUNT';
    public const CODE_PAYEE_USER_TYPE_ERROR = 'PAYEE_USER_TYPE_ERROR';
    public const CODE_EXCEED_LIMIT_SM_MIN_AMOUNT = 'EXCEED_LIMIT_SM_MIN_AMOUNT';
    public const CODE_PERMIT_CHECK_RECEIVE_LIMIT = 'PERMIT_CHECK_RECEIVE_LIMIT';
    public const CODE_PAYEE_NOT_RELNAME_CERTIFY = 'PAYEE_NOT_RELNAME_CERTIFY';
    public const CODE_BANK_CARD_BALANCE_NOT_ENOUGH = 'BANK_CARD_BALANCE_NOT_ENOUGH';
    public const CODE_MAX_VISIT_LIMIT = 'MAX_VISIT_LIMIT';
    public const CODE_MONTH_LIMIT_EXCEED = 'MONTH_LIMIT_EXCEED';
    public const CODE_DAILY_LIMIT_EXCEED = 'DAILY_LIMIT_EXCEED';
    public const CODE_PERM_RECEIVE_CUSTOMER_ALMS_LIMIT = 'PERM_RECEIVE_CUSTOMER_ALMS_LIMIT';
    public const CODE_PAYCARD_UNABLE_PAYMENT = 'PAYCARD_UNABLE_PAYMENT';
    public const CODE_PAYEE_USERINFO_ERROR = 'PAYEE_USERINFO_ERROR';
    public const CODE_NOT_SUPPORT_PAYER_ACCOUNT_TYPE = 'NOT_SUPPORT_PAYER_ACCOUNT_TYPE';
    public const CODE_USER_RISK_FREEZE = 'USER_RISK_FREEZE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCodeAllowableValues()
    {
        return [
            self::CODE_PRODUCT_NOT_SIGN,
            self::CODE_NO_PERMISSION_ACCOUNT,
            self::CODE_PAYMENT_TIME_EXPIRE,
            self::CODE_PAYER_USERINFO_NOT_EXSIT,
            self::CODE_PAYER_NOT_RELNAME_CERTIFY,
            self::CODE_PAYER_NOT_EXIST,
            self::CODE_PAYEE_NOT_EXIST,
            self::CODE_PAYER_STATUS_ERROR,
            self::CODE_PAYEE_ACCOUNT_STATUS_ERROR,
            self::CODE_NO_ACCOUNT_RECEIVE_PERMISSION,
            self::CODE_MEMO_REQUIRED_IN_TRANSFER_ERROR,
            self::CODE_SYSTEM_ERROR,
            self::CODE_PERMIT_NON_BANK_LIMIT_PAYEE,
            self::CODE_PAYER_PAYEE_CANNOT_SAME,
            self::CODE_REMARK_HAS_SENSITIVE_WORD,
            self::CODE_PAYEE_ACCOUNT_NOT_EXSIT,
            self::CODE_TRUSTEESHIP_RECIEVE_QUOTA_LIMIT,
            self::CODE_EXCEED_LIMIT_SM_AMOUNT,
            self::CODE_EXCEED_LIMIT_DM_AMOUNT,
            self::CODE_REFUND_TIME_INVALID,
            self::CODE_AUTH_CODE_ERROR,
            self::CODE_PAYMENT_TIME_INVALID,
            self::CODE_INVALID_PARAMETER,
            self::CODE_MONEY_PAY_CLOSED,
            self::CODE_USER_BALANCE_NOT_ENOUGH,
            self::CODE_USER_BANKCARD_BALANCE_NOT_ENOUGH,
            self::CODE_SECURITY_CHECK_FAILED,
            self::CODE_PERMIT_CHECK_FAIL,
            self::CODE_ORDER_PAY_SUCCESS,
            self::CODE_NO_AVAILABLE_PAYMENT_TOOLS,
            self::CODE_PAYMENT_INFO_INCONSISTENCY,
            self::CODE_ORDER_STATUS_INVALID,
            self::CODE_ORDER_PAY_SUCCESS_PAYEE_ERROR,
            self::CODE_USER_BLOCKED,
            self::CODE_ORDER_OTHER_PAY_SUCCESS,
            self::CODE_TRUSTEESHIP_ACCOUNT_NOT_EXIST,
            self::CODE_NO_ACCOUNT_PAYMENT_PERMISSION,
            self::CODE_PAYMENT_FAIL,
            self::CODE_AUTHOREE_IS_NOT_MATCH,
            self::CODE_USER_AGREEMENT_STATUS_ABNORMAL,
            self::CODE_USER_AGREEMENT_IS_OUT_OF_DATE,
            self::CODE_USER_AGREEMENT_VERIFY_FAIL,
            self::CODE_MERCHANT_AGREEMENT_VERIFY_FAIL,
            self::CODE_RESOURCE_LIMIT_EXCEED,
            self::CODE_INVALID_PAYEE_ACCOUNT,
            self::CODE_PAYER_IS_NOT_SAME_PAYEE,
            self::CODE_ILLEGAL_REQUEST_USER_ID,
            self::CODE_FREEZE_AMOUNT_IS_NOT_ENOUGH,
            self::CODE_AGREEMENT_SCENE_VERIFY_FAIL,
            self::CODE_AUTH_USERID_IS_NOT_MATCH,
            self::CODE_RELEASE_USER_FORBBIDEN_RECIEVE,
            self::CODE_AMOUNT_COMPARE_INCONSISTENCY,
            self::CODE_PAYEE_USERINFO_STATUS_ERROR,
            self::CODE_PAYER_BALANCE_NOT_ENOUGH,
            self::CODE_BIZ_UNIQUE_EXCEPTION,
            self::CODE_BLOCK_USER_FORBBIDEN_RECIEVE,
            self::CODE_NO_ACCOUNT_USER_FORBBIDEN_RECIEVE,
            self::CODE_SUB_BIZ_SCENE_ERROR,
            self::CODE_PAYER_NOT_ADMIT_ERROR,
            self::CODE_PAYEE_CARD_INFO_ERROR,
            self::CODE_PERM_AML_NOT_REALNAME_REV,
            self::CODE_EXCEED_LIMIT_MM_AMOUNT,
            self::CODE_CARD_BIN_ERROR,
            self::CODE_INST_PAY_UNABLE,
            self::CODE_PERMIT_CHECK_PERM_IDENTITY_THEFT,
            self::CODE_BALANCE_IS_NOT_ENOUGH,
            self::CODE_INVALID_CARDNO,
            self::CODE_PAYEE_TRUSTEESHIP_ACC_OVER_LIMIT,
            self::CODE_EXCEED_LIMIT_DC_RECEIVED,
            self::CODE_PAYER_PERMLIMIT_CHECK_FAILURE,
            self::CODE_PAYEE_ACC_OCUPIED,
            self::CODE_PERMIT_CHECK_PERM_LIMITED,
            self::CODE_EXCEED_LIMIT_DM_MAX_AMOUNT,
            self::CODE_EXCEED_LIMIT_PERSONAL_SM_AMOUNT,
            self::CODE_EXCEED_LIMIT_UNRN_DM_AMOUNT,
            self::CODE_PAYEE_USER_TYPE_ERROR,
            self::CODE_EXCEED_LIMIT_SM_MIN_AMOUNT,
            self::CODE_PERMIT_CHECK_RECEIVE_LIMIT,
            self::CODE_PAYEE_NOT_RELNAME_CERTIFY,
            self::CODE_BANK_CARD_BALANCE_NOT_ENOUGH,
            self::CODE_MAX_VISIT_LIMIT,
            self::CODE_MONTH_LIMIT_EXCEED,
            self::CODE_DAILY_LIMIT_EXCEED,
            self::CODE_PERM_RECEIVE_CUSTOMER_ALMS_LIMIT,
            self::CODE_PAYCARD_UNABLE_PAYMENT,
            self::CODE_PAYEE_USERINFO_ERROR,
            self::CODE_NOT_SUPPORT_PAYER_ACCOUNT_TYPE,
            self::CODE_USER_RISK_FREEZE,
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


