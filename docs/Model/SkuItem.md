# # SkuItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The identifier of the item. | [optional] 
**sku_id** | **string** | The identifier of the [stock keeping unit (SKU)](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/skus). | [optional] 
**product_details** | [**\DigitalRiver\ApiSdk\Model\ProductDetails**](ProductDetails.md) |  | [optional] 
**subscription_info** | [**\DigitalRiver\ApiSdk\Model\SubscriptionInfo**](SubscriptionInfo.md) |  | [optional] 
**fees** | [**\DigitalRiver\ApiSdk\Model\Fees**](Fees.md) |  | [optional] 
**quantity** | **int** | The number of items. | [optional] 
**amount** | **double** | The cost of the items. | [optional] 
**seller_tax_identifier** | **string** | The tax identifier of the seller. | [optional] 
**tax** | [**\DigitalRiver\ApiSdk\Model\Tax**](Tax.md) |  | [optional] 
**importer_tax** | [**\DigitalRiver\ApiSdk\Model\ImporterTax**](ImporterTax.md) |  | [optional] 
**duties** | [**\DigitalRiver\ApiSdk\Model\Duties**](Duties.md) |  | [optional] 
**discount** | [**\DigitalRiver\ApiSdk\Model\SkuDiscount**](SkuDiscount.md) |  | [optional] 
**ship_from** | [**\DigitalRiver\ApiSdk\Model\ShipFrom**](ShipFrom.md) |  | [optional] 
**shipping** | [**\DigitalRiver\ApiSdk\Model\ItemShipping**](ItemShipping.md) |  | [optional] 
**metadata** | [**map[string,AnyType]**](AnyType.md) | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


