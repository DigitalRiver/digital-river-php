# # GlobalFulfillmentCancellationResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the fulfillment cancellation | [optional] [readonly] 
**created_time** | [**\DateTime**](\DateTime.md) | The time at which the fulfillment cancellation was created. | [optional] [readonly] 
**fulfillment_order_id** | **string** | The unique identifier of the fulfillment order associated with the fulfillment cancellation. | [optional] [readonly] 
**upstream_id** | **string** | The unique identifier of the upstream order. | [optional] [readonly] 
**items** | [**\DigitalRiver\ApiSdk\Model\GlobalFulfillmentCancellationItemResponse[]**](GlobalFulfillmentCancellationItemResponse.md) |  | [optional] 
**reason** | **string** | The reason for the cancellation. | [optional] 
**state** | **string** | An enumeration indicating the state of the fulfillment cancellation. | [optional] 
**livemode** | **bool** | Has the value true if the object exists in live mode or the value false if the object exists in test mode. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


