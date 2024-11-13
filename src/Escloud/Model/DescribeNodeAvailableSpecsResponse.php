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

class DescribeNodeAvailableSpecsResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DescribeNodeAvailableSpecsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'az_available_specs_sold_out' => '\Volcengine\Escloud\Model\AZAvailableSpecsSoldOutForDescribeNodeAvailableSpecsOutput',
        'configuration_code' => 'string',
        'network_specs' => '\Volcengine\Escloud\Model\NetworkSpecForDescribeNodeAvailableSpecsOutput[]',
        'node_available_specs' => '\Volcengine\Escloud\Model\NodeAvailableSpecForDescribeNodeAvailableSpecsOutput[]',
        'resource_specs' => '\Volcengine\Escloud\Model\ResourceSpecForDescribeNodeAvailableSpecsOutput[]',
        'storage_specs' => '\Volcengine\Escloud\Model\StorageSpecForDescribeNodeAvailableSpecsOutput[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'az_available_specs_sold_out' => null,
        'configuration_code' => null,
        'network_specs' => null,
        'node_available_specs' => null,
        'resource_specs' => null,
        'storage_specs' => null
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
        'az_available_specs_sold_out' => 'AZAvailableSpecsSoldOut',
        'configuration_code' => 'ConfigurationCode',
        'network_specs' => 'NetworkSpecs',
        'node_available_specs' => 'NodeAvailableSpecs',
        'resource_specs' => 'ResourceSpecs',
        'storage_specs' => 'StorageSpecs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'az_available_specs_sold_out' => 'setAzAvailableSpecsSoldOut',
        'configuration_code' => 'setConfigurationCode',
        'network_specs' => 'setNetworkSpecs',
        'node_available_specs' => 'setNodeAvailableSpecs',
        'resource_specs' => 'setResourceSpecs',
        'storage_specs' => 'setStorageSpecs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'az_available_specs_sold_out' => 'getAzAvailableSpecsSoldOut',
        'configuration_code' => 'getConfigurationCode',
        'network_specs' => 'getNetworkSpecs',
        'node_available_specs' => 'getNodeAvailableSpecs',
        'resource_specs' => 'getResourceSpecs',
        'storage_specs' => 'getStorageSpecs'
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
        $this->container['az_available_specs_sold_out'] = isset($data['az_available_specs_sold_out']) ? $data['az_available_specs_sold_out'] : null;
        $this->container['configuration_code'] = isset($data['configuration_code']) ? $data['configuration_code'] : null;
        $this->container['network_specs'] = isset($data['network_specs']) ? $data['network_specs'] : null;
        $this->container['node_available_specs'] = isset($data['node_available_specs']) ? $data['node_available_specs'] : null;
        $this->container['resource_specs'] = isset($data['resource_specs']) ? $data['resource_specs'] : null;
        $this->container['storage_specs'] = isset($data['storage_specs']) ? $data['storage_specs'] : null;
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
     * Gets az_available_specs_sold_out
     *
     * @return \Volcengine\Escloud\Model\AZAvailableSpecsSoldOutForDescribeNodeAvailableSpecsOutput
     */
    public function getAzAvailableSpecsSoldOut()
    {
        return $this->container['az_available_specs_sold_out'];
    }

    /**
     * Sets az_available_specs_sold_out
     *
     * @param \Volcengine\Escloud\Model\AZAvailableSpecsSoldOutForDescribeNodeAvailableSpecsOutput $az_available_specs_sold_out az_available_specs_sold_out
     *
     * @return $this
     */
    public function setAzAvailableSpecsSoldOut($az_available_specs_sold_out)
    {
        $this->container['az_available_specs_sold_out'] = $az_available_specs_sold_out;

        return $this;
    }

    /**
     * Gets configuration_code
     *
     * @return string
     */
    public function getConfigurationCode()
    {
        return $this->container['configuration_code'];
    }

    /**
     * Sets configuration_code
     *
     * @param string $configuration_code configuration_code
     *
     * @return $this
     */
    public function setConfigurationCode($configuration_code)
    {
        $this->container['configuration_code'] = $configuration_code;

        return $this;
    }

    /**
     * Gets network_specs
     *
     * @return \Volcengine\Escloud\Model\NetworkSpecForDescribeNodeAvailableSpecsOutput[]
     */
    public function getNetworkSpecs()
    {
        return $this->container['network_specs'];
    }

    /**
     * Sets network_specs
     *
     * @param \Volcengine\Escloud\Model\NetworkSpecForDescribeNodeAvailableSpecsOutput[] $network_specs network_specs
     *
     * @return $this
     */
    public function setNetworkSpecs($network_specs)
    {
        $this->container['network_specs'] = $network_specs;

        return $this;
    }

    /**
     * Gets node_available_specs
     *
     * @return \Volcengine\Escloud\Model\NodeAvailableSpecForDescribeNodeAvailableSpecsOutput[]
     */
    public function getNodeAvailableSpecs()
    {
        return $this->container['node_available_specs'];
    }

    /**
     * Sets node_available_specs
     *
     * @param \Volcengine\Escloud\Model\NodeAvailableSpecForDescribeNodeAvailableSpecsOutput[] $node_available_specs node_available_specs
     *
     * @return $this
     */
    public function setNodeAvailableSpecs($node_available_specs)
    {
        $this->container['node_available_specs'] = $node_available_specs;

        return $this;
    }

    /**
     * Gets resource_specs
     *
     * @return \Volcengine\Escloud\Model\ResourceSpecForDescribeNodeAvailableSpecsOutput[]
     */
    public function getResourceSpecs()
    {
        return $this->container['resource_specs'];
    }

    /**
     * Sets resource_specs
     *
     * @param \Volcengine\Escloud\Model\ResourceSpecForDescribeNodeAvailableSpecsOutput[] $resource_specs resource_specs
     *
     * @return $this
     */
    public function setResourceSpecs($resource_specs)
    {
        $this->container['resource_specs'] = $resource_specs;

        return $this;
    }

    /**
     * Gets storage_specs
     *
     * @return \Volcengine\Escloud\Model\StorageSpecForDescribeNodeAvailableSpecsOutput[]
     */
    public function getStorageSpecs()
    {
        return $this->container['storage_specs'];
    }

    /**
     * Sets storage_specs
     *
     * @param \Volcengine\Escloud\Model\StorageSpecForDescribeNodeAvailableSpecsOutput[] $storage_specs storage_specs
     *
     * @return $this
     */
    public function setStorageSpecs($storage_specs)
    {
        $this->container['storage_specs'] = $storage_specs;

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

