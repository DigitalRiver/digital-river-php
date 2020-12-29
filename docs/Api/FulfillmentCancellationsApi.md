# DigitalRiver\ApiSdk\FulfillmentCancellationsApi

All URIs are relative to *https://www.digitalriver.com/docs/digital-river-api-reference*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createGFCancellations**](FulfillmentCancellationsApi.md#createGFCancellations) | **POST** /fulfillment-cancellations | Creates a cancellation
[**listGFCancellations**](FulfillmentCancellationsApi.md#listGFCancellations) | **GET** /fulfillment-cancellations | Returns a list of cancellations
[**retrieveGFCancellations**](FulfillmentCancellationsApi.md#retrieveGFCancellations) | **GET** /fulfillment-cancellations/{id} | Gets a cancellation by ID



## createGFCancellations

> \DigitalRiver\ApiSdk\Model\GlobalFulfillmentCancellationResponse createGFCancellations($global_fulfillment_cancellation_request)

Creates a cancellation

Cancels all or part of a previously created order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new DigitalRiver\ApiSdk\Api\FulfillmentCancellationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$global_fulfillment_cancellation_request = new \DigitalRiver\ApiSdk\Model\GlobalFulfillmentCancellationRequest(); // \DigitalRiver\ApiSdk\Model\GlobalFulfillmentCancellationRequest | 
// Refer \DigitalRiver\ApiSdk\Model\GlobalFulfillmentCancellationRequest::$setters in digital-river-php/lib/Model/GlobalFulfillmentCancellationRequest.php to set the properties.

try {
    $result = $apiInstance->createGFCancellations($global_fulfillment_cancellation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentCancellationsApi->createGFCancellations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **global_fulfillment_cancellation_request** | [**\DigitalRiver\ApiSdk\Model\GlobalFulfillmentCancellationRequest**](../Model/GlobalFulfillmentCancellationRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\GlobalFulfillmentCancellationResponse**](../Model/GlobalFulfillmentCancellationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listGFCancellations

> \DigitalRiver\ApiSdk\Model\ListGlobalFulfillmentCancellationsResponse listGFCancellations($created_time, $ending_before, $starting_after, $limit, $ids, $upstream_ids, $state, $fulfillment_order_id, $inventory_item_id)

Returns a list of cancellations

Get all cancellations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new DigitalRiver\ApiSdk\Api\FulfillmentCancellationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$created_time = createdTime[gt]=2020-09-22T12:09:44Z; // map[string,\DateTime] | A filter on the list based on the **createdTime** field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **eq**&mdash;return values where the createdTime field equals to this timestamp   - **gt**&mdash;return values where the createdTime field is after this timestamp   - **gte**&mdash;return values where the createdTime field is after or equal to this timestamp   - **lt**&mdash;return values where the createdTime field is before this timestamp   - **lte**&mdash;return values where the createdTime field is before or equal to this timestamp
// Refer map[string,\DateTime]::$setters in digital-river-php/lib/Model/\DateTime.php to set the properties.
$ending_before = 'ending_before_example'; // string | A cursor for use in pagination. The endingBefore parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with xyz your subsequent calls can include endingBefore=xyz in order to fetch the previous page of the list.

$starting_after = 'starting_after_example'; // string | A cursor for use in pagination. The startingAfter parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with xyz, your subsequent calls can include startingAfter=xyz in order to fetch the next page of the list.

$limit = 56; // int | A limit on the number of objects returned. Limit can range between 1 and 100, and the default is 10.

$ids = array('ids_example'); // string[] | Only return objects with these IDs.
// Refer string[]::$setters in digital-river-php/lib/Model/string.php to set the properties.
$upstream_ids = array('upstream_ids_example'); // string[] | Only return objects with these upstreamIds.
// Refer string[]::$setters in digital-river-php/lib/Model/string.php to set the properties.
$state = 'state_example'; // string | Only return objects in the given state

$fulfillment_order_id = 'fulfillment_order_id_example'; // string | The fulfillment order to retrieve cancellations for.

$inventory_item_id = 'inventory_item_id_example'; // string | The inventory item id to retrieve cancellations for.


try {
    $result = $apiInstance->listGFCancellations($created_time, $ending_before, $starting_after, $limit, $ids, $upstream_ids, $state, $fulfillment_order_id, $inventory_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentCancellationsApi->listGFCancellations: ', $e->getMessage(), PHP_EOL;
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
 **upstream_ids** | [**string[]**](../Model/string.md)| Only return objects with these upstreamIds. | [optional]
 **state** | **string**| Only return objects in the given state | [optional]
 **fulfillment_order_id** | **string**| The fulfillment order to retrieve cancellations for. | [optional]
 **inventory_item_id** | **string**| The inventory item id to retrieve cancellations for. | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\ListGlobalFulfillmentCancellationsResponse**](../Model/ListGlobalFulfillmentCancellationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retrieveGFCancellations

> \DigitalRiver\ApiSdk\Model\GlobalFulfillmentCancellationResponse retrieveGFCancellations($id)

Gets a cancellation by ID

Retrieves the details of a cancellation. Supply the unique identifier of the cancellation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new DigitalRiver\ApiSdk\Api\FulfillmentCancellationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Cancellation ID


try {
    $result = $apiInstance->retrieveGFCancellations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentCancellationsApi->retrieveGFCancellations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Cancellation ID |

### Return type

[**\DigitalRiver\ApiSdk\Model\GlobalFulfillmentCancellationResponse**](../Model/GlobalFulfillmentCancellationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

