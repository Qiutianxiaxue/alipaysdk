<?php
/**
 * AlipayMerchantTradecomplainFeedbackSubmitModel
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
 * AlipayMerchantTradecomplainFeedbackSubmitModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayMerchantTradecomplainFeedbackSubmitModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayMerchantTradecomplainFeedbackSubmitModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'complainEventId' => 'string',
        'feedbackCode' => 'string',
        'feedbackContent' => 'string',
        'feedbackImages' => 'string',
        'operator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'complainEventId' => null,
        'feedbackCode' => null,
        'feedbackContent' => null,
        'feedbackImages' => null,
        'operator' => null
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
        'complainEventId' => 'complain_event_id',
        'feedbackCode' => 'feedback_code',
        'feedbackContent' => 'feedback_content',
        'feedbackImages' => 'feedback_images',
        'operator' => 'operator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'complainEventId' => 'setComplainEventId',
        'feedbackCode' => 'setFeedbackCode',
        'feedbackContent' => 'setFeedbackContent',
        'feedbackImages' => 'setFeedbackImages',
        'operator' => 'setOperator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'complainEventId' => 'getComplainEventId',
        'feedbackCode' => 'getFeedbackCode',
        'feedbackContent' => 'getFeedbackContent',
        'feedbackImages' => 'getFeedbackImages',
        'operator' => 'getOperator'
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
        $this->container['complainEventId'] = $data['complainEventId'] ?? null;
        $this->container['feedbackCode'] = $data['feedbackCode'] ?? null;
        $this->container['feedbackContent'] = $data['feedbackContent'] ?? null;
        $this->container['feedbackImages'] = $data['feedbackImages'] ?? null;
        $this->container['operator'] = $data['operator'] ?? null;
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
     * Gets complainEventId
     *
     * @return string|null
     */
    public function getComplainEventId()
    {
        return $this->container['complainEventId'];
    }

    /**
     * Sets complainEventId
     *
     * @param string|null $complainEventId 支付宝侧投诉单号
     *
     * @return self
     */
    public function setComplainEventId($complainEventId)
    {
        $this->container['complainEventId'] = $complainEventId;

        return $this;
    }

    /**
     * Gets feedbackCode
     *
     * @return string|null
     */
    public function getFeedbackCode()
    {
        return $this->container['feedbackCode'];
    }

    /**
     * Sets feedbackCode
     *
     * @param string|null $feedbackCode 反馈类目ID 00:使用体验保障金退款； 02:通过其他方式退款; 03:已发货; 04:其他; 05:已完成售后服务; 06:非我方责任范围；
     *
     * @return self
     */
    public function setFeedbackCode($feedbackCode)
    {
        $this->container['feedbackCode'] = $feedbackCode;

        return $this;
    }

    /**
     * Gets feedbackContent
     *
     * @return string|null
     */
    public function getFeedbackContent()
    {
        return $this->container['feedbackContent'];
    }

    /**
     * Sets feedbackContent
     *
     * @param string|null $feedbackContent 反馈内容，字数不超过200个字
     *
     * @return self
     */
    public function setFeedbackContent($feedbackContent)
    {
        $this->container['feedbackContent'] = $feedbackContent;

        return $this;
    }

    /**
     * Gets feedbackImages
     *
     * @return string|null
     */
    public function getFeedbackImages()
    {
        return $this->container['feedbackImages'];
    }

    /**
     * Sets feedbackImages
     *
     * @param string|null $feedbackImages 商家处理投诉时反馈凭证的图片id，多个逗号隔开（图片id可以通过\"商户上传处理图片\"接口获取）
     *
     * @return self
     */
    public function setFeedbackImages($feedbackImages)
    {
        $this->container['feedbackImages'] = $feedbackImages;

        return $this;
    }

    /**
     * Gets operator
     *
     * @return string|null
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     *
     * @param string|null $operator 处理投诉人，字数不超过6个字
     *
     * @return self
     */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;

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


