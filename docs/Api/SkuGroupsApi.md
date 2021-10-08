# DigitalRiver\ApiSdk\SkuGroupsApi

All URIs are relative to *https://api.digitalriver.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSkuGroups**](SkuGroupsApi.md#createSkuGroups) | **POST** /sku-groups | Creates a SKU Group
[**deleteSkuGroups**](SkuGroupsApi.md#deleteSkuGroups) | **DELETE** /sku-groups/{id} | Deletes a SKU Group by ID
[**listSkuGroups**](SkuGroupsApi.md#listSkuGroups) | **GET** /sku-groups | Returns a list of SKU Groups
[**retrieveSkuGroups**](SkuGroupsApi.md#retrieveSkuGroups) | **GET** /sku-groups/{id} | Gets a SKU Group by ID
[**updateSkuGroups**](SkuGroupsApi.md#updateSkuGroups) | **PUT** /sku-groups/{id} | Updates a SKU Group



## createSkuGroups

> \DigitalRiver\ApiSdk\Model\SkuGroup createSkuGroups($sku_group_request)

Creates a SKU Group

Creates a SKU Group that can be used to group similiar SKUs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\SkuGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku_group_request = new \DigitalRiver\ApiSdk\Model\SkuGroupRequest(); // \DigitalRiver\ApiSdk\Model\SkuGroupRequest | 
// Refer \DigitalRiver\ApiSdk\Model\SkuGroupRequest::$setters in digital-river-php/lib/Model/SkuGroupRequest.php to set the properties.

try {
    $result = $apiInstance->createSkuGroups($sku_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkuGroupsApi->createSkuGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku_group_request** | [**\DigitalRiver\ApiSdk\Model\SkuGroupRequest**](../Model/SkuGroupRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\SkuGroup**](../Model/SkuGroup.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteSkuGroups

> deleteSkuGroups($id)

Deletes a SKU Group by ID

Permanently deletes a SkuGroup. Supply the unique identifier of the SkuGroup.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\SkuGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | SKU Group identifier


try {
    $apiInstance->deleteSkuGroups($id);
} catch (Exception $e) {
    echo 'Exception when calling SkuGroupsApi->deleteSkuGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| SKU Group identifier |

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


## listSkuGroups

> \DigitalRiver\ApiSdk\Model\ListSkuGroupsResponse listSkuGroups($created_time, $updated_time, $ending_before, $starting_after, $limit, $ids)

Returns a list of SKU Groups

Gets the SKU Groups specified in the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\SkuGroupsApi(
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

try {
    $result = $apiInstance->listSkuGroups($created_time, $updated_time, $ending_before, $starting_after, $limit, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkuGroupsApi->listSkuGroups: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\DigitalRiver\ApiSdk\Model\ListSkuGroupsResponse**](../Model/ListSkuGroupsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retrieveSkuGroups

> \DigitalRiver\ApiSdk\Model\SkuGroup retrieveSkuGroups($id)

Gets a SKU Group by ID

Retrieves the details of a SKU Group. You must supply the unique identifier of the SKU Group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\SkuGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | SKU Group identifier.


try {
    $result = $apiInstance->retrieveSkuGroups($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkuGroupsApi->retrieveSkuGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| SKU Group identifier. |

### Return type

[**\DigitalRiver\ApiSdk\Model\SkuGroup**](../Model/SkuGroup.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateSkuGroups

> \DigitalRiver\ApiSdk\Model\SkuGroup updateSkuGroups($id, $update_sku_group_request)

Updates a SKU Group

Updates the specified SKU Group by setting the values of the parameters passed. Any parameters not provided remain unchanged.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\SkuGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The SKU Group identifier.

$update_sku_group_request = new \DigitalRiver\ApiSdk\Model\UpdateSkuGroupRequest(); // \DigitalRiver\ApiSdk\Model\UpdateSkuGroupRequest | 
// Refer \DigitalRiver\ApiSdk\Model\UpdateSkuGroupRequest::$setters in digital-river-php/lib/Model/UpdateSkuGroupRequest.php to set the properties.

try {
    $result = $apiInstance->updateSkuGroups($id, $update_sku_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkuGroupsApi->updateSkuGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The SKU Group identifier. |
 **update_sku_group_request** | [**\DigitalRiver\ApiSdk\Model\UpdateSkuGroupRequest**](../Model/UpdateSkuGroupRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\SkuGroup**](../Model/SkuGroup.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

