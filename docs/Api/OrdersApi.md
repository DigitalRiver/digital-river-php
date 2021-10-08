# DigitalRiver\ApiSdk\OrdersApi

All URIs are relative to *https://api.digitalriver.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrders**](OrdersApi.md#createOrders) | **POST** /orders | Creates a new order.
[**listOrders**](OrdersApi.md#listOrders) | **GET** /orders | Returns a list of orders.
[**retrieveOrders**](OrdersApi.md#retrieveOrders) | **GET** /orders/{id} | Gets an order by ID.
[**updateOrders**](OrdersApi.md#updateOrders) | **POST** /orders/{id} | Updates an existing order.



## createOrders

> \DigitalRiver\ApiSdk\Model\Order createOrders($order_request)

Creates a new order.

Creates a new order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_request = new \DigitalRiver\ApiSdk\Model\OrderRequest(); // \DigitalRiver\ApiSdk\Model\OrderRequest | 
// Refer \DigitalRiver\ApiSdk\Model\OrderRequest::$setters in digital-river-php/lib/Model/OrderRequest.php to set the properties.

try {
    $result = $apiInstance->createOrders($order_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->createOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_request** | [**\DigitalRiver\ApiSdk\Model\OrderRequest**](../Model/OrderRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\Order**](../Model/Order.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listOrders

> \DigitalRiver\ApiSdk\Model\ListOrdersResponse listOrders($created_time, $updated_time, $ending_before, $starting_after, $limit, $ids, $upstream_ids, $total_amount, $state, $customer_id, $checkout_id, $application_id, $email, $currency, $sku_id, $in_review, $pending_payment, $accepted, $blocked, $cancelled, $fulfilled, $complete, $returned, $fraud_state, $fraud_state_transitions_blocked, $fraud_state_transitions_review_opened, $fraud_state_transitions_passed, $browser_ip, $charge_type, $subscription_id, $refunded_amount, $locale, $customer_type)

Returns a list of orders.

Get all orders.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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
$total_amount = totalAmount[gt]=20.99; // map[string,string] | A filter on the list based on the **totalAmount** field. The value can be a string or it can be a dictionary with the following options:        - **eq**-return values where the amount field equals to this amount       - **gt**-return values where the amount field is greater than this amount       - **gte**-return values where the amount field is greater than or equal to this amount       - **lt**-return values where the amount field is less than this amount       - **lte**-return values where the amount field is less than or equal to this amount
// Refer map[string,string]::$setters in digital-river-php/lib/Model/string.php to set the properties.
$state = 'state_example'; // string | Only return objects in the given state

$customer_id = 'customer_id_example'; // string | Only return orders for the given customer

$checkout_id = 'checkout_id_example'; // string | Only return orders for the given checkout

$application_id = 'application_id_example'; // string | Only return orders for the given application

$email = 'email_example'; // string | Only return orders with the given email

$currency = 'currency_example'; // string | Only return orders in the given currency

$sku_id = 'sku_id_example'; // string | Only return orders containing this sku

$in_review = 2018-03-25T20:36:00Z; // map[string,\DateTime] | A filter on the list based on the order **stateTransitions** in_review field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **eq** - *return values where the stateTransitions in_review field equals to this timestamp*   - **gt** - *return values where the stateTransitions in_review field is after this timestamp*   - **gte** - *return values where the stateTransitions in_review field is after or equal to this timestamp*   - **lt** - *return values where the stateTransitions in_review field is before this timestamp*   - **lte** - *return values where the stateTransitions in_review field is before or equal to this timestamp*
// Refer map[string,\DateTime]::$setters in digital-river-php/lib/Model/\DateTime.php to set the properties.
$pending_payment = 2018-03-25T20:36:00Z; // map[string,\DateTime] | A filter on the list based on the order **stateTransitions** pending_payment field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **eq** - *return values where the stateTransitions pending_payment field equals to this timestamp*   - **gt** - *return values where the stateTransitions pending_payment field is after this timestamp*   - **gte** - *return values where the stateTransitions pending_payment field is after or equal to this timestamp*   - **lt** - *return values where the stateTransitions pending_payment field is before this timestamp*   - **lte** - *return values where the stateTransitions pending_payment field is before or equal to this timestamp*
// Refer map[string,\DateTime]::$setters in digital-river-php/lib/Model/\DateTime.php to set the properties.
$accepted = 2018-03-25T20:36:00Z; // map[string,\DateTime] | A filter on the list based on the order **stateTransitions** accepted field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **eq** - *return values where the stateTransitions accepted field equals to this timestamp*   - **gt** - *return values where the stateTransitions accepted field is after this timestamp*   - **gte** - *return values where the stateTransitions accepted field is after or equal to this timestamp*   - **lt** - *return values where the stateTransitions accepted field is before this timestamp*   - **lte** - *return values where the stateTransitions accepted field is before or equal to this timestamp*
// Refer map[string,\DateTime]::$setters in digital-river-php/lib/Model/\DateTime.php to set the properties.
$blocked = 2018-03-25T20:36:00Z; // map[string,\DateTime] | A filter on the list based on the order **stateTransitions** blocked field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **eq** - *return values where the stateTransitions blocked field equals to this timestamp*   - **gt** - *return values where the stateTransitions blocked field is after this timestamp*   - **gte** - *return values where the stateTransitions blocked field is after or equal to this timestamp*   - **lt** - *return values where the stateTransitions blocked field is before this timestamp*   - **lte** - *return values where the stateTransitions blocked field is before or equal to this timestamp*
// Refer map[string,\DateTime]::$setters in digital-river-php/lib/Model/\DateTime.php to set the properties.
$cancelled = 2018-03-25T20:36:00Z; // map[string,\DateTime] | A filter on the list based on the order **stateTransitions** cancelled field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **eq** - *return values where the stateTransitions cancelled field equals to this timestamp*   - **gt** - *return values where the stateTransitions cancelled field is after this timestamp*   - **gte** - *return values where the stateTransitions cancelled field is after or equal to this timestamp*   - **lt** - *return values where the stateTransitions cancelled field is before this timestamp*   - **lte** - *return values where the stateTransitions cancelled field is before or equal to this timestamp*
// Refer map[string,\DateTime]::$setters in digital-river-php/lib/Model/\DateTime.php to set the properties.
$fulfilled = 2018-03-25T20:36:00Z; // map[string,\DateTime] | A filter on the list based on the order **stateTransitions** fulfilled field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **eq** - *return values where the stateTransitions fulfilled field equals to this timestamp*   - **gt** - *return values where the stateTransitions fulfilled field is after this timestamp*   - **gte** - *return values where the stateTransitions fulfilled field is after or equal to this timestamp*   - **lt** - *return values where the stateTransitions fulfilled field is before this timestamp*   - **lte** - *return values where the stateTransitions fulfilled field is before or equal to this timestamp*
// Refer map[string,\DateTime]::$setters in digital-river-php/lib/Model/\DateTime.php to set the properties.
$complete = 2018-03-25T20:36:00Z; // map[string,\DateTime] | A filter on the list based on the order **stateTransitions** complete field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **eq** - *return values where the stateTransitions complete field equals to this timestamp*   - **gt** - *return values where the stateTransitions complete field is after this timestamp*   - **gte** - *return values where the stateTransitions complete field is after or equal to this timestamp*   - **lt** - *return values where the stateTransitions complete field is before this timestamp*   - **lte** - *return values where the stateTransitions complete field is before or equal to this timestamp*
// Refer map[string,\DateTime]::$setters in digital-river-php/lib/Model/\DateTime.php to set the properties.
$returned = 2018-03-25T20:36:00Z; // map[string,\DateTime] | A filter on the list based on the order **stateTransitions** returned field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **eq** - *return values where the stateTransitions returned field equals to this timestamp*   - **gt** - *return values where the stateTransitions returned field is after this timestamp*   - **gte** - *return values where the stateTransitions returned field is after or equal to this timestamp*   - **lt** - *return values where the stateTransitions returned field is before this timestamp*   - **lte** - *return values where the stateTransitions returned field is before or equal to this timestamp*
// Refer map[string,\DateTime]::$setters in digital-river-php/lib/Model/\DateTime.php to set the properties.
$fraud_state = 'fraud_state_example'; // string | Only return orders in the given fraudState

$fraud_state_transitions_blocked = 2018-03-25T20:36:00Z; // map[string,\DateTime] | A filter on the list based on the order **fraudStateTransitions** blocked field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **eq** - *return values where the fraudStateTransitions blocked field equals to this timestamp*   - **gt** - *return values where the fraudStateTransitions blocked field is after this timestamp*   - **gte** - *return values where the fraudStateTransitions blocked field is after or equal to this timestamp*   - **lt** - *return values where the fraudStateTransitions blocked field is before this timestamp*   - **lte** - *return values where the fraudStateTransitions blocked field is before or equal to this timestamp*
// Refer map[string,\DateTime]::$setters in digital-river-php/lib/Model/\DateTime.php to set the properties.
$fraud_state_transitions_review_opened = 2018-03-25T20:36:00Z; // map[string,\DateTime] | A filter on the list based on the order **fraudStateTransitions** review_opened field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **eq** - *return values where the fraudStateTransitions review_opened field equals to this timestamp*   - **gt** - *return values where the fraudStateTransitions review_opened field is after this timestamp*   - **gte** - *return values where the fraudStateTransitions review_opened field is after or equal to this timestamp*   - **lt** - *return values where the fraudStateTransitions review_opened field is before this timestamp*   - **lte** - *return values where the fraudStateTransitions review_opened field is before or equal to this timestamp*
// Refer map[string,\DateTime]::$setters in digital-river-php/lib/Model/\DateTime.php to set the properties.
$fraud_state_transitions_passed = 2018-03-25T20:36:00Z; // map[string,\DateTime] | A filter on the list based on the order **fraudStateTransitions** passed field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **eq** - *return values where the fraudStateTransitions passed field equals to this timestamp*   - **gt** - *return values where the fraudStateTransitions passed field is after this timestamp*   - **gte** - *return values where the fraudStateTransitions passed field is after or equal to this timestamp*   - **lt** - *return values where the fraudStateTransitions passed field is before this timestamp*   - **lte** - *return values where the fraudStateTransitions passed field is before or equal to this timestamp*
// Refer map[string,\DateTime]::$setters in digital-river-php/lib/Model/\DateTime.php to set the properties.
$browser_ip = 'browser_ip_example'; // string | Only return checkouts with this browser IP

$charge_type = 'charge_type_example'; // string | Only return orders with this charge type

$subscription_id = 'subscription_id_example'; // string | Only return orders with this subscription identifier

$refunded_amount = 'refunded_amount_example'; // string | Only return orders with this refunded amount

$locale = 'locale_example'; // string | Only return checkouts with this locale

$customer_type = 'customer_type_example'; // string | Only return checkouts with this customer type


try {
    $result = $apiInstance->listOrders($created_time, $updated_time, $ending_before, $starting_after, $limit, $ids, $upstream_ids, $total_amount, $state, $customer_id, $checkout_id, $application_id, $email, $currency, $sku_id, $in_review, $pending_payment, $accepted, $blocked, $cancelled, $fulfilled, $complete, $returned, $fraud_state, $fraud_state_transitions_blocked, $fraud_state_transitions_review_opened, $fraud_state_transitions_passed, $browser_ip, $charge_type, $subscription_id, $refunded_amount, $locale, $customer_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->listOrders: ', $e->getMessage(), PHP_EOL;
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
 **total_amount** | [**map[string,string]**](../Model/string.md)| A filter on the list based on the **totalAmount** field. The value can be a string or it can be a dictionary with the following options:        - **eq**-return values where the amount field equals to this amount       - **gt**-return values where the amount field is greater than this amount       - **gte**-return values where the amount field is greater than or equal to this amount       - **lt**-return values where the amount field is less than this amount       - **lte**-return values where the amount field is less than or equal to this amount | [optional]
 **state** | **string**| Only return objects in the given state | [optional]
 **customer_id** | **string**| Only return orders for the given customer | [optional]
 **checkout_id** | **string**| Only return orders for the given checkout | [optional]
 **application_id** | **string**| Only return orders for the given application | [optional]
 **email** | **string**| Only return orders with the given email | [optional]
 **currency** | **string**| Only return orders in the given currency | [optional]
 **sku_id** | **string**| Only return orders containing this sku | [optional]
 **in_review** | [**map[string,\DateTime]**](../Model/\DateTime.md)| A filter on the list based on the order **stateTransitions** in_review field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **eq** - *return values where the stateTransitions in_review field equals to this timestamp*   - **gt** - *return values where the stateTransitions in_review field is after this timestamp*   - **gte** - *return values where the stateTransitions in_review field is after or equal to this timestamp*   - **lt** - *return values where the stateTransitions in_review field is before this timestamp*   - **lte** - *return values where the stateTransitions in_review field is before or equal to this timestamp* | [optional]
 **pending_payment** | [**map[string,\DateTime]**](../Model/\DateTime.md)| A filter on the list based on the order **stateTransitions** pending_payment field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **eq** - *return values where the stateTransitions pending_payment field equals to this timestamp*   - **gt** - *return values where the stateTransitions pending_payment field is after this timestamp*   - **gte** - *return values where the stateTransitions pending_payment field is after or equal to this timestamp*   - **lt** - *return values where the stateTransitions pending_payment field is before this timestamp*   - **lte** - *return values where the stateTransitions pending_payment field is before or equal to this timestamp* | [optional]
 **accepted** | [**map[string,\DateTime]**](../Model/\DateTime.md)| A filter on the list based on the order **stateTransitions** accepted field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **eq** - *return values where the stateTransitions accepted field equals to this timestamp*   - **gt** - *return values where the stateTransitions accepted field is after this timestamp*   - **gte** - *return values where the stateTransitions accepted field is after or equal to this timestamp*   - **lt** - *return values where the stateTransitions accepted field is before this timestamp*   - **lte** - *return values where the stateTransitions accepted field is before or equal to this timestamp* | [optional]
 **blocked** | [**map[string,\DateTime]**](../Model/\DateTime.md)| A filter on the list based on the order **stateTransitions** blocked field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **eq** - *return values where the stateTransitions blocked field equals to this timestamp*   - **gt** - *return values where the stateTransitions blocked field is after this timestamp*   - **gte** - *return values where the stateTransitions blocked field is after or equal to this timestamp*   - **lt** - *return values where the stateTransitions blocked field is before this timestamp*   - **lte** - *return values where the stateTransitions blocked field is before or equal to this timestamp* | [optional]
 **cancelled** | [**map[string,\DateTime]**](../Model/\DateTime.md)| A filter on the list based on the order **stateTransitions** cancelled field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **eq** - *return values where the stateTransitions cancelled field equals to this timestamp*   - **gt** - *return values where the stateTransitions cancelled field is after this timestamp*   - **gte** - *return values where the stateTransitions cancelled field is after or equal to this timestamp*   - **lt** - *return values where the stateTransitions cancelled field is before this timestamp*   - **lte** - *return values where the stateTransitions cancelled field is before or equal to this timestamp* | [optional]
 **fulfilled** | [**map[string,\DateTime]**](../Model/\DateTime.md)| A filter on the list based on the order **stateTransitions** fulfilled field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **eq** - *return values where the stateTransitions fulfilled field equals to this timestamp*   - **gt** - *return values where the stateTransitions fulfilled field is after this timestamp*   - **gte** - *return values where the stateTransitions fulfilled field is after or equal to this timestamp*   - **lt** - *return values where the stateTransitions fulfilled field is before this timestamp*   - **lte** - *return values where the stateTransitions fulfilled field is before or equal to this timestamp* | [optional]
 **complete** | [**map[string,\DateTime]**](../Model/\DateTime.md)| A filter on the list based on the order **stateTransitions** complete field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **eq** - *return values where the stateTransitions complete field equals to this timestamp*   - **gt** - *return values where the stateTransitions complete field is after this timestamp*   - **gte** - *return values where the stateTransitions complete field is after or equal to this timestamp*   - **lt** - *return values where the stateTransitions complete field is before this timestamp*   - **lte** - *return values where the stateTransitions complete field is before or equal to this timestamp* | [optional]
 **returned** | [**map[string,\DateTime]**](../Model/\DateTime.md)| A filter on the list based on the order **stateTransitions** returned field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **eq** - *return values where the stateTransitions returned field equals to this timestamp*   - **gt** - *return values where the stateTransitions returned field is after this timestamp*   - **gte** - *return values where the stateTransitions returned field is after or equal to this timestamp*   - **lt** - *return values where the stateTransitions returned field is before this timestamp*   - **lte** - *return values where the stateTransitions returned field is before or equal to this timestamp* | [optional]
 **fraud_state** | **string**| Only return orders in the given fraudState | [optional]
 **fraud_state_transitions_blocked** | [**map[string,\DateTime]**](../Model/\DateTime.md)| A filter on the list based on the order **fraudStateTransitions** blocked field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **eq** - *return values where the fraudStateTransitions blocked field equals to this timestamp*   - **gt** - *return values where the fraudStateTransitions blocked field is after this timestamp*   - **gte** - *return values where the fraudStateTransitions blocked field is after or equal to this timestamp*   - **lt** - *return values where the fraudStateTransitions blocked field is before this timestamp*   - **lte** - *return values where the fraudStateTransitions blocked field is before or equal to this timestamp* | [optional]
 **fraud_state_transitions_review_opened** | [**map[string,\DateTime]**](../Model/\DateTime.md)| A filter on the list based on the order **fraudStateTransitions** review_opened field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **eq** - *return values where the fraudStateTransitions review_opened field equals to this timestamp*   - **gt** - *return values where the fraudStateTransitions review_opened field is after this timestamp*   - **gte** - *return values where the fraudStateTransitions review_opened field is after or equal to this timestamp*   - **lt** - *return values where the fraudStateTransitions review_opened field is before this timestamp*   - **lte** - *return values where the fraudStateTransitions review_opened field is before or equal to this timestamp* | [optional]
 **fraud_state_transitions_passed** | [**map[string,\DateTime]**](../Model/\DateTime.md)| A filter on the list based on the order **fraudStateTransitions** passed field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **eq** - *return values where the fraudStateTransitions passed field equals to this timestamp*   - **gt** - *return values where the fraudStateTransitions passed field is after this timestamp*   - **gte** - *return values where the fraudStateTransitions passed field is after or equal to this timestamp*   - **lt** - *return values where the fraudStateTransitions passed field is before this timestamp*   - **lte** - *return values where the fraudStateTransitions passed field is before or equal to this timestamp* | [optional]
 **browser_ip** | **string**| Only return checkouts with this browser IP | [optional]
 **charge_type** | **string**| Only return orders with this charge type | [optional]
 **subscription_id** | **string**| Only return orders with this subscription identifier | [optional]
 **refunded_amount** | **string**| Only return orders with this refunded amount | [optional]
 **locale** | **string**| Only return checkouts with this locale | [optional]
 **customer_type** | **string**| Only return checkouts with this customer type | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\ListOrdersResponse**](../Model/ListOrdersResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retrieveOrders

> \DigitalRiver\ApiSdk\Model\Order retrieveOrders($id)

Gets an order by ID.

Retrieves the details of an order. Supply the unique identifier of the order you would like to retrieve.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Order ID


try {
    $result = $apiInstance->retrieveOrders($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->retrieveOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order ID |

### Return type

[**\DigitalRiver\ApiSdk\Model\Order**](../Model/Order.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateOrders

> \DigitalRiver\ApiSdk\Model\Order updateOrders($id, $update_order_request)

Updates an existing order.

Updates an  existing order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Order ID

$update_order_request = new \DigitalRiver\ApiSdk\Model\UpdateOrderRequest(); // \DigitalRiver\ApiSdk\Model\UpdateOrderRequest | 
// Refer \DigitalRiver\ApiSdk\Model\UpdateOrderRequest::$setters in digital-river-php/lib/Model/UpdateOrderRequest.php to set the properties.

try {
    $result = $apiInstance->updateOrders($id, $update_order_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->updateOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order ID |
 **update_order_request** | [**\DigitalRiver\ApiSdk\Model\UpdateOrderRequest**](../Model/UpdateOrderRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\Order**](../Model/Order.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

