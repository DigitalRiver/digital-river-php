<?php
/**
 * GlobalFulfillmentReturnItemResponse
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
 * GlobalFulfillmentReturnItemResponse Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GlobalFulfillmentReturnItemResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GlobalFulfillmentReturnItemResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fulfillment_order_item_id' => 'string',
        'inventory_item_id' => 'string',
        'quantity' => 'int',
        'quantity_accepted' => 'int',
        'state' => 'string',
        'location' => '\DigitalRiver\ApiSdk\Model\Location',
        'unit_attributes' => '\DigitalRiver\ApiSdk\Model\UnitAttributes[]',
        'unit_attributes_accepted' => '\DigitalRiver\ApiSdk\Model\UnitAttributes[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'fulfillment_order_item_id' => null,
        'inventory_item_id' => null,
        'quantity' => null,
        'quantity_accepted' => null,
        'state' => null,
        'location' => null,
        'unit_attributes' => null,
        'unit_attributes_accepted' => null
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
        'fulfillment_order_item_id' => 'fulfillmentOrderItemId',
        'inventory_item_id' => 'inventoryItemId',
        'quantity' => 'quantity',
        'quantity_accepted' => 'quantityAccepted',
        'state' => 'state',
        'location' => 'location',
        'unit_attributes' => 'unitAttributes',
        'unit_attributes_accepted' => 'unitAttributesAccepted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fulfillment_order_item_id' => 'setFulfillmentOrderItemId',
        'inventory_item_id' => 'setInventoryItemId',
        'quantity' => 'setQuantity',
        'quantity_accepted' => 'setQuantityAccepted',
        'state' => 'setState',
        'location' => 'setLocation',
        'unit_attributes' => 'setUnitAttributes',
        'unit_attributes_accepted' => 'setUnitAttributesAccepted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fulfillment_order_item_id' => 'getFulfillmentOrderItemId',
        'inventory_item_id' => 'getInventoryItemId',
        'quantity' => 'getQuantity',
        'quantity_accepted' => 'getQuantityAccepted',
        'state' => 'getState',
        'location' => 'getLocation',
        'unit_attributes' => 'getUnitAttributes',
        'unit_attributes_accepted' => 'getUnitAttributesAccepted'
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

    const STATE_PENDING = 'pending';
    const STATE_ACCEPTED = 'accepted';
    const STATE_REJECTED = 'rejected';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
       $allowable = [
            self::STATE_PENDING,
            self::STATE_ACCEPTED,
            self::STATE_REJECTED,
        ];

        $allowableAllCase = array_unique(array_merge(array_map('strtolower', $allowable), $allowable));
        return $allowableAllCase;
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
        $this->container['fulfillment_order_item_id'] = isset($data['fulfillment_order_item_id']) ? $data['fulfillment_order_item_id'] : null;
        $this->container['inventory_item_id'] = isset($data['inventory_item_id']) ? $data['inventory_item_id'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['quantity_accepted'] = isset($data['quantity_accepted']) ? $data['quantity_accepted'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['unit_attributes'] = isset($data['unit_attributes']) ? $data['unit_attributes'] : null;
        $this->container['unit_attributes_accepted'] = isset($data['unit_attributes_accepted']) ? $data['unit_attributes_accepted'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStateAllowableValues();
       
        if (!is_null($this->container['state']) && !in_array(strtolower($this->container['state']), $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets fulfillment_order_item_id
     *
     * @return string|null
     */
    public function getFulfillmentOrderItemId()
    {
        return $this->container['fulfillment_order_item_id'];
    }

    /**
     * Sets fulfillment_order_item_id
     *
     * @param string|null $fulfillment_order_item_id The identifier of the filfillment order item.
     *
     * @return $this
     */
    public function setFulfillmentOrderItemId($fulfillment_order_item_id)
    {
        $this->container['fulfillment_order_item_id'] = $fulfillment_order_item_id;

        return $this;
    }

    /**
     * Gets inventory_item_id
     *
     * @return string|null
     */
    public function getInventoryItemId()
    {
        return $this->container['inventory_item_id'];
    }

    /**
     * Sets inventory_item_id
     *
     * @param string|null $inventory_item_id The identifier of the inventory item.
     *
     * @return $this
     */
    public function setInventoryItemId($inventory_item_id)
    {
        $this->container['inventory_item_id'] = $inventory_item_id;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets quantity_accepted
     *
     * @return int|null
     */
    public function getQuantityAccepted()
    {
        return $this->container['quantity_accepted'];
    }

    /**
     * Sets quantity_accepted
     *
     * @param int|null $quantity_accepted quantity_accepted
     *
     * @return $this
     */
    public function setQuantityAccepted($quantity_accepted)
    {
        $this->container['quantity_accepted'] = $quantity_accepted;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state The current state of the return item.
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array(strtolower($state), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \DigitalRiver\ApiSdk\Model\Location|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \DigitalRiver\ApiSdk\Model\Location|null $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets unit_attributes
     *
     * @return \DigitalRiver\ApiSdk\Model\UnitAttributes[]|null
     */
    public function getUnitAttributes()
    {
        return $this->container['unit_attributes'];
    }

    /**
     * Sets unit_attributes
     *
     * @param \DigitalRiver\ApiSdk\Model\UnitAttributes[]|null $unit_attributes unit_attributes
     *
     * @return $this
     */
    public function setUnitAttributes($unit_attributes)
    {
        $this->container['unit_attributes'] = $unit_attributes;

        return $this;
    }

    /**
     * Gets unit_attributes_accepted
     *
     * @return \DigitalRiver\ApiSdk\Model\UnitAttributes[]|null
     */
    public function getUnitAttributesAccepted()
    {
        return $this->container['unit_attributes_accepted'];
    }

    /**
     * Sets unit_attributes_accepted
     *
     * @param \DigitalRiver\ApiSdk\Model\UnitAttributes[]|null $unit_attributes_accepted unit_attributes_accepted
     *
     * @return $this
     */
    public function setUnitAttributesAccepted($unit_attributes_accepted)
    {
        $this->container['unit_attributes_accepted'] = $unit_attributes_accepted;

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

