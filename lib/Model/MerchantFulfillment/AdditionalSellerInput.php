<?php
/**
 * AdditionalSellerInput
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon's Buy Shipping Services.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\MerchantFulfillment;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * AdditionalSellerInput Class Doc Comment
 *
 * @category Class
 * @description Additional information required to purchase shipping.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class AdditionalSellerInput implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdditionalSellerInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'data_type' => 'string',
        'value_as_string' => 'string',
        'value_as_boolean' => 'bool',
        'value_as_integer' => 'int',
        'value_as_timestamp' => 'string',
        'value_as_address' => '\SellingPartnerApi\Model\MerchantFulfillment\Address',
        'value_as_weight' => '\SellingPartnerApi\Model\MerchantFulfillment\Weight',
        'value_as_dimension' => '\SellingPartnerApi\Model\MerchantFulfillment\Length',
        'value_as_currency' => '\SellingPartnerApi\Model\MerchantFulfillment\CurrencyAmount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'data_type' => null,
        'value_as_string' => null,
        'value_as_boolean' => null,
        'value_as_integer' => null,
        'value_as_timestamp' => null,
        'value_as_address' => null,
        'value_as_weight' => null,
        'value_as_dimension' => null,
        'value_as_currency' => null
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
        'data_type' => 'DataType',
        'value_as_string' => 'ValueAsString',
        'value_as_boolean' => 'ValueAsBoolean',
        'value_as_integer' => 'ValueAsInteger',
        'value_as_timestamp' => 'ValueAsTimestamp',
        'value_as_address' => 'ValueAsAddress',
        'value_as_weight' => 'ValueAsWeight',
        'value_as_dimension' => 'ValueAsDimension',
        'value_as_currency' => 'ValueAsCurrency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'data_type' => 'setDataType',
        'value_as_string' => 'setValueAsString',
        'value_as_boolean' => 'setValueAsBoolean',
        'value_as_integer' => 'setValueAsInteger',
        'value_as_timestamp' => 'setValueAsTimestamp',
        'value_as_address' => 'setValueAsAddress',
        'value_as_weight' => 'setValueAsWeight',
        'value_as_dimension' => 'setValueAsDimension',
        'value_as_currency' => 'setValueAsCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data_type' => 'getDataType',
        'value_as_string' => 'getValueAsString',
        'value_as_boolean' => 'getValueAsBoolean',
        'value_as_integer' => 'getValueAsInteger',
        'value_as_timestamp' => 'getValueAsTimestamp',
        'value_as_address' => 'getValueAsAddress',
        'value_as_weight' => 'getValueAsWeight',
        'value_as_dimension' => 'getValueAsDimension',
        'value_as_currency' => 'getValueAsCurrency'
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
        $this->container['data_type'] = $data['data_type'] ?? null;
        $this->container['value_as_string'] = $data['value_as_string'] ?? null;
        $this->container['value_as_boolean'] = $data['value_as_boolean'] ?? null;
        $this->container['value_as_integer'] = $data['value_as_integer'] ?? null;
        $this->container['value_as_timestamp'] = $data['value_as_timestamp'] ?? null;
        $this->container['value_as_address'] = $data['value_as_address'] ?? null;
        $this->container['value_as_weight'] = $data['value_as_weight'] ?? null;
        $this->container['value_as_dimension'] = $data['value_as_dimension'] ?? null;
        $this->container['value_as_currency'] = $data['value_as_currency'] ?? null;
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
     * Gets data_type
     *
     * @return string|null
     */
    public function getDataType()
    {
        return $this->container['data_type'];
    }

    /**
     * Sets data_type
     *
     * @param string|null $data_type The data type of the additional information.
     *
     * @return self
     */
    public function setDataType($data_type)
    {
        $this->container['data_type'] = $data_type;

        return $this;
    }
    /**
     * Gets value_as_string
     *
     * @return string|null
     */
    public function getValueAsString()
    {
        return $this->container['value_as_string'];
    }

    /**
     * Sets value_as_string
     *
     * @param string|null $value_as_string The value when the data type is string.
     *
     * @return self
     */
    public function setValueAsString($value_as_string)
    {
        $this->container['value_as_string'] = $value_as_string;

        return $this;
    }
    /**
     * Gets value_as_boolean
     *
     * @return bool|null
     */
    public function getValueAsBoolean()
    {
        return $this->container['value_as_boolean'];
    }

    /**
     * Sets value_as_boolean
     *
     * @param bool|null $value_as_boolean The value when the data type is boolean.
     *
     * @return self
     */
    public function setValueAsBoolean($value_as_boolean)
    {
        $this->container['value_as_boolean'] = $value_as_boolean;

        return $this;
    }
    /**
     * Gets value_as_integer
     *
     * @return int|null
     */
    public function getValueAsInteger()
    {
        return $this->container['value_as_integer'];
    }

    /**
     * Sets value_as_integer
     *
     * @param int|null $value_as_integer The value when the data type is integer.
     *
     * @return self
     */
    public function setValueAsInteger($value_as_integer)
    {
        $this->container['value_as_integer'] = $value_as_integer;

        return $this;
    }
    /**
     * Gets value_as_timestamp
     *
     * @return string|null
     */
    public function getValueAsTimestamp()
    {
        return $this->container['value_as_timestamp'];
    }

    /**
     * Sets value_as_timestamp
     *
     * @param string|null $value_as_timestamp A timestamp in ISO 8601 format.
     *
     * @return self
     */
    public function setValueAsTimestamp($value_as_timestamp)
    {
        $this->container['value_as_timestamp'] = $value_as_timestamp;

        return $this;
    }
    /**
     * Gets value_as_address
     *
     * @return \SellingPartnerApi\Model\MerchantFulfillment\Address|null
     */
    public function getValueAsAddress()
    {
        return $this->container['value_as_address'];
    }

    /**
     * Sets value_as_address
     *
     * @param \SellingPartnerApi\Model\MerchantFulfillment\Address|null $value_as_address value_as_address
     *
     * @return self
     */
    public function setValueAsAddress($value_as_address)
    {
        $this->container['value_as_address'] = $value_as_address;

        return $this;
    }
    /**
     * Gets value_as_weight
     *
     * @return \SellingPartnerApi\Model\MerchantFulfillment\Weight|null
     */
    public function getValueAsWeight()
    {
        return $this->container['value_as_weight'];
    }

    /**
     * Sets value_as_weight
     *
     * @param \SellingPartnerApi\Model\MerchantFulfillment\Weight|null $value_as_weight value_as_weight
     *
     * @return self
     */
    public function setValueAsWeight($value_as_weight)
    {
        $this->container['value_as_weight'] = $value_as_weight;

        return $this;
    }
    /**
     * Gets value_as_dimension
     *
     * @return \SellingPartnerApi\Model\MerchantFulfillment\Length|null
     */
    public function getValueAsDimension()
    {
        return $this->container['value_as_dimension'];
    }

    /**
     * Sets value_as_dimension
     *
     * @param \SellingPartnerApi\Model\MerchantFulfillment\Length|null $value_as_dimension value_as_dimension
     *
     * @return self
     */
    public function setValueAsDimension($value_as_dimension)
    {
        $this->container['value_as_dimension'] = $value_as_dimension;

        return $this;
    }
    /**
     * Gets value_as_currency
     *
     * @return \SellingPartnerApi\Model\MerchantFulfillment\CurrencyAmount|null
     */
    public function getValueAsCurrency()
    {
        return $this->container['value_as_currency'];
    }

    /**
     * Sets value_as_currency
     *
     * @param \SellingPartnerApi\Model\MerchantFulfillment\CurrencyAmount|null $value_as_currency value_as_currency
     *
     * @return self
     */
    public function setValueAsCurrency($value_as_currency)
    {
        $this->container['value_as_currency'] = $value_as_currency;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


