<?php
/**
 * JobWorthPositionInfo
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
 * JobWorthPositionInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class JobWorthPositionInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'JobWorthPositionInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'age' => 'string',
        'benefit' => 'string',
        'certifications' => 'string',
        'companyCertificate' => 'string',
        'companyLogoAftsId' => 'string',
        'companyName' => 'string',
        'count' => 'int',
        'education' => 'string',
        'gender' => 'string',
        'kaPositionId' => 'string',
        'positionDesc' => 'string',
        'positionId' => 'string',
        'positionJobId' => 'string',
        'positionJobName' => 'string',
        'positionProfessionId' => 'string',
        'positionProperty' => 'string',
        'positionStatus' => 'string',
        'positionTitle' => 'string',
        'salaryMax' => 'string',
        'salaryMin' => 'string',
        'salaryType' => 'string',
        'salaryUnit' => 'string',
        'skillTag' => 'string',
        'skipUrl' => 'string',
        'workCity' => 'string',
        'workLongitude' => 'string',
        'workRegion' => 'string',
        'workYear' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'age' => null,
        'benefit' => null,
        'certifications' => null,
        'companyCertificate' => null,
        'companyLogoAftsId' => null,
        'companyName' => null,
        'count' => null,
        'education' => null,
        'gender' => null,
        'kaPositionId' => null,
        'positionDesc' => null,
        'positionId' => null,
        'positionJobId' => null,
        'positionJobName' => null,
        'positionProfessionId' => null,
        'positionProperty' => null,
        'positionStatus' => null,
        'positionTitle' => null,
        'salaryMax' => null,
        'salaryMin' => null,
        'salaryType' => null,
        'salaryUnit' => null,
        'skillTag' => null,
        'skipUrl' => null,
        'workCity' => null,
        'workLongitude' => null,
        'workRegion' => null,
        'workYear' => null
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
        'age' => 'age',
        'benefit' => 'benefit',
        'certifications' => 'certifications',
        'companyCertificate' => 'company_certificate',
        'companyLogoAftsId' => 'company_logo_afts_id',
        'companyName' => 'company_name',
        'count' => 'count',
        'education' => 'education',
        'gender' => 'gender',
        'kaPositionId' => 'ka_position_id',
        'positionDesc' => 'position_desc',
        'positionId' => 'position_id',
        'positionJobId' => 'position_job_id',
        'positionJobName' => 'position_job_name',
        'positionProfessionId' => 'position_profession_id',
        'positionProperty' => 'position_property',
        'positionStatus' => 'position_status',
        'positionTitle' => 'position_title',
        'salaryMax' => 'salary_max',
        'salaryMin' => 'salary_min',
        'salaryType' => 'salary_type',
        'salaryUnit' => 'salary_unit',
        'skillTag' => 'skill_tag',
        'skipUrl' => 'skip_url',
        'workCity' => 'work_city',
        'workLongitude' => 'work_longitude',
        'workRegion' => 'work_region',
        'workYear' => 'work_year'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'age' => 'setAge',
        'benefit' => 'setBenefit',
        'certifications' => 'setCertifications',
        'companyCertificate' => 'setCompanyCertificate',
        'companyLogoAftsId' => 'setCompanyLogoAftsId',
        'companyName' => 'setCompanyName',
        'count' => 'setCount',
        'education' => 'setEducation',
        'gender' => 'setGender',
        'kaPositionId' => 'setKaPositionId',
        'positionDesc' => 'setPositionDesc',
        'positionId' => 'setPositionId',
        'positionJobId' => 'setPositionJobId',
        'positionJobName' => 'setPositionJobName',
        'positionProfessionId' => 'setPositionProfessionId',
        'positionProperty' => 'setPositionProperty',
        'positionStatus' => 'setPositionStatus',
        'positionTitle' => 'setPositionTitle',
        'salaryMax' => 'setSalaryMax',
        'salaryMin' => 'setSalaryMin',
        'salaryType' => 'setSalaryType',
        'salaryUnit' => 'setSalaryUnit',
        'skillTag' => 'setSkillTag',
        'skipUrl' => 'setSkipUrl',
        'workCity' => 'setWorkCity',
        'workLongitude' => 'setWorkLongitude',
        'workRegion' => 'setWorkRegion',
        'workYear' => 'setWorkYear'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'age' => 'getAge',
        'benefit' => 'getBenefit',
        'certifications' => 'getCertifications',
        'companyCertificate' => 'getCompanyCertificate',
        'companyLogoAftsId' => 'getCompanyLogoAftsId',
        'companyName' => 'getCompanyName',
        'count' => 'getCount',
        'education' => 'getEducation',
        'gender' => 'getGender',
        'kaPositionId' => 'getKaPositionId',
        'positionDesc' => 'getPositionDesc',
        'positionId' => 'getPositionId',
        'positionJobId' => 'getPositionJobId',
        'positionJobName' => 'getPositionJobName',
        'positionProfessionId' => 'getPositionProfessionId',
        'positionProperty' => 'getPositionProperty',
        'positionStatus' => 'getPositionStatus',
        'positionTitle' => 'getPositionTitle',
        'salaryMax' => 'getSalaryMax',
        'salaryMin' => 'getSalaryMin',
        'salaryType' => 'getSalaryType',
        'salaryUnit' => 'getSalaryUnit',
        'skillTag' => 'getSkillTag',
        'skipUrl' => 'getSkipUrl',
        'workCity' => 'getWorkCity',
        'workLongitude' => 'getWorkLongitude',
        'workRegion' => 'getWorkRegion',
        'workYear' => 'getWorkYear'
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
        $this->container['age'] = $data['age'] ?? null;
        $this->container['benefit'] = $data['benefit'] ?? null;
        $this->container['certifications'] = $data['certifications'] ?? null;
        $this->container['companyCertificate'] = $data['companyCertificate'] ?? null;
        $this->container['companyLogoAftsId'] = $data['companyLogoAftsId'] ?? null;
        $this->container['companyName'] = $data['companyName'] ?? null;
        $this->container['count'] = $data['count'] ?? null;
        $this->container['education'] = $data['education'] ?? null;
        $this->container['gender'] = $data['gender'] ?? null;
        $this->container['kaPositionId'] = $data['kaPositionId'] ?? null;
        $this->container['positionDesc'] = $data['positionDesc'] ?? null;
        $this->container['positionId'] = $data['positionId'] ?? null;
        $this->container['positionJobId'] = $data['positionJobId'] ?? null;
        $this->container['positionJobName'] = $data['positionJobName'] ?? null;
        $this->container['positionProfessionId'] = $data['positionProfessionId'] ?? null;
        $this->container['positionProperty'] = $data['positionProperty'] ?? null;
        $this->container['positionStatus'] = $data['positionStatus'] ?? null;
        $this->container['positionTitle'] = $data['positionTitle'] ?? null;
        $this->container['salaryMax'] = $data['salaryMax'] ?? null;
        $this->container['salaryMin'] = $data['salaryMin'] ?? null;
        $this->container['salaryType'] = $data['salaryType'] ?? null;
        $this->container['salaryUnit'] = $data['salaryUnit'] ?? null;
        $this->container['skillTag'] = $data['skillTag'] ?? null;
        $this->container['skipUrl'] = $data['skipUrl'] ?? null;
        $this->container['workCity'] = $data['workCity'] ?? null;
        $this->container['workLongitude'] = $data['workLongitude'] ?? null;
        $this->container['workRegion'] = $data['workRegion'] ?? null;
        $this->container['workYear'] = $data['workYear'] ?? null;
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
     * Gets age
     *
     * @return string|null
     */
    public function getAge()
    {
        return $this->container['age'];
    }

    /**
     * Sets age
     *
     * @param string|null $age 职位要求-年龄要求 无要求（不传）、28岁以上(OVER28)、40岁以下(BELOW40)、25岁～35岁(25TO35)
     *
     * @return self
     */
    public function setAge($age)
    {
        $this->container['age'] = $age;

        return $this;
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
     * @param string|null $benefit 福利，现有标签，最多5个标签，使用英文,分割 参考 https://www.yuque.com/docs/share/805e9840-ae9d-499c-b566-46b3b8c9fb2d?# 《4.1 服务端接入----职位传入接口》的1.3.1.1
     *
     * @return self
     */
    public function setBenefit($benefit)
    {
        $this->container['benefit'] = $benefit;

        return $this;
    }

    /**
     * Gets certifications
     *
     * @return string|null
     */
    public function getCertifications()
    {
        return $this->container['certifications'];
    }

    /**
     * Sets certifications
     *
     * @param string|null $certifications 技能、证书等要求，比如学历、健康证、普通话或其他技能证书等
     *
     * @return self
     */
    public function setCertifications($certifications)
    {
        $this->container['certifications'] = $certifications;

        return $this;
    }

    /**
     * Gets companyCertificate
     *
     * @return string|null
     */
    public function getCompanyCertificate()
    {
        return $this->container['companyCertificate'];
    }

    /**
     * Sets companyCertificate
     *
     * @param string|null $companyCertificate 发布企业统一社会信用代码
     *
     * @return self
     */
    public function setCompanyCertificate($companyCertificate)
    {
        $this->container['companyCertificate'] = $companyCertificate;

        return $this;
    }

    /**
     * Gets companyLogoAftsId
     *
     * @return string|null
     */
    public function getCompanyLogoAftsId()
    {
        return $this->container['companyLogoAftsId'];
    }

    /**
     * Sets companyLogoAftsId
     *
     * @param string|null $companyLogoAftsId 上传的aftsid
     *
     * @return self
     */
    public function setCompanyLogoAftsId($companyLogoAftsId)
    {
        $this->container['companyLogoAftsId'] = $companyLogoAftsId;

        return $this;
    }

    /**
     * Gets companyName
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->container['companyName'];
    }

    /**
     * Sets companyName
     *
     * @param string|null $companyName 企业工商全称
     *
     * @return self
     */
    public function setCompanyName($companyName)
    {
        $this->container['companyName'] = $companyName;

        return $this;
    }

    /**
     * Gets count
     *
     * @return int|null
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int|null $count 招聘人数
     *
     * @return self
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets education
     *
     * @return string|null
     */
    public function getEducation()
    {
        return $this->container['education'];
    }

    /**
     * Sets education
     *
     * @param string|null $education 学历要求,HIGHSCHOOL_AND_BELOW（高中及以下），POLYTECHNIC（中专），COLLEGE（大专），BACHELOR（本科），MASTER（硕士），DOCTOR_AND_ABOVE（博士及以上）
     *
     * @return self
     */
    public function setEducation($education)
    {
        $this->container['education'] = $education;

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
     * @param string|null $gender 无要求（不传）、男或者女
     *
     * @return self
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets kaPositionId
     *
     * @return string|null
     */
    public function getKaPositionId()
    {
        return $this->container['kaPositionId'];
    }

    /**
     * Sets kaPositionId
     *
     * @param string|null $kaPositionId 合作方岗位id自定义保持唯一性
     *
     * @return self
     */
    public function setKaPositionId($kaPositionId)
    {
        $this->container['kaPositionId'] = $kaPositionId;

        return $this;
    }

    /**
     * Gets positionDesc
     *
     * @return string|null
     */
    public function getPositionDesc()
    {
        return $this->container['positionDesc'];
    }

    /**
     * Sets positionDesc
     *
     * @param string|null $positionDesc 长文本描述
     *
     * @return self
     */
    public function setPositionDesc($positionDesc)
    {
        $this->container['positionDesc'] = $positionDesc;

        return $this;
    }

    /**
     * Gets positionId
     *
     * @return string|null
     */
    public function getPositionId()
    {
        return $this->container['positionId'];
    }

    /**
     * Sets positionId
     *
     * @param string|null $positionId 工作证岗位库的职位主键，只有更新职位信息时需要传入。第一次传入岗位后返回
     *
     * @return self
     */
    public function setPositionId($positionId)
    {
        $this->container['positionId'] = $positionId;

        return $this;
    }

    /**
     * Gets positionJobId
     *
     * @return string|null
     */
    public function getPositionJobId()
    {
        return $this->container['positionJobId'];
    }

    /**
     * Sets positionJobId
     *
     * @param string|null $positionJobId 岗位对应的行业id，字段参考https://www.yuque.com/docs/share/805e9840-ae9d-499c-b566-46b3b8c9fb2d?# 《4.1 服务端接入----职位传入接口》的1.3.1.2
     *
     * @return self
     */
    public function setPositionJobId($positionJobId)
    {
        $this->container['positionJobId'] = $positionJobId;

        return $this;
    }

    /**
     * Gets positionJobName
     *
     * @return string|null
     */
    public function getPositionJobName()
    {
        return $this->container['positionJobName'];
    }

    /**
     * Sets positionJobName
     *
     * @param string|null $positionJobName 岗位对应的职业名称
     *
     * @return self
     */
    public function setPositionJobName($positionJobName)
    {
        $this->container['positionJobName'] = $positionJobName;

        return $this;
    }

    /**
     * Gets positionProfessionId
     *
     * @return string|null
     */
    public function getPositionProfessionId()
    {
        return $this->container['positionProfessionId'];
    }

    /**
     * Sets positionProfessionId
     *
     * @param string|null $positionProfessionId 岗位对应的职业id，字段参考https://www.yuque.com/docs/share/805e9840-ae9d-499c-b566-46b3b8c9fb2d?# 《4.1 服务端接入----职位传入接口》的1.3.1.2
     *
     * @return self
     */
    public function setPositionProfessionId($positionProfessionId)
    {
        $this->container['positionProfessionId'] = $positionProfessionId;

        return $this;
    }

    /**
     * Gets positionProperty
     *
     * @return string|null
     */
    public function getPositionProperty()
    {
        return $this->container['positionProperty'];
    }

    /**
     * Sets positionProperty
     *
     * @param string|null $positionProperty 岗位属性：全职(FULL_TIME)或者兼职(PART_TIME)
     *
     * @return self
     */
    public function setPositionProperty($positionProperty)
    {
        $this->container['positionProperty'] = $positionProperty;

        return $this;
    }

    /**
     * Gets positionStatus
     *
     * @return string|null
     */
    public function getPositionStatus()
    {
        return $this->container['positionStatus'];
    }

    /**
     * Sets positionStatus
     *
     * @param string|null $positionStatus 职位的状态，只有上架(UNCHECK)和下架(OFFLINE)两种
     *
     * @return self
     */
    public function setPositionStatus($positionStatus)
    {
        $this->container['positionStatus'] = $positionStatus;

        return $this;
    }

    /**
     * Gets positionTitle
     *
     * @return string|null
     */
    public function getPositionTitle()
    {
        return $this->container['positionTitle'];
    }

    /**
     * Sets positionTitle
     *
     * @param string|null $positionTitle 短文本描述
     *
     * @return self
     */
    public function setPositionTitle($positionTitle)
    {
        $this->container['positionTitle'] = $positionTitle;

        return $this;
    }

    /**
     * Gets salaryMax
     *
     * @return string|null
     */
    public function getSalaryMax()
    {
        return $this->container['salaryMax'];
    }

    /**
     * Sets salaryMax
     *
     * @param string|null $salaryMax 薪水范围，不能低于salary_min
     *
     * @return self
     */
    public function setSalaryMax($salaryMax)
    {
        $this->container['salaryMax'] = $salaryMax;

        return $this;
    }

    /**
     * Gets salaryMin
     *
     * @return string|null
     */
    public function getSalaryMin()
    {
        return $this->container['salaryMin'];
    }

    /**
     * Sets salaryMin
     *
     * @param string|null $salaryMin 薪水范围，不能高于salary_max
     *
     * @return self
     */
    public function setSalaryMin($salaryMin)
    {
        $this->container['salaryMin'] = $salaryMin;

        return $this;
    }

    /**
     * Gets salaryType
     *
     * @return string|null
     */
    public function getSalaryType()
    {
        return $this->container['salaryType'];
    }

    /**
     * Sets salaryType
     *
     * @param string|null $salaryType 薪资类型：日结(DAY)、月结(MONTH)、周结(WEEK)、完工结(DONE)、其他(OTHER)
     *
     * @return self
     */
    public function setSalaryType($salaryType)
    {
        $this->container['salaryType'] = $salaryType;

        return $this;
    }

    /**
     * Gets salaryUnit
     *
     * @return string|null
     */
    public function getSalaryUnit()
    {
        return $this->container['salaryUnit'];
    }

    /**
     * Sets salaryUnit
     *
     * @param string|null $salaryUnit 薪资单位，元/日(DAY)、元/次(TIME)、元/月(MONTH)、元/小时(HOUR)、元/件 (NUM)、元/周 (WEEK)、其他 (OTHER)
     *
     * @return self
     */
    public function setSalaryUnit($salaryUnit)
    {
        $this->container['salaryUnit'] = $salaryUnit;

        return $this;
    }

    /**
     * Gets skillTag
     *
     * @return string|null
     */
    public function getSkillTag()
    {
        return $this->container['skillTag'];
    }

    /**
     * Sets skillTag
     *
     * @param string|null $skillTag 岗位需要的技能标签，最多5个，使用英文逗号分割
     *
     * @return self
     */
    public function setSkillTag($skillTag)
    {
        $this->container['skillTag'] = $skillTag;

        return $this;
    }

    /**
     * Gets skipUrl
     *
     * @return string|null
     */
    public function getSkipUrl()
    {
        return $this->container['skipUrl'];
    }

    /**
     * Sets skipUrl
     *
     * @param string|null $skipUrl 职位跳转链接，当前只支持支付宝小程序，也就是alipays://platformapi/ 开头
     *
     * @return self
     */
    public function setSkipUrl($skipUrl)
    {
        $this->container['skipUrl'] = $skipUrl;

        return $this;
    }

    /**
     * Gets workCity
     *
     * @return string|null
     */
    public function getWorkCity()
    {
        return $this->container['workCity'];
    }

    /**
     * Sets workCity
     *
     * @param string|null $workCity 高德city code，例：北京010，线上工作9999 参考https://www.yuque.com/docs/share/805e9840-ae9d-499c-b566-46b3b8c9fb2d?# 《4.1 服务端接入----职位传入接口》的1.3.1.3
     *
     * @return self
     */
    public function setWorkCity($workCity)
    {
        $this->container['workCity'] = $workCity;

        return $this;
    }

    /**
     * Gets workLongitude
     *
     * @return string|null
     */
    public function getWorkLongitude()
    {
        return $this->container['workLongitude'];
    }

    /**
     * Sets workLongitude
     *
     * @param string|null $workLongitude 经纬度，前面是经度，后面是纬度，使用英文逗号隔开
     *
     * @return self
     */
    public function setWorkLongitude($workLongitude)
    {
        $this->container['workLongitude'] = $workLongitude;

        return $this;
    }

    /**
     * Gets workRegion
     *
     * @return string|null
     */
    public function getWorkRegion()
    {
        return $this->container['workRegion'];
    }

    /**
     * Sets workRegion
     *
     * @param string|null $workRegion 工作地所在的区县,使用高德的adcode，例：朝阳区110105 参考https://www.yuque.com/docs/share/805e9840-ae9d-499c-b566-46b3b8c9fb2d?# 《4.1 服务端接入----职位传入接口》的1.3.1.2
     *
     * @return self
     */
    public function setWorkRegion($workRegion)
    {
        $this->container['workRegion'] = $workRegion;

        return $this;
    }

    /**
     * Gets workYear
     *
     * @return string|null
     */
    public function getWorkYear()
    {
        return $this->container['workYear'];
    }

    /**
     * Sets workYear
     *
     * @param string|null $workYear 工作年限，1年以下（ONE）、1～3年（THREE）、3～5年（FIVE）、5～10年（TEN）、10年以上（OVER_TEN）
     *
     * @return self
     */
    public function setWorkYear($workYear)
    {
        $this->container['workYear'] = $workYear;

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


