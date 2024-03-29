<?php
/**
 * PricingFormat
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
 * PricingFormat Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PricingFormat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PricingFormat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'currency_number_format' => 'string',
        'symbol' => 'string',
        'decimal_places' => 'int',
        'currency_symbol_before_price' => 'bool',
        'use_currency_symbol_space' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'currency_number_format' => null,
        'symbol' => null,
        'decimal_places' => null,
        'currency_symbol_before_price' => null,
        'use_currency_symbol_space' => null
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
        'currency_number_format' => 'currencyNumberFormat',
        'symbol' => 'symbol',
        'decimal_places' => 'decimalPlaces',
        'currency_symbol_before_price' => 'currencySymbolBeforePrice',
        'use_currency_symbol_space' => 'useCurrencySymbolSpace'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currency_number_format' => 'setCurrencyNumberFormat',
        'symbol' => 'setSymbol',
        'decimal_places' => 'setDecimalPlaces',
        'currency_symbol_before_price' => 'setCurrencySymbolBeforePrice',
        'use_currency_symbol_space' => 'setUseCurrencySymbolSpace'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currency_number_format' => 'getCurrencyNumberFormat',
        'symbol' => 'getSymbol',
        'decimal_places' => 'getDecimalPlaces',
        'currency_symbol_before_price' => 'getCurrencySymbolBeforePrice',
        'use_currency_symbol_space' => 'getUseCurrencySymbolSpace'
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
        $this->container['currency_number_format'] = isset($data['currency_number_format']) ? $data['currency_number_format'] : null;
        $this->container['symbol'] = isset($data['symbol']) ? $data['symbol'] : null;
        $this->container['decimal_places'] = isset($data['decimal_places']) ? $data['decimal_places'] : null;
        $this->container['currency_symbol_before_price'] = isset($data['currency_symbol_before_price']) ? $data['currency_symbol_before_price'] : null;
        $this->container['use_currency_symbol_space'] = isset($data['use_currency_symbol_space']) ? $data['use_currency_symbol_space'] : null;
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
     * Gets currency_number_format
     *
     * @return string|null
     */
    public function getCurrencyNumberFormat()
    {
        return $this->container['currency_number_format'];
    }

    /**
     * Sets currency_number_format
     *
     * @param string|null $currency_number_format The format of the currency.
     *
     * @return $this
     */
    public function setCurrencyNumberFormat($currency_number_format)
    {
        $this->container['currency_number_format'] = $currency_number_format;

        return $this;
    }

    /**
     * Gets symbol
     *
     * @return string|null
     */
    public function getSymbol()
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol
     *
     * @param string|null $symbol The symbol used for the display of the currency amount.
     *
     * @return $this
     */
    public function setSymbol($symbol)
    {
        $this->container['symbol'] = $symbol;

        return $this;
    }

    /**
     * Gets decimal_places
     *
     * @return int|null
     */
    public function getDecimalPlaces()
    {
        return $this->container['decimal_places'];
    }

    /**
     * Sets decimal_places
     *
     * @param int|null $decimal_places The amount of decimal places the currency allows.
     *
     * @return $this
     */
    public function setDecimalPlaces($decimal_places)
    {
        $this->container['decimal_places'] = $decimal_places;

        return $this;
    }

    /**
     * Gets currency_symbol_before_price
     *
     * @return bool|null
     */
    public function getCurrencySymbolBeforePrice()
    {
        return $this->container['currency_symbol_before_price'];
    }

    /**
     * Sets currency_symbol_before_price
     *
     * @param bool|null $currency_symbol_before_price currency_symbol_before_price
     *
     * @return $this
     */
    public function setCurrencySymbolBeforePrice($currency_symbol_before_price)
    {
        $this->container['currency_symbol_before_price'] = $currency_symbol_before_price;

        return $this;
    }

    /**
     * Gets use_currency_symbol_space
     *
     * @return bool|null
     */
    public function getUseCurrencySymbolSpace()
    {
        return $this->container['use_currency_symbol_space'];
    }

    /**
     * Sets use_currency_symbol_space
     *
     * @param bool|null $use_currency_symbol_space use_currency_symbol_space
     *
     * @return $this
     */
    public function setUseCurrencySymbolSpace($use_currency_symbol_space)
    {
        $this->container['use_currency_symbol_space'] = $use_currency_symbol_space;

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


