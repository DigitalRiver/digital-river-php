<?php
/**
 * StateTransitions
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace DigitalRiver\ApiSdk\Model;

use \ArrayAccess;
use \DigitalRiver\ApiSdk\ObjectSerializer;

/**
 * StateTransitions Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StateTransitions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StateTransitions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'activated' => '\DateTime',
        'discontinued' => '\DateTime',
        'deactivated' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'activated' => 'date-time',
        'discontinued' => 'date-time',
        'deactivated' => 'date-time'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'activated' => 'activated',
        'discontinued' => 'discontinued',
        'deactivated' => 'deactivated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activated' => 'setActivated',
        'discontinued' => 'setDiscontinued',
        'deactivated' => 'setDeactivated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activated' => 'getActivated',
        'discontinued' => 'getDiscontinued',
        'deactivated' => 'getDeactivated'
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
        return self::$openAPIModelName;
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
        $this->container['activated'] = isset($data['activated']) ? $data['activated'] : null;
        $this->container['discontinued'] = isset($data['discontinued']) ? $data['discontinued'] : null;
        $this->container['deactivated'] = isset($data['deactivated']) ? $data['deactivated'] : null;
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
     * Gets activated
     *
     * @return \DateTime|null
     */
    public function getActivated()
    {
        return $this->container['activated'];
    }

    /**
     * Sets activated
     *
     * @param \DateTime|null $activated Can be subscribed to, updates are restricted to some fields
     *
     * @return $this
     */
    public function setActivated($activated)
    {
        $this->container['activated'] = $activated;

        return $this;
    }

    /**
     * Gets discontinued
     *
     * @return \DateTime|null
     */
    public function getDiscontinued()
    {
        return $this->container['discontinued'];
    }

    /**
     * Sets discontinued
     *
     * @param \DateTime|null $discontinued Has active subscriptions, but not accepting new ones
     *
     * @return $this
     */
    public function setDiscontinued($discontinued)
    {
        $this->container['discontinued'] = $discontinued;

        return $this;
    }

    /**
     * Gets deactivated
     *
     * @return \DateTime|null
     */
    public function getDeactivated()
    {
        return $this->container['deactivated'];
    }

    /**
     * Sets deactivated
     *
     * @param \DateTime|null $deactivated All subscriptions will be stopped
     *
     * @return $this
     */
    public function setDeactivated($deactivated)
    {
        $this->container['deactivated'] = $deactivated;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


