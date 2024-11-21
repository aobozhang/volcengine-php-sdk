<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Volcengine\Kms\Model;

use ArrayAccess;
use Volcengine\Common\ObjectSerializer;
use Volcengine\Common\ModelInterface;

class EncryptRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EncryptRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'encryption_context' => 'map[string,string]',
        'key_id' => 'string',
        'key_name' => 'string',
        'keyring_name' => 'string',
        'plaintext' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'encryption_context' => null,
        'key_id' => null,
        'key_name' => null,
        'keyring_name' => null,
        'plaintext' => null
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
        'encryption_context' => 'EncryptionContext',
        'key_id' => 'KeyID',
        'key_name' => 'KeyName',
        'keyring_name' => 'KeyringName',
        'plaintext' => 'Plaintext'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'encryption_context' => 'setEncryptionContext',
        'key_id' => 'setKeyId',
        'key_name' => 'setKeyName',
        'keyring_name' => 'setKeyringName',
        'plaintext' => 'setPlaintext'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'encryption_context' => 'getEncryptionContext',
        'key_id' => 'getKeyId',
        'key_name' => 'getKeyName',
        'keyring_name' => 'getKeyringName',
        'plaintext' => 'getPlaintext'
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
        $this->container['encryption_context'] = isset($data['encryption_context']) ? $data['encryption_context'] : null;
        $this->container['key_id'] = isset($data['key_id']) ? $data['key_id'] : null;
        $this->container['key_name'] = isset($data['key_name']) ? $data['key_name'] : null;
        $this->container['keyring_name'] = isset($data['keyring_name']) ? $data['keyring_name'] : null;
        $this->container['plaintext'] = isset($data['plaintext']) ? $data['plaintext'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['plaintext'] === null) {
            $invalidProperties[] = "'plaintext' can't be null";
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
     * Gets encryption_context
     *
     * @return map[string,string]
     */
    public function getEncryptionContext()
    {
        return $this->container['encryption_context'];
    }

    /**
     * Sets encryption_context
     *
     * @param map[string,string] $encryption_context encryption_context
     *
     * @return $this
     */
    public function setEncryptionContext($encryption_context)
    {
        $this->container['encryption_context'] = $encryption_context;

        return $this;
    }

    /**
     * Gets key_id
     *
     * @return string
     */
    public function getKeyId()
    {
        return $this->container['key_id'];
    }

    /**
     * Sets key_id
     *
     * @param string $key_id key_id
     *
     * @return $this
     */
    public function setKeyId($key_id)
    {
        $this->container['key_id'] = $key_id;

        return $this;
    }

    /**
     * Gets key_name
     *
     * @return string
     */
    public function getKeyName()
    {
        return $this->container['key_name'];
    }

    /**
     * Sets key_name
     *
     * @param string $key_name key_name
     *
     * @return $this
     */
    public function setKeyName($key_name)
    {
        $this->container['key_name'] = $key_name;

        return $this;
    }

    /**
     * Gets keyring_name
     *
     * @return string
     */
    public function getKeyringName()
    {
        return $this->container['keyring_name'];
    }

    /**
     * Sets keyring_name
     *
     * @param string $keyring_name keyring_name
     *
     * @return $this
     */
    public function setKeyringName($keyring_name)
    {
        $this->container['keyring_name'] = $keyring_name;

        return $this;
    }

    /**
     * Gets plaintext
     *
     * @return string
     */
    public function getPlaintext()
    {
        return $this->container['plaintext'];
    }

    /**
     * Sets plaintext
     *
     * @param string $plaintext plaintext
     *
     * @return $this
     */
    public function setPlaintext($plaintext)
    {
        $this->container['plaintext'] = $plaintext;

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

