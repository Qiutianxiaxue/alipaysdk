<?php
/**
 * AlipayIserviceCcmRobotAvatarbaseQueryModel
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
 * AlipayIserviceCcmRobotAvatarbaseQueryModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayIserviceCcmRobotAvatarbaseQueryModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayIserviceCcmRobotAvatarbaseQueryModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'commodityCode' => 'string',
        'methodParams' => 'string',
        'targetMethod' => 'string',
        'tenantCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'commodityCode' => null,
        'methodParams' => null,
        'targetMethod' => null,
        'tenantCode' => null
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
        'commodityCode' => 'commodity_code',
        'methodParams' => 'method_params',
        'targetMethod' => 'target_method',
        'tenantCode' => 'tenant_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'commodityCode' => 'setCommodityCode',
        'methodParams' => 'setMethodParams',
        'targetMethod' => 'setTargetMethod',
        'tenantCode' => 'setTenantCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'commodityCode' => 'getCommodityCode',
        'methodParams' => 'getMethodParams',
        'targetMethod' => 'getTargetMethod',
        'tenantCode' => 'getTenantCode'
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
        $this->container['commodityCode'] = $data['commodityCode'] ?? null;
        $this->container['methodParams'] = $data['methodParams'] ?? null;
        $this->container['targetMethod'] = $data['targetMethod'] ?? null;
        $this->container['tenantCode'] = $data['tenantCode'] ?? null;
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
     * Gets commodityCode
     *
     * @return string|null
     */
    public function getCommodityCode()
    {
        return $this->container['commodityCode'];
    }

    /**
     * Sets commodityCode
     *
     * @param string|null $commodityCode 开通的数字人的商品码
     *
     * @return self
     */
    public function setCommodityCode($commodityCode)
    {
        $this->container['commodityCode'] = $commodityCode;

        return $this;
    }

    /**
     * Gets methodParams
     *
     * @return string|null
     */
    public function getMethodParams()
    {
        return $this->container['methodParams'];
    }

    /**
     * Sets methodParams
     *
     * @param string|null $methodParams method_params:对应target_method请求方法的具体传参值k-v map
     *
     * @return self
     */
    public function setMethodParams($methodParams)
    {
        $this->container['methodParams'] = $methodParams;

        return $this;
    }

    /**
     * Gets targetMethod
     *
     * @return string|null
     */
    public function getTargetMethod()
    {
        return $this->container['targetMethod'];
    }

    /**
     * Sets targetMethod
     *
     * @param string|null $targetMethod targetMethod；数字人目标方法调用
     *
     * @return self
     */
    public function setTargetMethod($targetMethod)
    {
        $this->container['targetMethod'] = $targetMethod;

        return $this;
    }

    /**
     * Gets tenantCode
     *
     * @return string|null
     */
    public function getTenantCode()
    {
        return $this->container['tenantCode'];
    }

    /**
     * Sets tenantCode
     *
     * @param string|null $tenantCode 租户code&租户id，对于子部门客户需要上传子部门id
     *
     * @return self
     */
    public function setTenantCode($tenantCode)
    {
        $this->container['tenantCode'] = $tenantCode;

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


