# # ReturnResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the return. | [optional] [readonly] 
**created_time** | [**\DateTime**](\DateTime.md) | The time at which the return was created. | [optional] [readonly] 
**order_id** | **string** | The unique identifier of the order associated with the return. | [optional] 
**rma_number** | **string** | The return merchandise authorization number. | [optional] 
**reason** | **string** | The reason for the return. | [optional] 
**type** | **string** |  | [optional] 
**return_to** | [**\DigitalRiver\ApiSdk\Model\Shipping**](Shipping.md) |  | [optional] 
**items** | [**\DigitalRiver\ApiSdk\Model\ReturnItem[]**](ReturnItem.md) |  | [optional] 
**live_mode** | **bool** | Has the value &lt;code&gt;true&lt;/code&gt; if the object exists in live mode or the value &lt;code&gt;false&lt;/code&gt; if the object exists in test mode. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


