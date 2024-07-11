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

class ModifyTransitRouterForwardPolicyEntryAttributesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ModifyTransitRouterForwardPolicyEntryAttributesRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'description' => 'string',
        'priority' => 'int',
        'source_cidr_block' => 'string',
        'transit_router_forward_policy_entry_id' => 'string',
        'transit_router_route_table_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'description' => null,
        'priority' => 'int32',
        'source_cidr_block' => null,
        'transit_router_forward_policy_entry_id' => null,
        'transit_router_route_table_id' => null
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
        'description' => 'Description',
        'priority' => 'Priority',
        'source_cidr_block' => 'SourceCidrBlock',
        'transit_router_forward_policy_entry_id' => 'TransitRouterForwardPolicyEntryId',
        'transit_router_route_table_id' => 'TransitRouterRouteTableId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'priority' => 'setPriority',
        'source_cidr_block' => 'setSourceCidrBlock',
        'transit_router_forward_policy_entry_id' => 'setTransitRouterForwardPolicyEntryId',
        'transit_router_route_table_id' => 'setTransitRouterRouteTableId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'priority' => 'getPriority',
        'source_cidr_block' => 'getSourceCidrBlock',
        'transit_router_forward_policy_entry_id' => 'getTransitRouterForwardPolicyEntryId',
        'transit_router_route_table_id' => 'getTransitRouterRouteTableId'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['source_cidr_block'] = isset($data['source_cidr_block']) ? $data['source_cidr_block'] : null;
        $this->container['transit_router_forward_policy_entry_id'] = isset($data['transit_router_forward_policy_entry_id']) ? $data['transit_router_forward_policy_entry_id'] : null;
        $this->container['transit_router_route_table_id'] = isset($data['transit_router_route_table_id']) ? $data['transit_router_route_table_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['transit_router_forward_policy_entry_id'] === null) {
            $invalidProperties[] = "'transit_router_forward_policy_entry_id' can't be null";
        }
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
     * Gets priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int $priority priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets source_cidr_block
     *
     * @return string
     */
    public function getSourceCidrBlock()
    {
        return $this->container['source_cidr_block'];
    }

    /**
     * Sets source_cidr_block
     *
     * @param string $source_cidr_block source_cidr_block
     *
     * @return $this
     */
    public function setSourceCidrBlock($source_cidr_block)
    {
        $this->container['source_cidr_block'] = $source_cidr_block;

        return $this;
    }

    /**
     * Gets transit_router_forward_policy_entry_id
     *
     * @return string
     */
    public function getTransitRouterForwardPolicyEntryId()
    {
        return $this->container['transit_router_forward_policy_entry_id'];
    }

    /**
     * Sets transit_router_forward_policy_entry_id
     *
     * @param string $transit_router_forward_policy_entry_id transit_router_forward_policy_entry_id
     *
     * @return $this
     */
    public function setTransitRouterForwardPolicyEntryId($transit_router_forward_policy_entry_id)
    {
        $this->container['transit_router_forward_policy_entry_id'] = $transit_router_forward_policy_entry_id;

        return $this;
    }

    /**
     * Gets transit_router_route_table_id
     *
     * @return string
     */
    public function getTransitRouterRouteTableId()
    {
        return $this->container['transit_router_route_table_id'];
    }

    /**
     * Sets transit_router_route_table_id
     *
     * @param string $transit_router_route_table_id transit_router_route_table_id
     *
     * @return $this
     */
    public function setTransitRouterRouteTableId($transit_router_route_table_id)
    {
        $this->container['transit_router_route_table_id'] = $transit_router_route_table_id;

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

