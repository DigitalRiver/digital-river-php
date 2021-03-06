<?php
/**
 * SalesTransaction
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
 * SalesTransaction Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SalesTransaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SalesTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_time' => '\DateTime',
        'sale_time' => '\DateTime',
        'sales_summary_id' => 'string',
        'currency' => 'string',
        'amount' => 'double',
        'type' => 'string',
        'order_id' => 'string',
        'sku_id' => 'string',
        'quantity' => 'double',
        'payout_amounts' => '\DigitalRiver\ApiSdk\Model\PayoutAmounts',
        'payer_id' => 'string',
        'payer_name' => 'string',
        'payee_id' => 'string',
        'payee_name' => 'string',
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
        'sale_time' => 'date-time',
        'sales_summary_id' => null,
        'currency' => null,
        'amount' => 'double',
        'type' => null,
        'order_id' => null,
        'sku_id' => null,
        'quantity' => 'double',
        'payout_amounts' => null,
        'payer_id' => null,
        'payer_name' => null,
        'payee_id' => null,
        'payee_name' => null,
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
        'sale_time' => 'saleTime',
        'sales_summary_id' => 'salesSummaryId',
        'currency' => 'currency',
        'amount' => 'amount',
        'type' => 'type',
        'order_id' => 'orderId',
        'sku_id' => 'skuId',
        'quantity' => 'quantity',
        'payout_amounts' => 'payoutAmounts',
        'payer_id' => 'payerId',
        'payer_name' => 'payerName',
        'payee_id' => 'payeeId',
        'payee_name' => 'payeeName',
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
        'sale_time' => 'setSaleTime',
        'sales_summary_id' => 'setSalesSummaryId',
        'currency' => 'setCurrency',
        'amount' => 'setAmount',
        'type' => 'setType',
        'order_id' => 'setOrderId',
        'sku_id' => 'setSkuId',
        'quantity' => 'setQuantity',
        'payout_amounts' => 'setPayoutAmounts',
        'payer_id' => 'setPayerId',
        'payer_name' => 'setPayerName',
        'payee_id' => 'setPayeeId',
        'payee_name' => 'setPayeeName',
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
        'sale_time' => 'getSaleTime',
        'sales_summary_id' => 'getSalesSummaryId',
        'currency' => 'getCurrency',
        'amount' => 'getAmount',
        'type' => 'getType',
        'order_id' => 'getOrderId',
        'sku_id' => 'getSkuId',
        'quantity' => 'getQuantity',
        'payout_amounts' => 'getPayoutAmounts',
        'payer_id' => 'getPayerId',
        'payer_name' => 'getPayerName',
        'payee_id' => 'getPayeeId',
        'payee_name' => 'getPayeeName',
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

    const TYPE_SALE = 'sale';
    const TYPE_REPLACEMENT = 'replacement';
    const TYPE_REPLACEMENT_REFUND = 'replacement_refund';
    const TYPE_REPLACEMENT_RETURN = 'replacement_return';
    const TYPE_FRAUD_CHARGEBACK = 'fraud_chargeback';
    const TYPE_NON_FRAUD_CHARGEBACK = 'non_fraud_chargeback';
    const TYPE_REFUND = 'refund';
    const TYPE__RETURN = 'return';
    const TYPE_FRAUD_DETECTION = 'fraud_detection';
    const TYPE_DECLINED_SETTLEMENT = 'declined_settlement';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
       $allowable = [
            self::TYPE_SALE,
            self::TYPE_REPLACEMENT,
            self::TYPE_REPLACEMENT_REFUND,
            self::TYPE_REPLACEMENT_RETURN,
            self::TYPE_FRAUD_CHARGEBACK,
            self::TYPE_NON_FRAUD_CHARGEBACK,
            self::TYPE_REFUND,
            self::TYPE__RETURN,
            self::TYPE_FRAUD_DETECTION,
            self::TYPE_DECLINED_SETTLEMENT,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['created_time'] = isset($data['created_time']) ? $data['created_time'] : null;
        $this->container['sale_time'] = isset($data['sale_time']) ? $data['sale_time'] : null;
        $this->container['sales_summary_id'] = isset($data['sales_summary_id']) ? $data['sales_summary_id'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['sku_id'] = isset($data['sku_id']) ? $data['sku_id'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['payout_amounts'] = isset($data['payout_amounts']) ? $data['payout_amounts'] : null;
        $this->container['payer_id'] = isset($data['payer_id']) ? $data['payer_id'] : null;
        $this->container['payer_name'] = isset($data['payer_name']) ? $data['payer_name'] : null;
        $this->container['payee_id'] = isset($data['payee_id']) ? $data['payee_id'] : null;
        $this->container['payee_name'] = isset($data['payee_name']) ? $data['payee_name'] : null;
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

        $allowedValues = $this->getTypeAllowableValues();
       
        if (!is_null($this->container['type']) && !in_array(strtolower($this->container['type']), $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
     * @param string|null $id Unique identifier for the sales transaction
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
     * @param \DateTime|null $created_time Time at which the sales transaction was created
     *
     * @return $this
     */
    public function setCreatedTime($created_time)
    {
        $this->container['created_time'] = $created_time;

        return $this;
    }

    /**
     * Gets sale_time
     *
     * @return \DateTime|null
     */
    public function getSaleTime()
    {
        return $this->container['sale_time'];
    }

    /**
     * Sets sale_time
     *
     * @param \DateTime|null $sale_time Time at which the sales occurred.
     *
     * @return $this
     */
    public function setSaleTime($sale_time)
    {
        $this->container['sale_time'] = $sale_time;

        return $this;
    }

    /**
     * Gets sales_summary_id
     *
     * @return string|null
     */
    public function getSalesSummaryId()
    {
        return $this->container['sales_summary_id'];
    }

    /**
     * Sets sales_summary_id
     *
     * @param string|null $sales_summary_id Unique identifier of a Digital River sales summary, if any.
     *
     * @return $this
     */
    public function setSalesSummaryId($sales_summary_id)
    {
        $this->container['sales_summary_id'] = $sales_summary_id;

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
     * @param string|null $currency Three-letter ISO currency code representing the sale currency.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

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
     * @param double|null $amount The sales transaction amount.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Sales transaction type.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array(strtolower($type), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string|null $order_id Order identifier.
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

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
     * @param string|null $sku_id SKU identifier.
     *
     * @return $this
     */
    public function setSkuId($sku_id)
    {
        $this->container['sku_id'] = $sku_id;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return double|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param double|null $quantity The quantity of the SKU.
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets payout_amounts
     *
     * @return \DigitalRiver\ApiSdk\Model\PayoutAmounts|null
     */
    public function getPayoutAmounts()
    {
        return $this->container['payout_amounts'];
    }

    /**
     * Sets payout_amounts
     *
     * @param \DigitalRiver\ApiSdk\Model\PayoutAmounts|null $payout_amounts payout_amounts
     *
     * @return $this
     */
    public function setPayoutAmounts($payout_amounts)
    {
        $this->container['payout_amounts'] = $payout_amounts;

        return $this;
    }

    /**
     * Gets payer_id
     *
     * @return string|null
     */
    public function getPayerId()
    {
        return $this->container['payer_id'];
    }

    /**
     * Sets payer_id
     *
     * @param string|null $payer_id The ID of payer.
     *
     * @return $this
     */
    public function setPayerId($payer_id)
    {
        $this->container['payer_id'] = $payer_id;

        return $this;
    }

    /**
     * Gets payer_name
     *
     * @return string|null
     */
    public function getPayerName()
    {
        return $this->container['payer_name'];
    }

    /**
     * Sets payer_name
     *
     * @param string|null $payer_name The name of the payer
     *
     * @return $this
     */
    public function setPayerName($payer_name)
    {
        $this->container['payer_name'] = $payer_name;

        return $this;
    }

    /**
     * Gets payee_id
     *
     * @return string|null
     */
    public function getPayeeId()
    {
        return $this->container['payee_id'];
    }

    /**
     * Sets payee_id
     *
     * @param string|null $payee_id The ID of the payee.
     *
     * @return $this
     */
    public function setPayeeId($payee_id)
    {
        $this->container['payee_id'] = $payee_id;

        return $this;
    }

    /**
     * Gets payee_name
     *
     * @return string|null
     */
    public function getPayeeName()
    {
        return $this->container['payee_name'];
    }

    /**
     * Sets payee_name
     *
     * @param string|null $payee_name The name of the payee.
     *
     * @return $this
     */
    public function setPayeeName($payee_name)
    {
        $this->container['payee_name'] = $payee_name;

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


