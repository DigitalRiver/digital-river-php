# # GlobalFulfillmentReturnItemResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fulfillment_order_item_id** | **string** | The identifier of the fulfillment order item. | [optional] [readonly] 
**inventory_item_id** | **string** | The identifier of the inventory item. | [optional] [readonly] 
**quantity** | **int** | The quantity specified in the fulfillment return request. | [optional] [readonly] 
**quantity_accepted** | **int** | The quantity accepted for return by the fulfiller. | [optional] [readonly] 
**state** | **string** | The current state of the return item. | [optional] [readonly] 
**location** | [**\DigitalRiver\ApiSdk\Model\Location**](Location.md) |  | [optional] 
**unit_attributes** | [**\DigitalRiver\ApiSdk\Model\UnitAttributes[]**](UnitAttributes.md) |  | [optional] 
**unit_attributes_accepted** | [**\DigitalRiver\ApiSdk\Model\UnitAttributes[]**](UnitAttributes.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


