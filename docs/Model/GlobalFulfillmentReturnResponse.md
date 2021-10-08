# # GlobalFulfillmentReturnResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier for the fulfillment return. | [optional] [readonly] 
**created_time** | [**\DateTime**](\DateTime.md) | The time when the fulfillment return was created. | [optional] [readonly] 
**fulfillment_order_id** | **string** | The unique identifier of the fulfillment order associated with the fulfillment return. | [optional] [readonly] 
**upstream_id** | **string** | The unique identifier of the upstream order. | [optional] [readonly] 
**items** | [**\DigitalRiver\ApiSdk\Model\GlobalFulfillmentReturnItemResponse[]**](GlobalFulfillmentReturnItemResponse.md) |  | [optional] 
**reason** | **string** | The reason for the return. | [optional] 
**state** | **string** | An enumeration indicating the state of the fulfillment return. | [optional] 
**type** | **string** | An enumeration indicating the type of the fulfillment return. | [optional] 
**location** | [**\DigitalRiver\ApiSdk\Model\Location**](Location.md) |  | [optional] 
**livemode** | **bool** | Has the value true if the object exists in live mode or the value false if the object exists in test mode. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


