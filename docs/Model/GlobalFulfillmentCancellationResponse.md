# # GlobalFulfillmentCancellationResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for the cancellation | [optional] [readonly] 
**created_time** | [**\DateTime**](\DateTime.md) | Time at which the cancellation was created | [optional] [readonly] 
**fulfillment_order_id** | **string** | Unique identifier for the fulfillment order | [optional] [readonly] 
**upstream_id** | **string** | Upstream identifier of the cancellation | [optional] [readonly] 
**items** | [**\DigitalRiver\ApiSdk\Model\GlobalFulfillmentCancellationItemResponse[]**](GlobalFulfillmentCancellationItemResponse.md) |  | [optional] 
**reason** | **string** | String indicating the reason for the cancellation. | [optional] 
**state** | **string** | Enumeration indicating the state of the cancellation. | [optional] 
**livemode** | **bool** | Has the value true if the object exists in live mode or the value false if the object exists in test mode. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


