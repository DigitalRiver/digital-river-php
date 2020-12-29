# DigitalRiver\ApiSdk\WebhooksApi

All URIs are relative to *https://www.digitalriver.com/docs/digital-river-api-reference*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWebhooks**](WebhooksApi.md#createWebhooks) | **POST** /webhooks | Creates a new webhook
[**deleteWebhooks**](WebhooksApi.md#deleteWebhooks) | **DELETE** /webhooks/{id} | Deletes a webhook endpoint by ID.
[**listWebhooks**](WebhooksApi.md#listWebhooks) | **GET** /webhooks | Returns a list of webhooks
[**retrieveWebhooks**](WebhooksApi.md#retrieveWebhooks) | **GET** /webhooks/{id} | Gets a webhook endpoint by ID.
[**updateWebhooks**](WebhooksApi.md#updateWebhooks) | **PATCH** /webhooks/{id} | Updates an existing webhook endpoint



## createWebhooks

> \DigitalRiver\ApiSdk\Model\Webhook createWebhooks($webhook_request)

Creates a new webhook

Creates a new webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_request = new \DigitalRiver\ApiSdk\Model\WebhookRequest(); // \DigitalRiver\ApiSdk\Model\WebhookRequest | 
// Refer \DigitalRiver\ApiSdk\Model\WebhookRequest::$setters in digital-river-php/lib/Model/WebhookRequest.php to set the properties.

try {
    $result = $apiInstance->createWebhooks($webhook_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->createWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_request** | [**\DigitalRiver\ApiSdk\Model\WebhookRequest**](../Model/WebhookRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\Webhook**](../Model/Webhook.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteWebhooks

> deleteWebhooks($id)

Deletes a webhook endpoint by ID.

Permanently deletes a webhook endpoint. Supply the unique identifier of the webhook.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Webhook ID


try {
    $apiInstance->deleteWebhooks($id);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Webhook ID |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listWebhooks

> \DigitalRiver\ApiSdk\Model\Webhook[] listWebhooks($type, $types)

Returns a list of webhooks

Get all webhooks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | A string containing a specific webhook endpoint name, or a group of events using * as a wildcard. The list will be filtered to include only webhooks with a matching webhook property.

$types = 'types_example'; // string | An array of up to 20 strings containing specific event names. The list will be filtered to include only events with a matching event property. You may pass either type or types, but not both.


try {
    $result = $apiInstance->listWebhooks($type, $types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->listWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| A string containing a specific webhook endpoint name, or a group of events using * as a wildcard. The list will be filtered to include only webhooks with a matching webhook property. | [optional]
 **types** | **string**| An array of up to 20 strings containing specific event names. The list will be filtered to include only events with a matching event property. You may pass either type or types, but not both. | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\Webhook[]**](../Model/Webhook.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retrieveWebhooks

> \DigitalRiver\ApiSdk\Model\Webhook retrieveWebhooks($id)

Gets a webhook endpoint by ID.

Retrieves the details of a webhook endpoint. Supply the unique identifier of the webhook endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Webhook ID


try {
    $result = $apiInstance->retrieveWebhooks($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->retrieveWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Webhook ID |

### Return type

[**\DigitalRiver\ApiSdk\Model\Webhook**](../Model/Webhook.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateWebhooks

> \DigitalRiver\ApiSdk\Model\Webhook updateWebhooks($id, $webhook_update_request)

Updates an existing webhook endpoint

Updates a  existing webhook endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Webhook ID.

$webhook_update_request = new \DigitalRiver\ApiSdk\Model\WebhookUpdateRequest(); // \DigitalRiver\ApiSdk\Model\WebhookUpdateRequest | 
// Refer \DigitalRiver\ApiSdk\Model\WebhookUpdateRequest::$setters in digital-river-php/lib/Model/WebhookUpdateRequest.php to set the properties.

try {
    $result = $apiInstance->updateWebhooks($id, $webhook_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->updateWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Webhook ID. |
 **webhook_update_request** | [**\DigitalRiver\ApiSdk\Model\WebhookUpdateRequest**](../Model/WebhookUpdateRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\Webhook**](../Model/Webhook.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

