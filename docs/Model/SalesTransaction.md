# # SalesTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for the sales transaction | [optional] 
**created_time** | [**\DateTime**](\DateTime.md) | Time at which the sales transaction was created | [optional] 
**sale_time** | [**\DateTime**](\DateTime.md) | Time at which the sales occurred. | [optional] 
**sales_summary_id** | **string** | Unique identifier of a Digital River sales summary, if any. | [optional] 
**currency** | **string** | Three-letter ISO currency code representing the sale currency. | [optional] 
**amount** | **double** | The sales transaction amount. | [optional] 
**type** | **string** | Sales transaction type. | [optional] 
**order_id** | **string** | Order identifier. | [optional] 
**sku_id** | **string** | SKU identifier. | [optional] 
**quantity** | **double** | The quantity of the SKU. | [optional] 
**payout_amounts** | [**\DigitalRiver\ApiSdk\Model\PayoutAmounts**](PayoutAmounts.md) |  | [optional] 
**payer_id** | **string** | The ID of payer. | [optional] 
**payer_name** | **string** | The name of the payer | [optional] 
**payee_id** | **string** | The ID of the payee. | [optional] 
**payee_name** | **string** | The name of the payee. | [optional] 
**live_mode** | **bool** | Has the value true if the object exists in live mode or the value false if the object exists in test mode. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


