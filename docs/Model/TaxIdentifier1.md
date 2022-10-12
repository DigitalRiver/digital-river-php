# # TaxIdentifier1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The identifier of the tax identifier. | [optional] [readonly] 
**created_time** | [**\DateTime**](\DateTime.md) | The time when the tax identifier was created. | [optional] [readonly] 
**customer_id** | **string** | The identifier of an existing customer. | [optional] 
**type** | **string** | Type of tax identifier. | [optional] [readonly] 
**value** | **string** | The tax identifier. | [optional] 
**state** | **string** | The verification state. | [optional] [readonly] 
**state_transitions** | [**\DigitalRiver\ApiSdk\Model\TaxIdentifierStateTransitions**](TaxIdentifierStateTransitions.md) |  | [optional] 
**verified_name** | **string** | The registered name of the customer with this tax identifier. | [optional] 
**verified_address** | **string** | The registered address of the customer with this tax identifier. | [optional] 
**updated_time** | [**\DateTime**](\DateTime.md) | The time when the tax identifier was updated. | [optional] [readonly] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


