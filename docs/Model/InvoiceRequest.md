# # InvoiceRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_id** | **string** | The identifier of the invoiced customer. | 
**email** | **string** | The email address of the invoiced customer. | [optional] 
**source_id** | **string** | The unique identifier of a Source. | [optional] 
**currency** | **string** | A three-letter ISO 4217 currency code. | 
**state** | **string** | The state of the invoice. | [optional] 
**charge_type** | [**\DigitalRiver\ApiSdk\Model\ChargeType**](ChargeType.md) |  | [optional] 
**description** | **string** | An arbitrary string attached to the invoice. | [optional] 
**locale** | **string** | A [designator](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/shared-properties/designating-a-locale) that combines the two-letter ISO 639-1 language code with the ISO 3166-1 alpha-2 country code. | [optional] 
**customer_type** | [**\DigitalRiver\ApiSdk\Model\CustomerType**](CustomerType.md) |  | [optional] 
**ship_to** | [**\DigitalRiver\ApiSdk\Model\Shipping**](Shipping.md) |  | [optional] 
**discount** | [**\DigitalRiver\ApiSdk\Model\Discount**](Discount.md) |  | [optional] 
**collection_period_days** | **int** | The number of days that Digital River attempts to collect payment if &lt;code&gt;billingOptimization&lt;/code&gt; is set to &lt;code&gt;true&lt;/code&gt;. The default is 30 days. | [optional] 
**billing_optimization** | **bool** | Indicates whether billing is optimized. The default is &lt;code&gt;true&lt;/code&gt;. | [optional] 
**items** | [**\DigitalRiver\ApiSdk\Model\InvoiceItemRequest[]**](InvoiceItemRequest.md) |  | 
**tax_inclusive** | **bool** | If &lt;code&gt;true&lt;/code&gt;, indicates that the prices supplied are tax inclusive. | [optional] 
**metadata** | [**map[string,AnyType]**](AnyType.md) | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional] 
**upstream_id** | **string** | The invoice identifier if it is different from the Digital River invoice identifier. | [optional] 
**application_id** | **string** | The identifier of the client application that created the checkout. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


