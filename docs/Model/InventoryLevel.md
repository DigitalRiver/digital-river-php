# # InventoryLevel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**location_id** | **string** | Unique identifier of a location. | [optional] 
**inventory_item_id** | **string** | The identifier of the inventory item that the inventory level belongs to. | [optional] 
**available** | **bool** | If true, the available quantity is greater than zero. | [optional] [readonly] 
**available_quantity** | **double** | The quantity of inventory items available for sale. | [optional] [readonly] 
**available_time** | [**\DateTime**](\DateTime.md) | Time when the inventory items will be available again. | [optional] [readonly] 
**live_mode** | **bool** | Has the value true if the object exists in live mode or the value false if the object exists in test mode. | [optional] 
**updated_time** | [**\DateTime**](\DateTime.md) | Time when the inventory level was last updated. | [optional] [readonly] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


