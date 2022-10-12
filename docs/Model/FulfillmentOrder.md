# # FulfillmentOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the Fulfillment. | [optional] [readonly] 
**created_time** | [**\DateTime**](\DateTime.md) | The time when the Fulfillment was created. | [optional] [readonly] 
**order_id** | **string** | The unique identifier of the Order associated with this Fulfillment. | [optional] [readonly] 
**order_details** | [**\DigitalRiver\ApiSdk\Model\OrderDetails**](OrderDetails.md) |  | [optional] 
**shipment_id** | **string** | The unique identifier associated to the shipment | [optional] 
**items** | [**\DigitalRiver\ApiSdk\Model\FulfillmentResponseItem[]**](FulfillmentResponseItem.md) | An array of line items fulfilled and/or cancelled. | [optional] 
**live_mode** | **bool** | Has the value &lt;code&gt;true&lt;/code&gt; if the object exists in live mode or the value &lt;code&gt;false&lt;/code&gt; if the object exists in test mode. | [optional] 
**metadata** | [**map[string,AnyType]**](AnyType.md) | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional] 
**tracking_company** | **string** | The name of the tracking company. | [optional] 
**tracking_number** | **string** | A tracking number provided by the shipping company. | [optional] 
**tracking_url** | **string** | The URL of the tracking page for the Fulfillment. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


