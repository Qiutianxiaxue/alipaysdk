<?php
/**
 * ZhimaCustomerJobworthCloudresumeQueryResponseModel
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
 * ZhimaCustomerJobworthCloudresumeQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ZhimaCustomerJobworthCloudresumeQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ZhimaCustomerJobworthCloudresumeQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'birthday' => 'string',
        'certificates' => '\Alipay\OpenAPISDK\Model\CloudResumeCertificateInfo[]',
        'educationExperiences' => '\Alipay\OpenAPISDK\Model\CloudResumeEducationExperience[]',
        'email' => 'string',
        'gender' => 'string',
        'intentionStatus' => 'string',
        'personDesc' => 'string',
        'phone' => 'string',
        'picUrl' => '\Alipay\OpenAPISDK\Model\CloudResumeHeadPic',
        'positionIntentions' => '\Alipay\OpenAPISDK\Model\CloudResumePositionIntention[]',
        'positionType' => 'string',
        'residentialArea' => 'string',
        'skills' => '\Alipay\OpenAPISDK\Model\CloudResumeSkillInfo[]',
        'userName' => 'string',
        'workExperiences' => '\Alipay\OpenAPISDK\Model\CloudResumeWorkExperience[]',
        'workStartDate' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'birthday' => null,
        'certificates' => null,
        'educationExperiences' => null,
        'email' => null,
        'gender' => null,
        'intentionStatus' => null,
        'personDesc' => null,
        'phone' => null,
        'picUrl' => null,
        'positionIntentions' => null,
        'positionType' => null,
        'residentialArea' => null,
        'skills' => null,
        'userName' => null,
        'workExperiences' => null,
        'workStartDate' => null
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
        'birthday' => 'birthday',
        'certificates' => 'certificates',
        'educationExperiences' => 'education_experiences',
        'email' => 'email',
        'gender' => 'gender',
        'intentionStatus' => 'intention_status',
        'personDesc' => 'person_desc',
        'phone' => 'phone',
        'picUrl' => 'pic_url',
        'positionIntentions' => 'position_intentions',
        'positionType' => 'position_type',
        'residentialArea' => 'residential_area',
        'skills' => 'skills',
        'userName' => 'user_name',
        'workExperiences' => 'work_experiences',
        'workStartDate' => 'work_start_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'birthday' => 'setBirthday',
        'certificates' => 'setCertificates',
        'educationExperiences' => 'setEducationExperiences',
        'email' => 'setEmail',
        'gender' => 'setGender',
        'intentionStatus' => 'setIntentionStatus',
        'personDesc' => 'setPersonDesc',
        'phone' => 'setPhone',
        'picUrl' => 'setPicUrl',
        'positionIntentions' => 'setPositionIntentions',
        'positionType' => 'setPositionType',
        'residentialArea' => 'setResidentialArea',
        'skills' => 'setSkills',
        'userName' => 'setUserName',
        'workExperiences' => 'setWorkExperiences',
        'workStartDate' => 'setWorkStartDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'birthday' => 'getBirthday',
        'certificates' => 'getCertificates',
        'educationExperiences' => 'getEducationExperiences',
        'email' => 'getEmail',
        'gender' => 'getGender',
        'intentionStatus' => 'getIntentionStatus',
        'personDesc' => 'getPersonDesc',
        'phone' => 'getPhone',
        'picUrl' => 'getPicUrl',
        'positionIntentions' => 'getPositionIntentions',
        'positionType' => 'getPositionType',
        'residentialArea' => 'getResidentialArea',
        'skills' => 'getSkills',
        'userName' => 'getUserName',
        'workExperiences' => 'getWorkExperiences',
        'workStartDate' => 'getWorkStartDate'
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
        $this->container['birthday'] = $data['birthday'] ?? null;
        $this->container['certificates'] = $data['certificates'] ?? null;
        $this->container['educationExperiences'] = $data['educationExperiences'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['gender'] = $data['gender'] ?? null;
        $this->container['intentionStatus'] = $data['intentionStatus'] ?? null;
        $this->container['personDesc'] = $data['personDesc'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['picUrl'] = $data['picUrl'] ?? null;
        $this->container['positionIntentions'] = $data['positionIntentions'] ?? null;
        $this->container['positionType'] = $data['positionType'] ?? null;
        $this->container['residentialArea'] = $data['residentialArea'] ?? null;
        $this->container['skills'] = $data['skills'] ?? null;
        $this->container['userName'] = $data['userName'] ?? null;
        $this->container['workExperiences'] = $data['workExperiences'] ?? null;
        $this->container['workStartDate'] = $data['workStartDate'] ?? null;
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
     * Gets birthday
     *
     * @return string|null
     */
    public function getBirthday()
    {
        return $this->container['birthday'];
    }

    /**
     * Sets birthday
     *
     * @param string|null $birthday 出生日期
     *
     * @return self
     */
    public function setBirthday($birthday)
    {
        $this->container['birthday'] = $birthday;

        return $this;
    }

    /**
     * Gets certificates
     *
     * @return \Alipay\OpenAPISDK\Model\CloudResumeCertificateInfo[]|null
     */
    public function getCertificates()
    {
        return $this->container['certificates'];
    }

    /**
     * Sets certificates
     *
     * @param \Alipay\OpenAPISDK\Model\CloudResumeCertificateInfo[]|null $certificates 证书名称
     *
     * @return self
     */
    public function setCertificates($certificates)
    {
        $this->container['certificates'] = $certificates;

        return $this;
    }

    /**
     * Gets educationExperiences
     *
     * @return \Alipay\OpenAPISDK\Model\CloudResumeEducationExperience[]|null
     */
    public function getEducationExperiences()
    {
        return $this->container['educationExperiences'];
    }

    /**
     * Sets educationExperiences
     *
     * @param \Alipay\OpenAPISDK\Model\CloudResumeEducationExperience[]|null $educationExperiences 教育经历
     *
     * @return self
     */
    public function setEducationExperiences($educationExperiences)
    {
        $this->container['educationExperiences'] = $educationExperiences;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email 用户在芝麻工作证填写的邮箱
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string|null $gender 性别
     *
     * @return self
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets intentionStatus
     *
     * @return string|null
     */
    public function getIntentionStatus()
    {
        return $this->container['intentionStatus'];
    }

    /**
     * Sets intentionStatus
     *
     * @param string|null $intentionStatus 用户的求职状态
     *
     * @return self
     */
    public function setIntentionStatus($intentionStatus)
    {
        $this->container['intentionStatus'] = $intentionStatus;

        return $this;
    }

    /**
     * Gets personDesc
     *
     * @return string|null
     */
    public function getPersonDesc()
    {
        return $this->container['personDesc'];
    }

    /**
     * Sets personDesc
     *
     * @param string|null $personDesc 用户在芝麻工作证填写的自我介绍
     *
     * @return self
     */
    public function setPersonDesc($personDesc)
    {
        $this->container['personDesc'] = $personDesc;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone 手机号码
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets picUrl
     *
     * @return \Alipay\OpenAPISDK\Model\CloudResumeHeadPic|null
     */
    public function getPicUrl()
    {
        return $this->container['picUrl'];
    }

    /**
     * Sets picUrl
     *
     * @param \Alipay\OpenAPISDK\Model\CloudResumeHeadPic|null $picUrl picUrl
     *
     * @return self
     */
    public function setPicUrl($picUrl)
    {
        $this->container['picUrl'] = $picUrl;

        return $this;
    }

    /**
     * Gets positionIntentions
     *
     * @return \Alipay\OpenAPISDK\Model\CloudResumePositionIntention[]|null
     */
    public function getPositionIntentions()
    {
        return $this->container['positionIntentions'];
    }

    /**
     * Sets positionIntentions
     *
     * @param \Alipay\OpenAPISDK\Model\CloudResumePositionIntention[]|null $positionIntentions 求职期望
     *
     * @return self
     */
    public function setPositionIntentions($positionIntentions)
    {
        $this->container['positionIntentions'] = $positionIntentions;

        return $this;
    }

    /**
     * Gets positionType
     *
     * @return string|null
     */
    public function getPositionType()
    {
        return $this->container['positionType'];
    }

    /**
     * Sets positionType
     *
     * @param string|null $positionType 职业身份
     *
     * @return self
     */
    public function setPositionType($positionType)
    {
        $this->container['positionType'] = $positionType;

        return $this;
    }

    /**
     * Gets residentialArea
     *
     * @return string|null
     */
    public function getResidentialArea()
    {
        return $this->container['residentialArea'];
    }

    /**
     * Sets residentialArea
     *
     * @param string|null $residentialArea 常驻地址
     *
     * @return self
     */
    public function setResidentialArea($residentialArea)
    {
        $this->container['residentialArea'] = $residentialArea;

        return $this;
    }

    /**
     * Gets skills
     *
     * @return \Alipay\OpenAPISDK\Model\CloudResumeSkillInfo[]|null
     */
    public function getSkills()
    {
        return $this->container['skills'];
    }

    /**
     * Sets skills
     *
     * @param \Alipay\OpenAPISDK\Model\CloudResumeSkillInfo[]|null $skills 技能信息
     *
     * @return self
     */
    public function setSkills($skills)
    {
        $this->container['skills'] = $skills;

        return $this;
    }

    /**
     * Gets userName
     *
     * @return string|null
     */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
     * Sets userName
     *
     * @param string|null $userName 姓名
     *
     * @return self
     */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;

        return $this;
    }

    /**
     * Gets workExperiences
     *
     * @return \Alipay\OpenAPISDK\Model\CloudResumeWorkExperience[]|null
     */
    public function getWorkExperiences()
    {
        return $this->container['workExperiences'];
    }

    /**
     * Sets workExperiences
     *
     * @param \Alipay\OpenAPISDK\Model\CloudResumeWorkExperience[]|null $workExperiences 工作经历
     *
     * @return self
     */
    public function setWorkExperiences($workExperiences)
    {
        $this->container['workExperiences'] = $workExperiences;

        return $this;
    }

    /**
     * Gets workStartDate
     *
     * @return int|null
     */
    public function getWorkStartDate()
    {
        return $this->container['workStartDate'];
    }

    /**
     * Sets workStartDate
     *
     * @param int|null $workStartDate 工作开始日期（时间戳）
     *
     * @return self
     */
    public function setWorkStartDate($workStartDate)
    {
        $this->container['workStartDate'] = $workStartDate;

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


