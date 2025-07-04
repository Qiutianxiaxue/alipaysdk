<?php
/**
 * AntMerchantExpandShopCreateModel
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
 * AntMerchantExpandShopCreateModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AntMerchantExpandShopCreateModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AntMerchantExpandShopCreateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bizCards' => '\Alipay\OpenAPISDK\Model\SettleCardInfo[]',
        'brandId' => 'string',
        'businessAddress' => '\Alipay\OpenAPISDK\Model\AddressInfo',
        'businessTime' => '\Alipay\OpenAPISDK\Model\ShopBusinessTime[]',
        'certImage' => 'string',
        'certName' => 'string',
        'certNo' => 'string',
        'certType' => 'string',
        'contactInfos' => '\Alipay\OpenAPISDK\Model\ContactInfo[]',
        'contactMobile' => 'string',
        'contactPhone' => 'string',
        'cover' => 'string',
        'extInfos' => '\Alipay\OpenAPISDK\Model\ShopExtInfo[]',
        'industryInfo' => '\Alipay\OpenAPISDK\Model\MerchantShopIndustryInfo[]',
        'industryLicense' => '\Alipay\OpenAPISDK\Model\ShopIndustryLicense[]',
        'ipRoleId' => 'string',
        'legalCertNo' => 'string',
        'legalName' => 'string',
        'licenseAuthLetterImage' => 'string',
        'memo' => 'string',
        'outDoorImages' => 'string[]',
        'qualifications' => '\Alipay\OpenAPISDK\Model\IndustryQualificationInfo[]',
        'scene' => 'string',
        'settleAlipayLogonId' => 'string',
        'shopCategory' => 'string',
        'shopName' => 'string',
        'shopType' => 'string',
        'storeId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bizCards' => null,
        'brandId' => null,
        'businessAddress' => null,
        'businessTime' => null,
        'certImage' => null,
        'certName' => null,
        'certNo' => null,
        'certType' => null,
        'contactInfos' => null,
        'contactMobile' => null,
        'contactPhone' => null,
        'cover' => null,
        'extInfos' => null,
        'industryInfo' => null,
        'industryLicense' => null,
        'ipRoleId' => null,
        'legalCertNo' => null,
        'legalName' => null,
        'licenseAuthLetterImage' => null,
        'memo' => null,
        'outDoorImages' => null,
        'qualifications' => null,
        'scene' => null,
        'settleAlipayLogonId' => null,
        'shopCategory' => null,
        'shopName' => null,
        'shopType' => null,
        'storeId' => null
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
        'bizCards' => 'biz_cards',
        'brandId' => 'brand_id',
        'businessAddress' => 'business_address',
        'businessTime' => 'business_time',
        'certImage' => 'cert_image',
        'certName' => 'cert_name',
        'certNo' => 'cert_no',
        'certType' => 'cert_type',
        'contactInfos' => 'contact_infos',
        'contactMobile' => 'contact_mobile',
        'contactPhone' => 'contact_phone',
        'cover' => 'cover',
        'extInfos' => 'ext_infos',
        'industryInfo' => 'industry_info',
        'industryLicense' => 'industry_license',
        'ipRoleId' => 'ip_role_id',
        'legalCertNo' => 'legal_cert_no',
        'legalName' => 'legal_name',
        'licenseAuthLetterImage' => 'license_auth_letter_image',
        'memo' => 'memo',
        'outDoorImages' => 'out_door_images',
        'qualifications' => 'qualifications',
        'scene' => 'scene',
        'settleAlipayLogonId' => 'settle_alipay_logon_id',
        'shopCategory' => 'shop_category',
        'shopName' => 'shop_name',
        'shopType' => 'shop_type',
        'storeId' => 'store_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bizCards' => 'setBizCards',
        'brandId' => 'setBrandId',
        'businessAddress' => 'setBusinessAddress',
        'businessTime' => 'setBusinessTime',
        'certImage' => 'setCertImage',
        'certName' => 'setCertName',
        'certNo' => 'setCertNo',
        'certType' => 'setCertType',
        'contactInfos' => 'setContactInfos',
        'contactMobile' => 'setContactMobile',
        'contactPhone' => 'setContactPhone',
        'cover' => 'setCover',
        'extInfos' => 'setExtInfos',
        'industryInfo' => 'setIndustryInfo',
        'industryLicense' => 'setIndustryLicense',
        'ipRoleId' => 'setIpRoleId',
        'legalCertNo' => 'setLegalCertNo',
        'legalName' => 'setLegalName',
        'licenseAuthLetterImage' => 'setLicenseAuthLetterImage',
        'memo' => 'setMemo',
        'outDoorImages' => 'setOutDoorImages',
        'qualifications' => 'setQualifications',
        'scene' => 'setScene',
        'settleAlipayLogonId' => 'setSettleAlipayLogonId',
        'shopCategory' => 'setShopCategory',
        'shopName' => 'setShopName',
        'shopType' => 'setShopType',
        'storeId' => 'setStoreId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bizCards' => 'getBizCards',
        'brandId' => 'getBrandId',
        'businessAddress' => 'getBusinessAddress',
        'businessTime' => 'getBusinessTime',
        'certImage' => 'getCertImage',
        'certName' => 'getCertName',
        'certNo' => 'getCertNo',
        'certType' => 'getCertType',
        'contactInfos' => 'getContactInfos',
        'contactMobile' => 'getContactMobile',
        'contactPhone' => 'getContactPhone',
        'cover' => 'getCover',
        'extInfos' => 'getExtInfos',
        'industryInfo' => 'getIndustryInfo',
        'industryLicense' => 'getIndustryLicense',
        'ipRoleId' => 'getIpRoleId',
        'legalCertNo' => 'getLegalCertNo',
        'legalName' => 'getLegalName',
        'licenseAuthLetterImage' => 'getLicenseAuthLetterImage',
        'memo' => 'getMemo',
        'outDoorImages' => 'getOutDoorImages',
        'qualifications' => 'getQualifications',
        'scene' => 'getScene',
        'settleAlipayLogonId' => 'getSettleAlipayLogonId',
        'shopCategory' => 'getShopCategory',
        'shopName' => 'getShopName',
        'shopType' => 'getShopType',
        'storeId' => 'getStoreId'
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
        $this->container['bizCards'] = $data['bizCards'] ?? null;
        $this->container['brandId'] = $data['brandId'] ?? null;
        $this->container['businessAddress'] = $data['businessAddress'] ?? null;
        $this->container['businessTime'] = $data['businessTime'] ?? null;
        $this->container['certImage'] = $data['certImage'] ?? null;
        $this->container['certName'] = $data['certName'] ?? null;
        $this->container['certNo'] = $data['certNo'] ?? null;
        $this->container['certType'] = $data['certType'] ?? null;
        $this->container['contactInfos'] = $data['contactInfos'] ?? null;
        $this->container['contactMobile'] = $data['contactMobile'] ?? null;
        $this->container['contactPhone'] = $data['contactPhone'] ?? null;
        $this->container['cover'] = $data['cover'] ?? null;
        $this->container['extInfos'] = $data['extInfos'] ?? null;
        $this->container['industryInfo'] = $data['industryInfo'] ?? null;
        $this->container['industryLicense'] = $data['industryLicense'] ?? null;
        $this->container['ipRoleId'] = $data['ipRoleId'] ?? null;
        $this->container['legalCertNo'] = $data['legalCertNo'] ?? null;
        $this->container['legalName'] = $data['legalName'] ?? null;
        $this->container['licenseAuthLetterImage'] = $data['licenseAuthLetterImage'] ?? null;
        $this->container['memo'] = $data['memo'] ?? null;
        $this->container['outDoorImages'] = $data['outDoorImages'] ?? null;
        $this->container['qualifications'] = $data['qualifications'] ?? null;
        $this->container['scene'] = $data['scene'] ?? null;
        $this->container['settleAlipayLogonId'] = $data['settleAlipayLogonId'] ?? null;
        $this->container['shopCategory'] = $data['shopCategory'] ?? null;
        $this->container['shopName'] = $data['shopName'] ?? null;
        $this->container['shopType'] = $data['shopType'] ?? null;
        $this->container['storeId'] = $data['storeId'] ?? null;
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
     * Gets bizCards
     *
     * @return \Alipay\OpenAPISDK\Model\SettleCardInfo[]|null
     */
    public function getBizCards()
    {
        return $this->container['bizCards'];
    }

    /**
     * Sets bizCards
     *
     * @param \Alipay\OpenAPISDK\Model\SettleCardInfo[]|null $bizCards 门店结算卡信息。本业务当前只允许传入一张结算卡。 说明：本参数仅直付通业务使用，其余业务无需关注。
     *
     * @return self
     */
    public function setBizCards($bizCards)
    {
        $this->container['bizCards'] = $bizCards;

        return $this;
    }

    /**
     * Gets brandId
     *
     * @return string|null
     */
    public function getBrandId()
    {
        return $this->container['brandId'];
    }

    /**
     * Sets brandId
     *
     * @param string|null $brandId 品牌id，非加油站等特殊门店无需关注。通过BP站品牌工具箱可以获取品牌id
     *
     * @return self
     */
    public function setBrandId($brandId)
    {
        $this->container['brandId'] = $brandId;

        return $this;
    }

    /**
     * Gets businessAddress
     *
     * @return \Alipay\OpenAPISDK\Model\AddressInfo|null
     */
    public function getBusinessAddress()
    {
        return $this->container['businessAddress'];
    }

    /**
     * Sets businessAddress
     *
     * @param \Alipay\OpenAPISDK\Model\AddressInfo|null $businessAddress businessAddress
     *
     * @return self
     */
    public function setBusinessAddress($businessAddress)
    {
        $this->container['businessAddress'] = $businessAddress;

        return $this;
    }

    /**
     * Gets businessTime
     *
     * @return \Alipay\OpenAPISDK\Model\ShopBusinessTime[]|null
     */
    public function getBusinessTime()
    {
        return $this->container['businessTime'];
    }

    /**
     * Sets businessTime
     *
     * @param \Alipay\OpenAPISDK\Model\ShopBusinessTime[]|null $businessTime 店铺经营时间。
     *
     * @return self
     */
    public function setBusinessTime($businessTime)
    {
        $this->container['businessTime'] = $businessTime;

        return $this;
    }

    /**
     * Gets certImage
     *
     * @return string|null
     */
    public function getCertImage()
    {
        return $this->container['certImage'];
    }

    /**
     * Sets certImage
     *
     * @param string|null $certImage 营业执照图片KEY
     *
     * @return self
     */
    public function setCertImage($certImage)
    {
        $this->container['certImage'] = $certImage;

        return $this;
    }

    /**
     * Gets certName
     *
     * @return string|null
     */
    public function getCertName()
    {
        return $this->container['certName'];
    }

    /**
     * Sets certName
     *
     * @param string|null $certName 营业执照名称，填写值为营业执照或统一社会信用代码证上的名称。
     *
     * @return self
     */
    public function setCertName($certName)
    {
        $this->container['certName'] = $certName;

        return $this;
    }

    /**
     * Gets certNo
     *
     * @return string|null
     */
    public function getCertNo()
    {
        return $this->container['certNo'];
    }

    /**
     * Sets certNo
     *
     * @param string|null $certNo 证件号码，请填写店铺营业执照号。
     *
     * @return self
     */
    public function setCertNo($certNo)
    {
        $this->container['certNo'] = $certNo;

        return $this;
    }

    /**
     * Gets certType
     *
     * @return string|null
     */
    public function getCertType()
    {
        return $this->container['certType'];
    }

    /**
     * Sets certType
     *
     * @param string|null $certType 证件类型
     *
     * @return self
     */
    public function setCertType($certType)
    {
        $this->container['certType'] = $certType;

        return $this;
    }

    /**
     * Gets contactInfos
     *
     * @return \Alipay\OpenAPISDK\Model\ContactInfo[]|null
     */
    public function getContactInfos()
    {
        return $this->container['contactInfos'];
    }

    /**
     * Sets contactInfos
     *
     * @param \Alipay\OpenAPISDK\Model\ContactInfo[]|null $contactInfos 联系人信息
     *
     * @return self
     */
    public function setContactInfos($contactInfos)
    {
        $this->container['contactInfos'] = $contactInfos;

        return $this;
    }

    /**
     * Gets contactMobile
     *
     * @return string|null
     */
    public function getContactMobile()
    {
        return $this->container['contactMobile'];
    }

    /**
     * Sets contactMobile
     *
     * @param string|null $contactMobile 店铺联系手机号
     *
     * @return self
     */
    public function setContactMobile($contactMobile)
    {
        $this->container['contactMobile'] = $contactMobile;

        return $this;
    }

    /**
     * Gets contactPhone
     *
     * @return string|null
     */
    public function getContactPhone()
    {
        return $this->container['contactPhone'];
    }

    /**
     * Sets contactPhone
     *
     * @param string|null $contactPhone 店铺的联系固定电话
     *
     * @return self
     */
    public function setContactPhone($contactPhone)
    {
        $this->container['contactPhone'] = $contactPhone;

        return $this;
    }

    /**
     * Gets cover
     *
     * @return string|null
     */
    public function getCover()
    {
        return $this->container['cover'];
    }

    /**
     * Sets cover
     *
     * @param string|null $cover 需传入<a href=\"https://opendocs.alipay.com/apis/api_1/ant.merchant.expand.indirect.image.upload\">ant.merchant.expand.indirect.image.upload</a> 接口上传图片后得到的 image_id。
     *
     * @return self
     */
    public function setCover($cover)
    {
        $this->container['cover'] = $cover;

        return $this;
    }

    /**
     * Gets extInfos
     *
     * @return \Alipay\OpenAPISDK\Model\ShopExtInfo[]|null
     */
    public function getExtInfos()
    {
        return $this->container['extInfos'];
    }

    /**
     * Sets extInfos
     *
     * @param \Alipay\OpenAPISDK\Model\ShopExtInfo[]|null $extInfos 扩展信息列表。key值需要向对应行业的bd进行申请。
     *
     * @return self
     */
    public function setExtInfos($extInfos)
    {
        $this->container['extInfos'] = $extInfos;

        return $this;
    }

    /**
     * Gets industryInfo
     *
     * @return \Alipay\OpenAPISDK\Model\MerchantShopIndustryInfo[]|null
     */
    public function getIndustryInfo()
    {
        return $this->container['industryInfo'];
    }

    /**
     * Sets industryInfo
     *
     * @param \Alipay\OpenAPISDK\Model\MerchantShopIndustryInfo[]|null $industryInfo 行业信息，例如所属集团、特殊标签
     *
     * @return self
     */
    public function setIndustryInfo($industryInfo)
    {
        $this->container['industryInfo'] = $industryInfo;

        return $this;
    }

    /**
     * Gets industryLicense
     *
     * @return \Alipay\OpenAPISDK\Model\ShopIndustryLicense[]|null
     */
    public function getIndustryLicense()
    {
        return $this->container['industryLicense'];
    }

    /**
     * Sets industryLicense
     *
     * @param \Alipay\OpenAPISDK\Model\ShopIndustryLicense[]|null $industryLicense 门店资质信息
     *
     * @return self
     */
    public function setIndustryLicense($industryLicense)
    {
        $this->container['industryLicense'] = $industryLicense;

        return $this;
    }

    /**
     * Gets ipRoleId
     *
     * @return string|null
     */
    public function getIpRoleId()
    {
        return $this->container['ipRoleId'];
    }

    /**
     * Sets ipRoleId
     *
     * @param string|null $ipRoleId 当前门店归属的商户角色 ID，表示当前进件的店铺的归属商户。对于直连开店场景，填写商户 PID。对于间连开店场景（线上、线下、直付通），商户SMID
     *
     * @return self
     */
    public function setIpRoleId($ipRoleId)
    {
        $this->container['ipRoleId'] = $ipRoleId;

        return $this;
    }

    /**
     * Gets legalCertNo
     *
     * @return string|null
     */
    public function getLegalCertNo()
    {
        return $this->container['legalCertNo'];
    }

    /**
     * Sets legalCertNo
     *
     * @param string|null $legalCertNo 法人身份证号
     *
     * @return self
     */
    public function setLegalCertNo($legalCertNo)
    {
        $this->container['legalCertNo'] = $legalCertNo;

        return $this;
    }

    /**
     * Gets legalName
     *
     * @return string|null
     */
    public function getLegalName()
    {
        return $this->container['legalName'];
    }

    /**
     * Sets legalName
     *
     * @param string|null $legalName 法人名称
     *
     * @return self
     */
    public function setLegalName($legalName)
    {
        $this->container['legalName'] = $legalName;

        return $this;
    }

    /**
     * Gets licenseAuthLetterImage
     *
     * @return string|null
     */
    public function getLicenseAuthLetterImage()
    {
        return $this->container['licenseAuthLetterImage'];
    }

    /**
     * Sets licenseAuthLetterImage
     *
     * @param string|null $licenseAuthLetterImage 营业执照授权函图片id，通过 ant.merchant.expand.indirect.image.upload 接口上传图片后得到的 image_id
     *
     * @return self
     */
    public function setLicenseAuthLetterImage($licenseAuthLetterImage)
    {
        $this->container['licenseAuthLetterImage'] = $licenseAuthLetterImage;

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
     * @param string|null $memo 备注
     *
     * @return self
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets outDoorImages
     *
     * @return string[]|null
     */
    public function getOutDoorImages()
    {
        return $this->container['outDoorImages'];
    }

    /**
     * Sets outDoorImages
     *
     * @param string[]|null $outDoorImages 需传入<a href=\"https://opendocs.alipay.com/apis/api_1/ant.merchant.expand.indirect.image.upload\">ant.merchant.expand.indirect.image.upload</a> 接口上传图片后得到的 image_id。
     *
     * @return self
     */
    public function setOutDoorImages($outDoorImages)
    {
        $this->container['outDoorImages'] = $outDoorImages;

        return $this;
    }

    /**
     * Gets qualifications
     *
     * @return \Alipay\OpenAPISDK\Model\IndustryQualificationInfo[]|null
     */
    public function getQualifications()
    {
        return $this->container['qualifications'];
    }

    /**
     * Sets qualifications
     *
     * @param \Alipay\OpenAPISDK\Model\IndustryQualificationInfo[]|null $qualifications 行业特殊资质。
     *
     * @return self
     */
    public function setQualifications($qualifications)
    {
        $this->container['qualifications'] = $qualifications;

        return $this;
    }

    /**
     * Gets scene
     *
     * @return string|null
     */
    public function getScene()
    {
        return $this->container['scene'];
    }

    /**
     * Sets scene
     *
     * @param string|null $scene 场景，非加油站/酒店等特殊门店无需关注。
     *
     * @return self
     */
    public function setScene($scene)
    {
        $this->container['scene'] = $scene;

        return $this;
    }

    /**
     * Gets settleAlipayLogonId
     *
     * @return string|null
     */
    public function getSettleAlipayLogonId()
    {
        return $this->container['settleAlipayLogonId'];
    }

    /**
     * Sets settleAlipayLogonId
     *
     * @param string|null $settleAlipayLogonId 门店结算收款的支付宝账号
     *
     * @return self
     */
    public function setSettleAlipayLogonId($settleAlipayLogonId)
    {
        $this->container['settleAlipayLogonId'] = $settleAlipayLogonId;

        return $this;
    }

    /**
     * Gets shopCategory
     *
     * @return string|null
     */
    public function getShopCategory()
    {
        return $this->container['shopCategory'];
    }

    /**
     * Sets shopCategory
     *
     * @param string|null $shopCategory 新版门店类目标准二级类目code。类目标准及与原类目映射关系参见 <a href=\"https://gw.alipayobjects.com/os/bmw-prod/4b3f82df-e53e-4b84-bc41-fe025101e726.xlsx\">支付宝门店类目-最新</a> 表格。
     *
     * @return self
     */
    public function setShopCategory($shopCategory)
    {
        $this->container['shopCategory'] = $shopCategory;

        return $this;
    }

    /**
     * Gets shopName
     *
     * @return string|null
     */
    public function getShopName()
    {
        return $this->container['shopName'];
    }

    /**
     * Sets shopName
     *
     * @param string|null $shopName 店铺名称, 由商户定义在支付宝内的店铺名称
     *
     * @return self
     */
    public function setShopName($shopName)
    {
        $this->container['shopName'] = $shopName;

        return $this;
    }

    /**
     * Gets shopType
     *
     * @return string|null
     */
    public function getShopType()
    {
        return $this->container['shopType'];
    }

    /**
     * Sets shopType
     *
     * @param string|null $shopType 店铺经营类型，01表示直营，02表示加盟
     *
     * @return self
     */
    public function setShopType($shopType)
    {
        $this->container['shopType'] = $shopType;

        return $this;
    }

    /**
     * Gets storeId
     *
     * @return string|null
     */
    public function getStoreId()
    {
        return $this->container['storeId'];
    }

    /**
     * Sets storeId
     *
     * @param string|null $storeId 门店编号，表示该门店在该商户角色id(直连pid，间连smid)下，由商户自己定义的外部门店编号
     *
     * @return self
     */
    public function setStoreId($storeId)
    {
        $this->container['storeId'] = $storeId;

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


