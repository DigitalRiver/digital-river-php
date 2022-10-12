# DigitalRiver\ApiSdk\DropInCheckoutLinksApi

All URIs are relative to *https://api.digitalriver.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDropInCheckoutLink**](DropInCheckoutLinksApi.md#createDropInCheckoutLink) | **POST** /drop-in/checkout-links | Creates a new Drop-in checkout link
[**deleteDropInCheckoutLinks**](DropInCheckoutLinksApi.md#deleteDropInCheckoutLinks) | **DELETE** /drop-in/checkout-links/{id} | Deletes a Drop-in checkout link by ID.
[**listDropInCheckoutLink**](DropInCheckoutLinksApi.md#listDropInCheckoutLink) | **GET** /drop-in/checkout-links | List Drop-in checkout links



## createDropInCheckoutLink

> \DigitalRiver\ApiSdk\Model\DropInCheckoutLinkResponse createDropInCheckoutLink($drop_in_checkout_link)

Creates a new Drop-in checkout link

Creates a new Drop-in checkout link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\DropInCheckoutLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$drop_in_checkout_link = new \DigitalRiver\ApiSdk\Model\DropInCheckoutLink(); // \DigitalRiver\ApiSdk\Model\DropInCheckoutLink | 
// Refer \DigitalRiver\ApiSdk\Model\DropInCheckoutLink::$setters in digital-river-php/lib/Model/DropInCheckoutLink.php to set the properties.

try {
    $result = $apiInstance->createDropInCheckoutLink($drop_in_checkout_link);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DropInCheckoutLinksApi->createDropInCheckoutLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **drop_in_checkout_link** | [**\DigitalRiver\ApiSdk\Model\DropInCheckoutLink**](../Model/DropInCheckoutLink.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\DropInCheckoutLinkResponse**](../Model/DropInCheckoutLinkResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteDropInCheckoutLinks

> deleteDropInCheckoutLinks($id)

Deletes a Drop-in checkout link by ID.

Deletes the checkout link so it cannot be used after this operation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\DropInCheckoutLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Link ID


try {
    $apiInstance->deleteDropInCheckoutLinks($id);
} catch (Exception $e) {
    echo 'Exception when calling DropInCheckoutLinksApi->deleteDropInCheckoutLinks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Link ID |

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


## listDropInCheckoutLink

> \DigitalRiver\ApiSdk\Model\ListCheckoutLinksResponse listDropInCheckoutLink($created_time, $ending_before, $starting_after, $limit, $ids)

List Drop-in checkout links

Get all checkout links.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\DropInCheckoutLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$created_time = createdTime[gt]=2020-09-22T12:09:44Z; // map[string,\DateTime] | A filter on the list based on the **createdTime** field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **eq**&mdash;return values where the createdTime field equals to this timestamp   - **gt**&mdash;return values where the createdTime field is after this timestamp   - **gte**&mdash;return values where the createdTime field is after or equal to this timestamp   - **lt**&mdash;return values where the createdTime field is before this timestamp   - **lte**&mdash;return values where the createdTime field is before or equal to this timestamp
// Refer map[string,\DateTime]::$setters in digital-river-php/lib/Model/\DateTime.php to set the properties.
$ending_before = 'ending_before_example'; // string | A cursor for use in pagination. The endingBefore parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with xyz your subsequent calls can include endingBefore=xyz in order to fetch the previous page of the list.

$starting_after = 'starting_after_example'; // string | A cursor for use in pagination. The startingAfter parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with xyz, your subsequent calls can include startingAfter=xyz in order to fetch the next page of the list.

$limit = 56; // int | A limit on the number of objects returned. Limit can range between 1 and 100, and the default is 10.

$ids = array('ids_example'); // string[] | Only return objects with these IDs.
// Refer string[]::$setters in digital-river-php/lib/Model/string.php to set the properties.

try {
    $result = $apiInstance->listDropInCheckoutLink($created_time, $ending_before, $starting_after, $limit, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DropInCheckoutLinksApi->listDropInCheckoutLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **created_time** | [**map[string,\DateTime]**](../Model/\DateTime.md)| A filter on the list based on the **createdTime** field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **eq**&amp;mdash;return values where the createdTime field equals to this timestamp   - **gt**&amp;mdash;return values where the createdTime field is after this timestamp   - **gte**&amp;mdash;return values where the createdTime field is after or equal to this timestamp   - **lt**&amp;mdash;return values where the createdTime field is before this timestamp   - **lte**&amp;mdash;return values where the createdTime field is before or equal to this timestamp | [optional]
 **ending_before** | **string**| A cursor for use in pagination. The endingBefore parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with xyz your subsequent calls can include endingBefore&#x3D;xyz in order to fetch the previous page of the list. | [optional]
 **starting_after** | **string**| A cursor for use in pagination. The startingAfter parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with xyz, your subsequent calls can include startingAfter&#x3D;xyz in order to fetch the next page of the list. | [optional]
 **limit** | **int**| A limit on the number of objects returned. Limit can range between 1 and 100, and the default is 10. | [optional]
 **ids** | [**string[]**](../Model/string.md)| Only return objects with these IDs. | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\ListCheckoutLinksResponse**](../Model/ListCheckoutLinksResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

