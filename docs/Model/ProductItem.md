# # ProductItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**inventory_item_id** | **string** | The inventory item identifier. | [optional] 
**quantity** | **int** |  | [optional] 
**available_quantity** | **double** | The quantity of inventory items available for sale. | [optional] [readonly] 
**available_time** | [**\DateTime**](\DateTime.md) | Time when the inventory items will be available again. | [optional] [readonly] 
**ship_from** | [**\DigitalRiver\ApiSdk\Model\ShipFrom**](ShipFrom.md) |  | [optional] 
**shipping** | **double** | Shipping amount. | [optional] 
**handling** | **double** | Handling amount. | [optional] 
**fees** | **double** | Fee amount. | [optional] 
**total** | **double** | Total shipping and handling amount. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


