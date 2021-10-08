# DigitalRiver\ApiSdk\FulfillmentOrdersApi

All URIs are relative to *https://api.digitalriver.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFulfillmentOrders**](FulfillmentOrdersApi.md#createFulfillmentOrders) | **POST** /fulfillment-orders | Creates a new Fulfillment order
[**listFulfillmentOrders**](FulfillmentOrdersApi.md#listFulfillmentOrders) | **GET** /fulfillment-orders | Returns a list of Fulfillment orders.
[**retrieveFulfillmentOrders**](FulfillmentOrdersApi.md#retrieveFulfillmentOrders) | **GET** /fulfillment-orders/{id} | Gets a Fulfillment order by ID.



## createFulfillmentOrders

> \DigitalRiver\ApiSdk\Model\GlobalFulfillmentOrder createFulfillmentOrders($global_fulfillment_order_request)

Creates a new Fulfillment order

Creates a new Fulfillment order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new DigitalRiver\ApiSdk\Api\FulfillmentOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$global_fulfillment_order_request = new \DigitalRiver\ApiSdk\Model\GlobalFulfillmentOrderRequest(); // \DigitalRiver\ApiSdk\Model\GlobalFulfillmentOrderRequest | 
// Refer \DigitalRiver\ApiSdk\Model\GlobalFulfillmentOrderRequest::$setters in digital-river-php/lib/Model/GlobalFulfillmentOrderRequest.php to set the properties.

try {
    $result = $apiInstance->createFulfillmentOrders($global_fulfillment_order_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentOrdersApi->createFulfillmentOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **global_fulfillment_order_request** | [**\DigitalRiver\ApiSdk\Model\GlobalFulfillmentOrderRequest**](../Model/GlobalFulfillmentOrderRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\GlobalFulfillmentOrder**](../Model/GlobalFulfillmentOrder.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listFulfillmentOrders

> \DigitalRiver\ApiSdk\Model\InlineResponse200 listFulfillmentOrders($created_time, $updated_time, $ending_before, $starting_after, $limit, $ids, $upstream_ids)

Returns a list of Fulfillment orders.

Get all Fulfillment orders.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new DigitalRiver\ApiSdk\Api\FulfillmentOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$created_time = createdTime[gt]=2020-09-22T12:09:44Z; // map[string,\DateTime] | A filter on the list based on the **createdTime** field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **eq**&mdash;return values where the createdTime field equals to this timestamp   - **gt**&mdash;return values where the createdTime field is after this timestamp   - **gte**&mdash;return values where the createdTime field is after or equal to this timestamp   - **lt**&mdash;return values where the createdTime field is before this timestamp   - **lte**&mdash;return values where the createdTime field is before or equal to this timestamp
// Refer map[string,\DateTime]::$setters in digital-river-php/lib/Model/\DateTime.php to set the properties.
$updated_time = updatedTime[gt]=2020-09-22T12:09:44Z; // map[string,\DateTime] | A filter on the list based on the **updatedTime** field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **eq**&mdash;return values where the updatedTime field equals this timestamp   - **gt**&mdash;return values where the updatedTime field is after this timestamp   - **gte**&mdash;return values where the updatedTime field is after or equal to this timestamp   - **lt**&mdash;return values where the updatedTime field is before this timestamp   - **lte**&mdash;return values where the updatedTime field is before or equal to this timestamp
// Refer map[string,\DateTime]::$setters in digital-river-php/lib/Model/\DateTime.php to set the properties.
$ending_before = 'ending_before_example'; // string | A cursor for use in pagination. The endingBefore parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with xyz your subsequent calls can include endingBefore=xyz in order to fetch the previous page of the list.

$starting_after = 'starting_after_example'; // string | A cursor for use in pagination. The startingAfter parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with xyz, your subsequent calls can include startingAfter=xyz in order to fetch the next page of the list.

$limit = 56; // int | A limit on the number of objects returned. Limit can range between 1 and 100, and the default is 10.

$ids = array('ids_example'); // string[] | Only return objects with these IDs.
// Refer string[]::$setters in digital-river-php/lib/Model/string.php to set the properties.
$upstream_ids = array('upstream_ids_example'); // string[] | Only return objects with these upstreamIds.
// Refer string[]::$setters in digital-river-php/lib/Model/string.php to set the properties.

try {
    $result = $apiInstance->listFulfillmentOrders($created_time, $updated_time, $ending_before, $starting_after, $limit, $ids, $upstream_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentOrdersApi->listFulfillmentOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **created_time** | [**map[string,\DateTime]**](../Model/\DateTime.md)| A filter on the list based on the **createdTime** field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **eq**&amp;mdash;return values where the createdTime field equals to this timestamp   - **gt**&amp;mdash;return values where the createdTime field is after this timestamp   - **gte**&amp;mdash;return values where the createdTime field is after or equal to this timestamp   - **lt**&amp;mdash;return values where the createdTime field is before this timestamp   - **lte**&amp;mdash;return values where the createdTime field is before or equal to this timestamp | [optional]
 **updated_time** | [**map[string,\DateTime]**](../Model/\DateTime.md)| A filter on the list based on the **updatedTime** field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **eq**&amp;mdash;return values where the updatedTime field equals this timestamp   - **gt**&amp;mdash;return values where the updatedTime field is after this timestamp   - **gte**&amp;mdash;return values where the updatedTime field is after or equal to this timestamp   - **lt**&amp;mdash;return values where the updatedTime field is before this timestamp   - **lte**&amp;mdash;return values where the updatedTime field is before or equal to this timestamp | [optional]
 **ending_before** | **string**| A cursor for use in pagination. The endingBefore parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with xyz your subsequent calls can include endingBefore&#x3D;xyz in order to fetch the previous page of the list. | [optional]
 **starting_after** | **string**| A cursor for use in pagination. The startingAfter parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with xyz, your subsequent calls can include startingAfter&#x3D;xyz in order to fetch the next page of the list. | [optional]
 **limit** | **int**| A limit on the number of objects returned. Limit can range between 1 and 100, and the default is 10. | [optional]
 **ids** | [**string[]**](../Model/string.md)| Only return objects with these IDs. | [optional]
 **upstream_ids** | [**string[]**](../Model/string.md)| Only return objects with these upstreamIds. | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retrieveFulfillmentOrders

> \DigitalRiver\ApiSdk\Model\GlobalFulfillmentOrder retrieveFulfillmentOrders($id)

Gets a Fulfillment order by ID.

Retrieves the details of a Fulfillment order. You must supply the unique identifier of the Fulfillment order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new DigitalRiver\ApiSdk\Api\FulfillmentOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Fulfillment order identifier.


try {
    $result = $apiInstance->retrieveFulfillmentOrders($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentOrdersApi->retrieveFulfillmentOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Fulfillment order identifier. |

### Return type

[**\DigitalRiver\ApiSdk\Model\GlobalFulfillmentOrder**](../Model/GlobalFulfillmentOrder.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

