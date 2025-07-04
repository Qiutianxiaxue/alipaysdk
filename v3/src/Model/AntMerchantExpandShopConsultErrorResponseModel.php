<?php
/**
 * AntMerchantExpandShopConsultErrorResponseModel
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
 * AntMerchantExpandShopConsultErrorResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AntMerchantExpandShopConsultErrorResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AntMerchantExpandShopConsultErrorResponseModel';

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

    public const CODE_NOT_ALLOWED_SETTLE = 'NOT_ALLOWED_SETTLE';
    public const CODE_SHOP_CATEGORY_IS_ILLEGAL = 'SHOP_CATEGORY_IS_ILLEGAL';
    public const CODE_ISV_NOT_EXIST = 'ISV_NOT_EXIST';
    public const CODE_SHOP_ACCOUNT_NO_IS_ILLEGAL = 'SHOP_ACCOUNT_NO_IS_ILLEGAL';
    public const CODE_SHOP_SHOPNO_IS_EMPTY = 'SHOP_SHOPNO_IS_EMPTY';
    public const CODE_INDUSTRY_QUALIFICATION_IS_EMPTY = 'INDUSTRY_QUALIFICATION_IS_EMPTY';
    public const CODE_SETTLED_OUTDOORIMAGE_EMPTY = 'SETTLED_OUTDOORIMAGE_EMPTY';
    public const CODE_SHOP_SHOPNAME_IS_EMPTY = 'SHOP_SHOPNAME_IS_EMPTY';
    public const CODE_SETTLED_BIZ_ADDRESS_ILLEGAL = 'SETTLED_BIZ_ADDRESS_ILLEGAL';
    public const CODE_SHOP_CATEGORY_IS_EMPTY = 'SHOP_CATEGORY_IS_EMPTY';
    public const CODE_CONTACT_WAY_VALUE_NULL = 'CONTACT_WAY_VALUE_NULL';
    public const CODE_ADDRESS_PROVINCE_CODE_ILLEGAL = 'ADDRESS_PROVINCE_CODE_ILLEGAL';
    public const CODE_ADDRESS_CITY_CODE_ILLEGAL = 'ADDRESS_CITY_CODE_ILLEGAL';
    public const CODE_ADDRESS_DISTRICT_CODE_ILLEGAL = 'ADDRESS_DISTRICT_CODE_ILLEGAL';
    public const CODE_SHOP_ALREADY_EXIST = 'SHOP_ALREADY_EXIST';
    public const CODE_GONGAN_CHECK_FAIL = 'GONGAN_CHECK_FAIL';
    public const CODE_GONGSHANG_CHECK_FAIL = 'GONGSHANG_CHECK_FAIL';
    public const CODE_MERCHANT_INPUT_ARGUMENT_ILLEGAL = 'MERCHANT_INPUT_ARGUMENT_ILLEGAL';
    public const CODE_BRAND_ILLEGAL = 'BRAND_ILLEGAL';
    public const CODE_CONTACT_PERSON_NAME_NULL = 'CONTACT_PERSON_NAME_NULL';
    public const CODE_USER_ILLEGAL = 'USER_ILLEGAL';
    public const CODE_PROFILE_KEY_ILLEGAL = 'PROFILE_KEY_ILLEGAL';
    public const CODE_SETTLED_BANKCARD_NO_IS_EMPTY = 'SETTLED_BANKCARD_NO_IS_EMPTY';
    public const CODE_SETTLED_ACCOUNTHOLDERNAME_EMPTY = 'SETTLED_ACCOUNTHOLDERNAME_EMPTY';
    public const CODE_SETTLED_ACCOUNTBRANCHNAME_EMPTY = 'SETTLED_ACCOUNTBRANCHNAME_EMPTY';
    public const CODE_SETTLED_ACCOUNTINSTNAME_EMPTY = 'SETTLED_ACCOUNTINSTNAME_EMPTY';
    public const CODE_SETTLED_USAGETYPE_IS_EMPTY = 'SETTLED_USAGETYPE_IS_EMPTY';
    public const CODE_BANK_BRANCH_NAME_ILLEGAL = 'BANK_BRANCH_NAME_ILLEGAL';
    public const CODE_SETTLED_USAGETYPE_ILLEGAL = 'SETTLED_USAGETYPE_ILLEGAL';
    public const CODE_SETTLED_CARD_ACCOUNTINSTID_EMPTY = 'SETTLED_CARD_ACCOUNTINSTID_EMPTY';
    public const CODE_SETTLED_CARD_ACCOUNTTYPE_EMPTY = 'SETTLED_CARD_ACCOUNTTYPE_EMPTY';
    public const CODE_BANK_ACCOUNTINSTID_ILLEGAL = 'BANK_ACCOUNTINSTID_ILLEGAL';
    public const CODE_SETTLED_CARD_ACCOUNTTYPE_ILLEGAL = 'SETTLED_CARD_ACCOUNTTYPE_ILLEGAL';
    public const CODE_BANK_ACCOUNTINSTNAME_ILLEGAL = 'BANK_ACCOUNTINSTNAME_ILLEGAL';
    public const CODE_SHOP_CODE_ALREADY_EXIST = 'SHOP_CODE_ALREADY_EXIST';
    public const CODE_SYSTEM_ERROR = 'SYSTEM_ERROR';
    public const CODE_SETTLED_ALIPAYACCOUNT_NOT_EXIST = 'SETTLED_ALIPAYACCOUNT_NOT_EXIST';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCodeAllowableValues()
    {
        return [
            self::CODE_NOT_ALLOWED_SETTLE,
            self::CODE_SHOP_CATEGORY_IS_ILLEGAL,
            self::CODE_ISV_NOT_EXIST,
            self::CODE_SHOP_ACCOUNT_NO_IS_ILLEGAL,
            self::CODE_SHOP_SHOPNO_IS_EMPTY,
            self::CODE_INDUSTRY_QUALIFICATION_IS_EMPTY,
            self::CODE_SETTLED_OUTDOORIMAGE_EMPTY,
            self::CODE_SHOP_SHOPNAME_IS_EMPTY,
            self::CODE_SETTLED_BIZ_ADDRESS_ILLEGAL,
            self::CODE_SHOP_CATEGORY_IS_EMPTY,
            self::CODE_CONTACT_WAY_VALUE_NULL,
            self::CODE_ADDRESS_PROVINCE_CODE_ILLEGAL,
            self::CODE_ADDRESS_CITY_CODE_ILLEGAL,
            self::CODE_ADDRESS_DISTRICT_CODE_ILLEGAL,
            self::CODE_SHOP_ALREADY_EXIST,
            self::CODE_GONGAN_CHECK_FAIL,
            self::CODE_GONGSHANG_CHECK_FAIL,
            self::CODE_MERCHANT_INPUT_ARGUMENT_ILLEGAL,
            self::CODE_BRAND_ILLEGAL,
            self::CODE_CONTACT_PERSON_NAME_NULL,
            self::CODE_USER_ILLEGAL,
            self::CODE_PROFILE_KEY_ILLEGAL,
            self::CODE_SETTLED_BANKCARD_NO_IS_EMPTY,
            self::CODE_SETTLED_ACCOUNTHOLDERNAME_EMPTY,
            self::CODE_SETTLED_ACCOUNTBRANCHNAME_EMPTY,
            self::CODE_SETTLED_ACCOUNTINSTNAME_EMPTY,
            self::CODE_SETTLED_USAGETYPE_IS_EMPTY,
            self::CODE_BANK_BRANCH_NAME_ILLEGAL,
            self::CODE_SETTLED_USAGETYPE_ILLEGAL,
            self::CODE_SETTLED_CARD_ACCOUNTINSTID_EMPTY,
            self::CODE_SETTLED_CARD_ACCOUNTTYPE_EMPTY,
            self::CODE_BANK_ACCOUNTINSTID_ILLEGAL,
            self::CODE_SETTLED_CARD_ACCOUNTTYPE_ILLEGAL,
            self::CODE_BANK_ACCOUNTINSTNAME_ILLEGAL,
            self::CODE_SHOP_CODE_ALREADY_EXIST,
            self::CODE_SYSTEM_ERROR,
            self::CODE_SETTLED_ALIPAYACCOUNT_NOT_EXIST,
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


