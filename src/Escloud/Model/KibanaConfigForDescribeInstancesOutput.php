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

class KibanaConfigForDescribeInstancesOutput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'KibanaConfigForDescribeInstancesOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cookie_ttl' => 'int',
        'kibana_base_path' => 'string',
        'request_timeout' => 'int',
        'session_keep_alive' => 'bool',
        'session_ttl' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cookie_ttl' => 'int64',
        'kibana_base_path' => null,
        'request_timeout' => 'int64',
        'session_keep_alive' => null,
        'session_ttl' => 'int64'
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
        'cookie_ttl' => 'CookieTTL',
        'kibana_base_path' => 'KibanaBasePath',
        'request_timeout' => 'RequestTimeout',
        'session_keep_alive' => 'SessionKeepAlive',
        'session_ttl' => 'SessionTTL'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cookie_ttl' => 'setCookieTtl',
        'kibana_base_path' => 'setKibanaBasePath',
        'request_timeout' => 'setRequestTimeout',
        'session_keep_alive' => 'setSessionKeepAlive',
        'session_ttl' => 'setSessionTtl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cookie_ttl' => 'getCookieTtl',
        'kibana_base_path' => 'getKibanaBasePath',
        'request_timeout' => 'getRequestTimeout',
        'session_keep_alive' => 'getSessionKeepAlive',
        'session_ttl' => 'getSessionTtl'
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
        $this->container['cookie_ttl'] = isset($data['cookie_ttl']) ? $data['cookie_ttl'] : null;
        $this->container['kibana_base_path'] = isset($data['kibana_base_path']) ? $data['kibana_base_path'] : null;
        $this->container['request_timeout'] = isset($data['request_timeout']) ? $data['request_timeout'] : null;
        $this->container['session_keep_alive'] = isset($data['session_keep_alive']) ? $data['session_keep_alive'] : null;
        $this->container['session_ttl'] = isset($data['session_ttl']) ? $data['session_ttl'] : null;
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
     * Gets cookie_ttl
     *
     * @return int
     */
    public function getCookieTtl()
    {
        return $this->container['cookie_ttl'];
    }

    /**
     * Sets cookie_ttl
     *
     * @param int $cookie_ttl cookie_ttl
     *
     * @return $this
     */
    public function setCookieTtl($cookie_ttl)
    {
        $this->container['cookie_ttl'] = $cookie_ttl;

        return $this;
    }

    /**
     * Gets kibana_base_path
     *
     * @return string
     */
    public function getKibanaBasePath()
    {
        return $this->container['kibana_base_path'];
    }

    /**
     * Sets kibana_base_path
     *
     * @param string $kibana_base_path kibana_base_path
     *
     * @return $this
     */
    public function setKibanaBasePath($kibana_base_path)
    {
        $this->container['kibana_base_path'] = $kibana_base_path;

        return $this;
    }

    /**
     * Gets request_timeout
     *
     * @return int
     */
    public function getRequestTimeout()
    {
        return $this->container['request_timeout'];
    }

    /**
     * Sets request_timeout
     *
     * @param int $request_timeout request_timeout
     *
     * @return $this
     */
    public function setRequestTimeout($request_timeout)
    {
        $this->container['request_timeout'] = $request_timeout;

        return $this;
    }

    /**
     * Gets session_keep_alive
     *
     * @return bool
     */
    public function getSessionKeepAlive()
    {
        return $this->container['session_keep_alive'];
    }

    /**
     * Sets session_keep_alive
     *
     * @param bool $session_keep_alive session_keep_alive
     *
     * @return $this
     */
    public function setSessionKeepAlive($session_keep_alive)
    {
        $this->container['session_keep_alive'] = $session_keep_alive;

        return $this;
    }

    /**
     * Gets session_ttl
     *
     * @return int
     */
    public function getSessionTtl()
    {
        return $this->container['session_ttl'];
    }

    /**
     * Sets session_ttl
     *
     * @param int $session_ttl session_ttl
     *
     * @return $this
     */
    public function setSessionTtl($session_ttl)
    {
        $this->container['session_ttl'] = $session_ttl;

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
