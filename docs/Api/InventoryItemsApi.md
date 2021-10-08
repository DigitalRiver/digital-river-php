# DigitalRiver\ApiSdk\InventoryItemsApi

All URIs are relative to *https://api.digitalriver.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createInventoryItems**](InventoryItemsApi.md#createInventoryItems) | **POST** /inventory-items | Creates an inventory item.
[**deleteInventoryItems**](InventoryItemsApi.md#deleteInventoryItems) | **DELETE** /inventory-items/{id} | Deletes an inventory item by ID.
[**listInventoryItems**](InventoryItemsApi.md#listInventoryItems) | **GET** /inventory-items | Returns a list of inventory items.
[**retrieveInventoryItems**](InventoryItemsApi.md#retrieveInventoryItems) | **GET** /inventory-items/{id} | Gets an inventory item by ID.
[**updateInventoryItems**](InventoryItemsApi.md#updateInventoryItems) | **POST** /inventory-items/{id} | Updates an inventory item.



## createInventoryItems

> \DigitalRiver\ApiSdk\Model\InventoryItem createInventoryItems($inventory_item_request)

Creates an inventory item.

Creates an inventory item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new DigitalRiver\ApiSdk\Api\InventoryItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inventory_item_request = new \DigitalRiver\ApiSdk\Model\InventoryItemRequest(); // \DigitalRiver\ApiSdk\Model\InventoryItemRequest | 
// Refer \DigitalRiver\ApiSdk\Model\InventoryItemRequest::$setters in digital-river-php/lib/Model/InventoryItemRequest.php to set the properties.

try {
    $result = $apiInstance->createInventoryItems($inventory_item_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemsApi->createInventoryItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_item_request** | [**\DigitalRiver\ApiSdk\Model\InventoryItemRequest**](../Model/InventoryItemRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\InventoryItem**](../Model/InventoryItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteInventoryItems

> deleteInventoryItems($id)

Deletes an inventory item by ID.

Permanently deletes an inventory item. Supply the unique identifier of the inventory item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new DigitalRiver\ApiSdk\Api\InventoryItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Inventory item identifier


try {
    $apiInstance->deleteInventoryItems($id);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemsApi->deleteInventoryItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Inventory item identifier |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listInventoryItems

> \DigitalRiver\ApiSdk\Model\InlineResponse2001 listInventoryItems($created_time, $updated_time, $ending_before, $starting_after, $limit, $ids, $part_number, $manufacturer_id)

Returns a list of inventory items.

Get all inventory items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new DigitalRiver\ApiSdk\Api\InventoryItemsApi(
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
$part_number = 'part_number_example'; // string | The partNumber associated with the inventory items you want to retrieve.

$manufacturer_id = 'manufacturer_id_example'; // string | The manufacturer identifier associated with the inventory items you want to retrieve.


try {
    $result = $apiInstance->listInventoryItems($created_time, $updated_time, $ending_before, $starting_after, $limit, $ids, $part_number, $manufacturer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemsApi->listInventoryItems: ', $e->getMessage(), PHP_EOL;
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
 **part_number** | **string**| The partNumber associated with the inventory items you want to retrieve. | [optional]
 **manufacturer_id** | **string**| The manufacturer identifier associated with the inventory items you want to retrieve. | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retrieveInventoryItems

> \DigitalRiver\ApiSdk\Model\InventoryItem retrieveInventoryItems($id)

Gets an inventory item by ID.

Retrieves the details of an inventory item. You must supply the unique identifier of the inventory item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new DigitalRiver\ApiSdk\Api\InventoryItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Inventory item identifier.


try {
    $result = $apiInstance->retrieveInventoryItems($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemsApi->retrieveInventoryItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Inventory item identifier. |

### Return type

[**\DigitalRiver\ApiSdk\Model\InventoryItem**](../Model/InventoryItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateInventoryItems

> \DigitalRiver\ApiSdk\Model\InventoryItem updateInventoryItems($id, $inventory_item_update_request)

Updates an inventory item.

Updates an inventory item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new DigitalRiver\ApiSdk\Api\InventoryItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Inventory item identifier.

$inventory_item_update_request = new \DigitalRiver\ApiSdk\Model\InventoryItemUpdateRequest(); // \DigitalRiver\ApiSdk\Model\InventoryItemUpdateRequest | 
// Refer \DigitalRiver\ApiSdk\Model\InventoryItemUpdateRequest::$setters in digital-river-php/lib/Model/InventoryItemUpdateRequest.php to set the properties.

try {
    $result = $apiInstance->updateInventoryItems($id, $inventory_item_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemsApi->updateInventoryItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Inventory item identifier. |
 **inventory_item_update_request** | [**\DigitalRiver\ApiSdk\Model\InventoryItemUpdateRequest**](../Model/InventoryItemUpdateRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\InventoryItem**](../Model/InventoryItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

