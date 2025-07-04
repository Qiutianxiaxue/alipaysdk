<?php
/**
 * SubPackageInfo
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
 * SubPackageInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SubPackageInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubPackageInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'buildedPackageUrl' => 'string',
        'newBuildedPackageUrl' => 'string',
        'newSize' => 'string',
        'path' => 'string',
        'size' => 'string',
        'sourceUrl' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'buildedPackageUrl' => null,
        'newBuildedPackageUrl' => null,
        'newSize' => null,
        'path' => null,
        'size' => null,
        'sourceUrl' => null,
        'type' => null
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
        'buildedPackageUrl' => 'builded_package_url',
        'newBuildedPackageUrl' => 'new_builded_package_url',
        'newSize' => 'new_size',
        'path' => 'path',
        'size' => 'size',
        'sourceUrl' => 'source_url',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'buildedPackageUrl' => 'setBuildedPackageUrl',
        'newBuildedPackageUrl' => 'setNewBuildedPackageUrl',
        'newSize' => 'setNewSize',
        'path' => 'setPath',
        'size' => 'setSize',
        'sourceUrl' => 'setSourceUrl',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'buildedPackageUrl' => 'getBuildedPackageUrl',
        'newBuildedPackageUrl' => 'getNewBuildedPackageUrl',
        'newSize' => 'getNewSize',
        'path' => 'getPath',
        'size' => 'getSize',
        'sourceUrl' => 'getSourceUrl',
        'type' => 'getType'
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
        $this->container['buildedPackageUrl'] = $data['buildedPackageUrl'] ?? null;
        $this->container['newBuildedPackageUrl'] = $data['newBuildedPackageUrl'] ?? null;
        $this->container['newSize'] = $data['newSize'] ?? null;
        $this->container['path'] = $data['path'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['sourceUrl'] = $data['sourceUrl'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
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
     * Gets buildedPackageUrl
     *
     * @return string|null
     */
    public function getBuildedPackageUrl()
    {
        return $this->container['buildedPackageUrl'];
    }

    /**
     * Sets buildedPackageUrl
     *
     * @param string|null $buildedPackageUrl 构建好的结果地址
     *
     * @return self
     */
    public function setBuildedPackageUrl($buildedPackageUrl)
    {
        $this->container['buildedPackageUrl'] = $buildedPackageUrl;

        return $this;
    }

    /**
     * Gets newBuildedPackageUrl
     *
     * @return string|null
     */
    public function getNewBuildedPackageUrl()
    {
        return $this->container['newBuildedPackageUrl'];
    }

    /**
     * Sets newBuildedPackageUrl
     *
     * @param string|null $newBuildedPackageUrl 构建好的分包地址
     *
     * @return self
     */
    public function setNewBuildedPackageUrl($newBuildedPackageUrl)
    {
        $this->container['newBuildedPackageUrl'] = $newBuildedPackageUrl;

        return $this;
    }

    /**
     * Gets newSize
     *
     * @return string|null
     */
    public function getNewSize()
    {
        return $this->container['newSize'];
    }

    /**
     * Sets newSize
     *
     * @param string|null $newSize 2.0分包大小，单位字节
     *
     * @return self
     */
    public function setNewSize($newSize)
    {
        $this->container['newSize'] = $newSize;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string|null $path 分包路径
     *
     * @return self
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets size
     *
     * @return string|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param string|null $size 分包大小，单位字节
     *
     * @return self
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets sourceUrl
     *
     * @return string|null
     */
    public function getSourceUrl()
    {
        return $this->container['sourceUrl'];
    }

    /**
     * Sets sourceUrl
     *
     * @param string|null $sourceUrl 源码地址
     *
     * @return self
     */
    public function setSourceUrl($sourceUrl)
    {
        $this->container['sourceUrl'] = $sourceUrl;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type 分包类型： MAIN ｜ SUB
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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


