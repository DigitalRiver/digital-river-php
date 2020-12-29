# # UpdateCustomerRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | The customer email address. | [optional] 
**shipping** | [**\DigitalRiver\ApiSdk\Model\Shipping**](Shipping.md) |  | [optional] 
**default_source_id** | **string** | The identifier of the [default source](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/payment-sources/using-the-source-identifier#switching-the-default-payment-source) attached to this customer. | [optional] 
**tax_identifiers** | [**\DigitalRiver\ApiSdk\Model\TaxIdentifier[]**](TaxIdentifier.md) | A list of [tax identifiers](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/customers/setting-tax-related-attributes#tax-identifiers) for this customer. | [optional] 
**tax_certificate** | [**\DigitalRiver\ApiSdk\Model\TaxCertificate**](TaxCertificate.md) |  | [optional] 
**request_to_be_forgotten** | **bool** | If &lt;code&gt;true&lt;/code&gt;, indicates this customer has submitted a [request to be forgotten](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/customers/recording-a-request-to-be-forgotten). | [optional] 
**type** | [**\DigitalRiver\ApiSdk\Model\CustomerType**](CustomerType.md) |  | [optional] 
**metadata** | [**map[string,AnyType]**](AnyType.md) | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional] 
**locale** | **string** | A [locale designator](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/checkouts/creating-checkouts/designating-a-locale) that combines the two-letter ISO 639-1 language code with the ISO 3166-1 alpha-2 country code | [optional] 
**enabled** | **bool** | Usually used to disable the customer. The default is &lt;code&gt;true&lt;/code&gt;. If &lt;code&gt;false&lt;/code&gt;, attempts to create orders for the customer will fail. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


