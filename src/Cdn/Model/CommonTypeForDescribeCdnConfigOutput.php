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

class CommonTypeForDescribeCdnConfigOutput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CommonTypeForDescribeCdnConfigOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ignore_case' => 'bool',
        'ignore_scheme' => 'bool',
        'referers' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ignore_case' => null,
        'ignore_scheme' => null,
        'referers' => null
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
        'ignore_case' => 'IgnoreCase',
        'ignore_scheme' => 'IgnoreScheme',
        'referers' => 'Referers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ignore_case' => 'setIgnoreCase',
        'ignore_scheme' => 'setIgnoreScheme',
        'referers' => 'setReferers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ignore_case' => 'getIgnoreCase',
        'ignore_scheme' => 'getIgnoreScheme',
        'referers' => 'getReferers'
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
        $this->container['ignore_case'] = isset($data['ignore_case']) ? $data['ignore_case'] : null;
        $this->container['ignore_scheme'] = isset($data['ignore_scheme']) ? $data['ignore_scheme'] : null;
        $this->container['referers'] = isset($data['referers']) ? $data['referers'] : null;
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
     * Gets ignore_case
     *
     * @return bool
     */
    public function getIgnoreCase()
    {
        return $this->container['ignore_case'];
    }

    /**
     * Sets ignore_case
     *
     * @param bool $ignore_case ignore_case
     *
     * @return $this
     */
    public function setIgnoreCase($ignore_case)
    {
        $this->container['ignore_case'] = $ignore_case;

        return $this;
    }

    /**
     * Gets ignore_scheme
     *
     * @return bool
     */
    public function getIgnoreScheme()
    {
        return $this->container['ignore_scheme'];
    }

    /**
     * Sets ignore_scheme
     *
     * @param bool $ignore_scheme ignore_scheme
     *
     * @return $this
     */
    public function setIgnoreScheme($ignore_scheme)
    {
        $this->container['ignore_scheme'] = $ignore_scheme;

        return $this;
    }

    /**
     * Gets referers
     *
     * @return string[]
     */
    public function getReferers()
    {
        return $this->container['referers'];
    }

    /**
     * Sets referers
     *
     * @param string[] $referers referers
     *
     * @return $this
     */
    public function setReferers($referers)
    {
        $this->container['referers'] = $referers;

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

