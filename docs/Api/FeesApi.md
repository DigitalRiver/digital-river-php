# DigitalRiver\ApiSdk\FeesApi

All URIs are relative to *https://www.digitalriver.com/docs/digital-river-api-reference*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFees**](FeesApi.md#createFees) | **POST** /fees | Creates a fee
[**deleteFees**](FeesApi.md#deleteFees) | **DELETE** /fees/{id} | Deletes a fee by identifier
[**listFees**](FeesApi.md#listFees) | **GET** /fees | Returns a list of fees
[**retrieveFees**](FeesApi.md#retrieveFees) | **GET** /fees/{id} | Gets a Fee by identifier
[**updateFees**](FeesApi.md#updateFees) | **POST** /fees/{id} | Updates an existing Fee



## createFees

> \DigitalRiver\ApiSdk\Model\Fee createFees($fee_request)

Creates a fee

This method [adds a new fee](https://docs.digitalriver.com/digital-river-api/regulatory-fees/creating-a-regulator-fee) to an existing [SKU](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/skus).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\FeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fee_request = new \DigitalRiver\ApiSdk\Model\FeeRequest(); // \DigitalRiver\ApiSdk\Model\FeeRequest | 
// Refer \DigitalRiver\ApiSdk\Model\FeeRequest::$setters in digital-river-php/lib/Model/FeeRequest.php to set the properties.

try {
    $result = $apiInstance->createFees($fee_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeesApi->createFees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fee_request** | [**\DigitalRiver\ApiSdk\Model\FeeRequest**](../Model/FeeRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\Fee**](../Model/Fee.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteFees

> deleteFees($id)

Deletes a fee by identifier

Permanently deletes a fee. Supply the unique identifier of the fee.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\FeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Fee ID


try {
    $apiInstance->deleteFees($id);
} catch (Exception $e) {
    echo 'Exception when calling FeesApi->deleteFees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Fee ID |

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


## listFees

> \DigitalRiver\ApiSdk\Model\ListFeesResponse listFees($created_time, $updated_time, $ending_before, $starting_after, $limit, $type, $sku_id, $category, $country, $ids)

Returns a list of fees

Get all Fees.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\FeesApi(
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

$type = 'type_example'; // string | Only return fees of this type.

$sku_id = 'sku_id_example'; // string | Only return fees for this sku.

$category = 'category_example'; // string | Only return fees in this category.

$country = 'country_example'; // string | Only returns fees for this country.

$ids = array('ids_example'); // string[] | Only return objects with these IDs.
// Refer string[]::$setters in digital-river-php/lib/Model/string.php to set the properties.

try {
    $result = $apiInstance->listFees($created_time, $updated_time, $ending_before, $starting_after, $limit, $type, $sku_id, $category, $country, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeesApi->listFees: ', $e->getMessage(), PHP_EOL;
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
 **type** | **string**| Only return fees of this type. | [optional]
 **sku_id** | **string**| Only return fees for this sku. | [optional]
 **category** | **string**| Only return fees in this category. | [optional]
 **country** | **string**| Only returns fees for this country. | [optional]
 **ids** | [**string[]**](../Model/string.md)| Only return objects with these IDs. | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\ListFeesResponse**](../Model/ListFeesResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retrieveFees

> \DigitalRiver\ApiSdk\Model\Fee retrieveFees($id)

Gets a Fee by identifier

Retrieves the details of a fee. You must supply the unique identifier of the fee.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\FeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Fee identifier.


try {
    $result = $apiInstance->retrieveFees($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeesApi->retrieveFees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Fee identifier. |

### Return type

[**\DigitalRiver\ApiSdk\Model\Fee**](../Model/Fee.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateFees

> \DigitalRiver\ApiSdk\Model\Fee updateFees($id, $fee_update_request)

Updates an existing Fee

Updates the specified Fee by setting the values of the parameters passed. Any parameters not provided remain unchanged.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\FeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Fee identifier

$fee_update_request = new \DigitalRiver\ApiSdk\Model\FeeUpdateRequest(); // \DigitalRiver\ApiSdk\Model\FeeUpdateRequest | 
// Refer \DigitalRiver\ApiSdk\Model\FeeUpdateRequest::$setters in digital-river-php/lib/Model/FeeUpdateRequest.php to set the properties.

try {
    $result = $apiInstance->updateFees($id, $fee_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeesApi->updateFees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Fee identifier |
 **fee_update_request** | [**\DigitalRiver\ApiSdk\Model\FeeUpdateRequest**](../Model/FeeUpdateRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\Fee**](../Model/Fee.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

