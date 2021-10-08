# # RefundRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | The unique identifier of the order. You are required to provide this parameter or &lt;code&gt;invoiceId&lt;/code&gt;. | [optional] 
**invoice_id** | **string** | The unique identifier of the invoice. You are required to provide this parameter or &lt;code&gt;orderId&lt;/code&gt;. | [optional] 
**currency** | **string** | Three-letter ISO currency code. | 
**amount** | **double** | The amount to refund. You are required to provide this value, &lt;code&gt;percent&lt;/code&gt;, or &lt;code&gt;items&lt;/code&gt;. | [optional] 
**percent** | **double** | The percent to refund. You are required to provide this value, &lt;code&gt;amount&lt;/code&gt;, or &lt;code&gt;items&lt;/code&gt;. | [optional] 
**type** | **string** | The type of the refund. | [optional] 
**items** | [**\DigitalRiver\ApiSdk\Model\RefundItemRequest[]**](RefundItemRequest.md) | The items to refund. | [optional] 
**reason** | **string** | The reason for the refund. | [optional] 
**metadata** | [**map[string,AnyType]**](AnyType.md) | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


