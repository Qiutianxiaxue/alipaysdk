<?php
/**
 * AlipayEcoEduKtBillingSendModel
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
 * AlipayEcoEduKtBillingSendModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayEcoEduKtBillingSendModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayEcoEduKtBillingSendModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'string',
        'chargeBillTitle' => 'string',
        'chargeItem' => '\Alipay\OpenAPISDK\Model\ChargeItems[]',
        'chargeType' => 'string',
        'childName' => 'string',
        'classIn' => 'string',
        'endEnable' => 'string',
        'extInfo' => '\Alipay\OpenAPISDK\Model\BillSendExtInfo',
        'gmtEnd' => 'string',
        'grade' => 'string',
        'outTradeNo' => 'string',
        'partnerId' => 'string',
        'schoolNo' => 'string',
        'schoolPid' => 'string',
        'studentCode' => 'string',
        'studentIdentify' => 'string',
        'users' => '\Alipay\OpenAPISDK\Model\UserDetails[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'chargeBillTitle' => null,
        'chargeItem' => null,
        'chargeType' => null,
        'childName' => null,
        'classIn' => null,
        'endEnable' => null,
        'extInfo' => null,
        'gmtEnd' => null,
        'grade' => null,
        'outTradeNo' => null,
        'partnerId' => null,
        'schoolNo' => null,
        'schoolPid' => null,
        'studentCode' => null,
        'studentIdentify' => null,
        'users' => null
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
        'amount' => 'amount',
        'chargeBillTitle' => 'charge_bill_title',
        'chargeItem' => 'charge_item',
        'chargeType' => 'charge_type',
        'childName' => 'child_name',
        'classIn' => 'class_in',
        'endEnable' => 'end_enable',
        'extInfo' => 'ext_info',
        'gmtEnd' => 'gmt_end',
        'grade' => 'grade',
        'outTradeNo' => 'out_trade_no',
        'partnerId' => 'partner_id',
        'schoolNo' => 'school_no',
        'schoolPid' => 'school_pid',
        'studentCode' => 'student_code',
        'studentIdentify' => 'student_identify',
        'users' => 'users'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'chargeBillTitle' => 'setChargeBillTitle',
        'chargeItem' => 'setChargeItem',
        'chargeType' => 'setChargeType',
        'childName' => 'setChildName',
        'classIn' => 'setClassIn',
        'endEnable' => 'setEndEnable',
        'extInfo' => 'setExtInfo',
        'gmtEnd' => 'setGmtEnd',
        'grade' => 'setGrade',
        'outTradeNo' => 'setOutTradeNo',
        'partnerId' => 'setPartnerId',
        'schoolNo' => 'setSchoolNo',
        'schoolPid' => 'setSchoolPid',
        'studentCode' => 'setStudentCode',
        'studentIdentify' => 'setStudentIdentify',
        'users' => 'setUsers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'chargeBillTitle' => 'getChargeBillTitle',
        'chargeItem' => 'getChargeItem',
        'chargeType' => 'getChargeType',
        'childName' => 'getChildName',
        'classIn' => 'getClassIn',
        'endEnable' => 'getEndEnable',
        'extInfo' => 'getExtInfo',
        'gmtEnd' => 'getGmtEnd',
        'grade' => 'getGrade',
        'outTradeNo' => 'getOutTradeNo',
        'partnerId' => 'getPartnerId',
        'schoolNo' => 'getSchoolNo',
        'schoolPid' => 'getSchoolPid',
        'studentCode' => 'getStudentCode',
        'studentIdentify' => 'getStudentIdentify',
        'users' => 'getUsers'
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
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['chargeBillTitle'] = $data['chargeBillTitle'] ?? null;
        $this->container['chargeItem'] = $data['chargeItem'] ?? null;
        $this->container['chargeType'] = $data['chargeType'] ?? null;
        $this->container['childName'] = $data['childName'] ?? null;
        $this->container['classIn'] = $data['classIn'] ?? null;
        $this->container['endEnable'] = $data['endEnable'] ?? null;
        $this->container['extInfo'] = $data['extInfo'] ?? null;
        $this->container['gmtEnd'] = $data['gmtEnd'] ?? null;
        $this->container['grade'] = $data['grade'] ?? null;
        $this->container['outTradeNo'] = $data['outTradeNo'] ?? null;
        $this->container['partnerId'] = $data['partnerId'] ?? null;
        $this->container['schoolNo'] = $data['schoolNo'] ?? null;
        $this->container['schoolPid'] = $data['schoolPid'] ?? null;
        $this->container['studentCode'] = $data['studentCode'] ?? null;
        $this->container['studentIdentify'] = $data['studentIdentify'] ?? null;
        $this->container['users'] = $data['users'] ?? null;
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
     * Gets amount
     *
     * @return string|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string|null $amount 总金额，单位为元，精确到小数点后两位，取值范围[0.01,100000000]，  如果是非多选项，是要和缴费项的总和相同，多选模式不做验证
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets chargeBillTitle
     *
     * @return string|null
     */
    public function getChargeBillTitle()
    {
        return $this->container['chargeBillTitle'];
    }

    /**
     * Sets chargeBillTitle
     *
     * @param string|null $chargeBillTitle 缴费账单名称
     *
     * @return self
     */
    public function setChargeBillTitle($chargeBillTitle)
    {
        $this->container['chargeBillTitle'] = $chargeBillTitle;

        return $this;
    }

    /**
     * Gets chargeItem
     *
     * @return \Alipay\OpenAPISDK\Model\ChargeItems[]|null
     */
    public function getChargeItem()
    {
        return $this->container['chargeItem'];
    }

    /**
     * Sets chargeItem
     *
     * @param \Alipay\OpenAPISDK\Model\ChargeItems[]|null $chargeItem 缴费详情：输入json格式字符串。Json定义：key填写缴费项名称，value填写缴费项金额，金额保留2位小数（单位：元）
     *
     * @return self
     */
    public function setChargeItem($chargeItem)
    {
        $this->container['chargeItem'] = $chargeItem;

        return $this;
    }

    /**
     * Gets chargeType
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->container['chargeType'];
    }

    /**
     * Sets chargeType
     *
     * @param string|null $chargeType 缴费项模式：空或\"N\"，表示缴费项不可选，  \"M\"表示缴费项为可选 ，支持单选和多选。
     *
     * @return self
     */
    public function setChargeType($chargeType)
    {
        $this->container['chargeType'] = $chargeType;

        return $this;
    }

    /**
     * Gets childName
     *
     * @return string|null
     */
    public function getChildName()
    {
        return $this->container['childName'];
    }

    /**
     * Sets childName
     *
     * @param string|null $childName 孩子名字
     *
     * @return self
     */
    public function setChildName($childName)
    {
        $this->container['childName'] = $childName;

        return $this;
    }

    /**
     * Gets classIn
     *
     * @return string|null
     */
    public function getClassIn()
    {
        return $this->container['classIn'];
    }

    /**
     * Sets classIn
     *
     * @param string|null $classIn 孩子所在班级
     *
     * @return self
     */
    public function setClassIn($classIn)
    {
        $this->container['classIn'] = $classIn;

        return $this;
    }

    /**
     * Gets endEnable
     *
     * @return string|null
     */
    public function getEndEnable()
    {
        return $this->container['endEnable'];
    }

    /**
     * Sets endEnable
     *
     * @param string|null $endEnable 截止日期是否生效，与gmt_end发布配合使用,N为gmt_end不生效，用户过期后仍可以缴费；Y为gmt_end生效，用户过期后，不能再缴费。
     *
     * @return self
     */
    public function setEndEnable($endEnable)
    {
        $this->container['endEnable'] = $endEnable;

        return $this;
    }

    /**
     * Gets extInfo
     *
     * @return \Alipay\OpenAPISDK\Model\BillSendExtInfo|null
     */
    public function getExtInfo()
    {
        return $this->container['extInfo'];
    }

    /**
     * Sets extInfo
     *
     * @param \Alipay\OpenAPISDK\Model\BillSendExtInfo|null $extInfo extInfo
     *
     * @return self
     */
    public function setExtInfo($extInfo)
    {
        $this->container['extInfo'] = $extInfo;

        return $this;
    }

    /**
     * Gets gmtEnd
     *
     * @return string|null
     */
    public function getGmtEnd()
    {
        return $this->container['gmtEnd'];
    }

    /**
     * Sets gmtEnd
     *
     * @param string|null $gmtEnd 缴费截止时间，格式\"yyyy-MM-dd HH:mm:ss\"，日期要大于当前时间。请注意，过期时间不宜设置过短。
     *
     * @return self
     */
    public function setGmtEnd($gmtEnd)
    {
        $this->container['gmtEnd'] = $gmtEnd;

        return $this;
    }

    /**
     * Gets grade
     *
     * @return string|null
     */
    public function getGrade()
    {
        return $this->container['grade'];
    }

    /**
     * Sets grade
     *
     * @param string|null $grade 孩子所在年级
     *
     * @return self
     */
    public function setGrade($grade)
    {
        $this->container['grade'] = $grade;

        return $this;
    }

    /**
     * Gets outTradeNo
     *
     * @return string|null
     */
    public function getOutTradeNo()
    {
        return $this->container['outTradeNo'];
    }

    /**
     * Sets outTradeNo
     *
     * @param string|null $outTradeNo ISV端的缴费账单编号
     *
     * @return self
     */
    public function setOutTradeNo($outTradeNo)
    {
        $this->container['outTradeNo'] = $outTradeNo;

        return $this;
    }

    /**
     * Gets partnerId
     *
     * @return string|null
     */
    public function getPartnerId()
    {
        return $this->container['partnerId'];
    }

    /**
     * Sets partnerId
     *
     * @param string|null $partnerId Isv支付宝pid, 支付宝签约后，返回给ISV编号
     *
     * @return self
     */
    public function setPartnerId($partnerId)
    {
        $this->container['partnerId'] = $partnerId;

        return $this;
    }

    /**
     * Gets schoolNo
     *
     * @return string|null
     */
    public function getSchoolNo()
    {
        return $this->container['schoolNo'];
    }

    /**
     * Sets schoolNo
     *
     * @param string|null $schoolNo 学校编码，录入学校接口返回的参数
     *
     * @return self
     */
    public function setSchoolNo($schoolNo)
    {
        $this->container['schoolNo'] = $schoolNo;

        return $this;
    }

    /**
     * Gets schoolPid
     *
     * @return string|null
     */
    public function getSchoolPid()
    {
        return $this->container['schoolPid'];
    }

    /**
     * Sets schoolPid
     *
     * @param string|null $schoolPid 学校支付宝pid,直付通填写smid
     *
     * @return self
     */
    public function setSchoolPid($schoolPid)
    {
        $this->container['schoolPid'] = $schoolPid;

        return $this;
    }

    /**
     * Gets studentCode
     *
     * @return string|null
     */
    public function getStudentCode()
    {
        return $this->container['studentCode'];
    }

    /**
     * Sets studentCode
     *
     * @param string|null $studentCode 学生的学号，只支持字母和数字类型，一般以教育局学号为准，作为学生的唯一标识。此字段与student_identify、家长user_mobile至少选一个
     *
     * @return self
     */
    public function setStudentCode($studentCode)
    {
        $this->container['studentCode'] = $studentCode;

        return $this;
    }

    /**
     * Gets studentIdentify
     *
     * @return string|null
     */
    public function getStudentIdentify()
    {
        return $this->container['studentIdentify'];
    }

    /**
     * Sets studentIdentify
     *
     * @param string|null $studentIdentify 学生的身份证号，如果ISV有学生身份证号，则同步身份证号作为学生唯一标识。此字段与student_code、家长user_mobile至少选一个。  大陆身份证必须是18位 ， 其它地区或国家的身份证开头需要加\"IC\"开头区分并且不超过18位，但查询账单的时候不要带\"IC\"
     *
     * @return self
     */
    public function setStudentIdentify($studentIdentify)
    {
        $this->container['studentIdentify'] = $studentIdentify;

        return $this;
    }

    /**
     * Gets users
     *
     * @return \Alipay\OpenAPISDK\Model\UserDetails[]|null
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     *
     * @param \Alipay\OpenAPISDK\Model\UserDetails[]|null $users 孩子的家长信息，最多一次输入10个家长，此字段做为识别家长的孩子用，与student_identify、student_code至少选一个
     *
     * @return self
     */
    public function setUsers($users)
    {
        $this->container['users'] = $users;

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


