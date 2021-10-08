# # Shipment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of a shipment. | [optional] [readonly] 
**created_time** | [**\DateTime**](\DateTime.md) | Time when the shipment was created. | [optional] [readonly] 
**fulfillment_order_id** | **string** | The identifier of the fulfillment order. | [optional] 
**fulfillment_order_upstream_id** | **string** | The upstream identifier of the fulfillment order. | [optional] 
**shipping_choice_id** | **string** | The shipping method. | [optional] [readonly] 
**tracking_company_id** | **string** | The unique identifier of the tracking or carrier company. | [optional] [readonly] 
**tracking_company** | **string** | The name of the tracking or carrier company. | [optional] 
**tracking_number** | **string** | The tracking number provided by the carrier company. | [optional] 
**tracking_url** | **string** | The URL of the fulfillment tracking page. | [optional] 
**items** | [**\DigitalRiver\ApiSdk\Model\ShipmentItem[]**](ShipmentItem.md) |  | [optional] 
**live_mode** | **bool** | Has the value true if the object exists in live mode or the value false if the object exists in test mode. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


