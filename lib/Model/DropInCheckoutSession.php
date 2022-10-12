<?php
/**
 * DropInCheckoutSession
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
 * DropInCheckoutSession Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DropInCheckoutSession implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DropInCheckoutSession';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'upstream_id' => 'string',
        'currency' => 'string',
        'tax_inclusive' => 'bool',
        'items' => '\DigitalRiver\ApiSdk\Model\SkuItemRequest[]',
        'ship_from' => '\DigitalRiver\ApiSdk\Model\ShipFrom',
        'discount' => '\DigitalRiver\ApiSdk\Model\Discount',
        'shipping_discount' => '\DigitalRiver\ApiSdk\Model\Discount',
        'browser_ip' => 'string',
        'application_id' => 'string',
        'locale' => 'string',
        'customer_type' => '\DigitalRiver\ApiSdk\Model\CustomerType',
        'charge_type' => '\DigitalRiver\ApiSdk\Model\ChargeType',
        'style' => 'object',
        'options' => '\DigitalRiver\ApiSdk\Model\DropInOptionsRequest',
        'redirects' => '\DigitalRiver\ApiSdk\Model\Redirects',
        'metadata' => 'map[string,AnyType]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'upstream_id' => null,
        'currency' => null,
        'tax_inclusive' => null,
        'items' => null,
        'ship_from' => null,
        'discount' => null,
        'shipping_discount' => null,
        'browser_ip' => null,
        'application_id' => null,
        'locale' => null,
        'customer_type' => null,
        'charge_type' => null,
        'style' => null,
        'options' => null,
        'redirects' => null,
        'metadata' => null
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
        'upstream_id' => 'upstreamId',
        'currency' => 'currency',
        'tax_inclusive' => 'taxInclusive',
        'items' => 'items',
        'ship_from' => 'shipFrom',
        'discount' => 'discount',
        'shipping_discount' => 'shippingDiscount',
        'browser_ip' => 'browserIp',
        'application_id' => 'applicationId',
        'locale' => 'locale',
        'customer_type' => 'customerType',
        'charge_type' => 'chargeType',
        'style' => 'style',
        'options' => 'options',
        'redirects' => 'redirects',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'upstream_id' => 'setUpstreamId',
        'currency' => 'setCurrency',
        'tax_inclusive' => 'setTaxInclusive',
        'items' => 'setItems',
        'ship_from' => 'setShipFrom',
        'discount' => 'setDiscount',
        'shipping_discount' => 'setShippingDiscount',
        'browser_ip' => 'setBrowserIp',
        'application_id' => 'setApplicationId',
        'locale' => 'setLocale',
        'customer_type' => 'setCustomerType',
        'charge_type' => 'setChargeType',
        'style' => 'setStyle',
        'options' => 'setOptions',
        'redirects' => 'setRedirects',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'upstream_id' => 'getUpstreamId',
        'currency' => 'getCurrency',
        'tax_inclusive' => 'getTaxInclusive',
        'items' => 'getItems',
        'ship_from' => 'getShipFrom',
        'discount' => 'getDiscount',
        'shipping_discount' => 'getShippingDiscount',
        'browser_ip' => 'getBrowserIp',
        'application_id' => 'getApplicationId',
        'locale' => 'getLocale',
        'customer_type' => 'getCustomerType',
        'charge_type' => 'getChargeType',
        'style' => 'getStyle',
        'options' => 'getOptions',
        'redirects' => 'getRedirects',
        'metadata' => 'getMetadata'
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
        $this->container['upstream_id'] = isset($data['upstream_id']) ? $data['upstream_id'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['tax_inclusive'] = isset($data['tax_inclusive']) ? $data['tax_inclusive'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['ship_from'] = isset($data['ship_from']) ? $data['ship_from'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
        $this->container['shipping_discount'] = isset($data['shipping_discount']) ? $data['shipping_discount'] : null;
        $this->container['browser_ip'] = isset($data['browser_ip']) ? $data['browser_ip'] : null;
        $this->container['application_id'] = isset($data['application_id']) ? $data['application_id'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['customer_type'] = isset($data['customer_type']) ? $data['customer_type'] : null;
        $this->container['charge_type'] = isset($data['charge_type']) ? $data['charge_type'] : null;
        $this->container['style'] = isset($data['style']) ? $data['style'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['redirects'] = isset($data['redirects']) ? $data['redirects'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
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
     * Gets upstream_id
     *
     * @return string|null
     */
    public function getUpstreamId()
    {
        return $this->container['upstream_id'];
    }

    /**
     * Sets upstream_id
     *
     * @param string|null $upstream_id The upstream checkout identifier if it is different from the Digital River checkout identifier.
     *
     * @return $this
     */
    public function setUpstreamId($upstream_id)
    {
        $this->container['upstream_id'] = $upstream_id;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency A three-letter ISO currency code.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets tax_inclusive
     *
     * @return bool|null
     */
    public function getTaxInclusive()
    {
        return $this->container['tax_inclusive'];
    }

    /**
     * Sets tax_inclusive
     *
     * @param bool|null $tax_inclusive tax_inclusive
     *
     * @return $this
     */
    public function setTaxInclusive($tax_inclusive)
    {
        $this->container['tax_inclusive'] = $tax_inclusive;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \DigitalRiver\ApiSdk\Model\SkuItemRequest[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \DigitalRiver\ApiSdk\Model\SkuItemRequest[]|null $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets ship_from
     *
     * @return \DigitalRiver\ApiSdk\Model\ShipFrom|null
     */
    public function getShipFrom()
    {
        return $this->container['ship_from'];
    }

    /**
     * Sets ship_from
     *
     * @param \DigitalRiver\ApiSdk\Model\ShipFrom|null $ship_from ship_from
     *
     * @return $this
     */
    public function setShipFrom($ship_from)
    {
        $this->container['ship_from'] = $ship_from;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return \DigitalRiver\ApiSdk\Model\Discount|null
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param \DigitalRiver\ApiSdk\Model\Discount|null $discount discount
     *
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets shipping_discount
     *
     * @return \DigitalRiver\ApiSdk\Model\Discount|null
     */
    public function getShippingDiscount()
    {
        return $this->container['shipping_discount'];
    }

    /**
     * Sets shipping_discount
     *
     * @param \DigitalRiver\ApiSdk\Model\Discount|null $shipping_discount shipping_discount
     *
     * @return $this
     */
    public function setShippingDiscount($shipping_discount)
    {
        $this->container['shipping_discount'] = $shipping_discount;

        return $this;
    }

    /**
     * Gets browser_ip
     *
     * @return string|null
     */
    public function getBrowserIp()
    {
        return $this->container['browser_ip'];
    }

    /**
     * Sets browser_ip
     *
     * @param string|null $browser_ip The IP address of the browser used by the customer when checking out.
     *
     * @return $this
     */
    public function setBrowserIp($browser_ip)
    {
        $this->container['browser_ip'] = $browser_ip;

        return $this;
    }

    /**
     * Gets application_id
     *
     * @return string|null
     */
    public function getApplicationId()
    {
        return $this->container['application_id'];
    }

    /**
     * Sets application_id
     *
     * @param string|null $application_id An arbitrary identifier that can be used to track the application type.
     *
     * @return $this
     */
    public function setApplicationId($application_id)
    {
        $this->container['application_id'] = $application_id;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string|null $locale A designator that combines the two-letter ISO 639-1 language code with the ISO 3166-1 alpha-2 country code.
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets customer_type
     *
     * @return \DigitalRiver\ApiSdk\Model\CustomerType|null
     */
    public function getCustomerType()
    {
        return $this->container['customer_type'];
    }

    /**
     * Sets customer_type
     *
     * @param \DigitalRiver\ApiSdk\Model\CustomerType|null $customer_type customer_type
     *
     * @return $this
     */
    public function setCustomerType($customer_type)
    {
        $this->container['customer_type'] = $customer_type;

        return $this;
    }

    /**
     * Gets charge_type
     *
     * @return \DigitalRiver\ApiSdk\Model\ChargeType|null
     */
    public function getChargeType()
    {
        return $this->container['charge_type'];
    }

    /**
     * Sets charge_type
     *
     * @param \DigitalRiver\ApiSdk\Model\ChargeType|null $charge_type charge_type
     *
     * @return $this
     */
    public function setChargeType($charge_type)
    {
        $this->container['charge_type'] = $charge_type;

        return $this;
    }

    /**
     * Gets style
     *
     * @return object|null
     */
    public function getStyle()
    {
        return $this->container['style'];
    }

    /**
     * Sets style
     *
     * @param object|null $style Style for drop-in
     *
     * @return $this
     */
    public function setStyle($style)
    {
        $this->container['style'] = $style;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \DigitalRiver\ApiSdk\Model\DropInOptionsRequest|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \DigitalRiver\ApiSdk\Model\DropInOptionsRequest|null $options options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets redirects
     *
     * @return \DigitalRiver\ApiSdk\Model\Redirects|null
     */
    public function getRedirects()
    {
        return $this->container['redirects'];
    }

    /**
     * Sets redirects
     *
     * @param \DigitalRiver\ApiSdk\Model\Redirects|null $redirects redirects
     *
     * @return $this
     */
    public function setRedirects($redirects)
    {
        $this->container['redirects'] = $redirects;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return map[string,AnyType]|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param map[string,AnyType]|null $metadata Key-value pairs used to store additional data. Value can be string, boolean or integer types.
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

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


