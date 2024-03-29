<?php
/**
 * Shipment
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
 * Shipment Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Shipment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Shipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_time' => '\DateTime',
        'fulfillment_order_id' => 'string',
        'fulfillment_order_upstream_id' => 'string',
        'shipping_choice_id' => 'string',
        'tracking_company_id' => 'string',
        'tracking_company' => 'string',
        'tracking_number' => 'string',
        'tracking_url' => 'string',
        'items' => '\DigitalRiver\ApiSdk\Model\ShipmentItem[]',
        'live_mode' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'created_time' => 'date-time',
        'fulfillment_order_id' => null,
        'fulfillment_order_upstream_id' => null,
        'shipping_choice_id' => null,
        'tracking_company_id' => null,
        'tracking_company' => null,
        'tracking_number' => null,
        'tracking_url' => null,
        'items' => null,
        'live_mode' => null
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
        'id' => 'id',
        'created_time' => 'createdTime',
        'fulfillment_order_id' => 'fulfillmentOrderId',
        'fulfillment_order_upstream_id' => 'fulfillmentOrderUpstreamId',
        'shipping_choice_id' => 'shippingChoiceId',
        'tracking_company_id' => 'trackingCompanyId',
        'tracking_company' => 'trackingCompany',
        'tracking_number' => 'trackingNumber',
        'tracking_url' => 'trackingUrl',
        'items' => 'items',
        'live_mode' => 'liveMode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_time' => 'setCreatedTime',
        'fulfillment_order_id' => 'setFulfillmentOrderId',
        'fulfillment_order_upstream_id' => 'setFulfillmentOrderUpstreamId',
        'shipping_choice_id' => 'setShippingChoiceId',
        'tracking_company_id' => 'setTrackingCompanyId',
        'tracking_company' => 'setTrackingCompany',
        'tracking_number' => 'setTrackingNumber',
        'tracking_url' => 'setTrackingUrl',
        'items' => 'setItems',
        'live_mode' => 'setLiveMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_time' => 'getCreatedTime',
        'fulfillment_order_id' => 'getFulfillmentOrderId',
        'fulfillment_order_upstream_id' => 'getFulfillmentOrderUpstreamId',
        'shipping_choice_id' => 'getShippingChoiceId',
        'tracking_company_id' => 'getTrackingCompanyId',
        'tracking_company' => 'getTrackingCompany',
        'tracking_number' => 'getTrackingNumber',
        'tracking_url' => 'getTrackingUrl',
        'items' => 'getItems',
        'live_mode' => 'getLiveMode'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['created_time'] = isset($data['created_time']) ? $data['created_time'] : null;
        $this->container['fulfillment_order_id'] = isset($data['fulfillment_order_id']) ? $data['fulfillment_order_id'] : null;
        $this->container['fulfillment_order_upstream_id'] = isset($data['fulfillment_order_upstream_id']) ? $data['fulfillment_order_upstream_id'] : null;
        $this->container['shipping_choice_id'] = isset($data['shipping_choice_id']) ? $data['shipping_choice_id'] : null;
        $this->container['tracking_company_id'] = isset($data['tracking_company_id']) ? $data['tracking_company_id'] : null;
        $this->container['tracking_company'] = isset($data['tracking_company']) ? $data['tracking_company'] : null;
        $this->container['tracking_number'] = isset($data['tracking_number']) ? $data['tracking_number'] : null;
        $this->container['tracking_url'] = isset($data['tracking_url']) ? $data['tracking_url'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['live_mode'] = isset($data['live_mode']) ? $data['live_mode'] : null;
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The unique identifier of a shipment.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_time
     *
     * @return \DateTime|null
     */
    public function getCreatedTime()
    {
        return $this->container['created_time'];
    }

    /**
     * Sets created_time
     *
     * @param \DateTime|null $created_time Time when the shipment was created.
     *
     * @return $this
     */
    public function setCreatedTime($created_time)
    {
        $this->container['created_time'] = $created_time;

        return $this;
    }

    /**
     * Gets fulfillment_order_id
     *
     * @return string|null
     */
    public function getFulfillmentOrderId()
    {
        return $this->container['fulfillment_order_id'];
    }

    /**
     * Sets fulfillment_order_id
     *
     * @param string|null $fulfillment_order_id The identifier of the fulfillment order.
     *
     * @return $this
     */
    public function setFulfillmentOrderId($fulfillment_order_id)
    {
        $this->container['fulfillment_order_id'] = $fulfillment_order_id;

        return $this;
    }

    /**
     * Gets fulfillment_order_upstream_id
     *
     * @return string|null
     */
    public function getFulfillmentOrderUpstreamId()
    {
        return $this->container['fulfillment_order_upstream_id'];
    }

    /**
     * Sets fulfillment_order_upstream_id
     *
     * @param string|null $fulfillment_order_upstream_id The upstream identifier of the fulfillment order.
     *
     * @return $this
     */
    public function setFulfillmentOrderUpstreamId($fulfillment_order_upstream_id)
    {
        $this->container['fulfillment_order_upstream_id'] = $fulfillment_order_upstream_id;

        return $this;
    }

    /**
     * Gets shipping_choice_id
     *
     * @return string|null
     */
    public function getShippingChoiceId()
    {
        return $this->container['shipping_choice_id'];
    }

    /**
     * Sets shipping_choice_id
     *
     * @param string|null $shipping_choice_id The shipping method.
     *
     * @return $this
     */
    public function setShippingChoiceId($shipping_choice_id)
    {
        $this->container['shipping_choice_id'] = $shipping_choice_id;

        return $this;
    }

    /**
     * Gets tracking_company_id
     *
     * @return string|null
     */
    public function getTrackingCompanyId()
    {
        return $this->container['tracking_company_id'];
    }

    /**
     * Sets tracking_company_id
     *
     * @param string|null $tracking_company_id The unique identifier of the tracking or carrier company.
     *
     * @return $this
     */
    public function setTrackingCompanyId($tracking_company_id)
    {
        $this->container['tracking_company_id'] = $tracking_company_id;

        return $this;
    }

    /**
     * Gets tracking_company
     *
     * @return string|null
     */
    public function getTrackingCompany()
    {
        return $this->container['tracking_company'];
    }

    /**
     * Sets tracking_company
     *
     * @param string|null $tracking_company The name of the tracking or carrier company.
     *
     * @return $this
     */
    public function setTrackingCompany($tracking_company)
    {
        $this->container['tracking_company'] = $tracking_company;

        return $this;
    }

    /**
     * Gets tracking_number
     *
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string|null $tracking_number The tracking number provided by the carrier company.
     *
     * @return $this
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets tracking_url
     *
     * @return string|null
     */
    public function getTrackingUrl()
    {
        return $this->container['tracking_url'];
    }

    /**
     * Sets tracking_url
     *
     * @param string|null $tracking_url The URL of the fulfillment tracking page.
     *
     * @return $this
     */
    public function setTrackingUrl($tracking_url)
    {
        $this->container['tracking_url'] = $tracking_url;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \DigitalRiver\ApiSdk\Model\ShipmentItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \DigitalRiver\ApiSdk\Model\ShipmentItem[]|null $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets live_mode
     *
     * @return bool|null
     */
    public function getLiveMode()
    {
        return $this->container['live_mode'];
    }

    /**
     * Sets live_mode
     *
     * @param bool|null $live_mode Has the value true if the object exists in live mode or the value false if the object exists in test mode.
     *
     * @return $this
     */
    public function setLiveMode($live_mode)
    {
        $this->container['live_mode'] = $live_mode;

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


