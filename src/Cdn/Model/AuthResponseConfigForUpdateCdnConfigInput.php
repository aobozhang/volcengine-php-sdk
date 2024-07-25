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

class AuthResponseConfigForUpdateCdnConfigInput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuthResponseConfigForUpdateCdnConfigInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cache_action' => '\Volcengine\Cdn\Model\ConvertCacheActionForUpdateCdnConfigInput',
        'response_action' => '\Volcengine\Cdn\Model\ResponseActionForUpdateCdnConfigInput',
        'status_code_action' => '\Volcengine\Cdn\Model\StatusCodeActionForUpdateCdnConfigInput',
        'time_out_action' => '\Volcengine\Cdn\Model\TimeOutActionForUpdateCdnConfigInput'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cache_action' => null,
        'response_action' => null,
        'status_code_action' => null,
        'time_out_action' => null
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
        'cache_action' => 'CacheAction',
        'response_action' => 'ResponseAction',
        'status_code_action' => 'StatusCodeAction',
        'time_out_action' => 'TimeOutAction'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cache_action' => 'setCacheAction',
        'response_action' => 'setResponseAction',
        'status_code_action' => 'setStatusCodeAction',
        'time_out_action' => 'setTimeOutAction'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cache_action' => 'getCacheAction',
        'response_action' => 'getResponseAction',
        'status_code_action' => 'getStatusCodeAction',
        'time_out_action' => 'getTimeOutAction'
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
        $this->container['cache_action'] = isset($data['cache_action']) ? $data['cache_action'] : null;
        $this->container['response_action'] = isset($data['response_action']) ? $data['response_action'] : null;
        $this->container['status_code_action'] = isset($data['status_code_action']) ? $data['status_code_action'] : null;
        $this->container['time_out_action'] = isset($data['time_out_action']) ? $data['time_out_action'] : null;
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
     * Gets cache_action
     *
     * @return \Volcengine\Cdn\Model\ConvertCacheActionForUpdateCdnConfigInput
     */
    public function getCacheAction()
    {
        return $this->container['cache_action'];
    }

    /**
     * Sets cache_action
     *
     * @param \Volcengine\Cdn\Model\ConvertCacheActionForUpdateCdnConfigInput $cache_action cache_action
     *
     * @return $this
     */
    public function setCacheAction($cache_action)
    {
        $this->container['cache_action'] = $cache_action;

        return $this;
    }

    /**
     * Gets response_action
     *
     * @return \Volcengine\Cdn\Model\ResponseActionForUpdateCdnConfigInput
     */
    public function getResponseAction()
    {
        return $this->container['response_action'];
    }

    /**
     * Sets response_action
     *
     * @param \Volcengine\Cdn\Model\ResponseActionForUpdateCdnConfigInput $response_action response_action
     *
     * @return $this
     */
    public function setResponseAction($response_action)
    {
        $this->container['response_action'] = $response_action;

        return $this;
    }

    /**
     * Gets status_code_action
     *
     * @return \Volcengine\Cdn\Model\StatusCodeActionForUpdateCdnConfigInput
     */
    public function getStatusCodeAction()
    {
        return $this->container['status_code_action'];
    }

    /**
     * Sets status_code_action
     *
     * @param \Volcengine\Cdn\Model\StatusCodeActionForUpdateCdnConfigInput $status_code_action status_code_action
     *
     * @return $this
     */
    public function setStatusCodeAction($status_code_action)
    {
        $this->container['status_code_action'] = $status_code_action;

        return $this;
    }

    /**
     * Gets time_out_action
     *
     * @return \Volcengine\Cdn\Model\TimeOutActionForUpdateCdnConfigInput
     */
    public function getTimeOutAction()
    {
        return $this->container['time_out_action'];
    }

    /**
     * Sets time_out_action
     *
     * @param \Volcengine\Cdn\Model\TimeOutActionForUpdateCdnConfigInput $time_out_action time_out_action
     *
     * @return $this
     */
    public function setTimeOutAction($time_out_action)
    {
        $this->container['time_out_action'] = $time_out_action;

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

