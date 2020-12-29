# # SalesSummary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for the sales summary | [optional] [readonly] 
**created_time** | [**\DateTime**](\DateTime.md) | Time at which the sales summary was created | [optional] [readonly] 
**sales_closing_time** | [**\DateTime**](\DateTime.md) | Time at which the sales summary was closed | [optional] [readonly] 
**currency** | **string** | Three-letter ISO currency code representing the sales summary currency. | [optional] 
**amount** | **double** | Represents the total sales summary amount. | [optional] [readonly] 
**payout_id** | **string** | Payout identifier | [optional] [readonly] 
**paid** | **bool** | If true, indicates that this sales summary has been paid. | [optional] 
**payer_id** | **string** | The ID of payer. | [optional] 
**payer_name** | **string** | The name of the payer | [optional] 
**payee_id** | **string** | The ID of the payee. | [optional] 
**payee_name** | **string** | The name of the payee. | [optional] 
**live_mode** | **bool** | Has the value true if the object exists in live mode or the value false if the object exists in test mode. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


