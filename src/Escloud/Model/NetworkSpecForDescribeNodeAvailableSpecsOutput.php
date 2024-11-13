<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Volcengine\Escloud\Model;

use ArrayAccess;
use Volcengine\Common\ObjectSerializer;
use Volcengine\Common\ModelInterface;

class NetworkSpecForDescribeNodeAvailableSpecsOutput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NetworkSpecForDescribeNodeAvailableSpecsOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'network_role' => 'string',
        'spec_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'network_role' => null,
        'spec_name' => null
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
        'network_role' => 'NetworkRole',
        'spec_name' => 'SpecName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'network_role' => 'setNetworkRole',
        'spec_name' => 'setSpecName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'network_role' => 'getNetworkRole',
        'spec_name' => 'getSpecName'
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

    const NETWORK_ROLE_ELASTICSEARCH = 'Elasticsearch';
    const NETWORK_ROLE_KIBANA = 'Kibana';
    const NETWORK_ROLE_ML = 'ML';
    const SPEC_NAME_ESEIPBGP_FIXED_BANDWIDTH = 'es.eip.bgp_fixed_bandwidth';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNetworkRoleAllowableValues()
    {
        return [
            self::NETWORK_ROLE_ELASTICSEARCH,
            self::NETWORK_ROLE_KIBANA,
            self::NETWORK_ROLE_ML,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSpecNameAllowableValues()
    {
        return [
            self::SPEC_NAME_ESEIPBGP_FIXED_BANDWIDTH,
        ];
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
        $this->container['network_role'] = isset($data['network_role']) ? $data['network_role'] : null;
        $this->container['spec_name'] = isset($data['spec_name']) ? $data['spec_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getNetworkRoleAllowableValues();
        if (!is_null($this->container['network_role']) && !in_array($this->container['network_role'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'network_role', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSpecNameAllowableValues();
        if (!is_null($this->container['spec_name']) && !in_array($this->container['spec_name'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'spec_name', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets network_role
     *
     * @return string
     */
    public function getNetworkRole()
    {
        return $this->container['network_role'];
    }

    /**
     * Sets network_role
     *
     * @param string $network_role network_role
     *
     * @return $this
     */
    public function setNetworkRole($network_role)
    {
        $allowedValues = $this->getNetworkRoleAllowableValues();
        if (!is_null($network_role) && !in_array($network_role, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'network_role', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['network_role'] = $network_role;

        return $this;
    }

    /**
     * Gets spec_name
     *
     * @return string
     */
    public function getSpecName()
    {
        return $this->container['spec_name'];
    }

    /**
     * Sets spec_name
     *
     * @param string $spec_name spec_name
     *
     * @return $this
     */
    public function setSpecName($spec_name)
    {
        $allowedValues = $this->getSpecNameAllowableValues();
        if (!is_null($spec_name) && !in_array($spec_name, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'spec_name', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['spec_name'] = $spec_name;

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

