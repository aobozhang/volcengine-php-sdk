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

class InstanceConfigurationForDescribeInstancesOutput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InstanceConfigurationForDescribeInstancesOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'admin_user_name' => 'string',
        'charge_type' => 'string',
        'cold_node_number' => 'int',
        'cold_node_resource_spec' => '\Volcengine\Escloud\Model\ColdNodeResourceSpecForDescribeInstancesOutput',
        'cold_node_storage_spec' => '\Volcengine\Escloud\Model\ColdNodeStorageSpecForDescribeInstancesOutput',
        'coordinator_node_number' => 'int',
        'coordinator_node_resource_spec' => '\Volcengine\Escloud\Model\CoordinatorNodeResourceSpecForDescribeInstancesOutput',
        'coordinator_node_storage_spec' => '\Volcengine\Escloud\Model\CoordinatorNodeStorageSpecForDescribeInstancesOutput',
        'enable_https' => 'bool',
        'enable_pure_master' => 'bool',
        'hot_node_number' => 'int',
        'hot_node_resource_spec' => '\Volcengine\Escloud\Model\HotNodeResourceSpecForDescribeInstancesOutput',
        'hot_node_storage_spec' => '\Volcengine\Escloud\Model\HotNodeStorageSpecForDescribeInstancesOutput',
        'instance_name' => 'string',
        'kibana_node_number' => 'int',
        'kibana_node_resource_spec' => '\Volcengine\Escloud\Model\KibanaNodeResourceSpecForDescribeInstancesOutput',
        'master_node_number' => 'int',
        'master_node_resource_spec' => '\Volcengine\Escloud\Model\MasterNodeResourceSpecForDescribeInstancesOutput',
        'master_node_storage_spec' => '\Volcengine\Escloud\Model\MasterNodeStorageSpecForDescribeInstancesOutput',
        'project_name' => 'string',
        'region_id' => 'string',
        'subnet' => '\Volcengine\Escloud\Model\SubnetForDescribeInstancesOutput',
        'vpc' => '\Volcengine\Escloud\Model\VPCForDescribeInstancesOutput',
        'version' => 'string',
        'warm_node_number' => 'int',
        'warm_node_resource_spec' => '\Volcengine\Escloud\Model\WarmNodeResourceSpecForDescribeInstancesOutput',
        'warm_node_storage_spec' => '\Volcengine\Escloud\Model\WarmNodeStorageSpecForDescribeInstancesOutput',
        'zone_id' => 'string',
        'zone_number' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'admin_user_name' => null,
        'charge_type' => null,
        'cold_node_number' => 'int32',
        'cold_node_resource_spec' => null,
        'cold_node_storage_spec' => null,
        'coordinator_node_number' => 'int32',
        'coordinator_node_resource_spec' => null,
        'coordinator_node_storage_spec' => null,
        'enable_https' => null,
        'enable_pure_master' => null,
        'hot_node_number' => 'int32',
        'hot_node_resource_spec' => null,
        'hot_node_storage_spec' => null,
        'instance_name' => null,
        'kibana_node_number' => 'int32',
        'kibana_node_resource_spec' => null,
        'master_node_number' => 'int32',
        'master_node_resource_spec' => null,
        'master_node_storage_spec' => null,
        'project_name' => null,
        'region_id' => null,
        'subnet' => null,
        'vpc' => null,
        'version' => null,
        'warm_node_number' => 'int32',
        'warm_node_resource_spec' => null,
        'warm_node_storage_spec' => null,
        'zone_id' => null,
        'zone_number' => 'int32'
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
        'admin_user_name' => 'AdminUserName',
        'charge_type' => 'ChargeType',
        'cold_node_number' => 'ColdNodeNumber',
        'cold_node_resource_spec' => 'ColdNodeResourceSpec',
        'cold_node_storage_spec' => 'ColdNodeStorageSpec',
        'coordinator_node_number' => 'CoordinatorNodeNumber',
        'coordinator_node_resource_spec' => 'CoordinatorNodeResourceSpec',
        'coordinator_node_storage_spec' => 'CoordinatorNodeStorageSpec',
        'enable_https' => 'EnableHttps',
        'enable_pure_master' => 'EnablePureMaster',
        'hot_node_number' => 'HotNodeNumber',
        'hot_node_resource_spec' => 'HotNodeResourceSpec',
        'hot_node_storage_spec' => 'HotNodeStorageSpec',
        'instance_name' => 'InstanceName',
        'kibana_node_number' => 'KibanaNodeNumber',
        'kibana_node_resource_spec' => 'KibanaNodeResourceSpec',
        'master_node_number' => 'MasterNodeNumber',
        'master_node_resource_spec' => 'MasterNodeResourceSpec',
        'master_node_storage_spec' => 'MasterNodeStorageSpec',
        'project_name' => 'ProjectName',
        'region_id' => 'RegionId',
        'subnet' => 'Subnet',
        'vpc' => 'VPC',
        'version' => 'Version',
        'warm_node_number' => 'WarmNodeNumber',
        'warm_node_resource_spec' => 'WarmNodeResourceSpec',
        'warm_node_storage_spec' => 'WarmNodeStorageSpec',
        'zone_id' => 'ZoneId',
        'zone_number' => 'ZoneNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'admin_user_name' => 'setAdminUserName',
        'charge_type' => 'setChargeType',
        'cold_node_number' => 'setColdNodeNumber',
        'cold_node_resource_spec' => 'setColdNodeResourceSpec',
        'cold_node_storage_spec' => 'setColdNodeStorageSpec',
        'coordinator_node_number' => 'setCoordinatorNodeNumber',
        'coordinator_node_resource_spec' => 'setCoordinatorNodeResourceSpec',
        'coordinator_node_storage_spec' => 'setCoordinatorNodeStorageSpec',
        'enable_https' => 'setEnableHttps',
        'enable_pure_master' => 'setEnablePureMaster',
        'hot_node_number' => 'setHotNodeNumber',
        'hot_node_resource_spec' => 'setHotNodeResourceSpec',
        'hot_node_storage_spec' => 'setHotNodeStorageSpec',
        'instance_name' => 'setInstanceName',
        'kibana_node_number' => 'setKibanaNodeNumber',
        'kibana_node_resource_spec' => 'setKibanaNodeResourceSpec',
        'master_node_number' => 'setMasterNodeNumber',
        'master_node_resource_spec' => 'setMasterNodeResourceSpec',
        'master_node_storage_spec' => 'setMasterNodeStorageSpec',
        'project_name' => 'setProjectName',
        'region_id' => 'setRegionId',
        'subnet' => 'setSubnet',
        'vpc' => 'setVpc',
        'version' => 'setVersion',
        'warm_node_number' => 'setWarmNodeNumber',
        'warm_node_resource_spec' => 'setWarmNodeResourceSpec',
        'warm_node_storage_spec' => 'setWarmNodeStorageSpec',
        'zone_id' => 'setZoneId',
        'zone_number' => 'setZoneNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'admin_user_name' => 'getAdminUserName',
        'charge_type' => 'getChargeType',
        'cold_node_number' => 'getColdNodeNumber',
        'cold_node_resource_spec' => 'getColdNodeResourceSpec',
        'cold_node_storage_spec' => 'getColdNodeStorageSpec',
        'coordinator_node_number' => 'getCoordinatorNodeNumber',
        'coordinator_node_resource_spec' => 'getCoordinatorNodeResourceSpec',
        'coordinator_node_storage_spec' => 'getCoordinatorNodeStorageSpec',
        'enable_https' => 'getEnableHttps',
        'enable_pure_master' => 'getEnablePureMaster',
        'hot_node_number' => 'getHotNodeNumber',
        'hot_node_resource_spec' => 'getHotNodeResourceSpec',
        'hot_node_storage_spec' => 'getHotNodeStorageSpec',
        'instance_name' => 'getInstanceName',
        'kibana_node_number' => 'getKibanaNodeNumber',
        'kibana_node_resource_spec' => 'getKibanaNodeResourceSpec',
        'master_node_number' => 'getMasterNodeNumber',
        'master_node_resource_spec' => 'getMasterNodeResourceSpec',
        'master_node_storage_spec' => 'getMasterNodeStorageSpec',
        'project_name' => 'getProjectName',
        'region_id' => 'getRegionId',
        'subnet' => 'getSubnet',
        'vpc' => 'getVpc',
        'version' => 'getVersion',
        'warm_node_number' => 'getWarmNodeNumber',
        'warm_node_resource_spec' => 'getWarmNodeResourceSpec',
        'warm_node_storage_spec' => 'getWarmNodeStorageSpec',
        'zone_id' => 'getZoneId',
        'zone_number' => 'getZoneNumber'
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

    const CHARGE_TYPE_PRE_PAID = 'PrePaid';
    const CHARGE_TYPE_POST_PAID = 'PostPaid';
    const VERSION_V6_7 = 'V6_7';
    const VERSION_V7_10 = 'V7_10';
    const VERSION_V7_TLS = 'V7_TLS';
    const VERSION_V7_BYTE = 'V7_BYTE';
    const VERSION_OPEN_SEARCH_2_9 = 'OPEN_SEARCH_2_9';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChargeTypeAllowableValues()
    {
        return [
            self::CHARGE_TYPE_PRE_PAID,
            self::CHARGE_TYPE_POST_PAID,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVersionAllowableValues()
    {
        return [
            self::VERSION_V6_7,
            self::VERSION_V7_10,
            self::VERSION_V7_TLS,
            self::VERSION_V7_BYTE,
            self::VERSION_OPEN_SEARCH_2_9,
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
        $this->container['admin_user_name'] = isset($data['admin_user_name']) ? $data['admin_user_name'] : null;
        $this->container['charge_type'] = isset($data['charge_type']) ? $data['charge_type'] : null;
        $this->container['cold_node_number'] = isset($data['cold_node_number']) ? $data['cold_node_number'] : null;
        $this->container['cold_node_resource_spec'] = isset($data['cold_node_resource_spec']) ? $data['cold_node_resource_spec'] : null;
        $this->container['cold_node_storage_spec'] = isset($data['cold_node_storage_spec']) ? $data['cold_node_storage_spec'] : null;
        $this->container['coordinator_node_number'] = isset($data['coordinator_node_number']) ? $data['coordinator_node_number'] : null;
        $this->container['coordinator_node_resource_spec'] = isset($data['coordinator_node_resource_spec']) ? $data['coordinator_node_resource_spec'] : null;
        $this->container['coordinator_node_storage_spec'] = isset($data['coordinator_node_storage_spec']) ? $data['coordinator_node_storage_spec'] : null;
        $this->container['enable_https'] = isset($data['enable_https']) ? $data['enable_https'] : null;
        $this->container['enable_pure_master'] = isset($data['enable_pure_master']) ? $data['enable_pure_master'] : null;
        $this->container['hot_node_number'] = isset($data['hot_node_number']) ? $data['hot_node_number'] : null;
        $this->container['hot_node_resource_spec'] = isset($data['hot_node_resource_spec']) ? $data['hot_node_resource_spec'] : null;
        $this->container['hot_node_storage_spec'] = isset($data['hot_node_storage_spec']) ? $data['hot_node_storage_spec'] : null;
        $this->container['instance_name'] = isset($data['instance_name']) ? $data['instance_name'] : null;
        $this->container['kibana_node_number'] = isset($data['kibana_node_number']) ? $data['kibana_node_number'] : null;
        $this->container['kibana_node_resource_spec'] = isset($data['kibana_node_resource_spec']) ? $data['kibana_node_resource_spec'] : null;
        $this->container['master_node_number'] = isset($data['master_node_number']) ? $data['master_node_number'] : null;
        $this->container['master_node_resource_spec'] = isset($data['master_node_resource_spec']) ? $data['master_node_resource_spec'] : null;
        $this->container['master_node_storage_spec'] = isset($data['master_node_storage_spec']) ? $data['master_node_storage_spec'] : null;
        $this->container['project_name'] = isset($data['project_name']) ? $data['project_name'] : null;
        $this->container['region_id'] = isset($data['region_id']) ? $data['region_id'] : null;
        $this->container['subnet'] = isset($data['subnet']) ? $data['subnet'] : null;
        $this->container['vpc'] = isset($data['vpc']) ? $data['vpc'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['warm_node_number'] = isset($data['warm_node_number']) ? $data['warm_node_number'] : null;
        $this->container['warm_node_resource_spec'] = isset($data['warm_node_resource_spec']) ? $data['warm_node_resource_spec'] : null;
        $this->container['warm_node_storage_spec'] = isset($data['warm_node_storage_spec']) ? $data['warm_node_storage_spec'] : null;
        $this->container['zone_id'] = isset($data['zone_id']) ? $data['zone_id'] : null;
        $this->container['zone_number'] = isset($data['zone_number']) ? $data['zone_number'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getChargeTypeAllowableValues();
        if (!is_null($this->container['charge_type']) && !in_array($this->container['charge_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'charge_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getVersionAllowableValues();
        if (!is_null($this->container['version']) && !in_array($this->container['version'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'version', must be one of '%s'",
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
     * Gets admin_user_name
     *
     * @return string
     */
    public function getAdminUserName()
    {
        return $this->container['admin_user_name'];
    }

    /**
     * Sets admin_user_name
     *
     * @param string $admin_user_name admin_user_name
     *
     * @return $this
     */
    public function setAdminUserName($admin_user_name)
    {
        $this->container['admin_user_name'] = $admin_user_name;

        return $this;
    }

    /**
     * Gets charge_type
     *
     * @return string
     */
    public function getChargeType()
    {
        return $this->container['charge_type'];
    }

    /**
     * Sets charge_type
     *
     * @param string $charge_type charge_type
     *
     * @return $this
     */
    public function setChargeType($charge_type)
    {
        $allowedValues = $this->getChargeTypeAllowableValues();
        if (!is_null($charge_type) && !in_array($charge_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'charge_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['charge_type'] = $charge_type;

        return $this;
    }

    /**
     * Gets cold_node_number
     *
     * @return int
     */
    public function getColdNodeNumber()
    {
        return $this->container['cold_node_number'];
    }

    /**
     * Sets cold_node_number
     *
     * @param int $cold_node_number cold_node_number
     *
     * @return $this
     */
    public function setColdNodeNumber($cold_node_number)
    {
        $this->container['cold_node_number'] = $cold_node_number;

        return $this;
    }

    /**
     * Gets cold_node_resource_spec
     *
     * @return \Volcengine\Escloud\Model\ColdNodeResourceSpecForDescribeInstancesOutput
     */
    public function getColdNodeResourceSpec()
    {
        return $this->container['cold_node_resource_spec'];
    }

    /**
     * Sets cold_node_resource_spec
     *
     * @param \Volcengine\Escloud\Model\ColdNodeResourceSpecForDescribeInstancesOutput $cold_node_resource_spec cold_node_resource_spec
     *
     * @return $this
     */
    public function setColdNodeResourceSpec($cold_node_resource_spec)
    {
        $this->container['cold_node_resource_spec'] = $cold_node_resource_spec;

        return $this;
    }

    /**
     * Gets cold_node_storage_spec
     *
     * @return \Volcengine\Escloud\Model\ColdNodeStorageSpecForDescribeInstancesOutput
     */
    public function getColdNodeStorageSpec()
    {
        return $this->container['cold_node_storage_spec'];
    }

    /**
     * Sets cold_node_storage_spec
     *
     * @param \Volcengine\Escloud\Model\ColdNodeStorageSpecForDescribeInstancesOutput $cold_node_storage_spec cold_node_storage_spec
     *
     * @return $this
     */
    public function setColdNodeStorageSpec($cold_node_storage_spec)
    {
        $this->container['cold_node_storage_spec'] = $cold_node_storage_spec;

        return $this;
    }

    /**
     * Gets coordinator_node_number
     *
     * @return int
     */
    public function getCoordinatorNodeNumber()
    {
        return $this->container['coordinator_node_number'];
    }

    /**
     * Sets coordinator_node_number
     *
     * @param int $coordinator_node_number coordinator_node_number
     *
     * @return $this
     */
    public function setCoordinatorNodeNumber($coordinator_node_number)
    {
        $this->container['coordinator_node_number'] = $coordinator_node_number;

        return $this;
    }

    /**
     * Gets coordinator_node_resource_spec
     *
     * @return \Volcengine\Escloud\Model\CoordinatorNodeResourceSpecForDescribeInstancesOutput
     */
    public function getCoordinatorNodeResourceSpec()
    {
        return $this->container['coordinator_node_resource_spec'];
    }

    /**
     * Sets coordinator_node_resource_spec
     *
     * @param \Volcengine\Escloud\Model\CoordinatorNodeResourceSpecForDescribeInstancesOutput $coordinator_node_resource_spec coordinator_node_resource_spec
     *
     * @return $this
     */
    public function setCoordinatorNodeResourceSpec($coordinator_node_resource_spec)
    {
        $this->container['coordinator_node_resource_spec'] = $coordinator_node_resource_spec;

        return $this;
    }

    /**
     * Gets coordinator_node_storage_spec
     *
     * @return \Volcengine\Escloud\Model\CoordinatorNodeStorageSpecForDescribeInstancesOutput
     */
    public function getCoordinatorNodeStorageSpec()
    {
        return $this->container['coordinator_node_storage_spec'];
    }

    /**
     * Sets coordinator_node_storage_spec
     *
     * @param \Volcengine\Escloud\Model\CoordinatorNodeStorageSpecForDescribeInstancesOutput $coordinator_node_storage_spec coordinator_node_storage_spec
     *
     * @return $this
     */
    public function setCoordinatorNodeStorageSpec($coordinator_node_storage_spec)
    {
        $this->container['coordinator_node_storage_spec'] = $coordinator_node_storage_spec;

        return $this;
    }

    /**
     * Gets enable_https
     *
     * @return bool
     */
    public function getEnableHttps()
    {
        return $this->container['enable_https'];
    }

    /**
     * Sets enable_https
     *
     * @param bool $enable_https enable_https
     *
     * @return $this
     */
    public function setEnableHttps($enable_https)
    {
        $this->container['enable_https'] = $enable_https;

        return $this;
    }

    /**
     * Gets enable_pure_master
     *
     * @return bool
     */
    public function getEnablePureMaster()
    {
        return $this->container['enable_pure_master'];
    }

    /**
     * Sets enable_pure_master
     *
     * @param bool $enable_pure_master enable_pure_master
     *
     * @return $this
     */
    public function setEnablePureMaster($enable_pure_master)
    {
        $this->container['enable_pure_master'] = $enable_pure_master;

        return $this;
    }

    /**
     * Gets hot_node_number
     *
     * @return int
     */
    public function getHotNodeNumber()
    {
        return $this->container['hot_node_number'];
    }

    /**
     * Sets hot_node_number
     *
     * @param int $hot_node_number hot_node_number
     *
     * @return $this
     */
    public function setHotNodeNumber($hot_node_number)
    {
        $this->container['hot_node_number'] = $hot_node_number;

        return $this;
    }

    /**
     * Gets hot_node_resource_spec
     *
     * @return \Volcengine\Escloud\Model\HotNodeResourceSpecForDescribeInstancesOutput
     */
    public function getHotNodeResourceSpec()
    {
        return $this->container['hot_node_resource_spec'];
    }

    /**
     * Sets hot_node_resource_spec
     *
     * @param \Volcengine\Escloud\Model\HotNodeResourceSpecForDescribeInstancesOutput $hot_node_resource_spec hot_node_resource_spec
     *
     * @return $this
     */
    public function setHotNodeResourceSpec($hot_node_resource_spec)
    {
        $this->container['hot_node_resource_spec'] = $hot_node_resource_spec;

        return $this;
    }

    /**
     * Gets hot_node_storage_spec
     *
     * @return \Volcengine\Escloud\Model\HotNodeStorageSpecForDescribeInstancesOutput
     */
    public function getHotNodeStorageSpec()
    {
        return $this->container['hot_node_storage_spec'];
    }

    /**
     * Sets hot_node_storage_spec
     *
     * @param \Volcengine\Escloud\Model\HotNodeStorageSpecForDescribeInstancesOutput $hot_node_storage_spec hot_node_storage_spec
     *
     * @return $this
     */
    public function setHotNodeStorageSpec($hot_node_storage_spec)
    {
        $this->container['hot_node_storage_spec'] = $hot_node_storage_spec;

        return $this;
    }

    /**
     * Gets instance_name
     *
     * @return string
     */
    public function getInstanceName()
    {
        return $this->container['instance_name'];
    }

    /**
     * Sets instance_name
     *
     * @param string $instance_name instance_name
     *
     * @return $this
     */
    public function setInstanceName($instance_name)
    {
        $this->container['instance_name'] = $instance_name;

        return $this;
    }

    /**
     * Gets kibana_node_number
     *
     * @return int
     */
    public function getKibanaNodeNumber()
    {
        return $this->container['kibana_node_number'];
    }

    /**
     * Sets kibana_node_number
     *
     * @param int $kibana_node_number kibana_node_number
     *
     * @return $this
     */
    public function setKibanaNodeNumber($kibana_node_number)
    {
        $this->container['kibana_node_number'] = $kibana_node_number;

        return $this;
    }

    /**
     * Gets kibana_node_resource_spec
     *
     * @return \Volcengine\Escloud\Model\KibanaNodeResourceSpecForDescribeInstancesOutput
     */
    public function getKibanaNodeResourceSpec()
    {
        return $this->container['kibana_node_resource_spec'];
    }

    /**
     * Sets kibana_node_resource_spec
     *
     * @param \Volcengine\Escloud\Model\KibanaNodeResourceSpecForDescribeInstancesOutput $kibana_node_resource_spec kibana_node_resource_spec
     *
     * @return $this
     */
    public function setKibanaNodeResourceSpec($kibana_node_resource_spec)
    {
        $this->container['kibana_node_resource_spec'] = $kibana_node_resource_spec;

        return $this;
    }

    /**
     * Gets master_node_number
     *
     * @return int
     */
    public function getMasterNodeNumber()
    {
        return $this->container['master_node_number'];
    }

    /**
     * Sets master_node_number
     *
     * @param int $master_node_number master_node_number
     *
     * @return $this
     */
    public function setMasterNodeNumber($master_node_number)
    {
        $this->container['master_node_number'] = $master_node_number;

        return $this;
    }

    /**
     * Gets master_node_resource_spec
     *
     * @return \Volcengine\Escloud\Model\MasterNodeResourceSpecForDescribeInstancesOutput
     */
    public function getMasterNodeResourceSpec()
    {
        return $this->container['master_node_resource_spec'];
    }

    /**
     * Sets master_node_resource_spec
     *
     * @param \Volcengine\Escloud\Model\MasterNodeResourceSpecForDescribeInstancesOutput $master_node_resource_spec master_node_resource_spec
     *
     * @return $this
     */
    public function setMasterNodeResourceSpec($master_node_resource_spec)
    {
        $this->container['master_node_resource_spec'] = $master_node_resource_spec;

        return $this;
    }

    /**
     * Gets master_node_storage_spec
     *
     * @return \Volcengine\Escloud\Model\MasterNodeStorageSpecForDescribeInstancesOutput
     */
    public function getMasterNodeStorageSpec()
    {
        return $this->container['master_node_storage_spec'];
    }

    /**
     * Sets master_node_storage_spec
     *
     * @param \Volcengine\Escloud\Model\MasterNodeStorageSpecForDescribeInstancesOutput $master_node_storage_spec master_node_storage_spec
     *
     * @return $this
     */
    public function setMasterNodeStorageSpec($master_node_storage_spec)
    {
        $this->container['master_node_storage_spec'] = $master_node_storage_spec;

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
     * Gets region_id
     *
     * @return string
     */
    public function getRegionId()
    {
        return $this->container['region_id'];
    }

    /**
     * Sets region_id
     *
     * @param string $region_id region_id
     *
     * @return $this
     */
    public function setRegionId($region_id)
    {
        $this->container['region_id'] = $region_id;

        return $this;
    }

    /**
     * Gets subnet
     *
     * @return \Volcengine\Escloud\Model\SubnetForDescribeInstancesOutput
     */
    public function getSubnet()
    {
        return $this->container['subnet'];
    }

    /**
     * Sets subnet
     *
     * @param \Volcengine\Escloud\Model\SubnetForDescribeInstancesOutput $subnet subnet
     *
     * @return $this
     */
    public function setSubnet($subnet)
    {
        $this->container['subnet'] = $subnet;

        return $this;
    }

    /**
     * Gets vpc
     *
     * @return \Volcengine\Escloud\Model\VPCForDescribeInstancesOutput
     */
    public function getVpc()
    {
        return $this->container['vpc'];
    }

    /**
     * Sets vpc
     *
     * @param \Volcengine\Escloud\Model\VPCForDescribeInstancesOutput $vpc vpc
     *
     * @return $this
     */
    public function setVpc($vpc)
    {
        $this->container['vpc'] = $vpc;

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
        $allowedValues = $this->getVersionAllowableValues();
        if (!is_null($version) && !in_array($version, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'version', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets warm_node_number
     *
     * @return int
     */
    public function getWarmNodeNumber()
    {
        return $this->container['warm_node_number'];
    }

    /**
     * Sets warm_node_number
     *
     * @param int $warm_node_number warm_node_number
     *
     * @return $this
     */
    public function setWarmNodeNumber($warm_node_number)
    {
        $this->container['warm_node_number'] = $warm_node_number;

        return $this;
    }

    /**
     * Gets warm_node_resource_spec
     *
     * @return \Volcengine\Escloud\Model\WarmNodeResourceSpecForDescribeInstancesOutput
     */
    public function getWarmNodeResourceSpec()
    {
        return $this->container['warm_node_resource_spec'];
    }

    /**
     * Sets warm_node_resource_spec
     *
     * @param \Volcengine\Escloud\Model\WarmNodeResourceSpecForDescribeInstancesOutput $warm_node_resource_spec warm_node_resource_spec
     *
     * @return $this
     */
    public function setWarmNodeResourceSpec($warm_node_resource_spec)
    {
        $this->container['warm_node_resource_spec'] = $warm_node_resource_spec;

        return $this;
    }

    /**
     * Gets warm_node_storage_spec
     *
     * @return \Volcengine\Escloud\Model\WarmNodeStorageSpecForDescribeInstancesOutput
     */
    public function getWarmNodeStorageSpec()
    {
        return $this->container['warm_node_storage_spec'];
    }

    /**
     * Sets warm_node_storage_spec
     *
     * @param \Volcengine\Escloud\Model\WarmNodeStorageSpecForDescribeInstancesOutput $warm_node_storage_spec warm_node_storage_spec
     *
     * @return $this
     */
    public function setWarmNodeStorageSpec($warm_node_storage_spec)
    {
        $this->container['warm_node_storage_spec'] = $warm_node_storage_spec;

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
     * Gets zone_number
     *
     * @return int
     */
    public function getZoneNumber()
    {
        return $this->container['zone_number'];
    }

    /**
     * Sets zone_number
     *
     * @param int $zone_number zone_number
     *
     * @return $this
     */
    public function setZoneNumber($zone_number)
    {
        $this->container['zone_number'] = $zone_number;

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
