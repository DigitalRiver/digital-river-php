# # ReturnResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the return. | [optional] [readonly] 
**created_time** | [**\DateTime**](\DateTime.md) | The time at which the return was created. | [optional] [readonly] 
**updated_time** | [**\DateTime**](\DateTime.md) | The time at which the return was updated. | [optional] [readonly] 
**order_id** | **string** | The unique identifier for the order | [optional] [readonly] 
**currency** | **string** | A three-letter ISO currency code. | [optional] 
**items** | [**\DigitalRiver\ApiSdk\Model\ReturnItem[]**](ReturnItem.md) |  | [optional] 
**reason** | **string** | The reason for the return. | [optional] 
**failure_reason** | **string** | An enumeration indicating the reason for the return failure, if known. | [optional] 
**state** | **string** | An enumeration indicating the state of the return. | [optional] 
**location** | [**\DigitalRiver\ApiSdk\Model\Location**](Location.md) |  | [optional] 
**live_mode** | **bool** | Has the value &lt;code&gt;true&lt;/code&gt; if the object exists in live mode or the value &lt;code&gt;false&lt;/code&gt; if the object exists in test mode. | [optional] 
**metadata** | [**map[string,AnyType]**](AnyType.md) | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional] 
**refund_ids** | **string[]** |  | [optional] [readonly] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


