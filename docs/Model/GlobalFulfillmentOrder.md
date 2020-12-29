# # GlobalFulfillmentOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **float** |  | [optional] [readonly] 
**created_time** | [**\DateTime**](\DateTime.md) | Time at which the order was created | [optional] [readonly] 
**currency** | **string** | Three-letter ISO currency code. | [optional] 
**locale** | **string** | Locale designator combining two-letter ISO 639-1 language code with ISO 3166-1 alpha-2 country code. | [optional] 
**upstream_order_time** | [**\DateTime**](\DateTime.md) | Time at which the upstream order was created | [optional] 
**name** | **string** | The customer name. | [optional] 
**email** | **string** | The customer email address. | [optional] 
**phone** | **string** | The customer phone number. | [optional] 
**reservation_id** | **string** | An inventory reservation identifier. | [optional] 
**upstream_id** | **string** | The user order identifier. | [optional] 
**ship_to** | [**\DigitalRiver\ApiSdk\Model\Shipping2**](Shipping2.md) |  | [optional] 
**shipping_choice** | [**\DigitalRiver\ApiSdk\Model\ShippingChoice**](ShippingChoice.md) |  | [optional] 
**items** | [**\DigitalRiver\ApiSdk\Model\LineItem[]**](LineItem.md) |  | [optional] 
**state** | **string** | Current state. | [optional] [readonly] 
**live_mode** | **bool** | Has the value true if the object exists in live mode or the value false if the object exists in test mode. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


