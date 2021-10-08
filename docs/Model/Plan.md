# # Plan

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**state_transitions** | [**\DigitalRiver\ApiSdk\Model\StateTransitions**](StateTransitions.md) |  | [optional] 
**updated_time** | [**\DateTime**](\DateTime.md) | The time when the Plan was last updated. | [optional] 
**live_mode** | **bool** | Has the value true if the object exists in live mode or the value false if the object exists in test mode. | [optional] 
**id** | **string** | The unique identifier of a Plan. | [optional] 
**terms** | **string** | The contractual agreement displayed to the customer during the acquisition process. | 
**contract_binding_days** | **int** | Indicates the agreed upon length of the contract. For example, an annual subscription should have a value of 365. | 
**interval** | **string** | The supported billing intervals | 
**interval_count** | **int** | How often the customer is billed per the unit of time specified by &lt;code&gt;interval&lt;/code&gt; (e.g. every 3 months). | 
**created_time** | [**\DateTime**](\DateTime.md) | The time when the Plan was created. | [optional] 
**name** | **string** | Describes the subscription products or services added to this plan. | [optional] 
**reminder_offset_days** | **int** | How many days before the opening of the invoice should the reminder event be triggered. | [optional] 
**billing_offset_days** | **int** | The number of days before the opening of the invoice that the reminder event is triggered. | 
**collection_period_days** | **int** | Represents the number of days that Digital River attempts to collect payment. | 
**state** | **string** | The valid states of a plan. Setting a plan to &lt;code&gt;deactivated&lt;/code&gt; causes all connected subscriptions to end with the current period. | [optional] 
**metadata** | [**map[string,AnyType]**](AnyType.md) | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


