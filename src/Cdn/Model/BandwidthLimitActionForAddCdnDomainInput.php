<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Volcengine\Cdn\Model;

use ArrayAccess;
use Volcengine\Common\ObjectSerializer;
use Volcengine\Common\ModelInterface;

class BandwidthLimitActionForAddCdnDomainInput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BandwidthLimitActionForAddCdnDomainInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bandwidth_threshold' => 'int',
        'limit_type' => 'string',
        'speed_limit_rate' => 'int',
        'speed_limit_rate_max' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bandwidth_threshold' => 'int64',
        'limit_type' => null,
        'speed_limit_rate' => 'int64',
        'speed_limit_rate_max' => 'int64'
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
        'bandwidth_threshold' => 'BandwidthThreshold',
        'limit_type' => 'LimitType',
        'speed_limit_rate' => 'SpeedLimitRate',
        'speed_limit_rate_max' => 'SpeedLimitRateMax'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bandwidth_threshold' => 'setBandwidthThreshold',
        'limit_type' => 'setLimitType',
        'speed_limit_rate' => 'setSpeedLimitRate',
        'speed_limit_rate_max' => 'setSpeedLimitRateMax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bandwidth_threshold' => 'getBandwidthThreshold',
        'limit_type' => 'getLimitType',
        'speed_limit_rate' => 'getSpeedLimitRate',
        'speed_limit_rate_max' => 'getSpeedLimitRateMax'
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
        $this->container['bandwidth_threshold'] = isset($data['bandwidth_threshold']) ? $data['bandwidth_threshold'] : null;
        $this->container['limit_type'] = isset($data['limit_type']) ? $data['limit_type'] : null;
        $this->container['speed_limit_rate'] = isset($data['speed_limit_rate']) ? $data['speed_limit_rate'] : null;
        $this->container['speed_limit_rate_max'] = isset($data['speed_limit_rate_max']) ? $data['speed_limit_rate_max'] : null;
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
     * Gets bandwidth_threshold
     *
     * @return int
     */
    public function getBandwidthThreshold()
    {
        return $this->container['bandwidth_threshold'];
    }

    /**
     * Sets bandwidth_threshold
     *
     * @param int $bandwidth_threshold bandwidth_threshold
     *
     * @return $this
     */
    public function setBandwidthThreshold($bandwidth_threshold)
    {
        $this->container['bandwidth_threshold'] = $bandwidth_threshold;

        return $this;
    }

    /**
     * Gets limit_type
     *
     * @return string
     */
    public function getLimitType()
    {
        return $this->container['limit_type'];
    }

    /**
     * Sets limit_type
     *
     * @param string $limit_type limit_type
     *
     * @return $this
     */
    public function setLimitType($limit_type)
    {
        $this->container['limit_type'] = $limit_type;

        return $this;
    }

    /**
     * Gets speed_limit_rate
     *
     * @return int
     */
    public function getSpeedLimitRate()
    {
        return $this->container['speed_limit_rate'];
    }

    /**
     * Sets speed_limit_rate
     *
     * @param int $speed_limit_rate speed_limit_rate
     *
     * @return $this
     */
    public function setSpeedLimitRate($speed_limit_rate)
    {
        $this->container['speed_limit_rate'] = $speed_limit_rate;

        return $this;
    }

    /**
     * Gets speed_limit_rate_max
     *
     * @return int
     */
    public function getSpeedLimitRateMax()
    {
        return $this->container['speed_limit_rate_max'];
    }

    /**
     * Sets speed_limit_rate_max
     *
     * @param int $speed_limit_rate_max speed_limit_rate_max
     *
     * @return $this
     */
    public function setSpeedLimitRateMax($speed_limit_rate_max)
    {
        $this->container['speed_limit_rate_max'] = $speed_limit_rate_max;

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
