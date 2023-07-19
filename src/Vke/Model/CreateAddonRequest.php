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

class CreateAddonRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateAddonRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'client_token' => 'string',
        'cluster_id' => 'string',
        'config' => 'string',
        'deploy_mode' => 'string',
        'deploy_node_type' => 'string',
        'name' => 'string',
        'version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'client_token' => null,
        'cluster_id' => null,
        'config' => null,
        'deploy_mode' => null,
        'deploy_node_type' => null,
        'name' => null,
        'version' => null
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
        'client_token' => 'ClientToken',
        'cluster_id' => 'ClusterId',
        'config' => 'Config',
        'deploy_mode' => 'DeployMode',
        'deploy_node_type' => 'DeployNodeType',
        'name' => 'Name',
        'version' => 'Version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'client_token' => 'setClientToken',
        'cluster_id' => 'setClusterId',
        'config' => 'setConfig',
        'deploy_mode' => 'setDeployMode',
        'deploy_node_type' => 'setDeployNodeType',
        'name' => 'setName',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_token' => 'getClientToken',
        'cluster_id' => 'getClusterId',
        'config' => 'getConfig',
        'deploy_mode' => 'getDeployMode',
        'deploy_node_type' => 'getDeployNodeType',
        'name' => 'getName',
        'version' => 'getVersion'
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

    const DEPLOY_MODE_MANAGED = 'Managed';
    const DEPLOY_MODE_UNMANAGED = 'Unmanaged';
    const DEPLOY_NODE_TYPE_EDGE_NODE = 'EdgeNode';
    const DEPLOY_NODE_TYPE_NODE = 'Node';
    const DEPLOY_NODE_TYPE_VIRTUAL_NODE = 'VirtualNode';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeployModeAllowableValues()
    {
        return [
            self::DEPLOY_MODE_MANAGED,
            self::DEPLOY_MODE_UNMANAGED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeployNodeTypeAllowableValues()
    {
        return [
            self::DEPLOY_NODE_TYPE_EDGE_NODE,
            self::DEPLOY_NODE_TYPE_NODE,
            self::DEPLOY_NODE_TYPE_VIRTUAL_NODE,
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
        $this->container['client_token'] = isset($data['client_token']) ? $data['client_token'] : null;
        $this->container['cluster_id'] = isset($data['cluster_id']) ? $data['cluster_id'] : null;
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['deploy_mode'] = isset($data['deploy_mode']) ? $data['deploy_mode'] : null;
        $this->container['deploy_node_type'] = isset($data['deploy_node_type']) ? $data['deploy_node_type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDeployModeAllowableValues();
        if (!is_null($this->container['deploy_mode']) && !in_array($this->container['deploy_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'deploy_mode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDeployNodeTypeAllowableValues();
        if (!is_null($this->container['deploy_node_type']) && !in_array($this->container['deploy_node_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'deploy_node_type', must be one of '%s'",
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
     * Gets cluster_id
     *
     * @return string
     */
    public function getClusterId()
    {
        return $this->container['cluster_id'];
    }

    /**
     * Sets cluster_id
     *
     * @param string $cluster_id cluster_id
     *
     * @return $this
     */
    public function setClusterId($cluster_id)
    {
        $this->container['cluster_id'] = $cluster_id;

        return $this;
    }

    /**
     * Gets config
     *
     * @return string
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     *
     * @param string $config config
     *
     * @return $this
     */
    public function setConfig($config)
    {
        $this->container['config'] = $config;

        return $this;
    }

    /**
     * Gets deploy_mode
     *
     * @return string
     */
    public function getDeployMode()
    {
        return $this->container['deploy_mode'];
    }

    /**
     * Sets deploy_mode
     *
     * @param string $deploy_mode deploy_mode
     *
     * @return $this
     */
    public function setDeployMode($deploy_mode)
    {
        $allowedValues = $this->getDeployModeAllowableValues();
        if (!is_null($deploy_mode) && !in_array($deploy_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'deploy_mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['deploy_mode'] = $deploy_mode;

        return $this;
    }

    /**
     * Gets deploy_node_type
     *
     * @return string
     */
    public function getDeployNodeType()
    {
        return $this->container['deploy_node_type'];
    }

    /**
     * Sets deploy_node_type
     *
     * @param string $deploy_node_type deploy_node_type
     *
     * @return $this
     */
    public function setDeployNodeType($deploy_node_type)
    {
        $allowedValues = $this->getDeployNodeTypeAllowableValues();
        if (!is_null($deploy_node_type) && !in_array($deploy_node_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'deploy_node_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['deploy_node_type'] = $deploy_node_type;

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
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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
