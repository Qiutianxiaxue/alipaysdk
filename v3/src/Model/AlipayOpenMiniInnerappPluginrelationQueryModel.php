<?php
/**
 * AlipayOpenMiniInnerappPluginrelationQueryModel
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
 * AlipayOpenMiniInnerappPluginrelationQueryModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenMiniInnerappPluginrelationQueryModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenMiniInnerappPluginrelationQueryModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'miniAppIdList' => 'string[]',
        'pageNum' => 'int',
        'pageSize' => 'int',
        'pluginId' => 'string',
        'pluginRelationStatusList' => 'string[]',
        'runModelType' => 'string',
        'showBetaInfo' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'miniAppIdList' => null,
        'pageNum' => null,
        'pageSize' => null,
        'pluginId' => null,
        'pluginRelationStatusList' => null,
        'runModelType' => null,
        'showBetaInfo' => null
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
        'miniAppIdList' => 'mini_app_id_list',
        'pageNum' => 'page_num',
        'pageSize' => 'page_size',
        'pluginId' => 'plugin_id',
        'pluginRelationStatusList' => 'plugin_relation_status_list',
        'runModelType' => 'run_model_type',
        'showBetaInfo' => 'show_beta_info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'miniAppIdList' => 'setMiniAppIdList',
        'pageNum' => 'setPageNum',
        'pageSize' => 'setPageSize',
        'pluginId' => 'setPluginId',
        'pluginRelationStatusList' => 'setPluginRelationStatusList',
        'runModelType' => 'setRunModelType',
        'showBetaInfo' => 'setShowBetaInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'miniAppIdList' => 'getMiniAppIdList',
        'pageNum' => 'getPageNum',
        'pageSize' => 'getPageSize',
        'pluginId' => 'getPluginId',
        'pluginRelationStatusList' => 'getPluginRelationStatusList',
        'runModelType' => 'getRunModelType',
        'showBetaInfo' => 'getShowBetaInfo'
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
        $this->container['miniAppIdList'] = $data['miniAppIdList'] ?? null;
        $this->container['pageNum'] = $data['pageNum'] ?? null;
        $this->container['pageSize'] = $data['pageSize'] ?? null;
        $this->container['pluginId'] = $data['pluginId'] ?? null;
        $this->container['pluginRelationStatusList'] = $data['pluginRelationStatusList'] ?? null;
        $this->container['runModelType'] = $data['runModelType'] ?? null;
        $this->container['showBetaInfo'] = $data['showBetaInfo'] ?? null;
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
     * Gets miniAppIdList
     *
     * @return string[]|null
     */
    public function getMiniAppIdList()
    {
        return $this->container['miniAppIdList'];
    }

    /**
     * Sets miniAppIdList
     *
     * @param string[]|null $miniAppIdList 应用ID列表
     *
     * @return self
     */
    public function setMiniAppIdList($miniAppIdList)
    {
        $this->container['miniAppIdList'] = $miniAppIdList;

        return $this;
    }

    /**
     * Gets pageNum
     *
     * @return int|null
     */
    public function getPageNum()
    {
        return $this->container['pageNum'];
    }

    /**
     * Sets pageNum
     *
     * @param int|null $pageNum 页码
     *
     * @return self
     */
    public function setPageNum($pageNum)
    {
        $this->container['pageNum'] = $pageNum;

        return $this;
    }

    /**
     * Gets pageSize
     *
     * @return int|null
     */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
     * Sets pageSize
     *
     * @param int|null $pageSize 页大小
     *
     * @return self
     */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;

        return $this;
    }

    /**
     * Gets pluginId
     *
     * @return string|null
     */
    public function getPluginId()
    {
        return $this->container['pluginId'];
    }

    /**
     * Sets pluginId
     *
     * @param string|null $pluginId 插件ID
     *
     * @return self
     */
    public function setPluginId($pluginId)
    {
        $this->container['pluginId'] = $pluginId;

        return $this;
    }

    /**
     * Gets pluginRelationStatusList
     *
     * @return string[]|null
     */
    public function getPluginRelationStatusList()
    {
        return $this->container['pluginRelationStatusList'];
    }

    /**
     * Sets pluginRelationStatusList
     *
     * @param string[]|null $pluginRelationStatusList 插件使用关系状态，取值包括WORKING/WAIT_WORKING/STOP_WORKING/EXECUTING
     *
     * @return self
     */
    public function setPluginRelationStatusList($pluginRelationStatusList)
    {
        $this->container['pluginRelationStatusList'] = $pluginRelationStatusList;

        return $this;
    }

    /**
     * Gets runModelType
     *
     * @return string|null
     */
    public function getRunModelType()
    {
        return $this->container['runModelType'];
    }

    /**
     * Sets runModelType
     *
     * @param string|null $runModelType 运行类型，取值包括ONLINE/TRIAL/REVIEW/DEBUG
     *
     * @return self
     */
    public function setRunModelType($runModelType)
    {
        $this->container['runModelType'] = $runModelType;

        return $this;
    }

    /**
     * Gets showBetaInfo
     *
     * @return bool|null
     */
    public function getShowBetaInfo()
    {
        return $this->container['showBetaInfo'];
    }

    /**
     * Sets showBetaInfo
     *
     * @param bool|null $showBetaInfo 是否展示邀测信息
     *
     * @return self
     */
    public function setShowBetaInfo($showBetaInfo)
    {
        $this->container['showBetaInfo'] = $showBetaInfo;

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


