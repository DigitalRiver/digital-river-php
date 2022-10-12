# DigitalRiver\ApiSdk\DropInCheckoutSessionsApi

All URIs are relative to *https://api.digitalriver.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDropInCheckoutSession**](DropInCheckoutSessionsApi.md#createDropInCheckoutSession) | **POST** /drop-in/checkout-sessions | Creates a new Drop-in checkout session



## createDropInCheckoutSession

> \DigitalRiver\ApiSdk\Model\CreateDropInCheckoutTokenResponse createDropInCheckoutSession($drop_in_checkout_request)

Creates a new Drop-in checkout session

Creates a new Drop-in checkout session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\DropInCheckoutSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$drop_in_checkout_request = new \DigitalRiver\ApiSdk\Model\DropInCheckoutRequest(); // \DigitalRiver\ApiSdk\Model\DropInCheckoutRequest | 
// Refer \DigitalRiver\ApiSdk\Model\DropInCheckoutRequest::$setters in digital-river-php/lib/Model/DropInCheckoutRequest.php to set the properties.

try {
    $result = $apiInstance->createDropInCheckoutSession($drop_in_checkout_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DropInCheckoutSessionsApi->createDropInCheckoutSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drop_in_checkout_request** | [**\DigitalRiver\ApiSdk\Model\DropInCheckoutRequest**](../Model/DropInCheckoutRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\CreateDropInCheckoutTokenResponse**](../Model/CreateDropInCheckoutTokenResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

