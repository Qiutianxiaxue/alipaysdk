<?php
/**
 * TemplateColumnInfoDTO
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
 * TemplateColumnInfoDTO Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TemplateColumnInfoDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TemplateColumnInfoDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'code' => 'string',
        'groupTitle' => 'string',
        'iconId' => 'string',
        'moreInfo' => '\Alipay\OpenAPISDK\Model\MoreInfoDTO',
        'operateType' => 'string',
        'tag' => 'string',
        'title' => 'string',
        'value' => 'string'
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
        'groupTitle' => null,
        'iconId' => null,
        'moreInfo' => null,
        'operateType' => null,
        'tag' => null,
        'title' => null,
        'value' => null
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
        'groupTitle' => 'group_title',
        'iconId' => 'icon_id',
        'moreInfo' => 'more_info',
        'operateType' => 'operate_type',
        'tag' => 'tag',
        'title' => 'title',
        'value' => 'value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'groupTitle' => 'setGroupTitle',
        'iconId' => 'setIconId',
        'moreInfo' => 'setMoreInfo',
        'operateType' => 'setOperateType',
        'tag' => 'setTag',
        'title' => 'setTitle',
        'value' => 'setValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'groupTitle' => 'getGroupTitle',
        'iconId' => 'getIconId',
        'moreInfo' => 'getMoreInfo',
        'operateType' => 'getOperateType',
        'tag' => 'getTag',
        'title' => 'getTitle',
        'value' => 'getValue'
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
        $this->container['code'] = $data['code'] ?? null;
        $this->container['groupTitle'] = $data['groupTitle'] ?? null;
        $this->container['iconId'] = $data['iconId'] ?? null;
        $this->container['moreInfo'] = $data['moreInfo'] ?? null;
        $this->container['operateType'] = $data['operateType'] ?? null;
        $this->container['tag'] = $data['tag'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
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
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code 标准栏位：行为由支付宝统一定，同时已经分配标准Code  BALANCE：会员卡余额  POINT：积分  LEVEL：等级  TELEPHONE：联系方式  自定义栏位：行为由商户定义，自定义Code码（只要无重复）
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets groupTitle
     *
     * @return string|null
     */
    public function getGroupTitle()
    {
        return $this->container['groupTitle'];
    }

    /**
     * Sets groupTitle
     *
     * @param string|null $groupTitle 若template_style_info.column_info_layout 的值为grid，此项为宫格项所属分组标题。可空。如果需要展示该项，还需支付宝内部进行特殊配置。
     *
     * @return self
     */
    public function setGroupTitle($groupTitle)
    {
        $this->container['groupTitle'] = $groupTitle;

        return $this;
    }

    /**
     * Gets iconId
     *
     * @return string|null
     */
    public function getIconId()
    {
        return $this->container['iconId'];
    }

    /**
     * Sets iconId
     *
     * @param string|null $iconId 当template_style_info.column_info_layout 的值为grid时，此参数必填。此项为宫格项的展示icon。通过接口（alipay.offline.material.image.upload）上传图片。
     *
     * @return self
     */
    public function setIconId($iconId)
    {
        $this->container['iconId'] = $iconId;

        return $this;
    }

    /**
     * Gets moreInfo
     *
     * @return \Alipay\OpenAPISDK\Model\MoreInfoDTO|null
     */
    public function getMoreInfo()
    {
        return $this->container['moreInfo'];
    }

    /**
     * Sets moreInfo
     *
     * @param \Alipay\OpenAPISDK\Model\MoreInfoDTO|null $moreInfo moreInfo
     *
     * @return self
     */
    public function setMoreInfo($moreInfo)
    {
        $this->container['moreInfo'] = $moreInfo;

        return $this;
    }

    /**
     * Gets operateType
     *
     * @return string|null
     */
    public function getOperateType()
    {
        return $this->container['operateType'];
    }

    /**
     * Sets operateType
     *
     * @param string|null $operateType 1、openNative：打开二级页面，展现 more中descs  2、openWeb：打开URL  3、staticinfo：静态信息  注意：  不填则默认staticinfo；  标准code尽量使用staticinfo，例如TELEPHONE商家电话栏位就只支持staticinfo；
     *
     * @return self
     */
    public function setOperateType($operateType)
    {
        $this->container['operateType'] = $operateType;

        return $this;
    }

    /**
     * Gets tag
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     *
     * @param string|null $tag 只有当template_style_info.column_info_layout 的值为grid时，此参数有效。此项为宫格项标签，最多只会展示一个标签。
     *
     * @return self
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title 栏目标题
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string|null $value 卡包详情页面，卡栏位右边展现的值    TELEPHONE栏位的商家联系电话号码由此value字段传入
     *
     * @return self
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

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


