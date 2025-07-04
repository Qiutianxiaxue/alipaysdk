<?php
/**
 * AlipayOpenSpOperationQrcodeQueryResponseModel
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
 * AlipayOpenSpOperationQrcodeQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenSpOperationQrcodeQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenSpOperationQrcodeQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'batchNo' => 'string',
        'bindAccount' => '\Alipay\OpenAPISDK\Model\RecommendAccountDTO',
        'qrCodeUrl' => 'string',
        'recommendAccountList' => '\Alipay\OpenAPISDK\Model\RecommendAccountDTO[]',
        'recommendAccounts' => '\Alipay\OpenAPISDK\Model\RecommendAccountDTO'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'batchNo' => null,
        'bindAccount' => null,
        'qrCodeUrl' => null,
        'recommendAccountList' => null,
        'recommendAccounts' => null
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
        'batchNo' => 'batch_no',
        'bindAccount' => 'bind_account',
        'qrCodeUrl' => 'qr_code_url',
        'recommendAccountList' => 'recommend_account_list',
        'recommendAccounts' => 'recommend_accounts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'batchNo' => 'setBatchNo',
        'bindAccount' => 'setBindAccount',
        'qrCodeUrl' => 'setQrCodeUrl',
        'recommendAccountList' => 'setRecommendAccountList',
        'recommendAccounts' => 'setRecommendAccounts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'batchNo' => 'getBatchNo',
        'bindAccount' => 'getBindAccount',
        'qrCodeUrl' => 'getQrCodeUrl',
        'recommendAccountList' => 'getRecommendAccountList',
        'recommendAccounts' => 'getRecommendAccounts'
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
        $this->container['batchNo'] = $data['batchNo'] ?? null;
        $this->container['bindAccount'] = $data['bindAccount'] ?? null;
        $this->container['qrCodeUrl'] = $data['qrCodeUrl'] ?? null;
        $this->container['recommendAccountList'] = $data['recommendAccountList'] ?? null;
        $this->container['recommendAccounts'] = $data['recommendAccounts'] ?? null;
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
     * Gets batchNo
     *
     * @return string|null
     */
    public function getBatchNo()
    {
        return $this->container['batchNo'];
    }

    /**
     * Sets batchNo
     *
     * @param string|null $batchNo 支付宝操作批次号
     *
     * @return self
     */
    public function setBatchNo($batchNo)
    {
        $this->container['batchNo'] = $batchNo;

        return $this;
    }

    /**
     * Gets bindAccount
     *
     * @return \Alipay\OpenAPISDK\Model\RecommendAccountDTO|null
     */
    public function getBindAccount()
    {
        return $this->container['bindAccount'];
    }

    /**
     * Sets bindAccount
     *
     * @param \Alipay\OpenAPISDK\Model\RecommendAccountDTO|null $bindAccount bindAccount
     *
     * @return self
     */
    public function setBindAccount($bindAccount)
    {
        $this->container['bindAccount'] = $bindAccount;

        return $this;
    }

    /**
     * Gets qrCodeUrl
     *
     * @return string|null
     */
    public function getQrCodeUrl()
    {
        return $this->container['qrCodeUrl'];
    }

    /**
     * Sets qrCodeUrl
     *
     * @param string|null $qrCodeUrl 二维码图片地址，urlEncode处理过。 注意： 1.有效期为24h; 2.用户扫码确认授权操作（同意/拒绝）后，支付宝将通过<a href=\"https://opendocs.alipay.com/apis/01lc2d\">alipay.open.sp.operation.result.notify</a>接口发送异步通知给服务商。
     *
     * @return self
     */
    public function setQrCodeUrl($qrCodeUrl)
    {
        $this->container['qrCodeUrl'] = $qrCodeUrl;

        return $this;
    }

    /**
     * Gets recommendAccountList
     *
     * @return \Alipay\OpenAPISDK\Model\RecommendAccountDTO[]|null
     */
    public function getRecommendAccountList()
    {
        return $this->container['recommendAccountList'];
    }

    /**
     * Sets recommendAccountList
     *
     * @param \Alipay\OpenAPISDK\Model\RecommendAccountDTO[]|null $recommendAccountList 只针对服务商代间连商家发起代运营绑定、授权时，如果传递的alipay_account不符合绑定或授权要求，这个字段会返回推荐的商家支付宝账号列表，包括：支付宝账号和名称，为保护商家信息，账号和名称都按照规范脱敏。
     *
     * @return self
     */
    public function setRecommendAccountList($recommendAccountList)
    {
        $this->container['recommendAccountList'] = $recommendAccountList;

        return $this;
    }

    /**
     * Gets recommendAccounts
     *
     * @return \Alipay\OpenAPISDK\Model\RecommendAccountDTO|null
     */
    public function getRecommendAccounts()
    {
        return $this->container['recommendAccounts'];
    }

    /**
     * Sets recommendAccounts
     *
     * @param \Alipay\OpenAPISDK\Model\RecommendAccountDTO|null $recommendAccounts recommendAccounts
     *
     * @return self
     */
    public function setRecommendAccounts($recommendAccounts)
    {
        $this->container['recommendAccounts'] = $recommendAccounts;

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


