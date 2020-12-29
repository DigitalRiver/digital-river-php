# # SubscriptionInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**free_trial** | **bool** | If &lt;code&gt;true&lt;/code&gt;, indicates that this is a [free trial](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/shared-properties/describing-the-items/subscription-information#free-trial). | [optional] 
**auto_renewal** | **bool** | If &lt;code&gt;true&lt;/code&gt;, indicates that [renewals for this subscription are automatic](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/shared-properties/describing-the-items/subscription-information#auto-renewal) rather than manual. | [optional] 
**terms** | **string** | For auto renewal subscriptions, the [terms](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/shared-properties/describing-the-items/subscription-information#terms) displayed to the customer at acquisition. | [optional] 
**subscription_id** | **string** | The [subscription identifier](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/shared-properties/describing-the-items/subscription-information#subscription-identifier). | [optional] 
**billing_agreement_id** | **string** | The Digital River billing agreement identifier. | [optional] 
**start_time** | [**\DateTime**](\DateTime.md) | The [start date and time](https://docs.digitalriver.com/digital-river-api/v/v2020-01-07/checkouts-and-orders/checkouts/creating-checkouts/describing-the-items/subscription-information#start-and-end-time) of the subscription. | [optional] 
**end_time** | [**\DateTime**](\DateTime.md) | The [&lt;code&gt;startTime&lt;/code&gt; plus the subscription duration](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/shared-properties/describing-the-items/subscription-information). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


