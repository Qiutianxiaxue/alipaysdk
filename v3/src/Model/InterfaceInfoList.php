<?php
/**
 * InterfaceInfoList
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
 * InterfaceInfoList Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InterfaceInfoList implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InterfaceInfoList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'interfaceName' => 'string',
        'interfaceType' => 'string',
        'interfaceUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'interfaceName' => null,
        'interfaceType' => null,
        'interfaceUrl' => null
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
        'interfaceName' => 'interface_name',
        'interfaceType' => 'interface_type',
        'interfaceUrl' => 'interface_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'interfaceName' => 'setInterfaceName',
        'interfaceType' => 'setInterfaceType',
        'interfaceUrl' => 'setInterfaceUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'interfaceName' => 'getInterfaceName',
        'interfaceType' => 'getInterfaceType',
        'interfaceUrl' => 'getInterfaceUrl'
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
        $this->container['interfaceName'] = $data['interfaceName'] ?? null;
        $this->container['interfaceType'] = $data['interfaceType'] ?? null;
        $this->container['interfaceUrl'] = $data['interfaceUrl'] ?? null;
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
     * Gets interfaceName
     *
     * @return string|null
     */
    public function getInterfaceName()
    {
        return $this->container['interfaceName'];
    }

    /**
     * Sets interfaceName
     *
     * @param string|null $interfaceName H5传入参数固定值：alipay.eco.mycar.parking.userpage.query;  小程序传入参数固定值：alipay.eco.mycar.parking.isv.homepage;  协议状态变更通知传入参数固定值： alipay.eco.mycar.parking.agreement.notify;
     *
     * @return self
     */
    public function setInterfaceName($interfaceName)
    {
        $this->container['interfaceName'] = $interfaceName;

        return $this;
    }

    /**
     * Gets interfaceType
     *
     * @return string|null
     */
    public function getInterfaceType()
    {
        return $this->container['interfaceType'];
    }

    /**
     * Sets interfaceType
     *
     * @param string|null $interfaceType H5、小程序传入参数固定值:interface_page； 通知接口传入参数固定值:interface_service;
     *
     * @return self
     */
    public function setInterfaceType($interfaceType)
    {
        $this->container['interfaceType'] = $interfaceType;

        return $this;
    }

    /**
     * Gets interfaceUrl
     *
     * @return string|null
     */
    public function getInterfaceUrl()
    {
        return $this->container['interfaceUrl'];
    }

    /**
     * Sets interfaceUrl
     *
     * @param string|null $interfaceUrl H5 SPI接口的调用地址url，协议必须为https，对整个url字符串必须进行UrlEncode编码。编码为UTF-8;  小程序SPI接口的调用地址ur格式：小程序|小程序缴费页面地址;  协议状态变更通知SPI接口的调用地址url，同H5格式;
     *
     * @return self
     */
    public function setInterfaceUrl($interfaceUrl)
    {
        $this->container['interfaceUrl'] = $interfaceUrl;

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


