# # InvoiceItemRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku_id** | **string** | The identifier of the stock keeping unit (SKU). | 
**product_details** | [**\DigitalRiver\ApiSdk\Model\ProductDetails**](ProductDetails.md) |  | [optional] 
**subscription_info** | [**\DigitalRiver\ApiSdk\Model\SubscriptionInfo**](SubscriptionInfo.md) |  | [optional] 
**price** | **double** | The price of an item. You are required to provide this parameter or &lt;code&gt;aggregatePrice&lt;/code&gt;. | [optional] 
**aggregate_price** | **double** | The total price of multiple items. You are required to provide this parameter or &lt;code&gt;price&lt;/code&gt;. | [optional] 
**quantity** | **int** | The number of items. | [optional] 
**discount** | [**\DigitalRiver\ApiSdk\Model\Discount**](Discount.md) |  | [optional] 
**metadata** | [**map[string,AnyType]**](AnyType.md) | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


