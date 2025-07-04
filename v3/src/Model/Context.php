<?php
/**
 * Context
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
 * Context Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Context implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Context';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'actionName' => 'string',
        'first' => '\Alipay\OpenAPISDK\Model\Keyword',
        'headColor' => 'string',
        'keyword1' => '\Alipay\OpenAPISDK\Model\Keyword',
        'keyword2' => '\Alipay\OpenAPISDK\Model\Keyword',
        'remark' => '\Alipay\OpenAPISDK\Model\Keyword',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'actionName' => null,
        'first' => null,
        'headColor' => null,
        'keyword1' => null,
        'keyword2' => null,
        'remark' => null,
        'url' => null
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
        'actionName' => 'action_name',
        'first' => 'first',
        'headColor' => 'head_color',
        'keyword1' => 'keyword1',
        'keyword2' => 'keyword2',
        'remark' => 'remark',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'actionName' => 'setActionName',
        'first' => 'setFirst',
        'headColor' => 'setHeadColor',
        'keyword1' => 'setKeyword1',
        'keyword2' => 'setKeyword2',
        'remark' => 'setRemark',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'actionName' => 'getActionName',
        'first' => 'getFirst',
        'headColor' => 'getHeadColor',
        'keyword1' => 'getKeyword1',
        'keyword2' => 'getKeyword2',
        'remark' => 'getRemark',
        'url' => 'getUrl'
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
        $this->container['actionName'] = $data['actionName'] ?? null;
        $this->container['first'] = $data['first'] ?? null;
        $this->container['headColor'] = $data['headColor'] ?? null;
        $this->container['keyword1'] = $data['keyword1'] ?? null;
        $this->container['keyword2'] = $data['keyword2'] ?? null;
        $this->container['remark'] = $data['remark'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
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
     * Gets actionName
     *
     * @return string|null
     */
    public function getActionName()
    {
        return $this->container['actionName'];
    }

    /**
     * Sets actionName
     *
     * @param string|null $actionName 底部链接描述文字，如“查看详情”，最多能传8个汉字或16个英文字符，长度超出会报错
     *
     * @return self
     */
    public function setActionName($actionName)
    {
        $this->container['actionName'] = $actionName;

        return $this;
    }

    /**
     * Gets first
     *
     * @return \Alipay\OpenAPISDK\Model\Keyword|null
     */
    public function getFirst()
    {
        return $this->container['first'];
    }

    /**
     * Sets first
     *
     * @param \Alipay\OpenAPISDK\Model\Keyword|null $first first
     *
     * @return self
     */
    public function setFirst($first)
    {
        $this->container['first'] = $first;

        return $this;
    }

    /**
     * Gets headColor
     *
     * @return string|null
     */
    public function getHeadColor()
    {
        return $this->container['headColor'];
    }

    /**
     * Sets headColor
     *
     * @param string|null $headColor 顶部色条的色值
     *
     * @return self
     */
    public function setHeadColor($headColor)
    {
        $this->container['headColor'] = $headColor;

        return $this;
    }

    /**
     * Gets keyword1
     *
     * @return \Alipay\OpenAPISDK\Model\Keyword|null
     */
    public function getKeyword1()
    {
        return $this->container['keyword1'];
    }

    /**
     * Sets keyword1
     *
     * @param \Alipay\OpenAPISDK\Model\Keyword|null $keyword1 keyword1
     *
     * @return self
     */
    public function setKeyword1($keyword1)
    {
        $this->container['keyword1'] = $keyword1;

        return $this;
    }

    /**
     * Gets keyword2
     *
     * @return \Alipay\OpenAPISDK\Model\Keyword|null
     */
    public function getKeyword2()
    {
        return $this->container['keyword2'];
    }

    /**
     * Sets keyword2
     *
     * @param \Alipay\OpenAPISDK\Model\Keyword|null $keyword2 keyword2
     *
     * @return self
     */
    public function setKeyword2($keyword2)
    {
        $this->container['keyword2'] = $keyword2;

        return $this;
    }

    /**
     * Gets remark
     *
     * @return \Alipay\OpenAPISDK\Model\Keyword|null
     */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
     * Sets remark
     *
     * @param \Alipay\OpenAPISDK\Model\Keyword|null $remark remark
     *
     * @return self
     */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url 点击消息后承接页的地址
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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


