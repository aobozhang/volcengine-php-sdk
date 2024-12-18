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

class KeyringForDescribeKeyringsOutput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'KeyringForDescribeKeyringsOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'creation_date' => 'int',
        'description' => 'string',
        'id' => 'string',
        'key_count' => 'int',
        'keyring_name' => 'string',
        'keyring_type' => 'string',
        'trn' => 'string',
        'uid' => 'string',
        'update_date' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'creation_date' => 'int64',
        'description' => null,
        'id' => null,
        'key_count' => 'int64',
        'keyring_name' => null,
        'keyring_type' => null,
        'trn' => null,
        'uid' => null,
        'update_date' => 'int64'
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
        'creation_date' => 'CreationDate',
        'description' => 'Description',
        'id' => 'ID',
        'key_count' => 'KeyCount',
        'keyring_name' => 'KeyringName',
        'keyring_type' => 'KeyringType',
        'trn' => 'TRN',
        'uid' => 'UID',
        'update_date' => 'UpdateDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'creation_date' => 'setCreationDate',
        'description' => 'setDescription',
        'id' => 'setId',
        'key_count' => 'setKeyCount',
        'keyring_name' => 'setKeyringName',
        'keyring_type' => 'setKeyringType',
        'trn' => 'setTrn',
        'uid' => 'setUid',
        'update_date' => 'setUpdateDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'creation_date' => 'getCreationDate',
        'description' => 'getDescription',
        'id' => 'getId',
        'key_count' => 'getKeyCount',
        'keyring_name' => 'getKeyringName',
        'keyring_type' => 'getKeyringType',
        'trn' => 'getTrn',
        'uid' => 'getUid',
        'update_date' => 'getUpdateDate'
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
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['key_count'] = isset($data['key_count']) ? $data['key_count'] : null;
        $this->container['keyring_name'] = isset($data['keyring_name']) ? $data['keyring_name'] : null;
        $this->container['keyring_type'] = isset($data['keyring_type']) ? $data['keyring_type'] : null;
        $this->container['trn'] = isset($data['trn']) ? $data['trn'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['update_date'] = isset($data['update_date']) ? $data['update_date'] : null;
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
     * Gets creation_date
     *
     * @return int
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param int $creation_date creation_date
     *
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets key_count
     *
     * @return int
     */
    public function getKeyCount()
    {
        return $this->container['key_count'];
    }

    /**
     * Sets key_count
     *
     * @param int $key_count key_count
     *
     * @return $this
     */
    public function setKeyCount($key_count)
    {
        $this->container['key_count'] = $key_count;

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
     * Gets keyring_type
     *
     * @return string
     */
    public function getKeyringType()
    {
        return $this->container['keyring_type'];
    }

    /**
     * Sets keyring_type
     *
     * @param string $keyring_type keyring_type
     *
     * @return $this
     */
    public function setKeyringType($keyring_type)
    {
        $this->container['keyring_type'] = $keyring_type;

        return $this;
    }

    /**
     * Gets trn
     *
     * @return string
     */
    public function getTrn()
    {
        return $this->container['trn'];
    }

    /**
     * Sets trn
     *
     * @param string $trn trn
     *
     * @return $this
     */
    public function setTrn($trn)
    {
        $this->container['trn'] = $trn;

        return $this;
    }

    /**
     * Gets uid
     *
     * @return string
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     *
     * @param string $uid uid
     *
     * @return $this
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

        return $this;
    }

    /**
     * Gets update_date
     *
     * @return int
     */
    public function getUpdateDate()
    {
        return $this->container['update_date'];
    }

    /**
     * Sets update_date
     *
     * @param int $update_date update_date
     *
     * @return $this
     */
    public function setUpdateDate($update_date)
    {
        $this->container['update_date'] = $update_date;

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

