# # Charge

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the charge. | [optional] [readonly] 
**created_time** | [**\DateTime**](\DateTime.md) | The time when the charge was created. | [optional] [readonly] 
**currency** | **string** | A three-letter ISO 4217 currency code. | [optional] 
**amount** | **double** | An amount representing how much is to be to charged. | [optional] 
**state** | **string** | The state of the charge. | [optional] 
**order_id** | **string** | The identifier of the associated order. | [optional] 
**source_id** | **string** | The identifier of the source. | [optional] 
**failure_code** | **string** | Error code identifying reason for charge failure. | [optional] 
**failure_message** | **string** | Error message describing reason for charge failure. | [optional] 
**payment_session_id** | **string** | Tracks the process of collecting a payment. | [optional] 
**cancels** | [**\DigitalRiver\ApiSdk\Model\Cancel[]**](Cancel.md) |  | [optional] 
**captures** | [**\DigitalRiver\ApiSdk\Model\Capture[]**](Capture.md) |  | [optional] 
**captured** | **bool** | Indicates if the charge has been captured. | [optional] 
**refunds** | [**\DigitalRiver\ApiSdk\Model\Refund[]**](Refund.md) |  | [optional] 
**refunded** | **bool** | Indicates if the charge has been refunded. | [optional] 
**type** | **string** | The type of charge. | [optional] 
**live_mode** | **bool** | Has the value &lt;code&gt;true&lt;/code&gt; if the object exists in live mode and the value &lt;code&gt;false&lt;/code&gt; if the object exists in test mode. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


