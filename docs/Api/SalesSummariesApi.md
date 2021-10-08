# DigitalRiver\ApiSdk\SalesSummariesApi

All URIs are relative to *https://api.digitalriver.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listSalesSummaries**](SalesSummariesApi.md#listSalesSummaries) | **GET** /sales-summaries | Returns a list of sales summaries
[**retrieveSalesSummaries**](SalesSummariesApi.md#retrieveSalesSummaries) | **GET** /sales-summaries/{id} | Gets a sales summary by ID.



## listSalesSummaries

> \DigitalRiver\ApiSdk\Model\ListSalesSummariesResponse listSalesSummaries($created_time, $ending_before, $starting_after, $ids, $limit, $sales_closing_time, $paid, $payout_id, $currency, $amount, $payer_id, $payer_name, $payee_id, $payee_name)

Returns a list of sales summaries

Get all sales summaries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\SalesSummariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$created_time = createdTime[gt]=2020-09-22T12:09:44Z; // map[string,\DateTime] | A filter on the list based on the **createdTime** field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **gt**&mdash;return values where the createdTime field is after this timestamp   - **gte**&mdash;return values where the createdTime field is after or equal to this timestamp   - **lt**&mdash;return values where the createdTime field is before this timestamp   - **lte**&mdash;return values where the createdTime field is before or equal to this timestamp
// Refer map[string,\DateTime]::$setters in digital-river-php/lib/Model/\DateTime.php to set the properties.
$ending_before = 'ending_before_example'; // string | A cursor for use in pagination. The endingBefore parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with xyz your subsequent calls can include endingBefore=xyz in order to fetch the previous page of the list.

$starting_after = 'starting_after_example'; // string | A cursor for use in pagination. The startingAfter parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with xyz, your subsequent calls can include startingAfter=xyz in order to fetch the next page of the list.

$ids = array('ids_example'); // string[] | Only return objects with these IDs.
// Refer string[]::$setters in digital-river-php/lib/Model/string.php to set the properties.
$limit = 56; // int | A limit on the number of objects returned. Limit can range between 1 and 5000, and the default is 10.

$sales_closing_time = 2018-03-25T20:36:00Z; // map[string,\DateTime] | A filter on the list based on the sales summary **salesClosingTime** field. The value can be a string with an ISO-601 UTC format datetime or it can be a dictionary with the following options:    - **gt** - *return values where the salesClosingTime field is after this timestamp*   - **gte** - *return values where the salesClosingTime field is after or equal to this timestamp*   - **lt** - *return values where the salesClosingTime field is before this timestamp*   - **lte** - *return values where the salesClosingTime field is before or equal to this timestamp*
// Refer map[string,\DateTime]::$setters in digital-river-php/lib/Model/\DateTime.php to set the properties.
$paid = 'paid_example'; // string | Only return sales summaries which have been paid

$payout_id = 'payout_id_example'; // string | Only return sales summaries with this payout identifier

$currency = 'currency_example'; // string | Only return sales summaries in the given currency

$amount = 20.99; // map[string,string] | A filter on the list based on the sales summaries **amount** field. The value can be a string or it can be a dictionary with the following options:    - **gt** - *return values where the amount field is greater than this amount*   - **gte** - *return values where the amount field is greater than or equal to this amount*   - **lt** - *return values where the amount field is less than this amount*   - **lte** - *return values where the amount field is less than or equal to this amount*
// Refer map[string,string]::$setters in digital-river-php/lib/Model/string.php to set the properties.
$payer_id = 'payer_id_example'; // string | Only return sales summaries with this payer identifier

$payer_name = 'payer_name_example'; // string | Only return sales summaries with this payer name

$payee_id = 'payee_id_example'; // string | Only return sales summaries with this payee identifier

$payee_name = 'payee_name_example'; // string | Only return sales summaries with this payee name


try {
    $result = $apiInstance->listSalesSummaries($created_time, $ending_before, $starting_after, $ids, $limit, $sales_closing_time, $paid, $payout_id, $currency, $amount, $payer_id, $payer_name, $payee_id, $payee_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesSummariesApi->listSalesSummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **created_time** | [**map[string,\DateTime]**](../Model/\DateTime.md)| A filter on the list based on the **createdTime** field. The value can be a string with an ISO-8601 UTC format datetime or it can be a dictionary with the following options:    - **gt**&amp;mdash;return values where the createdTime field is after this timestamp   - **gte**&amp;mdash;return values where the createdTime field is after or equal to this timestamp   - **lt**&amp;mdash;return values where the createdTime field is before this timestamp   - **lte**&amp;mdash;return values where the createdTime field is before or equal to this timestamp | [optional]
 **ending_before** | **string**| A cursor for use in pagination. The endingBefore parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with xyz your subsequent calls can include endingBefore&#x3D;xyz in order to fetch the previous page of the list. | [optional]
 **starting_after** | **string**| A cursor for use in pagination. The startingAfter parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with xyz, your subsequent calls can include startingAfter&#x3D;xyz in order to fetch the next page of the list. | [optional]
 **ids** | [**string[]**](../Model/string.md)| Only return objects with these IDs. | [optional]
 **limit** | **int**| A limit on the number of objects returned. Limit can range between 1 and 5000, and the default is 10. | [optional]
 **sales_closing_time** | [**map[string,\DateTime]**](../Model/\DateTime.md)| A filter on the list based on the sales summary **salesClosingTime** field. The value can be a string with an ISO-601 UTC format datetime or it can be a dictionary with the following options:    - **gt** - *return values where the salesClosingTime field is after this timestamp*   - **gte** - *return values where the salesClosingTime field is after or equal to this timestamp*   - **lt** - *return values where the salesClosingTime field is before this timestamp*   - **lte** - *return values where the salesClosingTime field is before or equal to this timestamp* | [optional]
 **paid** | **string**| Only return sales summaries which have been paid | [optional]
 **payout_id** | **string**| Only return sales summaries with this payout identifier | [optional]
 **currency** | **string**| Only return sales summaries in the given currency | [optional]
 **amount** | [**map[string,string]**](../Model/string.md)| A filter on the list based on the sales summaries **amount** field. The value can be a string or it can be a dictionary with the following options:    - **gt** - *return values where the amount field is greater than this amount*   - **gte** - *return values where the amount field is greater than or equal to this amount*   - **lt** - *return values where the amount field is less than this amount*   - **lte** - *return values where the amount field is less than or equal to this amount* | [optional]
 **payer_id** | **string**| Only return sales summaries with this payer identifier | [optional]
 **payer_name** | **string**| Only return sales summaries with this payer name | [optional]
 **payee_id** | **string**| Only return sales summaries with this payee identifier | [optional]
 **payee_name** | **string**| Only return sales summaries with this payee name | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\ListSalesSummariesResponse**](../Model/ListSalesSummariesResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retrieveSalesSummaries

> \DigitalRiver\ApiSdk\Model\SalesSummary retrieveSalesSummaries($id)

Gets a sales summary by ID.

Retrieves the details of a sales summary. Supply the unique identifier of the sales summary.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\SalesSummariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Sales summary ID


try {
    $result = $apiInstance->retrieveSalesSummaries($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesSummariesApi->retrieveSalesSummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Sales summary ID |

### Return type

[**\DigitalRiver\ApiSdk\Model\SalesSummary**](../Model/SalesSummary.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

