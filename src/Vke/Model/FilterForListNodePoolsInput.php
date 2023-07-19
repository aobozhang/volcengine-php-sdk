<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Volcengine\Vke\Model;

use ArrayAccess;
use Volcengine\Common\ObjectSerializer;
use Volcengine\Common\ModelInterface;

class FilterForListNodePoolsInput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FilterForListNodePoolsInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'auto_scaling_enabled' => 'bool',
        'cluster_ids' => 'string[]',
        'create_client_token' => 'string',
        'ids' => 'string[]',
        'name' => 'string',
        'statuses' => '\Volcengine\Vke\Model\StatusForListNodePoolsInput[]',
        'update_client_token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'auto_scaling_enabled' => null,
        'cluster_ids' => null,
        'create_client_token' => null,
        'ids' => null,
        'name' => null,
        'statuses' => null,
        'update_client_token' => null
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
        'auto_scaling_enabled' => 'AutoScaling.Enabled',
        'cluster_ids' => 'ClusterIds',
        'create_client_token' => 'CreateClientToken',
        'ids' => 'Ids',
        'name' => 'Name',
        'statuses' => 'Statuses',
        'update_client_token' => 'UpdateClientToken'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auto_scaling_enabled' => 'setAutoScalingEnabled',
        'cluster_ids' => 'setClusterIds',
        'create_client_token' => 'setCreateClientToken',
        'ids' => 'setIds',
        'name' => 'setName',
        'statuses' => 'setStatuses',
        'update_client_token' => 'setUpdateClientToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auto_scaling_enabled' => 'getAutoScalingEnabled',
        'cluster_ids' => 'getClusterIds',
        'create_client_token' => 'getCreateClientToken',
        'ids' => 'getIds',
        'name' => 'getName',
        'statuses' => 'getStatuses',
        'update_client_token' => 'getUpdateClientToken'
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
        $this->container['auto_scaling_enabled'] = isset($data['auto_scaling_enabled']) ? $data['auto_scaling_enabled'] : null;
        $this->container['cluster_ids'] = isset($data['cluster_ids']) ? $data['cluster_ids'] : null;
        $this->container['create_client_token'] = isset($data['create_client_token']) ? $data['create_client_token'] : null;
        $this->container['ids'] = isset($data['ids']) ? $data['ids'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['statuses'] = isset($data['statuses']) ? $data['statuses'] : null;
        $this->container['update_client_token'] = isset($data['update_client_token']) ? $data['update_client_token'] : null;
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
     * Gets auto_scaling_enabled
     *
     * @return bool
     */
    public function getAutoScalingEnabled()
    {
        return $this->container['auto_scaling_enabled'];
    }

    /**
     * Sets auto_scaling_enabled
     *
     * @param bool $auto_scaling_enabled auto_scaling_enabled
     *
     * @return $this
     */
    public function setAutoScalingEnabled($auto_scaling_enabled)
    {
        $this->container['auto_scaling_enabled'] = $auto_scaling_enabled;

        return $this;
    }

    /**
     * Gets cluster_ids
     *
     * @return string[]
     */
    public function getClusterIds()
    {
        return $this->container['cluster_ids'];
    }

    /**
     * Sets cluster_ids
     *
     * @param string[] $cluster_ids cluster_ids
     *
     * @return $this
     */
    public function setClusterIds($cluster_ids)
    {
        $this->container['cluster_ids'] = $cluster_ids;

        return $this;
    }

    /**
     * Gets create_client_token
     *
     * @return string
     */
    public function getCreateClientToken()
    {
        return $this->container['create_client_token'];
    }

    /**
     * Sets create_client_token
     *
     * @param string $create_client_token create_client_token
     *
     * @return $this
     */
    public function setCreateClientToken($create_client_token)
    {
        $this->container['create_client_token'] = $create_client_token;

        return $this;
    }

    /**
     * Gets ids
     *
     * @return string[]
     */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
     * Sets ids
     *
     * @param string[] $ids ids
     *
     * @return $this
     */
    public function setIds($ids)
    {
        $this->container['ids'] = $ids;

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
     * Gets statuses
     *
     * @return \Volcengine\Vke\Model\StatusForListNodePoolsInput[]
     */
    public function getStatuses()
    {
        return $this->container['statuses'];
    }

    /**
     * Sets statuses
     *
     * @param \Volcengine\Vke\Model\StatusForListNodePoolsInput[] $statuses statuses
     *
     * @return $this
     */
    public function setStatuses($statuses)
    {
        $this->container['statuses'] = $statuses;

        return $this;
    }

    /**
     * Gets update_client_token
     *
     * @return string
     */
    public function getUpdateClientToken()
    {
        return $this->container['update_client_token'];
    }

    /**
     * Sets update_client_token
     *
     * @param string $update_client_token update_client_token
     *
     * @return $this
     */
    public function setUpdateClientToken($update_client_token)
    {
        $this->container['update_client_token'] = $update_client_token;

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
