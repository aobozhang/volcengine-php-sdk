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

class OriginAccessRuleForDescribeCdnConfigOutput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OriginAccessRuleForDescribeCdnConfigOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allow_empty' => 'bool',
        'ignore_case' => 'bool',
        'origins' => 'string[]',
        'rule_type' => 'string',
        'switch' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allow_empty' => null,
        'ignore_case' => null,
        'origins' => null,
        'rule_type' => null,
        'switch' => null
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
        'allow_empty' => 'AllowEmpty',
        'ignore_case' => 'IgnoreCase',
        'origins' => 'Origins',
        'rule_type' => 'RuleType',
        'switch' => 'Switch'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_empty' => 'setAllowEmpty',
        'ignore_case' => 'setIgnoreCase',
        'origins' => 'setOrigins',
        'rule_type' => 'setRuleType',
        'switch' => 'setSwitch'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_empty' => 'getAllowEmpty',
        'ignore_case' => 'getIgnoreCase',
        'origins' => 'getOrigins',
        'rule_type' => 'getRuleType',
        'switch' => 'getSwitch'
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
        $this->container['allow_empty'] = isset($data['allow_empty']) ? $data['allow_empty'] : null;
        $this->container['ignore_case'] = isset($data['ignore_case']) ? $data['ignore_case'] : null;
        $this->container['origins'] = isset($data['origins']) ? $data['origins'] : null;
        $this->container['rule_type'] = isset($data['rule_type']) ? $data['rule_type'] : null;
        $this->container['switch'] = isset($data['switch']) ? $data['switch'] : null;
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
     * Gets allow_empty
     *
     * @return bool
     */
    public function getAllowEmpty()
    {
        return $this->container['allow_empty'];
    }

    /**
     * Sets allow_empty
     *
     * @param bool $allow_empty allow_empty
     *
     * @return $this
     */
    public function setAllowEmpty($allow_empty)
    {
        $this->container['allow_empty'] = $allow_empty;

        return $this;
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
     * Gets origins
     *
     * @return string[]
     */
    public function getOrigins()
    {
        return $this->container['origins'];
    }

    /**
     * Sets origins
     *
     * @param string[] $origins origins
     *
     * @return $this
     */
    public function setOrigins($origins)
    {
        $this->container['origins'] = $origins;

        return $this;
    }

    /**
     * Gets rule_type
     *
     * @return string
     */
    public function getRuleType()
    {
        return $this->container['rule_type'];
    }

    /**
     * Sets rule_type
     *
     * @param string $rule_type rule_type
     *
     * @return $this
     */
    public function setRuleType($rule_type)
    {
        $this->container['rule_type'] = $rule_type;

        return $this;
    }

    /**
     * Gets switch
     *
     * @return bool
     */
    public function getSwitch()
    {
        return $this->container['switch'];
    }

    /**
     * Sets switch
     *
     * @param bool $switch switch
     *
     * @return $this
     */
    public function setSwitch($switch)
    {
        $this->container['switch'] = $switch;

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

