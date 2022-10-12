# DigitalRiver\ApiSdk\LogisticsReturnsApi

All URIs are relative to *https://api.digitalriver.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLogisticsReturns**](LogisticsReturnsApi.md#createLogisticsReturns) | **POST** /logistics-returns | Creates a return
[**listLogisticsReturns**](LogisticsReturnsApi.md#listLogisticsReturns) | **GET** /logistics-returns | Returns a list of returns
[**retrieveLogisticsReturns**](LogisticsReturnsApi.md#retrieveLogisticsReturns) | **GET** /logistics-returns/{id} | Gets a return by ID



## createLogisticsReturns

> \DigitalRiver\ApiSdk\Model\ReturnResponse createLogisticsReturns($return_request)

Creates a return

Returns all or part of a previously created order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\LogisticsReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_request = new \DigitalRiver\ApiSdk\Model\ReturnRequest(); // \DigitalRiver\ApiSdk\Model\ReturnRequest | 
// Refer \DigitalRiver\ApiSdk\Model\ReturnRequest::$setters in digital-river-php/lib/Model/ReturnRequest.php to set the properties.

try {
    $result = $apiInstance->createLogisticsReturns($return_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogisticsReturnsApi->createLogisticsReturns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_request** | [**\DigitalRiver\ApiSdk\Model\ReturnRequest**](../Model/ReturnRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\ReturnResponse**](../Model/ReturnResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listLogisticsReturns

> \DigitalRiver\ApiSdk\Model\ListReturnsResponse listLogisticsReturns($created_time, $ending_before, $starting_after, $limit, $ids, $order_id, $type, $rma_number)

Returns a list of returns

Get all returns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\LogisticsReturnsApi(
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
$order_id = 'order_id_example'; // string | The order to retrieve returns for.

$type = 'type_example'; // string | The type of return.

$rma_number = 'rma_number_example'; // string | 


try {
    $result = $apiInstance->listLogisticsReturns($created_time, $ending_before, $starting_after, $limit, $ids, $order_id, $type, $rma_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogisticsReturnsApi->listLogisticsReturns: ', $e->getMessage(), PHP_EOL;
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
 **order_id** | **string**| The order to retrieve returns for. | [optional]
 **type** | **string**| The type of return. | [optional]
 **rma_number** | **string**|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\ListReturnsResponse**](../Model/ListReturnsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retrieveLogisticsReturns

> \DigitalRiver\ApiSdk\Model\ReturnResponse retrieveLogisticsReturns($id)

Gets a return by ID

Retrieves the details of a return. Supply the unique identifier of the return.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\LogisticsReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Return ID


try {
    $result = $apiInstance->retrieveLogisticsReturns($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogisticsReturnsApi->retrieveLogisticsReturns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Return ID |

### Return type

[**\DigitalRiver\ApiSdk\Model\ReturnResponse**](../Model/ReturnResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

