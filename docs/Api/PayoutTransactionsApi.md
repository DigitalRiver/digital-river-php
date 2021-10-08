# DigitalRiver\ApiSdk\PayoutTransactionsApi

All URIs are relative to *https://api.digitalriver.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listPayoutTransactions**](PayoutTransactionsApi.md#listPayoutTransactions) | **GET** /payouts/{id}/transactions | Lists the payout transactions for a payout.



## listPayoutTransactions

> \DigitalRiver\ApiSdk\Model\ListPayoutTransactionResponse listPayoutTransactions($id, $ending_before, $starting_after, $limit)

Lists the payout transactions for a payout.

Retrieves the details of the payout transactions for a payout. Supply the unique identifier of the payout.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\PayoutTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Payout ID

$ending_before = 'ending_before_example'; // string | A cursor for use in pagination. The endingBefore parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with xyz your subsequent calls can include endingBefore=xyz in order to fetch the previous page of the list.

$starting_after = 'starting_after_example'; // string | A cursor for use in pagination. The startingAfter parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with xyz, your subsequent calls can include startingAfter=xyz in order to fetch the next page of the list.

$limit = 56; // int | A limit on the number of objects returned. Limit can range between 1 and 5000, and the default is 10.


try {
    $result = $apiInstance->listPayoutTransactions($id, $ending_before, $starting_after, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutTransactionsApi->listPayoutTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Payout ID |
 **ending_before** | **string**| A cursor for use in pagination. The endingBefore parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with xyz your subsequent calls can include endingBefore&#x3D;xyz in order to fetch the previous page of the list. | [optional]
 **starting_after** | **string**| A cursor for use in pagination. The startingAfter parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with xyz, your subsequent calls can include startingAfter&#x3D;xyz in order to fetch the next page of the list. | [optional]
 **limit** | **int**| A limit on the number of objects returned. Limit can range between 1 and 5000, and the default is 10. | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\ListPayoutTransactionResponse**](../Model/ListPayoutTransactionResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

