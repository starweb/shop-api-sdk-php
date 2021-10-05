<?php

namespace Starweb\Api\Generated;

class Client extends \Jane\OpenApiRuntime\Client\Psr7HttplugClient
{
    /**
     * Create a token. Retrieves the create `Token` object.
     *
     * @param \Starweb\Api\Generated\Model\ClientCredentialModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GenerateFetchAccessTokenBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\TokenModel|\Psr\Http\Message\ResponseInterface
     */
    public function generateFetchAccessToken(\Starweb\Api\Generated\Model\ClientCredentialModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GenerateFetchAccessToken($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Api\Generated\Model\CurrencyCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getCurrencies(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetCurrencies(), $fetch);
    }
    /**
     * Retrieves the details of a currency
     *
     * @param string $currencyCode The currency code
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetCurrencyNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\CurrencyModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getCurrency(string $currencyCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetCurrency($currencyCode), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Api\Generated\Model\CustomerTagModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomersTags(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetCustomersTags(), $fetch);
    }
    /**
     * Retrieves a `Tag` object
     *
     * @param int $tagId The tag id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetCustomersTagNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\CustomerTagModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomersTag(int $tagId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetCustomersTag($tagId), $fetch);
    }
    /**
     * Returns a list of customers
     *
     * @param array $queryParameters {
     *     @var int $page The page of customers to return
     *     @var string $sortBy Sort the result using a specified field. customerId is default. Valid options are: customerId
     *     @var string $sortOrder ASC for an ascending sort order; or DESC for a descending sort order. DESC is default
     *     @var string $createdSince Use this to only fetch customers that has been created since a certain time. The time should be formatted using ISO-8601 (url encoded)
     *     @var string $updatedSince Use this to only fetch customers that has been modified since a certain time. The time should be formatted using ISO-8601 (url encoded)
     *     @var bool $includeWithoutAccount Use this to also include customers without an account
     *     @var string $include If you want to include child data in the result. Example: ?include=tags (to include customer tags); ?include=tags,addresses (to include both customer tags and addresses). Available includes: tags, externalServices, addresses
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListCustomersBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\CustomerModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listCustomers(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListCustomers($queryParameters), $fetch);
    }
    /**
     * Creates a `Customer` object
     *
     * @param \Starweb\Api\Generated\Model\CustomerUpdateModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateCustomerBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\CustomerCreatedModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createCustomer(\Starweb\Api\Generated\Model\CustomerUpdateModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateCustomer($requestBody), $fetch);
    }
    /**
     * Delete a customer permanently!
     *
     * @param int $customerId The customers id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteCustomerNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCustomer(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteCustomer($customerId), $fetch);
    }
    /**
     * Retrieves a `Customer` object
     *
     * @param int $customerId The customers id
     * @param array $queryParameters {
     *     @var string $include If you want to include child data in the result. Example: ?include=tags (to include customer tags); ?include=tags,addresses (to include both customer tags and addresses). Available includes: tags, externalServices, addresses
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetCustomerNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\CustomerModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomer(int $customerId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetCustomer($customerId, $queryParameters), $fetch);
    }
    /**
     * Updates a customer. Retrieves the updated `Customer` object
     *
     * @param int $customerId The customers id
     * @param \Starweb\Api\Generated\Model\CustomerUpdateModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchCustomerBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchCustomerNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\CustomerModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchCustomer(int $customerId, \Starweb\Api\Generated\Model\CustomerUpdateModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchCustomer($customerId, $requestBody), $fetch);
    }
    /**
     * Updates a customer. Retrieves the updated `Customer` object
     *
     * @param int $customerId The customers id
     * @param \Starweb\Api\Generated\Model\CustomerUpdateModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutCustomerBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutCustomerNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\CustomerModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putCustomer(int $customerId, \Starweb\Api\Generated\Model\CustomerUpdateModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutCustomer($customerId, $requestBody), $fetch);
    }
    /**
     * Returns a list of external services for a customer
     *
     * @param int $customerId The customers id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Api\Generated\Model\CustomerExternalServicesModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerExternalServices(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetCustomerExternalServices($customerId), $fetch);
    }
    /**
     * Retrieves a `CustomerExternalService` object
     *
     * @param int $customerId The customers id
     * @param string $serviceName The service name
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetCustomerExternalServiceNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\CustomerExternalServicesModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerExternalService(int $customerId, string $serviceName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetCustomerExternalService($customerId, $serviceName), $fetch);
    }
    /**
     * Returns a list of customer tags
     *
     * @param int $customerId The customers id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Api\Generated\Model\CustomerAddedTagModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerTags(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetCustomerTags($customerId), $fetch);
    }
    /**
     * Add a tag to a customer. Retrieves the created `CustomerTag` object
     *
     * @param int $customerId The customers id
     * @param \Starweb\Api\Generated\Model\CustomerAddedTagModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\AddTagToCustomerBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\CustomerAddedTagModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function addTagToCustomer(int $customerId, \Starweb\Api\Generated\Model\CustomerAddedTagModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\AddTagToCustomer($customerId, $requestBody), $fetch);
    }
    /**
     * Deletes a customer tag permanently.
     *
     * @param int $customerId The customers id
     * @param int $tagId The customer tag id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\RemoveTagFromCustomerNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function removeTagFromCustomer(int $customerId, int $tagId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\RemoveTagFromCustomer($customerId, $tagId), $fetch);
    }
    /**
     * Retrieves a `CustomerTag` object
     *
     * @param int $customerId The customers id
     * @param int $tagId The customer tag id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetCustomerTagNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\CustomerAddedTagModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerTag(int $customerId, int $tagId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetCustomerTag($customerId, $tagId), $fetch);
    }
    /**
     * Returns a list of addresses for a customer
     *
     * @param int $customerId The customers id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Api\Generated\Model\CustomerAddressesModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerGroups(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetCustomerGroups($customerId), $fetch);
    }
    /**
     * Delete a customer address permanently.
     *
     * @param int $customerId The customers id
     * @param string $addressType The customer address type
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\RemoveAddressFromCustomerForbiddenException
     * @throws \Starweb\Api\Generated\Exception\RemoveAddressFromCustomerNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function removeAddressFromCustomer(int $customerId, string $addressType, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\RemoveAddressFromCustomer($customerId, $addressType), $fetch);
    }
    /**
     * Retrieves a `CustomerAddress` object
     *
     * @param int $customerId The customers id
     * @param string $addressType The customer address type
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetCustomerAddressNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\CustomerAddressesModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerAddress(int $customerId, string $addressType, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetCustomerAddress($customerId, $addressType), $fetch);
    }
    /**
     * Updates a customer address. Retrieves the updated `CustomerAddress` object
     *
     * @param int $customerId The customers id
     * @param string $addressType The customer address type
     * @param \Starweb\Api\Generated\Model\AddressModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchCustomerAddressBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchCustomerAddressNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\CustomerAddressesModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchCustomerAddress(int $customerId, string $addressType, \Starweb\Api\Generated\Model\AddressModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchCustomerAddress($customerId, $addressType, $requestBody), $fetch);
    }
    /**
     * Updates a customer address. Retrieves the updated `CustomerAddress` object
     *
     * @param int $customerId The customers id
     * @param string $addressType The customer address type
     * @param \Starweb\Api\Generated\Model\AddressModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutCustomerAddressBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutCustomerAddressNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\CustomerAddressesModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putCustomerAddress(int $customerId, string $addressType, \Starweb\Api\Generated\Model\AddressModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutCustomerAddress($customerId, $addressType, $requestBody), $fetch);
    }
    /**
     * Returns a list of media file‚
     *
     * @param array $queryParameters {
     *     @var int $page The page of media files to return
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Api\Generated\Model\MediaFileModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getMediaFiles(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetMediaFiles($queryParameters), $fetch);
    }
    /**
     * Creates a new `Media File` object
     *
     * @param \Starweb\Api\Generated\Model\MediaFileUploadModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateMediaFileBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\MediaFileModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createMediaFile(\Starweb\Api\Generated\Model\MediaFileUploadModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateMediaFile($requestBody), $fetch);
    }
    /**
     * Delete a media file permanently.
     *
     * @param int $mediaFileId The media files id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteMediaFileNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteMediaFile(int $mediaFileId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteMediaFile($mediaFileId), $fetch);
    }
    /**
     * Retrieve a `MediaFile` object
     *
     * @param int $mediaFileId The media files id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetMediaFileNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\MediaFileModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getMediaFile(int $mediaFileId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetMediaFile($mediaFileId), $fetch);
    }
    /**
     * Updates a media file. Retrieves the updated `MediaFile` object
     *
     * @param int $mediaFileId The media files id
     * @param \Starweb\Api\Generated\Model\MediaFileUploadModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchMediaFileBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchMediaFileNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\MediaFileModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchMediaFile(int $mediaFileId, \Starweb\Api\Generated\Model\MediaFileUploadModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchMediaFile($mediaFileId, $requestBody), $fetch);
    }
    /**
     * Updates a media file. Retrieves the updated `MediaFile` object
     *
     * @param int $mediaFileId The media files id
     * @param \Starweb\Api\Generated\Model\MediaFileUploadModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutMediaFileBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutMediaFileNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\MediaFileModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putMediaFile(int $mediaFileId, \Starweb\Api\Generated\Model\MediaFileUploadModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutMediaFile($mediaFileId, $requestBody), $fetch);
    }
    /**
     * Returns a list of orders.
     *
     * @param array $queryParameters {
     *     @var int $page The page of orders to return
     *     @var bool $includeNonCompletePayments Set to true if you want to fetch orders that has not been completed yet. An order is ”completed” when the payment step has been completed successfully.
     *     @var string $filterQuery A filter query to filter the fetched orders by. Will search in fields such as: customer/company name, order items sku and description, etc
     *     @var int $filterPaymentMethodId Only fetch orders with a certain payment method Id
     *     @var int $filterShippingMethodId Only fetch orders with a certain shipping method Id
     *     @var string $ordersCreatedAfter Only fetch orders created after this timestamp (The time should be formatted using ISO-8601 and url encoded)
     *     @var string $ordersCreatedBefore Only fetch orders created before this timestamp (The time should be formatted using ISO-8601 and url encoded)
     *     @var int $statusFilter Only fetch orders with the specifiec order status. Use order status ID
     *     @var string $sortBy Sort the result using a specified field. orderId is default
     *     @var string $sortOrder ASC for an ascending sort order; or DESC for a descending sort order. DESC is default
     *     @var string $include If you want to include child data in the result. Example: ?include=items (to include order items) or ?include=items,externalServices (to include order items as well as external ids). or ?include=items.bundledItems (to include items and bundled items)Available includes: items, externalServices, status, customer, addresses
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListOrdersBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\OrderModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listOrders(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListOrders($queryParameters), $fetch);
    }
    /**
     * Create an order. Retrieves the create `Order` object
     *
     * @param \Starweb\Api\Generated\Model\OrderUpdateModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateOrderBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\OrderModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createOrder(\Starweb\Api\Generated\Model\OrderUpdateModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateOrder($requestBody), $fetch);
    }
    /**
     * Delete an order permanently
     *
     * @param int $orderId The orders id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteOrderNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteOrder(int $orderId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteOrder($orderId), $fetch);
    }
    /**
     * Retrieve an `Order` object
     *
     * @param int $orderId The orders id
     * @param array $queryParameters {
     *     @var string $include If you want to include child data in the result. Example: ?include=items (to include order items) or ?include=items,externalServices (to include order items as well as external ids). Available includes: items, externalServices, status, customer, addresses
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetOrderNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\OrderModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getOrder(int $orderId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetOrder($orderId, $queryParameters), $fetch);
    }
    /**
     * Updates an order. Retrieves the updated `Order` object
     *
     * @param int $orderId The orders id
     * @param \Starweb\Api\Generated\Model\OrderUpdateModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchOrderBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchOrderNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\OrderModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchOrder(int $orderId, \Starweb\Api\Generated\Model\OrderUpdateModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchOrder($orderId, $requestBody), $fetch);
    }
    /**
     * Updates an order. Retrieves the updated `Order` object
     *
     * @param int $orderId The orders id
     * @param \Starweb\Api\Generated\Model\OrderPutModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutOrderBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutOrderNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\OrderModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putOrder(int $orderId, \Starweb\Api\Generated\Model\OrderPutModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutOrder($orderId, $requestBody), $fetch);
    }
    /**
     * Returns a list o order addresses
     *
     * @param int $orderId The orders id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Api\Generated\Model\OrderAddressCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listOrderAddresses(int $orderId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListOrderAddresses($orderId), $fetch);
    }
    /**
     * Delete an order address permanently.
     *
     * @param int $orderId The orders id
     * @param string $addressType The order address type
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteOrderAddressNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteOrderAddress(int $orderId, string $addressType, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteOrderAddress($orderId, $addressType), $fetch);
    }
    /**
     * Retrieves the `OrderAddress` object
     *
     * @param int $orderId The orders id
     * @param string $addressType The order address type
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetOrderAddressNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\AddressModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderAddress(int $orderId, string $addressType, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetOrderAddress($orderId, $addressType), $fetch);
    }
    /**
     * Updates an order adress. Retrieves the updated `OrderAddress` object
     *
     * @param int $orderId The orders id
     * @param string $addressType The order address type
     * @param \Starweb\Api\Generated\Model\AddressModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchOrderAddressBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchOrderAddressNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\AddressModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchOrderAddress(int $orderId, string $addressType, \Starweb\Api\Generated\Model\AddressModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchOrderAddress($orderId, $addressType, $requestBody), $fetch);
    }
    /**
     * Updates an order adress. Retrieves the updated `OrderAddress` object
     *
     * @param int $orderId The orders id
     * @param string $addressType The order address type
     * @param \Starweb\Api\Generated\Model\AddressModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutOrderAddressBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutOrderAddressNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\AddressModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putOrderAddress(int $orderId, string $addressType, \Starweb\Api\Generated\Model\AddressModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutOrderAddress($orderId, $addressType, $requestBody), $fetch);
    }
    /**
     * Returns a list of order comments.
     *
     * @param int $orderId The orders id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Api\Generated\Model\OrderCommentModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderComments(int $orderId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetOrderComments($orderId), $fetch);
    }
    /**
     * Add a comment to an order. Retrieves the created `OrderComment` object
     *
     * @param int $orderId The orders id
     * @param \Starweb\Api\Generated\Model\OrderCommentModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\AddCommentToOrderBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\OrderCommentModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function addCommentToOrder(int $orderId, \Starweb\Api\Generated\Model\OrderCommentModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\AddCommentToOrder($orderId, $requestBody), $fetch);
    }
    /**
     * Deletes an order comment permanently.
     *
     * @param int $orderId The orders id
     * @param int $commentId The order comments id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\RemoveCommentFromOrderNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function removeCommentFromOrder(int $orderId, int $commentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\RemoveCommentFromOrder($orderId, $commentId), $fetch);
    }
    /**
     * Retrieves the `OrderComment` object
     *
     * @param int $orderId The orders id
     * @param int $commentId The order comments id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetOrderCommentNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\OrderCommentModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderComment(int $orderId, int $commentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetOrderComment($orderId, $commentId), $fetch);
    }
    /**
     * Update a comment for an order. Retrieves the created `OrderComment` object
     *
     * @param int $orderId The orders id
     * @param int $commentId The order comments id
     * @param \Starweb\Api\Generated\Model\OrderCommentModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchCommentToOrderBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\OrderCommentModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchCommentToOrder(int $orderId, int $commentId, \Starweb\Api\Generated\Model\OrderCommentModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchCommentToOrder($orderId, $commentId, $requestBody), $fetch);
    }
    /**
     * Update a comment for an order. Retrieves the created `OrderComment` object
     *
     * @param int $orderId The orders id
     * @param int $commentId The order comments id
     * @param \Starweb\Api\Generated\Model\OrderCommentModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\UpdateCommentToOrderBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\OrderCommentModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function updateCommentToOrder(int $orderId, int $commentId, \Starweb\Api\Generated\Model\OrderCommentModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\UpdateCommentToOrder($orderId, $commentId, $requestBody), $fetch);
    }
    /**
     * Returns a list of order external services.
     *
     * @param int $orderId The orders id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Api\Generated\Model\OrderExternalServiceModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderExternalServices(int $orderId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetOrderExternalServices($orderId), $fetch);
    }
    /**
    * Create an order external service. Retrieves the created `OrderExternalService`
                                       object
    *
    * @param int $orderId The orders id
    * @param \Starweb\Api\Generated\Model\OrderExternalServiceModel $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Generated\Exception\CreateOrderExternalServiceBadRequestException
    *
    * @return null|\Starweb\Api\Generated\Model\OrderExternalServicesModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function createOrderExternalService(int $orderId, \Starweb\Api\Generated\Model\OrderExternalServiceModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateOrderExternalService($orderId, $requestBody), $fetch);
    }
    /**
     * Deletes an order external service permanently
     *
     * @param int $orderId The orders id
     * @param string $serviceName The service name
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteOrderExternalServiceNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteOrderExternalService(int $orderId, string $serviceName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteOrderExternalService($orderId, $serviceName), $fetch);
    }
    /**
     * Retrieves the `OrderExternalService` object
     *
     * @param int $orderId The orders id
     * @param string $serviceName The service name
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetOrderExternalServiceNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\OrderExternalServicesModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderExternalService(int $orderId, string $serviceName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetOrderExternalService($orderId, $serviceName), $fetch);
    }
    /**
    * Updates an order external service. 
                       Retrieves the updated `OrderExternalService` object
    *
    * @param int $orderId The orders id
    * @param string $serviceName The service name
    * @param \Starweb\Api\Generated\Model\OrderExternalServiceModel $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Generated\Exception\PatchOrderExternalServiceBadRequestException
    * @throws \Starweb\Api\Generated\Exception\PatchOrderExternalServiceNotFoundException
    *
    * @return null|\Starweb\Api\Generated\Model\OrderExternalServicesModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function patchOrderExternalService(int $orderId, string $serviceName, \Starweb\Api\Generated\Model\OrderExternalServiceModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchOrderExternalService($orderId, $serviceName, $requestBody), $fetch);
    }
    /**
    * Updates an order external service. 
                       Retrieves the updated `OrderExternalService` object
    *
    * @param int $orderId The orders id
    * @param string $serviceName The service name
    * @param \Starweb\Api\Generated\Model\OrderExternalServiceModel $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Generated\Exception\PutOrderExternalServiceBadRequestException
    * @throws \Starweb\Api\Generated\Exception\PutOrderExternalServiceNotFoundException
    *
    * @return null|\Starweb\Api\Generated\Model\OrderExternalServicesModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function putOrderExternalService(int $orderId, string $serviceName, \Starweb\Api\Generated\Model\OrderExternalServiceModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutOrderExternalService($orderId, $serviceName, $requestBody), $fetch);
    }
    /**
     * Returns a list of order items
     *
     * @param int $orderId The orders id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Api\Generated\Model\OrderItemModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderItems(int $orderId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetOrderItems($orderId), $fetch);
    }
    /**
     * Create an order item. Retrieves the create `OrderItem` object
     *
     * @param int $orderId The orders id
     * @param \Starweb\Api\Generated\Model\OrderItemModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateOrderItemBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\OrderItemModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createOrderItem(int $orderId, \Starweb\Api\Generated\Model\OrderItemModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateOrderItem($orderId, $requestBody), $fetch);
    }
    /**
     * Delete the order item permanently.
     *
     * @param int $orderId The orders id
     * @param int $orderItemId The order item id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteOrderItemNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteOrderItem(int $orderId, int $orderItemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteOrderItem($orderId, $orderItemId), $fetch);
    }
    /**
     * Retrieves the `OrderItem` object
     *
     * @param int $orderId The orders id
     * @param int $orderItemId The order item id
     * @param array $queryParameters {
     *     @var string $include If you want to include child data in the result. Example: ?include=bundledItems (to include bundled items). Available includes: bundledItems
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetOrderItemNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\OrderItemModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderItem(int $orderId, int $orderItemId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetOrderItem($orderId, $orderItemId, $queryParameters), $fetch);
    }
    /**
     * Updates an order item. Retrieves the updated `OrderItem` object
     *
     * @param int $orderId The orders id
     * @param int $orderItemId The order item id
     * @param \Starweb\Api\Generated\Model\OrderItemModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchOrderItemBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchOrderItemNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\OrderItemModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchOrderItem(int $orderId, int $orderItemId, \Starweb\Api\Generated\Model\OrderItemModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchOrderItem($orderId, $orderItemId, $requestBody), $fetch);
    }
    /**
     * Updates an order item. Retrieves the updated `OrderItem` object
     *
     * @param int $orderId The orders id
     * @param int $orderItemId The order item id
     * @param \Starweb\Api\Generated\Model\OrderItemModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutOrderItemBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutOrderItemNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\OrderItemModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putOrderItem(int $orderId, int $orderItemId, \Starweb\Api\Generated\Model\OrderItemModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutOrderItem($orderId, $orderItemId, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Api\Generated\Model\OrderStatusModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderStatuses(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetOrderStatuses(), $fetch);
    }
    /**
     * Create an order status. Retrieves the created `OrderStatus` object
     *
     * @param \Starweb\Api\Generated\Model\OrderStatusModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateOrderStatusBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\OrderStatusModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createOrderStatus(\Starweb\Api\Generated\Model\OrderStatusModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateOrderStatus($requestBody), $fetch);
    }
    /**
    * Deletes an order status. Retrieves the updated `OrderItem` object. 
                       NB! You are not allowed to delete order statuses that is in use by an order, or standard order statuses (all statuses with an idCode set)
    *
    * @param int $orderStatusId The order status id
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Generated\Exception\DeleteOrderStatusForbiddenException
    * @throws \Starweb\Api\Generated\Exception\DeleteOrderStatusNotFoundException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function deleteOrderStatus(int $orderStatusId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteOrderStatus($orderStatusId), $fetch);
    }
    /**
     * Retrieves the `OrderStatus` object
     *
     * @param int $orderStatusId The order status id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetOrderStatusNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\OrderStatusModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderStatus(int $orderStatusId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetOrderStatus($orderStatusId), $fetch);
    }
    /**
    * Updates an order status. Retrieves the updated `Orderstatus` object. 
                       NB! You are not allowed to update standard order statuses (all statuses with an idCode set)
    *
    * @param int $orderStatusId The order status id
    * @param \Starweb\Api\Generated\Model\OrderStatusModel $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Generated\Exception\PatchOrderStatusBadRequestException
    * @throws \Starweb\Api\Generated\Exception\PatchOrderStatusForbiddenException
    * @throws \Starweb\Api\Generated\Exception\PatchOrderStatusNotFoundException
    *
    * @return null|\Starweb\Api\Generated\Model\OrderStatusModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function patchOrderStatus(int $orderStatusId, \Starweb\Api\Generated\Model\OrderStatusModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchOrderStatus($orderStatusId, $requestBody), $fetch);
    }
    /**
    * Updates an order status. Retrieves the updated `Orderstatus` object. 
                   NB! You are not allowed to update standard order statuses (all statuses with an idCode set)
    *
    * @param int $orderStatusId The order status id
    * @param \Starweb\Api\Generated\Model\OrderStatusModel $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Generated\Exception\PutOrderStatusBadRequestException
    * @throws \Starweb\Api\Generated\Exception\PutOrderStatusForbiddenException
    * @throws \Starweb\Api\Generated\Exception\PutOrderStatusNotFoundException
    *
    * @return null|\Starweb\Api\Generated\Model\OrderStatusModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function putOrderStatus(int $orderStatusId, \Starweb\Api\Generated\Model\OrderStatusModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutOrderStatus($orderStatusId, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Api\Generated\Model\PaymentMethodModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getPaymentMethods(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetPaymentMethods(), $fetch);
    }
    /**
     * Retrieves a `PaymentMethod` object
     *
     * @param int $paymentMethodId The payment method id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetPaymentMethodNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\PaymentMethodModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getPaymentMethod(int $paymentMethodId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetPaymentMethod($paymentMethodId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Api\Generated\Model\PricelistModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getPricelists(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetPricelists(), $fetch);
    }
    /**
     * Create a pricelist. Retrieves the created `Pricelist` object
     *
     * @param mixed $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreatePricelistBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\PricelistModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createPricelist($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreatePricelist($requestBody), $fetch);
    }
    /**
     * Delete a pricelist permanently. The master pricelist can not be deleted and will return an error `403`
     *
     * @param int $pricelistId The pricelist id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeletePricelistNotFoundException
     * @throws \Starweb\Api\Generated\Exception\DeletePricelistForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deletePricelist(int $pricelistId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeletePricelist($pricelistId), $fetch);
    }
    /**
     * Retrieves a `Pricelist` object
     *
     * @param int $pricelistId The pricelist id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetPricelistNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\PricelistModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getPricelist(int $pricelistId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetPricelist($pricelistId), $fetch);
    }
    /**
     * Update a pricelist. Retrieves the updated `Pricelist` object
     *
     * @param int $pricelistId The pricelist id
     * @param mixed $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchPricelistBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchPricelistNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\PricelistModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchPricelist(int $pricelistId, $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchPricelist($pricelistId, $requestBody), $fetch);
    }
    /**
     * Update a pricelist. Retrieves the updated `Pricelist` object
     *
     * @param int $pricelistId The pricelist id
     * @param mixed $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutPricelistBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutPricelistNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\PricelistModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putPricelist(int $pricelistId, $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutPricelist($pricelistId, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListVatRatesBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\VatRateModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listVatRates(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListVatRates(), $fetch);
    }
    /**
     * Retrieves the `VatRate` object.
     *
     * @param string $countryCode The country code for the vat rates to fetch
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetVatRateNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\VatRateModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getVatRate(string $countryCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetVatRate($countryCode), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductsVariantsAttributesBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductVariantAttributeModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsVariantsAttributes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductsVariantsAttributes(), $fetch);
    }
    /**
    * Creates a product variant attribute. 
                       Retrieves the created `ProductVariantAttribute` object.
    *
    * @param \Starweb\Api\Generated\Model\ProductVariantAttributeModelUpdatable $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Generated\Exception\CreateAttributeBadRequestException
    *
    * @return null|\Starweb\Api\Generated\Model\ProductVariantAttributeModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function createAttribute(\Starweb\Api\Generated\Model\ProductVariantAttributeModelUpdatable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateAttribute($requestBody), $fetch);
    }
    /**
     * Deletes the product variant attribute permanently.
     *
     * @param int $attributeId The attribute value id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteAttributeNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAttribute(int $attributeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteAttribute($attributeId), $fetch);
    }
    /**
     * Retrieves the `ProductVariantAttribute` object.
     *
     * @param int $attributeId The attribute value id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductsVariantsAttributeNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductVariantAttributeModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsVariantsAttribute(int $attributeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductsVariantsAttribute($attributeId), $fetch);
    }
    /**
    * Updates a product variant attribute.
                       Retrieves the updated `ProductVariantAttribute` object.
    *
    * @param int $attributeId The attribute value id
    * @param \Starweb\Api\Generated\Model\ProductVariantAttributeModelUpdatable $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Generated\Exception\PatchAttributeBadRequestException
    *
    * @return null|\Starweb\Api\Generated\Model\ProductVariantAttributeModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function patchAttribute(int $attributeId, \Starweb\Api\Generated\Model\ProductVariantAttributeModelUpdatable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchAttribute($attributeId, $requestBody), $fetch);
    }
    /**
    * Updates a product variant attribute.
                       Retrieves the updated `ProductVariantAttribute` object.
    *
    * @param int $attributeId The attribute value id
    * @param \Starweb\Api\Generated\Model\ProductVariantAttributeModelUpdatable $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Generated\Exception\PutAttributeBadRequestException
    *
    * @return null|\Starweb\Api\Generated\Model\ProductVariantAttributeModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function putAttribute(int $attributeId, \Starweb\Api\Generated\Model\ProductVariantAttributeModelUpdatable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutAttribute($attributeId, $requestBody), $fetch);
    }
    /**
     * Returns a list of product variant attribute values.
     *
     * @param int $attributeId The attribute id
     * @param array $queryParameters {
     *     @var string $include If you want to include child data in the result. Example: ?include=attribute (to include the attribute the values belongs to). Available includes: attribute
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductsVariantsAttributeValuesBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductVariantAttributeValueModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsVariantsAttributeValues(int $attributeId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductsVariantsAttributeValues($attributeId, $queryParameters), $fetch);
    }
    /**
    * Creates a product variant attribute value.
                       Retrieves the created `ProductVariantAttributeValue` object.
    *
    * @param int $attributeId The attribute id
    * @param \Starweb\Api\Generated\Model\ProductVariantAttributeValueModelUpdatable $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Generated\Exception\CreateProductsVariantsAttributeValuesBadRequestException
    *
    * @return null|\Starweb\Api\Generated\Model\ProductVariantAttributeValueModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function createProductsVariantsAttributeValues(int $attributeId, \Starweb\Api\Generated\Model\ProductVariantAttributeValueModelUpdatable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductsVariantsAttributeValues($attributeId, $requestBody), $fetch);
    }
    /**
     * Delete a product variant attribute value permanently.
     *
     * @param int $attributeId The attribute id
     * @param int $attributeValueId The attribe value id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteAttributeValueNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAttributeValue(int $attributeId, int $attributeValueId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteAttributeValue($attributeId, $attributeValueId), $fetch);
    }
    /**
     * Retrieves the `ProductVariantAttributeValue` object.
     *
     * @param int $attributeId The attribute id
     * @param int $attributeValueId The attribe value id
     * @param array $queryParameters {
     *     @var string $include If you want to include child data in the result. Example: ?include=attribute (to include the attribute the values belongs to). Available includes: attribute
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductsVariantsAttributeValueNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductVariantAttributeValueModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsVariantsAttributeValue(int $attributeId, int $attributeValueId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductsVariantsAttributeValue($attributeId, $attributeValueId, $queryParameters), $fetch);
    }
    /**
    * Updates a product variant attribute value.
                       Retrieves the updated`ProductVariantAttributeValue` object.
    *
    * @param int $attributeId The attribute id
    * @param int $attributeValueId The attribe value id
    * @param \Starweb\Api\Generated\Model\ProductVariantAttributeValueModelUpdatable $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Generated\Exception\PatchProductsVariantsAttributeValuesBadRequestException
    *
    * @return null|\Starweb\Api\Generated\Model\ProductVariantAttributeValueModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function patchProductsVariantsAttributeValues(int $attributeId, int $attributeValueId, \Starweb\Api\Generated\Model\ProductVariantAttributeValueModelUpdatable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductsVariantsAttributeValues($attributeId, $attributeValueId, $requestBody), $fetch);
    }
    /**
    * Updates a product variant attribute value.
                       Retrieves the updated`ProductVariantAttributeValue` object.
    *
    * @param int $attributeId The attribute id
    * @param int $attributeValueId The attribe value id
    * @param \Starweb\Api\Generated\Model\ProductVariantAttributeValueModelUpdatable $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Generated\Exception\PutProductsVariantsAttributeValuesBadRequestException
    *
    * @return null|\Starweb\Api\Generated\Model\ProductVariantAttributeValueModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function putProductsVariantsAttributeValues(int $attributeId, int $attributeValueId, \Starweb\Api\Generated\Model\ProductVariantAttributeValueModelUpdatable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductsVariantsAttributeValues($attributeId, $attributeValueId, $requestBody), $fetch);
    }
    /**
     * Returns a list of product categories
     *
     * @param array $queryParameters {
     *     @var int $page The page of categories to return
     *     @var string $externalId Use to fetch categories with a specific external id
     *     @var int $parent Use to fetch only categories with this parentId
     *     @var bool $filterVisible Only fetch categories visible to visitors
     *     @var string $include If you want to include child data in the result. Example: ?include=languages (to include language based data such as category names, description, etc). Available includes: languages
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductCategoriesBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductCategoryModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductCategories(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductCategories($queryParameters), $fetch);
    }
    /**
     * Create a product category. Retrieves the created `ProductCategory` object
     *
     * @param \Starweb\Api\Generated\Model\ProductCategoryModelUpdatable $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductCategoryBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductCategoryModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createProductCategory(\Starweb\Api\Generated\Model\ProductCategoryModelUpdatable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductCategory($requestBody), $fetch);
    }
    /**
     * Delete a product category permanently
     *
     * @param int $categoryId The product category id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductCategoryNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductCategory(int $categoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductCategory($categoryId), $fetch);
    }
    /**
     * Retrieves a `ProductCategory` object
     *
     * @param int $categoryId The product category id
     * @param array $queryParameters {
     *     @var string $include If you want to include child data in the result. Example: ?include=languages (to include language based data such as category names, description, etc). Available includes: languages
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductCategoryNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductCategoryModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductCategory(int $categoryId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductCategory($categoryId, $queryParameters), $fetch);
    }
    /**
     * Update a product category. Retrieves the updated `ProductCategory` object
     *
     * @param int $categoryId The product category id
     * @param \Starweb\Api\Generated\Model\ProductCategoryModelUpdatable $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchProductCategoryBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductCategoryNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductCategoryModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductCategory(int $categoryId, \Starweb\Api\Generated\Model\ProductCategoryModelUpdatable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductCategory($categoryId, $requestBody), $fetch);
    }
    /**
     * Update a product category. Retrieves the updated `ProductCategory` object
     *
     * @param int $categoryId The product category id
     * @param \Starweb\Api\Generated\Model\ProductCategoryModelUpdatable $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutProductCategoryBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductCategoryNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductCategoryModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putProductCategory(int $categoryId, \Starweb\Api\Generated\Model\ProductCategoryModelUpdatable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductCategory($categoryId, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductManufacturersBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductManufacturerModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductManufacturers(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductManufacturers(), $fetch);
    }
    /**
     * Creates a product manufacturer.
     *
     * @param \Starweb\Api\Generated\Model\ProductManufacturerModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductManufacturerBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductManufacturerModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createProductManufacturer(\Starweb\Api\Generated\Model\ProductManufacturerModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductManufacturer($requestBody), $fetch);
    }
    /**
     * Deletes the `ProductManufacturer` object.
     *
     * @param int $manufacturerId The manufacturers id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductManufacturerNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductManufacturer(int $manufacturerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductManufacturer($manufacturerId), $fetch);
    }
    /**
     * Retrieves the `ProductManufacturer` object.
     *
     * @param int $manufacturerId The manufacturers id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductManufacturerNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductManufacturerModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductManufacturer(int $manufacturerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductManufacturer($manufacturerId), $fetch);
    }
    /**
     * Updates the `ProductManufacturer` object.
     *
     * @param int $manufacturerId The manufacturers id
     * @param \Starweb\Api\Generated\Model\ProductManufacturerModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchProductManufacturerNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductManufacturerModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductManufacturer(int $manufacturerId, \Starweb\Api\Generated\Model\ProductManufacturerModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductManufacturer($manufacturerId, $requestBody), $fetch);
    }
    /**
     * Updates the `ProductManufacturer` object.
     *
     * @param int $manufacturerId The manufacturers id
     * @param \Starweb\Api\Generated\Model\ProductManufacturerModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutProductManufacturerNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductManufacturerModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putProductManufacturer(int $manufacturerId, \Starweb\Api\Generated\Model\ProductManufacturerModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductManufacturer($manufacturerId, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductUnitsBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductUnitModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductUnits(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductUnits(), $fetch);
    }
    /**
     * Creates a product unit.
     *
     * @param \Starweb\Api\Generated\Model\ProductUnitModelUpdatable $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductUnitBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductUnitModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createProductUnit(\Starweb\Api\Generated\Model\ProductUnitModelUpdatable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductUnit($requestBody), $fetch);
    }
    /**
     * Deletes the `ProductUnit` object.
     *
     * @param int $unitId The units id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductUnitNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductUnit(int $unitId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductUnit($unitId), $fetch);
    }
    /**
     * Retrieves the `ProductUnit` object.
     *
     * @param int $unitId The units id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductUnitNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductUnitModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductUnit(int $unitId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductUnit($unitId), $fetch);
    }
    /**
     * Updates the `ProductUnit` object.
     *
     * @param int $unitId The units id
     * @param \Starweb\Api\Generated\Model\ProductUnitModelUpdatable $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchProductUnitNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductUnitModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductUnit(int $unitId, \Starweb\Api\Generated\Model\ProductUnitModelUpdatable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductUnit($unitId, $requestBody), $fetch);
    }
    /**
     * Updates the `ProductUnit` object.
     *
     * @param int $unitId The units id
     * @param \Starweb\Api\Generated\Model\ProductUnitModelUpdatable $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutProductUnitNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductUnitModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putProductUnit(int $unitId, \Starweb\Api\Generated\Model\ProductUnitModelUpdatable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductUnit($unitId, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductMetaDataTypesBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductMetaDataTypeModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductMetaDataTypes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductMetaDataTypes(), $fetch);
    }
    /**
     * Create a product meta data type. Retrieves the created `ProductMetaDataType` object
     *
     * @param \Starweb\Api\Generated\Model\ProductMetaDataTypeModelUpdatable $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductMetaDataTypeBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductMetaDataTypeModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createProductMetaDataType(\Starweb\Api\Generated\Model\ProductMetaDataTypeModelUpdatable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductMetaDataType($requestBody), $fetch);
    }
    /**
     * Delete a product meta data type permanently
     *
     * @param int $metaDataTypeId The meta data types id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductMetaDataTypeNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductMetaDataType(int $metaDataTypeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductMetaDataType($metaDataTypeId), $fetch);
    }
    /**
     * Retrieves the `ProductMetaDataType` object.
     *
     * @param int $metaDataTypeId The meta data types id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductMetaDataTypeNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductMetaDataTypeModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductMetaDataType(int $metaDataTypeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductMetaDataType($metaDataTypeId), $fetch);
    }
    /**
     * Update a product meta data type. Retrieves the updated `ProductMetaDataType` object
     *
     * @param int $metaDataTypeId The meta data types id
     * @param \Starweb\Api\Generated\Model\ProductMetaDataTypeModelUpdatable $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchProductMetaDataTypeBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductMetaDataTypeNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductMetaDataTypeModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductMetaDataType(int $metaDataTypeId, \Starweb\Api\Generated\Model\ProductMetaDataTypeModelUpdatable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductMetaDataType($metaDataTypeId, $requestBody), $fetch);
    }
    /**
     * Update a product meta data type. Retrieves the updated `ProductMetaDataType` object
     *
     * @param int $metaDataTypeId The meta data types id
     * @param \Starweb\Api\Generated\Model\ProductMetaDataTypeModelUpdatable $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutProductMetaDataTypeBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductMetaDataTypeNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductMetaDataTypeModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putProductMetaDataType(int $metaDataTypeId, \Starweb\Api\Generated\Model\ProductMetaDataTypeModelUpdatable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductMetaDataType($metaDataTypeId, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductStockStatsesBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductStockStatusModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductStockStatses(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductStockStatses(), $fetch);
    }
    /**
     * Create a product stock status. Retrieves the created `ProductStockStatus` object.
     *
     * @param \Starweb\Api\Generated\Model\ProductStockStatusRequestModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductStockStatusBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductStockStatusModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createProductStockStatus(\Starweb\Api\Generated\Model\ProductStockStatusRequestModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductStockStatus($requestBody), $fetch);
    }
    /**
     * Deletes a product stock status permanently.
     *
     * @param int $stockStatusId The stock status id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductStockStatusNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductStockStatus(int $stockStatusId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductStockStatus($stockStatusId), $fetch);
    }
    /**
     * Retrieves the `ProductStockStatus` object.
     *
     * @param int $stockStatusId The stock status id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductStockStatusNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductStockStatusModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductStockStatus(int $stockStatusId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductStockStatus($stockStatusId), $fetch);
    }
    /**
     * Updates a product stock status. Retrieves the update `ProductStockStatus` object.
     *
     * @param int $stockStatusId The stock status id
     * @param \Starweb\Api\Generated\Model\ProductStockStatusRequestModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchProductStockStatusBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductStockStatusNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductStockStatusModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductStockStatus(int $stockStatusId, \Starweb\Api\Generated\Model\ProductStockStatusRequestModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductStockStatus($stockStatusId, $requestBody), $fetch);
    }
    /**
     * Updates a product stock status. Retrieves the update `ProductStockStatus` object.
     *
     * @param int $stockStatusId The stock status id
     * @param \Starweb\Api\Generated\Model\ProductStockStatusRequestModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutProductStockStatusBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductStockStatusNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductStockStatusModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putProductStockStatus(int $stockStatusId, \Starweb\Api\Generated\Model\ProductStockStatusRequestModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductStockStatus($stockStatusId, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Api\Generated\Model\ProductTagModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsTags(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductsTags(), $fetch);
    }
    /**
     * Creates a `ProductTag` object
     *
     * @param \Starweb\Api\Generated\Model\ProductTagPostRequestModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductTagBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductTagModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createProductTag(\Starweb\Api\Generated\Model\ProductTagPostRequestModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductTag($requestBody), $fetch);
    }
    /**
     * Delete a product tag permanently
     *
     * @param int $productTagId The product tag id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductTagNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductTag(int $productTagId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductTag($productTagId), $fetch);
    }
    /**
     * Retrieves a `Tag` object
     *
     * @param int $productTagId The product tag id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductsTagNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductTagModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsTag(int $productTagId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductsTag($productTagId), $fetch);
    }
    /**
     * Partially updates a product tag. Retrieves the updated `ProductTag` object
     *
     * @param int $productTagId The product tag id
     * @param \Starweb\Api\Generated\Model\ProductTagPatchRequestModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchProductTagBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductTagNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductTagModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductTag(int $productTagId, \Starweb\Api\Generated\Model\ProductTagPatchRequestModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductTag($productTagId, $requestBody), $fetch);
    }
    /**
     * Update a product tag. Retrieves the updated `ProductTag` object
     *
     * @param int $productTagId The product tag id
     * @param \Starweb\Api\Generated\Model\ProductTagPutRequestModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutProductTagBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductTagNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductTagModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putProductTag(int $productTagId, \Starweb\Api\Generated\Model\ProductTagPutRequestModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductTag($productTagId, $requestBody), $fetch);
    }
    /**
     * Returns a list of options
     *
     * @param int $productTagId The product tag id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Api\Generated\Model\ProductTagOptionModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsTagOptions(int $productTagId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductsTagOptions($productTagId), $fetch);
    }
    /**
     * Create a tag option. Tag options can only be created for tags of type `option`. If you try to create options for a tag of type `boolean` an error `405` will be returned. Returns the created `ProductTagOption` object.
     *
     * @param int $productTagId The product tag id
     * @param \Starweb\Api\Generated\Model\ProductTagOptionPostRequestModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductTagOptionBadRequestException
     * @throws \Starweb\Api\Generated\Exception\CreateProductTagOptionMethodNotAllowedException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductTagOptionModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createProductTagOption(int $productTagId, \Starweb\Api\Generated\Model\ProductTagOptionPostRequestModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductTagOption($productTagId, $requestBody), $fetch);
    }
    /**
     * Delete a tag option permanently. Tag options can only be deleted for tags of type `option`. If you try to delete a tag option for a tag of any other type an error `405` will be returned.
     *
     * @param int $productTagId The product tag id
     * @param int $productTagOptionId The product tag option id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductTagOptionNotFoundException
     * @throws \Starweb\Api\Generated\Exception\DeleteProductTagOptionMethodNotAllowedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductTagOption(int $productTagId, int $productTagOptionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductTagOption($productTagId, $productTagOptionId), $fetch);
    }
    /**
     * Retrieves a `TagOption` object
     *
     * @param int $productTagId The product tag id
     * @param int $productTagOptionId The product tag option id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductTagOptionsNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductTagOptionModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductTagOptions(int $productTagId, int $productTagOptionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductTagOptions($productTagId, $productTagOptionId), $fetch);
    }
    /**
     * Partially updates a tag option. Tag options can only be updates for tags of type `option`. If you try to update a tag option for a tag of any other type an error `405` will be returned. Returns the updated `ProductTagOption` object.
     *
     * @param int $productTagId The product tag id
     * @param int $productTagOptionId The product tag option id
     * @param \Starweb\Api\Generated\Model\ProductTagOptionPatchRequestModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchProductTagOptionBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductTagOptionNotFoundException
     * @throws \Starweb\Api\Generated\Exception\PatchProductTagOptionMethodNotAllowedException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductTagOptionModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductTagOption(int $productTagId, int $productTagOptionId, \Starweb\Api\Generated\Model\ProductTagOptionPatchRequestModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductTagOption($productTagId, $productTagOptionId, $requestBody), $fetch);
    }
    /**
     * Update a tag option. Tag options can only be updated for tags of type `option`. If you try to update a tag option for a tag of any other type an error `405` will be returned. Returns the updated `ProductTagOption` object.
     *
     * @param int $productTagId The product tag id
     * @param int $productTagOptionId The product tag option id
     * @param \Starweb\Api\Generated\Model\ProductTagOptionPutRequestModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutProductTagOptionBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductTagOptionNotFoundException
     * @throws \Starweb\Api\Generated\Exception\PutProductTagOptionMethodNotAllowedException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductTagOptionModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putProductTagOption(int $productTagId, int $productTagOptionId, \Starweb\Api\Generated\Model\ProductTagOptionPutRequestModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductTagOption($productTagId, $productTagOptionId, $requestBody), $fetch);
    }
    /**
     * Returns a list of products.
     *
     * @param array $queryParameters {
     *     @var int $page The page of products to return
     *     @var string $sortBy Sort the result using a specified field. productId is default. Valid options are: productId
     *     @var string $sortOrder ASC for an ascending sort order; or DESC for a descending sort order. ASC is default
     *     @var string $createdSince Use this to only fetch products that has been created since a certain time. The time should be formatted using ISO-8601 (url encoded)
     *     @var string $updatedSince Use this to only fetch products that has been modified since a certain time. The time should be formatted using ISO-8601 (url encoded)
     *     @var bool $filterVisible Only fetch products visible to visitors. Default is false.
     *     @var string $filterSku Only fetch a product with the specified SKU. Has to follow the pattern of /[A-Za-z0-9._-]+$/
     *     @var string $include If you want to include child data in the result. Example: ?include=primaryVariant (to include primary product variant);?include=primaryVariant,languages (to include both primary product variant and languages). <br /><br />Available includes: `primaryVariant`, `primaryVariant.prices`, `primaryVariant.attributeValues`, `attributes`, `mediaFiles`, `languages`, `vatRates`, `categories`, `unit`, `metaData`, `bundledProducts`, `bundledProducts.prices`, `tags`.<br /><br />NOTE! Only one variant and language is included in the result for performance reason. To fetch all variants, instead use /products/x/variants(unnecessary if hasSeveralVariants is false) and to fetch all languages for an object, instead use the individual objects language endpoint
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductsBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProducts(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProducts($queryParameters), $fetch);
    }
    /**
     * Creates a product. Retrieves the created `Product` object.
     *
     * @param \Starweb\Api\Generated\Model\ProductModelUpdatable $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createProduct(\Starweb\Api\Generated\Model\ProductModelUpdatable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProduct($requestBody), $fetch);
    }
    /**
     * Deletes a product permanently.
     *
     * @param int $productId The product id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProduct(int $productId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProduct($productId), $fetch);
    }
    /**
     * Retrieves the `Product` object.
     *
     * @param int $productId The product id
     * @param array $queryParameters {
     *     @var string $include If you want to include child data in the result. Example: ?include=variants (to include product variants); ?include=variants,languages (to include both product variants and languages). Available includes: `primaryVariant`, `primaryVariant.prices`, `mediaFiles`, `languages`, `vatRates`, `categories`, `unit`, `metaData`, `bundledProducts`, `bundledProducts.prices`, `tags`. NOTE! Only one variant is included in result for performance reason. To fetch all variants, instead use /products/x/variants (unnecessary if hasSeveralVariants is false)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProduct(int $productId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProduct($productId, $queryParameters), $fetch);
    }
    /**
     * Updates a product. Retrieves the update `Product` object.
     *
     * @param int $productId The product id
     * @param \Starweb\Api\Generated\Model\ProductModelPatchable $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchProductBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchProduct(int $productId, \Starweb\Api\Generated\Model\ProductModelPatchable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProduct($productId, $requestBody), $fetch);
    }
    /**
     * Updates a product. Retrieves the update `Product` object.
     *
     * @param int $productId The product id
     * @param \Starweb\Api\Generated\Model\ProductModelUpdatable $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutProductBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putProduct(int $productId, \Starweb\Api\Generated\Model\ProductModelUpdatable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProduct($productId, $requestBody), $fetch);
    }
    /**
     * Return a list of bundled products.
     *
     * @param int $productId The products id
     * @param array $queryParameters {
     *     @var int $page The page of bundled products to return
     *     @var string $include If you want to include child data in the result. Example: `?include=prices` (to include bundled product prices). Available includes: `prices`, `stocks`.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductsBundledProductsBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\BundledProductsModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsBundledProducts(int $productId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductsBundledProducts($productId, $queryParameters), $fetch);
    }
    /**
     * Creates a bundled product. Retrieves the created `BundledProduct` object
     *
     * @param int $productId The products id
     * @param \Starweb\Api\Generated\Model\BundledProductsModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductBundledProductBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\BundledProductsModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createProductBundledProduct(int $productId, \Starweb\Api\Generated\Model\BundledProductsModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductBundledProduct($productId, $requestBody), $fetch);
    }
    /**
     * Deletes a bundled product permanently.
     *
     * @param int $productId The product id
     * @param int $bundledProductId The bundled products id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductsBundledProductNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsBundledProduct(int $productId, int $bundledProductId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductsBundledProduct($productId, $bundledProductId), $fetch);
    }
    /**
     * Retrieves the `BundledProduct` object
     *
     * @param int $productId The product id
     * @param int $bundledProductId The bundled products id
     * @param array $queryParameters {
     *     @var string $include If you want to include child data in the result. Example: ?include=prices (to include bundled product prices). Available includes: prices
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductsBundledProductsNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\BundledProductsModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsBundledProducts(int $productId, int $bundledProductId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductsBundledProducts($productId, $bundledProductId, $queryParameters), $fetch);
    }
    /**
     * Updates a bundled product. Retrieves the updated `BundledProduct` object
     *
     * @param int $productId The product id
     * @param int $bundledProductId The bundled products id
     * @param \Starweb\Api\Generated\Model\BundledProductsModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchProductsBundledProductBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductsBundledProductNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\BundledProductsModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductsBundledProduct(int $productId, int $bundledProductId, \Starweb\Api\Generated\Model\BundledProductsModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductsBundledProduct($productId, $bundledProductId, $requestBody), $fetch);
    }
    /**
     * Updates a bundled product. Retrieves the updated `BundledProduct` object
     *
     * @param int $productId The product id
     * @param int $bundledProductId The bundled products id
     * @param \Starweb\Api\Generated\Model\BundledProductsModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutProductsBundledProductBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductsBundledProductNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\BundledProductsModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putProductsBundledProduct(int $productId, int $bundledProductId, \Starweb\Api\Generated\Model\BundledProductsModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductsBundledProduct($productId, $bundledProductId, $requestBody), $fetch);
    }
    /**
     * Return a list of product variants.
     *
     * @param int $productId The products id
     * @param array $queryParameters {
     *     @var int $page The page of product variants to return
     *     @var string $include If you want to include child data in the result. Example: ?include=prices (to include variants prices). Available includes: prices, attributeValues, attributeValues.attribute
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductsVariantsBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductVariantModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsVariants(int $productId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductsVariants($productId, $queryParameters), $fetch);
    }
    /**
     * Creates a product variant. Retrieves the created `ProductVariant` object
     *
     * @param int $productId The products id
     * @param \Starweb\Api\Generated\Model\ProductVariantRequestModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductVariantBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductVariantModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createProductVariant(int $productId, \Starweb\Api\Generated\Model\ProductVariantRequestModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductVariant($productId, $requestBody), $fetch);
    }
    /**
     * Deletes a product variant permanently.
     *
     * @param int $productId The product id
     * @param int $variantId The products variants id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductsVariantNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsVariant(int $productId, int $variantId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductsVariant($productId, $variantId), $fetch);
    }
    /**
     * Retrieves the `ProductVariant` object
     *
     * @param int $productId The product id
     * @param int $variantId The products variants id
     * @param array $queryParameters {
     *     @var string $include If you want to include child data in the result. Example: ?include=prices (to include variants prices). Available includes: prices,  attributeValues, attributeValues.attribute
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductsVariantNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductVariantModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsVariant(int $productId, int $variantId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductsVariant($productId, $variantId, $queryParameters), $fetch);
    }
    /**
     * Updates a product variant. Retrieves the updated `ProductVariant` object
     *
     * @param int $productId The product id
     * @param int $variantId The products variants id
     * @param \Starweb\Api\Generated\Model\ProductVariantPatchRequestModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchProductsVariantBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductsVariantNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductVariantModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductsVariant(int $productId, int $variantId, \Starweb\Api\Generated\Model\ProductVariantPatchRequestModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductsVariant($productId, $variantId, $requestBody), $fetch);
    }
    /**
     * Updates a product variant. Retrieves the updated `ProductVariant` object
     *
     * @param int $productId The product id
     * @param int $variantId The products variants id
     * @param \Starweb\Api\Generated\Model\ProductVariantPutRequestModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutProductsVariantBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductsVariantNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductVariantModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putProductsVariant(int $productId, int $variantId, \Starweb\Api\Generated\Model\ProductVariantPutRequestModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductsVariant($productId, $variantId, $requestBody), $fetch);
    }
    /**
     * Returns a list of product vat rates.
     *
     * @param int $productId The products id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductsVatRatesBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductVatRateModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsVatRates(int $productId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductsVatRates($productId), $fetch);
    }
    /**
     * Creates a product vat rate. Retrieves the create `ProductVatRate` object.
     *
     * @param int $productId The products id
     * @param \Starweb\Api\Generated\Model\ProductVatRateModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductVatRateBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductVatRateModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createProductVatRate(int $productId, \Starweb\Api\Generated\Model\ProductVatRateModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductVatRate($productId, $requestBody), $fetch);
    }
    /**
     * Deletes the product vat rate permanently.
     *
     * @param int $productId The product id
     * @param string $countryCode The country code for the vat rate to fetch/manipulate
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductsVatRateNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsVatRate(int $productId, string $countryCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductsVatRate($productId, $countryCode), $fetch);
    }
    /**
     * Retrieves the `ProductVatRate` object.
     *
     * @param int $productId The product id
     * @param string $countryCode The country code for the vat rate to fetch/manipulate
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductsVatRateNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductVatRateModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsVatRate(int $productId, string $countryCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductsVatRate($productId, $countryCode), $fetch);
    }
    /**
     * Updates a product vat rate. Retrieves the update `ProductVatRate` object.
     *
     * @param int $productId The product id
     * @param string $countryCode The country code for the vat rate to fetch/manipulate
     * @param \Starweb\Api\Generated\Model\ProductVatRateModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchProductsVatRateBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductsVatRateNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductVatRateModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductsVatRate(int $productId, string $countryCode, \Starweb\Api\Generated\Model\ProductVatRateModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductsVatRate($productId, $countryCode, $requestBody), $fetch);
    }
    /**
     * Updates a product vat rate. Retrieves the update `ProductVatRate` object.
     *
     * @param int $productId The product id
     * @param string $countryCode The country code for the vat rate to fetch/manipulate
     * @param \Starweb\Api\Generated\Model\ProductVatRateModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutProductsVatRateBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductsVatRateNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductVatRateModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putProductsVatRate(int $productId, string $countryCode, \Starweb\Api\Generated\Model\ProductVatRateModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductsVatRate($productId, $countryCode, $requestBody), $fetch);
    }
    /**
     * Returns a list of product media file links.
     *
     * @param int $productId The products id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductsMediaFileLinksBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductMediaFileLinkModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsMediaFileLinks(int $productId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductsMediaFileLinks($productId), $fetch);
    }
    /**
    * Creates a product media file link. 
                       Retrieves the create `ProductMediaFileLink` object.
    *
    * @param int $productId The products id
    * @param \Starweb\Api\Generated\Model\ProductMediaFileLinkModel $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Generated\Exception\CreateProductsMediaFileLinkBadRequestException
    *
    * @return null|\Starweb\Api\Generated\Model\ProductMediaFileLinkModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function createProductsMediaFileLink(int $productId, \Starweb\Api\Generated\Model\ProductMediaFileLinkModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductsMediaFileLink($productId, $requestBody), $fetch);
    }
    /**
     * Deletes the product media file link permanently.
     *
     * @param int $productId The product id
     * @param int $mediaFileId The media file id of the link you want to fetch/change
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductsMediaFileLinkNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsMediaFileLink(int $productId, int $mediaFileId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductsMediaFileLink($productId, $mediaFileId), $fetch);
    }
    /**
     * Retrieves the `ProductMediaFileLink` object.
     *
     * @param int $productId The product id
     * @param int $mediaFileId The media file id of the link you want to fetch/change
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductsMediaFileLinkNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductMediaFileLinkModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsMediaFileLink(int $productId, int $mediaFileId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductsMediaFileLink($productId, $mediaFileId), $fetch);
    }
    /**
    * Updates a product media file link. 
                       Retrieves the update `ProductMediaFileLink` object.
    *
    * @param int $productId The product id
    * @param int $mediaFileId The media file id of the link you want to fetch/change
    * @param \Starweb\Api\Generated\Model\ProductMediaFileLinkModel $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Generated\Exception\PatchProductsMediaFileLinkBadRequestException
    * @throws \Starweb\Api\Generated\Exception\PatchProductsMediaFileLinkNotFoundException
    *
    * @return null|\Starweb\Api\Generated\Model\ProductMediaFileLinkModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function patchProductsMediaFileLink(int $productId, int $mediaFileId, \Starweb\Api\Generated\Model\ProductMediaFileLinkModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductsMediaFileLink($productId, $mediaFileId, $requestBody), $fetch);
    }
    /**
    * Updates a product media file link. 
                       Retrieves the update `ProductMediaFileLink` object.
    *
    * @param int $productId The product id
    * @param int $mediaFileId The media file id of the link you want to fetch/change
    * @param \Starweb\Api\Generated\Model\ProductMediaFileLinkModel $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Generated\Exception\PutProductsMediaFileLinkBadRequestException
    * @throws \Starweb\Api\Generated\Exception\PutProductsMediaFileLinkNotFoundException
    *
    * @return null|\Starweb\Api\Generated\Model\ProductMediaFileLinkModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function putProductsMediaFileLink(int $productId, int $mediaFileId, \Starweb\Api\Generated\Model\ProductMediaFileLinkModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductsMediaFileLink($productId, $mediaFileId, $requestBody), $fetch);
    }
    /**
     * Returns a list of product languages.
     *
     * @param int $productId The products id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductsLanguagesBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductLanguageModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsLanguages(int $productId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductsLanguages($productId), $fetch);
    }
    /**
     * Create a product language. Retrieves the created `ProductLanguage` object.
     *
     * @param int $productId The products id
     * @param \Starweb\Api\Generated\Model\ProductLanguageModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductsLanguageBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductLanguageModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createProductsLanguage(int $productId, \Starweb\Api\Generated\Model\ProductLanguageModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductsLanguage($productId, $requestBody), $fetch);
    }
    /**
     * Delete a product language permanently.
     *
     * @param int $productId The product id
     * @param string $langCode The language code you want to fetch/change. Supported language codes are: sv, en, ar, no, da, fi, de, fr, es
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductsLanguageNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsLanguage(int $productId, string $langCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductsLanguage($productId, $langCode), $fetch);
    }
    /**
     * Retrieves the `ProductLanguage` object.
     *
     * @param int $productId The product id
     * @param string $langCode The language code you want to fetch/change. Supported language codes are: sv, en, ar, no, da, fi, de, fr, es
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductsLanguageNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductLanguageModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsLanguage(int $productId, string $langCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductsLanguage($productId, $langCode), $fetch);
    }
    /**
     * Update a product language. Retrieves the update `ProductLanguage` object.
     *
     * @param int $productId The product id
     * @param string $langCode The language code you want to fetch/change. Supported language codes are: sv, en, ar, no, da, fi, de, fr, es
     * @param \Starweb\Api\Generated\Model\ProductLanguageModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchProductsLanguageBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductsLanguageNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductLanguageModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductsLanguage(int $productId, string $langCode, \Starweb\Api\Generated\Model\ProductLanguageModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductsLanguage($productId, $langCode, $requestBody), $fetch);
    }
    /**
     * Update a product language. Retrieves the update `ProductLanguage` object.
     *
     * @param int $productId The product id
     * @param string $langCode The language code you want to fetch/change. Supported language codes are: sv, en, ar, no, da, fi, de, fr, es
     * @param \Starweb\Api\Generated\Model\ProductLanguageModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutProductsLanguageBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductsLanguageNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductLanguageModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putProductsLanguage(int $productId, string $langCode, \Starweb\Api\Generated\Model\ProductLanguageModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductsLanguage($productId, $langCode, $requestBody), $fetch);
    }
    /**
     * Returns a list of product category links.
     *
     * @param int $productId The products id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductsCategoryLinksBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductCategoryLinkModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsCategoryLinks(int $productId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductsCategoryLinks($productId), $fetch);
    }
    /**
     * Retrieves the created `ProductCategoryLink` object
     *
     * @param int $productId The products id
     * @param \Starweb\Api\Generated\Model\ProductCategoryLinkModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductsCategoryLinkBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductCategoryLinkModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createProductsCategoryLink(int $productId, \Starweb\Api\Generated\Model\ProductCategoryLinkModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductsCategoryLink($productId, $requestBody), $fetch);
    }
    /**
     * Delete a product category link permanently.
     *
     * @param int $productId The product id
     * @param int $categoryId The category id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductsCategoryLinkNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsCategoryLink(int $productId, int $categoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductsCategoryLink($productId, $categoryId), $fetch);
    }
    /**
     * Retrieves the `ProductCategoryLink` object
     *
     * @param int $productId The product id
     * @param int $categoryId The category id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductsCategoryLinkNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductCategoryLinkModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsCategoryLink(int $productId, int $categoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductsCategoryLink($productId, $categoryId), $fetch);
    }
    /**
     * Update a product category link. Retrieves the update `ProductCategoryLink` object.
     *
     * @param int $productId The product id
     * @param int $categoryId The category id
     * @param \Starweb\Api\Generated\Model\ProductCategoryLinkModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchProductsCategoryLinkBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductsCategoryLinkNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductCategoryLinkModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductsCategoryLink(int $productId, int $categoryId, \Starweb\Api\Generated\Model\ProductCategoryLinkModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductsCategoryLink($productId, $categoryId, $requestBody), $fetch);
    }
    /**
     * Update a product category link. Retrieves the update `ProductCategoryLink` object.
     *
     * @param int $productId The product id
     * @param int $categoryId The category id
     * @param \Starweb\Api\Generated\Model\ProductCategoryLinkModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutProductsCategoryLinkBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductsCategoryLinkNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductCategoryLinkModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putProductsCategoryLink(int $productId, int $categoryId, \Starweb\Api\Generated\Model\ProductCategoryLinkModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductsCategoryLink($productId, $categoryId, $requestBody), $fetch);
    }
    /**
     * Returns a list of product meta data.
     *
     * @param int $productId The products id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductsMetaDataBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductMetaDataModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsMetaData(int $productId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductsMetaData($productId), $fetch);
    }
    /**
     * Deprecated: use the [putProductsMetaData](#operation/putProductsMetaData) operation to create a new product meta data for the `metaDataTypeId` instead. Creates a product meta data. Retrieves the created `ProductMetaData` object.
     *
     * @param int $productId The products id
     * @param \Starweb\Api\Generated\Model\ProductMetaDataModelUpdatable $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductsMetaDataBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductMetaDataModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createProductsMetaData(int $productId, \Starweb\Api\Generated\Model\ProductMetaDataModelUpdatable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductsMetaData($productId, $requestBody), $fetch);
    }
    /**
     * Deletes a product meta data permanently.
     *
     * @param int $productId The product id
     * @param int $metaDataTypeId The meta data type id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductsMetaDataNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsMetaData(int $productId, int $metaDataTypeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductsMetaData($productId, $metaDataTypeId), $fetch);
    }
    /**
     * Retrieves the `ProductMetaData` object.
     *
     * @param int $productId The product id
     * @param int $metaDataTypeId The meta data type id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductsMetaDataNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductMetaDataModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsMetaData(int $productId, int $metaDataTypeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductsMetaData($productId, $metaDataTypeId), $fetch);
    }
    /**
     * Updates a product meta data. Retrieves the update `ProductMetaData` object.
     *
     * @param int $productId The product id
     * @param int $metaDataTypeId The meta data type id
     * @param \Starweb\Api\Generated\Model\ProductMetaDataModelUpdatable $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchProductsMetaDataBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductsMetaDataNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductMetaDataModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductsMetaData(int $productId, int $metaDataTypeId, \Starweb\Api\Generated\Model\ProductMetaDataModelUpdatable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductsMetaData($productId, $metaDataTypeId, $requestBody), $fetch);
    }
    /**
     * Updates a product meta data if it exists or creates a new product meta data for the given `metaDataTypeId` if it does not exist. Retrieves the update `ProductMetaData` object.
     *
     * @param int $productId The product id
     * @param int $metaDataTypeId The meta data type id
     * @param \Starweb\Api\Generated\Model\ProductMetaDataModelUpdatable $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutProductsMetaDataBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductsMetaDataNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductMetaDataModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putProductsMetaData(int $productId, int $metaDataTypeId, \Starweb\Api\Generated\Model\ProductMetaDataModelUpdatable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductsMetaData($productId, $metaDataTypeId, $requestBody), $fetch);
    }
    /**
     * Returns a list of product attributes.
     *
     * @param int $productId The products id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductsAttributesNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductVariantAttributeModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsAttributes(int $productId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductsAttributes($productId), $fetch);
    }
    /**
     * Retrieves the `ProductAttribute` object.
     *
     * @param int $productId The product id
     * @param int $attributeId The attribute id you want to fetch.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductsAttributeNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductVariantAttributeModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsAttribute(int $productId, int $attributeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductsAttribute($productId, $attributeId), $fetch);
    }
    /**
     * Returns a list of product variant pricelist prices
     *
     * @param int $productId The products id
     * @param int $variantId The products variants id
     * @param array $queryParameters {
     *     @var string $include If you want to include child data in the result. Example: ?include=volumePrices (to include variants volume prices). Available includes: volumePrices
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductsVariantsPricelistPricesBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductVariantPriceModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsVariantsPricelistPrices(int $productId, int $variantId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductsVariantsPricelistPrices($productId, $variantId, $queryParameters), $fetch);
    }
    /**
    * Creates a product variant pricelist price. 
                       Retrieves the created `ProductVariantPricelistPrice` object
    *
    * @param int $productId The products id
    * @param int $variantId The products variants id
    * @param \Starweb\Api\Generated\Model\ProductVariantPriceModel $requestBody 
    * @param array $queryParameters {
    *     @var string $include If you want to include child data in the result. Example: ?include=volumePrices (to include variants volume prices). Available includes: volumePrices
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Generated\Exception\CreateProductVariantPricelistPriceBadRequestException
    *
    * @return null|\Starweb\Api\Generated\Model\ProductVariantPriceModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function createProductVariantPricelistPrice(int $productId, int $variantId, \Starweb\Api\Generated\Model\ProductVariantPriceModel $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductVariantPricelistPrice($productId, $variantId, $requestBody, $queryParameters), $fetch);
    }
    /**
     * Deletes a product variant pricelist price permanently.
     *
     * @param int $productId The product id
     * @param int $variantId The products variants id
     * @param int $pricelistId The pricelist id
     * @param array $queryParameters {
     *     @var string $include If you want to include child data in the result. Example: ?include=volumePrices (to include variants volume prices). Available includes: volumePrices
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductsVariantsPricelistPriceNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsVariantsPricelistPrice(int $productId, int $variantId, int $pricelistId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductsVariantsPricelistPrice($productId, $variantId, $pricelistId, $queryParameters), $fetch);
    }
    /**
     * Retrieves the `ProductVariantPricelistPrice` object
     *
     * @param int $productId The product id
     * @param int $variantId The products variants id
     * @param int $pricelistId The pricelist id
     * @param array $queryParameters {
     *     @var string $include If you want to include child data in the result. Example: ?include=volumePrices (to include variants volume prices). Available includes: volumePrices
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductsVariantsPricelistPriceNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductVariantPriceModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsVariantsPricelistPrice(int $productId, int $variantId, int $pricelistId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductsVariantsPricelistPrice($productId, $variantId, $pricelistId, $queryParameters), $fetch);
    }
    /**
    * Updates a product variant pricelist price. 
                       Retrieves the updated `ProductVariantPricelistPrice` object
    *
    * @param int $productId The product id
    * @param int $variantId The products variants id
    * @param int $pricelistId The pricelist id
    * @param \Starweb\Api\Generated\Model\ProductVariantPriceModel $requestBody 
    * @param array $queryParameters {
    *     @var string $include If you want to include child data in the result. Example: ?include=volumePrices (to include variants volume prices). Available includes: volumePrices
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Generated\Exception\PatchProductsVariantsPricelistPriceBadRequestException
    * @throws \Starweb\Api\Generated\Exception\PatchProductsVariantsPricelistPriceNotFoundException
    *
    * @return null|\Starweb\Api\Generated\Model\ProductVariantPriceModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function patchProductsVariantsPricelistPrice(int $productId, int $variantId, int $pricelistId, \Starweb\Api\Generated\Model\ProductVariantPriceModel $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductsVariantsPricelistPrice($productId, $variantId, $pricelistId, $requestBody, $queryParameters), $fetch);
    }
    /**
    * Updates a product variant pricelist price. 
                       Retrieves the updated `ProductVariantPricelistPrice` object
    *
    * @param int $productId The product id
    * @param int $variantId The products variants id
    * @param int $pricelistId The pricelist id
    * @param \Starweb\Api\Generated\Model\ProductVariantPriceModel $requestBody 
    * @param array $queryParameters {
    *     @var string $include If you want to include child data in the result. Example: ?include=volumePrices (to include variants volume prices). Available includes: volumePrices
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Generated\Exception\PutProductsVariantsPricelistPriceBadRequestException
    * @throws \Starweb\Api\Generated\Exception\PutProductsVariantsPricelistPriceNotFoundException
    *
    * @return null|\Starweb\Api\Generated\Model\ProductVariantPriceModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function putProductsVariantsPricelistPrice(int $productId, int $variantId, int $pricelistId, \Starweb\Api\Generated\Model\ProductVariantPriceModel $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductsVariantsPricelistPrice($productId, $variantId, $pricelistId, $requestBody, $queryParameters), $fetch);
    }
    /**
     * Returns a list of product variant pricelist prices
     *
     * @param int $productId The products id
     * @param int $bundledProductId The bundled products id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductBundledProductsPricelistPricesBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductBundleProductPriceModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductBundledProductsPricelistPrices(int $productId, int $bundledProductId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductBundledProductsPricelistPrices($productId, $bundledProductId), $fetch);
    }
    /**
    * Creates a bundled product pricelist price. 
                       Retrieves the created `ProductBundleProductPricelistPrice` object
    *
    * @param int $productId The products id
    * @param int $bundledProductId The bundled products id
    * @param \Starweb\Api\Generated\Model\ProductBundleProductPriceModel $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Generated\Exception\CreateProductBundleProductPricelistPriceBadRequestException
    *
    * @return null|\Starweb\Api\Generated\Model\ProductBundleProductPriceModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function createProductBundleProductPricelistPrice(int $productId, int $bundledProductId, \Starweb\Api\Generated\Model\ProductBundleProductPriceModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductBundleProductPricelistPrice($productId, $bundledProductId, $requestBody), $fetch);
    }
    /**
     * Deletes a bundled product pricelist price permanently.
     *
     * @param int $productId The product id
     * @param int $bundledProductId The bundled products id
     * @param int $pricelistId The pricelist id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductBundledProductsPricelistPriceNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductBundledProductsPricelistPrice(int $productId, int $bundledProductId, int $pricelistId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductBundledProductsPricelistPrice($productId, $bundledProductId, $pricelistId), $fetch);
    }
    /**
     * Retrieves the `ProductBundleProductPricelistPrice` object
     *
     * @param int $productId The product id
     * @param int $bundledProductId The bundled products id
     * @param int $pricelistId The pricelist id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductBundledProductsPricelistPriceNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductBundleProductPriceModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductBundledProductsPricelistPrice(int $productId, int $bundledProductId, int $pricelistId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductBundledProductsPricelistPrice($productId, $bundledProductId, $pricelistId), $fetch);
    }
    /**
    * Updates a bundled product pricelist price. 
                       Retrieves the updated `ProductBundleProductPricelistPrice` object
    *
    * @param int $productId The product id
    * @param int $bundledProductId The bundled products id
    * @param int $pricelistId The pricelist id
    * @param \Starweb\Api\Generated\Model\ProductBundleProductPriceModel $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Generated\Exception\PatchProductBundledProductsPricelistPriceBadRequestException
    * @throws \Starweb\Api\Generated\Exception\PatchProductBundledProductsPricelistPriceNotFoundException
    *
    * @return null|\Starweb\Api\Generated\Model\ProductBundleProductPriceModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function patchProductBundledProductsPricelistPrice(int $productId, int $bundledProductId, int $pricelistId, \Starweb\Api\Generated\Model\ProductBundleProductPriceModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductBundledProductsPricelistPrice($productId, $bundledProductId, $pricelistId, $requestBody), $fetch);
    }
    /**
    * Updates a bundled product pricelist price. 
                       Retrieves the updated `ProductBundleProductPricelistPrice` object
    *
    * @param int $productId The product id
    * @param int $bundledProductId The bundled products id
    * @param int $pricelistId The pricelist id
    * @param \Starweb\Api\Generated\Model\ProductBundleProductPriceModel $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Generated\Exception\PutProductBundledProductsPricelistPriceBadRequestException
    * @throws \Starweb\Api\Generated\Exception\PutProductBundledProductsPricelistPriceNotFoundException
    *
    * @return null|\Starweb\Api\Generated\Model\ProductBundleProductPriceModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function putProductBundledProductsPricelistPrice(int $productId, int $bundledProductId, int $pricelistId, \Starweb\Api\Generated\Model\ProductBundleProductPriceModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductBundledProductsPricelistPrice($productId, $bundledProductId, $pricelistId, $requestBody), $fetch);
    }
    /**
     * Returns a list of product tag links.
     *
     * @param int $productId The product id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductTagLinksBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductTagLinkModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductTagLinks(int $productId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductTagLinks($productId), $fetch);
    }
    /**
     * Create a product tag link by submitting the tagOptionId. Retrieves the created `ProductTagLink` object
     *
     * @param int $productId The product id
     * @param \Starweb\Api\Generated\Model\ProductTagLinkPostRequestModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateProductTagLinkBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductTagLinkModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createProductTagLink(int $productId, \Starweb\Api\Generated\Model\ProductTagLinkPostRequestModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductTagLink($productId, $requestBody), $fetch);
    }
    /**
     * Delete a product tag link permanently.
     *
     * @param int $productId The product id
     * @param int $tagOptionId The id of the tag option
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductTagLinkNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductTagLink(int $productId, int $tagOptionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductTagLink($productId, $tagOptionId), $fetch);
    }
    /**
     * Retrieves the `ProductTagLink` object
     *
     * @param int $productId The product id
     * @param int $tagOptionId The id of the tag option
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductTagLinkNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductTagLinkModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductTagLink(int $productId, int $tagOptionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductTagLink($productId, $tagOptionId), $fetch);
    }
    /**
     * Returns a list of the variants pricelist volume prices
     *
     * @param int $productId The products id
     * @param int $variantId The products variants id
     * @param int $pricelistId The pricelist id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductsVariantsPricelistVolumePricesBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductVariantVolumePriceModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsVariantsPricelistVolumePrices(int $productId, int $variantId, int $pricelistId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductsVariantsPricelistVolumePrices($productId, $variantId, $pricelistId), $fetch);
    }
    /**
    * Creates a variant volume pricelist price. 
                       Retrieves the created `ProductVariantPricelistVolumePrice` object
    *
    * @param int $productId The products id
    * @param int $variantId The products variants id
    * @param int $pricelistId The pricelist id
    * @param \Starweb\Api\Generated\Model\ProductVariantVolumePriceModel $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Generated\Exception\CreateProductVariantPricelistVolumePriceBadRequestException
    *
    * @return null|\Starweb\Api\Generated\Model\ProductVariantVolumePriceModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function createProductVariantPricelistVolumePrice(int $productId, int $variantId, int $pricelistId, \Starweb\Api\Generated\Model\ProductVariantVolumePriceModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateProductVariantPricelistVolumePrice($productId, $variantId, $pricelistId, $requestBody), $fetch);
    }
    /**
     * Deletes a product variant pricelist volume price permanently.
     *
     * @param int $productId The product id
     * @param int $variantId The products variants id
     * @param int $pricelistId The pricelist id
     * @param int $quantity The volume quantity
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductsVariantsPricelistVolumePriceNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsVariantsPricelistVolumePrice(int $productId, int $variantId, int $pricelistId, int $quantity, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductsVariantsPricelistVolumePrice($productId, $variantId, $pricelistId, $quantity), $fetch);
    }
    /**
     * Retrieves the `ProductVariantPricelistVolumePrice` object
     *
     * @param int $productId The product id
     * @param int $variantId The products variants id
     * @param int $pricelistId The pricelist id
     * @param int $quantity The volume quantity
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductsVariantsPricelistVolumePriceNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductVariantVolumePriceModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsVariantsPricelistVolumePrice(int $productId, int $variantId, int $pricelistId, int $quantity, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductsVariantsPricelistVolumePrice($productId, $variantId, $pricelistId, $quantity), $fetch);
    }
    /**
    * Updates a product variant pricelist volume price. 
                       Retrieves the updated `ProductVariantPricelistVolumePrice` object
    *
    * @param int $productId The product id
    * @param int $variantId The products variants id
    * @param int $pricelistId The pricelist id
    * @param int $quantity The volume quantity
    * @param \Starweb\Api\Generated\Model\ProductVariantVolumePriceModel $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Generated\Exception\PatchProductsVariantsPricelistVolumePriceBadRequestException
    * @throws \Starweb\Api\Generated\Exception\PatchProductsVariantsPricelistVolumePriceNotFoundException
    *
    * @return null|\Starweb\Api\Generated\Model\ProductVariantVolumePriceModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function patchProductsVariantsPricelistVolumePrice(int $productId, int $variantId, int $pricelistId, int $quantity, \Starweb\Api\Generated\Model\ProductVariantVolumePriceModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchProductsVariantsPricelistVolumePrice($productId, $variantId, $pricelistId, $quantity, $requestBody), $fetch);
    }
    /**
    * Updates a product variant pricelist volume price. 
                       Retrieves the updated `ProductVariantPricelistVolumePrice` object
    *
    * @param int $productId The product id
    * @param int $variantId The products variants id
    * @param int $pricelistId The pricelist id
    * @param int $quantity The volume quantity
    * @param \Starweb\Api\Generated\Model\ProductVariantVolumePriceModel $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Generated\Exception\PutProductsVariantsPricelistVolumePriceBadRequestException
    * @throws \Starweb\Api\Generated\Exception\PutProductsVariantsPricelistVolumePriceNotFoundException
    *
    * @return null|\Starweb\Api\Generated\Model\ProductVariantVolumePriceModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function putProductsVariantsPricelistVolumePrice(int $productId, int $variantId, int $pricelistId, int $quantity, \Starweb\Api\Generated\Model\ProductVariantVolumePriceModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductsVariantsPricelistVolumePrice($productId, $variantId, $pricelistId, $quantity, $requestBody), $fetch);
    }
    /**
     * Returns a list of product variant stocks for stock locations
     *
     * @param int $productId The products id
     * @param int $variantId The products variants id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListProductsVariantsStocksBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductVariantStockModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsVariantsStocks(int $productId, int $variantId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListProductsVariantsStocks($productId, $variantId), $fetch);
    }
    /**
     * Deletes a product variant stock permanently.
     *
     * @param int $productId The product id
     * @param int $variantId The products variants id
     * @param int $stockLocationId The stock location id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteProductVariantStocksNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductVariantStocks(int $productId, int $variantId, int $stockLocationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteProductVariantStocks($productId, $variantId, $stockLocationId), $fetch);
    }
    /**
     * Retrieves the `ProductVariantStock` object
     *
     * @param int $productId The product id
     * @param int $variantId The products variants id
     * @param int $stockLocationId The stock location id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetProductVariantStockNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductVariantStockModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductVariantStock(int $productId, int $variantId, int $stockLocationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetProductVariantStock($productId, $variantId, $stockLocationId), $fetch);
    }
    /**
    * Update or set the stock for a product variant at a stock location. 
                       Retrieves the updated `ProductVariantStock` object
    *
    * @param int $productId The product id
    * @param int $variantId The products variants id
    * @param int $stockLocationId The stock location id
    * @param \Starweb\Api\Generated\Model\ProductVariantStockPutRequestModel $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Generated\Exception\PutProductVariantStockBadRequestException
    * @throws \Starweb\Api\Generated\Exception\PutProductVariantStockNotFoundException
    *
    * @return null|\Starweb\Api\Generated\Model\ProductVariantStockModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function putProductVariantStock(int $productId, int $variantId, int $stockLocationId, \Starweb\Api\Generated\Model\ProductVariantStockPutRequestModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutProductVariantStock($productId, $variantId, $stockLocationId, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Api\Generated\Model\ShippingMethodModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getShippingMethods(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetShippingMethods(), $fetch);
    }
    /**
     * Retrieves a `ShippingMethid` object
     *
     * @param int $shippingMethodId The shipping method id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetShippingMethodNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ShippingMethodModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getShippingMethod(int $shippingMethodId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetShippingMethod($shippingMethodId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Api\Generated\Model\ShippingTrackingTypeModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getShippingTrackingTypes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetShippingTrackingTypes(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetShopNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ShopItem|\Psr\Http\Message\ResponseInterface
     */
    public function getShop(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetShop(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\ListStockLocationsBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\StockLocationModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listStockLocations(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\ListStockLocations(), $fetch);
    }
    /**
     * Create a stock location. Retrieves the created `StockLocation` object
     *
     * @param \Starweb\Api\Generated\Model\StockLocationPostRequestModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateStockLocationBadRequestException
     * @throws \Starweb\Api\Generated\Exception\CreateStockLocationForbiddenException
     *
     * @return null|\Starweb\Api\Generated\Model\StockLocationModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createStockLocation(\Starweb\Api\Generated\Model\StockLocationPostRequestModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateStockLocation($requestBody), $fetch);
    }
    /**
     * Delete a stock location permanently
     *
     * @param int $stockLocationId The stock location id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteStockLocationForbiddenException
     * @throws \Starweb\Api\Generated\Exception\DeleteStockLocationNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteStockLocation(int $stockLocationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteStockLocation($stockLocationId), $fetch);
    }
    /**
     * Retrieves a `StockLocation` object
     *
     * @param int $stockLocationId The stock location id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetStockLocationNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\StockLocationModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getStockLocation(int $stockLocationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetStockLocation($stockLocationId), $fetch);
    }
    /**
     * Update a stock location partially. Retrieves the updated `StockLocation` object
     *
     * @param int $stockLocationId The stock location id
     * @param mixed $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchStockLocationBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchStockLocationForbiddenException
     * @throws \Starweb\Api\Generated\Exception\PatchStockLocationNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\StockLocationModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchStockLocation(int $stockLocationId, $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchStockLocation($stockLocationId, $requestBody), $fetch);
    }
    /**
     * Update a stock location. Retrieves the updated `StockLocation` object
     *
     * @param int $stockLocationId The stock location id
     * @param \Starweb\Api\Generated\Model\StockLocationPutRequestModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutStockLocationBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutStockLocationForbiddenException
     * @throws \Starweb\Api\Generated\Exception\PutStockLocationNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\StockLocationModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putStockLocation(int $stockLocationId, \Starweb\Api\Generated\Model\StockLocationPutRequestModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutStockLocation($stockLocationId, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $sortBy Sort the result using a specified field. webHookId is default. Valid options are: webHookId
     *     @var string $sortOrder ASC for an ascending sort order; or DESC for a descending sort order. ASC is default
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Api\Generated\Model\WebHookModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getWebHooks(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetWebHooks($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Api\Generated\Model\WebHookModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\CreateWebHookBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\WebHookModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createWebHook(\Starweb\Api\Generated\Model\WebHookModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateWebHook($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param int $webHookId The web hook id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\DeleteWebHookNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteWebHook(int $webHookId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\DeleteWebHook($webHookId), $fetch);
    }
    /**
     * 
     *
     * @param int $webHookId The web hook id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\GetWebHookNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\WebHookModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getWebHook(int $webHookId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\GetWebHook($webHookId), $fetch);
    }
    /**
     * 
     *
     * @param int $webHookId The web hook id
     * @param \Starweb\Api\Generated\Model\WebHookModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PatchWebHookBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchWebHookNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\WebHookModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchWebHook(int $webHookId, \Starweb\Api\Generated\Model\WebHookModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PatchWebHook($webHookId, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param int $webHookId The web hook id
     * @param \Starweb\Api\Generated\Model\WebHookModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Generated\Exception\PutWebHookBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutWebHookNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\WebHookModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putWebHook(int $webHookId, \Starweb\Api\Generated\Model\WebHookModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\PutWebHook($webHookId, $requestBody), $fetch);
    }
    public static function create($httpClient = null)
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\HttpClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\UriFactoryDiscovery::find()->createUri('https://{shopId}.sws.local/api/v2');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $messageFactory = \Http\Discovery\MessageFactoryDiscovery::find();
        $streamFactory = \Http\Discovery\StreamFactoryDiscovery::find();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Starweb\Api\Generated\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode())));
        return new static($httpClient, $messageFactory, $serializer, $streamFactory);
    }
}