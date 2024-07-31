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

class DescribeSubnetsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DescribeSubnetsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_default' => 'bool',
        'max_results' => 'int',
        'next_token' => 'string',
        'page_number' => 'int',
        'page_size' => 'int',
        'project_name' => 'string',
        'route_table_id' => 'string',
        'subnet_ids' => 'string[]',
        'subnet_name' => 'string',
        'tag_filters' => '\Volcengine\Vpc\Model\TagFilterForDescribeSubnetsInput[]',
        'vpc_id' => 'string',
        'zone_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_default' => null,
        'max_results' => null,
        'next_token' => null,
        'page_number' => null,
        'page_size' => null,
        'project_name' => null,
        'route_table_id' => null,
        'subnet_ids' => null,
        'subnet_name' => null,
        'tag_filters' => null,
        'vpc_id' => null,
        'zone_id' => null
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
        'is_default' => 'IsDefault',
        'max_results' => 'MaxResults',
        'next_token' => 'NextToken',
        'page_number' => 'PageNumber',
        'page_size' => 'PageSize',
        'project_name' => 'ProjectName',
        'route_table_id' => 'RouteTableId',
        'subnet_ids' => 'SubnetIds',
        'subnet_name' => 'SubnetName',
        'tag_filters' => 'TagFilters',
        'vpc_id' => 'VpcId',
        'zone_id' => 'ZoneId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_default' => 'setIsDefault',
        'max_results' => 'setMaxResults',
        'next_token' => 'setNextToken',
        'page_number' => 'setPageNumber',
        'page_size' => 'setPageSize',
        'project_name' => 'setProjectName',
        'route_table_id' => 'setRouteTableId',
        'subnet_ids' => 'setSubnetIds',
        'subnet_name' => 'setSubnetName',
        'tag_filters' => 'setTagFilters',
        'vpc_id' => 'setVpcId',
        'zone_id' => 'setZoneId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_default' => 'getIsDefault',
        'max_results' => 'getMaxResults',
        'next_token' => 'getNextToken',
        'page_number' => 'getPageNumber',
        'page_size' => 'getPageSize',
        'project_name' => 'getProjectName',
        'route_table_id' => 'getRouteTableId',
        'subnet_ids' => 'getSubnetIds',
        'subnet_name' => 'getSubnetName',
        'tag_filters' => 'getTagFilters',
        'vpc_id' => 'getVpcId',
        'zone_id' => 'getZoneId'
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
        $this->container['is_default'] = isset($data['is_default']) ? $data['is_default'] : null;
        $this->container['max_results'] = isset($data['max_results']) ? $data['max_results'] : null;
        $this->container['next_token'] = isset($data['next_token']) ? $data['next_token'] : null;
        $this->container['page_number'] = isset($data['page_number']) ? $data['page_number'] : null;
        $this->container['page_size'] = isset($data['page_size']) ? $data['page_size'] : null;
        $this->container['project_name'] = isset($data['project_name']) ? $data['project_name'] : null;
        $this->container['route_table_id'] = isset($data['route_table_id']) ? $data['route_table_id'] : null;
        $this->container['subnet_ids'] = isset($data['subnet_ids']) ? $data['subnet_ids'] : null;
        $this->container['subnet_name'] = isset($data['subnet_name']) ? $data['subnet_name'] : null;
        $this->container['tag_filters'] = isset($data['tag_filters']) ? $data['tag_filters'] : null;
        $this->container['vpc_id'] = isset($data['vpc_id']) ? $data['vpc_id'] : null;
        $this->container['zone_id'] = isset($data['zone_id']) ? $data['zone_id'] : null;
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
     * Gets is_default
     *
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->container['is_default'];
    }

    /**
     * Sets is_default
     *
     * @param bool $is_default is_default
     *
     * @return $this
     */
    public function setIsDefault($is_default)
    {
        $this->container['is_default'] = $is_default;

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
     * Gets page_number
     *
     * @return int
     */
    public function getPageNumber()
    {
        return $this->container['page_number'];
    }

    /**
     * Sets page_number
     *
     * @param int $page_number page_number
     *
     * @return $this
     */
    public function setPageNumber($page_number)
    {
        $this->container['page_number'] = $page_number;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return int
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param int $page_size page_size
     *
     * @return $this
     */
    public function setPageSize($page_size)
    {
        $this->container['page_size'] = $page_size;

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
     * Gets route_table_id
     *
     * @return string
     */
    public function getRouteTableId()
    {
        return $this->container['route_table_id'];
    }

    /**
     * Sets route_table_id
     *
     * @param string $route_table_id route_table_id
     *
     * @return $this
     */
    public function setRouteTableId($route_table_id)
    {
        $this->container['route_table_id'] = $route_table_id;

        return $this;
    }

    /**
     * Gets subnet_ids
     *
     * @return string[]
     */
    public function getSubnetIds()
    {
        return $this->container['subnet_ids'];
    }

    /**
     * Sets subnet_ids
     *
     * @param string[] $subnet_ids subnet_ids
     *
     * @return $this
     */
    public function setSubnetIds($subnet_ids)
    {
        $this->container['subnet_ids'] = $subnet_ids;

        return $this;
    }

    /**
     * Gets subnet_name
     *
     * @return string
     */
    public function getSubnetName()
    {
        return $this->container['subnet_name'];
    }

    /**
     * Sets subnet_name
     *
     * @param string $subnet_name subnet_name
     *
     * @return $this
     */
    public function setSubnetName($subnet_name)
    {
        $this->container['subnet_name'] = $subnet_name;

        return $this;
    }

    /**
     * Gets tag_filters
     *
     * @return \Volcengine\Vpc\Model\TagFilterForDescribeSubnetsInput[]
     */
    public function getTagFilters()
    {
        return $this->container['tag_filters'];
    }

    /**
     * Sets tag_filters
     *
     * @param \Volcengine\Vpc\Model\TagFilterForDescribeSubnetsInput[] $tag_filters tag_filters
     *
     * @return $this
     */
    public function setTagFilters($tag_filters)
    {
        $this->container['tag_filters'] = $tag_filters;

        return $this;
    }

    /**
     * Gets vpc_id
     *
     * @return string
     */
    public function getVpcId()
    {
        return $this->container['vpc_id'];
    }

    /**
     * Sets vpc_id
     *
     * @param string $vpc_id vpc_id
     *
     * @return $this
     */
    public function setVpcId($vpc_id)
    {
        $this->container['vpc_id'] = $vpc_id;

        return $this;
    }

    /**
     * Gets zone_id
     *
     * @return string
     */
    public function getZoneId()
    {
        return $this->container['zone_id'];
    }

    /**
     * Sets zone_id
     *
     * @param string $zone_id zone_id
     *
     * @return $this
     */
    public function setZoneId($zone_id)
    {
        $this->container['zone_id'] = $zone_id;

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

