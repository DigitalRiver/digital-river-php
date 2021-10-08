# DigitalRiver\ApiSdk\ShippingQuotesApi

All URIs are relative to *https://api.digitalriver.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listShippingQuotes**](ShippingQuotesApi.md#listShippingQuotes) | **POST** /shipping-quotes | Returns shipping quotes



## listShippingQuotes

> \DigitalRiver\ApiSdk\Model\ShippingQuoteResponse listShippingQuotes($shipping_quote_request)

Returns shipping quotes

Get all available shipping quotes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new DigitalRiver\ApiSdk\Api\ShippingQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipping_quote_request = new \DigitalRiver\ApiSdk\Model\ShippingQuoteRequest(); // \DigitalRiver\ApiSdk\Model\ShippingQuoteRequest | 
// Refer \DigitalRiver\ApiSdk\Model\ShippingQuoteRequest::$setters in digital-river-php/lib/Model/ShippingQuoteRequest.php to set the properties.

try {
    $result = $apiInstance->listShippingQuotes($shipping_quote_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingQuotesApi->listShippingQuotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_quote_request** | [**\DigitalRiver\ApiSdk\Model\ShippingQuoteRequest**](../Model/ShippingQuoteRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\ShippingQuoteResponse**](../Model/ShippingQuoteResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

