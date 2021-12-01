# Digitalriver APIs Client Library for PHP
Use this SDK to integrate [Digital River API](https://docs.digitalriver.com/digital-river-api/) into your commerce app.

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 2021
- Package version: 1.0.0
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 7.2 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/digitalriver/digital-river-php.git"
    }
  ],
  "require": {
    "digitalriver/digital-river-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/Digitalriver APIs Client Library for PHP/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Bearer authorization: bearerAuth
// The following example will create a checkout. Replace YOUR_ACCESS_TOKEN with your confidential API key.
$config = DigitalRiver\ApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
$config->setHost('https://api.digitalriver.com');

$apiInstance = new DigitalRiver\ApiSdk\Api\CheckoutsApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
  );
  
  $checkout_request = new \DigitalRiver\ApiSdk\Model\CheckoutRequest(); // \DigitalRiver\ApiSdk\Model\CheckoutRequest |
  // Refer \DigitalRiver\ApiSdk\Model\CheckoutRequest::$setters in digital-river-php/lib/Model/CheckoutRequest.php to set the properties.

  $checkout_request->setCurrency('USD');
  $checkout_request->setLocale('en_US');
  $checkout_request->setEmail('anyemail@anydomain.com');
  
  $ship_from_address = new DigitalRiver\ApiSdk\Model\Address();
  $ship_from_address->setLine1('10380 Bren Road West');
  $ship_from_address->setLine2('');
  $ship_from_address->setCity('Minneapolis');
  $ship_from_address->setPostalCode('55343');
  $ship_from_address->setState('MN');
  $ship_from_address->setCountry('US');
  $ship_from = new DigitalRiver\ApiSdk\Model\ShipFrom();
  $ship_from->setAddress($ship_from_address);
  $checkout_request->setShipFrom($ship_from);

  $ship_to_address = new DigitalRiver\ApiSdk\Model\Address();
  $ship_to_address->setLine1('123 Sesame Street');
  $ship_to_address->setLine2('Suite 1a');
  $ship_to_address->setCity('Minneapolis');
  $ship_to_address->setPostalCode('55123');
  $ship_to_address->setState('MN');
  $ship_to_address->setCountry('US');

  $ship_to =  new DigitalRiver\ApiSdk\Model\Shipping();
  $ship_to->setAddress($ship_to_address);
  $ship_to->setName('John Doe');
  $ship_to->setPhone('612-343-4567');
  $ship_to->setEmail('anyemail@anydomain.com');
  $ship_to->setOrganization('Company Name (optional)');
  $checkout_request->setShipTo($ship_to);

  $shipping_choice = new DigitalRiver\ApiSdk\Model\ShippingRequest();
  $shipping_choice->setAmount(5.5);
  $shipping_choice->setDescription("Client provides-Standard Ground - US");
  $shipping_choice->setServiceLevel("Client provides shipping service");
  $checkout_request->setShippingChoice($shipping_choice);
  
  $item_1 = new DigitalRiver\ApiSdk\Model\SkuRequestItem();
  $item_1->setSkuId('365647477-5334d-9f4h-l15mq-45807987');
  $item_1->setQuantity(1);
  $item_1->setPrice(34.99);
  
  $item_2 = new DigitalRiver\ApiSdk\Model\SkuRequestItem();
  $item_2->setSkuId('06999045-5334d-9f4h-h56879k-45801126787');
  $item_2->setQuantity(1);
  $item_2->setPrice(20);
  
  $item_3 = new DigitalRiver\ApiSdk\Model\SkuRequestItem();
  $item_3->setSkuId('374687939-828d88-9f4h-h56879k-47908980498');
  $item_3->setQuantity(1);
  $item_3->setPrice(15);
  $checkout_request->setItems($item_1,$item_2,$item_3);

