# # FulfillmentRequestItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_id** | **string** | The unique identifier of the [line item](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/orders/creating-and-updating-an-order#line-items). | [optional] 
**sku_id** | **string** | The unique identifier of the aku. | [optional] [readonly] 
**quantity** | **int** | The number of items fulfilled. You must provide either this value and/or a value for the &lt;code&gt;cancelQuantity&lt;/code&gt; attribute. | [optional] 
**cancel_quantity** | **int** | The number of items cancelled. You must provide either this value and/or a value for the &lt;code&gt;quantity&lt;/code&gt; attribute. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


