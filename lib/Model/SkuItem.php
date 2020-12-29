<?php
/**
 * SkuItem
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
 * SkuItem Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SkuItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SkuItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'sku_id' => 'string',
        'subscription_info' => '\DigitalRiver\ApiSdk\Model\SubscriptionInfo',
        'fees' => '\DigitalRiver\ApiSdk\Model\Fees',
        'quantity' => 'int',
        'amount' => 'double',
        'available_to_refund_amount' => 'double',
        'tax' => '\DigitalRiver\ApiSdk\Model\Tax',
        'importer_tax' => '\DigitalRiver\ApiSdk\Model\ImporterTax',
        'duties' => '\DigitalRiver\ApiSdk\Model\Duties',
        'discount' => '\DigitalRiver\ApiSdk\Model\SkuDiscount',
        'ship_from' => '\DigitalRiver\ApiSdk\Model\ShipFrom',
        'metadata' => 'map[string,AnyType]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'sku_id' => null,
        'subscription_info' => null,
        'fees' => null,
        'quantity' => null,
        'amount' => 'double',
        'available_to_refund_amount' => 'double',
        'tax' => null,
        'importer_tax' => null,
        'duties' => null,
        'discount' => null,
        'ship_from' => null,
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
        'id' => 'id',
        'sku_id' => 'skuId',
        'subscription_info' => 'subscriptionInfo',
        'fees' => 'fees',
        'quantity' => 'quantity',
        'amount' => 'amount',
        'available_to_refund_amount' => 'availableToRefundAmount',
        'tax' => 'tax',
        'importer_tax' => 'importerTax',
        'duties' => 'duties',
        'discount' => 'discount',
        'ship_from' => 'shipFrom',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'sku_id' => 'setSkuId',
        'subscription_info' => 'setSubscriptionInfo',
        'fees' => 'setFees',
        'quantity' => 'setQuantity',
        'amount' => 'setAmount',
        'available_to_refund_amount' => 'setAvailableToRefundAmount',
        'tax' => 'setTax',
        'importer_tax' => 'setImporterTax',
        'duties' => 'setDuties',
        'discount' => 'setDiscount',
        'ship_from' => 'setShipFrom',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'sku_id' => 'getSkuId',
        'subscription_info' => 'getSubscriptionInfo',
        'fees' => 'getFees',
        'quantity' => 'getQuantity',
        'amount' => 'getAmount',
        'available_to_refund_amount' => 'getAvailableToRefundAmount',
        'tax' => 'getTax',
        'importer_tax' => 'getImporterTax',
        'duties' => 'getDuties',
        'discount' => 'getDiscount',
        'ship_from' => 'getShipFrom',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['sku_id'] = isset($data['sku_id']) ? $data['sku_id'] : null;
        $this->container['subscription_info'] = isset($data['subscription_info']) ? $data['subscription_info'] : null;
        $this->container['fees'] = isset($data['fees']) ? $data['fees'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['available_to_refund_amount'] = isset($data['available_to_refund_amount']) ? $data['available_to_refund_amount'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['importer_tax'] = isset($data['importer_tax']) ? $data['importer_tax'] : null;
        $this->container['duties'] = isset($data['duties']) ? $data['duties'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
        $this->container['ship_from'] = isset($data['ship_from']) ? $data['ship_from'] : null;
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
     * @param string|null $id The identifier of the item.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets sku_id
     *
     * @return string|null
     */
    public function getSkuId()
    {
        return $this->container['sku_id'];
    }

    /**
     * Sets sku_id
     *
     * @param string|null $sku_id The identifier of the [stock keeping unit (SKU)](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/skus).
     *
     * @return $this
     */
    public function setSkuId($sku_id)
    {
        $this->container['sku_id'] = $sku_id;

        return $this;
    }

    /**
     * Gets subscription_info
     *
     * @return \DigitalRiver\ApiSdk\Model\SubscriptionInfo|null
     */
    public function getSubscriptionInfo()
    {
        return $this->container['subscription_info'];
    }

    /**
     * Sets subscription_info
     *
     * @param \DigitalRiver\ApiSdk\Model\SubscriptionInfo|null $subscription_info subscription_info
     *
     * @return $this
     */
    public function setSubscriptionInfo($subscription_info)
    {
        $this->container['subscription_info'] = $subscription_info;

        return $this;
    }

    /**
     * Gets fees
     *
     * @return \DigitalRiver\ApiSdk\Model\Fees|null
     */
    public function getFees()
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees
     *
     * @param \DigitalRiver\ApiSdk\Model\Fees|null $fees fees
     *
     * @return $this
     */
    public function setFees($fees)
    {
        $this->container['fees'] = $fees;

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
     * @param int|null $quantity The number of items.
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return double|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double|null $amount The cost of the items.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets available_to_refund_amount
     *
     * @return double|null
     */
    public function getAvailableToRefundAmount()
    {
        return $this->container['available_to_refund_amount'];
    }

    /**
     * Sets available_to_refund_amount
     *
     * @param double|null $available_to_refund_amount The [available to refund](https://docs.digitalriver.com/digital-river-api/returns-and-refunds-1/refunds/issuing-refunds#checking-the-available-refund-amount) amount.
     *
     * @return $this
     */
    public function setAvailableToRefundAmount($available_to_refund_amount)
    {
        $this->container['available_to_refund_amount'] = $available_to_refund_amount;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return \DigitalRiver\ApiSdk\Model\Tax|null
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param \DigitalRiver\ApiSdk\Model\Tax|null $tax tax
     *
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets importer_tax
     *
     * @return \DigitalRiver\ApiSdk\Model\ImporterTax|null
     */
    public function getImporterTax()
    {
        return $this->container['importer_tax'];
    }

    /**
     * Sets importer_tax
     *
     * @param \DigitalRiver\ApiSdk\Model\ImporterTax|null $importer_tax importer_tax
     *
     * @return $this
     */
    public function setImporterTax($importer_tax)
    {
        $this->container['importer_tax'] = $importer_tax;

        return $this;
    }

    /**
     * Gets duties
     *
     * @return \DigitalRiver\ApiSdk\Model\Duties|null
     */
    public function getDuties()
    {
        return $this->container['duties'];
    }

    /**
     * Sets duties
     *
     * @param \DigitalRiver\ApiSdk\Model\Duties|null $duties duties
     *
     * @return $this
     */
    public function setDuties($duties)
    {
        $this->container['duties'] = $duties;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return \DigitalRiver\ApiSdk\Model\SkuDiscount|null
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param \DigitalRiver\ApiSdk\Model\SkuDiscount|null $discount discount
     *
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

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

