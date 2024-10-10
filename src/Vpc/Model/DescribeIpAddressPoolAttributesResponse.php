<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Volcengine\Vpc\Model;

use ArrayAccess;
use Volcengine\Common\ObjectSerializer;
use Volcengine\Common\ModelInterface;

class DescribeIpAddressPoolAttributesResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DescribeIpAddressPoolAttributesResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'business_status' => 'string',
        'cidr_blocks' => 'string[]',
        'creation_time' => 'string',
        'deleted_time' => 'string',
        'description' => 'string',
        'isp' => 'string',
        'ip_address_pool_id' => 'string',
        'name' => 'string',
        'overdue_time' => 'string',
        'project_name' => 'string',
        'request_id' => 'string',
        'status' => 'string',
        'tags' => '\Volcengine\Vpc\Model\TagForDescribeIpAddressPoolAttributesOutput[]',
        'total_ip_count' => 'int',
        'update_time' => 'string',
        'used_ip_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'business_status' => null,
        'cidr_blocks' => null,
        'creation_time' => null,
        'deleted_time' => null,
        'description' => null,
        'isp' => null,
        'ip_address_pool_id' => null,
        'name' => null,
        'overdue_time' => null,
        'project_name' => null,
        'request_id' => null,
        'status' => null,
        'tags' => null,
        'total_ip_count' => null,
        'update_time' => null,
        'used_ip_count' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'business_status' => 'BusinessStatus',
        'cidr_blocks' => 'CidrBlocks',
        'creation_time' => 'CreationTime',
        'deleted_time' => 'DeletedTime',
        'description' => 'Description',
        'isp' => 'ISP',
        'ip_address_pool_id' => 'IpAddressPoolId',
        'name' => 'Name',
        'overdue_time' => 'OverdueTime',
        'project_name' => 'ProjectName',
        'request_id' => 'RequestId',
        'status' => 'Status',
        'tags' => 'Tags',
        'total_ip_count' => 'TotalIpCount',
        'update_time' => 'UpdateTime',
        'used_ip_count' => 'UsedIpCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'business_status' => 'setBusinessStatus',
        'cidr_blocks' => 'setCidrBlocks',
        'creation_time' => 'setCreationTime',
        'deleted_time' => 'setDeletedTime',
        'description' => 'setDescription',
        'isp' => 'setIsp',
        'ip_address_pool_id' => 'setIpAddressPoolId',
        'name' => 'setName',
        'overdue_time' => 'setOverdueTime',
        'project_name' => 'setProjectName',
        'request_id' => 'setRequestId',
        'status' => 'setStatus',
        'tags' => 'setTags',
        'total_ip_count' => 'setTotalIpCount',
        'update_time' => 'setUpdateTime',
        'used_ip_count' => 'setUsedIpCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'business_status' => 'getBusinessStatus',
        'cidr_blocks' => 'getCidrBlocks',
        'creation_time' => 'getCreationTime',
        'deleted_time' => 'getDeletedTime',
        'description' => 'getDescription',
        'isp' => 'getIsp',
        'ip_address_pool_id' => 'getIpAddressPoolId',
        'name' => 'getName',
        'overdue_time' => 'getOverdueTime',
        'project_name' => 'getProjectName',
        'request_id' => 'getRequestId',
        'status' => 'getStatus',
        'tags' => 'getTags',
        'total_ip_count' => 'getTotalIpCount',
        'update_time' => 'getUpdateTime',
        'used_ip_count' => 'getUsedIpCount'
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
        return self::$swaggerModelName;
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
    public function __construct(array $data = null)
    {
        $this->container['business_status'] = isset($data['business_status']) ? $data['business_status'] : null;
        $this->container['cidr_blocks'] = isset($data['cidr_blocks']) ? $data['cidr_blocks'] : null;
        $this->container['creation_time'] = isset($data['creation_time']) ? $data['creation_time'] : null;
        $this->container['deleted_time'] = isset($data['deleted_time']) ? $data['deleted_time'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['isp'] = isset($data['isp']) ? $data['isp'] : null;
        $this->container['ip_address_pool_id'] = isset($data['ip_address_pool_id']) ? $data['ip_address_pool_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['overdue_time'] = isset($data['overdue_time']) ? $data['overdue_time'] : null;
        $this->container['project_name'] = isset($data['project_name']) ? $data['project_name'] : null;
        $this->container['request_id'] = isset($data['request_id']) ? $data['request_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['total_ip_count'] = isset($data['total_ip_count']) ? $data['total_ip_count'] : null;
        $this->container['update_time'] = isset($data['update_time']) ? $data['update_time'] : null;
        $this->container['used_ip_count'] = isset($data['used_ip_count']) ? $data['used_ip_count'] : null;
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
     * Gets business_status
     *
     * @return string
     */
    public function getBusinessStatus()
    {
        return $this->container['business_status'];
    }

    /**
     * Sets business_status
     *
     * @param string $business_status business_status
     *
     * @return $this
     */
    public function setBusinessStatus($business_status)
    {
        $this->container['business_status'] = $business_status;

        return $this;
    }

    /**
     * Gets cidr_blocks
     *
     * @return string[]
     */
    public function getCidrBlocks()
    {
        return $this->container['cidr_blocks'];
    }

    /**
     * Sets cidr_blocks
     *
     * @param string[] $cidr_blocks cidr_blocks
     *
     * @return $this
     */
    public function setCidrBlocks($cidr_blocks)
    {
        $this->container['cidr_blocks'] = $cidr_blocks;

        return $this;
    }

    /**
     * Gets creation_time
     *
     * @return string
     */
    public function getCreationTime()
    {
        return $this->container['creation_time'];
    }

    /**
     * Sets creation_time
     *
     * @param string $creation_time creation_time
     *
     * @return $this
     */
    public function setCreationTime($creation_time)
    {
        $this->container['creation_time'] = $creation_time;

        return $this;
    }

    /**
     * Gets deleted_time
     *
     * @return string
     */
    public function getDeletedTime()
    {
        return $this->container['deleted_time'];
    }

    /**
     * Sets deleted_time
     *
     * @param string $deleted_time deleted_time
     *
     * @return $this
     */
    public function setDeletedTime($deleted_time)
    {
        $this->container['deleted_time'] = $deleted_time;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets isp
     *
     * @return string
     */
    public function getIsp()
    {
        return $this->container['isp'];
    }

    /**
     * Sets isp
     *
     * @param string $isp isp
     *
     * @return $this
     */
    public function setIsp($isp)
    {
        $this->container['isp'] = $isp;

        return $this;
    }

    /**
     * Gets ip_address_pool_id
     *
     * @return string
     */
    public function getIpAddressPoolId()
    {
        return $this->container['ip_address_pool_id'];
    }

    /**
     * Sets ip_address_pool_id
     *
     * @param string $ip_address_pool_id ip_address_pool_id
     *
     * @return $this
     */
    public function setIpAddressPoolId($ip_address_pool_id)
    {
        $this->container['ip_address_pool_id'] = $ip_address_pool_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets overdue_time
     *
     * @return string
     */
    public function getOverdueTime()
    {
        return $this->container['overdue_time'];
    }

    /**
     * Sets overdue_time
     *
     * @param string $overdue_time overdue_time
     *
     * @return $this
     */
    public function setOverdueTime($overdue_time)
    {
        $this->container['overdue_time'] = $overdue_time;

        return $this;
    }

    /**
     * Gets project_name
     *
     * @return string
     */
    public function getProjectName()
    {
        return $this->container['project_name'];
    }

    /**
     * Sets project_name
     *
     * @param string $project_name project_name
     *
     * @return $this
     */
    public function setProjectName($project_name)
    {
        $this->container['project_name'] = $project_name;

        return $this;
    }

    /**
     * Gets request_id
     *
     * @return string
     */
    public function getRequestId()
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id
     *
     * @param string $request_id request_id
     *
     * @return $this
     */
    public function setRequestId($request_id)
    {
        $this->container['request_id'] = $request_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \Volcengine\Vpc\Model\TagForDescribeIpAddressPoolAttributesOutput[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \Volcengine\Vpc\Model\TagForDescribeIpAddressPoolAttributesOutput[] $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets total_ip_count
     *
     * @return int
     */
    public function getTotalIpCount()
    {
        return $this->container['total_ip_count'];
    }

    /**
     * Sets total_ip_count
     *
     * @param int $total_ip_count total_ip_count
     *
     * @return $this
     */
    public function setTotalIpCount($total_ip_count)
    {
        $this->container['total_ip_count'] = $total_ip_count;

        return $this;
    }

    /**
     * Gets update_time
     *
     * @return string
     */
    public function getUpdateTime()
    {
        return $this->container['update_time'];
    }

    /**
     * Sets update_time
     *
     * @param string $update_time update_time
     *
     * @return $this
     */
    public function setUpdateTime($update_time)
    {
        $this->container['update_time'] = $update_time;

        return $this;
    }

    /**
     * Gets used_ip_count
     *
     * @return int
     */
    public function getUsedIpCount()
    {
        return $this->container['used_ip_count'];
    }

    /**
     * Sets used_ip_count
     *
     * @param int $used_ip_count used_ip_count
     *
     * @return $this
     */
    public function setUsedIpCount($used_ip_count)
    {
        $this->container['used_ip_count'] = $used_ip_count;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

