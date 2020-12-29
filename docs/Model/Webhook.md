# # Webhook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**created_time** | [**\DateTime**](\DateTime.md) | Time at which the webhook was created | [optional] 
**updated_time** | [**\DateTime**](\DateTime.md) | Time at which the webhook was updated | [optional] 
**types** | **string[]** |  | [optional] 
**api_version** | **string** | Indicates whether to use the current default version of the API or the latest version of the API | [optional] 
**enabled** | **bool** | Indicate that webhook is enabled and receives notifications or is not enabled and does not receive notifications | [optional] 
**address** | **string** | URL of the webhook endpoint on your server you have set up to receive webhook notifications. Webhook data is sent as JSON in the POST request body. The full event details are included and can be used directly, after parsing the JSON into an Event object. | [optional] 
**transport_type** | **string** |  | [optional] [default to 'HTTP']
**oauth** | [**\DigitalRiver\ApiSdk\Model\WebhookOauth**](WebhookOauth.md) |  | [optional] 
**authentication** | [**\DigitalRiver\ApiSdk\Model\WebhookRequestAuthentication**](WebhookRequestAuthentication.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


