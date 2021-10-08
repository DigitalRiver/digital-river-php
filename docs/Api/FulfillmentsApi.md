# DigitalRiver\ApiSdk\FulfillmentsApi

All URIs are relative to *https://api.digitalriver.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFulfillments**](FulfillmentsApi.md#createFulfillments) | **POST** /fulfillments | Creates a Fulfillment
[**listFulfillments**](FulfillmentsApi.md#listFulfillments) | **GET** /fulfillments | Returns a list of Fulfillments.
[**retrieveFulfillments**](FulfillmentsApi.md#retrieveFulfillments) | **GET** /fulfillments/{id} | Gets a Fulfillment by unique identifier



## createFulfillments

> \DigitalRiver\ApiSdk\Model\Fulfillment createFulfillments($fulfillment_request)

Creates a Fulfillment

Fulfills and/or cancels all or part of an order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\FulfillmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_request = new \DigitalRiver\ApiSdk\Model\FulfillmentRequest(); // \DigitalRiver\ApiSdk\Model\FulfillmentRequest | 
// Refer \DigitalRiver\ApiSdk\Model\FulfillmentRequest::$setters in digital-river-php/lib/Model/FulfillmentRequest.php to set the properties.

try {
    $result = $apiInstance->createFulfillments($fulfillment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentsApi->createFulfillments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_request** | [**\DigitalRiver\ApiSdk\Model\FulfillmentRequest**](../Model/FulfillmentRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\Fulfillment**](../Model/Fulfillment.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listFulfillments

> \DigitalRiver\ApiSdk\Model\ListFulfillmentsResponse listFulfillments($created_time, $ending_before, $starting_after, $limit, $ids, $order_id, $sku_id, $tracking_company, $tracking_number)

Returns a list of Fulfillments.

Gets all the Fulfillments specified in the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\FulfillmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$created_time = createdTime[gt]=2020-09-22T12:09:44Z; // map[string,\DateTime] | A filter on the list based on the **createdTime** field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **gt**&mdash;return values where the createdTime field is after this timestamp   - **gte**&mdash;return values where the createdTime field is after or equal to this timestamp   - **lt**&mdash;return values where the createdTime field is before this timestamp   - **lte**&mdash;return values where the createdTime field is before or equal to this timestamp
// Refer map[string,\DateTime]::$setters in digital-river-php/lib/Model/\DateTime.php to set the properties.
$ending_before = 'ending_before_example'; // string | A cursor for use in pagination. The endingBefore parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with xyz your subsequent calls can include endingBefore=xyz in order to fetch the previous page of the list.

$starting_after = 'starting_after_example'; // string | A cursor for use in pagination. The startingAfter parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with xyz, your subsequent calls can include startingAfter=xyz in order to fetch the next page of the list.

$limit = 56; // int | A limit on the number of objects returned. Limit can range between 1 and 100, and the default is 10.

$ids = array('ids_example'); // string[] | Only return objects with these IDs.
// Refer string[]::$setters in digital-river-php/lib/Model/string.php to set the properties.
$order_id = 'order_id_example'; // string | The identifier of the order associated with the Fulfillment you want to retrieve.

$sku_id = 'sku_id_example'; // string | The identifier of the SKU associated with the Fulfillments you want to retrieve.

$tracking_company = 'tracking_company_example'; // string | The tracking company associated with the Fulfillments you want to retrieve.

$tracking_number = 'tracking_number_example'; // string | The tracking number associated with the Fulfillments you want to retrieve.


try {
    $result = $apiInstance->listFulfillments($created_time, $ending_before, $starting_after, $limit, $ids, $order_id, $sku_id, $tracking_company, $tracking_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentsApi->listFulfillments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **created_time** | [**map[string,\DateTime]**](../Model/\DateTime.md)| A filter on the list based on the **createdTime** field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **gt**&amp;mdash;return values where the createdTime field is after this timestamp   - **gte**&amp;mdash;return values where the createdTime field is after or equal to this timestamp   - **lt**&amp;mdash;return values where the createdTime field is before this timestamp   - **lte**&amp;mdash;return values where the createdTime field is before or equal to this timestamp | [optional]
 **ending_before** | **string**| A cursor for use in pagination. The endingBefore parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with xyz your subsequent calls can include endingBefore&#x3D;xyz in order to fetch the previous page of the list. | [optional]
 **starting_after** | **string**| A cursor for use in pagination. The startingAfter parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with xyz, your subsequent calls can include startingAfter&#x3D;xyz in order to fetch the next page of the list. | [optional]
 **limit** | **int**| A limit on the number of objects returned. Limit can range between 1 and 100, and the default is 10. | [optional]
 **ids** | [**string[]**](../Model/string.md)| Only return objects with these IDs. | [optional]
 **order_id** | **string**| The identifier of the order associated with the Fulfillment you want to retrieve. | [optional]
 **sku_id** | **string**| The identifier of the SKU associated with the Fulfillments you want to retrieve. | [optional]
 **tracking_company** | **string**| The tracking company associated with the Fulfillments you want to retrieve. | [optional]
 **tracking_number** | **string**| The tracking number associated with the Fulfillments you want to retrieve. | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\ListFulfillmentsResponse**](../Model/ListFulfillmentsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retrieveFulfillments

> \DigitalRiver\ApiSdk\Model\Fulfillment retrieveFulfillments($id)

Gets a Fulfillment by unique identifier

Retrieves the details of a Fulfillment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\FulfillmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The unique identifier of a Fulfillment.


try {
    $result = $apiInstance->retrieveFulfillments($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentsApi->retrieveFulfillments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The unique identifier of a Fulfillment. |

### Return type

[**\DigitalRiver\ApiSdk\Model\Fulfillment**](../Model/Fulfillment.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

