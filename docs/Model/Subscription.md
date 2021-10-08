# # Subscription

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contract_binding_until** | [**\DateTime**](\DateTime.md) | Represents the date and time when the subscription&#39;s contract expires. | [optional] 
**created_time** | [**\DateTime**](\DateTime.md) | The time when the Subscription was created | [optional] 
**updated_time** | [**\DateTime**](\DateTime.md) | The time when the Subscription was last updated. | [optional] 
**state_transitions** | [**\DigitalRiver\ApiSdk\Model\StateTransitions**](StateTransitions.md) |  | [optional] 
**live_mode** | **bool** | Has the value true if the object exists in live mode or the value false if the object exists in test mode. | [optional] 
**id** | **string** | The unique identifier of the Subscription. | [optional] 
**billing_agreement_id** | **string** | The billing agreement identifier that is obtained from the subscription&#39;s acquisition order. | [optional] 
**customer_id** | **string** | The Customer identifier that is obtained from the subscription&#39;s acquisition order. | [optional] 
**source_id** | **string** | The unique identifier of the subscription&#39;s reusable payment source. | [optional] 
**tax_inclusive** | **bool** | If true indicates that the prices supplied are tax inclusive. | [optional] 
**currency** | **string** | Three-letter ISO currency code (e.g. \&quot;USD\&quot; or \&quot;EUR\&quot;). | 
**plan_id** | **string** | The Plan identifier. | 
**application_id** | **string** | The identifier of the client application that created the subscription. | [optional] 
**locale** | **string** | A locale designator that combines a two-letter ISO 639-1 language code with a ISO 3166-1 alpha-2 country code. | [optional] 
**state** | **string** | The state of the subscription | [optional] 
**items** | [**\DigitalRiver\ApiSdk\Model\SubscriptionItems[]**](SubscriptionItems.md) |  | [optional] 
**current_period_end_date** | [**\DateTime**](\DateTime.md) | Represents the date and time when the subscription&#39;s current billing period ends. | [optional] 
**next_invoice_date** | [**\DateTime**](\DateTime.md) | Represents the date and time when Digital River next opens an invoice and starts the billing process. | [optional] 
**metadata** | [**map[string,AnyType]**](AnyType.md) | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


