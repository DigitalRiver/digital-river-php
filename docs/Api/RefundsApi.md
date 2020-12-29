# DigitalRiver\ApiSdk\RefundsApi

All URIs are relative to *https://www.digitalriver.com/docs/digital-river-api-reference*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRefunds**](RefundsApi.md#createRefunds) | **POST** /refunds | Creates a refund for an order.
[**listRefunds**](RefundsApi.md#listRefunds) | **GET** /refunds | Returns a list of refunds
[**retrieveRefunds**](RefundsApi.md#retrieveRefunds) | **GET** /refunds/{id} | Gets a refund by ID.
[**updateRefunds**](RefundsApi.md#updateRefunds) | **POST** /refunds/{id} | Updates a refund for an order or a specific order charge.



## createRefunds

> \DigitalRiver\ApiSdk\Model\Refund createRefunds($refund_request)

Creates a refund for an order.

Refunds all all or part of an order charge.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$refund_request = new \DigitalRiver\ApiSdk\Model\RefundRequest(); // \DigitalRiver\ApiSdk\Model\RefundRequest | 
// Refer \DigitalRiver\ApiSdk\Model\RefundRequest::$setters in digital-river-php/lib/Model/RefundRequest.php to set the properties.

try {
    $result = $apiInstance->createRefunds($refund_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->createRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refund_request** | [**\DigitalRiver\ApiSdk\Model\RefundRequest**](../Model/RefundRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\Refund**](../Model/Refund.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listRefunds

> \DigitalRiver\ApiSdk\Model\ListRefundsResponse listRefunds($created_time, $ending_before, $starting_after, $limit, $state, $ids, $order_id, $sku_id, $reason, $failure_reason, $refunded_amount, $amount)

Returns a list of refunds

Get all refunds.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\RefundsApi(
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

$state = 'state_example'; // string | Only return objects in the given state

$ids = array('ids_example'); // string[] | Only return refunds with the given IDs
// Refer string[]::$setters in digital-river-php/lib/Model/string.php to set the properties.
$order_id = 'order_id_example'; // string | The order to retrieve refunds for.

$sku_id = 'sku_id_example'; // string | The sku to retrieve refunds for.

$reason = 'reason_example'; // string | Retrieve refunds with this reason.

$failure_reason = 'failure_reason_example'; // string | Retrieve refunds that failed for this reason.

$refunded_amount = 20.99; // map[string,string] | A filter on the list based on the **amount** field. The value can be a string or it can be a dictionary with the following options:    - **eq** - *return values where the amount field equals to this amount*   - **gt** - *return values where the amount field is greater than this amount*   - **gte** - *return values where the amount field is greater than or equal to this amount*   - **lt** - *return values where the amount field is less than this amount*   - **lte** - *return values where the amount field is less than or equal to this amount*
// Refer map[string,string]::$setters in digital-river-php/lib/Model/string.php to set the properties.
$amount = 20.99; // map[string,string] | A filter on the list based on the **amount** field. The value can be a string or it can be a dictionary with the following options:    - **eq** - *return values where the amount field equals to this amount*   - **gt** - *return values where the amount field is greater than this amount*   - **gte** - *return values where the amount field is greater than or equal to this amount*   - **lt** - *return values where the amount field is less than this amount*   - **lte** - *return values where the amount field is less than or equal to this amount*
// Refer map[string,string]::$setters in digital-river-php/lib/Model/string.php to set the properties.

try {
    $result = $apiInstance->listRefunds($created_time, $ending_before, $starting_after, $limit, $state, $ids, $order_id, $sku_id, $reason, $failure_reason, $refunded_amount, $amount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->listRefunds: ', $e->getMessage(), PHP_EOL;
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
 **state** | **string**| Only return objects in the given state | [optional]
 **ids** | [**string[]**](../Model/string.md)| Only return refunds with the given IDs | [optional]
 **order_id** | **string**| The order to retrieve refunds for. | [optional]
 **sku_id** | **string**| The sku to retrieve refunds for. | [optional]
 **reason** | **string**| Retrieve refunds with this reason. | [optional]
 **failure_reason** | **string**| Retrieve refunds that failed for this reason. | [optional]
 **refunded_amount** | [**map[string,string]**](../Model/string.md)| A filter on the list based on the **amount** field. The value can be a string or it can be a dictionary with the following options:    - **eq** - *return values where the amount field equals to this amount*   - **gt** - *return values where the amount field is greater than this amount*   - **gte** - *return values where the amount field is greater than or equal to this amount*   - **lt** - *return values where the amount field is less than this amount*   - **lte** - *return values where the amount field is less than or equal to this amount* | [optional]
 **amount** | [**map[string,string]**](../Model/string.md)| A filter on the list based on the **amount** field. The value can be a string or it can be a dictionary with the following options:    - **eq** - *return values where the amount field equals to this amount*   - **gt** - *return values where the amount field is greater than this amount*   - **gte** - *return values where the amount field is greater than or equal to this amount*   - **lt** - *return values where the amount field is less than this amount*   - **lte** - *return values where the amount field is less than or equal to this amount* | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\ListRefundsResponse**](../Model/ListRefundsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retrieveRefunds

> \DigitalRiver\ApiSdk\Model\Refund retrieveRefunds($id)

Gets a refund by ID.

Retrieves the details of a refund. Supply the unique identifier of the refund.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Refund ID


try {
    $result = $apiInstance->retrieveRefunds($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->retrieveRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Refund ID |

### Return type

[**\DigitalRiver\ApiSdk\Model\Refund**](../Model/Refund.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateRefunds

> \DigitalRiver\ApiSdk\Model\Refund updateRefunds($id, $update_refund_request)

Updates a refund for an order or a specific order charge.

Updates the specified refund by setting the values of the parameters passed. Any parameters not provided will be left unchanged. This request only accepts metadata as an argument.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Refund ID

$update_refund_request = new \DigitalRiver\ApiSdk\Model\UpdateRefundRequest(); // \DigitalRiver\ApiSdk\Model\UpdateRefundRequest | 
// Refer \DigitalRiver\ApiSdk\Model\UpdateRefundRequest::$setters in digital-river-php/lib/Model/UpdateRefundRequest.php to set the properties.

try {
    $result = $apiInstance->updateRefunds($id, $update_refund_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->updateRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Refund ID |
 **update_refund_request** | [**\DigitalRiver\ApiSdk\Model\UpdateRefundRequest**](../Model/UpdateRefundRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\Refund**](../Model/Refund.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

