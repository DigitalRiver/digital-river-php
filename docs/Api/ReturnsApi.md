# DigitalRiver\ApiSdk\ReturnsApi

All URIs are relative to *https://api.digitalriver.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createReturns**](ReturnsApi.md#createReturns) | **POST** /returns | Creates a return
[**listReturns**](ReturnsApi.md#listReturns) | **GET** /returns | Returns a list of returns
[**retrieveReturns**](ReturnsApi.md#retrieveReturns) | **GET** /returns/{id} | Gets a return by ID
[**updateReturns**](ReturnsApi.md#updateReturns) | **POST** /returns/{id} | Updates an existing return



## createReturns

> \DigitalRiver\ApiSdk\Model\CreateReturnsResponse createReturns($returns_request)

Creates a return

Returns all or part of a previously created order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$returns_request = new \DigitalRiver\ApiSdk\Model\ReturnsRequest(); // \DigitalRiver\ApiSdk\Model\ReturnsRequest | 
// Refer \DigitalRiver\ApiSdk\Model\ReturnsRequest::$setters in digital-river-php/lib/Model/ReturnsRequest.php to set the properties.

try {
    $result = $apiInstance->createReturns($returns_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->createReturns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **returns_request** | [**\DigitalRiver\ApiSdk\Model\ReturnsRequest**](../Model/ReturnsRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\CreateReturnsResponse**](../Model/CreateReturnsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listReturns

> \DigitalRiver\ApiSdk\Model\ListReturnsResponse1 listReturns($created_time, $ending_before, $starting_after, $limit, $ids, $state, $order_id, $sku_id)

Returns a list of returns

Get all returns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$created_time = createdTime[gt]=2020-09-22T12:09:44Z; // map[string,\DateTime] | A filter on the list based on the **createdTime** field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **eq**&mdash;return values where the createdTime field equals to this timestamp   - **gt**&mdash;return values where the createdTime field is after this timestamp   - **gte**&mdash;return values where the createdTime field is after or equal to this timestamp   - **lt**&mdash;return values where the createdTime field is before this timestamp   - **lte**&mdash;return values where the createdTime field is before or equal to this timestamp
// Refer map[string,\DateTime]::$setters in digital-river-php/lib/Model/\DateTime.php to set the properties.
$ending_before = 'ending_before_example'; // string | A cursor for use in pagination. The endingBefore parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with xyz your subsequent calls can include endingBefore=xyz in order to fetch the previous page of the list.

$starting_after = 'starting_after_example'; // string | A cursor for use in pagination. The startingAfter parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with xyz, your subsequent calls can include startingAfter=xyz in order to fetch the next page of the list.

$limit = 56; // int | A limit on the number of objects returned. Limit can range between 1 and 100, and the default is 10.

$ids = array('ids_example'); // string[] | Only return objects with these IDs.
// Refer string[]::$setters in digital-river-php/lib/Model/string.php to set the properties.
$state = 'state_example'; // string | Only return objects in the given state

$order_id = 'order_id_example'; // string | The order to retrieve returns for.

$sku_id = 'sku_id_example'; // string | The sku to retrieve returns for.


try {
    $result = $apiInstance->listReturns($created_time, $ending_before, $starting_after, $limit, $ids, $state, $order_id, $sku_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->listReturns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **created_time** | [**map[string,\DateTime]**](../Model/\DateTime.md)| A filter on the list based on the **createdTime** field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **eq**&amp;mdash;return values where the createdTime field equals to this timestamp   - **gt**&amp;mdash;return values where the createdTime field is after this timestamp   - **gte**&amp;mdash;return values where the createdTime field is after or equal to this timestamp   - **lt**&amp;mdash;return values where the createdTime field is before this timestamp   - **lte**&amp;mdash;return values where the createdTime field is before or equal to this timestamp | [optional]
 **ending_before** | **string**| A cursor for use in pagination. The endingBefore parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with xyz your subsequent calls can include endingBefore&#x3D;xyz in order to fetch the previous page of the list. | [optional]
 **starting_after** | **string**| A cursor for use in pagination. The startingAfter parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with xyz, your subsequent calls can include startingAfter&#x3D;xyz in order to fetch the next page of the list. | [optional]
 **limit** | **int**| A limit on the number of objects returned. Limit can range between 1 and 100, and the default is 10. | [optional]
 **ids** | [**string[]**](../Model/string.md)| Only return objects with these IDs. | [optional]
 **state** | **string**| Only return objects in the given state | [optional]
 **order_id** | **string**| The order to retrieve returns for. | [optional]
 **sku_id** | **string**| The sku to retrieve returns for. | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\ListReturnsResponse1**](../Model/ListReturnsResponse1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retrieveReturns

> \DigitalRiver\ApiSdk\Model\ReturnsResponse retrieveReturns($id)

Gets a return by ID

Retrieves the details of a return. Supply the unique identifier of the return.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Return ID


try {
    $result = $apiInstance->retrieveReturns($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->retrieveReturns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Return ID |

### Return type

[**\DigitalRiver\ApiSdk\Model\ReturnsResponse**](../Model/ReturnsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateReturns

> \DigitalRiver\ApiSdk\Model\ReturnsResponse updateReturns($id, $update_returns_request)

Updates an existing return

Updates an  existing return.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Return ID

$update_returns_request = new \DigitalRiver\ApiSdk\Model\UpdateReturnsRequest(); // \DigitalRiver\ApiSdk\Model\UpdateReturnsRequest | 
// Refer \DigitalRiver\ApiSdk\Model\UpdateReturnsRequest::$setters in digital-river-php/lib/Model/UpdateReturnsRequest.php to set the properties.

try {
    $result = $apiInstance->updateReturns($id, $update_returns_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->updateReturns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Return ID |
 **update_returns_request** | [**\DigitalRiver\ApiSdk\Model\UpdateReturnsRequest**](../Model/UpdateReturnsRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\ReturnsResponse**](../Model/ReturnsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

