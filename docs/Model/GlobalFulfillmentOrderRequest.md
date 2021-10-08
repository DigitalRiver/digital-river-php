# # GlobalFulfillmentOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency** | **string** | A three-letter ISO currency code. | 
**locale** | **string** | A locale designator that combines a two-letter ISO 639-1 language code with a ISO 3166-1 alpha-2 country code. | [optional] 
**upstream_order_time** | [**\DateTime**](\DateTime.md) | The date and time at which the upstream order was created. The specified value should be in ISO-8601 UTC format. | 
**name** | **string** | The customer&#39;s name. | [optional] 
**email** | **string** | The customer&#39;s email address. | [optional] 
**phone** | **string** | The customer&#39;s phone number. | [optional] 
**reservation_id** | **string** | An inventory reservation identifier. | [optional] 
**upstream_id** | **string** | The upstream order identifier. | [optional] 
**ship_to** | [**\DigitalRiver\ApiSdk\Model\Shipping**](Shipping.md) |  | 
**shipping_choice** | [**\DigitalRiver\ApiSdk\Model\GlobalFulfillmentShippingChoice**](GlobalFulfillmentShippingChoice.md) |  | 
**items** | [**\DigitalRiver\ApiSdk\Model\LineItemRequest[]**](LineItemRequest.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