try {
  $result = $apiInstance->createCheckouts($checkout_request);
    print_r($result);
  } catch (Exception $e) {
    echo 'Exception when calling CheckoutsApi->createCheckouts: ', $e->getMessage(), PHP_EOL;
  }
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.digitalriver.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ChargesApi* | [**retrieveCharges**](docs/Api/ChargesApi.md#retrievecharges) | **GET** /charges/{id} | Gets a charge by ID
*CheckoutsApi* | [**attachSourceToCheckout**](docs/Api/CheckoutsApi.md#attachsourcetocheckout) | **POST** /checkouts/{id}/sources/{sourceId} | Attach source to checkout.
*CheckoutsApi* | [**createCheckouts**](docs/Api/CheckoutsApi.md#createcheckouts) | **POST** /checkouts | Creates a new checkout
*CheckoutsApi* | [**deleteCheckouts**](docs/Api/CheckoutsApi.md#deletecheckouts) | **DELETE** /checkouts/{id} | Deletes a checkout by ID.
*CheckoutsApi* | [**detachSourceToCheckout**](docs/Api/CheckoutsApi.md#detachsourcetocheckout) | **DELETE** /checkouts/{id}/sources/{sourceId} | Deletes a checkout association to source.
*CheckoutsApi* | [**listCheckouts**](docs/Api/CheckoutsApi.md#listcheckouts) | **GET** /checkouts | Returns a list of checkouts
*CheckoutsApi* | [**retrieveCheckouts**](docs/Api/CheckoutsApi.md#retrievecheckouts) | **GET** /checkouts/{id} | Gets a checkout by ID.
*CheckoutsApi* | [**updateCheckouts**](docs/Api/CheckoutsApi.md#updatecheckouts) | **POST** /checkouts/{id} | Updates an existing checkout
*CountrySpecificationsApi* | [**listCountrySpecifications**](docs/Api/CountrySpecificationsApi.md#listcountryspecifications) | **GET** /country-specs | Returns an array containing a country specification
*CustomersApi* | [**createCustomerSource**](docs/Api/CustomersApi.md#createcustomersource) | **POST** /customers/{id}/sources/{sourceId} | Attaches a source to a customer
*CustomersApi* | [**createCustomerTaxIdentifier**](docs/Api/CustomersApi.md#createcustomertaxidentifier) | **POST** /customers/{id}/tax-identifiers/{taxId} | Attaches a tax identifier to a customer
*CustomersApi* | [**createCustomers**](docs/Api/CustomersApi.md#createcustomers) | **POST** /customers | Creates a new customer
*CustomersApi* | [**deleteCustomerSource**](docs/Api/CustomersApi.md#deletecustomersource) | **DELETE** /customers/{id}/sources/{sourceId} | Detaches a source from a customer
*CustomersApi* | [**deleteCustomers**](docs/Api/CustomersApi.md#deletecustomers) | **DELETE** /customers/{id} | Deletes a customer by ID
*CustomersApi* | [**listCustomers**](docs/Api/CustomersApi.md#listcustomers) | **GET** /customers | Returns a list of customers
*CustomersApi* | [**retrieveCustomers**](docs/Api/CustomersApi.md#retrievecustomers) | **GET** /customers/{id} | Gets a customer by ID
*CustomersApi* | [**updateCustomers**](docs/Api/CustomersApi.md#updatecustomers) | **POST** /customers/{id} | Updates an existing customer
*EventsApi* | [**listEvents**](docs/Api/EventsApi.md#listevents) | **GET** /events | Returns a list of events
*EventsApi* | [**retrieveEvents**](docs/Api/EventsApi.md#retrieveevents) | **GET** /events/{id} | Gets an event by identifier
*FeesApi* | [**createFees**](docs/Api/FeesApi.md#createfees) | **POST** /fees | Creates a fee
*FeesApi* | [**deleteFees**](docs/Api/FeesApi.md#deletefees) | **DELETE** /fees/{id} | Deletes a fee by identifier
*FeesApi* | [**listFees**](docs/Api/FeesApi.md#listfees) | **GET** /fees | Returns a list of fees
*FeesApi* | [**retrieveFees**](docs/Api/FeesApi.md#retrievefees) | **GET** /fees/{id} | Gets a Fee by identifier
*FeesApi* | [**updateFees**](docs/Api/FeesApi.md#updatefees) | **POST** /fees/{id} | Updates an existing Fee
*FileLinksApi* | [**createFileLinks**](docs/Api/FileLinksApi.md#createfilelinks) | **POST** /file-links | Creates a file link
*FileLinksApi* | [**deleteFileLinks**](docs/Api/FileLinksApi.md#deletefilelinks) | **DELETE** /file-links/{id} | Deletes a file link by ID.
*FileLinksApi* | [**listFileLinks**](docs/Api/FileLinksApi.md#listfilelinks) | **GET** /file-links | Returns a list of file links
*FileLinksApi* | [**retrieveFileLinks**](docs/Api/FileLinksApi.md#retrievefilelinks) | **GET** /file-links/{id} | Gets a file link by identifer
*FileLinksApi* | [**updateFileLinks**](docs/Api/FileLinksApi.md#updatefilelinks) | **POST** /file-links/{id} | Updates a file link
*FilesApi* | [**createFiles**](docs/Api/FilesApi.md#createfiles) | **POST** /files | Creates a file.
*FilesApi* | [**deleteFiles**](docs/Api/FilesApi.md#deletefiles) | **DELETE** /files/{id} | Deletes a file by ID.
*FilesApi* | [**listFiles**](docs/Api/FilesApi.md#listfiles) | **GET** /files | Returns a list of files.
*FilesApi* | [**retrieveFiles**](docs/Api/FilesApi.md#retrievefiles) | **GET** /files/{id} | Gets a file by ID.
*FulfillmentCancellationsApi* | [**createFulfillmentCancellations**](docs/Api/FulfillmentCancellationsApi.md#createfulfillmentcancellations) | **POST** /fulfillment-cancellations | Creates a cancellation
*FulfillmentCancellationsApi* | [**listFulfillmentCancellations**](docs/Api/FulfillmentCancellationsApi.md#listfulfillmentcancellations) | **GET** /fulfillment-cancellations | Returns a list of fulfillment cancellations
*FulfillmentCancellationsApi* | [**retrieveFulfillmentCancellations**](docs/Api/FulfillmentCancellationsApi.md#retrievefulfillmentcancellations) | **GET** /fulfillment-cancellations/{id} | Gets a fulfillment cancellation by its unique identifier.
*FulfillmentOrdersApi* | [**createFulfillmentOrders**](docs/Api/FulfillmentOrdersApi.md#createfulfillmentorders) | **POST** /fulfillment-orders | Creates a new Fulfillment order
*FulfillmentOrdersApi* | [**listFulfillmentOrders**](docs/Api/FulfillmentOrdersApi.md#listfulfillmentorders) | **GET** /fulfillment-orders | Returns a list of Fulfillment orders.
*FulfillmentOrdersApi* | [**retrieveFulfillmentOrders**](docs/Api/FulfillmentOrdersApi.md#retrievefulfillmentorders) | **GET** /fulfillment-orders/{id} | Gets a Fulfillment order by ID.
*FulfillmentReturnsApi* | [**createFulfillmentReturns**](docs/Api/FulfillmentReturnsApi.md#createfulfillmentreturns) | **POST** /fulfillment-returns | Creates a return
*FulfillmentReturnsApi* | [**listFulfillmentReturns**](docs/Api/FulfillmentReturnsApi.md#listfulfillmentreturns) | **GET** /fulfillment-returns | Returns a list of fulfillment returns
*FulfillmentReturnsApi* | [**retrieveFulfillmentReturns**](docs/Api/FulfillmentReturnsApi.md#retrievefulfillmentreturns) | **GET** /fulfillment-returns/{id} | Gets a fulfillment return by its unique identifier
*FulfillmentsApi* | [**createFulfillments**](docs/Api/FulfillmentsApi.md#createfulfillments) | **POST** /fulfillments | Creates a Fulfillment
*FulfillmentsApi* | [**listFulfillments**](docs/Api/FulfillmentsApi.md#listfulfillments) | **GET** /fulfillments | Returns a list of Fulfillments.
*FulfillmentsApi* | [**retrieveFulfillments**](docs/Api/FulfillmentsApi.md#retrievefulfillments) | **GET** /fulfillments/{id} | Gets a Fulfillment by unique identifier
*InventoryItemsApi* | [**createInventoryItems**](docs/Api/InventoryItemsApi.md#createinventoryitems) | **POST** /inventory-items | Creates an inventory item.
*InventoryItemsApi* | [**deleteInventoryItems**](docs/Api/InventoryItemsApi.md#deleteinventoryitems) | **DELETE** /inventory-items/{id} | Deletes an inventory item by ID.
*InventoryItemsApi* | [**listInventoryItems**](docs/Api/InventoryItemsApi.md#listinventoryitems) | **GET** /inventory-items | Returns a list of inventory items.
*InventoryItemsApi* | [**retrieveInventoryItems**](docs/Api/InventoryItemsApi.md#retrieveinventoryitems) | **GET** /inventory-items/{id} | Gets an inventory item by ID.
*InventoryItemsApi* | [**updateInventoryItems**](docs/Api/InventoryItemsApi.md#updateinventoryitems) | **POST** /inventory-items/{id} | Updates an inventory item.
*InventoryLevelsApi* | [**listInventoryLevels**](docs/Api/InventoryLevelsApi.md#listinventorylevels) | **GET** /inventory-levels | Returns a list of inventory levels.
*InvoicesApi* | [**attachSourceToInvoice**](docs/Api/InvoicesApi.md#attachsourcetoinvoice) | **POST** /invoices/{id}/sources/{sourceId} | Attach source to invoice.
*InvoicesApi* | [**createInvoices**](docs/Api/InvoicesApi.md#createinvoices) | **POST** /invoices | Creates a new invoice
*InvoicesApi* | [**deleteInvoices**](docs/Api/InvoicesApi.md#deleteinvoices) | **DELETE** /invoices/{id} | Deletes an invoice.
*InvoicesApi* | [**detachSourceToInvoice**](docs/Api/InvoicesApi.md#detachsourcetoinvoice) | **DELETE** /invoices/{id}/sources/{sourceId} | Deletes a invoice association to source.
*InvoicesApi* | [**listInvoices**](docs/Api/InvoicesApi.md#listinvoices) | **GET** /invoices | Returns a list of invoices
*InvoicesApi* | [**openInvoices**](docs/Api/InvoicesApi.md#openinvoices) | **POST** /invoices/{id}/open | Opens an existing invoice
*InvoicesApi* | [**retrieveInvoices**](docs/Api/InvoicesApi.md#retrieveinvoices) | **GET** /invoices/{id} | Gets an invoice by identifier
*InvoicesApi* | [**updateInvoices**](docs/Api/InvoicesApi.md#updateinvoices) | **POST** /invoices/{id} | Updates an existing invoice
*InvoicesApi* | [**voidInvoices**](docs/Api/InvoicesApi.md#voidinvoices) | **POST** /invoices/{id}/void | Voids an existing invoice
*OrdersApi* | [**createOrders**](docs/Api/OrdersApi.md#createorders) | **POST** /orders | Creates a new order.
*OrdersApi* | [**listOrders**](docs/Api/OrdersApi.md#listorders) | **GET** /orders | Returns a list of orders.
*OrdersApi* | [**retrieveOrders**](docs/Api/OrdersApi.md#retrieveorders) | **GET** /orders/{id} | Gets an order by ID.
*OrdersApi* | [**updateOrders**](docs/Api/OrdersApi.md#updateorders) | **POST** /orders/{id} | Updates an existing order.
*PayoutTransactionsApi* | [**listPayoutTransactions**](docs/Api/PayoutTransactionsApi.md#listpayouttransactions) | **GET** /payouts/{id}/transactions | Lists the payout transactions for a payout.
*PayoutsApi* | [**listPayouts**](docs/Api/PayoutsApi.md#listpayouts) | **GET** /payouts | Returns a list of payouts
*PayoutsApi* | [**retrievePayouts**](docs/Api/PayoutsApi.md#retrievepayouts) | **GET** /payouts/{id} | Gets a payout by ID.
*PlansApi* | [**createPlans**](docs/Api/PlansApi.md#createplans) | **POST** /plans | Creates a Plan
*PlansApi* | [**deletePlans**](docs/Api/PlansApi.md#deleteplans) | **DELETE** /plans/{id} | Deletes a Plan by ID
*PlansApi* | [**listPlans**](docs/Api/PlansApi.md#listplans) | **GET** /plans | Returns a list of Plans
*PlansApi* | [**retrievePlans**](docs/Api/PlansApi.md#retrieveplans) | **GET** /plans/{id} | Gets a Plan by ID
*PlansApi* | [**updatePlans**](docs/Api/PlansApi.md#updateplans) | **POST** /plans/{id} | Updates a Plan
*RefundsApi* | [**createRefunds**](docs/Api/RefundsApi.md#createrefunds) | **POST** /refunds | Creates a refund for an order.
*RefundsApi* | [**listRefunds**](docs/Api/RefundsApi.md#listrefunds) | **GET** /refunds | Returns a list of refunds
*RefundsApi* | [**retrieveRefunds**](docs/Api/RefundsApi.md#retrieverefunds) | **GET** /refunds/{id} | Gets a refund by ID.
*RefundsApi* | [**updateRefunds**](docs/Api/RefundsApi.md#updaterefunds) | **POST** /refunds/{id} | Updates a refund for an order or a specific order charge.
*ReservationsApi* | [**createReservations**](docs/Api/ReservationsApi.md#createreservations) | **POST** /reservations | Create a reservation
*ReservationsApi* | [**deleteReservations**](docs/Api/ReservationsApi.md#deletereservations) | **DELETE** /reservations/{id} | Cancels a reservation by ID.
*ReturnsApi* | [**createReturns**](docs/Api/ReturnsApi.md#createreturns) | **POST** /returns | Creates a return
*ReturnsApi* | [**listReturns**](docs/Api/ReturnsApi.md#listreturns) | **GET** /returns | Returns a list of returns
*ReturnsApi* | [**retrieveReturns**](docs/Api/ReturnsApi.md#retrievereturns) | **GET** /returns/{id} | Gets a return by ID
*ReturnsApi* | [**updateReturns**](docs/Api/ReturnsApi.md#updatereturns) | **POST** /returns/{id} | Updates an existing return
*SKUsApi* | [**createSkus**](docs/Api/SKUsApi.md#createskus) | **POST** /skus | Creates a SKU
*SKUsApi* | [**deleteSkus**](docs/Api/SKUsApi.md#deleteskus) | **DELETE** /skus/{id} | Deletes a SKU by ID
*SKUsApi* | [**listSkus**](docs/Api/SKUsApi.md#listskus) | **GET** /skus | Returns a list of SKUs
*SKUsApi* | [**retrieveSkus**](docs/Api/SKUsApi.md#retrieveskus) | **GET** /skus/{id} | Gets a SKU by ID
*SKUsApi* | [**updateSkus**](docs/Api/SKUsApi.md#updateskus) | **POST** /skus/{id} | Updates a SKU
*SKUsApi* | [**upsertSkus**](docs/Api/SKUsApi.md#upsertskus) | **PUT** /skus/{id} | Upserts a SKU
*SalesSummariesApi* | [**listSalesSummaries**](docs/Api/SalesSummariesApi.md#listsalessummaries) | **GET** /sales-summaries | Returns a list of sales summaries
*SalesSummariesApi* | [**retrieveSalesSummaries**](docs/Api/SalesSummariesApi.md#retrievesalessummaries) | **GET** /sales-summaries/{id} | Gets a sales summary by ID.
*SalesTransactionsApi* | [**listSalesTransactions**](docs/Api/SalesTransactionsApi.md#listsalestransactions) | **GET** /sales-transactions | Returns a list of sales transactions
*SalesTransactionsApi* | [**retrieveSalesTransactions**](docs/Api/SalesTransactionsApi.md#retrievesalestransactions) | **GET** /sales-transactions/{id} | Gets a sales transaction by ID.
*ShipmentsApi* | [**listShipments**](docs/Api/ShipmentsApi.md#listshipments) | **GET** /shipments | Returns a list of shipments
*ShipmentsApi* | [**retrieveShipments**](docs/Api/ShipmentsApi.md#retrieveshipments) | **GET** /shipments/{id} | Gets a shipment by ID.
*ShippingQuotesApi* | [**listShippingQuotes**](docs/Api/ShippingQuotesApi.md#listshippingquotes) | **POST** /shipping-quotes | Returns shipping quotes
*SkuGroupsApi* | [**listSkuGroups**](docs/Api/SkuGroupsApi.md#listskugroups) | **GET** /sku-groups | Returns a list of SKU Groups
*SourcesApi* | [**createSources**](docs/Api/SourcesApi.md#createsources) | **POST** /sources | Posts a source
*SourcesApi* | [**retrieveSources**](docs/Api/SourcesApi.md#retrievesources) | **GET** /sources/{id} | Gets a source by identifier
*SubscriptionsApi* | [**deleteSubscriptions**](docs/Api/SubscriptionsApi.md#deletesubscriptions) | **DELETE** /subscriptions/{id} | Deletes a Subscription by ID
*SubscriptionsApi* | [**listSubscriptions**](docs/Api/SubscriptionsApi.md#listsubscriptions) | **GET** /subscriptions | Returns a list of Subscriptions
*SubscriptionsApi* | [**retrieveSubscriptions**](docs/Api/SubscriptionsApi.md#retrievesubscriptions) | **GET** /subscriptions/{id} | Gets a Subscription by ID
*SubscriptionsApi* | [**updateSubscriptions**](docs/Api/SubscriptionsApi.md#updatesubscriptions) | **POST** /subscriptions/{id} | Updates a Subscription
*TaxIdentifiersApi* | [**createTaxIdentifiers**](docs/Api/TaxIdentifiersApi.md#createtaxidentifiers) | **POST** /tax-identifiers | Creates a new tax identifier
*TaxIdentifiersApi* | [**deleteTaxIdentifiers**](docs/Api/TaxIdentifiersApi.md#deletetaxidentifiers) | **DELETE** /tax-identifiers/{id} | Deletes a tax identifier by ID.
*TaxIdentifiersApi* | [**listTaxIdentifiers**](docs/Api/TaxIdentifiersApi.md#listtaxidentifiers) | **GET** /tax-identifiers | Returns a list of tax identifiers
*TaxIdentifiersApi* | [**retrieveTaxIdentifiers**](docs/Api/TaxIdentifiersApi.md#retrievetaxidentifiers) | **GET** /tax-identifiers/{id} | Gets a tax identifier by ID.
*WebhooksApi* | [**createWebhooks**](docs/Api/WebhooksApi.md#createwebhooks) | **POST** /webhooks | Creates a new webhook
*WebhooksApi* | [**deleteWebhooks**](docs/Api/WebhooksApi.md#deletewebhooks) | **DELETE** /webhooks/{id} | Deletes a webhook endpoint by ID.
*WebhooksApi* | [**listWebhooks**](docs/Api/WebhooksApi.md#listwebhooks) | **GET** /webhooks | Returns a list of webhooks
*WebhooksApi* | [**retrieveWebhooks**](docs/Api/WebhooksApi.md#retrievewebhooks) | **GET** /webhooks/{id} | Gets a webhook endpoint by ID.
*WebhooksApi* | [**updateWebhooks**](docs/Api/WebhooksApi.md#updatewebhooks) | **PATCH** /webhooks/{id} | Updates an existing webhook endpoint


## Documentation For Models

 - [AdditionalAddressInfo](docs/Model/AdditionalAddressInfo.md)
 - [AdditionalBillingAddressInfo](docs/Model/AdditionalBillingAddressInfo.md)
 - [Address](docs/Model/Address.md)
 - [Applicability](docs/Model/Applicability.md)
 - [BPay](docs/Model/BPay.md)
 - [Battery](docs/Model/Battery.md)
 - [Billing](docs/Model/Billing.md)
 - [Cancel](docs/Model/Cancel.md)
 - [Capture](docs/Model/Capture.md)
 - [Charge](docs/Model/Charge.md)
 - [ChargeType](docs/Model/ChargeType.md)
 - [Charges](docs/Model/Charges.md)
 - [Checkout](docs/Model/Checkout.md)
 - [CheckoutRequest](docs/Model/CheckoutRequest.md)
 - [CheckoutTaxIdentifierRequest](docs/Model/CheckoutTaxIdentifierRequest.md)
 - [CountrySpecification](docs/Model/CountrySpecification.md)
 - [CreateReturnResponse](docs/Model/CreateReturnResponse.md)
 - [CreditCard](docs/Model/CreditCard.md)
 - [CreditSource](docs/Model/CreditSource.md)
 - [Customer](docs/Model/Customer.md)
 - [CustomerRequest](docs/Model/CustomerRequest.md)
 - [CustomerTaxIdentifier](docs/Model/CustomerTaxIdentifier.md)
 - [CustomerType](docs/Model/CustomerType.md)
 - [CustomerType1](docs/Model/CustomerType1.md)
 - [DirectDebit](docs/Model/DirectDebit.md)
 - [DirectDebitRedirect](docs/Model/DirectDebitRedirect.md)
 - [Disclosure](docs/Model/Disclosure.md)
 - [Discount](docs/Model/Discount.md)
 - [Duties](docs/Model/Duties.md)
 - [Error](docs/Model/Error.md)
 - [Errors](docs/Model/Errors.md)
 - [Event](docs/Model/Event.md)
 - [EventData](docs/Model/EventData.md)
 - [Fee](docs/Model/Fee.md)
 - [FeeDetails](docs/Model/FeeDetails.md)
 - [FeeRequest](docs/Model/FeeRequest.md)
 - [FeeUpdateRequest](docs/Model/FeeUpdateRequest.md)
 - [Fees](docs/Model/Fees.md)
 - [File](docs/Model/File.md)
 - [FileJsonRequest](docs/Model/FileJsonRequest.md)
 - [FileLink](docs/Model/FileLink.md)
 - [FileLinkRequest](docs/Model/FileLinkRequest.md)
 - [FileObject](docs/Model/FileObject.md)
 - [FileRequest](docs/Model/FileRequest.md)
 - [FraudStateTransitions](docs/Model/FraudStateTransitions.md)
 - [Fulfillment](docs/Model/Fulfillment.md)
 - [FulfillmentRequest](docs/Model/FulfillmentRequest.md)
 - [FulfillmentRequestItem](docs/Model/FulfillmentRequestItem.md)
 - [FulfillmentResponseItem](docs/Model/FulfillmentResponseItem.md)
 - [GlobalFulfillmentAddress](docs/Model/GlobalFulfillmentAddress.md)
 - [GlobalFulfillmentCancellationItemRequest](docs/Model/GlobalFulfillmentCancellationItemRequest.md)
 - [GlobalFulfillmentCancellationItemResponse](docs/Model/GlobalFulfillmentCancellationItemResponse.md)
 - [GlobalFulfillmentCancellationRequest](docs/Model/GlobalFulfillmentCancellationRequest.md)
 - [GlobalFulfillmentCancellationResponse](docs/Model/GlobalFulfillmentCancellationResponse.md)
 - [GlobalFulfillmentOrder](docs/Model/GlobalFulfillmentOrder.md)
 - [GlobalFulfillmentOrderRequest](docs/Model/GlobalFulfillmentOrderRequest.md)
 - [GlobalFulfillmentReturnItemRequest](docs/Model/GlobalFulfillmentReturnItemRequest.md)
 - [GlobalFulfillmentReturnItemResponse](docs/Model/GlobalFulfillmentReturnItemResponse.md)
 - [GlobalFulfillmentReturnRequest](docs/Model/GlobalFulfillmentReturnRequest.md)
 - [GlobalFulfillmentReturnResponse](docs/Model/GlobalFulfillmentReturnResponse.md)
 - [GlobalFulfillmentShippingChoice](docs/Model/GlobalFulfillmentShippingChoice.md)
 - [GlobalFulfillmentTax](docs/Model/GlobalFulfillmentTax.md)
 - [GooglePay](docs/Model/GooglePay.md)
 - [HTTPAuthorization](docs/Model/HTTPAuthorization.md)
 - [ImporterTax](docs/Model/ImporterTax.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InternetBankPayment](docs/Model/InternetBankPayment.md)
 - [InventoryItem](docs/Model/InventoryItem.md)
 - [InventoryItemRequest](docs/Model/InventoryItemRequest.md)
 - [InventoryItemUpdateRequest](docs/Model/InventoryItemUpdateRequest.md)
 - [InventoryLevel](docs/Model/InventoryLevel.md)
 - [Invoice](docs/Model/Invoice.md)
 - [InvoiceItem](docs/Model/InvoiceItem.md)
 - [InvoiceItemRequest](docs/Model/InvoiceItemRequest.md)
 - [InvoiceRequest](docs/Model/InvoiceRequest.md)
 - [Klarna](docs/Model/Klarna.md)
 - [KlarnaAddress](docs/Model/KlarnaAddress.md)
 - [KlarnaRecurring](docs/Model/KlarnaRecurring.md)
 - [KlarnaShipping](docs/Model/KlarnaShipping.md)
 - [Konbini](docs/Model/Konbini.md)
 - [LineItem](docs/Model/LineItem.md)
 - [LineItemRequest](docs/Model/LineItemRequest.md)
 - [ListCheckoutsResponse](docs/Model/ListCheckoutsResponse.md)
 - [ListCountrySpecsResponse](docs/Model/ListCountrySpecsResponse.md)
 - [ListCustomersResponse](docs/Model/ListCustomersResponse.md)
 - [ListEventsResponse](docs/Model/ListEventsResponse.md)
 - [ListFeesResponse](docs/Model/ListFeesResponse.md)
 - [ListFileLinksResponse](docs/Model/ListFileLinksResponse.md)
 - [ListFilesResponse](docs/Model/ListFilesResponse.md)
 - [ListFulfillmentsResponse](docs/Model/ListFulfillmentsResponse.md)
 - [ListGlobalFulfillmentCancellationsResponse](docs/Model/ListGlobalFulfillmentCancellationsResponse.md)
 - [ListGlobalFulfillmentReturnsResponse](docs/Model/ListGlobalFulfillmentReturnsResponse.md)
 - [ListOrdersResponse](docs/Model/ListOrdersResponse.md)
 - [ListPayoutTransactionResponse](docs/Model/ListPayoutTransactionResponse.md)
 - [ListPayoutsResponse](docs/Model/ListPayoutsResponse.md)
 - [ListPlansResponse](docs/Model/ListPlansResponse.md)
 - [ListRefundsResponse](docs/Model/ListRefundsResponse.md)
 - [ListReturnsResponse](docs/Model/ListReturnsResponse.md)
 - [ListSalesSummariesResponse](docs/Model/ListSalesSummariesResponse.md)
 - [ListSalesTransactionsResponse](docs/Model/ListSalesTransactionsResponse.md)
 - [ListSkuGroupsResponse](docs/Model/ListSkuGroupsResponse.md)
 - [ListSkusResponse](docs/Model/ListSkusResponse.md)
 - [ListSubscriptionsResponse](docs/Model/ListSubscriptionsResponse.md)
 - [Location](docs/Model/Location.md)
 - [OAUTHTokenInfo](docs/Model/OAUTHTokenInfo.md)
 - [Order](docs/Model/Order.md)
 - [OrderItem](docs/Model/OrderItem.md)
 - [OrderItemStateTransitions](docs/Model/OrderItemStateTransitions.md)
 - [OrderRefund](docs/Model/OrderRefund.md)
 - [OrderRequest](docs/Model/OrderRequest.md)
 - [OrderStateTransitions](docs/Model/OrderStateTransitions.md)
 - [Organization](docs/Model/Organization.md)
 - [Owner](docs/Model/Owner.md)
 - [PayPal](docs/Model/PayPal.md)
 - [PayPalToken](docs/Model/PayPalToken.md)
 - [PaycoResponse](docs/Model/PaycoResponse.md)
 - [Payments](docs/Model/Payments.md)
 - [Payout](docs/Model/Payout.md)
 - [PayoutAmounts](docs/Model/PayoutAmounts.md)
 - [PayoutTransaction](docs/Model/PayoutTransaction.md)
 - [Plan](docs/Model/Plan.md)
 - [PlanRequest](docs/Model/PlanRequest.md)
 - [ProductItem](docs/Model/ProductItem.md)
 - [ProductItemRequest](docs/Model/ProductItemRequest.md)
 - [PurchaseLocation](docs/Model/PurchaseLocation.md)
 - [Redirect](docs/Model/Redirect.md)
 - [Refund](docs/Model/Refund.md)
 - [RefundCharges](docs/Model/RefundCharges.md)
 - [RefundItem](docs/Model/RefundItem.md)
 - [RefundItemRequest](docs/Model/RefundItemRequest.md)
 - [RefundRequest](docs/Model/RefundRequest.md)
 - [RequestReturnItem](docs/Model/RequestReturnItem.md)
 - [Reservation](docs/Model/Reservation.md)
 - [ReservationAddress](docs/Model/ReservationAddress.md)
 - [ReservationInventoryItem](docs/Model/ReservationInventoryItem.md)
 - [ReservationRequest](docs/Model/ReservationRequest.md)
 - [ReservationShipping](docs/Model/ReservationShipping.md)
 - [ReservationShippingChoice](docs/Model/ReservationShippingChoice.md)
 - [ReturnAddress](docs/Model/ReturnAddress.md)
 - [ReturnItem](docs/Model/ReturnItem.md)
 - [ReturnLocation](docs/Model/ReturnLocation.md)
 - [ReturnRequest](docs/Model/ReturnRequest.md)
 - [ReturnResponse](docs/Model/ReturnResponse.md)
 - [SalesSummary](docs/Model/SalesSummary.md)
 - [SalesTransaction](docs/Model/SalesTransaction.md)
 - [SellingEntity](docs/Model/SellingEntity.md)
 - [Session](docs/Model/Session.md)
 - [ShipFrom](docs/Model/ShipFrom.md)
 - [Shipment](docs/Model/Shipment.md)
 - [ShipmentItem](docs/Model/ShipmentItem.md)
 - [ShipmentUnitAttributes](docs/Model/ShipmentUnitAttributes.md)
 - [Shipping](docs/Model/Shipping.md)
 - [ShippingChoice](docs/Model/ShippingChoice.md)
 - [ShippingMethod](docs/Model/ShippingMethod.md)
 - [ShippingQuote](docs/Model/ShippingQuote.md)
 - [ShippingQuoteAddress](docs/Model/ShippingQuoteAddress.md)
 - [ShippingQuoteRequest](docs/Model/ShippingQuoteRequest.md)
 - [ShippingQuoteResponse](docs/Model/ShippingQuoteResponse.md)
 - [ShippingRequest](docs/Model/ShippingRequest.md)
 - [Sku](docs/Model/Sku.md)
 - [SkuDiscount](docs/Model/SkuDiscount.md)
 - [SkuGroup](docs/Model/SkuGroup.md)
 - [SkuItem](docs/Model/SkuItem.md)
 - [SkuRequest](docs/Model/SkuRequest.md)
 - [SkuRequestItem](docs/Model/SkuRequestItem.md)
 - [SkuUpdateRequestItem](docs/Model/SkuUpdateRequestItem.md)
 - [SkuUpsertRequest](docs/Model/SkuUpsertRequest.md)
 - [Source](docs/Model/Source.md)
 - [StateTransitions](docs/Model/StateTransitions.md)
 - [Subscription](docs/Model/Subscription.md)
 - [SubscriptionInfo](docs/Model/SubscriptionInfo.md)
 - [SubscriptionItems](docs/Model/SubscriptionItems.md)
 - [Tax](docs/Model/Tax.md)
 - [TaxCertificate](docs/Model/TaxCertificate.md)
 - [TaxDetail](docs/Model/TaxDetail.md)
 - [TaxIdentifier](docs/Model/TaxIdentifier.md)
 - [TaxIdentifierRequest](docs/Model/TaxIdentifierRequest.md)
 - [TaxIdentifierStateTransitions](docs/Model/TaxIdentifierStateTransitions.md)
 - [TokenInformation](docs/Model/TokenInformation.md)
 - [Tracking](docs/Model/Tracking.md)
 - [UnitAttributes](docs/Model/UnitAttributes.md)
 - [UpdateCheckoutRequest](docs/Model/UpdateCheckoutRequest.md)
 - [UpdateCustomerRequest](docs/Model/UpdateCustomerRequest.md)
 - [UpdateFileLinkRequest](docs/Model/UpdateFileLinkRequest.md)
 - [UpdateInvoiceRequest](docs/Model/UpdateInvoiceRequest.md)
 - [UpdateOrderRequest](docs/Model/UpdateOrderRequest.md)
 - [UpdatePlanRequest](docs/Model/UpdatePlanRequest.md)
 - [UpdateRefundRequest](docs/Model/UpdateRefundRequest.md)
 - [UpdateReturnItem](docs/Model/UpdateReturnItem.md)
 - [UpdateReturnRequest](docs/Model/UpdateReturnRequest.md)
 - [UpdateSkuRequest](docs/Model/UpdateSkuRequest.md)
 - [UpdateSubscriptionRequest](docs/Model/UpdateSubscriptionRequest.md)
 - [UpdateTaxIdentifierRequest](docs/Model/UpdateTaxIdentifierRequest.md)
 - [WEEE](docs/Model/WEEE.md)
 - [Webhook](docs/Model/Webhook.md)
 - [WebhookOauth](docs/Model/WebhookOauth.md)
 - [WebhookRequest](docs/Model/WebhookRequest.md)
 - [WebhookRequestAuthentication](docs/Model/WebhookRequestAuthentication.md)
 - [WebhookRequestOauth](docs/Model/WebhookRequestOauth.md)
 - [WebhookUpdateRequest](docs/Model/WebhookUpdateRequest.md)
 - [WebhookUpdateRequestOauth](docs/Model/WebhookUpdateRequestOauth.md)
 - [WireTransfer](docs/Model/WireTransfer.md)


## Documentation For Authorization



## apiKey


- **Type**: API key
- **API key parameter name**: X-API-KEY
- **Location**: HTTP header




## bearerAuth


- **Type**: Bearer authentication


## Author



