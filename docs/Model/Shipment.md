# # Shipment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier of a shipment. | [optional] [readonly] 
**created_time** | [**\DateTime**](\DateTime.md) | Time when the shipment was created. | [optional] [readonly] 
**fulfillment_order_id** | **string** | The identifier of Fulfillment Order. | [optional] 
**fulfillment_order_upstream_id** | **string** | The upstream identifier of Fulfillment Order. | [optional] 
**shipping_choice_id** | **string** | Shipping method used for shipment. | [optional] [readonly] 
**tracking_company_id** | **string** |  | [optional] [readonly] 
**tracking_company** | **string** | The name of the tracking or carrier company. | [optional] 
**tracking_number** | **string** | The tracking number provided by the shipping company. | [optional] 
**tracking_url** | **string** | The URL of the tracking page for the fulfillment. | [optional] 
**items** | [**\DigitalRiver\ApiSdk\Model\ShipmentItem[]**](ShipmentItem.md) |  | [optional] 
**live_mode** | **bool** | Has the value true if the object exists in live mode or the value false if the object exists in test mode. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


