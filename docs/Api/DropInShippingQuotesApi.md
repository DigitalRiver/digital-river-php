# DigitalRiver\ApiSdk\DropInShippingQuotesApi

All URIs are relative to *https://api.digitalriver.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listShippingMethodQuotes**](DropInShippingQuotesApi.md#listShippingMethodQuotes) | **POST** /checkout/shipping-quotes | Returns shipping method quotes



## listShippingMethodQuotes

> \DigitalRiver\ApiSdk\Model\ShippingMethodQuoteResponse listShippingMethodQuotes($shipping_method_quote_request)

Returns shipping method quotes

Get all available shipping method quotes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new DigitalRiver\ApiSdk\Api\DropInShippingQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipping_method_quote_request = new \DigitalRiver\ApiSdk\Model\ShippingMethodQuoteRequest(); // \DigitalRiver\ApiSdk\Model\ShippingMethodQuoteRequest | 
// Refer \DigitalRiver\ApiSdk\Model\ShippingMethodQuoteRequest::$setters in digital-river-php/lib/Model/ShippingMethodQuoteRequest.php to set the properties.

try {
    $result = $apiInstance->listShippingMethodQuotes($shipping_method_quote_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DropInShippingQuotesApi->listShippingMethodQuotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_method_quote_request** | [**\DigitalRiver\ApiSdk\Model\ShippingMethodQuoteRequest**](../Model/ShippingMethodQuoteRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\ShippingMethodQuoteResponse**](../Model/ShippingMethodQuoteResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

