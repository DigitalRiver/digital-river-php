# # Invoice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the invoice. | [optional] [readonly] 
**created_time** | [**\DateTime**](\DateTime.md) | The time at which the invoice was created. | [optional] [readonly] 
**updated_time** | [**\DateTime**](\DateTime.md) | The time at which the invoice was last updated. | [optional] [readonly] 
**customer_id** | **string** | The identifier of the invoiced customer. | [optional] 
**email** | **string** | The email address of the invoiced customer. | [optional] 
**currency** | **string** | A three-letter ISO 4217 currency code. | [optional] 
**description** | **string** | An arbitrary string attached to the invoice. | [optional] 
**locale** | **string** | A designator that combines the two-letter ISO 639-1 language code with the ISO 3166-1 alpha-2 country code. | [optional] 
**discount** | [**\DigitalRiver\ApiSdk\Model\Discount**](Discount.md) |  | [optional] 
**customer_type** | [**\DigitalRiver\ApiSdk\Model\CustomerType**](CustomerType.md) |  | [optional] 
**selling_entity** | [**\DigitalRiver\ApiSdk\Model\SellingEntity**](SellingEntity.md) |  | [optional] 
**tax_identifiers** | [**\DigitalRiver\ApiSdk\Model\TaxIdentifier[]**](TaxIdentifier.md) |  | [optional] 
**subtotal** | **double** | Represents the total amount of the order exclusive of tax. | [optional] [readonly] 
**total_tax** | **double** | Represents the total tax amount. | [optional] [readonly] 
**total_fees** | **double** | Represents the total fee amount. | [optional] [readonly] 
**total_duty** | **double** | Represents the total duty amount. | [optional] [readonly] 
**total_importer_tax** | **double** | Represents the total tax amount from the importer of record. | [optional] 
**importer_of_record_tax** | **bool** | If &lt;code&gt;true&lt;/code&gt;, indicates that the tax amount is paid by the importer of record. | [optional] [readonly] 
**total_discount** | **double** | Represents the total discount amount. | [optional] [readonly] 
**total_shipping** | **double** | Represents the total shipping amount. | [optional] [readonly] 
**total_amount** | **double** | Represents the total charge amount. | [optional] [readonly] 
**collection_period_days** | **int** | The number of days that Digital River attempts to collect payment if &lt;code&gt;billingOptimization&lt;/code&gt; is set to &lt;code&gt;true&lt;/code&gt;. The default is 30 days. | [optional] 
**items** | [**\DigitalRiver\ApiSdk\Model\InvoiceItem[]**](InvoiceItem.md) |  | [optional] 
**ship_to** | [**\DigitalRiver\ApiSdk\Model\Shipping**](Shipping.md) |  | [optional] 
**bill_to** | [**\DigitalRiver\ApiSdk\Model\Billing**](Billing.md) |  | [optional] 
**state** | **string** | The current state of the invoice. | [optional] 
**state_transitions** | [**\DigitalRiver\ApiSdk\Model\StateTransitions**](StateTransitions.md) |  | [optional] 
**payment** | [**\DigitalRiver\ApiSdk\Model\Payments**](Payments.md) |  | [optional] 
**attempt_count** | **int** | The number of times Digital River has attempted to collect payment. | [optional] 
**metadata** | [**map[string,AnyType]**](AnyType.md) | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional] 
**charge_type** | [**\DigitalRiver\ApiSdk\Model\ChargeType**](ChargeType.md) |  | [optional] 
**application_id** | **string** | The identifier of the client application that created the checkout. | [optional] 
**live_mode** | **bool** | Has the value &lt;code&gt;true&lt;/code&gt; if the object exists in live mode or the value &lt;code&gt;false&lt;/code&gt; if the object exists in test mode. | [optional] 
**order_id** | **string** | The unique identifier of the order for this invoice. | [optional] [readonly] 
**upstream_id** | **string** | The upstream identifier. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


