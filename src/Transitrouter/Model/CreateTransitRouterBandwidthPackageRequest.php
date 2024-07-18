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

class CreateTransitRouterBandwidthPackageRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateTransitRouterBandwidthPackageRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bandwidth' => 'int',
        'billing_type' => 'int',
        'client_token' => 'string',
        'description' => 'string',
        'local_geographic_region_set_id' => 'string',
        'peer_geographic_region_set_id' => 'string',
        'period' => 'int',
        'period_unit' => 'string',
        'project_name' => 'string',
        'tags' => '\Volcengine\Transitrouter\Model\TagForCreateTransitRouterBandwidthPackageInput[]',
        'transit_router_bandwidth_package_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bandwidth' => 'int32',
        'billing_type' => 'int32',
        'client_token' => null,
        'description' => null,
        'local_geographic_region_set_id' => null,
        'peer_geographic_region_set_id' => null,
        'period' => 'int32',
        'period_unit' => null,
        'project_name' => null,
        'tags' => null,
        'transit_router_bandwidth_package_name' => null
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
        'bandwidth' => 'Bandwidth',
        'billing_type' => 'BillingType',
        'client_token' => 'ClientToken',
        'description' => 'Description',
        'local_geographic_region_set_id' => 'LocalGeographicRegionSetId',
        'peer_geographic_region_set_id' => 'PeerGeographicRegionSetId',
        'period' => 'Period',
        'period_unit' => 'PeriodUnit',
        'project_name' => 'ProjectName',
        'tags' => 'Tags',
        'transit_router_bandwidth_package_name' => 'TransitRouterBandwidthPackageName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bandwidth' => 'setBandwidth',
        'billing_type' => 'setBillingType',
        'client_token' => 'setClientToken',
        'description' => 'setDescription',
        'local_geographic_region_set_id' => 'setLocalGeographicRegionSetId',
        'peer_geographic_region_set_id' => 'setPeerGeographicRegionSetId',
        'period' => 'setPeriod',
        'period_unit' => 'setPeriodUnit',
        'project_name' => 'setProjectName',
        'tags' => 'setTags',
        'transit_router_bandwidth_package_name' => 'setTransitRouterBandwidthPackageName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bandwidth' => 'getBandwidth',
        'billing_type' => 'getBillingType',
        'client_token' => 'getClientToken',
        'description' => 'getDescription',
        'local_geographic_region_set_id' => 'getLocalGeographicRegionSetId',
        'peer_geographic_region_set_id' => 'getPeerGeographicRegionSetId',
        'period' => 'getPeriod',
        'period_unit' => 'getPeriodUnit',
        'project_name' => 'getProjectName',
        'tags' => 'getTags',
        'transit_router_bandwidth_package_name' => 'getTransitRouterBandwidthPackageName'
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
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['billing_type'] = isset($data['billing_type']) ? $data['billing_type'] : null;
        $this->container['client_token'] = isset($data['client_token']) ? $data['client_token'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['local_geographic_region_set_id'] = isset($data['local_geographic_region_set_id']) ? $data['local_geographic_region_set_id'] : null;
        $this->container['peer_geographic_region_set_id'] = isset($data['peer_geographic_region_set_id']) ? $data['peer_geographic_region_set_id'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['period_unit'] = isset($data['period_unit']) ? $data['period_unit'] : null;
        $this->container['project_name'] = isset($data['project_name']) ? $data['project_name'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['transit_router_bandwidth_package_name'] = isset($data['transit_router_bandwidth_package_name']) ? $data['transit_router_bandwidth_package_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['local_geographic_region_set_id'] === null) {
            $invalidProperties[] = "'local_geographic_region_set_id' can't be null";
        }
        if ($this->container['peer_geographic_region_set_id'] === null) {
            $invalidProperties[] = "'peer_geographic_region_set_id' can't be null";
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
     * Gets bandwidth
     *
     * @return int
     */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
     * Sets bandwidth
     *
     * @param int $bandwidth bandwidth
     *
     * @return $this
     */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;

        return $this;
    }

    /**
     * Gets billing_type
     *
     * @return int
     */
    public function getBillingType()
    {
        return $this->container['billing_type'];
    }

    /**
     * Sets billing_type
     *
     * @param int $billing_type billing_type
     *
     * @return $this
     */
    public function setBillingType($billing_type)
    {
        $this->container['billing_type'] = $billing_type;

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
     * Gets local_geographic_region_set_id
     *
     * @return string
     */
    public function getLocalGeographicRegionSetId()
    {
        return $this->container['local_geographic_region_set_id'];
    }

    /**
     * Sets local_geographic_region_set_id
     *
     * @param string $local_geographic_region_set_id local_geographic_region_set_id
     *
     * @return $this
     */
    public function setLocalGeographicRegionSetId($local_geographic_region_set_id)
    {
        $this->container['local_geographic_region_set_id'] = $local_geographic_region_set_id;

        return $this;
    }

    /**
     * Gets peer_geographic_region_set_id
     *
     * @return string
     */
    public function getPeerGeographicRegionSetId()
    {
        return $this->container['peer_geographic_region_set_id'];
    }

    /**
     * Sets peer_geographic_region_set_id
     *
     * @param string $peer_geographic_region_set_id peer_geographic_region_set_id
     *
     * @return $this
     */
    public function setPeerGeographicRegionSetId($peer_geographic_region_set_id)
    {
        $this->container['peer_geographic_region_set_id'] = $peer_geographic_region_set_id;

        return $this;
    }

    /**
     * Gets period
     *
     * @return int
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param int $period period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets period_unit
     *
     * @return string
     */
    public function getPeriodUnit()
    {
        return $this->container['period_unit'];
    }

    /**
     * Sets period_unit
     *
     * @param string $period_unit period_unit
     *
     * @return $this
     */
    public function setPeriodUnit($period_unit)
    {
        $this->container['period_unit'] = $period_unit;

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
     * Gets tags
     *
     * @return \Volcengine\Transitrouter\Model\TagForCreateTransitRouterBandwidthPackageInput[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \Volcengine\Transitrouter\Model\TagForCreateTransitRouterBandwidthPackageInput[] $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets transit_router_bandwidth_package_name
     *
     * @return string
     */
    public function getTransitRouterBandwidthPackageName()
    {
        return $this->container['transit_router_bandwidth_package_name'];
    }

    /**
     * Sets transit_router_bandwidth_package_name
     *
     * @param string $transit_router_bandwidth_package_name transit_router_bandwidth_package_name
     *
     * @return $this
     */
    public function setTransitRouterBandwidthPackageName($transit_router_bandwidth_package_name)
    {
        $this->container['transit_router_bandwidth_package_name'] = $transit_router_bandwidth_package_name;

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
