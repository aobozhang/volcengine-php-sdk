<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Volcengine\Advdefence\Model;

use ArrayAccess;
use Volcengine\Common\ObjectSerializer;
use Volcengine\Common\ModelInterface;

class DescAtkAlarmThresholdResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DescAtkAlarmThresholdResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'band_width' => 'int',
        'default_band_width' => 'string',
        'default_pps' => 'string',
        'pps' => 'int',
        'thres_type' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'band_width' => 'int32',
        'default_band_width' => null,
        'default_pps' => null,
        'pps' => 'int32',
        'thres_type' => 'int32'
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
        'band_width' => 'BandWidth',
        'default_band_width' => 'DefaultBandWidth',
        'default_pps' => 'DefaultPps',
        'pps' => 'Pps',
        'thres_type' => 'ThresType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'band_width' => 'setBandWidth',
        'default_band_width' => 'setDefaultBandWidth',
        'default_pps' => 'setDefaultPps',
        'pps' => 'setPps',
        'thres_type' => 'setThresType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'band_width' => 'getBandWidth',
        'default_band_width' => 'getDefaultBandWidth',
        'default_pps' => 'getDefaultPps',
        'pps' => 'getPps',
        'thres_type' => 'getThresType'
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
        $this->container['band_width'] = isset($data['band_width']) ? $data['band_width'] : null;
        $this->container['default_band_width'] = isset($data['default_band_width']) ? $data['default_band_width'] : null;
        $this->container['default_pps'] = isset($data['default_pps']) ? $data['default_pps'] : null;
        $this->container['pps'] = isset($data['pps']) ? $data['pps'] : null;
        $this->container['thres_type'] = isset($data['thres_type']) ? $data['thres_type'] : null;
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
     * Gets band_width
     *
     * @return int
     */
    public function getBandWidth()
    {
        return $this->container['band_width'];
    }

    /**
     * Sets band_width
     *
     * @param int $band_width band_width
     *
     * @return $this
     */
    public function setBandWidth($band_width)
    {
        $this->container['band_width'] = $band_width;

        return $this;
    }

    /**
     * Gets default_band_width
     *
     * @return string
     */
    public function getDefaultBandWidth()
    {
        return $this->container['default_band_width'];
    }

    /**
     * Sets default_band_width
     *
     * @param string $default_band_width default_band_width
     *
     * @return $this
     */
    public function setDefaultBandWidth($default_band_width)
    {
        $this->container['default_band_width'] = $default_band_width;

        return $this;
    }

    /**
     * Gets default_pps
     *
     * @return string
     */
    public function getDefaultPps()
    {
        return $this->container['default_pps'];
    }

    /**
     * Sets default_pps
     *
     * @param string $default_pps default_pps
     *
     * @return $this
     */
    public function setDefaultPps($default_pps)
    {
        $this->container['default_pps'] = $default_pps;

        return $this;
    }

    /**
     * Gets pps
     *
     * @return int
     */
    public function getPps()
    {
        return $this->container['pps'];
    }

    /**
     * Sets pps
     *
     * @param int $pps pps
     *
     * @return $this
     */
    public function setPps($pps)
    {
        $this->container['pps'] = $pps;

        return $this;
    }

    /**
     * Gets thres_type
     *
     * @return int
     */
    public function getThresType()
    {
        return $this->container['thres_type'];
    }

    /**
     * Sets thres_type
     *
     * @param int $thres_type thres_type
     *
     * @return $this
     */
    public function setThresType($thres_type)
    {
        $this->container['thres_type'] = $thres_type;

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
