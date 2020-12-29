# # Reservation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier for the reservation. | [optional] 
**created_time** | [**\DateTime**](\DateTime.md) | The time when the reservation was created. | [optional] [readonly] 
**ship_to** | [**\DigitalRiver\ApiSdk\Model\Shipping**](Shipping.md) |  | [optional] 
**shipping_choice** | [**\DigitalRiver\ApiSdk\Model\ShippingChoice**](ShippingChoice.md) |  | [optional] 
**items** | [**\DigitalRiver\ApiSdk\Model\InventoryItem[]**](InventoryItem.md) |  | [optional] 
**expires_in_seconds** | **int** | A positive integer that specifies the number of seconds before the reservation expires and is deleted. | [optional] 
**live_mode** | **bool** | Has the value true if the object exists in live mode or the value false if the object exists in test mode. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


