# # CreateReturnResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for the return | [optional] [readonly] 
**created_time** | [**\DateTime**](\DateTime.md) | Time at which the return was created | [optional] [readonly] 
**order_id** | **string** | Unique identifier for the order | [optional] [readonly] 
**currency** | **string** | Three-letter ISO currency code. | [optional] 
**items** | [**\DigitalRiver\ApiSdk\Model\ReturnItem[]**](ReturnItem.md) |  | [optional] 
**reason** | **string** | String indicating the reason for the return. | [optional] 
**state** | **string** | Enumeration indicating the state of the return. | [optional] 
**location** | [**\DigitalRiver\ApiSdk\Model\Location**](Location.md) |  | [optional] 
**livemode** | **bool** | Has the value true if the object exists in live mode or the value false if the object exists in test mode. | [optional] 
**metadata** | [**map[string,AnyType]**](AnyType.md) | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional] 
**refund_ids** | **string[]** |  | [optional] [readonly] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


