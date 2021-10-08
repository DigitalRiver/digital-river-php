# # ShippingQuote

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**currency** | **string** | A three-letter ISO currency code. | [optional] 
**service_level** | **string** |  | [optional] 
**shipping** | **double** | The shipping amount. | [optional] 
**handling** | **double** | The handling amount. | [optional] 
**fees** | **double** | The fee amount. | [optional] 
**total** | **double** | The total shipping and handling amount. | [optional] 
**signature_required_type** | **string** | Indicates whether a signature is needed upon delivery, and, if it is, what type of signature is required. | [optional] 
**estimated_minimum_delivery_time** | **float** | The minimum estimated time until delivery (in minutes). | [optional] 
**estimated_maximum_delivery_time** | **float** | The maximum estimated time until delivery (in minutes). | [optional] 
**items** | [**\DigitalRiver\ApiSdk\Model\ProductItem[]**](ProductItem.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


