<?php
/**
 * AlipayOpenPublicMessageContentModifyModel
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
 * AlipayOpenPublicMessageContentModifyModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenPublicMessageContentModifyModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenPublicMessageContentModifyModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'benefit' => 'string',
        'content' => 'string',
        'contentId' => 'string',
        'couldComment' => 'string',
        'cover' => 'string',
        'ctype' => 'string',
        'extTags' => 'string',
        'loginIds' => 'string',
        'title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'benefit' => null,
        'content' => null,
        'contentId' => null,
        'couldComment' => null,
        'cover' => null,
        'ctype' => null,
        'extTags' => null,
        'loginIds' => null,
        'title' => null
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
        'benefit' => 'benefit',
        'content' => 'content',
        'contentId' => 'content_id',
        'couldComment' => 'could_comment',
        'cover' => 'cover',
        'ctype' => 'ctype',
        'extTags' => 'ext_tags',
        'loginIds' => 'login_ids',
        'title' => 'title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'benefit' => 'setBenefit',
        'content' => 'setContent',
        'contentId' => 'setContentId',
        'couldComment' => 'setCouldComment',
        'cover' => 'setCover',
        'ctype' => 'setCtype',
        'extTags' => 'setExtTags',
        'loginIds' => 'setLoginIds',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'benefit' => 'getBenefit',
        'content' => 'getContent',
        'contentId' => 'getContentId',
        'couldComment' => 'getCouldComment',
        'cover' => 'getCover',
        'ctype' => 'getCtype',
        'extTags' => 'getExtTags',
        'loginIds' => 'getLoginIds',
        'title' => 'getTitle'
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
        $this->container['benefit'] = $data['benefit'] ?? null;
        $this->container['content'] = $data['content'] ?? null;
        $this->container['contentId'] = $data['contentId'] ?? null;
        $this->container['couldComment'] = $data['couldComment'] ?? null;
        $this->container['cover'] = $data['cover'] ?? null;
        $this->container['ctype'] = $data['ctype'] ?? null;
        $this->container['extTags'] = $data['extTags'] ?? null;
        $this->container['loginIds'] = $data['loginIds'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
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
     * Gets benefit
     *
     * @return string|null
     */
    public function getBenefit()
    {
        return $this->container['benefit'];
    }

    /**
     * Sets benefit
     *
     * @param string|null $benefit 活动利益点，图文类型ctype为activity类型时才需要传，最多10个字符
     *
     * @return self
     */
    public function setBenefit($benefit)
    {
        $this->container['benefit'] = $benefit;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string|null $content 消息正文（支持富文本）
     *
     * @return self
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets contentId
     *
     * @return string|null
     */
    public function getContentId()
    {
        return $this->container['contentId'];
    }

    /**
     * Sets contentId
     *
     * @param string|null $contentId 内容id
     *
     * @return self
     */
    public function setContentId($contentId)
    {
        $this->container['contentId'] = $contentId;

        return $this;
    }

    /**
     * Gets couldComment
     *
     * @return string|null
     */
    public function getCouldComment()
    {
        return $this->container['couldComment'];
    }

    /**
     * Sets couldComment
     *
     * @param string|null $couldComment 是否允许评论 T:允许 F:不允许，默认不允许
     *
     * @return self
     */
    public function setCouldComment($couldComment)
    {
        $this->container['couldComment'] = $couldComment;

        return $this;
    }

    /**
     * Gets cover
     *
     * @return string|null
     */
    public function getCover()
    {
        return $this->container['cover'];
    }

    /**
     * Sets cover
     *
     * @param string|null $cover 封面图url, 尺寸为996*450，最大不超过3M，支持格式:.jpg、.png ，请先调用<ahref=\"https://docs.open.alipay.com/api_3/alipay.offline.material.image.upload\"> 图片上传接口</a>获得图片url。
     *
     * @return self
     */
    public function setCover($cover)
    {
        $this->container['cover'] = $cover;

        return $this;
    }

    /**
     * Gets ctype
     *
     * @return string|null
     */
    public function getCtype()
    {
        return $this->container['ctype'];
    }

    /**
     * Sets ctype
     *
     * @param string|null $ctype 图文类型  activity: 活动图文，不填默认普通图文
     *
     * @return self
     */
    public function setCtype($ctype)
    {
        $this->container['ctype'] = $ctype;

        return $this;
    }

    /**
     * Gets extTags
     *
     * @return string|null
     */
    public function getExtTags()
    {
        return $this->container['extTags'];
    }

    /**
     * Sets extTags
     *
     * @param string|null $extTags 关键词列表，英文逗号分隔，最多不超过5个
     *
     * @return self
     */
    public function setExtTags($extTags)
    {
        $this->container['extTags'] = $extTags;

        return $this;
    }

    /**
     * Gets loginIds
     *
     * @return string|null
     */
    public function getLoginIds()
    {
        return $this->container['loginIds'];
    }

    /**
     * Sets loginIds
     *
     * @param string|null $loginIds 可预览支付宝账号列表，需要预览时才填写， 英文逗号分隔，最多不超过10个
     *
     * @return self
     */
    public function setLoginIds($loginIds)
    {
        $this->container['loginIds'] = $loginIds;

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
     * @param string|null $title 标题
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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


