<?php
/**
 * SkuRequest
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
 * SkuRequest Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SkuRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SkuRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'eccn' => 'string',
        'hs_code' => 'string',
        'sku_group_id' => 'string',
        'part_number' => 'string',
        'manufacturer_id' => 'string',
        'managed_fulfillment' => 'string',
        'allow_oversell' => 'bool',
        'tax_code' => 'string',
        'name' => 'string',
        'description' => 'string',
        'image' => 'string',
        'url' => 'string',
        'weight' => 'double',
        'weight_unit' => 'string',
        'country_of_origin' => 'string',
        'metadata' => 'map[string,AnyType]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'eccn' => null,
        'hs_code' => null,
        'sku_group_id' => null,
        'part_number' => null,
        'manufacturer_id' => null,
        'managed_fulfillment' => null,
        'allow_oversell' => null,
        'tax_code' => null,
        'name' => null,
        'description' => null,
        'image' => null,
        'url' => null,
        'weight' => 'double',
        'weight_unit' => null,
        'country_of_origin' => null,
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
        'eccn' => 'eccn',
        'hs_code' => 'hsCode',
        'sku_group_id' => 'skuGroupId',
        'part_number' => 'partNumber',
        'manufacturer_id' => 'manufacturerId',
        'managed_fulfillment' => 'managedFulfillment',
        'allow_oversell' => 'allowOversell',
        'tax_code' => 'taxCode',
        'name' => 'name',
        'description' => 'description',
        'image' => 'image',
        'url' => 'url',
        'weight' => 'weight',
        'weight_unit' => 'weightUnit',
        'country_of_origin' => 'countryOfOrigin',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'eccn' => 'setEccn',
        'hs_code' => 'setHsCode',
        'sku_group_id' => 'setSkuGroupId',
        'part_number' => 'setPartNumber',
        'manufacturer_id' => 'setManufacturerId',
        'managed_fulfillment' => 'setManagedFulfillment',
        'allow_oversell' => 'setAllowOversell',
        'tax_code' => 'setTaxCode',
        'name' => 'setName',
        'description' => 'setDescription',
        'image' => 'setImage',
        'url' => 'setUrl',
        'weight' => 'setWeight',
        'weight_unit' => 'setWeightUnit',
        'country_of_origin' => 'setCountryOfOrigin',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'eccn' => 'getEccn',
        'hs_code' => 'getHsCode',
        'sku_group_id' => 'getSkuGroupId',
        'part_number' => 'getPartNumber',
        'manufacturer_id' => 'getManufacturerId',
        'managed_fulfillment' => 'getManagedFulfillment',
        'allow_oversell' => 'getAllowOversell',
        'tax_code' => 'getTaxCode',
        'name' => 'getName',
        'description' => 'getDescription',
        'image' => 'getImage',
        'url' => 'getUrl',
        'weight' => 'getWeight',
        'weight_unit' => 'getWeightUnit',
        'country_of_origin' => 'getCountryOfOrigin',
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

    const MANAGED_FULFILLMENT_DR_GLOBAL_FULFILLMENT = 'DRGlobalFulfillment';
    const WEIGHT_UNIT_OZ = 'oz';
    const WEIGHT_UNIT_LB = 'lb';
    const WEIGHT_UNIT_G = 'g';
    const WEIGHT_UNIT_KG = 'kg';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getManagedFulfillmentAllowableValues()
    {
       $allowable = [
            self::MANAGED_FULFILLMENT_DR_GLOBAL_FULFILLMENT,
        ];

        $allowableAllCase = array_unique(array_merge(array_map('strtolower', $allowable), $allowable));
        return $allowableAllCase;
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWeightUnitAllowableValues()
    {
       $allowable = [
            self::WEIGHT_UNIT_OZ,
            self::WEIGHT_UNIT_LB,
            self::WEIGHT_UNIT_G,
            self::WEIGHT_UNIT_KG,
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
        $this->container['eccn'] = isset($data['eccn']) ? $data['eccn'] : null;
        $this->container['hs_code'] = isset($data['hs_code']) ? $data['hs_code'] : null;
        $this->container['sku_group_id'] = isset($data['sku_group_id']) ? $data['sku_group_id'] : null;
        $this->container['part_number'] = isset($data['part_number']) ? $data['part_number'] : null;
        $this->container['manufacturer_id'] = isset($data['manufacturer_id']) ? $data['manufacturer_id'] : null;
        $this->container['managed_fulfillment'] = isset($data['managed_fulfillment']) ? $data['managed_fulfillment'] : null;
        $this->container['allow_oversell'] = isset($data['allow_oversell']) ? $data['allow_oversell'] : null;
        $this->container['tax_code'] = isset($data['tax_code']) ? $data['tax_code'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['weight_unit'] = isset($data['weight_unit']) ? $data['weight_unit'] : null;
        $this->container['country_of_origin'] = isset($data['country_of_origin']) ? $data['country_of_origin'] : null;
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

        if ($this->container['eccn'] === null) {
            $invalidProperties[] = "'eccn' can't be null";
        }
        $allowedValues = $this->getManagedFulfillmentAllowableValues();
       
        if (!is_null($this->container['managed_fulfillment']) && !in_array(strtolower($this->container['managed_fulfillment']), $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'managed_fulfillment', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['tax_code'] === null) {
            $invalidProperties[] = "'tax_code' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        $allowedValues = $this->getWeightUnitAllowableValues();
       
        if (!is_null($this->container['weight_unit']) && !in_array(strtolower($this->container['weight_unit']), $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'weight_unit', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['country_of_origin'] === null) {
            $invalidProperties[] = "'country_of_origin' can't be null";
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
     * @param string|null $id The unique identifier of a SKU.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets eccn
     *
     * @return string
     */
    public function getEccn()
    {
        return $this->container['eccn'];
    }

    /**
     * Sets eccn
     *
     * @param string $eccn The export control classification number.
     *
     * @return $this
     */
    public function setEccn($eccn)
    {
        $this->container['eccn'] = $eccn;

        return $this;
    }

    /**
     * Gets hs_code
     *
     * @return string|null
     */
    public function getHsCode()
    {
        return $this->container['hs_code'];
    }

    /**
     * Sets hs_code
     *
     * @param string|null $hs_code The international and US Harmonized System code (sometimes referred to as the Harmonized Tariff Schedule).
     *
     * @return $this
     */
    public function setHsCode($hs_code)
    {
        $this->container['hs_code'] = $hs_code;

        return $this;
    }

    /**
     * Gets sku_group_id
     *
     * @return string|null
     */
    public function getSkuGroupId()
    {
        return $this->container['sku_group_id'];
    }

    /**
     * Sets sku_group_id
     *
     * @param string|null $sku_group_id The unique identifier of the Sku Group.
     *
     * @return $this
     */
    public function setSkuGroupId($sku_group_id)
    {
        $this->container['sku_group_id'] = $sku_group_id;

        return $this;
    }

    /**
     * Gets part_number
     *
     * @return string|null
     */
    public function getPartNumber()
    {
        return $this->container['part_number'];
    }

    /**
     * Sets part_number
     *
     * @param string|null $part_number The manufacturer's part number.
     *
     * @return $this
     */
    public function setPartNumber($part_number)
    {
        $this->container['part_number'] = $part_number;

        return $this;
    }

    /**
     * Gets manufacturer_id
     *
     * @return string|null
     */
    public function getManufacturerId()
    {
        return $this->container['manufacturer_id'];
    }

    /**
     * Sets manufacturer_id
     *
     * @param string|null $manufacturer_id The unique identifier
     *
     * @return $this
     */
    public function setManufacturerId($manufacturer_id)
    {
        $this->container['manufacturer_id'] = $manufacturer_id;

        return $this;
    }

    /**
     * Gets managed_fulfillment
     *
     * @return string|null
     */
    public function getManagedFulfillment()
    {
        return $this->container['managed_fulfillment'];
    }

    /**
     * Sets managed_fulfillment
     *
     * @param string|null $managed_fulfillment Signifies the product is physically fulfilled by Digital River.
     *
     * @return $this
     */
    public function setManagedFulfillment($managed_fulfillment)
    {
        $allowedValues = $this->getManagedFulfillmentAllowableValues();
        if (!is_null($managed_fulfillment) && !in_array(strtolower($managed_fulfillment), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'managed_fulfillment', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['managed_fulfillment'] = $managed_fulfillment;

        return $this;
    }

    /**
     * Gets allow_oversell
     *
     * @return bool|null
     */
    public function getAllowOversell()
    {
        return $this->container['allow_oversell'];
    }

    /**
     * Sets allow_oversell
     *
     * @param bool|null $allow_oversell Determines whether customers are allowed to back order a product.
     *
     * @return $this
     */
    public function setAllowOversell($allow_oversell)
    {
        $this->container['allow_oversell'] = $allow_oversell;

        return $this;
    }

    /**
     * Gets tax_code
     *
     * @return string
     */
    public function getTaxCode()
    {
        return $this->container['tax_code'];
    }

    /**
     * Sets tax_code
     *
     * @param string $tax_code The designated tax code.
     *
     * @return $this
     */
    public function setTaxCode($tax_code)
    {
        $this->container['tax_code'] = $tax_code;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The product’s name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description A description of the product.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets image
     *
     * @return string|null
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string|null $image An image of the product.
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url A product url.
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return double|null
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param double|null $weight The weight of the product measured in the unit specified by weightUnit.
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets weight_unit
     *
     * @return string|null
     */
    public function getWeightUnit()
    {
        return $this->container['weight_unit'];
    }

    /**
     * Sets weight_unit
     *
     * @param string|null $weight_unit The unit of measurement applied to the weight.
     *
     * @return $this
     */
    public function setWeightUnit($weight_unit)
    {
        $allowedValues = $this->getWeightUnitAllowableValues();
        if (!is_null($weight_unit) && !in_array(strtolower($weight_unit), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'weight_unit', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['weight_unit'] = $weight_unit;

        return $this;
    }

    /**
     * Gets country_of_origin
     *
     * @return string
     */
    public function getCountryOfOrigin()
    {
        return $this->container['country_of_origin'];
    }

    /**
     * Sets country_of_origin
     *
     * @param string $country_of_origin A two-letter Alpha-2 country code as described in the ISO 3166 international standard.
     *
     * @return $this
     */
    public function setCountryOfOrigin($country_of_origin)
    {
        $this->container['country_of_origin'] = $country_of_origin;

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


