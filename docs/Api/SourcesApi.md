# DigitalRiver\ApiSdk\SourcesApi

All URIs are relative to *https://www.digitalriver.com/docs/digital-river-api-reference*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveSources**](SourcesApi.md#retrieveSources) | **GET** /sources/{id} | Gets a source by identifier



## retrieveSources

> \DigitalRiver\ApiSdk\Model\Source retrieveSources($id)

Gets a source by identifier

Retrieve the details of a source by supplying its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\SourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Source identifier


try {
    $result = $apiInstance->retrieveSources($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourcesApi->retrieveSources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Source identifier |

### Return type

[**\DigitalRiver\ApiSdk\Model\Source**](../Model/Source.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

