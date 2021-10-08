<?php
/**
 * PlanRequest
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
 * PlanRequest Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PlanRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PlanRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'terms' => 'string',
        'contract_binding_days' => 'int',
        'interval' => 'string',
        'interval_count' => 'int',
        'name' => 'string',
        'reminder_offset_days' => 'int',
        'billing_offset_days' => 'int',
        'collection_period_days' => 'int',
        'state' => 'string',
        'metadata' => 'map[string,AnyType]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'terms' => null,
        'contract_binding_days' => null,
        'interval' => null,
        'interval_count' => null,
        'name' => null,
        'reminder_offset_days' => null,
        'billing_offset_days' => null,
        'collection_period_days' => null,
        'state' => null,
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
        'terms' => 'terms',
        'contract_binding_days' => 'contractBindingDays',
        'interval' => 'interval',
        'interval_count' => 'intervalCount',
        'name' => 'name',
        'reminder_offset_days' => 'reminderOffsetDays',
        'billing_offset_days' => 'billingOffsetDays',
        'collection_period_days' => 'collectionPeriodDays',
        'state' => 'state',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'terms' => 'setTerms',
        'contract_binding_days' => 'setContractBindingDays',
        'interval' => 'setInterval',
        'interval_count' => 'setIntervalCount',
        'name' => 'setName',
        'reminder_offset_days' => 'setReminderOffsetDays',
        'billing_offset_days' => 'setBillingOffsetDays',
        'collection_period_days' => 'setCollectionPeriodDays',
        'state' => 'setState',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'terms' => 'getTerms',
        'contract_binding_days' => 'getContractBindingDays',
        'interval' => 'getInterval',
        'interval_count' => 'getIntervalCount',
        'name' => 'getName',
        'reminder_offset_days' => 'getReminderOffsetDays',
        'billing_offset_days' => 'getBillingOffsetDays',
        'collection_period_days' => 'getCollectionPeriodDays',
        'state' => 'getState',
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

    const INTERVAL_YEAR = 'year';
    const INTERVAL_MONTH = 'month';
    const INTERVAL_WEEK = 'week';
    const INTERVAL_DAY = 'day';
    const STATE_DRAFT = 'draft';
    const STATE_ACTIVE = 'active';
    const STATE_DISCONTINUED = 'discontinued';
    const STATE_DEACTIVATED = 'deactivated';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIntervalAllowableValues()
    {
       $allowable = [
            self::INTERVAL_YEAR,
            self::INTERVAL_MONTH,
            self::INTERVAL_WEEK,
            self::INTERVAL_DAY,
        ];

        $allowableAllCase = array_unique(array_merge(array_map('strtolower', $allowable), $allowable));
        return $allowableAllCase;
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
       $allowable = [
            self::STATE_DRAFT,
            self::STATE_ACTIVE,
            self::STATE_DISCONTINUED,
            self::STATE_DEACTIVATED,
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
        $this->container['terms'] = isset($data['terms']) ? $data['terms'] : null;
        $this->container['contract_binding_days'] = isset($data['contract_binding_days']) ? $data['contract_binding_days'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['interval_count'] = isset($data['interval_count']) ? $data['interval_count'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['reminder_offset_days'] = isset($data['reminder_offset_days']) ? $data['reminder_offset_days'] : null;
        $this->container['billing_offset_days'] = isset($data['billing_offset_days']) ? $data['billing_offset_days'] : null;
        $this->container['collection_period_days'] = isset($data['collection_period_days']) ? $data['collection_period_days'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
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

        if ($this->container['terms'] === null) {
            $invalidProperties[] = "'terms' can't be null";
        }
        if ($this->container['contract_binding_days'] === null) {
            $invalidProperties[] = "'contract_binding_days' can't be null";
        }
        if ($this->container['interval'] === null) {
            $invalidProperties[] = "'interval' can't be null";
        }
        $allowedValues = $this->getIntervalAllowableValues();
       
        if (!is_null($this->container['interval']) && !in_array(strtolower($this->container['interval']), $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'interval', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['interval_count'] === null) {
            $invalidProperties[] = "'interval_count' can't be null";
        }
        if ($this->container['billing_offset_days'] === null) {
            $invalidProperties[] = "'billing_offset_days' can't be null";
        }
        if ($this->container['collection_period_days'] === null) {
            $invalidProperties[] = "'collection_period_days' can't be null";
        }
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
     * @param string|null $id The unique identifier of a Plan.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets terms
     *
     * @return string
     */
    public function getTerms()
    {
        return $this->container['terms'];
    }

    /**
     * Sets terms
     *
     * @param string $terms The contractual agreement displayed to the customer during the acquisition process.
     *
     * @return $this
     */
    public function setTerms($terms)
    {
        $this->container['terms'] = $terms;

        return $this;
    }

    /**
     * Gets contract_binding_days
     *
     * @return int
     */
    public function getContractBindingDays()
    {
        return $this->container['contract_binding_days'];
    }

    /**
     * Sets contract_binding_days
     *
     * @param int $contract_binding_days Indicates the agreed upon length of the contract. For example, an annual subscription should have a value of 365.
     *
     * @return $this
     */
    public function setContractBindingDays($contract_binding_days)
    {
        $this->container['contract_binding_days'] = $contract_binding_days;

        return $this;
    }

    /**
     * Gets interval
     *
     * @return string
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     *
     * @param string $interval The supported billing intervals
     *
     * @return $this
     */
    public function setInterval($interval)
    {
        $allowedValues = $this->getIntervalAllowableValues();
        if (!in_array(strtolower($interval), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'interval', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['interval'] = $interval;

        return $this;
    }

    /**
     * Gets interval_count
     *
     * @return int
     */
    public function getIntervalCount()
    {
        return $this->container['interval_count'];
    }

    /**
     * Sets interval_count
     *
     * @param int $interval_count How often the customer is billed per the unit of time specified by <code>interval</code> (e.g. every 3 months).
     *
     * @return $this
     */
    public function setIntervalCount($interval_count)
    {
        $this->container['interval_count'] = $interval_count;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Describes the subscription products or services added to this plan.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets reminder_offset_days
     *
     * @return int|null
     */
    public function getReminderOffsetDays()
    {
        return $this->container['reminder_offset_days'];
    }

    /**
     * Sets reminder_offset_days
     *
     * @param int|null $reminder_offset_days The number of days before the opening of the invoice that the reminder event is triggered.
     *
     * @return $this
     */
    public function setReminderOffsetDays($reminder_offset_days)
    {
        $this->container['reminder_offset_days'] = $reminder_offset_days;

        return $this;
    }

    /**
     * Gets billing_offset_days
     *
     * @return int
     */
    public function getBillingOffsetDays()
    {
        return $this->container['billing_offset_days'];
    }

    /**
     * Sets billing_offset_days
     *
     * @param int $billing_offset_days The number of days before the due date that billing is initiated.
     *
     * @return $this
     */
    public function setBillingOffsetDays($billing_offset_days)
    {
        $this->container['billing_offset_days'] = $billing_offset_days;

        return $this;
    }

    /**
     * Gets collection_period_days
     *
     * @return int
     */
    public function getCollectionPeriodDays()
    {
        return $this->container['collection_period_days'];
    }

    /**
     * Sets collection_period_days
     *
     * @param int $collection_period_days Represents the number of days that Digital River attempts to collect payment.
     *
     * @return $this
     */
    public function setCollectionPeriodDays($collection_period_days)
    {
        $this->container['collection_period_days'] = $collection_period_days;

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
     * @param string|null $state The valid states of a plan. Setting a plan to <code>deactivated</code> causes all connected subscriptions to end with the current period.
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

