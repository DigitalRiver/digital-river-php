# DigitalRiver\ApiSdk\SalesTransactionsApi

All URIs are relative to *https://www.digitalriver.com/docs/digital-river-api-reference*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listSalesTransactions**](SalesTransactionsApi.md#listSalesTransactions) | **GET** /sales-transactions | Returns a list of sales transactions
[**retrieveSalesTransactions**](SalesTransactionsApi.md#retrieveSalesTransactions) | **GET** /sales-transactions/{id} | Gets a sales transaction by ID.



## listSalesTransactions

> \DigitalRiver\ApiSdk\Model\ListSalesTransactionsResponse listSalesTransactions($created_time, $ending_before, $starting_after, $ids, $limit, $sale_time, $sales_summary_id, $type, $currency, $order_id, $sku_id, $quantity, $amount, $digital_river_share, $payout_amount)

Returns a list of sales transactions

Get all sales transactions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\SalesTransactionsApi(
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

$sale_time = 2018-03-25T20:36:00Z; // map[string,\DateTime] | A filter on the list based on the sales transaction **saleTime** field. The value can be a string with an ISO-601 UTC format datetime or it can be a dictionary with the following options:    - **gt** - *return values where the saleTime field is after this timestamp*   - **gte** - *return values where the saleTime field is after or equal to this timestamp*   - **lt** - *return values where the saleTime field is before this timestamp*   - **lte** - *return values where the saleTime field is before or equal to this timestamp*
// Refer map[string,\DateTime]::$setters in digital-river-php/lib/Model/\DateTime.php to set the properties.
$sales_summary_id = 'sales_summary_id_example'; // string | Only return sales transactions with this sales summary identifier

$type = 'type_example'; // string | Only return sales transactions of this type

$currency = 'currency_example'; // string | Only return sales transactions in this currency

$order_id = 'order_id_example'; // string | Only return sales transactions with this order identifier

$sku_id = 'sku_id_example'; // string | Only return sales transactions with this sku identifier

$quantity = 2; // map[string,string] | A filter on the list based on the sales transaction **quantity** field. The value can be a string or it can be a dictionary with the following options:    - **gt** - *return values where the quantity field is greater than this amount*   - **gte** - *return values where the quantity field is greater than or equal to this amount*   - **lt** - *return values where the quantity field is less than this amount*   - **lte** - *return values where the quantity field is less than or equal to this amount*
// Refer map[string,string]::$setters in digital-river-php/lib/Model/string.php to set the properties.
$amount = 20.99; // map[string,string] | A filter on the list based on the sales transaction **amount** field. The value can be a string or it can be a dictionary with the following options:    - **gt** - *return values where the amount field is greater than this amount*   - **gte** - *return values where the amount field is greater than or equal to this amount*   - **lt** - *return values where the amount field is less than this amount*   - **lte** - *return values where the amount field is less than or equal to this amount*
// Refer map[string,string]::$setters in digital-river-php/lib/Model/string.php to set the properties.
$digital_river_share = 20.99; // map[string,string] | A filter on the list based on the sales transaction **Digital River share** field. The value can be a string or it can be a dictionary with the following options:    - **gt** - *return values where the Digital River share field is greater than this amount*   - **gte** - *return values where the Digital River share field is greater than or equal to this amount*   - **lt** - *return values where the Digital River share field is less than this amount*   - **lte** - *return values where the Digital River share field is less than or equal to this amount*
// Refer map[string,string]::$setters in digital-river-php/lib/Model/string.php to set the properties.
$payout_amount = 20.99; // map[string,string] | A filter on the list based on the sales transaction **payoutAmount** field. The value can be a string or it can be a dictionary with the following options:    - **gt** - *return values where the payoutAmount field is greater than this amount*   - **gte** - *return values where the payoutAmount field is greater than or equal to this amount*   - **lt** - *return values where the payoutAmount field is less than this amount*   - **lte** - *return values where the payoutAmount field is less than or equal to this amount*
// Refer map[string,string]::$setters in digital-river-php/lib/Model/string.php to set the properties.

try {
    $result = $apiInstance->listSalesTransactions($created_time, $ending_before, $starting_after, $ids, $limit, $sale_time, $sales_summary_id, $type, $currency, $order_id, $sku_id, $quantity, $amount, $digital_river_share, $payout_amount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesTransactionsApi->listSalesTransactions: ', $e->getMessage(), PHP_EOL;
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
 **sale_time** | [**map[string,\DateTime]**](../Model/\DateTime.md)| A filter on the list based on the sales transaction **saleTime** field. The value can be a string with an ISO-601 UTC format datetime or it can be a dictionary with the following options:    - **gt** - *return values where the saleTime field is after this timestamp*   - **gte** - *return values where the saleTime field is after or equal to this timestamp*   - **lt** - *return values where the saleTime field is before this timestamp*   - **lte** - *return values where the saleTime field is before or equal to this timestamp* | [optional]
 **sales_summary_id** | **string**| Only return sales transactions with this sales summary identifier | [optional]
 **type** | **string**| Only return sales transactions of this type | [optional]
 **currency** | **string**| Only return sales transactions in this currency | [optional]
 **order_id** | **string**| Only return sales transactions with this order identifier | [optional]
 **sku_id** | **string**| Only return sales transactions with this sku identifier | [optional]
 **quantity** | [**map[string,string]**](../Model/string.md)| A filter on the list based on the sales transaction **quantity** field. The value can be a string or it can be a dictionary with the following options:    - **gt** - *return values where the quantity field is greater than this amount*   - **gte** - *return values where the quantity field is greater than or equal to this amount*   - **lt** - *return values where the quantity field is less than this amount*   - **lte** - *return values where the quantity field is less than or equal to this amount* | [optional]
 **amount** | [**map[string,string]**](../Model/string.md)| A filter on the list based on the sales transaction **amount** field. The value can be a string or it can be a dictionary with the following options:    - **gt** - *return values where the amount field is greater than this amount*   - **gte** - *return values where the amount field is greater than or equal to this amount*   - **lt** - *return values where the amount field is less than this amount*   - **lte** - *return values where the amount field is less than or equal to this amount* | [optional]
 **digital_river_share** | [**map[string,string]**](../Model/string.md)| A filter on the list based on the sales transaction **Digital River share** field. The value can be a string or it can be a dictionary with the following options:    - **gt** - *return values where the Digital River share field is greater than this amount*   - **gte** - *return values where the Digital River share field is greater than or equal to this amount*   - **lt** - *return values where the Digital River share field is less than this amount*   - **lte** - *return values where the Digital River share field is less than or equal to this amount* | [optional]
 **payout_amount** | [**map[string,string]**](../Model/string.md)| A filter on the list based on the sales transaction **payoutAmount** field. The value can be a string or it can be a dictionary with the following options:    - **gt** - *return values where the payoutAmount field is greater than this amount*   - **gte** - *return values where the payoutAmount field is greater than or equal to this amount*   - **lt** - *return values where the payoutAmount field is less than this amount*   - **lte** - *return values where the payoutAmount field is less than or equal to this amount* | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\ListSalesTransactionsResponse**](../Model/ListSalesTransactionsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retrieveSalesTransactions

> \DigitalRiver\ApiSdk\Model\SalesTransaction retrieveSalesTransactions($id)

Gets a sales transaction by ID.

Retrieves the details of a sales transaction. Supply the unique identifier of the sales transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\SalesTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Sales transaction ID


try {
    $result = $apiInstance->retrieveSalesTransactions($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesTransactionsApi->retrieveSalesTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Sales transaction ID |

### Return type

[**\DigitalRiver\ApiSdk\Model\SalesTransaction**](../Model/SalesTransaction.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

