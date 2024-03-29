<?php
/**
 * CountrySpecificationsApi
 * PHP version 7.2
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace DigitalRiver\ApiSdk\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use DigitalRiver\ApiSdk\ApiException;
use DigitalRiver\ApiSdk\Configuration;
use DigitalRiver\ApiSdk\HeaderSelector;
use DigitalRiver\ApiSdk\ObjectSerializer;

/**
 * CountrySpecificationsApi Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CountrySpecificationsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation listCountrySpecifications
     *
     * Returns an array containing a country specification
     *
     * @param  string $country Represents the expected billing or ship to country of the customer. (required)
     * @param  string $selling_entity Represents the selling entity assigned to the order. (required)
     *
     * @throws \DigitalRiver\ApiSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \DigitalRiver\ApiSdk\Model\ListCountrySpecsResponse|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors
     */
    public function listCountrySpecifications($country, $selling_entity)
    {
        list($response) = $this->listCountrySpecificationsWithHttpInfo($country, $selling_entity);
        return $response;
    }

    /**
     * Operation listCountrySpecificationsWithHttpInfo
     *
     * Returns an array containing a country specification
     *
     * @param  string $country Represents the expected billing or ship to country of the customer. (required)
     * @param  string $selling_entity Represents the selling entity assigned to the order. (required)
     *
     * @throws \DigitalRiver\ApiSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \DigitalRiver\ApiSdk\Model\ListCountrySpecsResponse|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors, HTTP status code, HTTP response headers (array of strings)
     */
    public function listCountrySpecificationsWithHttpInfo($country, $selling_entity)
    {
        $request = $this->listCountrySpecificationsRequest($country, $selling_entity);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\DigitalRiver\ApiSdk\Model\ListCountrySpecsResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\ListCountrySpecsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 405:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 406:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 408:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 502:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 504:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\DigitalRiver\ApiSdk\Model\ListCountrySpecsResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\ListCountrySpecsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 408:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 504:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listCountrySpecificationsAsync
     *
     * Returns an array containing a country specification
     *
     * @param  string $country Represents the expected billing or ship to country of the customer. (required)
     * @param  string $selling_entity Represents the selling entity assigned to the order. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listCountrySpecificationsAsync($country, $selling_entity)
    {
        return $this->listCountrySpecificationsAsyncWithHttpInfo($country, $selling_entity)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listCountrySpecificationsAsyncWithHttpInfo
     *
     * Returns an array containing a country specification
     *
     * @param  string $country Represents the expected billing or ship to country of the customer. (required)
     * @param  string $selling_entity Represents the selling entity assigned to the order. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listCountrySpecificationsAsyncWithHttpInfo($country, $selling_entity)
    {
        $returnType = '\DigitalRiver\ApiSdk\Model\ListCountrySpecsResponse';
        $request = $this->listCountrySpecificationsRequest($country, $selling_entity);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'listCountrySpecifications'
     *
     * @param  string $country Represents the expected billing or ship to country of the customer. (required)
     * @param  string $selling_entity Represents the selling entity assigned to the order. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listCountrySpecificationsRequest($country, $selling_entity)
    {
        // verify the required parameter 'country' is set
        if ($country === null || (is_array($country) && count($country) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $country when calling listCountrySpecifications'
            );
        }
        // verify the required parameter 'selling_entity' is set
        if ($selling_entity === null || (is_array($selling_entity) && count($selling_entity) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $selling_entity when calling listCountrySpecifications'
            );
        }

        $resourcePath = '/country-specs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($country !== null) {
            if('form' === 'form' && is_array($country)) {
                foreach($country as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['country'] = $country;
            }
        }
        // query params
        if ($selling_entity !== null) {
            if('form' === 'form' && is_array($selling_entity)) {
                foreach($selling_entity as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['sellingEntity'] = $selling_entity;
            }
        }



        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        //$query = \GuzzleHttp\Psr7\build_query($queryParams);
        //this is changed for supporting deepobject in url in the form /skus?createdTime[lt]=2020-09-22T12:09:44Z
        $query = http_build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
