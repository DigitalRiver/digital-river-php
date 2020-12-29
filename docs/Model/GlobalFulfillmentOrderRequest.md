# # GlobalFulfillmentOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency** | **string** | Three-letter ISO currency code. | 
**locale** | **string** | Locale designator combining two-letter ISO 639-1 language code with ISO 3166-1 alpha-2 country code. | [optional] 
**upstream_order_time** | [**\DateTime**](\DateTime.md) | Time at which the upstream order was created | 
**name** | **string** | The customer name. | [optional] 
**email** | **string** | The customer email address. | [optional] 
**phone** | **string** | The customer phone number. | [optional] 
**reservation_id** | **string** | An inventory reservation identifier. | [optional] 
**upstream_id** | **string** | The user order identifier. | [optional] 
**ship_to** | **object** |  | 
**shipping_choice** | [**\DigitalRiver\ApiSdk\Model\ShippingChoice**](ShippingChoice.md) |  | 
**items** | [**\DigitalRiver\ApiSdk\Model\LineItemRequest[]**](LineItemRequest.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


