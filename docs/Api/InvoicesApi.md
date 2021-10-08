# DigitalRiver\ApiSdk\InvoicesApi

All URIs are relative to *https://api.digitalriver.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachSourceToInvoice**](InvoicesApi.md#attachSourceToInvoice) | **POST** /invoices/{id}/sources/{sourceId} | Attach source to invoice.
[**createInvoices**](InvoicesApi.md#createInvoices) | **POST** /invoices | Creates a new invoice
[**deleteInvoices**](InvoicesApi.md#deleteInvoices) | **DELETE** /invoices/{id} | Deletes an invoice.
[**detachSourceToInvoice**](InvoicesApi.md#detachSourceToInvoice) | **DELETE** /invoices/{id}/sources/{sourceId} | Deletes a invoice association to source.
[**listInvoices**](InvoicesApi.md#listInvoices) | **GET** /invoices | Returns a list of invoices
[**openInvoices**](InvoicesApi.md#openInvoices) | **POST** /invoices/{id}/open | Opens an existing invoice
[**retrieveInvoices**](InvoicesApi.md#retrieveInvoices) | **GET** /invoices/{id} | Gets an invoice by identifier
[**updateInvoices**](InvoicesApi.md#updateInvoices) | **POST** /invoices/{id} | Updates an existing invoice
[**voidInvoices**](InvoicesApi.md#voidInvoices) | **POST** /invoices/{id}/void | Voids an existing invoice



## attachSourceToInvoice

> \DigitalRiver\ApiSdk\Model\Source attachSourceToInvoice($id, $source_id)

Attach source to invoice.

Attach source to invoice. Supply the unique identifier of the invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new DigitalRiver\ApiSdk\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Invoice ID

$source_id = 'source_id_example'; // string | Source ID


try {
    $result = $apiInstance->attachSourceToInvoice($id, $source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->attachSourceToInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice ID |
 **source_id** | **string**| Source ID |

### Return type

[**\DigitalRiver\ApiSdk\Model\Source**](../Model/Source.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createInvoices

> \DigitalRiver\ApiSdk\Model\Invoice createInvoices($invoice_request)

Creates a new invoice

This request [creates a new invoice](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/invoices#creating-an-invoice) object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_request = new \DigitalRiver\ApiSdk\Model\InvoiceRequest(); // \DigitalRiver\ApiSdk\Model\InvoiceRequest | 
// Refer \DigitalRiver\ApiSdk\Model\InvoiceRequest::$setters in digital-river-php/lib/Model/InvoiceRequest.php to set the properties.

try {
    $result = $apiInstance->createInvoices($invoice_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->createInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_request** | [**\DigitalRiver\ApiSdk\Model\InvoiceRequest**](../Model/InvoiceRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\Invoice**](../Model/Invoice.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteInvoices

> deleteInvoices($id)

Deletes an invoice.

This requrest [deletes an invoice](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/invoices#deleting-an-invoice).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The unique identifier of the Invoice.


try {
    $apiInstance->deleteInvoices($id);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->deleteInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The unique identifier of the Invoice. |

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


## detachSourceToInvoice

> detachSourceToInvoice($id, $source_id)

Deletes a invoice association to source.

Detach source from invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new DigitalRiver\ApiSdk\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Invoice ID

$source_id = 'source_id_example'; // string | Source ID


try {
    $apiInstance->detachSourceToInvoice($id, $source_id);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->detachSourceToInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice ID |
 **source_id** | **string**| Source ID |

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


## listInvoices

> \DigitalRiver\ApiSdk\Model\InlineResponse2003 listInvoices($created_time, $updated_time, $ending_before, $starting_after, $limit, $ids, $upstream_ids, $total_amount, $customer_id, $application_id, $currency, $state, $sku_id, $price, $attempt_count)

Returns a list of invoices

Gets all invoices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\InvoicesApi(
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
$upstream_ids = array('upstream_ids_example'); // string[] | Only return objects with these upstreamIds.
// Refer string[]::$setters in digital-river-php/lib/Model/string.php to set the properties.
$total_amount = totalAmount[gt]=20.99; // map[string,string] | A filter on the list based on the **totalAmount** field. The value can be a string or it can be a dictionary with the following options:        - **eq**-return values where the amount field equals to this amount       - **gt**-return values where the amount field is greater than this amount       - **gte**-return values where the amount field is greater than or equal to this amount       - **lt**-return values where the amount field is less than this amount       - **lte**-return values where the amount field is less than or equal to this amount
// Refer map[string,string]::$setters in digital-river-php/lib/Model/string.php to set the properties.
$customer_id = 'customer_id_example'; // string | Only return invoices for this customer

$application_id = 'application_id_example'; // string | Only return checkouts for the given application

$currency = 'currency_example'; // string | Only return invoices in this currency

$state = 'state_example'; // string | Only return invoices in this state

$sku_id = 'sku_id_example'; // string | Only return invoices for this sku

$price = 20.99; // map[string,string] | A filter on the list based on the invoice item **price** field. The value can be a string or it can be a dictionary with the following options:    - **eq** - *return values where an invoice item price field equals to this amount*   - **gt** - *return values where an invoice item price field is greater than this amount*   - **gte** - *return values where an invoice item price field is greater than or equal to this amount*   - **lt** - *return values where an invoice item price field is less than this amount*   - **lte** - *return values where an invoice item price field is less than or equal to this amount*
// Refer map[string,string]::$setters in digital-river-php/lib/Model/string.php to set the properties.
$attempt_count = 2; // map[string,string] | A filter on the list based on the invoice **attemptCount** field. The value can be a string or it can be a dictionary with the following options:    - **eq** - *return values where the attemptCount field equals to this amount*   - **gt** - *return values where the attemptCount field is greater than this amount*   - **gte** - *return values where the attemptCount field is greater than or equal to this amount*   - **lt** - *return values where the attemptCount field is less than this amount*   - **lte** - *return values where the attemptCount field is less than or equal to this amount*
// Refer map[string,string]::$setters in digital-river-php/lib/Model/string.php to set the properties.

try {
    $result = $apiInstance->listInvoices($created_time, $updated_time, $ending_before, $starting_after, $limit, $ids, $upstream_ids, $total_amount, $customer_id, $application_id, $currency, $state, $sku_id, $price, $attempt_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->listInvoices: ', $e->getMessage(), PHP_EOL;
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
 **upstream_ids** | [**string[]**](../Model/string.md)| Only return objects with these upstreamIds. | [optional]
 **total_amount** | [**map[string,string]**](../Model/string.md)| A filter on the list based on the **totalAmount** field. The value can be a string or it can be a dictionary with the following options:        - **eq**-return values where the amount field equals to this amount       - **gt**-return values where the amount field is greater than this amount       - **gte**-return values where the amount field is greater than or equal to this amount       - **lt**-return values where the amount field is less than this amount       - **lte**-return values where the amount field is less than or equal to this amount | [optional]
 **customer_id** | **string**| Only return invoices for this customer | [optional]
 **application_id** | **string**| Only return checkouts for the given application | [optional]
 **currency** | **string**| Only return invoices in this currency | [optional]
 **state** | **string**| Only return invoices in this state | [optional]
 **sku_id** | **string**| Only return invoices for this sku | [optional]
 **price** | [**map[string,string]**](../Model/string.md)| A filter on the list based on the invoice item **price** field. The value can be a string or it can be a dictionary with the following options:    - **eq** - *return values where an invoice item price field equals to this amount*   - **gt** - *return values where an invoice item price field is greater than this amount*   - **gte** - *return values where an invoice item price field is greater than or equal to this amount*   - **lt** - *return values where an invoice item price field is less than this amount*   - **lte** - *return values where an invoice item price field is less than or equal to this amount* | [optional]
 **attempt_count** | [**map[string,string]**](../Model/string.md)| A filter on the list based on the invoice **attemptCount** field. The value can be a string or it can be a dictionary with the following options:    - **eq** - *return values where the attemptCount field equals to this amount*   - **gt** - *return values where the attemptCount field is greater than this amount*   - **gte** - *return values where the attemptCount field is greater than or equal to this amount*   - **lt** - *return values where the attemptCount field is less than this amount*   - **lte** - *return values where the attemptCount field is less than or equal to this amount* | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## openInvoices

> \DigitalRiver\ApiSdk\Model\Invoice openInvoices($id)

Opens an existing invoice

This request [opens an invoice](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/invoices#opening-an-invoice).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The unique identifier of the Invoice.


try {
    $result = $apiInstance->openInvoices($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->openInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The unique identifier of the Invoice. |

### Return type

[**\DigitalRiver\ApiSdk\Model\Invoice**](../Model/Invoice.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retrieveInvoices

> \DigitalRiver\ApiSdk\Model\Invoice retrieveInvoices($id)

Gets an invoice by identifier

Retrieves the details of an invoice by supplying its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The unique identifier of the Invoice.


try {
    $result = $apiInstance->retrieveInvoices($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->retrieveInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The unique identifier of the Invoice. |

### Return type

[**\DigitalRiver\ApiSdk\Model\Invoice**](../Model/Invoice.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateInvoices

> \DigitalRiver\ApiSdk\Model\Invoice updateInvoices($id, $update_invoice_request)

Updates an existing invoice

Updates an existing invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The unique identifier of the Invoice.

$update_invoice_request = new \DigitalRiver\ApiSdk\Model\UpdateInvoiceRequest(); // \DigitalRiver\ApiSdk\Model\UpdateInvoiceRequest | 
// Refer \DigitalRiver\ApiSdk\Model\UpdateInvoiceRequest::$setters in digital-river-php/lib/Model/UpdateInvoiceRequest.php to set the properties.

try {
    $result = $apiInstance->updateInvoices($id, $update_invoice_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->updateInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The unique identifier of the Invoice. |
 **update_invoice_request** | [**\DigitalRiver\ApiSdk\Model\UpdateInvoiceRequest**](../Model/UpdateInvoiceRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\Invoice**](../Model/Invoice.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## voidInvoices

> \DigitalRiver\ApiSdk\Model\Invoice voidInvoices($id)

Voids an existing invoice

This request [voids an invoice](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/invoices#voiding-an-invoice).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The unique identifier of the invoice.


try {
    $result = $apiInstance->voidInvoices($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->voidInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The unique identifier of the invoice. |

### Return type

[**\DigitalRiver\ApiSdk\Model\Invoice**](../Model/Invoice.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

