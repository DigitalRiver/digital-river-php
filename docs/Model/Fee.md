# # Fee

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the fee. | [optional] 
**created_time** | [**\DateTime**](\DateTime.md) | The time when the fee was created. | [optional] 
**type** | **string** | The type of fee. | [optional] 
**sku_id** | **string** | The unique identifer of the stock keeping unit associated with the fee. | [optional] 
**category** | **string** | The category of the fee as defined by regulatory law. | [optional] 
**value** | **string** | The value of the product. | [optional] 
**amount** | **double** | The fee amount. | [optional] 
**battery** | [**\DigitalRiver\ApiSdk\Model\Battery**](Battery.md) |  | [optional] 
**compliance_agency** | **string** | The unique identifier of the recycling agency associated with the product&#39;s jurisdiction. | [optional] 
**fee_exemption** | **string** | Indicates whether business to business sales are exempt from paying the fee. | [optional] 
**brand_name** | **string** | The product&#39;s brand name. | [optional] 
**weee** | [**\DigitalRiver\ApiSdk\Model\WEEE**](WEEE.md) |  | [optional] 
**weight_and_units** | **string** | The weight of the unit, minus packaging or batteries, and the unit of measurement applied to the weight. | [optional] 
**rate_and_units** | **string** | The fee amount to be charged per product quantity. | [optional] 
**currency** | **string** | A three-letter ISO 4217 currency code. | [optional] 
**country** | **string** | A two-letter ISO 3166 country code. | [optional] 
**subdivisions** | **string[]** | An array of ISO 3166-2 subdivision codes. | [optional] 
**live_mode** | **bool** | Has the value &lt;code&gt;true&lt;/code&gt; if the object exists in live mode or the value &lt;code&gt;false&lt;/code&gt; if the object exists in test mode. | [optional] 
**metadata** | [**map[string,AnyType]**](AnyType.md) | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional] 
**updated_time** | [**\DateTime**](\DateTime.md) | Time when the fee was last updated. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


