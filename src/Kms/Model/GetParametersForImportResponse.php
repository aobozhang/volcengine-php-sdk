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

class GetParametersForImportResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetParametersForImportResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'import_token' => 'string',
        'key_id' => 'string',
        'keyring_id' => 'string',
        'public_key' => 'string',
        'token_expire_time' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'import_token' => null,
        'key_id' => null,
        'keyring_id' => null,
        'public_key' => null,
        'token_expire_time' => null
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
        'import_token' => 'ImportToken',
        'key_id' => 'KeyID',
        'keyring_id' => 'KeyringID',
        'public_key' => 'PublicKey',
        'token_expire_time' => 'TokenExpireTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'import_token' => 'setImportToken',
        'key_id' => 'setKeyId',
        'keyring_id' => 'setKeyringId',
        'public_key' => 'setPublicKey',
        'token_expire_time' => 'setTokenExpireTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'import_token' => 'getImportToken',
        'key_id' => 'getKeyId',
        'keyring_id' => 'getKeyringId',
        'public_key' => 'getPublicKey',
        'token_expire_time' => 'getTokenExpireTime'
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
        $this->container['import_token'] = isset($data['import_token']) ? $data['import_token'] : null;
        $this->container['key_id'] = isset($data['key_id']) ? $data['key_id'] : null;
        $this->container['keyring_id'] = isset($data['keyring_id']) ? $data['keyring_id'] : null;
        $this->container['public_key'] = isset($data['public_key']) ? $data['public_key'] : null;
        $this->container['token_expire_time'] = isset($data['token_expire_time']) ? $data['token_expire_time'] : null;
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
     * Gets import_token
     *
     * @return string
     */
    public function getImportToken()
    {
        return $this->container['import_token'];
    }

    /**
     * Sets import_token
     *
     * @param string $import_token import_token
     *
     * @return $this
     */
    public function setImportToken($import_token)
    {
        $this->container['import_token'] = $import_token;

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
     * Gets keyring_id
     *
     * @return string
     */
    public function getKeyringId()
    {
        return $this->container['keyring_id'];
    }

    /**
     * Sets keyring_id
     *
     * @param string $keyring_id keyring_id
     *
     * @return $this
     */
    public function setKeyringId($keyring_id)
    {
        $this->container['keyring_id'] = $keyring_id;

        return $this;
    }

    /**
     * Gets public_key
     *
     * @return string
     */
    public function getPublicKey()
    {
        return $this->container['public_key'];
    }

    /**
     * Sets public_key
     *
     * @param string $public_key public_key
     *
     * @return $this
     */
    public function setPublicKey($public_key)
    {
        $this->container['public_key'] = $public_key;

        return $this;
    }

    /**
     * Gets token_expire_time
     *
     * @return string
     */
    public function getTokenExpireTime()
    {
        return $this->container['token_expire_time'];
    }

    /**
     * Sets token_expire_time
     *
     * @param string $token_expire_time token_expire_time
     *
     * @return $this
     */
    public function setTokenExpireTime($token_expire_time)
    {
        $this->container['token_expire_time'] = $token_expire_time;

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

