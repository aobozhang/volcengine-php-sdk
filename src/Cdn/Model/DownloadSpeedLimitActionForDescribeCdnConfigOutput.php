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

class DownloadSpeedLimitActionForDescribeCdnConfigOutput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DownloadSpeedLimitActionForDescribeCdnConfigOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'speed_limit_rate' => 'int',
        'speed_limit_rate_after' => 'int',
        'speed_limit_time' => '\Volcengine\Cdn\Model\SpeedLimitTimeForDescribeCdnConfigOutput'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'speed_limit_rate' => 'int64',
        'speed_limit_rate_after' => 'int64',
        'speed_limit_time' => null
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
        'speed_limit_rate' => 'SpeedLimitRate',
        'speed_limit_rate_after' => 'SpeedLimitRateAfter',
        'speed_limit_time' => 'SpeedLimitTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'speed_limit_rate' => 'setSpeedLimitRate',
        'speed_limit_rate_after' => 'setSpeedLimitRateAfter',
        'speed_limit_time' => 'setSpeedLimitTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'speed_limit_rate' => 'getSpeedLimitRate',
        'speed_limit_rate_after' => 'getSpeedLimitRateAfter',
        'speed_limit_time' => 'getSpeedLimitTime'
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
        $this->container['speed_limit_rate'] = isset($data['speed_limit_rate']) ? $data['speed_limit_rate'] : null;
        $this->container['speed_limit_rate_after'] = isset($data['speed_limit_rate_after']) ? $data['speed_limit_rate_after'] : null;
        $this->container['speed_limit_time'] = isset($data['speed_limit_time']) ? $data['speed_limit_time'] : null;
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
     * Gets speed_limit_rate_after
     *
     * @return int
     */
    public function getSpeedLimitRateAfter()
    {
        return $this->container['speed_limit_rate_after'];
    }

    /**
     * Sets speed_limit_rate_after
     *
     * @param int $speed_limit_rate_after speed_limit_rate_after
     *
     * @return $this
     */
    public function setSpeedLimitRateAfter($speed_limit_rate_after)
    {
        $this->container['speed_limit_rate_after'] = $speed_limit_rate_after;

        return $this;
    }

    /**
     * Gets speed_limit_time
     *
     * @return \Volcengine\Cdn\Model\SpeedLimitTimeForDescribeCdnConfigOutput
     */
    public function getSpeedLimitTime()
    {
        return $this->container['speed_limit_time'];
    }

    /**
     * Sets speed_limit_time
     *
     * @param \Volcengine\Cdn\Model\SpeedLimitTimeForDescribeCdnConfigOutput $speed_limit_time speed_limit_time
     *
     * @return $this
     */
    public function setSpeedLimitTime($speed_limit_time)
    {
        $this->container['speed_limit_time'] = $speed_limit_time;

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

