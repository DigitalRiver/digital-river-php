# # InventoryItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier of an inventory item. | [optional] 
**created_time** | [**\DateTime**](\DateTime.md) | Time when the inventory item was created. | [optional] [readonly] 
**manufacturer_id** | **string** | Unique Digital River manufacturer identifier. | [optional] 
**eccn** | **string** | Export control classification number. | [optional] 
**hs_code** | **string** | International &amp; US HS Code &amp; Harmonized Tariff Code. | [optional] 
**part_number** | **string** | Manufacturer part number. | [optional] 
**country_of_origin** | **string** | An ISO 3166-1 alpha-2 country code. | [optional] 
**allow_oversell** | **bool** | If true, customers are allowed to reserve inventory of the item when it is out of stock. | [optional] 
**live_mode** | **bool** | Has the value true if the object exists in live mode or the value false if the object exists in test mode. | [optional] 
**updated_time** | [**\DateTime**](\DateTime.md) | Time when the inventory item was last updated. | [optional] [readonly] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


