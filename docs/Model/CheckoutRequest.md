# # CheckoutRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_id** | **string** | The identifier of the Customer associated with the Checkout. | [optional] 
**source_id** | **string** | The unique identifier of a Source. | [optional] 
**currency** | **string** | A three-letter ISO 4217 currency code. | 
**email** | **string** | The customer&#39;s email address. | [optional] 
**locale** | **string** | A designator that combines the two-letter ISO 639-1 language code with the ISO 3166-1 alpha-2 country code. | [optional] 
**invoice_attribute_id** | **string** | The unique identfier of the invoice attribute. | [optional] 
**application_id** | **string** | An arbitrary string identifier that can be used to track the application type. | [optional] 
**browser_ip** | **string** | The IP address of the browser used by the customer when placing the order. | [optional] 
**tax_identifiers** | [**\DigitalRiver\ApiSdk\Model\CheckoutTaxIdentifierRequest[]**](CheckoutTaxIdentifierRequest.md) |  | [optional] 
**ship_from** | [**\DigitalRiver\ApiSdk\Model\ShipFrom**](ShipFrom.md) |  | [optional] 
**ship_to** | [**\DigitalRiver\ApiSdk\Model\Shipping**](Shipping.md) |  | [optional] 
**bill_to** | [**\DigitalRiver\ApiSdk\Model\Billing**](Billing.md) |  | [optional] 
**organization** | [**\DigitalRiver\ApiSdk\Model\Organization**](Organization.md) |  | [optional] 
**shipping_choice** | [**\DigitalRiver\ApiSdk\Model\ShippingRequest**](ShippingRequest.md) |  | [optional] 
**discount** | [**\DigitalRiver\ApiSdk\Model\Discount**](Discount.md) |  | [optional] 
**items** | [**\DigitalRiver\ApiSdk\Model\SkuRequestItem[]**](SkuRequestItem.md) |  | 
**shipping_discount** | [**\DigitalRiver\ApiSdk\Model\Discount**](Discount.md) |  | [optional] 
**tax_inclusive** | **bool** | If &lt;code&gt;true&lt;/code&gt;, indicates that the prices supplied are tax inclusive. | [optional] 
**charge_type** | [**\DigitalRiver\ApiSdk\Model\ChargeType**](ChargeType.md) |  | [optional] 
**customer_type** | [**\DigitalRiver\ApiSdk\Model\CustomerType**](CustomerType.md) |  | [optional] 
**metadata** | [**map[string,AnyType]**](AnyType.md) | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional] 
**purchase_location** | [**\DigitalRiver\ApiSdk\Model\PurchaseLocation**](PurchaseLocation.md) |  | [optional] 
**upstream_id** | **string** | The upstream identifier. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


