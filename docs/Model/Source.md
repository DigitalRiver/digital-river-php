# # Source

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for the source. | [optional] [readonly] 
**client_secret** | **string** | Used for client-side retrieval using a public key. | [optional] 
**created_time** | [**\DateTime**](\DateTime.md) | Time when the source was created. | [optional] [readonly] 
**type** | **string** | The payment type of the source. The payment type will correspond to another element in the source response that contains detailed information specific to the type. For example, a type of creditCard indicates that there is an object in the response named creditCard. | [optional] 
**currency** | **string** | Three-letter ISO currency code. | [optional] 
**amount** | **double** | Amount associated with the source. Once ready, the source will be charged this amount. Required for single_use sources. | [optional] 
**reusable** | **bool** | If true, you can reuse this source, if false, only once. | [optional] 
**owner** | [**\DigitalRiver\ApiSdk\Model\Owner**](Owner.md) |  | [optional] 
**credit_card** | [**\DigitalRiver\ApiSdk\Model\CreditCard**](CreditCard.md) |  | [optional] 
**google_pay** | [**\DigitalRiver\ApiSdk\Model\GooglePay**](GooglePay.md) |  | [optional] 
**pay_pal** | [**\DigitalRiver\ApiSdk\Model\PayPal**](PayPal.md) |  | [optional] 
**pay_pal_billing** | [**\DigitalRiver\ApiSdk\Model\PayPal**](PayPal.md) |  | [optional] 
**pay_pal_credit** | [**\DigitalRiver\ApiSdk\Model\PayPal**](PayPal.md) |  | [optional] 
**direct_debit** | [**\DigitalRiver\ApiSdk\Model\DirectDebit**](DirectDebit.md) |  | [optional] 
**wire_transfer** | [**\DigitalRiver\ApiSdk\Model\WireTransfer**](WireTransfer.md) |  | [optional] 
**pay_co** | [**\DigitalRiver\ApiSdk\Model\PaycoResponse**](PaycoResponse.md) |  | [optional] 
**alipay** | [**object**](.md) |  | [optional] 
**apple_pay** | [**object**](.md) |  | [optional] 
**b_pay** | [**\DigitalRiver\ApiSdk\Model\BPay**](BPay.md) |  | [optional] 
**online_banking** | [**\DigitalRiver\ApiSdk\Model\InternetBankPayment**](InternetBankPayment.md) |  | [optional] 
**cod_japan** | [**object**](.md) |  | [optional] 
**klarna_credit** | [**\DigitalRiver\ApiSdk\Model\Klarna**](Klarna.md) |  | [optional] 
**klarna_credit_recurring** | [**\DigitalRiver\ApiSdk\Model\KlarnaRecurring**](KlarnaRecurring.md) |  | [optional] 
**konbini** | [**\DigitalRiver\ApiSdk\Model\Konbini**](Konbini.md) |  | [optional] 
**bank_transfer** | [**object**](.md) |  | [optional] 
**msts** | [**object**](.md) |  | [optional] 
**bancontact** | [**object**](.md) |  | [optional] 
**flow** | **string** | The authentication flow of the source. | [optional] 
**state** | **string** | The status of the source, one of pending_funds, pending_redirect, requires_action, cancelled, chargeable, consumed or failed. You can only use chargeable sources to create a charge. | [optional] 
**metadata** | [**map[string,AnyType]**](AnyType.md) | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional] 
**customer_id** | **string** | Unique identifier of a customer. | [optional] [readonly] 
**payment_session_id** | **string** | Tracks the process of collecting a payment. | [optional] 
**live_mode** | **bool** | Has the value true if the object exists in live mode or the value false if the object exists in test mode. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


