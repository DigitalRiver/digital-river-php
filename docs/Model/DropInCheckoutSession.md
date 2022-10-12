# # DropInCheckoutSession

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**upstream_id** | **string** | The upstream checkout identifier if it is different from the Digital River checkout identifier. | [optional] 
**currency** | **string** | A three-letter ISO currency code. | [optional] 
**tax_inclusive** | **bool** |  | [optional] 
**items** | [**\DigitalRiver\ApiSdk\Model\SkuItemRequest[]**](SkuItemRequest.md) |  | [optional] 
**ship_from** | [**\DigitalRiver\ApiSdk\Model\ShipFrom**](ShipFrom.md) |  | [optional] 
**discount** | [**\DigitalRiver\ApiSdk\Model\Discount**](Discount.md) |  | [optional] 
**shipping_discount** | [**\DigitalRiver\ApiSdk\Model\Discount**](Discount.md) |  | [optional] 
**browser_ip** | **string** | The IP address of the browser used by the customer when checking out. | [optional] 
**application_id** | **string** | An arbitrary identifier that can be used to track the application type. | [optional] [readonly] 
**locale** | **string** | A designator that combines the two-letter ISO 639-1 language code with the ISO 3166-1 alpha-2 country code. | [optional] 
**customer_type** | [**\DigitalRiver\ApiSdk\Model\CustomerType**](CustomerType.md) |  | [optional] 
**charge_type** | [**\DigitalRiver\ApiSdk\Model\ChargeType**](ChargeType.md) |  | [optional] 
**style** | [**object**](.md) | Style for drop-in | [optional] 
**options** | [**\DigitalRiver\ApiSdk\Model\DropInOptionsRequest**](DropInOptionsRequest.md) |  | [optional] 
**redirects** | [**\DigitalRiver\ApiSdk\Model\Redirects**](Redirects.md) |  | [optional] 
**metadata** | [**map[string,AnyType]**](AnyType.md) | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


