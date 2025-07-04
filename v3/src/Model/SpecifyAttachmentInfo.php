<?php
/**
 * SpecifyAttachmentInfo
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
 * SpecifyAttachmentInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SpecifyAttachmentInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SpecifyAttachmentInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allowMoreUploads' => 'bool',
        'allowMoreUploadsMaxCount' => 'int',
        'collectCertTypes' => 'string[]',
        'collectCommonCodes' => 'string[]',
        'thirdPartyUserId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'allowMoreUploads' => null,
        'allowMoreUploadsMaxCount' => null,
        'collectCertTypes' => null,
        'collectCommonCodes' => null,
        'thirdPartyUserId' => null
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
        'allowMoreUploads' => 'allow_more_uploads',
        'allowMoreUploadsMaxCount' => 'allow_more_uploads_max_count',
        'collectCertTypes' => 'collect_cert_types',
        'collectCommonCodes' => 'collect_common_codes',
        'thirdPartyUserId' => 'third_party_user_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allowMoreUploads' => 'setAllowMoreUploads',
        'allowMoreUploadsMaxCount' => 'setAllowMoreUploadsMaxCount',
        'collectCertTypes' => 'setCollectCertTypes',
        'collectCommonCodes' => 'setCollectCommonCodes',
        'thirdPartyUserId' => 'setThirdPartyUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allowMoreUploads' => 'getAllowMoreUploads',
        'allowMoreUploadsMaxCount' => 'getAllowMoreUploadsMaxCount',
        'collectCertTypes' => 'getCollectCertTypes',
        'collectCommonCodes' => 'getCollectCommonCodes',
        'thirdPartyUserId' => 'getThirdPartyUserId'
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
        $this->container['allowMoreUploads'] = $data['allowMoreUploads'] ?? null;
        $this->container['allowMoreUploadsMaxCount'] = $data['allowMoreUploadsMaxCount'] ?? null;
        $this->container['collectCertTypes'] = $data['collectCertTypes'] ?? null;
        $this->container['collectCommonCodes'] = $data['collectCommonCodes'] ?? null;
        $this->container['thirdPartyUserId'] = $data['thirdPartyUserId'] ?? null;
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
     * Gets allowMoreUploads
     *
     * @return bool|null
     */
    public function getAllowMoreUploads()
    {
        return $this->container['allowMoreUploads'];
    }

    /**
     * Sets allowMoreUploads
     *
     * @param bool|null $allowMoreUploads 是否允许上传更多附件，默认值为false。开启后，除了“collect_common_codes”中指定的附件，签署人可自由上传至多10张图片。
     *
     * @return self
     */
    public function setAllowMoreUploads($allowMoreUploads)
    {
        $this->container['allowMoreUploads'] = $allowMoreUploads;

        return $this;
    }

    /**
     * Gets allowMoreUploadsMaxCount
     *
     * @return int|null
     */
    public function getAllowMoreUploadsMaxCount()
    {
        return $this->container['allowMoreUploadsMaxCount'];
    }

    /**
     * Sets allowMoreUploadsMaxCount
     *
     * @param int|null $allowMoreUploadsMaxCount 允许上传更多附件时，可上传的最大附件数，一次流程中累计的上传附件数至多30（含“附件列表”数量）
     *
     * @return self
     */
    public function setAllowMoreUploadsMaxCount($allowMoreUploadsMaxCount)
    {
        $this->container['allowMoreUploadsMaxCount'] = $allowMoreUploadsMaxCount;

        return $this;
    }

    /**
     * Gets collectCertTypes
     *
     * @return string[]|null
     */
    public function getCollectCertTypes()
    {
        return $this->container['collectCertTypes'];
    }

    /**
     * Sets collectCertTypes
     *
     * @param string[]|null $collectCertTypes 需要签署人上传的证件照片，可进行ORC识别，目前仅支持IDCARD
     *
     * @return self
     */
    public function setCollectCertTypes($collectCertTypes)
    {
        $this->container['collectCertTypes'] = $collectCertTypes;

        return $this;
    }

    /**
     * Gets collectCommonCodes
     *
     * @return string[]|null
     */
    public function getCollectCommonCodes()
    {
        return $this->container['collectCommonCodes'];
    }

    /**
     * Sets collectCommonCodes
     *
     * @param string[]|null $collectCommonCodes 需要签署人上传的其他附件列表，即attachment_explain.details中定义的code列表
     *
     * @return self
     */
    public function setCollectCommonCodes($collectCommonCodes)
    {
        $this->container['collectCommonCodes'] = $collectCommonCodes;

        return $this;
    }

    /**
     * Gets thirdPartyUserId
     *
     * @return string|null
     */
    public function getThirdPartyUserId()
    {
        return $this->container['thirdPartyUserId'];
    }

    /**
     * Sets thirdPartyUserId
     *
     * @param string|null $thirdPartyUserId 个人唯一标识，对应签署区中指定的签署人
     *
     * @return self
     */
    public function setThirdPartyUserId($thirdPartyUserId)
    {
        $this->container['thirdPartyUserId'] = $thirdPartyUserId;

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


