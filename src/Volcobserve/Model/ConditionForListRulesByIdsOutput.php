<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Volcengine\Volcobserve\Model;

use ArrayAccess;
use Volcengine\Common\ObjectSerializer;
use Volcengine\Common\ModelInterface;

class ConditionForListRulesByIdsOutput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConditionForListRulesByIdsOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'comparison_operator' => 'string',
        'metric_name' => 'string',
        'metric_unit' => 'string',
        'statistics' => 'string',
        'threshold' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'comparison_operator' => null,
        'metric_name' => null,
        'metric_unit' => null,
        'statistics' => null,
        'threshold' => null
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
        'comparison_operator' => 'ComparisonOperator',
        'metric_name' => 'MetricName',
        'metric_unit' => 'MetricUnit',
        'statistics' => 'Statistics',
        'threshold' => 'Threshold'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'comparison_operator' => 'setComparisonOperator',
        'metric_name' => 'setMetricName',
        'metric_unit' => 'setMetricUnit',
        'statistics' => 'setStatistics',
        'threshold' => 'setThreshold'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'comparison_operator' => 'getComparisonOperator',
        'metric_name' => 'getMetricName',
        'metric_unit' => 'getMetricUnit',
        'statistics' => 'getStatistics',
        'threshold' => 'getThreshold'
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
        $this->container['comparison_operator'] = isset($data['comparison_operator']) ? $data['comparison_operator'] : null;
        $this->container['metric_name'] = isset($data['metric_name']) ? $data['metric_name'] : null;
        $this->container['metric_unit'] = isset($data['metric_unit']) ? $data['metric_unit'] : null;
        $this->container['statistics'] = isset($data['statistics']) ? $data['statistics'] : null;
        $this->container['threshold'] = isset($data['threshold']) ? $data['threshold'] : null;
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
     * Gets comparison_operator
     *
     * @return string
     */
    public function getComparisonOperator()
    {
        return $this->container['comparison_operator'];
    }

    /**
     * Sets comparison_operator
     *
     * @param string $comparison_operator comparison_operator
     *
     * @return $this
     */
    public function setComparisonOperator($comparison_operator)
    {
        $this->container['comparison_operator'] = $comparison_operator;

        return $this;
    }

    /**
     * Gets metric_name
     *
     * @return string
     */
    public function getMetricName()
    {
        return $this->container['metric_name'];
    }

    /**
     * Sets metric_name
     *
     * @param string $metric_name metric_name
     *
     * @return $this
     */
    public function setMetricName($metric_name)
    {
        $this->container['metric_name'] = $metric_name;

        return $this;
    }

    /**
     * Gets metric_unit
     *
     * @return string
     */
    public function getMetricUnit()
    {
        return $this->container['metric_unit'];
    }

    /**
     * Sets metric_unit
     *
     * @param string $metric_unit metric_unit
     *
     * @return $this
     */
    public function setMetricUnit($metric_unit)
    {
        $this->container['metric_unit'] = $metric_unit;

        return $this;
    }

    /**
     * Gets statistics
     *
     * @return string
     */
    public function getStatistics()
    {
        return $this->container['statistics'];
    }

    /**
     * Sets statistics
     *
     * @param string $statistics statistics
     *
     * @return $this
     */
    public function setStatistics($statistics)
    {
        $this->container['statistics'] = $statistics;

        return $this;
    }

    /**
     * Gets threshold
     *
     * @return string
     */
    public function getThreshold()
    {
        return $this->container['threshold'];
    }

    /**
     * Sets threshold
     *
     * @param string $threshold threshold
     *
     * @return $this
     */
    public function setThreshold($threshold)
    {
        $this->container['threshold'] = $threshold;

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

