# DigitalRiver\ApiSdk\PlansApi

All URIs are relative to *https://api.digitalriver.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPlans**](PlansApi.md#createPlans) | **POST** /plans | Creates a Plan
[**deletePlans**](PlansApi.md#deletePlans) | **DELETE** /plans/{id} | Deletes a Plan by ID
[**listPlans**](PlansApi.md#listPlans) | **GET** /plans | Returns a list of Plans
[**retrievePlans**](PlansApi.md#retrievePlans) | **GET** /plans/{id} | Gets a Plan by ID
[**updatePlans**](PlansApi.md#updatePlans) | **POST** /plans/{id} | Updates a Plan



## createPlans

> \DigitalRiver\ApiSdk\Model\Plan createPlans($plan_request)

Creates a Plan

Submit this request to create a Plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plan_request = new \DigitalRiver\ApiSdk\Model\PlanRequest(); // \DigitalRiver\ApiSdk\Model\PlanRequest | 
// Refer \DigitalRiver\ApiSdk\Model\PlanRequest::$setters in digital-river-php/lib/Model/PlanRequest.php to set the properties.

try {
    $result = $apiInstance->createPlans($plan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->createPlans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plan_request** | [**\DigitalRiver\ApiSdk\Model\PlanRequest**](../Model/PlanRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\Plan**](../Model/Plan.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deletePlans

> deletePlans($id)

Deletes a Plan by ID

Permanently deletes a Plan. In the request, send the plan's unique identifier as a path parameter. Only plans in a <code>draft</code> can be deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Plan identifier


try {
    $apiInstance->deletePlans($id);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->deletePlans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Plan identifier |

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


## listPlans

> \DigitalRiver\ApiSdk\Model\ListPlansResponse listPlans($state, $interval, $ending_before, $starting_after, $limit)

Returns a list of Plans

Gets the Plans specified in the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$state = 'state_example'; // string | The state associated with the Plans you want to retrieve.

$interval = 'interval_example'; // string | The billing interval associated with the Plans you want to retrieve.

$ending_before = 'ending_before_example'; // string | A cursor for use in pagination. The endingBefore parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with xzy, your subsequent calls can include endingBefore=xzy in order to fetch the previous page of the list.

$starting_after = 'starting_after_example'; // string | A cursor for use in pagination. The startingAfter parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with xzy, your subsequent calls can include startingAfter=xzy in order to fetch the next page of the list.

$limit = 56; // int | A limit on the number of objects returned. Limit can range between 1 and 100, and the default is 10.


try {
    $result = $apiInstance->listPlans($state, $interval, $ending_before, $starting_after, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->listPlans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **state** | **string**| The state associated with the Plans you want to retrieve. | [optional]
 **interval** | **string**| The billing interval associated with the Plans you want to retrieve. | [optional]
 **ending_before** | **string**| A cursor for use in pagination. The endingBefore parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with xzy, your subsequent calls can include endingBefore&#x3D;xzy in order to fetch the previous page of the list. | [optional]
 **starting_after** | **string**| A cursor for use in pagination. The startingAfter parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with xzy, your subsequent calls can include startingAfter&#x3D;xzy in order to fetch the next page of the list. | [optional]
 **limit** | **int**| A limit on the number of objects returned. Limit can range between 1 and 100, and the default is 10. | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\ListPlansResponse**](../Model/ListPlansResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retrievePlans

> \DigitalRiver\ApiSdk\Model\Plan retrievePlans($id)

Gets a Plan by ID

Retrieves the details of a Plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Plan identifier.


try {
    $result = $apiInstance->retrievePlans($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->retrievePlans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Plan identifier. |

### Return type

[**\DigitalRiver\ApiSdk\Model\Plan**](../Model/Plan.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updatePlans

> \DigitalRiver\ApiSdk\Model\Plan updatePlans($id, $update_plan_request)

Updates a Plan

Updates the specified Plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Plan identifier.

$update_plan_request = new \DigitalRiver\ApiSdk\Model\UpdatePlanRequest(); // \DigitalRiver\ApiSdk\Model\UpdatePlanRequest | 
// Refer \DigitalRiver\ApiSdk\Model\UpdatePlanRequest::$setters in digital-river-php/lib/Model/UpdatePlanRequest.php to set the properties.

try {
    $result = $apiInstance->updatePlans($id, $update_plan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->updatePlans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The Plan identifier. |
 **update_plan_request** | [**\DigitalRiver\ApiSdk\Model\UpdatePlanRequest**](../Model/UpdatePlanRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\Plan**](../Model/Plan.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

