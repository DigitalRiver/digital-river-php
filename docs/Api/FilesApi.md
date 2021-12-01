# DigitalRiver\ApiSdk\FilesApi

All URIs are relative to *https://api.digitalriver.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFiles**](FilesApi.md#createFiles) | **POST** /files | Creates a file.
[**deleteFiles**](FilesApi.md#deleteFiles) | **DELETE** /files/{id} | Deletes a file by ID.
[**listFiles**](FilesApi.md#listFiles) | **GET** /files | Returns a list of files.
[**retrieveFiles**](FilesApi.md#retrieveFiles) | **GET** /files/{id} | Gets a file by ID.



## createFiles

> \DigitalRiver\ApiSdk\Model\FileObject createFiles($file, $purpose, $file_name, $title, $link_expires_time)

Creates a file.

To upload a file to Digital River, you’ll need to send a request of type <code>multipart/form-data</code>. The request should contain the file you would like to upload, as well as the parameters for creating a file. For appliation/JSON request type, a base64 encoded string may be sent in the payload.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | A file to upload. The file should follow the specifications of RFC 2388 (which defines file transfers for the multipart/form-data protocol). Alternatively, a base64 encoded string may be sent.

$purpose = 'purpose_example'; // string | The purpose of the uploaded file.

$file_name = 'file_name_example'; // string | A filename for the file, suitable for saving to a filesystem. fileName is required for a based64 encoded file.

$title = 'title_example'; // string | A user friendly title for the document.

$link_expires_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Time at which the link expires.


try {
    $result = $apiInstance->createFiles($file, $purpose, $file_name, $title, $link_expires_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->createFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject****\SplFileObject**| A file to upload. The file should follow the specifications of RFC 2388 (which defines file transfers for the multipart/form-data protocol). Alternatively, a base64 encoded string may be sent. |
 **purpose** | **string**| The purpose of the uploaded file. |
 **file_name** | **string**| A filename for the file, suitable for saving to a filesystem. fileName is required for a based64 encoded file. | [optional]
 **title** | **string**| A user friendly title for the document. | [optional]
 **link_expires_time** | **\DateTime**| Time at which the link expires. | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\FileObject**](../Model/FileObject.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: multipart/form-data, application/JSON
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteFiles

> deleteFiles($id)

Deletes a file by ID.

Permanently deletes a file. Supply the unique identifier of the file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | File ID


try {
    $apiInstance->deleteFiles($id);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->deleteFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| File ID |

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


## listFiles

> \DigitalRiver\ApiSdk\Model\ListFilesResponse listFiles($created_time, $ending_before, $starting_after, $limit, $ids, $purpose, $file_name, $title, $size, $type)

Returns a list of files.

Gets all files specified in the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\FilesApi(
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
$purpose = 'purpose_example'; // string | Only return files with this purpose.

$file_name = 'file_name_example'; // string | Only return files with this file name.

$title = 'title_example'; // string | Only return files with this title.

$size = 10; // map[string,string] | A filter on the list based on the files **size** field. The value can be a string or it can be a dictionary with the following options:    - **gt** - *return values where the size field is greater than this value*   - **gte** - *return values where the size field is greater than or equal to this value*   - **lt** - *return values where the size field is less than this value*   - **lte** - *return values where the size field is less than or equal to this value*
// Refer map[string,string]::$setters in digital-river-php/lib/Model/string.php to set the properties.
$type = 'type_example'; // string | Only return files of this type.


try {
    $result = $apiInstance->listFiles($created_time, $ending_before, $starting_after, $limit, $ids, $purpose, $file_name, $title, $size, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->listFiles: ', $e->getMessage(), PHP_EOL;
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
 **purpose** | **string**| Only return files with this purpose. | [optional]
 **file_name** | **string**| Only return files with this file name. | [optional]
 **title** | **string**| Only return files with this title. | [optional]
 **size** | [**map[string,string]**](../Model/string.md)| A filter on the list based on the files **size** field. The value can be a string or it can be a dictionary with the following options:    - **gt** - *return values where the size field is greater than this value*   - **gte** - *return values where the size field is greater than or equal to this value*   - **lt** - *return values where the size field is less than this value*   - **lte** - *return values where the size field is less than or equal to this value* | [optional]
 **type** | **string**| Only return files of this type. | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\ListFilesResponse**](../Model/ListFilesResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retrieveFiles

> \DigitalRiver\ApiSdk\Model\FileObject retrieveFiles($id)

Gets a file by ID.

Retrieves the details of a file. You must supply the unique identifier of the file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | File identifier.


try {
    $result = $apiInstance->retrieveFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->retrieveFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| File identifier. |

### Return type

[**\DigitalRiver\ApiSdk\Model\FileObject**](../Model/FileObject.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

