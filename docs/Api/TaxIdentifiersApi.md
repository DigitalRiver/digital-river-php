# DigitalRiver\ApiSdk\TaxIdentifiersApi

All URIs are relative to *https://api.digitalriver.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTaxIdentifiers**](TaxIdentifiersApi.md#createTaxIdentifiers) | **POST** /tax-identifiers | Creates a new tax identifier
[**deleteTaxIdentifiers**](TaxIdentifiersApi.md#deleteTaxIdentifiers) | **DELETE** /tax-identifiers/{id} | Deletes a tax identifier by ID.
[**listTaxIdentifiers**](TaxIdentifiersApi.md#listTaxIdentifiers) | **GET** /tax-identifiers | Returns a list of tax identifiers
[**retrieveTaxIdentifiers**](TaxIdentifiersApi.md#retrieveTaxIdentifiers) | **GET** /tax-identifiers/{id} | Gets a tax identifier by ID.



## createTaxIdentifiers

> \DigitalRiver\ApiSdk\Model\CustomerTaxIdentifier createTaxIdentifiers($tax_identifier_request)

Creates a new tax identifier

Creates a new tax identifier object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new DigitalRiver\ApiSdk\Api\TaxIdentifiersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tax_identifier_request = new \DigitalRiver\ApiSdk\Model\TaxIdentifierRequest(); // \DigitalRiver\ApiSdk\Model\TaxIdentifierRequest | 
// Refer \DigitalRiver\ApiSdk\Model\TaxIdentifierRequest::$setters in digital-river-php/lib/Model/TaxIdentifierRequest.php to set the properties.

try {
    $result = $apiInstance->createTaxIdentifiers($tax_identifier_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxIdentifiersApi->createTaxIdentifiers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tax_identifier_request** | [**\DigitalRiver\ApiSdk\Model\TaxIdentifierRequest**](../Model/TaxIdentifierRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\CustomerTaxIdentifier**](../Model/CustomerTaxIdentifier.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteTaxIdentifiers

> deleteTaxIdentifiers($id)

Deletes a tax identifier by ID.

Permanently deletes a tax identifier. You must supply the unique identifier of the tax identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new DigitalRiver\ApiSdk\Api\TaxIdentifiersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Tax identifier ID


try {
    $apiInstance->deleteTaxIdentifiers($id);
} catch (Exception $e) {
    echo 'Exception when calling TaxIdentifiersApi->deleteTaxIdentifiers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Tax identifier ID |

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


## listTaxIdentifiers

> \DigitalRiver\ApiSdk\Model\InlineResponse2005 listTaxIdentifiers($created_time, $updated_time, $ending_before, $starting_after, $limit, $ids, $customer_id, $type, $value, $state, $pending, $verified, $not_valid)

Returns a list of tax identifiers

Get all tax identifiers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new DigitalRiver\ApiSdk\Api\TaxIdentifiersApi(
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
$customer_id = 'customer_id_example'; // string | Only return tax identifiers for this customer.

$type = 'type_example'; // string | Only return tax identifiers of this type.

$value = 'value_example'; // string | Only return tax identifiers with this value.

$state = 'state_example'; // string | Only return tax identifiers in this state.

$pending = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | A filter on the list based on the tax identifier **stateTransitions** pending field. The value can be a string with an ISO-601 UTC format datetime or it can be a dictionary with the following options:    - **gt** - *return values where the stateTransitions pending field is after this timestamp*   - **gte** - *return values where the stateTransitions pending field is after or equal to this timestamp*   - **lt** - *return values where the stateTransitions pending field is before this timestamp*   - **lte** - *return values where the stateTransitions pending field is before or equal to this timestamp*

$verified = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | A filter on the list based on the tax identifier **stateTransitions** verified field. The value can be a string with an ISO-601 UTC format datetime or it can be a dictionary with the following options:    - **gt** - *return values where the stateTransitions verified field is after this timestamp*   - **gte** - *return values where the stateTransitions verified field is after or equal to this timestamp*   - **lt** - *return values where the stateTransitions verified field is before this timestamp*   - **lte** - *return values where the stateTransitions verified field is before or equal to this timestamp*

$not_valid = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | A filter on the list based on the tax identifier **stateTransitions** not_valid field. The value can be a string with an ISO-601 UTC format datetime or it can be a dictionary with the following options:    - **gt** - *return values where the stateTransitions not_valid field is after this timestamp*   - **gte** - *return values where the stateTransitions not_valid field is after or equal to this timestamp*   - **lt** - *return values where the stateTransitions not_valid field is before this timestamp*   - **lte** - *return values where the stateTransitions not_valid field is before or equal to this timestamp*


try {
    $result = $apiInstance->listTaxIdentifiers($created_time, $updated_time, $ending_before, $starting_after, $limit, $ids, $customer_id, $type, $value, $state, $pending, $verified, $not_valid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxIdentifiersApi->listTaxIdentifiers: ', $e->getMessage(), PHP_EOL;
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
 **customer_id** | **string**| Only return tax identifiers for this customer. | [optional]
 **type** | **string**| Only return tax identifiers of this type. | [optional]
 **value** | **string**| Only return tax identifiers with this value. | [optional]
 **state** | **string**| Only return tax identifiers in this state. | [optional]
 **pending** | **\DateTime**| A filter on the list based on the tax identifier **stateTransitions** pending field. The value can be a string with an ISO-601 UTC format datetime or it can be a dictionary with the following options:    - **gt** - *return values where the stateTransitions pending field is after this timestamp*   - **gte** - *return values where the stateTransitions pending field is after or equal to this timestamp*   - **lt** - *return values where the stateTransitions pending field is before this timestamp*   - **lte** - *return values where the stateTransitions pending field is before or equal to this timestamp* | [optional]
 **verified** | **\DateTime**| A filter on the list based on the tax identifier **stateTransitions** verified field. The value can be a string with an ISO-601 UTC format datetime or it can be a dictionary with the following options:    - **gt** - *return values where the stateTransitions verified field is after this timestamp*   - **gte** - *return values where the stateTransitions verified field is after or equal to this timestamp*   - **lt** - *return values where the stateTransitions verified field is before this timestamp*   - **lte** - *return values where the stateTransitions verified field is before or equal to this timestamp* | [optional]
 **not_valid** | **\DateTime**| A filter on the list based on the tax identifier **stateTransitions** not_valid field. The value can be a string with an ISO-601 UTC format datetime or it can be a dictionary with the following options:    - **gt** - *return values where the stateTransitions not_valid field is after this timestamp*   - **gte** - *return values where the stateTransitions not_valid field is after or equal to this timestamp*   - **lt** - *return values where the stateTransitions not_valid field is before this timestamp*   - **lte** - *return values where the stateTransitions not_valid field is before or equal to this timestamp* | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retrieveTaxIdentifiers

> \DigitalRiver\ApiSdk\Model\CustomerTaxIdentifier retrieveTaxIdentifiers($id)

Gets a tax identifier by ID.

Retrieves the details of a tax identifier. You must supply the unique identifier of the tax identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new DigitalRiver\ApiSdk\Api\TaxIdentifiersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Tax identifier ID


try {
    $result = $apiInstance->retrieveTaxIdentifiers($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxIdentifiersApi->retrieveTaxIdentifiers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Tax identifier ID |

### Return type

[**\DigitalRiver\ApiSdk\Model\CustomerTaxIdentifier**](../Model/CustomerTaxIdentifier.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

