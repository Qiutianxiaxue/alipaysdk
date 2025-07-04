<?php
/**
 * SearchOrderDetailData
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
 * SearchOrderDetailData Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SearchOrderDetailData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SearchOrderDetailData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accessType' => 'string',
        'appCategory' => 'string',
        'appIcon' => 'string',
        'appName' => 'string',
        'appStatus' => 'string',
        'appid' => 'string',
        'baseOrderStatus' => '\Alipay\OpenAPISDK\Model\OrderStatusData',
        'bizId' => 'string',
        'boxOrderStatus' => '\Alipay\OpenAPISDK\Model\OrderStatusData',
        'boxStatus' => 'string',
        'brandTemplateId' => 'string',
        'brandboxOrderstatus' => '\Alipay\OpenAPISDK\Model\OrderStatusData',
        'canModifyKeyword' => 'bool',
        'describe' => 'string',
        'detailBaseItems' => '\Alipay\OpenAPISDK\Model\SearchOrderDetailDataBaseItems',
        'detailBrandItems' => '\Alipay\OpenAPISDK\Model\SearchOrderDetailDataBrandItems',
        'detailServiceItems' => '\Alipay\OpenAPISDK\Model\SearchOrderDetailDataServiceItems',
        'finalStatus' => 'string',
        'gmtmodified' => 'string',
        'keywordGmtModified' => 'string',
        'onlineTime' => 'string',
        'operatorType' => 'string',
        'orderId' => 'string',
        'partnerType' => 'string',
        'rejectNode' => 'string',
        'rejectReason' => 'string',
        'sceneCode' => 'string',
        'sceneName' => 'string',
        'serviceCode' => 'string',
        'serviceName' => 'string',
        'status' => 'string',
        'subServiceCode' => 'string',
        'templateId' => 'string',
        'templateName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'accessType' => null,
        'appCategory' => null,
        'appIcon' => null,
        'appName' => null,
        'appStatus' => null,
        'appid' => null,
        'baseOrderStatus' => null,
        'bizId' => null,
        'boxOrderStatus' => null,
        'boxStatus' => null,
        'brandTemplateId' => null,
        'brandboxOrderstatus' => null,
        'canModifyKeyword' => null,
        'describe' => null,
        'detailBaseItems' => null,
        'detailBrandItems' => null,
        'detailServiceItems' => null,
        'finalStatus' => null,
        'gmtmodified' => null,
        'keywordGmtModified' => null,
        'onlineTime' => null,
        'operatorType' => null,
        'orderId' => null,
        'partnerType' => null,
        'rejectNode' => null,
        'rejectReason' => null,
        'sceneCode' => null,
        'sceneName' => null,
        'serviceCode' => null,
        'serviceName' => null,
        'status' => null,
        'subServiceCode' => null,
        'templateId' => null,
        'templateName' => null
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
        'accessType' => 'access_type',
        'appCategory' => 'app_category',
        'appIcon' => 'app_icon',
        'appName' => 'app_name',
        'appStatus' => 'app_status',
        'appid' => 'appid',
        'baseOrderStatus' => 'base_order_status',
        'bizId' => 'biz_id',
        'boxOrderStatus' => 'box_order_status',
        'boxStatus' => 'box_status',
        'brandTemplateId' => 'brand_template_id',
        'brandboxOrderstatus' => 'brandbox_orderstatus',
        'canModifyKeyword' => 'can_modify_keyword',
        'describe' => 'describe',
        'detailBaseItems' => 'detail_base_items',
        'detailBrandItems' => 'detail_brand_items',
        'detailServiceItems' => 'detail_service_items',
        'finalStatus' => 'final_status',
        'gmtmodified' => 'gmtmodified',
        'keywordGmtModified' => 'keyword_gmt_modified',
        'onlineTime' => 'online_time',
        'operatorType' => 'operator_type',
        'orderId' => 'order_id',
        'partnerType' => 'partner_type',
        'rejectNode' => 'reject_node',
        'rejectReason' => 'reject_reason',
        'sceneCode' => 'scene_code',
        'sceneName' => 'scene_name',
        'serviceCode' => 'service_code',
        'serviceName' => 'service_name',
        'status' => 'status',
        'subServiceCode' => 'sub_service_code',
        'templateId' => 'template_id',
        'templateName' => 'template_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accessType' => 'setAccessType',
        'appCategory' => 'setAppCategory',
        'appIcon' => 'setAppIcon',
        'appName' => 'setAppName',
        'appStatus' => 'setAppStatus',
        'appid' => 'setAppid',
        'baseOrderStatus' => 'setBaseOrderStatus',
        'bizId' => 'setBizId',
        'boxOrderStatus' => 'setBoxOrderStatus',
        'boxStatus' => 'setBoxStatus',
        'brandTemplateId' => 'setBrandTemplateId',
        'brandboxOrderstatus' => 'setBrandboxOrderstatus',
        'canModifyKeyword' => 'setCanModifyKeyword',
        'describe' => 'setDescribe',
        'detailBaseItems' => 'setDetailBaseItems',
        'detailBrandItems' => 'setDetailBrandItems',
        'detailServiceItems' => 'setDetailServiceItems',
        'finalStatus' => 'setFinalStatus',
        'gmtmodified' => 'setGmtmodified',
        'keywordGmtModified' => 'setKeywordGmtModified',
        'onlineTime' => 'setOnlineTime',
        'operatorType' => 'setOperatorType',
        'orderId' => 'setOrderId',
        'partnerType' => 'setPartnerType',
        'rejectNode' => 'setRejectNode',
        'rejectReason' => 'setRejectReason',
        'sceneCode' => 'setSceneCode',
        'sceneName' => 'setSceneName',
        'serviceCode' => 'setServiceCode',
        'serviceName' => 'setServiceName',
        'status' => 'setStatus',
        'subServiceCode' => 'setSubServiceCode',
        'templateId' => 'setTemplateId',
        'templateName' => 'setTemplateName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accessType' => 'getAccessType',
        'appCategory' => 'getAppCategory',
        'appIcon' => 'getAppIcon',
        'appName' => 'getAppName',
        'appStatus' => 'getAppStatus',
        'appid' => 'getAppid',
        'baseOrderStatus' => 'getBaseOrderStatus',
        'bizId' => 'getBizId',
        'boxOrderStatus' => 'getBoxOrderStatus',
        'boxStatus' => 'getBoxStatus',
        'brandTemplateId' => 'getBrandTemplateId',
        'brandboxOrderstatus' => 'getBrandboxOrderstatus',
        'canModifyKeyword' => 'getCanModifyKeyword',
        'describe' => 'getDescribe',
        'detailBaseItems' => 'getDetailBaseItems',
        'detailBrandItems' => 'getDetailBrandItems',
        'detailServiceItems' => 'getDetailServiceItems',
        'finalStatus' => 'getFinalStatus',
        'gmtmodified' => 'getGmtmodified',
        'keywordGmtModified' => 'getKeywordGmtModified',
        'onlineTime' => 'getOnlineTime',
        'operatorType' => 'getOperatorType',
        'orderId' => 'getOrderId',
        'partnerType' => 'getPartnerType',
        'rejectNode' => 'getRejectNode',
        'rejectReason' => 'getRejectReason',
        'sceneCode' => 'getSceneCode',
        'sceneName' => 'getSceneName',
        'serviceCode' => 'getServiceCode',
        'serviceName' => 'getServiceName',
        'status' => 'getStatus',
        'subServiceCode' => 'getSubServiceCode',
        'templateId' => 'getTemplateId',
        'templateName' => 'getTemplateName'
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
        $this->container['accessType'] = $data['accessType'] ?? null;
        $this->container['appCategory'] = $data['appCategory'] ?? null;
        $this->container['appIcon'] = $data['appIcon'] ?? null;
        $this->container['appName'] = $data['appName'] ?? null;
        $this->container['appStatus'] = $data['appStatus'] ?? null;
        $this->container['appid'] = $data['appid'] ?? null;
        $this->container['baseOrderStatus'] = $data['baseOrderStatus'] ?? null;
        $this->container['bizId'] = $data['bizId'] ?? null;
        $this->container['boxOrderStatus'] = $data['boxOrderStatus'] ?? null;
        $this->container['boxStatus'] = $data['boxStatus'] ?? null;
        $this->container['brandTemplateId'] = $data['brandTemplateId'] ?? null;
        $this->container['brandboxOrderstatus'] = $data['brandboxOrderstatus'] ?? null;
        $this->container['canModifyKeyword'] = $data['canModifyKeyword'] ?? null;
        $this->container['describe'] = $data['describe'] ?? null;
        $this->container['detailBaseItems'] = $data['detailBaseItems'] ?? null;
        $this->container['detailBrandItems'] = $data['detailBrandItems'] ?? null;
        $this->container['detailServiceItems'] = $data['detailServiceItems'] ?? null;
        $this->container['finalStatus'] = $data['finalStatus'] ?? null;
        $this->container['gmtmodified'] = $data['gmtmodified'] ?? null;
        $this->container['keywordGmtModified'] = $data['keywordGmtModified'] ?? null;
        $this->container['onlineTime'] = $data['onlineTime'] ?? null;
        $this->container['operatorType'] = $data['operatorType'] ?? null;
        $this->container['orderId'] = $data['orderId'] ?? null;
        $this->container['partnerType'] = $data['partnerType'] ?? null;
        $this->container['rejectNode'] = $data['rejectNode'] ?? null;
        $this->container['rejectReason'] = $data['rejectReason'] ?? null;
        $this->container['sceneCode'] = $data['sceneCode'] ?? null;
        $this->container['sceneName'] = $data['sceneName'] ?? null;
        $this->container['serviceCode'] = $data['serviceCode'] ?? null;
        $this->container['serviceName'] = $data['serviceName'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['subServiceCode'] = $data['subServiceCode'] ?? null;
        $this->container['templateId'] = $data['templateId'] ?? null;
        $this->container['templateName'] = $data['templateName'] ?? null;
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
     * Gets accessType
     *
     * @return string|null
     */
    public function getAccessType()
    {
        return $this->container['accessType'];
    }

    /**
     * Sets accessType
     *
     * @param string|null $accessType 申请单类型 BASE：基础信息， BRAND_BOX：品牌直达，SERVICE_BOX服务直达
     *
     * @return self
     */
    public function setAccessType($accessType)
    {
        $this->container['accessType'] = $accessType;

        return $this;
    }

    /**
     * Gets appCategory
     *
     * @return string|null
     */
    public function getAppCategory()
    {
        return $this->container['appCategory'];
    }

    /**
     * Sets appCategory
     *
     * @param string|null $appCategory 小程序类目名
     *
     * @return self
     */
    public function setAppCategory($appCategory)
    {
        $this->container['appCategory'] = $appCategory;

        return $this;
    }

    /**
     * Gets appIcon
     *
     * @return string|null
     */
    public function getAppIcon()
    {
        return $this->container['appIcon'];
    }

    /**
     * Sets appIcon
     *
     * @param string|null $appIcon 小程序图标
     *
     * @return self
     */
    public function setAppIcon($appIcon)
    {
        $this->container['appIcon'] = $appIcon;

        return $this;
    }

    /**
     * Gets appName
     *
     * @return string|null
     */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
     * Sets appName
     *
     * @param string|null $appName 小程序名称
     *
     * @return self
     */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;

        return $this;
    }

    /**
     * Gets appStatus
     *
     * @return string|null
     */
    public function getAppStatus()
    {
        return $this->container['appStatus'];
    }

    /**
     * Sets appStatus
     *
     * @param string|null $appStatus 小程序状态
     *
     * @return self
     */
    public function setAppStatus($appStatus)
    {
        $this->container['appStatus'] = $appStatus;

        return $this;
    }

    /**
     * Gets appid
     *
     * @return string|null
     */
    public function getAppid()
    {
        return $this->container['appid'];
    }

    /**
     * Sets appid
     *
     * @param string|null $appid 小程序ID
     *
     * @return self
     */
    public function setAppid($appid)
    {
        $this->container['appid'] = $appid;

        return $this;
    }

    /**
     * Gets baseOrderStatus
     *
     * @return \Alipay\OpenAPISDK\Model\OrderStatusData|null
     */
    public function getBaseOrderStatus()
    {
        return $this->container['baseOrderStatus'];
    }

    /**
     * Sets baseOrderStatus
     *
     * @param \Alipay\OpenAPISDK\Model\OrderStatusData|null $baseOrderStatus baseOrderStatus
     *
     * @return self
     */
    public function setBaseOrderStatus($baseOrderStatus)
    {
        $this->container['baseOrderStatus'] = $baseOrderStatus;

        return $this;
    }

    /**
     * Gets bizId
     *
     * @return string|null
     */
    public function getBizId()
    {
        return $this->container['bizId'];
    }

    /**
     * Sets bizId
     *
     * @param string|null $bizId bizid 业务id
     *
     * @return self
     */
    public function setBizId($bizId)
    {
        $this->container['bizId'] = $bizId;

        return $this;
    }

    /**
     * Gets boxOrderStatus
     *
     * @return \Alipay\OpenAPISDK\Model\OrderStatusData|null
     */
    public function getBoxOrderStatus()
    {
        return $this->container['boxOrderStatus'];
    }

    /**
     * Sets boxOrderStatus
     *
     * @param \Alipay\OpenAPISDK\Model\OrderStatusData|null $boxOrderStatus boxOrderStatus
     *
     * @return self
     */
    public function setBoxOrderStatus($boxOrderStatus)
    {
        $this->container['boxOrderStatus'] = $boxOrderStatus;

        return $this;
    }

    /**
     * Gets boxStatus
     *
     * @return string|null
     */
    public function getBoxStatus()
    {
        return $this->container['boxStatus'];
    }

    /**
     * Sets boxStatus
     *
     * @param string|null $boxStatus 上下架状态 ONLINE OFFLINE
     *
     * @return self
     */
    public function setBoxStatus($boxStatus)
    {
        $this->container['boxStatus'] = $boxStatus;

        return $this;
    }

    /**
     * Gets brandTemplateId
     *
     * @return string|null
     */
    public function getBrandTemplateId()
    {
        return $this->container['brandTemplateId'];
    }

    /**
     * Sets brandTemplateId
     *
     * @param string|null $brandTemplateId 品牌的模板id ONE_WITH_TWO：一拖二、DEFAULT：一拖四
     *
     * @return self
     */
    public function setBrandTemplateId($brandTemplateId)
    {
        $this->container['brandTemplateId'] = $brandTemplateId;

        return $this;
    }

    /**
     * Gets brandboxOrderstatus
     *
     * @return \Alipay\OpenAPISDK\Model\OrderStatusData|null
     */
    public function getBrandboxOrderstatus()
    {
        return $this->container['brandboxOrderstatus'];
    }

    /**
     * Sets brandboxOrderstatus
     *
     * @param \Alipay\OpenAPISDK\Model\OrderStatusData|null $brandboxOrderstatus brandboxOrderstatus
     *
     * @return self
     */
    public function setBrandboxOrderstatus($brandboxOrderstatus)
    {
        $this->container['brandboxOrderstatus'] = $brandboxOrderstatus;

        return $this;
    }

    /**
     * Gets canModifyKeyword
     *
     * @return bool|null
     */
    public function getCanModifyKeyword()
    {
        return $this->container['canModifyKeyword'];
    }

    /**
     * Sets canModifyKeyword
     *
     * @param bool|null $canModifyKeyword 是否可修改关键词
     *
     * @return self
     */
    public function setCanModifyKeyword($canModifyKeyword)
    {
        $this->container['canModifyKeyword'] = $canModifyKeyword;

        return $this;
    }

    /**
     * Gets describe
     *
     * @return string|null
     */
    public function getDescribe()
    {
        return $this->container['describe'];
    }

    /**
     * Sets describe
     *
     * @param string|null $describe 服务描述
     *
     * @return self
     */
    public function setDescribe($describe)
    {
        $this->container['describe'] = $describe;

        return $this;
    }

    /**
     * Gets detailBaseItems
     *
     * @return \Alipay\OpenAPISDK\Model\SearchOrderDetailDataBaseItems|null
     */
    public function getDetailBaseItems()
    {
        return $this->container['detailBaseItems'];
    }

    /**
     * Sets detailBaseItems
     *
     * @param \Alipay\OpenAPISDK\Model\SearchOrderDetailDataBaseItems|null $detailBaseItems detailBaseItems
     *
     * @return self
     */
    public function setDetailBaseItems($detailBaseItems)
    {
        $this->container['detailBaseItems'] = $detailBaseItems;

        return $this;
    }

    /**
     * Gets detailBrandItems
     *
     * @return \Alipay\OpenAPISDK\Model\SearchOrderDetailDataBrandItems|null
     */
    public function getDetailBrandItems()
    {
        return $this->container['detailBrandItems'];
    }

    /**
     * Sets detailBrandItems
     *
     * @param \Alipay\OpenAPISDK\Model\SearchOrderDetailDataBrandItems|null $detailBrandItems detailBrandItems
     *
     * @return self
     */
    public function setDetailBrandItems($detailBrandItems)
    {
        $this->container['detailBrandItems'] = $detailBrandItems;

        return $this;
    }

    /**
     * Gets detailServiceItems
     *
     * @return \Alipay\OpenAPISDK\Model\SearchOrderDetailDataServiceItems|null
     */
    public function getDetailServiceItems()
    {
        return $this->container['detailServiceItems'];
    }

    /**
     * Sets detailServiceItems
     *
     * @param \Alipay\OpenAPISDK\Model\SearchOrderDetailDataServiceItems|null $detailServiceItems detailServiceItems
     *
     * @return self
     */
    public function setDetailServiceItems($detailServiceItems)
    {
        $this->container['detailServiceItems'] = $detailServiceItems;

        return $this;
    }

    /**
     * Gets finalStatus
     *
     * @return string|null
     */
    public function getFinalStatus()
    {
        return $this->container['finalStatus'];
    }

    /**
     * Sets finalStatus
     *
     * @param string|null $finalStatus 最终状态
     *
     * @return self
     */
    public function setFinalStatus($finalStatus)
    {
        $this->container['finalStatus'] = $finalStatus;

        return $this;
    }

    /**
     * Gets gmtmodified
     *
     * @return string|null
     */
    public function getGmtmodified()
    {
        return $this->container['gmtmodified'];
    }

    /**
     * Sets gmtmodified
     *
     * @param string|null $gmtmodified 最后修改时间
     *
     * @return self
     */
    public function setGmtmodified($gmtmodified)
    {
        $this->container['gmtmodified'] = $gmtmodified;

        return $this;
    }

    /**
     * Gets keywordGmtModified
     *
     * @return string|null
     */
    public function getKeywordGmtModified()
    {
        return $this->container['keywordGmtModified'];
    }

    /**
     * Sets keywordGmtModified
     *
     * @param string|null $keywordGmtModified 关键词的修改时间
     *
     * @return self
     */
    public function setKeywordGmtModified($keywordGmtModified)
    {
        $this->container['keywordGmtModified'] = $keywordGmtModified;

        return $this;
    }

    /**
     * Gets onlineTime
     *
     * @return string|null
     */
    public function getOnlineTime()
    {
        return $this->container['onlineTime'];
    }

    /**
     * Sets onlineTime
     *
     * @param string|null $onlineTime 上架时间
     *
     * @return self
     */
    public function setOnlineTime($onlineTime)
    {
        $this->container['onlineTime'] = $onlineTime;

        return $this;
    }

    /**
     * Gets operatorType
     *
     * @return string|null
     */
    public function getOperatorType()
    {
        return $this->container['operatorType'];
    }

    /**
     * Sets operatorType
     *
     * @param string|null $operatorType 操作人员类型
     *
     * @return self
     */
    public function setOperatorType($operatorType)
    {
        $this->container['operatorType'] = $operatorType;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string|null $orderId 申请单id
     *
     * @return self
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets partnerType
     *
     * @return string|null
     */
    public function getPartnerType()
    {
        return $this->container['partnerType'];
    }

    /**
     * Sets partnerType
     *
     * @param string|null $partnerType 查询服务提供者生态类型 一二三方 1 | 2 | 3
     *
     * @return self
     */
    public function setPartnerType($partnerType)
    {
        $this->container['partnerType'] = $partnerType;

        return $this;
    }

    /**
     * Gets rejectNode
     *
     * @return string|null
     */
    public function getRejectNode()
    {
        return $this->container['rejectNode'];
    }

    /**
     * Sets rejectNode
     *
     * @param string|null $rejectNode 驳回节点
     *
     * @return self
     */
    public function setRejectNode($rejectNode)
    {
        $this->container['rejectNode'] = $rejectNode;

        return $this;
    }

    /**
     * Gets rejectReason
     *
     * @return string|null
     */
    public function getRejectReason()
    {
        return $this->container['rejectReason'];
    }

    /**
     * Sets rejectReason
     *
     * @param string|null $rejectReason 驳回原因
     *
     * @return self
     */
    public function setRejectReason($rejectReason)
    {
        $this->container['rejectReason'] = $rejectReason;

        return $this;
    }

    /**
     * Gets sceneCode
     *
     * @return string|null
     */
    public function getSceneCode()
    {
        return $this->container['sceneCode'];
    }

    /**
     * Sets sceneCode
     *
     * @param string|null $sceneCode 场景码
     *
     * @return self
     */
    public function setSceneCode($sceneCode)
    {
        $this->container['sceneCode'] = $sceneCode;

        return $this;
    }

    /**
     * Gets sceneName
     *
     * @return string|null
     */
    public function getSceneName()
    {
        return $this->container['sceneName'];
    }

    /**
     * Sets sceneName
     *
     * @param string|null $sceneName 场景名称
     *
     * @return self
     */
    public function setSceneName($sceneName)
    {
        $this->container['sceneName'] = $sceneName;

        return $this;
    }

    /**
     * Gets serviceCode
     *
     * @return string|null
     */
    public function getServiceCode()
    {
        return $this->container['serviceCode'];
    }

    /**
     * Sets serviceCode
     *
     * @param string|null $serviceCode 服务code
     *
     * @return self
     */
    public function setServiceCode($serviceCode)
    {
        $this->container['serviceCode'] = $serviceCode;

        return $this;
    }

    /**
     * Gets serviceName
     *
     * @return string|null
     */
    public function getServiceName()
    {
        return $this->container['serviceName'];
    }

    /**
     * Sets serviceName
     *
     * @param string|null $serviceName 服务名
     *
     * @return self
     */
    public function setServiceName($serviceName)
    {
        $this->container['serviceName'] = $serviceName;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status 申请单状态 AGREE、REJECT、AUDIT
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets subServiceCode
     *
     * @return string|null
     */
    public function getSubServiceCode()
    {
        return $this->container['subServiceCode'];
    }

    /**
     * Sets subServiceCode
     *
     * @param string|null $subServiceCode 二级服务code
     *
     * @return self
     */
    public function setSubServiceCode($subServiceCode)
    {
        $this->container['subServiceCode'] = $subServiceCode;

        return $this;
    }

    /**
     * Gets templateId
     *
     * @return string|null
     */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
     * Sets templateId
     *
     * @param string|null $templateId 模板Id
     *
     * @return self
     */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;

        return $this;
    }

    /**
     * Gets templateName
     *
     * @return string|null
     */
    public function getTemplateName()
    {
        return $this->container['templateName'];
    }

    /**
     * Sets templateName
     *
     * @param string|null $templateName 模板名称
     *
     * @return self
     */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;

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


