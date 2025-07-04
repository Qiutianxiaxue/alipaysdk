<?php
/**
 * AlipayOpenAppMiniTemplatemessageSendErrorResponseModel
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
 * AlipayOpenAppMiniTemplatemessageSendErrorResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenAppMiniTemplatemessageSendErrorResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenAppMiniTemplatemessageSendErrorResponseModel';

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

    public const CODE_FORM_ID_SEND_LIMIT = 'FORM_ID_SEND_LIMIT';
    public const CODE_TEMPLATE_ILLEGAL = 'TEMPLATE_ILLEGAL';
    public const CODE_MESSAGE_TEMPLATE_KEYWORD_ILLEGAL = 'MESSAGE_TEMPLATE_KEYWORD_ILLEGAL';
    public const CODE_USER_TEMPLATE_ILLEGAL = 'USER_TEMPLATE_ILLEGAL';
    public const CODE_USER_TEMPLATE_LACK_KEYWORD = 'USER_TEMPLATE_LACK_KEYWORD';
    public const CODE_FORM_ID_INVALID = 'FORM_ID_INVALID';
    public const CODE_FORM_ID_NOT_MATCH_APPID = 'FORM_ID_NOT_MATCH_APPID';
    public const CODE_FORM_ID_OVER_TIME = 'FORM_ID_OVER_TIME';
    public const CODE_USER_KEYWORD_LENGTH_ERROR = 'USER_KEYWORD_LENGTH_ERROR';
    public const CODE_PAGE_OVER_LIMIT = 'PAGE_OVER_LIMIT';
    public const CODE_TRADE_NO_NOT_MATCH_USERID = 'TRADE_NO_NOT_MATCH_USERID';
    public const CODE_QUERY_CONSUMER_REQEUST_ERROR = 'QUERY_CONSUMER_REQEUST_ERROR';
    public const CODE_BIZ_CONTENT_FORMAT_ERROR = 'BIZ_CONTENT_FORMAT_ERROR';
    public const CODE_DATA_CONTENT_FORMAT_ERROR = 'DATA_CONTENT_FORMAT_ERROR';
    public const CODE_DATA_SENSITIVE = 'DATA_SENSITIVE';
    public const CODE_USER_ID_INVALID = 'USER_ID_INVALID';
    public const CODE_NO_BIND_PUBLIC_APP = 'NO_BIND_PUBLIC_APP';
    public const CODE_MESSAGE_SEND_AUTH_ERROR = 'MESSAGE_SEND_AUTH_ERROR';
    public const CODE_USER_TEMPLATE_STATUS_ILLEGAL = 'USER_TEMPLATE_STATUS_ILLEGAL';
    public const CODE_APP_TYPE_ERROR = 'APP_TYPE_ERROR';
    public const CODE_MSG_SEND_ERROR = 'MSG_SEND_ERROR';
    public const CODE_ILLEGAL_ARGUMENT_PARAMS = 'ILLEGAL_ARGUMENT_PARAMS';
    public const CODE_NO_RECENT_VISIT_RECORD = 'NO_RECENT_VISIT_RECORD';
    public const CODE_MSG_SINGLE_SD_OVER = 'MSG_SINGLE_SD_OVER';
    public const CODE_NO_PLACE_ORDER_RECORD = 'NO_PLACE_ORDER_RECORD';
    public const CODE_MSG_UNSUBSCRIBED = 'MSG_UNSUBSCRIBED';
    public const CODE_MSG_CONTENT_NOT_INTERESTED = 'MSG_CONTENT_NOT_INTERESTED';
    public const CODE_MSG_REJECTED = 'MSG_REJECTED';
    public const CODE_MSG_TEMPLATE_ID_VALID = 'MSG_TEMPLATE_ID_VALID';
    public const CODE_DATA_IS_EMPTY = 'DATA_IS_EMPTY';
    public const CODE_MSG_UNAUTHORIZED = 'MSG_UNAUTHORIZED';
    public const CODE_APP_NO_AVAIABLE = 'APP_NO_AVAIABLE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCodeAllowableValues()
    {
        return [
            self::CODE_FORM_ID_SEND_LIMIT,
            self::CODE_TEMPLATE_ILLEGAL,
            self::CODE_MESSAGE_TEMPLATE_KEYWORD_ILLEGAL,
            self::CODE_USER_TEMPLATE_ILLEGAL,
            self::CODE_USER_TEMPLATE_LACK_KEYWORD,
            self::CODE_FORM_ID_INVALID,
            self::CODE_FORM_ID_NOT_MATCH_APPID,
            self::CODE_FORM_ID_OVER_TIME,
            self::CODE_USER_KEYWORD_LENGTH_ERROR,
            self::CODE_PAGE_OVER_LIMIT,
            self::CODE_TRADE_NO_NOT_MATCH_USERID,
            self::CODE_QUERY_CONSUMER_REQEUST_ERROR,
            self::CODE_BIZ_CONTENT_FORMAT_ERROR,
            self::CODE_DATA_CONTENT_FORMAT_ERROR,
            self::CODE_DATA_SENSITIVE,
            self::CODE_USER_ID_INVALID,
            self::CODE_NO_BIND_PUBLIC_APP,
            self::CODE_MESSAGE_SEND_AUTH_ERROR,
            self::CODE_USER_TEMPLATE_STATUS_ILLEGAL,
            self::CODE_APP_TYPE_ERROR,
            self::CODE_MSG_SEND_ERROR,
            self::CODE_ILLEGAL_ARGUMENT_PARAMS,
            self::CODE_NO_RECENT_VISIT_RECORD,
            self::CODE_MSG_SINGLE_SD_OVER,
            self::CODE_NO_PLACE_ORDER_RECORD,
            self::CODE_MSG_UNSUBSCRIBED,
            self::CODE_MSG_CONTENT_NOT_INTERESTED,
            self::CODE_MSG_REJECTED,
            self::CODE_MSG_TEMPLATE_ID_VALID,
            self::CODE_DATA_IS_EMPTY,
            self::CODE_MSG_UNAUTHORIZED,
            self::CODE_APP_NO_AVAIABLE,
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


