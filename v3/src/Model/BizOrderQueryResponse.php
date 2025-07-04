<?php
/**
 * BizOrderQueryResponse
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
 * BizOrderQueryResponse Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BizOrderQueryResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BizOrderQueryResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'action' => 'string',
        'actionMode' => 'string',
        'applyId' => 'string',
        'bizContextInfo' => 'string',
        'bizId' => 'string',
        'bizType' => 'string',
        'createTime' => 'string',
        'opId' => 'string',
        'requestId' => 'string',
        'resultCode' => 'string',
        'resultDesc' => 'string',
        'status' => 'string',
        'subStatus' => 'string',
        'updateTime' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'action' => null,
        'actionMode' => null,
        'applyId' => null,
        'bizContextInfo' => null,
        'bizId' => null,
        'bizType' => null,
        'createTime' => null,
        'opId' => null,
        'requestId' => null,
        'resultCode' => null,
        'resultDesc' => null,
        'status' => null,
        'subStatus' => null,
        'updateTime' => null
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
        'action' => 'action',
        'actionMode' => 'action_mode',
        'applyId' => 'apply_id',
        'bizContextInfo' => 'biz_context_info',
        'bizId' => 'biz_id',
        'bizType' => 'biz_type',
        'createTime' => 'create_time',
        'opId' => 'op_id',
        'requestId' => 'request_id',
        'resultCode' => 'result_code',
        'resultDesc' => 'result_desc',
        'status' => 'status',
        'subStatus' => 'sub_status',
        'updateTime' => 'update_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action' => 'setAction',
        'actionMode' => 'setActionMode',
        'applyId' => 'setApplyId',
        'bizContextInfo' => 'setBizContextInfo',
        'bizId' => 'setBizId',
        'bizType' => 'setBizType',
        'createTime' => 'setCreateTime',
        'opId' => 'setOpId',
        'requestId' => 'setRequestId',
        'resultCode' => 'setResultCode',
        'resultDesc' => 'setResultDesc',
        'status' => 'setStatus',
        'subStatus' => 'setSubStatus',
        'updateTime' => 'setUpdateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action' => 'getAction',
        'actionMode' => 'getActionMode',
        'applyId' => 'getApplyId',
        'bizContextInfo' => 'getBizContextInfo',
        'bizId' => 'getBizId',
        'bizType' => 'getBizType',
        'createTime' => 'getCreateTime',
        'opId' => 'getOpId',
        'requestId' => 'getRequestId',
        'resultCode' => 'getResultCode',
        'resultDesc' => 'getResultDesc',
        'status' => 'getStatus',
        'subStatus' => 'getSubStatus',
        'updateTime' => 'getUpdateTime'
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
        $this->container['action'] = $data['action'] ?? null;
        $this->container['actionMode'] = $data['actionMode'] ?? null;
        $this->container['applyId'] = $data['applyId'] ?? null;
        $this->container['bizContextInfo'] = $data['bizContextInfo'] ?? null;
        $this->container['bizId'] = $data['bizId'] ?? null;
        $this->container['bizType'] = $data['bizType'] ?? null;
        $this->container['createTime'] = $data['createTime'] ?? null;
        $this->container['opId'] = $data['opId'] ?? null;
        $this->container['requestId'] = $data['requestId'] ?? null;
        $this->container['resultCode'] = $data['resultCode'] ?? null;
        $this->container['resultDesc'] = $data['resultDesc'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['subStatus'] = $data['subStatus'] ?? null;
        $this->container['updateTime'] = $data['updateTime'] ?? null;
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
     * Gets action
     *
     * @return string|null
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string|null $action 操作动作。  CREATE_SHOP-创建门店，  MODIFY_SHOP-修改门店，  CREATE_ITEM-创建商品，  MODIFY_ITEM-修改商品，  EFFECTIVE_ITEM-上架商品，  INVALID_ITEM-下架商品，  RESUME_ITEM-暂停售卖商品，  PAUSE_ITEM-恢复售卖商品
     *
     * @return self
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets actionMode
     *
     * @return string|null
     */
    public function getActionMode()
    {
        return $this->container['actionMode'];
    }

    /**
     * Sets actionMode
     *
     * @param string|null $actionMode 操作模式：NORMAL-普通开店
     *
     * @return self
     */
    public function setActionMode($actionMode)
    {
        $this->container['actionMode'] = $actionMode;

        return $this;
    }

    /**
     * Gets applyId
     *
     * @return string|null
     */
    public function getApplyId()
    {
        return $this->container['applyId'];
    }

    /**
     * Sets applyId
     *
     * @param string|null $applyId 支付宝流水ID
     *
     * @return self
     */
    public function setApplyId($applyId)
    {
        $this->container['applyId'] = $applyId;

        return $this;
    }

    /**
     * Gets bizContextInfo
     *
     * @return string|null
     */
    public function getBizContextInfo()
    {
        return $this->container['bizContextInfo'];
    }

    /**
     * Sets bizContextInfo
     *
     * @param string|null $bizContextInfo 流水上下文信息，JSON格式。根据action不同对应的结构也不同，JSON字段与含义可参考各个接口的请求参数。
     *
     * @return self
     */
    public function setBizContextInfo($bizContextInfo)
    {
        $this->container['bizContextInfo'] = $bizContextInfo;

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
     * @param string|null $bizId 业务主体ID。根据biz_type不同可能对应shop_id或item_id。  特别注意对于门店创建，当流水status=SUCCESS时，此字段才为shop_id，其他状态时为0或空。
     *
     * @return self
     */
    public function setBizId($bizId)
    {
        $this->container['bizId'] = $bizId;

        return $this;
    }

    /**
     * Gets bizType
     *
     * @return string|null
     */
    public function getBizType()
    {
        return $this->container['bizType'];
    }

    /**
     * Sets bizType
     *
     * @param string|null $bizType 业务类型：SHOP-店铺，ITEM-商品
     *
     * @return self
     */
    public function setBizType($bizType)
    {
        $this->container['bizType'] = $bizType;

        return $this;
    }

    /**
     * Gets createTime
     *
     * @return string|null
     */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
     * Sets createTime
     *
     * @param string|null $createTime 创建时间
     *
     * @return self
     */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;

        return $this;
    }

    /**
     * Gets opId
     *
     * @return string|null
     */
    public function getOpId()
    {
        return $this->container['opId'];
    }

    /**
     * Sets opId
     *
     * @param string|null $opId 操作用户的支付账号id
     *
     * @return self
     */
    public function setOpId($opId)
    {
        $this->container['opId'] = $opId;

        return $this;
    }

    /**
     * Gets requestId
     *
     * @return string|null
     */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
     * Sets requestId
     *
     * @param string|null $requestId 注意：此字段并非外部商户请求时传入的request_id，暂时代表支付宝内部字段，请勿用。
     *
     * @return self
     */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;

        return $this;
    }

    /**
     * Gets resultCode
     *
     * @return string|null
     */
    public function getResultCode()
    {
        return $this->container['resultCode'];
    }

    /**
     * Sets resultCode
     *
     * @param string|null $resultCode 流水处理结果码  <a href=\"https://doc.open.alipay.com/doc2/detail.htm?spm=a219a.7629140.0.0.lL9hGI&treeId=78&articleId=103834&docType=1#s2\">点此查看</a>
     *
     * @return self
     */
    public function setResultCode($resultCode)
    {
        $this->container['resultCode'] = $resultCode;

        return $this;
    }

    /**
     * Gets resultDesc
     *
     * @return string|null
     */
    public function getResultDesc()
    {
        return $this->container['resultDesc'];
    }

    /**
     * Sets resultDesc
     *
     * @param string|null $resultDesc 流水处理结果描述
     *
     * @return self
     */
    public function setResultDesc($resultDesc)
    {
        $this->container['resultDesc'] = $resultDesc;

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
     * @param string|null $status 流水状态：INIT-初始，PROCESS-处理中，SUCCESS-成功，FAIL-失败。
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets subStatus
     *
     * @return string|null
     */
    public function getSubStatus()
    {
        return $this->container['subStatus'];
    }

    /**
     * Sets subStatus
     *
     * @param string|null $subStatus 流水子状态：WAIT_CERTIFY-等待认证，LICENSE_AUDITING-证照审核中，RISK_AUDITING-风控审核中，WAIT_SIGN-等待签约，FINISH-终结。
     *
     * @return self
     */
    public function setSubStatus($subStatus)
    {
        $this->container['subStatus'] = $subStatus;

        return $this;
    }

    /**
     * Gets updateTime
     *
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
     * Sets updateTime
     *
     * @param string|null $updateTime 更新时间
     *
     * @return self
     */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;

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


