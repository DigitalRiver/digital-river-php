# DigitalRiver\ApiSdk\ReservationsApi

All URIs are relative to *https://www.digitalriver.com/docs/digital-river-api-reference*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create**](ReservationsApi.md#create) | **POST** /reservations | Create a reservation
[**delete**](ReservationsApi.md#delete) | **DELETE** /reservations/{id} | Cancels a reservation by ID.



## create

> \DigitalRiver\ApiSdk\Model\Reservation create($reservation_request)

Create a reservation

A reservation represents the reservation of inventory for all or part of an order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new DigitalRiver\ApiSdk\Api\ReservationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$reservation_request = new \DigitalRiver\ApiSdk\Model\ReservationRequest(); // \DigitalRiver\ApiSdk\Model\ReservationRequest | 
// Refer \DigitalRiver\ApiSdk\Model\ReservationRequest::$setters in digital-river-php/lib/Model/ReservationRequest.php to set the properties.

try {
    $result = $apiInstance->create($reservation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationsApi->create: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reservation_request** | [**\DigitalRiver\ApiSdk\Model\ReservationRequest**](../Model/ReservationRequest.md)|  | [optional]

### Return type

[**\DigitalRiver\ApiSdk\Model\Reservation**](../Model/Reservation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## delete

> delete($id)

Cancels a reservation by ID.

Cancels the reservation. Supply the unique identifier of the reservation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new DigitalRiver\ApiSdk\Api\ReservationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Reservation identifier


try {
    $apiInstance->delete($id);
} catch (Exception $e) {
    echo 'Exception when calling ReservationsApi->delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Reservation identifier |

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

