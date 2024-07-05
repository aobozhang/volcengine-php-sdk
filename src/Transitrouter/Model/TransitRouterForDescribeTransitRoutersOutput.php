<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Volcengine\Transitrouter\Model;

use ArrayAccess;
use Volcengine\Common\ObjectSerializer;
use Volcengine\Common\ModelInterface;

class TransitRouterForDescribeTransitRoutersOutput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransitRouterForDescribeTransitRoutersOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_id' => 'string',
        'asn' => 'int',
        'business_status' => 'string',
        'creation_time' => 'string',
        'deleted_time' => 'string',
        'description' => 'string',
        'grant_status' => 'string',
        'overdue_time' => 'string',
        'project_name' => 'string',
        'status' => 'string',
        'tags' => '\Volcengine\Transitrouter\Model\TagForDescribeTransitRoutersOutput[]',
        'transit_router_id' => 'string',
        'transit_router_name' => 'string',
        'update_time' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_id' => null,
        'asn' => 'int64',
        'business_status' => null,
        'creation_time' => null,
        'deleted_time' => null,
        'description' => null,
        'grant_status' => null,
        'overdue_time' => null,
        'project_name' => null,
        'status' => null,
        'tags' => null,
        'transit_router_id' => null,
        'transit_router_name' => null,
        'update_time' => null
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
        'account_id' => 'AccountId',
        'asn' => 'Asn',
        'business_status' => 'BusinessStatus',
        'creation_time' => 'CreationTime',
        'deleted_time' => 'DeletedTime',
        'description' => 'Description',
        'grant_status' => 'GrantStatus',
        'overdue_time' => 'OverdueTime',
        'project_name' => 'ProjectName',
        'status' => 'Status',
        'tags' => 'Tags',
        'transit_router_id' => 'TransitRouterId',
        'transit_router_name' => 'TransitRouterName',
        'update_time' => 'UpdateTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'asn' => 'setAsn',
        'business_status' => 'setBusinessStatus',
        'creation_time' => 'setCreationTime',
        'deleted_time' => 'setDeletedTime',
        'description' => 'setDescription',
        'grant_status' => 'setGrantStatus',
        'overdue_time' => 'setOverdueTime',
        'project_name' => 'setProjectName',
        'status' => 'setStatus',
        'tags' => 'setTags',
        'transit_router_id' => 'setTransitRouterId',
        'transit_router_name' => 'setTransitRouterName',
        'update_time' => 'setUpdateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'asn' => 'getAsn',
        'business_status' => 'getBusinessStatus',
        'creation_time' => 'getCreationTime',
        'deleted_time' => 'getDeletedTime',
        'description' => 'getDescription',
        'grant_status' => 'getGrantStatus',
        'overdue_time' => 'getOverdueTime',
        'project_name' => 'getProjectName',
        'status' => 'getStatus',
        'tags' => 'getTags',
        'transit_router_id' => 'getTransitRouterId',
        'transit_router_name' => 'getTransitRouterName',
        'update_time' => 'getUpdateTime'
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['asn'] = isset($data['asn']) ? $data['asn'] : null;
        $this->container['business_status'] = isset($data['business_status']) ? $data['business_status'] : null;
        $this->container['creation_time'] = isset($data['creation_time']) ? $data['creation_time'] : null;
        $this->container['deleted_time'] = isset($data['deleted_time']) ? $data['deleted_time'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['grant_status'] = isset($data['grant_status']) ? $data['grant_status'] : null;
        $this->container['overdue_time'] = isset($data['overdue_time']) ? $data['overdue_time'] : null;
        $this->container['project_name'] = isset($data['project_name']) ? $data['project_name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['transit_router_id'] = isset($data['transit_router_id']) ? $data['transit_router_id'] : null;
        $this->container['transit_router_name'] = isset($data['transit_router_name']) ? $data['transit_router_name'] : null;
        $this->container['update_time'] = isset($data['update_time']) ? $data['update_time'] : null;
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
     * Gets account_id
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string $account_id account_id
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets asn
     *
     * @return int
     */
    public function getAsn()
    {
        return $this->container['asn'];
    }

    /**
     * Sets asn
     *
     * @param int $asn asn
     *
     * @return $this
     */
    public function setAsn($asn)
    {
        $this->container['asn'] = $asn;

        return $this;
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
     * Gets grant_status
     *
     * @return string
     */
    public function getGrantStatus()
    {
        return $this->container['grant_status'];
    }

    /**
     * Sets grant_status
     *
     * @param string $grant_status grant_status
     *
     * @return $this
     */
    public function setGrantStatus($grant_status)
    {
        $this->container['grant_status'] = $grant_status;

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
     * @return \Volcengine\Transitrouter\Model\TagForDescribeTransitRoutersOutput[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \Volcengine\Transitrouter\Model\TagForDescribeTransitRoutersOutput[] $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets transit_router_id
     *
     * @return string
     */
    public function getTransitRouterId()
    {
        return $this->container['transit_router_id'];
    }

    /**
     * Sets transit_router_id
     *
     * @param string $transit_router_id transit_router_id
     *
     * @return $this
     */
    public function setTransitRouterId($transit_router_id)
    {
        $this->container['transit_router_id'] = $transit_router_id;

        return $this;
    }

    /**
     * Gets transit_router_name
     *
     * @return string
     */
    public function getTransitRouterName()
    {
        return $this->container['transit_router_name'];
    }

    /**
     * Sets transit_router_name
     *
     * @param string $transit_router_name transit_router_name
     *
     * @return $this
     */
    public function setTransitRouterName($transit_router_name)
    {
        $this->container['transit_router_name'] = $transit_router_name;

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

