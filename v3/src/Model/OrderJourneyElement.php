<?php
/**
 * OrderJourneyElement
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
 * OrderJourneyElement Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OrderJourneyElement implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderJourneyElement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'arrival' => '\Alipay\OpenAPISDK\Model\JourneyLocation',
        'departure' => '\Alipay\OpenAPISDK\Model\JourneyLocation',
        'duration' => 'string',
        'endTime' => 'string',
        'endTimeDesc' => 'string',
        'extInfo' => '\Alipay\OpenAPISDK\Model\OrderExtInfo[]',
        'functionalServices' => '\Alipay\OpenAPISDK\Model\FunctionalService[]',
        'passagers' => '\Alipay\OpenAPISDK\Model\UserInfomation[]',
        'serviceChangeInfo' => '\Alipay\OpenAPISDK\Model\JourneyServiceChangeInfo',
        'serviceProvider' => '\Alipay\OpenAPISDK\Model\JourneyMerchantInfo',
        'startTime' => 'string',
        'startTimeDesc' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'arrival' => null,
        'departure' => null,
        'duration' => null,
        'endTime' => null,
        'endTimeDesc' => null,
        'extInfo' => null,
        'functionalServices' => null,
        'passagers' => null,
        'serviceChangeInfo' => null,
        'serviceProvider' => null,
        'startTime' => null,
        'startTimeDesc' => null
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
        'arrival' => 'arrival',
        'departure' => 'departure',
        'duration' => 'duration',
        'endTime' => 'end_time',
        'endTimeDesc' => 'end_time_desc',
        'extInfo' => 'ext_info',
        'functionalServices' => 'functional_services',
        'passagers' => 'passagers',
        'serviceChangeInfo' => 'service_change_info',
        'serviceProvider' => 'service_provider',
        'startTime' => 'start_time',
        'startTimeDesc' => 'start_time_desc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'arrival' => 'setArrival',
        'departure' => 'setDeparture',
        'duration' => 'setDuration',
        'endTime' => 'setEndTime',
        'endTimeDesc' => 'setEndTimeDesc',
        'extInfo' => 'setExtInfo',
        'functionalServices' => 'setFunctionalServices',
        'passagers' => 'setPassagers',
        'serviceChangeInfo' => 'setServiceChangeInfo',
        'serviceProvider' => 'setServiceProvider',
        'startTime' => 'setStartTime',
        'startTimeDesc' => 'setStartTimeDesc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'arrival' => 'getArrival',
        'departure' => 'getDeparture',
        'duration' => 'getDuration',
        'endTime' => 'getEndTime',
        'endTimeDesc' => 'getEndTimeDesc',
        'extInfo' => 'getExtInfo',
        'functionalServices' => 'getFunctionalServices',
        'passagers' => 'getPassagers',
        'serviceChangeInfo' => 'getServiceChangeInfo',
        'serviceProvider' => 'getServiceProvider',
        'startTime' => 'getStartTime',
        'startTimeDesc' => 'getStartTimeDesc'
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
        $this->container['arrival'] = $data['arrival'] ?? null;
        $this->container['departure'] = $data['departure'] ?? null;
        $this->container['duration'] = $data['duration'] ?? null;
        $this->container['endTime'] = $data['endTime'] ?? null;
        $this->container['endTimeDesc'] = $data['endTimeDesc'] ?? null;
        $this->container['extInfo'] = $data['extInfo'] ?? null;
        $this->container['functionalServices'] = $data['functionalServices'] ?? null;
        $this->container['passagers'] = $data['passagers'] ?? null;
        $this->container['serviceChangeInfo'] = $data['serviceChangeInfo'] ?? null;
        $this->container['serviceProvider'] = $data['serviceProvider'] ?? null;
        $this->container['startTime'] = $data['startTime'] ?? null;
        $this->container['startTimeDesc'] = $data['startTimeDesc'] ?? null;
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
     * Gets arrival
     *
     * @return \Alipay\OpenAPISDK\Model\JourneyLocation|null
     */
    public function getArrival()
    {
        return $this->container['arrival'];
    }

    /**
     * Sets arrival
     *
     * @param \Alipay\OpenAPISDK\Model\JourneyLocation|null $arrival arrival
     *
     * @return self
     */
    public function setArrival($arrival)
    {
        $this->container['arrival'] = $arrival;

        return $this;
    }

    /**
     * Gets departure
     *
     * @return \Alipay\OpenAPISDK\Model\JourneyLocation|null
     */
    public function getDeparture()
    {
        return $this->container['departure'];
    }

    /**
     * Sets departure
     *
     * @param \Alipay\OpenAPISDK\Model\JourneyLocation|null $departure departure
     *
     * @return self
     */
    public function setDeparture($departure)
    {
        $this->container['departure'] = $departure;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return string|null
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param string|null $duration 行程时长
     *
     * @return self
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets endTime
     *
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
     * Sets endTime
     *
     * @param string|null $endTime 结束时间
     *
     * @return self
     */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;

        return $this;
    }

    /**
     * Gets endTimeDesc
     *
     * @return string|null
     */
    public function getEndTimeDesc()
    {
        return $this->container['endTimeDesc'];
    }

    /**
     * Sets endTimeDesc
     *
     * @param string|null $endTimeDesc 结束时间描述（非结构化）
     *
     * @return self
     */
    public function setEndTimeDesc($endTimeDesc)
    {
        $this->container['endTimeDesc'] = $endTimeDesc;

        return $this;
    }

    /**
     * Gets extInfo
     *
     * @return \Alipay\OpenAPISDK\Model\OrderExtInfo[]|null
     */
    public function getExtInfo()
    {
        return $this->container['extInfo'];
    }

    /**
     * Sets extInfo
     *
     * @param \Alipay\OpenAPISDK\Model\OrderExtInfo[]|null $extInfo 扩展信息
     *
     * @return self
     */
    public function setExtInfo($extInfo)
    {
        $this->container['extInfo'] = $extInfo;

        return $this;
    }

    /**
     * Gets functionalServices
     *
     * @return \Alipay\OpenAPISDK\Model\FunctionalService[]|null
     */
    public function getFunctionalServices()
    {
        return $this->container['functionalServices'];
    }

    /**
     * Sets functionalServices
     *
     * @param \Alipay\OpenAPISDK\Model\FunctionalService[]|null $functionalServices 功能服务列表
     *
     * @return self
     */
    public function setFunctionalServices($functionalServices)
    {
        $this->container['functionalServices'] = $functionalServices;

        return $this;
    }

    /**
     * Gets passagers
     *
     * @return \Alipay\OpenAPISDK\Model\UserInfomation[]|null
     */
    public function getPassagers()
    {
        return $this->container['passagers'];
    }

    /**
     * Sets passagers
     *
     * @param \Alipay\OpenAPISDK\Model\UserInfomation[]|null $passagers 出行人
     *
     * @return self
     */
    public function setPassagers($passagers)
    {
        $this->container['passagers'] = $passagers;

        return $this;
    }

    /**
     * Gets serviceChangeInfo
     *
     * @return \Alipay\OpenAPISDK\Model\JourneyServiceChangeInfo|null
     */
    public function getServiceChangeInfo()
    {
        return $this->container['serviceChangeInfo'];
    }

    /**
     * Sets serviceChangeInfo
     *
     * @param \Alipay\OpenAPISDK\Model\JourneyServiceChangeInfo|null $serviceChangeInfo serviceChangeInfo
     *
     * @return self
     */
    public function setServiceChangeInfo($serviceChangeInfo)
    {
        $this->container['serviceChangeInfo'] = $serviceChangeInfo;

        return $this;
    }

    /**
     * Gets serviceProvider
     *
     * @return \Alipay\OpenAPISDK\Model\JourneyMerchantInfo|null
     */
    public function getServiceProvider()
    {
        return $this->container['serviceProvider'];
    }

    /**
     * Sets serviceProvider
     *
     * @param \Alipay\OpenAPISDK\Model\JourneyMerchantInfo|null $serviceProvider serviceProvider
     *
     * @return self
     */
    public function setServiceProvider($serviceProvider)
    {
        $this->container['serviceProvider'] = $serviceProvider;

        return $this;
    }

    /**
     * Gets startTime
     *
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     *
     * @param string|null $startTime 开始时间
     *
     * @return self
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

        return $this;
    }

    /**
     * Gets startTimeDesc
     *
     * @return string|null
     */
    public function getStartTimeDesc()
    {
        return $this->container['startTimeDesc'];
    }

    /**
     * Sets startTimeDesc
     *
     * @param string|null $startTimeDesc 开始时间描述（非结构化）
     *
     * @return self
     */
    public function setStartTimeDesc($startTimeDesc)
    {
        $this->container['startTimeDesc'] = $startTimeDesc;

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


