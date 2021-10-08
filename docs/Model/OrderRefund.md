# # OrderRefund

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the refund. | [optional] [readonly] 
**created_time** | [**\DateTime**](\DateTime.md) | Time at which the refund was created. | [optional] [readonly] 
**order_id** | **string** | The unique identifier of the order. | [optional] [readonly] 
**invoice_id** | **string** | The unique identifier of the invoice. | [optional] [readonly] 
**currency** | **string** | Three-letter ISO currency code. | [optional] 
**type** | **string** | The type of refund. | [optional] 
**amount** | **double** | The requested refund amount. | [optional] [readonly] 
**refunded_amount** | **double** | The total amount refunded. | [optional] [readonly] 
**items** | [**\DigitalRiver\ApiSdk\Model\RefundItem[]**](RefundItem.md) |  | [optional] 
**reason** | **string** | The reason for the refund. | [optional] 
**failure_reason** | **string** | The reason for the refund failure, if known. | [optional] 
**state** | **string** | The state of the refund. | [optional] 
**token_information** | [**\DigitalRiver\ApiSdk\Model\TokenInformation**](TokenInformation.md) |  | [optional] 
**expires_time** | [**\DateTime**](\DateTime.md) | Time at which the information token expires. | [optional] [readonly] 
**live_mode** | **bool** | Has the value true if the object exists in live mode or the value false if the object exists in test mode. | [optional] 
**charges** | [**\DigitalRiver\ApiSdk\Model\Charges[]**](Charges.md) |  | [optional] 
**metadata** | [**map[string,AnyType]**](AnyType.md) | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


