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

class DescribeIpAddressPoolsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DescribeIpAddressPoolsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'isp' => 'string',
        'ip_address_pool_ids' => 'string[]',
        'max_results' => 'int',
        'next_token' => 'string',
        'project_name' => 'string',
        'status' => 'string',
        'tag_filters' => '\Volcengine\Vpc\Model\TagFilterForDescribeIpAddressPoolsInput[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'isp' => null,
        'ip_address_pool_ids' => null,
        'max_results' => null,
        'next_token' => null,
        'project_name' => null,
        'status' => null,
        'tag_filters' => null
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
        'isp' => 'ISP',
        'ip_address_pool_ids' => 'IpAddressPoolIds',
        'max_results' => 'MaxResults',
        'next_token' => 'NextToken',
        'project_name' => 'ProjectName',
        'status' => 'Status',
        'tag_filters' => 'TagFilters'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'isp' => 'setIsp',
        'ip_address_pool_ids' => 'setIpAddressPoolIds',
        'max_results' => 'setMaxResults',
        'next_token' => 'setNextToken',
        'project_name' => 'setProjectName',
        'status' => 'setStatus',
        'tag_filters' => 'setTagFilters'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'isp' => 'getIsp',
        'ip_address_pool_ids' => 'getIpAddressPoolIds',
        'max_results' => 'getMaxResults',
        'next_token' => 'getNextToken',
        'project_name' => 'getProjectName',
        'status' => 'getStatus',
        'tag_filters' => 'getTagFilters'
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
        $this->container['isp'] = isset($data['isp']) ? $data['isp'] : null;
        $this->container['ip_address_pool_ids'] = isset($data['ip_address_pool_ids']) ? $data['ip_address_pool_ids'] : null;
        $this->container['max_results'] = isset($data['max_results']) ? $data['max_results'] : null;
        $this->container['next_token'] = isset($data['next_token']) ? $data['next_token'] : null;
        $this->container['project_name'] = isset($data['project_name']) ? $data['project_name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tag_filters'] = isset($data['tag_filters']) ? $data['tag_filters'] : null;
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
     * Gets ip_address_pool_ids
     *
     * @return string[]
     */
    public function getIpAddressPoolIds()
    {
        return $this->container['ip_address_pool_ids'];
    }

    /**
     * Sets ip_address_pool_ids
     *
     * @param string[] $ip_address_pool_ids ip_address_pool_ids
     *
     * @return $this
     */
    public function setIpAddressPoolIds($ip_address_pool_ids)
    {
        $this->container['ip_address_pool_ids'] = $ip_address_pool_ids;

        return $this;
    }

    /**
     * Gets max_results
     *
     * @return int
     */
    public function getMaxResults()
    {
        return $this->container['max_results'];
    }

    /**
     * Sets max_results
     *
     * @param int $max_results max_results
     *
     * @return $this
     */
    public function setMaxResults($max_results)
    {
        $this->container['max_results'] = $max_results;

        return $this;
    }

    /**
     * Gets next_token
     *
     * @return string
     */
    public function getNextToken()
    {
        return $this->container['next_token'];
    }

    /**
     * Sets next_token
     *
     * @param string $next_token next_token
     *
     * @return $this
     */
    public function setNextToken($next_token)
    {
        $this->container['next_token'] = $next_token;

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
     * Gets tag_filters
     *
     * @return \Volcengine\Vpc\Model\TagFilterForDescribeIpAddressPoolsInput[]
     */
    public function getTagFilters()
    {
        return $this->container['tag_filters'];
    }

    /**
     * Sets tag_filters
     *
     * @param \Volcengine\Vpc\Model\TagFilterForDescribeIpAddressPoolsInput[] $tag_filters tag_filters
     *
     * @return $this
     */
    public function setTagFilters($tag_filters)
    {
        $this->container['tag_filters'] = $tag_filters;

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

