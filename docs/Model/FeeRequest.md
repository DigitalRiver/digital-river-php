# # FeeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of fee. | 
**sku_id** | **string** | The unique identifer of the stock keeping unit associated with the fee. | 
**category** | **string** | The category of the fee as defined by regulatory law. | 
**value** | **string** | The value of the product. | 
**amount** | **double** | The fee amount. | 
**battery** | [**\DigitalRiver\ApiSdk\Model\Battery**](Battery.md) |  | [optional] 
**compliance_agency** | **string** | The unique identifier of the recycling agency associated with the product&#39;s jurisdiction. | [optional] 
**fee_exemption** | **string** | Indicates whether business to business sales are exempt from paying the fee. | [optional] 
**brand_name** | **string** | The product&#39;s brand name. | [optional] 
**weee** | [**\DigitalRiver\ApiSdk\Model\WEEE**](WEEE.md) |  | [optional] 
**weight_and_units** | **string** | The weight of the unit, minus packaging or batteries, and the unit of measurement applied to the weight. | [optional] 
**currency** | **string** | A three-letter ISO 4217 currency code. | 
**country** | **string** | A two-letter ISO 3166 country code. | 
**subdivisions** | **string[]** | An array of ISO 3166-2 subdivision codes. | [optional] 
**metadata** | [**map[string,AnyType]**](AnyType.md) | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


