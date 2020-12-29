# # ReservationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique identifier for the reservation. Usually an order identifier. | [optional] 
**items** | [**\DigitalRiver\ApiSdk\Model\InventoryItem[]**](InventoryItem.md) |  | 
**ship_to** | [**\DigitalRiver\ApiSdk\Model\Shipping**](Shipping.md) |  | 
**shipping_choice** | [**\DigitalRiver\ApiSdk\Model\ShippingChoice**](ShippingChoice.md) |  | 
**expires_in_seconds** | **int** | A positive integer that specifies the number of seconds before the reservation expires and is deleted. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


