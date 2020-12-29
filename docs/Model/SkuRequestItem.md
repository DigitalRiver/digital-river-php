# # SkuRequestItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku_id** | **string** | The identifier of the [stock keeping unit (SKU)](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/skus). | 
**subscription_info** | [**\DigitalRiver\ApiSdk\Model\SubscriptionInfo**](SubscriptionInfo.md) |  | [optional] 
**price** | **double** | The [price of an item](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/shared-properties/describing-the-items/price-of-an-item#defining-a-price). | [optional] 
**aggregate_price** | **double** | The [total price of multiple items](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/shared-properties/describing-the-items/price-of-an-item#defining-an-aggregate-price). | [optional] 
**quantity** | **int** | The number of items. | [optional] 
**discount** | [**\DigitalRiver\ApiSdk\Model\SkuDiscount**](SkuDiscount.md) |  | [optional] 
**ship_from** | [**\DigitalRiver\ApiSdk\Model\ShipFrom**](ShipFrom.md) |  | [optional] 
**metadata** | [**map[string,AnyType]**](AnyType.md) | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


