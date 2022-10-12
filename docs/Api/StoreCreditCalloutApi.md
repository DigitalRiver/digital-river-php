# DigitalRiver\ApiSdk\StoreCreditCalloutApi

All URIs are relative to *https://api.digitalriver.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**storeCreditsCallout**](StoreCreditCalloutApi.md#storeCreditsCallout) | **POST** /checkouts/store-credits | Store credit callout



## storeCreditsCallout

> storeCreditsCallout($integration_store_credit_request)

Store credit callout

Store credit callout

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\StoreCreditCalloutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_store_credit_request = new \DigitalRiver\ApiSdk\Model\IntegrationStoreCreditRequest(); // \DigitalRiver\ApiSdk\Model\IntegrationStoreCreditRequest | 
// Refer \DigitalRiver\ApiSdk\Model\IntegrationStoreCreditRequest::$setters in digital-river-php/lib/Model/IntegrationStoreCreditRequest.php to set the properties.

try {
    $apiInstance->storeCreditsCallout($integration_store_credit_request);
} catch (Exception $e) {
    echo 'Exception when calling StoreCreditCalloutApi->storeCreditsCallout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_store_credit_request** | [**\DigitalRiver\ApiSdk\Model\IntegrationStoreCreditRequest**](../Model/IntegrationStoreCreditRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

