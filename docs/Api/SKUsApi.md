# DigitalRiver\ApiSdk\SKUsApi

All URIs are relative to *https://www.digitalriver.com/docs/digital-river-api-reference*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSkus**](SKUsApi.md#createSkus) | **POST** /skus | Creates a SKU
[**deleteSkus**](SKUsApi.md#deleteSkus) | **DELETE** /skus/{id} | Deletes a SKU by ID
[**listSkus**](SKUsApi.md#listSkus) | **GET** /skus | Returns a list of SKUs
[**retrieveSkus**](SKUsApi.md#retrieveSkus) | **GET** /skus/{id} | Gets a SKU by ID
[**updateSkus**](SKUsApi.md#updateSkus) | **POST** /skus/{id} | Updates a SKU
[**upsertSkus**](SKUsApi.md#upsertSkus) | **PUT** /skus/{id} | Upserts a SKU



## createSkus

> \DigitalRiver\ApiSdk\Model\Sku createSkus($sku_request)

Creates a SKU

Submit this request to [create a SKU](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/skus/creating-and-updating-skus).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\SKUsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku_request = new \DigitalRiver\ApiSdk\Model\SkuRequest(); // \DigitalRiver\ApiSdk\Model\SkuRequest | 
// Refer \DigitalRiver\ApiSdk\Model\SkuRequest::$setters in digital-river-php/lib/Model/SkuRequest.php to set the properties.

try {
    $result = $apiInstance->createSkus($sku_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SKUsApi->createSkus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku_request** | [**\DigitalRiver\ApiSdk\Model\SkuRequest**](../Model/SkuRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\Sku**](../Model/Sku.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteSkus

> deleteSkus($id)

Deletes a SKU by ID

Permanently deletes a SKU. Supply the unique identifier of the SKU.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\SKUsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | SKU identifier


try {
    $apiInstance->deleteSkus($id);
} catch (Exception $e) {
    echo 'Exception when calling SKUsApi->deleteSkus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| SKU identifier |

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


## listSkus

> \DigitalRiver\ApiSdk\Model\ListSkusResponse listSkus($created_time, $updated_time, $ending_before, $starting_after, $limit, $ids, $eccn, $part_number, $hs_code, $tax_code)

Returns a list of SKUs

Gets the SKUs specified in the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\SKUsApi(
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
$eccn = 'eccn_example'; // string | The [Export Control Classification Number (ECCN)](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/skus/creating-skus/setting-the-eccn) associated with the SKUs you want to retrieve.

$part_number = 'part_number_example'; // string | The [partNumber](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/skus/creating-skus#how-to-specify-a-physical-or-digital-product) associated with the SKUs you want to retrieve.

$hs_code = 'hs_code_example'; // string | The [hsCode](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/skus/creating-skus) associated with the SKUs you want to retrieve.

$tax_code = 'tax_code_example'; // string | The [taxCode](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/skus/creating-skus/setting-the-tax-code) associated with the SKUs you want to retrieve.


try {
    $result = $apiInstance->listSkus($created_time, $updated_time, $ending_before, $starting_after, $limit, $ids, $eccn, $part_number, $hs_code, $tax_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SKUsApi->listSkus: ', $e->getMessage(), PHP_EOL;
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
 **eccn** | **string**| The [Export Control Classification Number (ECCN)](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/skus/creating-skus/setting-the-eccn) associated with the SKUs you want to retrieve. | [optional]
 **part_number** | **string**| The [partNumber](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/skus/creating-skus#how-to-specify-a-physical-or-digital-product) associated with the SKUs you want to retrieve. | [optional]
 **hs_code** | **string**| The [hsCode](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/skus/creating-skus) associated with the SKUs you want to retrieve. | [optional]
 **tax_code** | **string**| The [taxCode](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/skus/creating-skus/setting-the-tax-code) associated with the SKUs you want to retrieve. | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\ListSkusResponse**](../Model/ListSkusResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retrieveSkus

> \DigitalRiver\ApiSdk\Model\Sku retrieveSkus($id)

Gets a SKU by ID

Retrieves the details of a SKU. You must supply the unique identifier of the SKU.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\SKUsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | SKU identifier.


try {
    $result = $apiInstance->retrieveSkus($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SKUsApi->retrieveSkus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| SKU identifier. |

### Return type

[**\DigitalRiver\ApiSdk\Model\Sku**](../Model/Sku.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateSkus

> \DigitalRiver\ApiSdk\Model\Sku updateSkus($id, $update_sku_request)

Updates a SKU

Updates the specified SKU by setting the values of the parameters passed. Any parameters not provided remain unchanged.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\SKUsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The SKU identifier.

$update_sku_request = new \DigitalRiver\ApiSdk\Model\UpdateSkuRequest(); // \DigitalRiver\ApiSdk\Model\UpdateSkuRequest | 
// Refer \DigitalRiver\ApiSdk\Model\UpdateSkuRequest::$setters in digital-river-php/lib/Model/UpdateSkuRequest.php to set the properties.

try {
    $result = $apiInstance->updateSkus($id, $update_sku_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SKUsApi->updateSkus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The SKU identifier. |
 **update_sku_request** | [**\DigitalRiver\ApiSdk\Model\UpdateSkuRequest**](../Model/UpdateSkuRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\Sku**](../Model/Sku.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## upsertSkus

> \DigitalRiver\ApiSdk\Model\Sku upsertSkus($id, $sku_upsert_request)

Upserts a SKU

Submit this request to [upsert](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/skus/upserting-skus) the specified SKU.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\SKUsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The SKU identifier.

$sku_upsert_request = new \DigitalRiver\ApiSdk\Model\SkuUpsertRequest(); // \DigitalRiver\ApiSdk\Model\SkuUpsertRequest | 
// Refer \DigitalRiver\ApiSdk\Model\SkuUpsertRequest::$setters in digital-river-php/lib/Model/SkuUpsertRequest.php to set the properties.

try {
    $result = $apiInstance->upsertSkus($id, $sku_upsert_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SKUsApi->upsertSkus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The SKU identifier. |
 **sku_upsert_request** | [**\DigitalRiver\ApiSdk\Model\SkuUpsertRequest**](../Model/SkuUpsertRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\Sku**](../Model/Sku.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

