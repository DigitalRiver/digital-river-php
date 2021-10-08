# # GlobalFulfillmentOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **float** | The unique identifier of the fulfillment order. | [optional] [readonly] 
**created_time** | [**\DateTime**](\DateTime.md) | The time when the fulfillment order was created. | [optional] [readonly] 
**currency** | **string** | A three-letter ISO currency code. | [optional] 
**locale** | **string** | A locale designator that combines a two-letter ISO 639-1 language code with a ISO 3166-1 alpha-2 country code. | [optional] 
**upstream_order_time** | [**\DateTime**](\DateTime.md) | The time at which the upstream order was created. | [optional] 
**name** | **string** | The customer&#39;s name. | [optional] 
**email** | **string** | The customer&#39;s email address. | [optional] 
**phone** | **string** | The customer&#39;s phone number. | [optional] 
**reservation_id** | **string** | An inventory reservation identifier. | [optional] 
**upstream_id** | **string** | The upstream order identifier. | [optional] 
**ship_to** | [**\DigitalRiver\ApiSdk\Model\Shipping**](Shipping.md) |  | [optional] 
**shipping_choice** | [**\DigitalRiver\ApiSdk\Model\GlobalFulfillmentShippingChoice**](GlobalFulfillmentShippingChoice.md) |  | [optional] 
**items** | [**\DigitalRiver\ApiSdk\Model\LineItem[]**](LineItem.md) |  | [optional] 
**state** | **string** | The current state of the fulfillment order. | [optional] [readonly] 
**live_mode** | **bool** | Has the value true if the object exists in live mode or the value false if the object exists in test mode. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


