<?php

/**
 * DSVLagTimeApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 */

/**
 * Lag Time
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Apis\Supplier\US;

use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use Walmart\Apis\BaseApi;
use Walmart\ApiException;
use Walmart\ObjectSerializer;

/**
 * DSVLagTimeApi Class Doc Comment
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class DSVLagTimeApi extends BaseApi
{
    /**
     * @var string[] $contentTypes
     */
    public const contentTypes = [
        'getLagTime' => 'application/json',
        'updateLagTimeBulk' => 'application/json',
    ];

    /**
     * Operation getLagTime
     *
     * Lag Time
     *
     * @param  string $shipNode Specifies the distribution facility distributor identifier.   This parameter identifies each facility for which the data should be updated. The identifier is autogenerated during drop ship vendor (DSV) account creation. Every time users add or update a facility in Supplier Center, a new identifier is generated. (required)
     * @param  string $sku Specifies the stock keeping unit (SKU) item identifier.   This type of identifier is an arbitrary, alphanumeric identifier that is specified by the drop ship vendor (DSV) and used by the vendor in the specification file to refer to each item.   Either the `sku` or `gtin` parameter will be required. The user can only submit one.   The following special characters in the stock keeping unit (SKU) require encoding: ':', '/', '?', '#', '[', ']', '@', '!', '$', '&', \"'\", '(', ')', '*', '+', ',', ';', '=', ' ', '{', and '}'. '%' requires encoding if it is part of the stock keeping unit (SKU). Encode spaces with %20. Other characters do not require encoding. (optional)
     * @param  string $gtin Specifies the global trade item number (GTIN) item identifier.   The global trade item number is a 14-digit number, including the check digit, that is used worldwide and identifies the Each. If the user's number is less than 14 digits, add zeros at the beginning.   Either the `sku` or `gtin` parameter will be required. The user can only submit one. (optional)
     *
     * @throws \Walmart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Walmart\Models\Supplier\US\DSVLagTime\LagTimeResponse
     */
    public function getLagTime(
        string $shipNode,
        ?string $sku = null,
        ?string $gtin = null
    ): \Walmart\Models\Supplier\US\DSVLagTime\LagTimeResponse {
        return $this->getLagTimeWithHttpInfo($shipNode, $sku, $gtin);
    }

    /**
     * Operation getLagTimeWithHttpInfo
     *
     * Lag Time
     *
     * @param  string $shipNode Specifies the distribution facility distributor identifier.   This parameter identifies each facility for which the data should be updated. The identifier is autogenerated during drop ship vendor (DSV) account creation. Every time users add or update a facility in Supplier Center, a new identifier is generated. (required)
     * @param  string $sku Specifies the stock keeping unit (SKU) item identifier.   This type of identifier is an arbitrary, alphanumeric identifier that is specified by the drop ship vendor (DSV) and used by the vendor in the specification file to refer to each item.   Either the `sku` or `gtin` parameter will be required. The user can only submit one.   The following special characters in the stock keeping unit (SKU) require encoding: ':', '/', '?', '#', '[', ']', '@', '!', '$', '&', \"'\", '(', ')', '*', '+', ',', ';', '=', ' ', '{', and '}'. '%' requires encoding if it is part of the stock keeping unit (SKU). Encode spaces with %20. Other characters do not require encoding. (optional)
     * @param  string $gtin Specifies the global trade item number (GTIN) item identifier.   The global trade item number is a 14-digit number, including the check digit, that is used worldwide and identifies the Each. If the user's number is less than 14 digits, add zeros at the beginning.   Either the `sku` or `gtin` parameter will be required. The user can only submit one. (optional)
     *
     * @throws \Walmart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Walmart\Models\Supplier\US\DSVLagTime\LagTimeResponse
     */
    protected function getLagTimeWithHttpInfo(
        string $shipNode,
        ?string $sku = null,
        ?string $gtin = null,
    ): \Walmart\Models\Supplier\US\DSVLagTime\LagTimeResponse {
        $request = $this->getLagTimeRequest($shipNode, $sku, $gtin);
        $this->writeDebug($request);
        $this->writeDebug((string) $request->getBody());

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
                $this->writeDebug($response);
                $this->writeDebug((string) $response->getBody());
            } catch (RequestException $e) {
                $hasResponse = !empty($e->hasResponse());
                $body = (string) ($hasResponse ? $e->getResponse()->getBody() : '[NULL response]');
                $this->writeDebug($e->getResponse());
                $this->writeDebug($body);

                throw new ApiException(
                    "[{$e->getCode()}] {$body}",
                    (int) $e->getCode(),
                    $hasResponse ? $e->getResponse()->getHeaders() : null,
                    $body
                );
            } catch (ConnectException $e) {
                $this->writeDebug($e->getMessage());

                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }
            switch ($statusCode) {
                case 200:
                    if ('\Walmart\Models\Supplier\US\DSVLagTime\LagTimeResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Walmart\Models\Supplier\US\DSVLagTime\LagTimeResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return ObjectSerializer::deserialize($content, '\Walmart\Models\Supplier\US\DSVLagTime\LagTimeResponse', $response->getHeaders());
            }

            $returnType = '\Walmart\Models\Supplier\US\DSVLagTime\LagTimeResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Walmart\Models\Supplier\US\DSVLagTime\LagTimeResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }

            $this->writeDebug($e);
            throw $e;
        }
    }

    /**
     * Operation getLagTimeAsync
     *
     * Lag Time
     *
     * @param  string $shipNode Specifies the distribution facility distributor identifier.   This parameter identifies each facility for which the data should be updated. The identifier is autogenerated during drop ship vendor (DSV) account creation. Every time users add or update a facility in Supplier Center, a new identifier is generated. (required)
     * @param  string $sku Specifies the stock keeping unit (SKU) item identifier.   This type of identifier is an arbitrary, alphanumeric identifier that is specified by the drop ship vendor (DSV) and used by the vendor in the specification file to refer to each item.   Either the `sku` or `gtin` parameter will be required. The user can only submit one.   The following special characters in the stock keeping unit (SKU) require encoding: ':', '/', '?', '#', '[', ']', '@', '!', '$', '&', \"'\", '(', ')', '*', '+', ',', ';', '=', ' ', '{', and '}'. '%' requires encoding if it is part of the stock keeping unit (SKU). Encode spaces with %20. Other characters do not require encoding. (optional)
     * @param  string $gtin Specifies the global trade item number (GTIN) item identifier.   The global trade item number is a 14-digit number, including the check digit, that is used worldwide and identifies the Each. If the user's number is less than 14 digits, add zeros at the beginning.   Either the `sku` or `gtin` parameter will be required. The user can only submit one. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLagTimeAsync(
        string $shipNode,
        ?string $sku = null,
        ?string $gtin = null
    ): PromiseInterface {
        return $this->getLagTimeAsyncWithHttpInfo($shipNode, $sku, $gtin)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getLagTimeAsyncWithHttpInfo
     *
     * Lag Time
     *
     * @param  string $shipNode Specifies the distribution facility distributor identifier.   This parameter identifies each facility for which the data should be updated. The identifier is autogenerated during drop ship vendor (DSV) account creation. Every time users add or update a facility in Supplier Center, a new identifier is generated. (required)
     * @param  string $sku Specifies the stock keeping unit (SKU) item identifier.   This type of identifier is an arbitrary, alphanumeric identifier that is specified by the drop ship vendor (DSV) and used by the vendor in the specification file to refer to each item.   Either the `sku` or `gtin` parameter will be required. The user can only submit one.   The following special characters in the stock keeping unit (SKU) require encoding: ':', '/', '?', '#', '[', ']', '@', '!', '$', '&', \"'\", '(', ')', '*', '+', ',', ';', '=', ' ', '{', and '}'. '%' requires encoding if it is part of the stock keeping unit (SKU). Encode spaces with %20. Other characters do not require encoding. (optional)
     * @param  string $gtin Specifies the global trade item number (GTIN) item identifier.   The global trade item number is a 14-digit number, including the check digit, that is used worldwide and identifies the Each. If the user's number is less than 14 digits, add zeros at the beginning.   Either the `sku` or `gtin` parameter will be required. The user can only submit one. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    protected function getLagTimeAsyncWithHttpInfo(
        string $shipNode,
        ?string $sku = null,
        ?string $gtin = null,
    ): PromiseInterface {
        $returnType = '\Walmart\Models\Supplier\US\DSVLagTime\LagTimeResponse';
        $request = $this->getLagTimeRequest($shipNode, $sku, $gtin);
        $this->writeDebug($request);
        $this->writeDebug((string) $request->getBody());

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $this->writeDebug($response);
                    $this->writeDebug((string) $response->getBody());
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $hasResponse = !empty($response);
                    $body = (string) ($hasResponse ? $response->getBody() : '[NULL response]');
                    $this->writeDebug($response);
                    $statusCode = $hasResponse ? $response->getStatusCode() : $exception->getCode();

                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $body,
                    );
                }
            );
    }

    /**
     * Create request for operation 'getLagTime'
     *
     * @param  string $shipNode Specifies the distribution facility distributor identifier.   This parameter identifies each facility for which the data should be updated. The identifier is autogenerated during drop ship vendor (DSV) account creation. Every time users add or update a facility in Supplier Center, a new identifier is generated. (required)
     * @param  string $sku Specifies the stock keeping unit (SKU) item identifier.   This type of identifier is an arbitrary, alphanumeric identifier that is specified by the drop ship vendor (DSV) and used by the vendor in the specification file to refer to each item.   Either the `sku` or `gtin` parameter will be required. The user can only submit one.   The following special characters in the stock keeping unit (SKU) require encoding: ':', '/', '?', '#', '[', ']', '@', '!', '$', '&', \"'\", '(', ')', '*', '+', ',', ';', '=', ' ', '{', and '}'. '%' requires encoding if it is part of the stock keeping unit (SKU). Encode spaces with %20. Other characters do not require encoding. (optional)
     * @param  string $gtin Specifies the global trade item number (GTIN) item identifier.   The global trade item number is a 14-digit number, including the check digit, that is used worldwide and identifies the Each. If the user's number is less than 14 digits, add zeros at the beginning.   Either the `sku` or `gtin` parameter will be required. The user can only submit one. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getLagTimeRequest(
        string $shipNode,
        ?string $sku = null,
        ?string $gtin = null,
    ): Request {
        $contentType = self::contentTypes['getLagTime'];

        // verify the required parameter 'shipNode' is set
        if ($shipNode === null || (is_array($shipNode) && count($shipNode) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $shipNode when calling getLagTime'
            );
        }
        $resourcePath = '/v3/lagtime';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $method = 'GET';

        // query params
        $queryParams = array_merge(
            ObjectSerializer::toQueryValue(
                $sku,
                'sku', // param base name
                'string', // openApiType
                'form', // style
                true, // explode
                false // required
            ) ?? [],
            ObjectSerializer::toQueryValue(
                $gtin,
                'gtin', // param base name
                'string', // openApiType
                'form', // style
                true, // explode
                false // required
            ) ?? [],
            ObjectSerializer::toQueryValue(
                $shipNode,
                'shipNode', // param base name
                'string', // openApiType
                'form', // style
                true, // explode
                true // required
            ) ?? [],
        );

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            $contentType,
            $multipart
        );

        $defaultHeaders = parent::getDefaultHeaders();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
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
            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        $query = ObjectSerializer::buildQuery($queryParams);
        $requestInfo = [
            'path' => $resourcePath,
            'method' => $method,
            'timestamp' => $defaultHeaders['WM_SEC.TIMESTAMP'],
            'query' => $query,
        ];

        $partnerApiKey = $this->config->getApiKey('partner', $requestInfo);
        if ($partnerApiKey !== null) {
            $headers['WM_PARTNER.ID'] = $partnerApiKey;
        }

        $signatureApiKey = $this->config->getApiKey('signature', $requestInfo);
        if ($signatureApiKey !== null) {
            $headers['WM_SEC.AUTH_SIGNATURE'] = $signatureApiKey;
        }

        $consumerIdApiKey = $this->config->getApiKey('consumerId', $requestInfo);
        if ($consumerIdApiKey !== null) {
            $headers['WM_CONSUMER.ID'] = $consumerIdApiKey;
        }

        // this endpoint requires Bearer authentication (access token)
        $token = $this->config->getAccessToken();
        if ($token) {
            $headers['WM_SEC.ACCESS_TOKEN'] = $token->accessToken;
        }

        $operationHost = $this->config->getHost();
        return new Request(
            $method,
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateLagTimeBulk
     *
     * Update Lag Time
     *
     * @param  string $feedType Specifies the type of the feed content.   Use `lagtime` for this API. (required)
     * @param  string $shipNode Specifies the distribution facility distributor identifier.   This parameter is used in v1.0 and not used in v2.x.    This parameter identifies each facility from which the inventory is requested. The identifier is autogenerated during drop ship vendor (DSV) account creation. Every time users add or update a facility in Supplier Center, a new identifier is generated. (required)
     * @param  \Walmart\Models\Supplier\US\DSVLagTime\LagTimeFeedV2 $lagTimeFeedV2 File fields (required)
     *
     * @throws \Walmart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Walmart\Models\Supplier\US\DSVLagTime\FeedId
     */
    public function updateLagTimeBulk(
        string $feedType,
        string $shipNode,
        \Walmart\Models\Supplier\US\DSVLagTime\LagTimeFeedV2 $lagTimeFeedV2
    ): \Walmart\Models\Supplier\US\DSVLagTime\FeedId {
        return $this->updateLagTimeBulkWithHttpInfo($feedType, $shipNode, $lagTimeFeedV2);
    }

    /**
     * Operation updateLagTimeBulkWithHttpInfo
     *
     * Update Lag Time
     *
     * @param  string $feedType Specifies the type of the feed content.   Use `lagtime` for this API. (required)
     * @param  string $shipNode Specifies the distribution facility distributor identifier.   This parameter is used in v1.0 and not used in v2.x.    This parameter identifies each facility from which the inventory is requested. The identifier is autogenerated during drop ship vendor (DSV) account creation. Every time users add or update a facility in Supplier Center, a new identifier is generated. (required)
     * @param  \Walmart\Models\Supplier\US\DSVLagTime\LagTimeFeedV2 $lagTimeFeedV2 File fields (required)
     *
     * @throws \Walmart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Walmart\Models\Supplier\US\DSVLagTime\FeedId
     */
    protected function updateLagTimeBulkWithHttpInfo(
        string $feedType,
        string $shipNode,
        \Walmart\Models\Supplier\US\DSVLagTime\LagTimeFeedV2 $lagTimeFeedV2,
    ): \Walmart\Models\Supplier\US\DSVLagTime\FeedId {
        $request = $this->updateLagTimeBulkRequest($feedType, $shipNode, $lagTimeFeedV2);
        $this->writeDebug($request);
        $this->writeDebug((string) $request->getBody());

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
                $this->writeDebug($response);
                $this->writeDebug((string) $response->getBody());
            } catch (RequestException $e) {
                $hasResponse = !empty($e->hasResponse());
                $body = (string) ($hasResponse ? $e->getResponse()->getBody() : '[NULL response]');
                $this->writeDebug($e->getResponse());
                $this->writeDebug($body);

                throw new ApiException(
                    "[{$e->getCode()}] {$body}",
                    (int) $e->getCode(),
                    $hasResponse ? $e->getResponse()->getHeaders() : null,
                    $body
                );
            } catch (ConnectException $e) {
                $this->writeDebug($e->getMessage());

                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }
            switch ($statusCode) {
                case 200:
                    if ('\Walmart\Models\Supplier\US\DSVLagTime\FeedId' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Walmart\Models\Supplier\US\DSVLagTime\FeedId' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return ObjectSerializer::deserialize($content, '\Walmart\Models\Supplier\US\DSVLagTime\FeedId', $response->getHeaders());
            }

            $returnType = '\Walmart\Models\Supplier\US\DSVLagTime\FeedId';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Walmart\Models\Supplier\US\DSVLagTime\FeedId',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }

            $this->writeDebug($e);
            throw $e;
        }
    }

    /**
     * Operation updateLagTimeBulkAsync
     *
     * Update Lag Time
     *
     * @param  string $feedType Specifies the type of the feed content.   Use `lagtime` for this API. (required)
     * @param  string $shipNode Specifies the distribution facility distributor identifier.   This parameter is used in v1.0 and not used in v2.x.    This parameter identifies each facility from which the inventory is requested. The identifier is autogenerated during drop ship vendor (DSV) account creation. Every time users add or update a facility in Supplier Center, a new identifier is generated. (required)
     * @param  \Walmart\Models\Supplier\US\DSVLagTime\LagTimeFeedV2 $lagTimeFeedV2 File fields (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateLagTimeBulkAsync(
        string $feedType,
        string $shipNode,
        \Walmart\Models\Supplier\US\DSVLagTime\LagTimeFeedV2 $lagTimeFeedV2
    ): PromiseInterface {
        return $this->updateLagTimeBulkAsyncWithHttpInfo($feedType, $shipNode, $lagTimeFeedV2)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateLagTimeBulkAsyncWithHttpInfo
     *
     * Update Lag Time
     *
     * @param  string $feedType Specifies the type of the feed content.   Use `lagtime` for this API. (required)
     * @param  string $shipNode Specifies the distribution facility distributor identifier.   This parameter is used in v1.0 and not used in v2.x.    This parameter identifies each facility from which the inventory is requested. The identifier is autogenerated during drop ship vendor (DSV) account creation. Every time users add or update a facility in Supplier Center, a new identifier is generated. (required)
     * @param  \Walmart\Models\Supplier\US\DSVLagTime\LagTimeFeedV2 $lagTimeFeedV2 File fields (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    protected function updateLagTimeBulkAsyncWithHttpInfo(
        string $feedType,
        string $shipNode,
        \Walmart\Models\Supplier\US\DSVLagTime\LagTimeFeedV2 $lagTimeFeedV2,
    ): PromiseInterface {
        $returnType = '\Walmart\Models\Supplier\US\DSVLagTime\FeedId';
        $request = $this->updateLagTimeBulkRequest($feedType, $shipNode, $lagTimeFeedV2);
        $this->writeDebug($request);
        $this->writeDebug((string) $request->getBody());

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $this->writeDebug($response);
                    $this->writeDebug((string) $response->getBody());
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $hasResponse = !empty($response);
                    $body = (string) ($hasResponse ? $response->getBody() : '[NULL response]');
                    $this->writeDebug($response);
                    $statusCode = $hasResponse ? $response->getStatusCode() : $exception->getCode();

                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $body,
                    );
                }
            );
    }

    /**
     * Create request for operation 'updateLagTimeBulk'
     *
     * @param  string $feedType Specifies the type of the feed content.   Use `lagtime` for this API. (required)
     * @param  string $shipNode Specifies the distribution facility distributor identifier.   This parameter is used in v1.0 and not used in v2.x.    This parameter identifies each facility from which the inventory is requested. The identifier is autogenerated during drop ship vendor (DSV) account creation. Every time users add or update a facility in Supplier Center, a new identifier is generated. (required)
     * @param  \Walmart\Models\Supplier\US\DSVLagTime\LagTimeFeedV2 $lagTimeFeedV2 File fields (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateLagTimeBulkRequest(
        string $feedType,
        string $shipNode,
        \Walmart\Models\Supplier\US\DSVLagTime\LagTimeFeedV2 $lagTimeFeedV2,
    ): Request {
        $contentType = self::contentTypes['updateLagTimeBulk'];

        // verify the required parameter 'feedType' is set
        if ($feedType === null || (is_array($feedType) && count($feedType) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $feedType when calling updateLagTimeBulk'
            );
        }
        // verify the required parameter 'shipNode' is set
        if ($shipNode === null || (is_array($shipNode) && count($shipNode) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $shipNode when calling updateLagTimeBulk'
            );
        }
        // verify the required parameter 'lagTimeFeedV2' is set
        if ($lagTimeFeedV2 === null || (is_array($lagTimeFeedV2) && count($lagTimeFeedV2) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $lagTimeFeedV2 when calling updateLagTimeBulk'
            );
        }
        $resourcePath = '/v3/feeds';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $method = 'POST';

        // query params
        $queryParams = array_merge(
            ObjectSerializer::toQueryValue(
                $feedType,
                'feedType', // param base name
                'string', // openApiType
                'form', // style
                true, // explode
                true // required
            ) ?? [],
            ObjectSerializer::toQueryValue(
                $shipNode,
                'shipNode', // param base name
                'string', // openApiType
                'form', // style
                true, // explode
                true // required
            ) ?? [],
        );

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            $contentType,
            $multipart
        );

        $defaultHeaders = parent::getDefaultHeaders();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        // for model (json/xml)
        if (isset($lagTimeFeedV2)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($lagTimeFeedV2));
            } else {
                $httpBody = $lagTimeFeedV2;
            }
        } else if (count($formParams) > 0) {
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
            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        $query = ObjectSerializer::buildQuery($queryParams);
        $requestInfo = [
            'path' => $resourcePath,
            'method' => $method,
            'timestamp' => $defaultHeaders['WM_SEC.TIMESTAMP'],
            'query' => $query,
        ];

        $partnerApiKey = $this->config->getApiKey('partner', $requestInfo);
        if ($partnerApiKey !== null) {
            $headers['WM_PARTNER.ID'] = $partnerApiKey;
        }

        $signatureApiKey = $this->config->getApiKey('signature', $requestInfo);
        if ($signatureApiKey !== null) {
            $headers['WM_SEC.AUTH_SIGNATURE'] = $signatureApiKey;
        }

        $consumerIdApiKey = $this->config->getApiKey('consumerId', $requestInfo);
        if ($consumerIdApiKey !== null) {
            $headers['WM_CONSUMER.ID'] = $consumerIdApiKey;
        }

        // this endpoint requires Bearer authentication (access token)
        $token = $this->config->getAccessToken();
        if ($token) {
            $headers['WM_SEC.ACCESS_TOKEN'] = $token->accessToken;
        }

        $operationHost = $this->config->getHost();
        return new Request(
            $method,
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }
}

