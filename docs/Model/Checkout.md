# # Checkout

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier for the checkout | [optional] [readonly] 
**created_time** | [**\DateTime**](\DateTime.md) | Time at which the checkout was created. | [optional] [readonly] 
**updated_time** | [**\DateTime**](\DateTime.md) | Time at which the checkout was last updated. | [optional] [readonly] 
**customer_id** | **string** | The identifier of the Customer associated with the Checkout. | [optional] 
**source_id** | **string** | The unique identifier of a Source. | [optional] 
**sources** | [**\DigitalRiver\ApiSdk\Model\Source[]**](Source.md) |  | [optional] 
**currency** | **string** | A three-letter ISO currency code. | [optional] 
**email** | **string** | The customer&#39;s email address. | [optional] 
**locale** | **string** | A designator that combines the two-letter ISO 639-1 language code with the ISO 3166-1 alpha-2 country code. | [optional] 
**browser_ip** | **string** | The IP address of the browser used by the customer when placing the order. | [optional] 
**application_id** | **string** | An arbitrary string identifier that can be used to track the application type. | [optional] [readonly] 
**credit_amount** | **float** | Represents the total amount of credit you are extending to the customer. | [optional] 
**ship_from** | [**\DigitalRiver\ApiSdk\Model\ShipFrom**](ShipFrom.md) |  | [optional] 
**ship_to** | [**\DigitalRiver\ApiSdk\Model\Shipping**](Shipping.md) |  | [optional] 
**bill_to** | [**\DigitalRiver\ApiSdk\Model\Billing**](Billing.md) |  | [optional] 
**subtotal** | **double** | Represents the total order amount exclusive of tax. | [optional] [readonly] 
**total_tax** | **double** | Represents the total tax amount. | [optional] [readonly] 
**total_importer_tax** | **double** | Represents the total tax amount from the importer of record. | [optional] 
**importer_of_record_tax** | **bool** | If &lt;code&gt;true&lt;/code&gt;, indicates that the tax amount is paid by the importer of record. | [optional] [readonly] 
**total_fees** | **double** | Represents the total fee amount. | [optional] [readonly] 
**total_duty** | **double** | Represents the total duty amount. | [optional] [readonly] 
**total_discount** | **double** | Represents the total discount amount. | [optional] [readonly] 
**total_shipping** | **double** | Represents the total shipping amount. | [optional] [readonly] 
**total_amount** | **double** | Represents the total charge amount. | [optional] [readonly] 
**discount** | [**\DigitalRiver\ApiSdk\Model\Discount**](Discount.md) |  | [optional] 
**charge_type** | [**\DigitalRiver\ApiSdk\Model\ChargeType**](ChargeType.md) |  | [optional] 
**purchase_location** | [**\DigitalRiver\ApiSdk\Model\PurchaseLocation**](PurchaseLocation.md) |  | [optional] 
**customer_type** | [**\DigitalRiver\ApiSdk\Model\CustomerType**](CustomerType.md) |  | [optional] 
**selling_entity** | [**\DigitalRiver\ApiSdk\Model\SellingEntity**](SellingEntity.md) |  | [optional] 
**items** | [**\DigitalRiver\ApiSdk\Model\SkuItem[]**](SkuItem.md) |  | [optional] 
**shipping_choice** | [**\DigitalRiver\ApiSdk\Model\ShippingChoice**](ShippingChoice.md) |  | [optional] 
**payment_session_id** | **string** | Tracks the process of collecting a payment. | [optional] 
**live_mode** | **bool** | Has the value &lt;code&gt;true&lt;/code&gt; if the object exists in live mode or the value &lt;code&gt;false&lt;/code&gt; if the object exists in test mode. | [optional] 
**metadata** | [**map[string,AnyType]**](AnyType.md) | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional] 
**upstream_id** | **string** | The client checkout identifier if it is different from the Digital River checkout identifier. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


