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

class CreateTransitRouterTrafficQosQueueEntryRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateTransitRouterTrafficQosQueueEntryRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bandwidth_percent' => 'int',
        'client_token' => 'string',
        'description' => 'string',
        'dscps' => 'int[]',
        'transit_router_traffic_qos_queue_entry_name' => 'string',
        'transit_router_traffic_qos_queue_policy_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bandwidth_percent' => 'int32',
        'client_token' => null,
        'description' => null,
        'dscps' => 'int32',
        'transit_router_traffic_qos_queue_entry_name' => null,
        'transit_router_traffic_qos_queue_policy_id' => null
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
        'bandwidth_percent' => 'BandwidthPercent',
        'client_token' => 'ClientToken',
        'description' => 'Description',
        'dscps' => 'Dscps',
        'transit_router_traffic_qos_queue_entry_name' => 'TransitRouterTrafficQosQueueEntryName',
        'transit_router_traffic_qos_queue_policy_id' => 'TransitRouterTrafficQosQueuePolicyId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bandwidth_percent' => 'setBandwidthPercent',
        'client_token' => 'setClientToken',
        'description' => 'setDescription',
        'dscps' => 'setDscps',
        'transit_router_traffic_qos_queue_entry_name' => 'setTransitRouterTrafficQosQueueEntryName',
        'transit_router_traffic_qos_queue_policy_id' => 'setTransitRouterTrafficQosQueuePolicyId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bandwidth_percent' => 'getBandwidthPercent',
        'client_token' => 'getClientToken',
        'description' => 'getDescription',
        'dscps' => 'getDscps',
        'transit_router_traffic_qos_queue_entry_name' => 'getTransitRouterTrafficQosQueueEntryName',
        'transit_router_traffic_qos_queue_policy_id' => 'getTransitRouterTrafficQosQueuePolicyId'
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
        $this->container['bandwidth_percent'] = isset($data['bandwidth_percent']) ? $data['bandwidth_percent'] : null;
        $this->container['client_token'] = isset($data['client_token']) ? $data['client_token'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['dscps'] = isset($data['dscps']) ? $data['dscps'] : null;
        $this->container['transit_router_traffic_qos_queue_entry_name'] = isset($data['transit_router_traffic_qos_queue_entry_name']) ? $data['transit_router_traffic_qos_queue_entry_name'] : null;
        $this->container['transit_router_traffic_qos_queue_policy_id'] = isset($data['transit_router_traffic_qos_queue_policy_id']) ? $data['transit_router_traffic_qos_queue_policy_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['bandwidth_percent'] === null) {
            $invalidProperties[] = "'bandwidth_percent' can't be null";
        }
        if ($this->container['transit_router_traffic_qos_queue_entry_name'] === null) {
            $invalidProperties[] = "'transit_router_traffic_qos_queue_entry_name' can't be null";
        }
        if ($this->container['transit_router_traffic_qos_queue_policy_id'] === null) {
            $invalidProperties[] = "'transit_router_traffic_qos_queue_policy_id' can't be null";
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
     * Gets bandwidth_percent
     *
     * @return int
     */
    public function getBandwidthPercent()
    {
        return $this->container['bandwidth_percent'];
    }

    /**
     * Sets bandwidth_percent
     *
     * @param int $bandwidth_percent bandwidth_percent
     *
     * @return $this
     */
    public function setBandwidthPercent($bandwidth_percent)
    {
        $this->container['bandwidth_percent'] = $bandwidth_percent;

        return $this;
    }

    /**
     * Gets client_token
     *
     * @return string
     */
    public function getClientToken()
    {
        return $this->container['client_token'];
    }

    /**
     * Sets client_token
     *
     * @param string $client_token client_token
     *
     * @return $this
     */
    public function setClientToken($client_token)
    {
        $this->container['client_token'] = $client_token;

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
     * Gets dscps
     *
     * @return int[]
     */
    public function getDscps()
    {
        return $this->container['dscps'];
    }

    /**
     * Sets dscps
     *
     * @param int[] $dscps dscps
     *
     * @return $this
     */
    public function setDscps($dscps)
    {
        $this->container['dscps'] = $dscps;

        return $this;
    }

    /**
     * Gets transit_router_traffic_qos_queue_entry_name
     *
     * @return string
     */
    public function getTransitRouterTrafficQosQueueEntryName()
    {
        return $this->container['transit_router_traffic_qos_queue_entry_name'];
    }

    /**
     * Sets transit_router_traffic_qos_queue_entry_name
     *
     * @param string $transit_router_traffic_qos_queue_entry_name transit_router_traffic_qos_queue_entry_name
     *
     * @return $this
     */
    public function setTransitRouterTrafficQosQueueEntryName($transit_router_traffic_qos_queue_entry_name)
    {
        $this->container['transit_router_traffic_qos_queue_entry_name'] = $transit_router_traffic_qos_queue_entry_name;

        return $this;
    }

    /**
     * Gets transit_router_traffic_qos_queue_policy_id
     *
     * @return string
     */
    public function getTransitRouterTrafficQosQueuePolicyId()
    {
        return $this->container['transit_router_traffic_qos_queue_policy_id'];
    }

    /**
     * Sets transit_router_traffic_qos_queue_policy_id
     *
     * @param string $transit_router_traffic_qos_queue_policy_id transit_router_traffic_qos_queue_policy_id
     *
     * @return $this
     */
    public function setTransitRouterTrafficQosQueuePolicyId($transit_router_traffic_qos_queue_policy_id)
    {
        $this->container['transit_router_traffic_qos_queue_policy_id'] = $transit_router_traffic_qos_queue_policy_id;

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

