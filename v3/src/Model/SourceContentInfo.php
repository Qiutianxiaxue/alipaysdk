<?php
/**
 * SourceContentInfo
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
 * SourceContentInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SourceContentInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SourceContentInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contentId' => 'string',
        'link' => 'string',
        'permissionStatus' => 'string',
        'sourceAuthor' => 'string',
        'sourceLink' => 'string',
        'sourceMediaInfos' => '\Alipay\OpenAPISDK\Model\SourceMediaInfo[]',
        'sourceOffers' => '\Alipay\OpenAPISDK\Model\SourceOffer[]',
        'sourcePublishDate' => 'string',
        'sourceStatus' => 'string',
        'sourceSummary' => 'string',
        'sourceTitle' => 'string',
        'sourceType' => 'string',
        'specialTags' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'contentId' => null,
        'link' => null,
        'permissionStatus' => null,
        'sourceAuthor' => null,
        'sourceLink' => null,
        'sourceMediaInfos' => null,
        'sourceOffers' => null,
        'sourcePublishDate' => null,
        'sourceStatus' => null,
        'sourceSummary' => null,
        'sourceTitle' => null,
        'sourceType' => null,
        'specialTags' => null
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
        'contentId' => 'content_id',
        'link' => 'link',
        'permissionStatus' => 'permission_status',
        'sourceAuthor' => 'source_author',
        'sourceLink' => 'source_link',
        'sourceMediaInfos' => 'source_media_infos',
        'sourceOffers' => 'source_offers',
        'sourcePublishDate' => 'source_publish_date',
        'sourceStatus' => 'source_status',
        'sourceSummary' => 'source_summary',
        'sourceTitle' => 'source_title',
        'sourceType' => 'source_type',
        'specialTags' => 'special_tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contentId' => 'setContentId',
        'link' => 'setLink',
        'permissionStatus' => 'setPermissionStatus',
        'sourceAuthor' => 'setSourceAuthor',
        'sourceLink' => 'setSourceLink',
        'sourceMediaInfos' => 'setSourceMediaInfos',
        'sourceOffers' => 'setSourceOffers',
        'sourcePublishDate' => 'setSourcePublishDate',
        'sourceStatus' => 'setSourceStatus',
        'sourceSummary' => 'setSourceSummary',
        'sourceTitle' => 'setSourceTitle',
        'sourceType' => 'setSourceType',
        'specialTags' => 'setSpecialTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contentId' => 'getContentId',
        'link' => 'getLink',
        'permissionStatus' => 'getPermissionStatus',
        'sourceAuthor' => 'getSourceAuthor',
        'sourceLink' => 'getSourceLink',
        'sourceMediaInfos' => 'getSourceMediaInfos',
        'sourceOffers' => 'getSourceOffers',
        'sourcePublishDate' => 'getSourcePublishDate',
        'sourceStatus' => 'getSourceStatus',
        'sourceSummary' => 'getSourceSummary',
        'sourceTitle' => 'getSourceTitle',
        'sourceType' => 'getSourceType',
        'specialTags' => 'getSpecialTags'
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
        $this->container['contentId'] = $data['contentId'] ?? null;
        $this->container['link'] = $data['link'] ?? null;
        $this->container['permissionStatus'] = $data['permissionStatus'] ?? null;
        $this->container['sourceAuthor'] = $data['sourceAuthor'] ?? null;
        $this->container['sourceLink'] = $data['sourceLink'] ?? null;
        $this->container['sourceMediaInfos'] = $data['sourceMediaInfos'] ?? null;
        $this->container['sourceOffers'] = $data['sourceOffers'] ?? null;
        $this->container['sourcePublishDate'] = $data['sourcePublishDate'] ?? null;
        $this->container['sourceStatus'] = $data['sourceStatus'] ?? null;
        $this->container['sourceSummary'] = $data['sourceSummary'] ?? null;
        $this->container['sourceTitle'] = $data['sourceTitle'] ?? null;
        $this->container['sourceType'] = $data['sourceType'] ?? null;
        $this->container['specialTags'] = $data['specialTags'] ?? null;
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
     * @param string|null $contentId 内容ID
     *
     * @return self
     */
    public function setContentId($contentId)
    {
        $this->container['contentId'] = $contentId;

        return $this;
    }

    /**
     * Gets link
     *
     * @return string|null
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param string|null $link 支付宝内容链接
     *
     * @return self
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

        return $this;
    }

    /**
     * Gets permissionStatus
     *
     * @return string|null
     */
    public function getPermissionStatus()
    {
        return $this->container['permissionStatus'];
    }

    /**
     * Sets permissionStatus
     *
     * @param string|null $permissionStatus 内容分发范围。0 - 仅创作者自己可见，1 - 所有人可见，2 - 分发范围受限。
     *
     * @return self
     */
    public function setPermissionStatus($permissionStatus)
    {
        $this->container['permissionStatus'] = $permissionStatus;

        return $this;
    }

    /**
     * Gets sourceAuthor
     *
     * @return string|null
     */
    public function getSourceAuthor()
    {
        return $this->container['sourceAuthor'];
    }

    /**
     * Sets sourceAuthor
     *
     * @param string|null $sourceAuthor 作者
     *
     * @return self
     */
    public function setSourceAuthor($sourceAuthor)
    {
        $this->container['sourceAuthor'] = $sourceAuthor;

        return $this;
    }

    /**
     * Gets sourceLink
     *
     * @return string|null
     */
    public function getSourceLink()
    {
        return $this->container['sourceLink'];
    }

    /**
     * Sets sourceLink
     *
     * @param string|null $sourceLink 来源文章的原始链接地址
     *
     * @return self
     */
    public function setSourceLink($sourceLink)
    {
        $this->container['sourceLink'] = $sourceLink;

        return $this;
    }

    /**
     * Gets sourceMediaInfos
     *
     * @return \Alipay\OpenAPISDK\Model\SourceMediaInfo[]|null
     */
    public function getSourceMediaInfos()
    {
        return $this->container['sourceMediaInfos'];
    }

    /**
     * Sets sourceMediaInfos
     *
     * @param \Alipay\OpenAPISDK\Model\SourceMediaInfo[]|null $sourceMediaInfos 素材列表
     *
     * @return self
     */
    public function setSourceMediaInfos($sourceMediaInfos)
    {
        $this->container['sourceMediaInfos'] = $sourceMediaInfos;

        return $this;
    }

    /**
     * Gets sourceOffers
     *
     * @return \Alipay\OpenAPISDK\Model\SourceOffer[]|null
     */
    public function getSourceOffers()
    {
        return $this->container['sourceOffers'];
    }

    /**
     * Sets sourceOffers
     *
     * @param \Alipay\OpenAPISDK\Model\SourceOffer[]|null $sourceOffers 关联服务
     *
     * @return self
     */
    public function setSourceOffers($sourceOffers)
    {
        $this->container['sourceOffers'] = $sourceOffers;

        return $this;
    }

    /**
     * Gets sourcePublishDate
     *
     * @return string|null
     */
    public function getSourcePublishDate()
    {
        return $this->container['sourcePublishDate'];
    }

    /**
     * Sets sourcePublishDate
     *
     * @param string|null $sourcePublishDate 文章发布时间
     *
     * @return self
     */
    public function setSourcePublishDate($sourcePublishDate)
    {
        $this->container['sourcePublishDate'] = $sourcePublishDate;

        return $this;
    }

    /**
     * Gets sourceStatus
     *
     * @return string|null
     */
    public function getSourceStatus()
    {
        return $this->container['sourceStatus'];
    }

    /**
     * Sets sourceStatus
     *
     * @param string|null $sourceStatus 内容状态 0-审核中 1-成功发布 2-审核不通过 3-己删除
     *
     * @return self
     */
    public function setSourceStatus($sourceStatus)
    {
        $this->container['sourceStatus'] = $sourceStatus;

        return $this;
    }

    /**
     * Gets sourceSummary
     *
     * @return string|null
     */
    public function getSourceSummary()
    {
        return $this->container['sourceSummary'];
    }

    /**
     * Sets sourceSummary
     *
     * @param string|null $sourceSummary 文章的摘要
     *
     * @return self
     */
    public function setSourceSummary($sourceSummary)
    {
        $this->container['sourceSummary'] = $sourceSummary;

        return $this;
    }

    /**
     * Gets sourceTitle
     *
     * @return string|null
     */
    public function getSourceTitle()
    {
        return $this->container['sourceTitle'];
    }

    /**
     * Sets sourceTitle
     *
     * @param string|null $sourceTitle 内容标题
     *
     * @return self
     */
    public function setSourceTitle($sourceTitle)
    {
        $this->container['sourceTitle'] = $sourceTitle;

        return $this;
    }

    /**
     * Gets sourceType
     *
     * @return string|null
     */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
     * Sets sourceType
     *
     * @param string|null $sourceType 内容类型（0-长图文 1-短图文 2-视频）
     *
     * @return self
     */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;

        return $this;
    }

    /**
     * Gets specialTags
     *
     * @return string[]|null
     */
    public function getSpecialTags()
    {
        return $this->container['specialTags'];
    }

    /**
     * Sets specialTags
     *
     * @param string[]|null $specialTags 平台加工后的内容标签，例如 HIGH_QUALITY: 优质
     *
     * @return self
     */
    public function setSpecialTags($specialTags)
    {
        $this->container['specialTags'] = $specialTags;

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


