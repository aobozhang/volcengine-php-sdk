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

class PrivateBucketAuthForUpdateCdnConfigInput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PrivateBucketAuthForUpdateCdnConfigInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'auth_type' => 'string',
        'switch' => 'bool',
        'tos_auth_information' => '\Volcengine\Cdn\Model\TosAuthInformationForUpdateCdnConfigInput'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'auth_type' => null,
        'switch' => null,
        'tos_auth_information' => null
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
        'auth_type' => 'AuthType',
        'switch' => 'Switch',
        'tos_auth_information' => 'TosAuthInformation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auth_type' => 'setAuthType',
        'switch' => 'setSwitch',
        'tos_auth_information' => 'setTosAuthInformation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auth_type' => 'getAuthType',
        'switch' => 'getSwitch',
        'tos_auth_information' => 'getTosAuthInformation'
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
        $this->container['auth_type'] = isset($data['auth_type']) ? $data['auth_type'] : null;
        $this->container['switch'] = isset($data['switch']) ? $data['switch'] : null;
        $this->container['tos_auth_information'] = isset($data['tos_auth_information']) ? $data['tos_auth_information'] : null;
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
     * Gets auth_type
     *
     * @return string
     */
    public function getAuthType()
    {
        return $this->container['auth_type'];
    }

    /**
     * Sets auth_type
     *
     * @param string $auth_type auth_type
     *
     * @return $this
     */
    public function setAuthType($auth_type)
    {
        $this->container['auth_type'] = $auth_type;

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
     * Gets tos_auth_information
     *
     * @return \Volcengine\Cdn\Model\TosAuthInformationForUpdateCdnConfigInput
     */
    public function getTosAuthInformation()
    {
        return $this->container['tos_auth_information'];
    }

    /**
     * Sets tos_auth_information
     *
     * @param \Volcengine\Cdn\Model\TosAuthInformationForUpdateCdnConfigInput $tos_auth_information tos_auth_information
     *
     * @return $this
     */
    public function setTosAuthInformation($tos_auth_information)
    {
        $this->container['tos_auth_information'] = $tos_auth_information;

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

