<?php
/**
 * ShipmentDetail
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Shipment Invoicing
 *
 * The Selling Partner API for Shipment Invoicing helps you programmatically retrieve shipment invoice information in the Brazil marketplace for a selling partner's Fulfillment by Amazon (FBA) orders.
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

namespace SellingPartnerApi\Model\ShipmentInvoicing;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * ShipmentDetail Class Doc Comment
 *
 * @category Class
 * @description The information required by a selling partner to issue a shipment invoice.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ShipmentDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'warehouse_id' => 'string',
        'amazon_order_id' => 'string',
        'amazon_shipment_id' => 'string',
        'purchase_date' => 'string',
        'shipping_address' => '\SellingPartnerApi\Model\ShipmentInvoicing\Address',
        'payment_method_details' => 'string[]',
        'marketplace_id' => 'string',
        'seller_id' => 'string',
        'buyer_name' => 'string',
        'buyer_county' => 'string',
        'buyer_tax_info' => '\SellingPartnerApi\Model\ShipmentInvoicing\BuyerTaxInfo',
        'marketplace_tax_info' => '\SellingPartnerApi\Model\ShipmentInvoicing\MarketplaceTaxInfo',
        'seller_display_name' => 'string',
        'shipment_items' => '\SellingPartnerApi\Model\ShipmentInvoicing\ShipmentItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'warehouse_id' => null,
        'amazon_order_id' => null,
        'amazon_shipment_id' => null,
        'purchase_date' => null,
        'shipping_address' => null,
        'payment_method_details' => null,
        'marketplace_id' => null,
        'seller_id' => null,
        'buyer_name' => null,
        'buyer_county' => null,
        'buyer_tax_info' => null,
        'marketplace_tax_info' => null,
        'seller_display_name' => null,
        'shipment_items' => null
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
        'warehouse_id' => 'WarehouseId',
        'amazon_order_id' => 'AmazonOrderId',
        'amazon_shipment_id' => 'AmazonShipmentId',
        'purchase_date' => 'PurchaseDate',
        'shipping_address' => 'ShippingAddress',
        'payment_method_details' => 'PaymentMethodDetails',
        'marketplace_id' => 'MarketplaceId',
        'seller_id' => 'SellerId',
        'buyer_name' => 'BuyerName',
        'buyer_county' => 'BuyerCounty',
        'buyer_tax_info' => 'BuyerTaxInfo',
        'marketplace_tax_info' => 'MarketplaceTaxInfo',
        'seller_display_name' => 'SellerDisplayName',
        'shipment_items' => 'ShipmentItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'warehouse_id' => 'setWarehouseId',
        'amazon_order_id' => 'setAmazonOrderId',
        'amazon_shipment_id' => 'setAmazonShipmentId',
        'purchase_date' => 'setPurchaseDate',
        'shipping_address' => 'setShippingAddress',
        'payment_method_details' => 'setPaymentMethodDetails',
        'marketplace_id' => 'setMarketplaceId',
        'seller_id' => 'setSellerId',
        'buyer_name' => 'setBuyerName',
        'buyer_county' => 'setBuyerCounty',
        'buyer_tax_info' => 'setBuyerTaxInfo',
        'marketplace_tax_info' => 'setMarketplaceTaxInfo',
        'seller_display_name' => 'setSellerDisplayName',
        'shipment_items' => 'setShipmentItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'warehouse_id' => 'getWarehouseId',
        'amazon_order_id' => 'getAmazonOrderId',
        'amazon_shipment_id' => 'getAmazonShipmentId',
        'purchase_date' => 'getPurchaseDate',
        'shipping_address' => 'getShippingAddress',
        'payment_method_details' => 'getPaymentMethodDetails',
        'marketplace_id' => 'getMarketplaceId',
        'seller_id' => 'getSellerId',
        'buyer_name' => 'getBuyerName',
        'buyer_county' => 'getBuyerCounty',
        'buyer_tax_info' => 'getBuyerTaxInfo',
        'marketplace_tax_info' => 'getMarketplaceTaxInfo',
        'seller_display_name' => 'getSellerDisplayName',
        'shipment_items' => 'getShipmentItems'
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
        $this->container['warehouse_id'] = $data['warehouse_id'] ?? null;
        $this->container['amazon_order_id'] = $data['amazon_order_id'] ?? null;
        $this->container['amazon_shipment_id'] = $data['amazon_shipment_id'] ?? null;
        $this->container['purchase_date'] = $data['purchase_date'] ?? null;
        $this->container['shipping_address'] = $data['shipping_address'] ?? null;
        $this->container['payment_method_details'] = $data['payment_method_details'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['seller_id'] = $data['seller_id'] ?? null;
        $this->container['buyer_name'] = $data['buyer_name'] ?? null;
        $this->container['buyer_county'] = $data['buyer_county'] ?? null;
        $this->container['buyer_tax_info'] = $data['buyer_tax_info'] ?? null;
        $this->container['marketplace_tax_info'] = $data['marketplace_tax_info'] ?? null;
        $this->container['seller_display_name'] = $data['seller_display_name'] ?? null;
        $this->container['shipment_items'] = $data['shipment_items'] ?? null;
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
     * Gets warehouse_id
     *
     * @return string|null
     */
    public function getWarehouseId()
    {
        return $this->container['warehouse_id'];
    }

    /**
     * Sets warehouse_id
     *
     * @param string|null $warehouse_id The Amazon-defined identifier for the warehouse.
     *
     * @return self
     */
    public function setWarehouseId($warehouse_id)
    {
        $this->container['warehouse_id'] = $warehouse_id;

        return $this;
    }
    /**
     * Gets amazon_order_id
     *
     * @return string|null
     */
    public function getAmazonOrderId()
    {
        return $this->container['amazon_order_id'];
    }

    /**
     * Sets amazon_order_id
     *
     * @param string|null $amazon_order_id The Amazon-defined identifier for the order.
     *
     * @return self
     */
    public function setAmazonOrderId($amazon_order_id)
    {
        $this->container['amazon_order_id'] = $amazon_order_id;

        return $this;
    }
    /**
     * Gets amazon_shipment_id
     *
     * @return string|null
     */
    public function getAmazonShipmentId()
    {
        return $this->container['amazon_shipment_id'];
    }

    /**
     * Sets amazon_shipment_id
     *
     * @param string|null $amazon_shipment_id The Amazon-defined identifier for the shipment.
     *
     * @return self
     */
    public function setAmazonShipmentId($amazon_shipment_id)
    {
        $this->container['amazon_shipment_id'] = $amazon_shipment_id;

        return $this;
    }
    /**
     * Gets purchase_date
     *
     * @return string|null
     */
    public function getPurchaseDate()
    {
        return $this->container['purchase_date'];
    }

    /**
     * Sets purchase_date
     *
     * @param string|null $purchase_date The date and time when the order was created, in ISO 8601 format.
     *
     * @return self
     */
    public function setPurchaseDate($purchase_date)
    {
        $this->container['purchase_date'] = $purchase_date;

        return $this;
    }
    /**
     * Gets shipping_address
     *
     * @return \SellingPartnerApi\Model\ShipmentInvoicing\Address|null
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param \SellingPartnerApi\Model\ShipmentInvoicing\Address|null $shipping_address shipping_address
     *
     * @return self
     */
    public function setShippingAddress($shipping_address)
    {
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }
    /**
     * Gets payment_method_details
     *
     * @return string[]|null
     */
    public function getPaymentMethodDetails()
    {
        return $this->container['payment_method_details'];
    }

    /**
     * Sets payment_method_details
     *
     * @param string[]|null $payment_method_details The list of payment method details.
     *
     * @return self
     */
    public function setPaymentMethodDetails($payment_method_details)
    {
        $this->container['payment_method_details'] = $payment_method_details;

        return $this;
    }
    /**
     * Gets marketplace_id
     *
     * @return string|null
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string|null $marketplace_id The identifier for the marketplace where the order was placed.
     *
     * @return self
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }
    /**
     * Gets seller_id
     *
     * @return string|null
     */
    public function getSellerId()
    {
        return $this->container['seller_id'];
    }

    /**
     * Sets seller_id
     *
     * @param string|null $seller_id The seller identifier.
     *
     * @return self
     */
    public function setSellerId($seller_id)
    {
        $this->container['seller_id'] = $seller_id;

        return $this;
    }
    /**
     * Gets buyer_name
     *
     * @return string|null
     */
    public function getBuyerName()
    {
        return $this->container['buyer_name'];
    }

    /**
     * Sets buyer_name
     *
     * @param string|null $buyer_name The name of the buyer.
     *
     * @return self
     */
    public function setBuyerName($buyer_name)
    {
        $this->container['buyer_name'] = $buyer_name;

        return $this;
    }
    /**
     * Gets buyer_county
     *
     * @return string|null
     */
    public function getBuyerCounty()
    {
        return $this->container['buyer_county'];
    }

    /**
     * Sets buyer_county
     *
     * @param string|null $buyer_county The county of the buyer.
     *
     * @return self
     */
    public function setBuyerCounty($buyer_county)
    {
        $this->container['buyer_county'] = $buyer_county;

        return $this;
    }
    /**
     * Gets buyer_tax_info
     *
     * @return \SellingPartnerApi\Model\ShipmentInvoicing\BuyerTaxInfo|null
     */
    public function getBuyerTaxInfo()
    {
        return $this->container['buyer_tax_info'];
    }

    /**
     * Sets buyer_tax_info
     *
     * @param \SellingPartnerApi\Model\ShipmentInvoicing\BuyerTaxInfo|null $buyer_tax_info buyer_tax_info
     *
     * @return self
     */
    public function setBuyerTaxInfo($buyer_tax_info)
    {
        $this->container['buyer_tax_info'] = $buyer_tax_info;

        return $this;
    }
    /**
     * Gets marketplace_tax_info
     *
     * @return \SellingPartnerApi\Model\ShipmentInvoicing\MarketplaceTaxInfo|null
     */
    public function getMarketplaceTaxInfo()
    {
        return $this->container['marketplace_tax_info'];
    }

    /**
     * Sets marketplace_tax_info
     *
     * @param \SellingPartnerApi\Model\ShipmentInvoicing\MarketplaceTaxInfo|null $marketplace_tax_info marketplace_tax_info
     *
     * @return self
     */
    public function setMarketplaceTaxInfo($marketplace_tax_info)
    {
        $this->container['marketplace_tax_info'] = $marketplace_tax_info;

        return $this;
    }
    /**
     * Gets seller_display_name
     *
     * @return string|null
     */
    public function getSellerDisplayName()
    {
        return $this->container['seller_display_name'];
    }

    /**
     * Sets seller_display_name
     *
     * @param string|null $seller_display_name The seller's friendly name registered in the marketplace.
     *
     * @return self
     */
    public function setSellerDisplayName($seller_display_name)
    {
        $this->container['seller_display_name'] = $seller_display_name;

        return $this;
    }
    /**
     * Gets shipment_items
     *
     * @return \SellingPartnerApi\Model\ShipmentInvoicing\ShipmentItem[]|null
     */
    public function getShipmentItems()
    {
        return $this->container['shipment_items'];
    }

    /**
     * Sets shipment_items
     *
     * @param \SellingPartnerApi\Model\ShipmentInvoicing\ShipmentItem[]|null $shipment_items A list of shipment items.
     *
     * @return self
     */
    public function setShipmentItems($shipment_items)
    {
        $this->container['shipment_items'] = $shipment_items;

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


