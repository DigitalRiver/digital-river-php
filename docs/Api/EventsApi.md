# DigitalRiver\ApiSdk\EventsApi

All URIs are relative to *https://www.digitalriver.com/docs/digital-river-api-reference*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listEvents**](EventsApi.md#listEvents) | **GET** /events | Returns a list of events
[**retrieveEvents**](EventsApi.md#retrieveEvents) | **GET** /events/{id} | Gets an event by identifier



## listEvents

> \DigitalRiver\ApiSdk\Model\ListEventsResponse listEvents($created_time, $ending_before, $starting_after, $limit, $type, $types)

Returns a list of events

Gets events, extending back 30 days, filtered by the specified path parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\EventsApi(
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

$type = 'type_example'; // string | Represents a specific event name, or a group of events using * as a wildcard. The returned list is filtered to include only matching events. You may pass either <code>type</code> or <code>types</code>, but not both.

$types = 'types_example'; // string | An array containing less than 20 specific event names. The returned list is filtered to include only matching events. You may pass either <code>type</code> or <code>types</code>, but not both.


try {
    $result = $apiInstance->listEvents($created_time, $ending_before, $starting_after, $limit, $type, $types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->listEvents: ', $e->getMessage(), PHP_EOL;
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
 **type** | **string**| Represents a specific event name, or a group of events using * as a wildcard. The returned list is filtered to include only matching events. You may pass either &lt;code&gt;type&lt;/code&gt; or &lt;code&gt;types&lt;/code&gt;, but not both. | [optional]
 **types** | **string**| An array containing less than 20 specific event names. The returned list is filtered to include only matching events. You may pass either &lt;code&gt;type&lt;/code&gt; or &lt;code&gt;types&lt;/code&gt;, but not both. | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\ListEventsResponse**](../Model/ListEventsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retrieveEvents

> \DigitalRiver\ApiSdk\Model\Event retrieveEvents($id)

Gets an event by identifier

Retrieve the details of an event by supplying its unique identifier, which you may have received in a webhook.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalRiver\ApiSdk\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Event identifer
// Refer string::$setters in digital-river-php/lib/Model/.php to set the properties.

try {
    $result = $apiInstance->retrieveEvents($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->retrieveEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Event identifer |

### Return type

[**\DigitalRiver\ApiSdk\Model\Event**](../Model/Event.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

