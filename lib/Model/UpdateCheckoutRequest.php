<?php
/**
 * UpdateCheckoutRequest
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
 * UpdateCheckoutRequest Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UpdateCheckoutRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateCheckoutRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customer_id' => 'string',
        'source_id' => 'string',
        'currency' => 'string',
        'email' => 'string',
        'locale' => 'string',
        'invoice_attribute_id' => 'string',
        'browser_ip' => 'string',
        'application_id' => 'string',
        'tax_identifiers' => '\DigitalRiver\ApiSdk\Model\CheckoutTaxIdentifierRequest[]',
        'ship_from' => '\DigitalRiver\ApiSdk\Model\ShipFrom',
        'ship_to' => '\DigitalRiver\ApiSdk\Model\Shipping',
        'bill_to' => '\DigitalRiver\ApiSdk\Model\Billing',
        'organization' => '\DigitalRiver\ApiSdk\Model\Organization',
        'shipping_discount' => '\DigitalRiver\ApiSdk\Model\Discount',
        'charge_type' => '\DigitalRiver\ApiSdk\Model\ChargeType',
        'customer_type' => '\DigitalRiver\ApiSdk\Model\CustomerType',
        'purchase_location' => '\DigitalRiver\ApiSdk\Model\PurchaseLocation',
        'shipping_choice' => '\DigitalRiver\ApiSdk\Model\ShippingRequest',
        'items' => '\DigitalRiver\ApiSdk\Model\SkuUpdateRequestItem',
        'upstream_id' => 'string',
        'metadata' => 'map[string,AnyType]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'customer_id' => null,
        'source_id' => null,
        'currency' => null,
        'email' => 'email',
        'locale' => null,
        'invoice_attribute_id' => null,
        'browser_ip' => null,
        'application_id' => null,
        'tax_identifiers' => null,
        'ship_from' => null,
        'ship_to' => null,
        'bill_to' => null,
        'organization' => null,
        'shipping_discount' => null,
        'charge_type' => null,
        'customer_type' => null,
        'purchase_location' => null,
        'shipping_choice' => null,
        'items' => null,
        'upstream_id' => null,
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
        'customer_id' => 'customerId',
        'source_id' => 'sourceId',
        'currency' => 'currency',
        'email' => 'email',
        'locale' => 'locale',
        'invoice_attribute_id' => 'invoiceAttributeId',
        'browser_ip' => 'browserIp',
        'application_id' => 'applicationId',
        'tax_identifiers' => 'taxIdentifiers',
        'ship_from' => 'shipFrom',
        'ship_to' => 'shipTo',
        'bill_to' => 'billTo',
        'organization' => 'organization',
        'shipping_discount' => 'shippingDiscount',
        'charge_type' => 'chargeType',
        'customer_type' => 'customerType',
        'purchase_location' => 'purchaseLocation',
        'shipping_choice' => 'shippingChoice',
        'items' => 'items',
        'upstream_id' => 'upstreamId',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer_id' => 'setCustomerId',
        'source_id' => 'setSourceId',
        'currency' => 'setCurrency',
        'email' => 'setEmail',
        'locale' => 'setLocale',
        'invoice_attribute_id' => 'setInvoiceAttributeId',
        'browser_ip' => 'setBrowserIp',
        'application_id' => 'setApplicationId',
        'tax_identifiers' => 'setTaxIdentifiers',
        'ship_from' => 'setShipFrom',
        'ship_to' => 'setShipTo',
        'bill_to' => 'setBillTo',
        'organization' => 'setOrganization',
        'shipping_discount' => 'setShippingDiscount',
        'charge_type' => 'setChargeType',
        'customer_type' => 'setCustomerType',
        'purchase_location' => 'setPurchaseLocation',
        'shipping_choice' => 'setShippingChoice',
        'items' => 'setItems',
        'upstream_id' => 'setUpstreamId',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer_id' => 'getCustomerId',
        'source_id' => 'getSourceId',
        'currency' => 'getCurrency',
        'email' => 'getEmail',
        'locale' => 'getLocale',
        'invoice_attribute_id' => 'getInvoiceAttributeId',
        'browser_ip' => 'getBrowserIp',
        'application_id' => 'getApplicationId',
        'tax_identifiers' => 'getTaxIdentifiers',
        'ship_from' => 'getShipFrom',
        'ship_to' => 'getShipTo',
        'bill_to' => 'getBillTo',
        'organization' => 'getOrganization',
        'shipping_discount' => 'getShippingDiscount',
        'charge_type' => 'getChargeType',
        'customer_type' => 'getCustomerType',
        'purchase_location' => 'getPurchaseLocation',
        'shipping_choice' => 'getShippingChoice',
        'items' => 'getItems',
        'upstream_id' => 'getUpstreamId',
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
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['source_id'] = isset($data['source_id']) ? $data['source_id'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['invoice_attribute_id'] = isset($data['invoice_attribute_id']) ? $data['invoice_attribute_id'] : null;
        $this->container['browser_ip'] = isset($data['browser_ip']) ? $data['browser_ip'] : null;
        $this->container['application_id'] = isset($data['application_id']) ? $data['application_id'] : null;
        $this->container['tax_identifiers'] = isset($data['tax_identifiers']) ? $data['tax_identifiers'] : null;
        $this->container['ship_from'] = isset($data['ship_from']) ? $data['ship_from'] : null;
        $this->container['ship_to'] = isset($data['ship_to']) ? $data['ship_to'] : null;
        $this->container['bill_to'] = isset($data['bill_to']) ? $data['bill_to'] : null;
        $this->container['organization'] = isset($data['organization']) ? $data['organization'] : null;
        $this->container['shipping_discount'] = isset($data['shipping_discount']) ? $data['shipping_discount'] : null;
        $this->container['charge_type'] = isset($data['charge_type']) ? $data['charge_type'] : null;
        $this->container['customer_type'] = isset($data['customer_type']) ? $data['customer_type'] : null;
        $this->container['purchase_location'] = isset($data['purchase_location']) ? $data['purchase_location'] : null;
        $this->container['shipping_choice'] = isset($data['shipping_choice']) ? $data['shipping_choice'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['upstream_id'] = isset($data['upstream_id']) ? $data['upstream_id'] : null;
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
     * Gets customer_id
     *
     * @return string|null
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string|null $customer_id The identifier of the Customer associated with the Checkout.
     *
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets source_id
     *
     * @return string|null
     */
    public function getSourceId()
    {
        return $this->container['source_id'];
    }

    /**
     * Sets source_id
     *
     * @param string|null $source_id The unique identifier of a Source.
     *
     * @return $this
     */
    public function setSourceId($source_id)
    {
        $this->container['source_id'] = $source_id;

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
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email The customer's email address.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

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
     * Gets invoice_attribute_id
     *
     * @return string|null
     */
    public function getInvoiceAttributeId()
    {
        return $this->container['invoice_attribute_id'];
    }

    /**
     * Sets invoice_attribute_id
     *
     * @param string|null $invoice_attribute_id The unique identfier of the invoice attribute.
     *
     * @return $this
     */
    public function setInvoiceAttributeId($invoice_attribute_id)
    {
        $this->container['invoice_attribute_id'] = $invoice_attribute_id;

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
     * @param string|null $browser_ip The IP address of the browser used by the customer when placing the order.
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
     * @param string|null $application_id An arbitrary string identifier that can be used to track the application type.
     *
     * @return $this
     */
    public function setApplicationId($application_id)
    {
        $this->container['application_id'] = $application_id;

        return $this;
    }

    /**
     * Gets tax_identifiers
     *
     * @return \DigitalRiver\ApiSdk\Model\CheckoutTaxIdentifierRequest[]|null
     */
    public function getTaxIdentifiers()
    {
        return $this->container['tax_identifiers'];
    }

    /**
     * Sets tax_identifiers
     *
     * @param \DigitalRiver\ApiSdk\Model\CheckoutTaxIdentifierRequest[]|null $tax_identifiers tax_identifiers
     *
     * @return $this
     */
    public function setTaxIdentifiers($tax_identifiers)
    {
        $this->container['tax_identifiers'] = $tax_identifiers;

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
     * Gets ship_to
     *
     * @return \DigitalRiver\ApiSdk\Model\Shipping|null
     */
    public function getShipTo()
    {
        return $this->container['ship_to'];
    }

    /**
     * Sets ship_to
     *
     * @param \DigitalRiver\ApiSdk\Model\Shipping|null $ship_to ship_to
     *
     * @return $this
     */
    public function setShipTo($ship_to)
    {
        $this->container['ship_to'] = $ship_to;

        return $this;
    }

    /**
     * Gets bill_to
     *
     * @return \DigitalRiver\ApiSdk\Model\Billing|null
     */
    public function getBillTo()
    {
        return $this->container['bill_to'];
    }

    /**
     * Sets bill_to
     *
     * @param \DigitalRiver\ApiSdk\Model\Billing|null $bill_to bill_to
     *
     * @return $this
     */
    public function setBillTo($bill_to)
    {
        $this->container['bill_to'] = $bill_to;

        return $this;
    }

    /**
     * Gets organization
     *
     * @return \DigitalRiver\ApiSdk\Model\Organization|null
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param \DigitalRiver\ApiSdk\Model\Organization|null $organization organization
     *
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;

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
     * Gets purchase_location
     *
     * @return \DigitalRiver\ApiSdk\Model\PurchaseLocation|null
     */
    public function getPurchaseLocation()
    {
        return $this->container['purchase_location'];
    }

    /**
     * Sets purchase_location
     *
     * @param \DigitalRiver\ApiSdk\Model\PurchaseLocation|null $purchase_location purchase_location
     *
     * @return $this
     */
    public function setPurchaseLocation($purchase_location)
    {
        $this->container['purchase_location'] = $purchase_location;

        return $this;
    }

    /**
     * Gets shipping_choice
     *
     * @return \DigitalRiver\ApiSdk\Model\ShippingRequest|null
     */
    public function getShippingChoice()
    {
        return $this->container['shipping_choice'];
    }

    /**
     * Sets shipping_choice
     *
     * @param \DigitalRiver\ApiSdk\Model\ShippingRequest|null $shipping_choice shipping_choice
     *
     * @return $this
     */
    public function setShippingChoice($shipping_choice)
    {
        $this->container['shipping_choice'] = $shipping_choice;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \DigitalRiver\ApiSdk\Model\SkuUpdateRequestItem|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \DigitalRiver\ApiSdk\Model\SkuUpdateRequestItem|null $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
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
     * @param string|null $upstream_id The upstream identifier.
     *
     * @return $this
     */
    public function setUpstreamId($upstream_id)
    {
        $this->container['upstream_id'] = $upstream_id;

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


