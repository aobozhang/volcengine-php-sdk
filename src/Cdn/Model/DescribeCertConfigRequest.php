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

class DescribeCertConfigRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DescribeCertConfigRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cert_id' => 'string',
        'cert_id2' => 'string',
        'cert_type' => 'string',
        'encry_type' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cert_id' => null,
        'cert_id2' => null,
        'cert_type' => null,
        'encry_type' => null,
        'status' => null
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
        'cert_id' => 'CertId',
        'cert_id2' => 'CertId2',
        'cert_type' => 'CertType',
        'encry_type' => 'EncryType',
        'status' => 'Status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cert_id' => 'setCertId',
        'cert_id2' => 'setCertId2',
        'cert_type' => 'setCertType',
        'encry_type' => 'setEncryType',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cert_id' => 'getCertId',
        'cert_id2' => 'getCertId2',
        'cert_type' => 'getCertType',
        'encry_type' => 'getEncryType',
        'status' => 'getStatus'
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
        $this->container['cert_id'] = isset($data['cert_id']) ? $data['cert_id'] : null;
        $this->container['cert_id2'] = isset($data['cert_id2']) ? $data['cert_id2'] : null;
        $this->container['cert_type'] = isset($data['cert_type']) ? $data['cert_type'] : null;
        $this->container['encry_type'] = isset($data['encry_type']) ? $data['encry_type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['cert_id'] === null) {
            $invalidProperties[] = "'cert_id' can't be null";
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
     * Gets cert_id
     *
     * @return string
     */
    public function getCertId()
    {
        return $this->container['cert_id'];
    }

    /**
     * Sets cert_id
     *
     * @param string $cert_id cert_id
     *
     * @return $this
     */
    public function setCertId($cert_id)
    {
        $this->container['cert_id'] = $cert_id;

        return $this;
    }

    /**
     * Gets cert_id2
     *
     * @return string
     */
    public function getCertId2()
    {
        return $this->container['cert_id2'];
    }

    /**
     * Sets cert_id2
     *
     * @param string $cert_id2 cert_id2
     *
     * @return $this
     */
    public function setCertId2($cert_id2)
    {
        $this->container['cert_id2'] = $cert_id2;

        return $this;
    }

    /**
     * Gets cert_type
     *
     * @return string
     */
    public function getCertType()
    {
        return $this->container['cert_type'];
    }

    /**
     * Sets cert_type
     *
     * @param string $cert_type cert_type
     *
     * @return $this
     */
    public function setCertType($cert_type)
    {
        $this->container['cert_type'] = $cert_type;

        return $this;
    }

    /**
     * Gets encry_type
     *
     * @return string
     */
    public function getEncryType()
    {
        return $this->container['encry_type'];
    }

    /**
     * Sets encry_type
     *
     * @param string $encry_type encry_type
     *
     * @return $this
     */
    public function setEncryType($encry_type)
    {
        $this->container['encry_type'] = $encry_type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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

