<?php
/**
 * AlipayOpenMiniVersionAuditApplyModel
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
 * AlipayOpenMiniVersionAuditApplyModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenMiniVersionAuditApplyModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenMiniVersionAuditApplyModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'appCategoryIds' => 'string',
        'appDesc' => 'string',
        'appEnglishName' => 'string',
        'appName' => 'string',
        'appSlogan' => 'string',
        'appVersion' => 'string',
        'auditRule' => 'string',
        'autoOnline' => 'string',
        'bundleId' => 'string',
        'licenseName' => 'string',
        'licenseNo' => 'string',
        'licenseValidDate' => 'string',
        'memo' => 'string',
        'miniCategoryIds' => 'string',
        'regionType' => 'string',
        'serviceEmail' => 'string',
        'servicePhone' => 'string',
        'serviceRegionInfo' => '\Alipay\OpenAPISDK\Model\RegionInfo[]',
        'speedUp' => 'string',
        'testAccout' => 'string',
        'testPassword' => 'string',
        'versionDesc' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'appCategoryIds' => null,
        'appDesc' => null,
        'appEnglishName' => null,
        'appName' => null,
        'appSlogan' => null,
        'appVersion' => null,
        'auditRule' => null,
        'autoOnline' => null,
        'bundleId' => null,
        'licenseName' => null,
        'licenseNo' => null,
        'licenseValidDate' => null,
        'memo' => null,
        'miniCategoryIds' => null,
        'regionType' => null,
        'serviceEmail' => null,
        'servicePhone' => null,
        'serviceRegionInfo' => null,
        'speedUp' => null,
        'testAccout' => null,
        'testPassword' => null,
        'versionDesc' => null
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
        'appCategoryIds' => 'app_category_ids',
        'appDesc' => 'app_desc',
        'appEnglishName' => 'app_english_name',
        'appName' => 'app_name',
        'appSlogan' => 'app_slogan',
        'appVersion' => 'app_version',
        'auditRule' => 'audit_rule',
        'autoOnline' => 'auto_online',
        'bundleId' => 'bundle_id',
        'licenseName' => 'license_name',
        'licenseNo' => 'license_no',
        'licenseValidDate' => 'license_valid_date',
        'memo' => 'memo',
        'miniCategoryIds' => 'mini_category_ids',
        'regionType' => 'region_type',
        'serviceEmail' => 'service_email',
        'servicePhone' => 'service_phone',
        'serviceRegionInfo' => 'service_region_info',
        'speedUp' => 'speed_up',
        'testAccout' => 'test_accout',
        'testPassword' => 'test_password',
        'versionDesc' => 'version_desc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appCategoryIds' => 'setAppCategoryIds',
        'appDesc' => 'setAppDesc',
        'appEnglishName' => 'setAppEnglishName',
        'appName' => 'setAppName',
        'appSlogan' => 'setAppSlogan',
        'appVersion' => 'setAppVersion',
        'auditRule' => 'setAuditRule',
        'autoOnline' => 'setAutoOnline',
        'bundleId' => 'setBundleId',
        'licenseName' => 'setLicenseName',
        'licenseNo' => 'setLicenseNo',
        'licenseValidDate' => 'setLicenseValidDate',
        'memo' => 'setMemo',
        'miniCategoryIds' => 'setMiniCategoryIds',
        'regionType' => 'setRegionType',
        'serviceEmail' => 'setServiceEmail',
        'servicePhone' => 'setServicePhone',
        'serviceRegionInfo' => 'setServiceRegionInfo',
        'speedUp' => 'setSpeedUp',
        'testAccout' => 'setTestAccout',
        'testPassword' => 'setTestPassword',
        'versionDesc' => 'setVersionDesc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appCategoryIds' => 'getAppCategoryIds',
        'appDesc' => 'getAppDesc',
        'appEnglishName' => 'getAppEnglishName',
        'appName' => 'getAppName',
        'appSlogan' => 'getAppSlogan',
        'appVersion' => 'getAppVersion',
        'auditRule' => 'getAuditRule',
        'autoOnline' => 'getAutoOnline',
        'bundleId' => 'getBundleId',
        'licenseName' => 'getLicenseName',
        'licenseNo' => 'getLicenseNo',
        'licenseValidDate' => 'getLicenseValidDate',
        'memo' => 'getMemo',
        'miniCategoryIds' => 'getMiniCategoryIds',
        'regionType' => 'getRegionType',
        'serviceEmail' => 'getServiceEmail',
        'servicePhone' => 'getServicePhone',
        'serviceRegionInfo' => 'getServiceRegionInfo',
        'speedUp' => 'getSpeedUp',
        'testAccout' => 'getTestAccout',
        'testPassword' => 'getTestPassword',
        'versionDesc' => 'getVersionDesc'
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
        $this->container['appCategoryIds'] = $data['appCategoryIds'] ?? null;
        $this->container['appDesc'] = $data['appDesc'] ?? null;
        $this->container['appEnglishName'] = $data['appEnglishName'] ?? null;
        $this->container['appName'] = $data['appName'] ?? null;
        $this->container['appSlogan'] = $data['appSlogan'] ?? null;
        $this->container['appVersion'] = $data['appVersion'] ?? null;
        $this->container['auditRule'] = $data['auditRule'] ?? null;
        $this->container['autoOnline'] = $data['autoOnline'] ?? null;
        $this->container['bundleId'] = $data['bundleId'] ?? null;
        $this->container['licenseName'] = $data['licenseName'] ?? null;
        $this->container['licenseNo'] = $data['licenseNo'] ?? null;
        $this->container['licenseValidDate'] = $data['licenseValidDate'] ?? null;
        $this->container['memo'] = $data['memo'] ?? null;
        $this->container['miniCategoryIds'] = $data['miniCategoryIds'] ?? null;
        $this->container['regionType'] = $data['regionType'] ?? null;
        $this->container['serviceEmail'] = $data['serviceEmail'] ?? null;
        $this->container['servicePhone'] = $data['servicePhone'] ?? null;
        $this->container['serviceRegionInfo'] = $data['serviceRegionInfo'] ?? null;
        $this->container['speedUp'] = $data['speedUp'] ?? null;
        $this->container['testAccout'] = $data['testAccout'] ?? null;
        $this->container['testPassword'] = $data['testPassword'] ?? null;
        $this->container['versionDesc'] = $data['versionDesc'] ?? null;
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
     * Gets appCategoryIds
     *
     * @return string|null
     */
    public function getAppCategoryIds()
    {
        return $this->container['appCategoryIds'];
    }

    /**
     * Sets appCategoryIds
     *
     * @param string|null $appCategoryIds 小程序类目，格式为 第一个一级类目_第一个二级类目;第二个一级类目_第二个二级类目，详细类目可以通过  <a href=\"https://docs.open.alipay.com/api_49/alipay.open.mini.category.query\">https://docs.open.alipay.com/api_49/alipay.open.mini.category.query</a>接口查询，如果不填默认采用当前小程序应用类目。使用默认应用类目后不需要再次上传营业执照号、营业执照名、营业执照截图、营业执照有效期。
     *
     * @return self
     */
    public function setAppCategoryIds($appCategoryIds)
    {
        $this->container['appCategoryIds'] = $appCategoryIds;

        return $this;
    }

    /**
     * Gets appDesc
     *
     * @return string|null
     */
    public function getAppDesc()
    {
        return $this->container['appDesc'];
    }

    /**
     * Sets appDesc
     *
     * @param string|null $appDesc 小程序描述，长度限制 20~400 个字符（中文字符按2个字符计算）。
     *
     * @return self
     */
    public function setAppDesc($appDesc)
    {
        $this->container['appDesc'] = $appDesc;

        return $this;
    }

    /**
     * Gets appEnglishName
     *
     * @return string|null
     */
    public function getAppEnglishName()
    {
        return $this->container['appEnglishName'];
    }

    /**
     * Sets appEnglishName
     *
     * @param string|null $appEnglishName 小程序应用英文名称，长度限制 3～30 个字符（中文字符按2个字符计算）；仅支持英文和数字。
     *
     * @return self
     */
    public function setAppEnglishName($appEnglishName)
    {
        $this->container['appEnglishName'] = $appEnglishName;

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
     * @param string|null $appName 小程序名称，长度限制 3~40 个字符（中文字符按2个字符计算），仅支持包含中文、数字、英文、下划线、+、-。 如果不填默认采用当前小程序应用名称，如无默认值则必填，不可为空。
     *
     * @return self
     */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;

        return $this;
    }

    /**
     * Gets appSlogan
     *
     * @return string|null
     */
    public function getAppSlogan()
    {
        return $this->container['appSlogan'];
    }

    /**
     * Sets appSlogan
     *
     * @param string|null $appSlogan 小程序简介，一句话描述小程序功能，长度限制 10~32个字符（中文字符按2个字符计算）。
     *
     * @return self
     */
    public function setAppSlogan($appSlogan)
    {
        $this->container['appSlogan'] = $appSlogan;

        return $this;
    }

    /**
     * Gets appVersion
     *
     * @return string|null
     */
    public function getAppVersion()
    {
        return $this->container['appVersion'];
    }

    /**
     * Sets appVersion
     *
     * @param string|null $appVersion 小程序版本号，请选择开发版本执行提交审核操作。
     *
     * @return self
     */
    public function setAppVersion($appVersion)
    {
        $this->container['appVersion'] = $appVersion;

        return $this;
    }

    /**
     * Gets auditRule
     *
     * @return string|null
     */
    public function getAuditRule()
    {
        return $this->container['auditRule'];
    }

    /**
     * Sets auditRule
     *
     * @param string|null $auditRule 审核类型，建议设置成“BASE_PROMOTE”，小程序将会更容易上架。将小程序发布审核拆分成“准入”、“营销”。原先小程序需要两个环节都审核通过才能上架，现在小程序只需要准入通过即可上架，但是无法在营销场景（支付宝泛搜、支付宝首页推荐等）展现给用户，小程序可通过精搜或者扫码等方式使用。如果小程序需要进行营销，可发布新版本，当准入&营销都通过后，小程序也可被营销。点击查看支付宝小程序营销规范：<a href=\"https://opendocs.alipay.com/b/03al2q\">https://opendocs.alipay.com/b/03al2q</a>
     *
     * @return self
     */
    public function setAuditRule($auditRule)
    {
        $this->container['auditRule'] = $auditRule;

        return $this;
    }

    /**
     * Gets autoOnline
     *
     * @return string|null
     */
    public function getAutoOnline()
    {
        return $this->container['autoOnline'];
    }

    /**
     * Sets autoOnline
     *
     * @param string|null $autoOnline 审核通过后是否自动上架， 自动上架：true；不自动上架（默认）：false。 如果小程序上架前无需特殊处理，建议设置成true，平台将会在小程序审核通过时自动将其上架。 注意：若审核通过时，小程序仍未完成备案，则将会进行自动受限发布上架（发布上线后小程序将无法被搜索，限制小程序用户数为 50 人/天，无法进行相关业务推广，只可通过扫码使用，完成备案即可解除限制，上架后90天内不未完成备案，小程序将无法打开。）若审核通过时小程序也完成备案，则会正常上架。
     *
     * @return self
     */
    public function setAutoOnline($autoOnline)
    {
        $this->container['autoOnline'] = $autoOnline;

        return $this;
    }

    /**
     * Gets bundleId
     *
     * @return string|null
     */
    public function getBundleId()
    {
        return $this->container['bundleId'];
    }

    /**
     * Sets bundleId
     *
     * @param string|null $bundleId 小程序投放的端参数。例如投放到支付宝钱包是支付宝端。默认支付宝端。支持： com.alipay.alipaywallet:支付宝端； com.alipay.iot.xpaas：支付宝IoT端。
     *
     * @return self
     */
    public function setBundleId($bundleId)
    {
        $this->container['bundleId'] = $bundleId;

        return $this;
    }

    /**
     * Gets licenseName
     *
     * @return string|null
     */
    public function getLicenseName()
    {
        return $this->container['licenseName'];
    }

    /**
     * Sets licenseName
     *
     * @param string|null $licenseName 营业执照名称，参照<a href=\"https://opendocs.alipay.com/mini/operation/material\">https://opendocs.alipay.com/mini/operation/material</a>,要求填写营业执照信息。
     *
     * @return self
     */
    public function setLicenseName($licenseName)
    {
        $this->container['licenseName'] = $licenseName;

        return $this;
    }

    /**
     * Gets licenseNo
     *
     * @return string|null
     */
    public function getLicenseNo()
    {
        return $this->container['licenseNo'];
    }

    /**
     * Sets licenseNo
     *
     * @param string|null $licenseNo 营业执照证件号，部分小程序类目需要提交，可通过<a href=\"https://opendocs.alipay.com/mini/03l8c8 \">https://opendocs.alipay.com/mini/03l8c8</a>查询类目是否需要上传营业执照信息。参照<a href=\"https://opendocs.alipay.com/mini/operation/material \">https://opendocs.alipay.com/mini/operation/material </a>要求填写营业执照信息。
     *
     * @return self
     */
    public function setLicenseNo($licenseNo)
    {
        $this->container['licenseNo'] = $licenseNo;

        return $this;
    }

    /**
     * Gets licenseValidDate
     *
     * @return string|null
     */
    public function getLicenseValidDate()
    {
        return $this->container['licenseValidDate'];
    }

    /**
     * Sets licenseValidDate
     *
     * @param string|null $licenseValidDate 营业执照有效期，格式为 yyyy-MM-dd，9999-12-31表示长期有效。
     *
     * @return self
     */
    public function setLicenseValidDate($licenseValidDate)
    {
        $this->container['licenseValidDate'] = $licenseValidDate;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string|null
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string|null $memo 小程序备注，小程序备注最多500字符（中文字符按2个字符计算）。
     *
     * @return self
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets miniCategoryIds
     *
     * @return string|null
     */
    public function getMiniCategoryIds()
    {
        return $this->container['miniCategoryIds'];
    }

    /**
     * Sets miniCategoryIds
     *
     * @param string|null $miniCategoryIds 新小程序前台类目，格式为 第一个一级类目_第一个二级类目;第二个一级类目_第二个二级类目_第二个三级类目，详细类目可以通过 <a href=\"https://docs.open.alipay.com/api_49/alipay.open.mini.category.query\">https://docs.open.alipay.com/api_49/alipay.open.mini.category.query</a> 接口查询mini_category_list。
     *
     * @return self
     */
    public function setMiniCategoryIds($miniCategoryIds)
    {
        $this->container['miniCategoryIds'] = $miniCategoryIds;

        return $this;
    }

    /**
     * Gets regionType
     *
     * @return string|null
     */
    public function getRegionType()
    {
        return $this->container['regionType'];
    }

    /**
     * Sets regionType
     *
     * @param string|null $regionType 小程序服务区域类型
     *
     * @return self
     */
    public function setRegionType($regionType)
    {
        $this->container['regionType'] = $regionType;

        return $this;
    }

    /**
     * Gets serviceEmail
     *
     * @return string|null
     */
    public function getServiceEmail()
    {
        return $this->container['serviceEmail'];
    }

    /**
     * Sets serviceEmail
     *
     * @param string|null $serviceEmail 小程序客服邮箱，如果不填默认采用当前小程序的应用客服邮箱，小程序客服电话和邮箱至少输入一个。如果前期已经设置过该信息，本次可不填，平台将会为你默认上传该信息。
     *
     * @return self
     */
    public function setServiceEmail($serviceEmail)
    {
        $this->container['serviceEmail'] = $serviceEmail;

        return $this;
    }

    /**
     * Gets servicePhone
     *
     * @return string|null
     */
    public function getServicePhone()
    {
        return $this->container['servicePhone'];
    }

    /**
     * Sets servicePhone
     *
     * @param string|null $servicePhone 小程序客服电话，长度限制5~30个字符，仅支持包含数字和-。如果不填默认采用当前小程序的应用客服电话，小程序客服电话和邮箱至少输入一个。如果前期已经设置过该信息，本次可不填，平台将会为你默认上传该信息。
     *
     * @return self
     */
    public function setServicePhone($servicePhone)
    {
        $this->container['servicePhone'] = $servicePhone;

        return $this;
    }

    /**
     * Gets serviceRegionInfo
     *
     * @return \Alipay\OpenAPISDK\Model\RegionInfo[]|null
     */
    public function getServiceRegionInfo()
    {
        return $this->container['serviceRegionInfo'];
    }

    /**
     * Sets serviceRegionInfo
     *
     * @param \Alipay\OpenAPISDK\Model\RegionInfo[]|null $serviceRegionInfo 省市区信息。当region_type为LOCATION或传入city_code时，province_code不能为空；填写area_code时，province_code和city_code不能为空。只填province_code则全选该省；填写province_code和city_code则全选该市，以此类推。省市区code参见<a href=\"https://gw.alipayobjects.com/os/bmw-prod/0aab0319-13de-42b9-85cf-13877a5f78ed.xlsx\">https://gw.alipayobjects.com/os/bmw-prod/0aab0319-13de-42b9-85cf-13877a5f78ed.xlsx</a>
     *
     * @return self
     */
    public function setServiceRegionInfo($serviceRegionInfo)
    {
        $this->container['serviceRegionInfo'] = $serviceRegionInfo;

        return $this;
    }

    /**
     * Gets speedUp
     *
     * @return string|null
     */
    public function getSpeedUp()
    {
        return $this->container['speedUp'];
    }

    /**
     * Sets speedUp
     *
     * @param string|null $speedUp 如果有审核加急权益，是否使用审核加急权益加速审核： 加速（默认）：true 不加速：false
     *
     * @return self
     */
    public function setSpeedUp($speedUp)
    {
        $this->container['speedUp'] = $speedUp;

        return $this;
    }

    /**
     * Gets testAccout
     *
     * @return string|null
     */
    public function getTestAccout()
    {
        return $this->container['testAccout'];
    }

    /**
     * Sets testAccout
     *
     * @param string|null $testAccout 测试账号，是否需要填写请参见<a href=\"https://opendocs.alipay.com/mini/operation/standard/case/akxg6r#3.%20%E6%B5%8B%E8%AF%95%E5%86%85%E5%AE%B9%E6%8F%90%E4%BA%A4%E4%B8%8D%E5%AE%8C%E6%95%B4\">https://opendocs.alipay.com/mini/operation/standard/case/akxg6r#3.%20%E6%B5%8B%E8%AF%95%E5%86%85%E5%AE%B9%E6%8F%90%E4%BA%A4%E4%B8%8D%E5%AE%8C%E6%95%B4</a>
     *
     * @return self
     */
    public function setTestAccout($testAccout)
    {
        $this->container['testAccout'] = $testAccout;

        return $this;
    }

    /**
     * Gets testPassword
     *
     * @return string|null
     */
    public function getTestPassword()
    {
        return $this->container['testPassword'];
    }

    /**
     * Sets testPassword
     *
     * @param string|null $testPassword 测试账号密码
     *
     * @return self
     */
    public function setTestPassword($testPassword)
    {
        $this->container['testPassword'] = $testPassword;

        return $this;
    }

    /**
     * Gets versionDesc
     *
     * @return string|null
     */
    public function getVersionDesc()
    {
        return $this->container['versionDesc'];
    }

    /**
     * Sets versionDesc
     *
     * @param string|null $versionDesc 小程序版本描述，介绍此版本的主要变更和功能，30-500个字符（中文字符按2个字符计算）。
     *
     * @return self
     */
    public function setVersionDesc($versionDesc)
    {
        $this->container['versionDesc'] = $versionDesc;

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


