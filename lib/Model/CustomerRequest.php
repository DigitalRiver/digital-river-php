<?php
/**
 * CustomerRequest
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
 * CustomerRequest Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CustomerRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomerRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'email' => 'string',
        'shipping' => '\DigitalRiver\ApiSdk\Model\Shipping',
        'default_source_id' => 'string',
        'tax_certificate' => '\DigitalRiver\ApiSdk\Model\TaxCertificate',
        'metadata' => 'map[string,AnyType]',
        'locale' => 'string',
        'type' => '\DigitalRiver\ApiSdk\Model\CustomerType',
        'enabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'email' => 'email',
        'shipping' => null,
        'default_source_id' => null,
        'tax_certificate' => null,
        'metadata' => null,
        'locale' => null,
        'type' => null,
        'enabled' => null
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
        'email' => 'email',
        'shipping' => 'shipping',
        'default_source_id' => 'defaultSourceId',
        'tax_certificate' => 'taxCertificate',
        'metadata' => 'metadata',
        'locale' => 'locale',
        'type' => 'type',
        'enabled' => 'enabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'email' => 'setEmail',
        'shipping' => 'setShipping',
        'default_source_id' => 'setDefaultSourceId',
        'tax_certificate' => 'setTaxCertificate',
        'metadata' => 'setMetadata',
        'locale' => 'setLocale',
        'type' => 'setType',
        'enabled' => 'setEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'email' => 'getEmail',
        'shipping' => 'getShipping',
        'default_source_id' => 'getDefaultSourceId',
        'tax_certificate' => 'getTaxCertificate',
        'metadata' => 'getMetadata',
        'locale' => 'getLocale',
        'type' => 'getType',
        'enabled' => 'getEnabled'
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
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['shipping'] = isset($data['shipping']) ? $data['shipping'] : null;
        $this->container['default_source_id'] = isset($data['default_source_id']) ? $data['default_source_id'] : null;
        $this->container['tax_certificate'] = isset($data['tax_certificate']) ? $data['tax_certificate'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
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
     * @param string|null $id The unique identifier of a customer.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string|null $email The customer email address.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return \DigitalRiver\ApiSdk\Model\Shipping|null
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param \DigitalRiver\ApiSdk\Model\Shipping|null $shipping shipping
     *
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets default_source_id
     *
     * @return string|null
     */
    public function getDefaultSourceId()
    {
        return $this->container['default_source_id'];
    }

    /**
     * Sets default_source_id
     *
     * @param string|null $default_source_id The identifier of the default source attached to this customer.
     *
     * @return $this
     */
    public function setDefaultSourceId($default_source_id)
    {
        $this->container['default_source_id'] = $default_source_id;

        return $this;
    }

    /**
     * Gets tax_certificate
     *
     * @return \DigitalRiver\ApiSdk\Model\TaxCertificate|null
     */
    public function getTaxCertificate()
    {
        return $this->container['tax_certificate'];
    }

    /**
     * Sets tax_certificate
     *
     * @param \DigitalRiver\ApiSdk\Model\TaxCertificate|null $tax_certificate tax_certificate
     *
     * @return $this
     */
    public function setTaxCertificate($tax_certificate)
    {
        $this->container['tax_certificate'] = $tax_certificate;

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
     * @param string|null $locale A locale designator that combines the two-letter ISO 639-1 language code with the ISO 3166-1 alpha-2 country code.
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \DigitalRiver\ApiSdk\Model\CustomerType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \DigitalRiver\ApiSdk\Model\CustomerType|null $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled Usually used to disable the customer. The default is <code>true</code>. If <code>false</code>, attempts to create orders for the customer will fail.
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

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


