# # RefundRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | The unique identifier of the order. You are required to provide this parameter or &lt;code&gt;invoiceId&lt;/code&gt;. | [optional] 
**invoice_id** | **string** | The unique identifier of the invoice. You are required to provide this parameter or &lt;code&gt;orderId&lt;/code&gt;. | [optional] 
**currency** | **string** | Three-letter ISO currency code. | 
**amount** | **double** | One of amount, percent or items is required. | [optional] 
**percent** | **double** | One of amount, percent or items is required. | [optional] 
**type** | **string** | The type of the item. | [optional] 
**items** | [**\DigitalRiver\ApiSdk\Model\RefundItemRequest[]**](RefundItemRequest.md) | One of amount, percent or items is required. | [optional] 
**reason** | **string** | String indicating the reason for the refund. | [optional] 
**metadata** | [**map[string,AnyType]**](AnyType.md) | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


