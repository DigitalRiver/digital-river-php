# # FeeUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The [type](https://docs.digitalriver.com/digital-river-api/regulatory-fees/managing-regulatory-fees#type) of fee. | [optional] 
**sku_id** | **string** | The unique identifer of the [stock keeping unit](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/skus/creating-and-updating-skus) associated with the fee. | [optional] 
**category** | **string** | The [category](https://docs.digitalriver.com/digital-river-api/regulatory-fees/managing-regulatory-fees#category) of the fee as defined by regulatory law. | [optional] 
**value** | **string** | The [value](https://docs.digitalriver.com/digital-river-api/regulatory-fees/managing-regulatory-fees#value) of the product. | [optional] 
**amount** | **double** | The fee amount. | [optional] 
**battery** | [**\DigitalRiver\ApiSdk\Model\Battery**](Battery.md) |  | [optional] 
**compliance_agency** | **string** | The [unique identifier of the recycling agency](https://docs.digitalriver.com/digital-river-api/regulatory-fees/managing-regulatory-fees#compliance-agency) associated with the product&#39;s jurisdiction. | [optional] 
**fee_exemption** | **string** | Indicates whether business to business sales are [exempt from paying the fee](https://docs.digitalriver.com/digital-river-api/regulatory-fees/managing-regulatory-fees#fee-exemption). | [optional] 
**brand_name** | **string** | The product&#39;s [brand name](https://docs.digitalriver.com/digital-river-api/regulatory-fees/managing-regulatory-fees#brand-name). | [optional] 
**weee** | [**\DigitalRiver\ApiSdk\Model\WEEE**](WEEE.md) |  | [optional] 
**weight_and_units** | **string** | The [weight of the unit, minus packaging or batteries, and the unit of measurement applied to the weight](https://docs.digitalriver.com/digital-river-api/regulatory-fees/managing-regulatory-fees#weight-and-units). | [optional] 
**currency** | **string** | A three-letter ISO 4217 currency code. | [optional] 
**country** | **string** | A two-letter ISO 3166 [country code](https://docs.digitalriver.com/digital-river-api/regulatory-fees/managing-regulatory-fees#country-and-subdivisions). | [optional] 
**subdivisions** | **string[]** | An array of ISO 3166-2 [subdivision codes](https://docs.digitalriver.com/digital-river-api/regulatory-fees/managing-regulatory-fees#country-and-subdivisions). | [optional] 
**metadata** | [**map[string,AnyType]**](AnyType.md) | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


