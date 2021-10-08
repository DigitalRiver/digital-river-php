# DigitalRiver\ApiSdk\ReservationsApi

All URIs are relative to *https://api.digitalriver.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createReservations**](ReservationsApi.md#createReservations) | **POST** /reservations | Create a reservation
[**deleteReservations**](ReservationsApi.md#deleteReservations) | **DELETE** /reservations/{id} | Cancels a reservation by ID.



## createReservations

> \DigitalRiver\ApiSdk\Model\Reservation createReservations($reservation_request)

Create a reservation

Create a reservation to hold inventory items in a fulfillment order.

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
    $result = $apiInstance->createReservations($reservation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationsApi->createReservations: ', $e->getMessage(), PHP_EOL;
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


## deleteReservations

> deleteReservations($id)

Cancels a reservation by ID.

Cancels a reservation. Supply the unique identifier of the reservation.

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
    $apiInstance->deleteReservations($id);
} catch (Exception $e) {
    echo 'Exception when calling ReservationsApi->deleteReservations: ', $e->getMessage(), PHP_EOL;
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

