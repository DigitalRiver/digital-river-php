# DigitalRiver\ApiSdk\CheckoutsApi

All URIs are relative to *https://api.digitalriver.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachSourceToCheckout**](CheckoutsApi.md#attachSourceToCheckout) | **POST** /checkouts/{id}/sources/{sourceId} | Attach source to checkout.
[**createCheckouts**](CheckoutsApi.md#createCheckouts) | **POST** /checkouts | Creates a new checkout
[**deleteCheckouts**](CheckoutsApi.md#deleteCheckouts) | **DELETE** /checkouts/{id} | Deletes a checkout by ID.
[**detachSourceToCheckout**](CheckoutsApi.md#detachSourceToCheckout) | **DELETE** /checkouts/{id}/sources/{sourceId} | Deletes a checkout association to source.
[**listCheckouts**](CheckoutsApi.md#listCheckouts) | **GET** /checkouts | Returns a list of checkouts
[**retrieveCheckouts**](CheckoutsApi.md#retrieveCheckouts) | **GET** /checkouts/{id} | Gets a checkout by ID.
[**updateCheckouts**](CheckoutsApi.md#updateCheckouts) | **POST** /checkouts/{id} | Updates an existing checkout



## attachSourceToCheckout

> \DigitalRiver\ApiSdk\Model\Source attachSourceToCheckout($id, $source_id)

Attach source to checkout.

Attach source to checkout. Supply the unique identifier of the checkout.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\CheckoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Checkout ID

$source_id = 'source_id_example'; // string | Source ID


try {
    $result = $apiInstance->attachSourceToCheckout($id, $source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutsApi->attachSourceToCheckout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Checkout ID |
 **source_id** | **string**| Source ID |

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


## createCheckouts

> \DigitalRiver\ApiSdk\Model\Checkout createCheckouts($checkout_request)

Creates a new checkout

Creates a new checkout.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\CheckoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_request = new \DigitalRiver\ApiSdk\Model\CheckoutRequest(); // \DigitalRiver\ApiSdk\Model\CheckoutRequest | 
// Refer \DigitalRiver\ApiSdk\Model\CheckoutRequest::$setters in digital-river-php/lib/Model/CheckoutRequest.php to set the properties.

try {
    $result = $apiInstance->createCheckouts($checkout_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutsApi->createCheckouts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_request** | [**\DigitalRiver\ApiSdk\Model\CheckoutRequest**](../Model/CheckoutRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\Checkout**](../Model/Checkout.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteCheckouts

> deleteCheckouts($id)

Deletes a checkout by ID.

Permanently deletes a checkout. Supply the unique identifier of the checkout.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\CheckoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Checkout ID


try {
    $apiInstance->deleteCheckouts($id);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutsApi->deleteCheckouts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Checkout ID |

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


## detachSourceToCheckout

> detachSourceToCheckout($id, $source_id)

Deletes a checkout association to source.

Detach source from checkout.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\CheckoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Checkout ID

$source_id = 'source_id_example'; // string | Source ID


try {
    $apiInstance->detachSourceToCheckout($id, $source_id);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutsApi->detachSourceToCheckout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Checkout ID |
 **source_id** | **string**| Source ID |

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


## listCheckouts

> \DigitalRiver\ApiSdk\Model\ListCheckoutsResponse listCheckouts($created_time, $updated_time, $ending_before, $starting_after, $limit, $ids, $upstream_ids, $customer_id, $application_id, $email, $currency, $total_amount, $locale, $charge_type, $customer_type, $subscription_id, $browser_ip)

Returns a list of checkouts

Get all checkouts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\CheckoutsApi(
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
$customer_id = 'customer_id_example'; // string | Only return checkouts for the given customer

$application_id = 'application_id_example'; // string | Only return checkouts for the given application

$email = 'email_example'; // string | Only return checkouts with the given email

$currency = 'currency_example'; // string | Only return checkouts in the given currency

$total_amount = totalAmount[gt]=20.99; // map[string,string] | A filter on the list based on the checkout **totalAmount** field. The value can be a string or it can be a dictionary with the following options:    - **eq** - *return values where the totalAmount field equals to this amount*   - **gt** - *return values where the totalAmount field is greater than this amount*   - **gte** - *return values where the totalAmount field is greater than or equal to this amount*   - **lt** - *return values where the totalAmount field is less than this amount*   - **lte** - *return values where the totalAmount field is less than or equal to this amount*
// Refer map[string,string]::$setters in digital-river-php/lib/Model/string.php to set the properties.
$locale = 'locale_example'; // string | Only return checkouts with this locale

$charge_type = 'charge_type_example'; // string | Only return checkouts with this charge type

$customer_type = 'customer_type_example'; // string | Only return checkouts with this customer type

$subscription_id = 'subscription_id_example'; // string | Only return checkouts with the given subscription identifier

$browser_ip = 'browser_ip_example'; // string | Only return checkouts with the given browser IP


try {
    $result = $apiInstance->listCheckouts($created_time, $updated_time, $ending_before, $starting_after, $limit, $ids, $upstream_ids, $customer_id, $application_id, $email, $currency, $total_amount, $locale, $charge_type, $customer_type, $subscription_id, $browser_ip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutsApi->listCheckouts: ', $e->getMessage(), PHP_EOL;
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
 **customer_id** | **string**| Only return checkouts for the given customer | [optional]
 **application_id** | **string**| Only return checkouts for the given application | [optional]
 **email** | **string**| Only return checkouts with the given email | [optional]
 **currency** | **string**| Only return checkouts in the given currency | [optional]
 **total_amount** | [**map[string,string]**](../Model/string.md)| A filter on the list based on the checkout **totalAmount** field. The value can be a string or it can be a dictionary with the following options:    - **eq** - *return values where the totalAmount field equals to this amount*   - **gt** - *return values where the totalAmount field is greater than this amount*   - **gte** - *return values where the totalAmount field is greater than or equal to this amount*   - **lt** - *return values where the totalAmount field is less than this amount*   - **lte** - *return values where the totalAmount field is less than or equal to this amount* | [optional]
 **locale** | **string**| Only return checkouts with this locale | [optional]
 **charge_type** | **string**| Only return checkouts with this charge type | [optional]
 **customer_type** | **string**| Only return checkouts with this customer type | [optional]
 **subscription_id** | **string**| Only return checkouts with the given subscription identifier | [optional]
 **browser_ip** | **string**| Only return checkouts with the given browser IP | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\ListCheckoutsResponse**](../Model/ListCheckoutsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retrieveCheckouts

> \DigitalRiver\ApiSdk\Model\Checkout retrieveCheckouts($id)

Gets a checkout by ID.

Retrieves the details of a checkout. Supply the unique identifier of the checkout.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\CheckoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Checkout ID


try {
    $result = $apiInstance->retrieveCheckouts($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutsApi->retrieveCheckouts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Checkout ID |

### Return type

[**\DigitalRiver\ApiSdk\Model\Checkout**](../Model/Checkout.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCheckouts

> \DigitalRiver\ApiSdk\Model\Checkout updateCheckouts($id, $update_checkout_request)

Updates an existing checkout

Updates an existing checkout.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\CheckoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Checkout ID

$update_checkout_request = new \DigitalRiver\ApiSdk\Model\UpdateCheckoutRequest(); // \DigitalRiver\ApiSdk\Model\UpdateCheckoutRequest | 
// Refer \DigitalRiver\ApiSdk\Model\UpdateCheckoutRequest::$setters in digital-river-php/lib/Model/UpdateCheckoutRequest.php to set the properties.

try {
    $result = $apiInstance->updateCheckouts($id, $update_checkout_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutsApi->updateCheckouts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Checkout ID |
 **update_checkout_request** | [**\DigitalRiver\ApiSdk\Model\UpdateCheckoutRequest**](../Model/UpdateCheckoutRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\Checkout**](../Model/Checkout.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

