# # UpdatePlanRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Describes the subscription products or services added to this plan. | [optional] 
**reminder_offset_days** | **int** | The number of days before the opening of the invoice that the reminder event is triggered. | [optional] 
**billing_offset_days** | **int** | The number of days before the due date that billing is initiated. | 
**collection_period_days** | **int** | Represents the number of days that Digital River attempts to collect payment. | 
**state** | **string** | The valid states of a plan. Setting a plan to &lt;code&gt;deactivated&lt;/code&gt; causes all connected subscriptions to end with the current period. | [optional] 
**metadata** | [**map[string,AnyType]**](AnyType.md) | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


