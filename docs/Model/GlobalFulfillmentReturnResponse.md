# # GlobalFulfillmentReturnResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for the return | [optional] [readonly] 
**created_time** | [**\DateTime**](\DateTime.md) | Time at which the return was created | [optional] [readonly] 
**fulfillment_order_id** | **string** | Unique identifier for the fulfillment order | [optional] [readonly] 
**upstream_id** | **string** | Upstream identifier of the return | [optional] [readonly] 
**items** | [**\DigitalRiver\ApiSdk\Model\GlobalFulfillmentReturnItemResponse[]**](GlobalFulfillmentReturnItemResponse.md) |  | [optional] 
**reason** | **string** | String indicating the reason for the return. | [optional] 
**state** | **string** | Enumeration indicating the state of the return. | [optional] 
**type** | **string** | Enumeration indicating the type of return. | [optional] 
**location** | [**\DigitalRiver\ApiSdk\Model\Location**](Location.md) |  | [optional] 
**livemode** | **bool** | Has the value true if the object exists in live mode or the value false if the object exists in test mode. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


