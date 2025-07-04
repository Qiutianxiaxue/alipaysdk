<?php
/**
 * OpenCertifyIdentityParam
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
 * OpenCertifyIdentityParam Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OpenCertifyIdentityParam implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OpenCertifyIdentityParam';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'certDigest' => 'string',
        'certName' => 'string',
        'certNo' => 'string',
        'certType' => 'string',
        'facialPictureFront' => 'string',
        'identityType' => 'string',
        'openId' => 'string',
        'phoneNo' => 'string',
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
        'certDigest' => null,
        'certName' => null,
        'certNo' => null,
        'certType' => null,
        'facialPictureFront' => null,
        'identityType' => null,
        'openId' => null,
        'phoneNo' => null,
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
        'certDigest' => 'cert_digest',
        'certName' => 'cert_name',
        'certNo' => 'cert_no',
        'certType' => 'cert_type',
        'facialPictureFront' => 'facial_picture_front',
        'identityType' => 'identity_type',
        'openId' => 'open_id',
        'phoneNo' => 'phone_no',
        'userId' => 'user_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'certDigest' => 'setCertDigest',
        'certName' => 'setCertName',
        'certNo' => 'setCertNo',
        'certType' => 'setCertType',
        'facialPictureFront' => 'setFacialPictureFront',
        'identityType' => 'setIdentityType',
        'openId' => 'setOpenId',
        'phoneNo' => 'setPhoneNo',
        'userId' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'certDigest' => 'getCertDigest',
        'certName' => 'getCertName',
        'certNo' => 'getCertNo',
        'certType' => 'getCertType',
        'facialPictureFront' => 'getFacialPictureFront',
        'identityType' => 'getIdentityType',
        'openId' => 'getOpenId',
        'phoneNo' => 'getPhoneNo',
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
        $this->container['certDigest'] = $data['certDigest'] ?? null;
        $this->container['certName'] = $data['certName'] ?? null;
        $this->container['certNo'] = $data['certNo'] ?? null;
        $this->container['certType'] = $data['certType'] ?? null;
        $this->container['facialPictureFront'] = $data['facialPictureFront'] ?? null;
        $this->container['identityType'] = $data['identityType'] ?? null;
        $this->container['openId'] = $data['openId'] ?? null;
        $this->container['phoneNo'] = $data['phoneNo'] ?? null;
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
     * Gets certDigest
     *
     * @return string|null
     */
    public function getCertDigest()
    {
        return $this->container['certDigest'];
    }

    /**
     * Sets certDigest
     *
     * @param string|null $certDigest cert_digest： 身份信息摘要
     *
     * @return self
     */
    public function setCertDigest($certDigest)
    {
        $this->container['certDigest'] = $certDigest;

        return $this;
    }

    /**
     * Gets certName
     *
     * @return string|null
     */
    public function getCertName()
    {
        return $this->container['certName'];
    }

    /**
     * Sets certName
     *
     * @param string|null $certName cert_name： 填入真实姓名
     *
     * @return self
     */
    public function setCertName($certName)
    {
        $this->container['certName'] = $certName;

        return $this;
    }

    /**
     * Gets certNo
     *
     * @return string|null
     */
    public function getCertNo()
    {
        return $this->container['certNo'];
    }

    /**
     * Sets certNo
     *
     * @param string|null $certNo cert_no： 填入姓名相匹配的证件号码
     *
     * @return self
     */
    public function setCertNo($certNo)
    {
        $this->container['certNo'] = $certNo;

        return $this;
    }

    /**
     * Gets certType
     *
     * @return string|null
     */
    public function getCertType()
    {
        return $this->container['certType'];
    }

    /**
     * Sets certType
     *
     * @param string|null $certType cert_type： 1、若为身份证，填IDENTITY_CARD； 2、若为港澳居民来往内地通行证，填HOME_VISIT_PERMIT_HK_MC； 3、若为台湾居民来往内地通行证，填HOME_VISIT_PERMIT_TAIWAN； 4、若为港澳居民居住证，填RESIDENCE_PERMIT_HK_MC； 5、若为台湾居民居住证，填RESIDENCE_PERMIT_TAIWAN； 6、外国人永久居留证，填PERMANENT_RESIDENCE_FOREIGNER；
     *
     * @return self
     */
    public function setCertType($certType)
    {
        $this->container['certType'] = $certType;

        return $this;
    }

    /**
     * Gets facialPictureFront
     *
     * @return string|null
     */
    public function getFacialPictureFront()
    {
        return $this->container['facialPictureFront'];
    }

    /**
     * Sets facialPictureFront
     *
     * @param string|null $facialPictureFront facial_picture_front： 活体人脸图片base64串，主要用于离线人脸比对
     *
     * @return self
     */
    public function setFacialPictureFront($facialPictureFront)
    {
        $this->container['facialPictureFront'] = $facialPictureFront;

        return $this;
    }

    /**
     * Gets identityType
     *
     * @return string|null
     */
    public function getIdentityType()
    {
        return $this->container['identityType'];
    }

    /**
     * Sets identityType
     *
     * @param string|null $identityType identity_type 1.若本人验证，使用CERT_INFO； 2.若代他人验证，使用AGENT_CERT_INFO；
     *
     * @return self
     */
    public function setIdentityType($identityType)
    {
        $this->container['identityType'] = $identityType;

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
     * @param string|null $openId open_id： 开放平台用户ID
     *
     * @return self
     */
    public function setOpenId($openId)
    {
        $this->container['openId'] = $openId;

        return $this;
    }

    /**
     * Gets phoneNo
     *
     * @return string|null
     */
    public function getPhoneNo()
    {
        return $this->container['phoneNo'];
    }

    /**
     * Sets phoneNo
     *
     * @param string|null $phoneNo phone_no： 填写姓名相匹配的手机号
     *
     * @return self
     */
    public function setPhoneNo($phoneNo)
    {
        $this->container['phoneNo'] = $phoneNo;

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
     * @param string|null $userId user_id： 支付宝用户ID
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


