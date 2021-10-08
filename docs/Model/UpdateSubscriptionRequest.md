# # UpdateSubscriptionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**plan_id** | **string** | The Plan identifier. | 
**application_id** | **string** | The identifier of the client application that created the subscription. | [optional] 
**locale** | **string** | A locale designator that combines the two-letter ISO 639-1 language code with a ISO 3166-1 alpha-2 country code. | [optional] 
**state** | **string** | The state of the subscription | [optional] 
**source_id** | **string** | The unique identifier of the subscription&#39;s reusable payment source. | [optional] 
**items** | [**\DigitalRiver\ApiSdk\Model\SubscriptionItems[]**](SubscriptionItems.md) |  | [optional] 
**metadata** | [**map[string,AnyType]**](AnyType.md) | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


