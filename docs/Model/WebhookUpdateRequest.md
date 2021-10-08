# # WebhookUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**types** | **string[]** |  | [optional] 
**api_version** | **string** | Indicates whether to use the current, default version of the API or the version specified by YYYY-MM-DD. | [optional] [default to 'default']
**enabled** | **bool** | Indicate that webhook is enabled and receives notifications or is not enabled and does not receive notifications | [optional] [default to true]
**address** | **string** | URL of the webhook endpoint on your server you have set up to receive webhook notifications. Webhook data is sent as JSON in the POST request body. The full event details are included and can be used directly, after parsing the JSON into an Event object. | [optional] 
**transport_type** | **string** |  | [optional] [default to 'HTTP']
**oauth** | [**\DigitalRiver\ApiSdk\Model\WebhookUpdateRequestOauth**](WebhookUpdateRequestOauth.md) |  | [optional] 
**authentication** | [**\DigitalRiver\ApiSdk\Model\WebhookRequestAuthentication**](WebhookRequestAuthentication.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


