# DigitalRiver\ApiSdk\FileLinksApi

All URIs are relative to *https://api.digitalriver.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFileLinks**](FileLinksApi.md#createFileLinks) | **POST** /file-links | Creates a file link
[**deleteFileLinks**](FileLinksApi.md#deleteFileLinks) | **DELETE** /file-links/{id} | Deletes a file link by ID.
[**listFileLinks**](FileLinksApi.md#listFileLinks) | **GET** /file-links | Returns a list of file links
[**retrieveFileLinks**](FileLinksApi.md#retrieveFileLinks) | **GET** /file-links/{id} | Gets a file link by identifer
[**updateFileLinks**](FileLinksApi.md#updateFileLinks) | **POST** /file-links/{id} | Updates a file link



## createFileLinks

> \DigitalRiver\ApiSdk\Model\FileLink createFileLinks($file_link_request)

Creates a file link

Creates a new file link object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\FileLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_link_request = new \DigitalRiver\ApiSdk\Model\FileLinkRequest(); // \DigitalRiver\ApiSdk\Model\FileLinkRequest | 
// Refer \DigitalRiver\ApiSdk\Model\FileLinkRequest::$setters in digital-river-php/lib/Model/FileLinkRequest.php to set the properties.

try {
    $result = $apiInstance->createFileLinks($file_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileLinksApi->createFileLinks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_link_request** | [**\DigitalRiver\ApiSdk\Model\FileLinkRequest**](../Model/FileLinkRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\FileLink**](../Model/FileLink.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteFileLinks

> deleteFileLinks($id)

Deletes a file link by ID.

Permanently deletes a file link. Supply the unique identifier of the file link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\FileLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | FileLink ID


try {
    $apiInstance->deleteFileLinks($id);
} catch (Exception $e) {
    echo 'Exception when calling FileLinksApi->deleteFileLinks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| FileLink ID |

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


## listFileLinks

> \DigitalRiver\ApiSdk\Model\ListFileLinksResponse listFileLinks($created_time, $ending_before, $starting_after, $limit, $ids, $file_id, $expired)

Returns a list of file links

Gets all the file links specified in the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\FileLinksApi(
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
$file_id = 'file_id_example'; // string | Only return links with this file identifier.

$expired = True; // bool | Filter links by expired state. By default, all links are returned.


try {
    $result = $apiInstance->listFileLinks($created_time, $ending_before, $starting_after, $limit, $ids, $file_id, $expired);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileLinksApi->listFileLinks: ', $e->getMessage(), PHP_EOL;
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
 **file_id** | **string**| Only return links with this file identifier. | [optional]
 **expired** | **bool**| Filter links by expired state. By default, all links are returned. | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\ListFileLinksResponse**](../Model/ListFileLinksResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retrieveFileLinks

> \DigitalRiver\ApiSdk\Model\FileLink retrieveFileLinks($id)

Gets a file link by identifer

Retrieves the details of a file link. You must supply the unique identifier of the file link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\FileLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The identifier of the file link to be retrieved.


try {
    $result = $apiInstance->retrieveFileLinks($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileLinksApi->retrieveFileLinks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The identifier of the file link to be retrieved. |

### Return type

[**\DigitalRiver\ApiSdk\Model\FileLink**](../Model/FileLink.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateFileLinks

> \DigitalRiver\ApiSdk\Model\FileLink updateFileLinks($id, $update_file_link_request)

Updates a file link

Updates an existing file link. Expired links can no longer be updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\FileLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The identifier of the file link to be updated.

$update_file_link_request = new \DigitalRiver\ApiSdk\Model\UpdateFileLinkRequest(); // \DigitalRiver\ApiSdk\Model\UpdateFileLinkRequest | 
// Refer \DigitalRiver\ApiSdk\Model\UpdateFileLinkRequest::$setters in digital-river-php/lib/Model/UpdateFileLinkRequest.php to set the properties.

try {
    $result = $apiInstance->updateFileLinks($id, $update_file_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileLinksApi->updateFileLinks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The identifier of the file link to be updated. |
 **update_file_link_request** | [**\DigitalRiver\ApiSdk\Model\UpdateFileLinkRequest**](../Model/UpdateFileLinkRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\FileLink**](../Model/FileLink.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

