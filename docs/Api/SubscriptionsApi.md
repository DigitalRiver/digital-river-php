# DigitalRiver\ApiSdk\SubscriptionsApi

All URIs are relative to *https://api.digitalriver.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSubscriptions**](SubscriptionsApi.md#deleteSubscriptions) | **DELETE** /subscriptions/{id} | Deletes a Subscription by ID
[**listSubscriptions**](SubscriptionsApi.md#listSubscriptions) | **GET** /subscriptions | Returns a list of Subscriptions
[**retrieveSubscriptions**](SubscriptionsApi.md#retrieveSubscriptions) | **GET** /subscriptions/{id} | Gets a Subscription by ID
[**updateSubscriptions**](SubscriptionsApi.md#updateSubscriptions) | **POST** /subscriptions/{id} | Updates a Subscription



## deleteSubscriptions

> deleteSubscriptions($id)

Deletes a Subscription by ID

Permanently deletes a subscription. Supply the unique identifier of the Subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Subscription identifier


try {
    $apiInstance->deleteSubscriptions($id);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->deleteSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Subscription identifier |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listSubscriptions

> \DigitalRiver\ApiSdk\Model\ListSubscriptionsResponse listSubscriptions($plan_id, $state, $customer_id, $ending_before, $starting_after, $limit)

Returns a list of Subscriptions

Gets the Subscriptions specified in the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plan_id = 'plan_id_example'; // string | The identifier of the plan associated with the subscriptions you want to retrieve.

$state = 'state_example'; // string | The state associated with the subscriptions you want to retrieve.

$customer_id = 'customer_id_example'; // string | The identifer of the subscribing customer of the subscriptions you want to retrieve.

$ending_before = 'ending_before_example'; // string | A cursor for use in pagination. The endingBefore parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with xzy, your subsequent calls can include endingBefore=xzy in order to fetch the previous page of the list.

$starting_after = 'starting_after_example'; // string | A cursor for use in pagination. The startingAfter parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with xzy, your subsequent calls can include startingAfter=xzy in order to fetch the next page of the list.

$limit = 56; // int | A limit on the number of objects returned. Limit can range between 1 and 100, and the default is 10.


try {
    $result = $apiInstance->listSubscriptions($plan_id, $state, $customer_id, $ending_before, $starting_after, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->listSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plan_id** | **string**| The identifier of the plan associated with the subscriptions you want to retrieve. | [optional]
 **state** | **string**| The state associated with the subscriptions you want to retrieve. | [optional]
 **customer_id** | **string**| The identifer of the subscribing customer of the subscriptions you want to retrieve. | [optional]
 **ending_before** | **string**| A cursor for use in pagination. The endingBefore parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with xzy, your subsequent calls can include endingBefore&#x3D;xzy in order to fetch the previous page of the list. | [optional]
 **starting_after** | **string**| A cursor for use in pagination. The startingAfter parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with xzy, your subsequent calls can include startingAfter&#x3D;xzy in order to fetch the next page of the list. | [optional]
 **limit** | **int**| A limit on the number of objects returned. Limit can range between 1 and 100, and the default is 10. | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\ListSubscriptionsResponse**](../Model/ListSubscriptionsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retrieveSubscriptions

> \DigitalRiver\ApiSdk\Model\Subscription retrieveSubscriptions($id)

Gets a Subscription by ID

Retrieves the details of a Subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Subscription identifier.


try {
    $result = $apiInstance->retrieveSubscriptions($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->retrieveSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Subscription identifier. |

### Return type

[**\DigitalRiver\ApiSdk\Model\Subscription**](../Model/Subscription.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateSubscriptions

> \DigitalRiver\ApiSdk\Model\Subscription updateSubscriptions($id, $update_subscription_request)

Updates a Subscription

Updates the specified Subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Subscription identifier.

$update_subscription_request = new \DigitalRiver\ApiSdk\Model\UpdateSubscriptionRequest(); // \DigitalRiver\ApiSdk\Model\UpdateSubscriptionRequest | 
// Refer \DigitalRiver\ApiSdk\Model\UpdateSubscriptionRequest::$setters in digital-river-php/lib/Model/UpdateSubscriptionRequest.php to set the properties.

try {
    $result = $apiInstance->updateSubscriptions($id, $update_subscription_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->updateSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The Subscription identifier. |
 **update_subscription_request** | [**\DigitalRiver\ApiSdk\Model\UpdateSubscriptionRequest**](../Model/UpdateSubscriptionRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\Subscription**](../Model/Subscription.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

