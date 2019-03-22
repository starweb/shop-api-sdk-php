<?php

namespace Starweb\Api\Client;

class Client extends \Jane\OpenApiRuntime\Client\Psr7HttplugClient
{
    /**
     * Create a token. Retrieves the create `Token` object.
     *
     * @param \Starweb\Api\Client\Model\ClientCredentialModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\GenerateFetchAccessTokenBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\TokenModel|\Psr\Http\Message\ResponseInterface
     */
    public function generateFetchAccessToken(\Starweb\Api\Client\Model\ClientCredentialModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GenerateFetchAccessToken($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Api\Client\Model\CurrencyCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getCurrencies(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetCurrencies(), $fetch);
    }
    /**
     * Retrieves the details of a currency
     *
     * @param string $currencyCode The currency code
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\GetCurrencyNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\CurrencyModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getCurrency(string $currencyCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetCurrency($currencyCode), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Api\Client\Model\CustomerTagModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomersTags(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetCustomersTags(), $fetch);
    }
    /**
     * Retrieves a `Tag` object
     *
     * @param int $tagId The tag id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\GetCustomersTagNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\CustomerTagModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomersTag(int $tagId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetCustomersTag($tagId), $fetch);
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
     * @throws \Starweb\Api\Client\Exception\ListCustomersBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\CustomerModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listCustomers(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\ListCustomers($queryParameters), $fetch);
    }
    /**
     * Creates a `Customer` object
     *
     * @param \Starweb\Api\Client\Model\CustomerUpdateModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\CreateCustomerBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\CustomerModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createCustomer(\Starweb\Api\Client\Model\CustomerUpdateModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\CreateCustomer($requestBody), $fetch);
    }
    /**
     * Delete a customer permanently!
     *
     * @param int $customerId The customers id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\DeleteCustomerNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCustomer(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\DeleteCustomer($customerId), $fetch);
    }
    /**
     * Retrieves a `Customer` object
     *
     * @param int $customerId The customers id
     * @param array $queryParameters {
     *     @var string $include If you want to include child data in the result. Example: ?include=tags (to include customer tags); ?include=tags,addresses (to include both customer tags and addresses). Available includes: tags, externalServices, addresses
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\GetCustomerNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\CustomerModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomer(int $customerId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetCustomer($customerId, $queryParameters), $fetch);
    }
    /**
     * Updates a customer. Retrieves the updated `Customer` object
     *
     * @param int $customerId The customers id
     * @param \Starweb\Api\Client\Model\CustomerUpdateModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\PatchCustomerBadRequestException
     * @throws \Starweb\Api\Client\Exception\PatchCustomerNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\CustomerModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchCustomer(int $customerId, \Starweb\Api\Client\Model\CustomerUpdateModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PatchCustomer($customerId, $requestBody), $fetch);
    }
    /**
     * Updates a customer. Retrieves the updated `Customer` object
     *
     * @param int $customerId The customers id
     * @param \Starweb\Api\Client\Model\CustomerUpdateModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\PutCustomerBadRequestException
     * @throws \Starweb\Api\Client\Exception\PutCustomerNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\CustomerModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putCustomer(int $customerId, \Starweb\Api\Client\Model\CustomerUpdateModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PutCustomer($customerId, $requestBody), $fetch);
    }
    /**
     * Returns a list of external services for a customer
     *
     * @param int $customerId The customers id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Api\Client\Model\CustomerExternalServicesModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerExternalServices(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetCustomerExternalServices($customerId), $fetch);
    }
    /**
     * Retrieves a `CustomerExternalService` object
     *
     * @param int $customerId The customers id
     * @param string $serviceName The service name
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\GetCustomerExternalServiceNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\CustomerExternalServicesModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerExternalService(int $customerId, string $serviceName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetCustomerExternalService($customerId, $serviceName), $fetch);
    }
    /**
     * Returns a list of customer tags
     *
     * @param int $customerId The customers id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Api\Client\Model\CustomerAddedTagModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerTags(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetCustomerTags($customerId), $fetch);
    }
    /**
     * Add a tag to a customer. Retrieves the created `CustomerTag` object
     *
     * @param int $customerId The customers id
     * @param \Starweb\Api\Client\Model\CustomerAddedTagModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\AddTagToCustomerBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\CustomerAddedTagModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function addTagToCustomer(int $customerId, \Starweb\Api\Client\Model\CustomerAddedTagModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\AddTagToCustomer($customerId, $requestBody), $fetch);
    }
    /**
     * Deletes a customer tag permanently.
     *
     * @param int $customerId The customers id
     * @param int $tagId The customer tag id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\RemoveTagFromCustomerNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function removeTagFromCustomer(int $customerId, int $tagId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\RemoveTagFromCustomer($customerId, $tagId), $fetch);
    }
    /**
     * Retrieves a `CustomerTag` object
     *
     * @param int $customerId The customers id
     * @param int $tagId The customer tag id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\GetCustomerTagNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\CustomerAddedTagModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerTag(int $customerId, int $tagId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetCustomerTag($customerId, $tagId), $fetch);
    }
    /**
     * Returns a list of addresses for a customer
     *
     * @param int $customerId The customers id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Api\Client\Model\CustomerAddressesModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerGroups(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetCustomerGroups($customerId), $fetch);
    }
    /**
     * Delete a customer address permanently.
     *
     * @param int $customerId The customers id
     * @param string $addressType The customer address type
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\RemoveAddressFromCustomerNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function removeAddressFromCustomer(int $customerId, string $addressType, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\RemoveAddressFromCustomer($customerId, $addressType), $fetch);
    }
    /**
     * Retrieves a `CustomerAddress` object
     *
     * @param int $customerId The customers id
     * @param string $addressType The customer address type
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\GetCustomerAddressNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\CustomerAddressesModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerAddress(int $customerId, string $addressType, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetCustomerAddress($customerId, $addressType), $fetch);
    }
    /**
     * Updates a customer address. Retrieves the updated `CustomerAddress` object
     *
     * @param int $customerId The customers id
     * @param string $addressType The customer address type
     * @param \Starweb\Api\Client\Model\AddressModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\PatchCustomerAddressBadRequestException
     * @throws \Starweb\Api\Client\Exception\PatchCustomerAddressNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\CustomerAddressesModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchCustomerAddress(int $customerId, string $addressType, \Starweb\Api\Client\Model\AddressModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PatchCustomerAddress($customerId, $addressType, $requestBody), $fetch);
    }
    /**
     * Updates a customer address. Retrieves the updated `CustomerAddress` object
     *
     * @param int $customerId The customers id
     * @param string $addressType The customer address type
     * @param \Starweb\Api\Client\Model\AddressModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\PutCustomerAddressBadRequestException
     * @throws \Starweb\Api\Client\Exception\PutCustomerAddressNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\CustomerAddressesModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putCustomerAddress(int $customerId, string $addressType, \Starweb\Api\Client\Model\AddressModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PutCustomerAddress($customerId, $addressType, $requestBody), $fetch);
    }
    /**
     * Returns a list of media file‚
     *
     * @param array $queryParameters {
     *     @var int $page The page of media files to return
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Api\Client\Model\MediaFileModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getMediaFiles(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetMediaFiles($queryParameters), $fetch);
    }
    /**
     * Creates a new `Media File` object
     *
     * @param \Starweb\Api\Client\Model\MediaFileUploadModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\CreateMediaFileBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\MediaFileModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createMediaFile(\Starweb\Api\Client\Model\MediaFileUploadModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\CreateMediaFile($requestBody), $fetch);
    }
    /**
     * Delete a media file permanently.
     *
     * @param int $mediaFileId The media files id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\DeleteMediaFileNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteMediaFile(int $mediaFileId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\DeleteMediaFile($mediaFileId), $fetch);
    }
    /**
     * Retrieve a `MediaFile` object
     *
     * @param int $mediaFileId The media files id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\GetMediaFileNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\MediaFileModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getMediaFile(int $mediaFileId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetMediaFile($mediaFileId), $fetch);
    }
    /**
     * Updates a media file. Retrieves the updated `MediaFile` object
     *
     * @param int $mediaFileId The media files id
     * @param \Starweb\Api\Client\Model\MediaFileUploadModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\PatchMediaFileBadRequestException
     * @throws \Starweb\Api\Client\Exception\PatchMediaFileNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\MediaFileModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchMediaFile(int $mediaFileId, \Starweb\Api\Client\Model\MediaFileUploadModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PatchMediaFile($mediaFileId, $requestBody), $fetch);
    }
    /**
     * Updates a media file. Retrieves the updated `MediaFile` object
     *
     * @param int $mediaFileId The media files id
     * @param \Starweb\Api\Client\Model\MediaFileUploadModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\PutMediaFileBadRequestException
     * @throws \Starweb\Api\Client\Exception\PutMediaFileNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\MediaFileModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putMediaFile(int $mediaFileId, \Starweb\Api\Client\Model\MediaFileUploadModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PutMediaFile($mediaFileId, $requestBody), $fetch);
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
     *     @var string $include If you want to include child data in the result. Example: ?include=items (to include order items) or ?include=items,externalServices (to include order items as well as external ids). Available includes: items, externalServices, status, customer, addresses
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\ListOrdersBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\OrderModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listOrders(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\ListOrders($queryParameters), $fetch);
    }
    /**
     * Create an order. Retrieves the create `Order` object
     *
     * @param \Starweb\Api\Client\Model\OrderUpdateModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\CreateOrderBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\OrderModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createOrder(\Starweb\Api\Client\Model\OrderUpdateModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\CreateOrder($requestBody), $fetch);
    }
    /**
     * Delete an order permanently
     *
     * @param int $orderId The orders id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\DeleteOrderNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteOrder(int $orderId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\DeleteOrder($orderId), $fetch);
    }
    /**
     * Retrieve an `Order` object
     *
     * @param int $orderId The orders id
     * @param array $queryParameters {
     *     @var string $include If you want to include child data in the result. Example: ?include=items (to include order items) or ?include=items,externalServices (to include order items as well as external ids). Available includes: items, externalServices, status, customer, addresses
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\GetOrderNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\OrderModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getOrder(int $orderId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetOrder($orderId, $queryParameters), $fetch);
    }
    /**
     * Updates an oder. Retrieves the updated `Order` object
     *
     * @param int $orderId The orders id
     * @param \Starweb\Api\Client\Model\OrderUpdateModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\PatchOrderBadRequestException
     * @throws \Starweb\Api\Client\Exception\PatchOrderNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\OrderModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchOrder(int $orderId, \Starweb\Api\Client\Model\OrderUpdateModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PatchOrder($orderId, $requestBody), $fetch);
    }
    /**
     * Updates an oder. Retrieves the updated `Order` object
     *
     * @param int $orderId The orders id
     * @param \Starweb\Api\Client\Model\OrderUpdateModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\PutOrderBadRequestException
     * @throws \Starweb\Api\Client\Exception\PutOrderNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\OrderModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putOrder(int $orderId, \Starweb\Api\Client\Model\OrderUpdateModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PutOrder($orderId, $requestBody), $fetch);
    }
    /**
     * Returns a list o order addresses
     *
     * @param int $orderId The orders id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Api\Client\Model\OrderAddressCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listOrderAddresses(int $orderId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\ListOrderAddresses($orderId), $fetch);
    }
    /**
     * Delete an oder address permanently.
     *
     * @param int $orderId The orders id
     * @param string $addressType The order address type
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\DeleteOrderAddressNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteOrderAddress(int $orderId, string $addressType, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\DeleteOrderAddress($orderId, $addressType), $fetch);
    }
    /**
     * Retrieves the `OrderAddress` object
     *
     * @param int $orderId The orders id
     * @param string $addressType The order address type
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\GetOrderAddressNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\AddressModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderAddress(int $orderId, string $addressType, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetOrderAddress($orderId, $addressType), $fetch);
    }
    /**
     * Updates an oder adress. Retrieves the updated `OrderAddress` object
     *
     * @param int $orderId The orders id
     * @param string $addressType The order address type
     * @param \Starweb\Api\Client\Model\AddressModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\PatchOrderAddressBadRequestException
     * @throws \Starweb\Api\Client\Exception\PatchOrderAddressNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\AddressModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchOrderAddress(int $orderId, string $addressType, \Starweb\Api\Client\Model\AddressModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PatchOrderAddress($orderId, $addressType, $requestBody), $fetch);
    }
    /**
     * Updates an oder adress. Retrieves the updated `OrderAddress` object
     *
     * @param int $orderId The orders id
     * @param string $addressType The order address type
     * @param \Starweb\Api\Client\Model\AddressModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\PutOrderAddressBadRequestException
     * @throws \Starweb\Api\Client\Exception\PutOrderAddressNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\AddressModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putOrderAddress(int $orderId, string $addressType, \Starweb\Api\Client\Model\AddressModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PutOrderAddress($orderId, $addressType, $requestBody), $fetch);
    }
    /**
     * Returns a list of order comments.
     *
     * @param int $orderId The orders id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Api\Client\Model\OrderCommentModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderComments(int $orderId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetOrderComments($orderId), $fetch);
    }
    /**
     * Retrieves the `OrderComment` object
     *
     * @param int $orderId The orders id
     * @param int $commentId The order comments id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\GetOrderCommentNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\OrderCommentModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderComment(int $orderId, int $commentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetOrderComment($orderId, $commentId), $fetch);
    }
    /**
     * Returns a list of order external services.
     *
     * @param int $orderId The orders id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Api\Client\Model\OrderExternalServiceModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderExternalServices(int $orderId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetOrderExternalServices($orderId), $fetch);
    }
    /**
    * Create an order external servicea. Retrieves the created `OrderExternalService`
                                       object
    *
    * @param int $orderId The orders id
    * @param \Starweb\Api\Client\Model\OrderExternalServiceModel $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Client\Exception\CreateOrderExternalServiceBadRequestException
    *
    * @return null|\Starweb\Api\Client\Model\OrderExternalServicesModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function createOrderExternalService(int $orderId, \Starweb\Api\Client\Model\OrderExternalServiceModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\CreateOrderExternalService($orderId, $requestBody), $fetch);
    }
    /**
     * Deletes an order external service permanently
     *
     * @param int $orderId The orders id
     * @param string $serviceName The service name
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\DeleteOrderExternalServiceNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteOrderExternalService(int $orderId, string $serviceName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\DeleteOrderExternalService($orderId, $serviceName), $fetch);
    }
    /**
     * Retrieves the `OrderExternalService` object
     *
     * @param int $orderId The orders id
     * @param string $serviceName The service name
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\GetOrderExternalServiceNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\OrderExternalServicesModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderExternalService(int $orderId, string $serviceName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetOrderExternalService($orderId, $serviceName), $fetch);
    }
    /**
    * Updates an oder external service. 
                       Retrieves the updated `OrderExternalService` object
    *
    * @param int $orderId The orders id
    * @param string $serviceName The service name
    * @param \Starweb\Api\Client\Model\OrderExternalServiceModel $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Client\Exception\PatchOrderExternalServiceBadRequestException
    * @throws \Starweb\Api\Client\Exception\PatchOrderExternalServiceNotFoundException
    *
    * @return null|\Starweb\Api\Client\Model\OrderExternalServicesModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function patchOrderExternalService(int $orderId, string $serviceName, \Starweb\Api\Client\Model\OrderExternalServiceModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PatchOrderExternalService($orderId, $serviceName, $requestBody), $fetch);
    }
    /**
    * Updates an oder external service. 
                       Retrieves the updated `OrderExternalService` object
    *
    * @param int $orderId The orders id
    * @param string $serviceName The service name
    * @param \Starweb\Api\Client\Model\OrderExternalServiceModel $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Client\Exception\PutOrderExternalServiceBadRequestException
    * @throws \Starweb\Api\Client\Exception\PutOrderExternalServiceNotFoundException
    *
    * @return null|\Starweb\Api\Client\Model\OrderExternalServicesModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function putOrderExternalService(int $orderId, string $serviceName, \Starweb\Api\Client\Model\OrderExternalServiceModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PutOrderExternalService($orderId, $serviceName, $requestBody), $fetch);
    }
    /**
     * Returns a list of order items
     *
     * @param int $orderId The orders id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Api\Client\Model\OrderItemModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderItems(int $orderId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetOrderItems($orderId), $fetch);
    }
    /**
     * Create an order item. Retrieves the create `OrderItem` object
     *
     * @param int $orderId The orders id
     * @param \Starweb\Api\Client\Model\OrderItemModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\CreateOrderItemBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\OrderItemModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createOrderItem(int $orderId, \Starweb\Api\Client\Model\OrderItemModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\CreateOrderItem($orderId, $requestBody), $fetch);
    }
    /**
     * Delete the order item permanently.
     *
     * @param int $orderId The orders id
     * @param int $orderItemId The order item id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\DeleteOrderItemNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteOrderItem(int $orderId, int $orderItemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\DeleteOrderItem($orderId, $orderItemId), $fetch);
    }
    /**
     * Retrieves the `OrderItem` object
     *
     * @param int $orderId The orders id
     * @param int $orderItemId The order item id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\GetOrderItemNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\OrderItemModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderItem(int $orderId, int $orderItemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetOrderItem($orderId, $orderItemId), $fetch);
    }
    /**
     * Updates an oder item. Retrieves the updated `OrderItem` object
     *
     * @param int $orderId The orders id
     * @param int $orderItemId The order item id
     * @param \Starweb\Api\Client\Model\OrderItemModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\PatchOrderItemBadRequestException
     * @throws \Starweb\Api\Client\Exception\PatchOrderItemNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\OrderItemModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchOrderItem(int $orderId, int $orderItemId, \Starweb\Api\Client\Model\OrderItemModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PatchOrderItem($orderId, $orderItemId, $requestBody), $fetch);
    }
    /**
     * Updates an oder item. Retrieves the updated `OrderItem` object
     *
     * @param int $orderId The orders id
     * @param int $orderItemId The order item id
     * @param \Starweb\Api\Client\Model\OrderItemModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\PutOrderItemBadRequestException
     * @throws \Starweb\Api\Client\Exception\PutOrderItemNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\OrderItemModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putOrderItem(int $orderId, int $orderItemId, \Starweb\Api\Client\Model\OrderItemModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PutOrderItem($orderId, $orderItemId, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Api\Client\Model\OrderStatusModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderStatuses(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetOrderStatuses(), $fetch);
    }
    /**
     * Create an order status. Retrieves the created `OrderStatus` object
     *
     * @param \Starweb\Api\Client\Model\OrderStatusModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\CreateOrderStatusBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\OrderStatusModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createOrderStatus(\Starweb\Api\Client\Model\OrderStatusModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\CreateOrderStatus($requestBody), $fetch);
    }
    /**
    * Deletes an oder status. Retrieves the updated `OrderItem` object. 
                       NB! You are not allowed to delete order statuses that is in use by an order, or standard order statuses (all statuses with an idCode set)
    *
    * @param int $orderStatusId The order status id
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Client\Exception\DeleteOrderStatusForbiddenException
    * @throws \Starweb\Api\Client\Exception\DeleteOrderStatusNotFoundException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function deleteOrderStatus(int $orderStatusId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\DeleteOrderStatus($orderStatusId), $fetch);
    }
    /**
     * Retrieves the `OrderStatus` object
     *
     * @param int $orderStatusId The order status id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\GetOrderStatusNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\OrderStatusModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderStatus(int $orderStatusId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetOrderStatus($orderStatusId), $fetch);
    }
    /**
    * Updates an oder status. Retrieves the updated `Orderstatus` object. 
                       NB! You are not allowed to update standard order statuses (all statuses with an idCode set)
    *
    * @param int $orderStatusId The order status id
    * @param \Starweb\Api\Client\Model\OrderStatusModel $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Client\Exception\PatchOrderStatusBadRequestException
    * @throws \Starweb\Api\Client\Exception\PatchOrderStatusForbiddenException
    * @throws \Starweb\Api\Client\Exception\PatchOrderStatusNotFoundException
    *
    * @return null|\Starweb\Api\Client\Model\OrderStatusModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function patchOrderStatus(int $orderStatusId, \Starweb\Api\Client\Model\OrderStatusModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PatchOrderStatus($orderStatusId, $requestBody), $fetch);
    }
    /**
    * Updates an oder status. Retrieves the updated `Orderstatus` object. 
                   NB! You are not allowed to update standard order statuses (all statuses with an idCode set)
    *
    * @param int $orderStatusId The order status id
    * @param \Starweb\Api\Client\Model\OrderStatusModel $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Client\Exception\PutOrderStatusBadRequestException
    * @throws \Starweb\Api\Client\Exception\PutOrderStatusForbiddenException
    * @throws \Starweb\Api\Client\Exception\PutOrderStatusNotFoundException
    *
    * @return null|\Starweb\Api\Client\Model\OrderStatusModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function putOrderStatus(int $orderStatusId, \Starweb\Api\Client\Model\OrderStatusModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PutOrderStatus($orderStatusId, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Api\Client\Model\PaymentMethodModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getPaymentMethods(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetPaymentMethods(), $fetch);
    }
    /**
     * Retrieves a `PaymentMethod` object
     *
     * @param int $paymentMethodId The payment method id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\GetPaymentMethodNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\PaymentMethodModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getPaymentMethod(int $paymentMethodId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetPaymentMethod($paymentMethodId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Api\Client\Model\PricelistModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getPricelists(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetPricelists(), $fetch);
    }
    /**
     * Retrieves a `Pricelist` object
     *
     * @param int $pricelistId The pricelist id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\GetPricelistNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\PricelistModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getPricelist(int $pricelistId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetPricelist($pricelistId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\ListProductsVariantsAttributesBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\ProductVariantAttributeModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsVariantsAttributes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\ListProductsVariantsAttributes(), $fetch);
    }
    /**
    * Creates a product variant attribute. 
                       Retrieves the created `ProductVariantAttribute` object.
    *
    * @param \Starweb\Api\Client\Model\ProductVariantAttributeModelUpdatable $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Client\Exception\CreateAttributeBadRequestException
    *
    * @return null|\Starweb\Api\Client\Model\ProductVariantAttributeModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function createAttribute(\Starweb\Api\Client\Model\ProductVariantAttributeModelUpdatable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\CreateAttribute($requestBody), $fetch);
    }
    /**
     * Deletes the product variant attribute permanently.
     *
     * @param int $attributeId The attribute value id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\DeleteAttributeNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAttribute(int $attributeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\DeleteAttribute($attributeId), $fetch);
    }
    /**
     * Retrieves the `ProductVariantAttribute` object.
     *
     * @param int $attributeId The attribute value id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\GetProductsVariantsAttributeNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductVariantAttributeModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsVariantsAttribute(int $attributeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetProductsVariantsAttribute($attributeId), $fetch);
    }
    /**
    * Updates a product variant attribute.
                       Retrieves the updated `ProductVariantAttribute` object.
    *
    * @param int $attributeId The attribute value id
    * @param \Starweb\Api\Client\Model\ProductVariantAttributeModelUpdatable $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Client\Exception\PatchAttributeBadRequestException
    *
    * @return null|\Starweb\Api\Client\Model\ProductVariantAttributeModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function patchAttribute(int $attributeId, \Starweb\Api\Client\Model\ProductVariantAttributeModelUpdatable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PatchAttribute($attributeId, $requestBody), $fetch);
    }
    /**
    * Updates a product variant attribute.
                       Retrieves the updated `ProductVariantAttribute` object.
    *
    * @param int $attributeId The attribute value id
    * @param \Starweb\Api\Client\Model\ProductVariantAttributeModelUpdatable $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Client\Exception\PutAttributeBadRequestException
    *
    * @return null|\Starweb\Api\Client\Model\ProductVariantAttributeModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function putAttribute(int $attributeId, \Starweb\Api\Client\Model\ProductVariantAttributeModelUpdatable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PutAttribute($attributeId, $requestBody), $fetch);
    }
    /**
     * Returns a list of product variant attribute values.
     *
     * @param int $attributeId The attribute id
     * @param array $queryParameters {
     *     @var string $include If you want to include child data in the result. Example: ?include=attribute (to include the attribute the values belongs to). Available includes: attribute
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\ListProductsVariantsAttributeValuesBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\ProductVariantAttributeValueModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsVariantsAttributeValues(int $attributeId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\ListProductsVariantsAttributeValues($attributeId, $queryParameters), $fetch);
    }
    /**
    * Creates a product variant attribute value.
                       Retrieves the created `ProductVariantAttributeValue` object.
    *
    * @param int $attributeId The attribute id
    * @param \Starweb\Api\Client\Model\ProductVariantAttributeValueModelUpdatable $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Client\Exception\CreateProductsVariantsAttributeValuesBadRequestException
    *
    * @return null|\Starweb\Api\Client\Model\ProductVariantAttributeValueModelCollection|\Psr\Http\Message\ResponseInterface
    */
    public function createProductsVariantsAttributeValues(int $attributeId, \Starweb\Api\Client\Model\ProductVariantAttributeValueModelUpdatable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\CreateProductsVariantsAttributeValues($attributeId, $requestBody), $fetch);
    }
    /**
     * Delete a product variant attribute value permanently.
     *
     * @param int $attributeId The attribute id
     * @param int $attributeValueId The attribe value id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\DeleteAttributeValueNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAttributeValue(int $attributeId, int $attributeValueId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\DeleteAttributeValue($attributeId, $attributeValueId), $fetch);
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
     * @throws \Starweb\Api\Client\Exception\GetProductsVariantsAttributeValueNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductVariantAttributeValueModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsVariantsAttributeValue(int $attributeId, int $attributeValueId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetProductsVariantsAttributeValue($attributeId, $attributeValueId, $queryParameters), $fetch);
    }
    /**
    * Updates a product variant attribute value.
                       Retrieves the updated`ProductVariantAttributeValue` object.
    *
    * @param int $attributeId The attribute id
    * @param int $attributeValueId The attribe value id
    * @param \Starweb\Api\Client\Model\ProductVariantAttributeValueModelUpdatable $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Client\Exception\PatchProductsVariantsAttributeValuesBadRequestException
    *
    * @return null|\Starweb\Api\Client\Model\ProductVariantAttributeValueModelCollection|\Psr\Http\Message\ResponseInterface
    */
    public function patchProductsVariantsAttributeValues(int $attributeId, int $attributeValueId, \Starweb\Api\Client\Model\ProductVariantAttributeValueModelUpdatable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PatchProductsVariantsAttributeValues($attributeId, $attributeValueId, $requestBody), $fetch);
    }
    /**
    * Updates a product variant attribute value.
                       Retrieves the updated`ProductVariantAttributeValue` object.
    *
    * @param int $attributeId The attribute id
    * @param int $attributeValueId The attribe value id
    * @param \Starweb\Api\Client\Model\ProductVariantAttributeValueModelUpdatable $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Client\Exception\PutProductsVariantsAttributeValuesBadRequestException
    *
    * @return null|\Starweb\Api\Client\Model\ProductVariantAttributeValueModelCollection|\Psr\Http\Message\ResponseInterface
    */
    public function putProductsVariantsAttributeValues(int $attributeId, int $attributeValueId, \Starweb\Api\Client\Model\ProductVariantAttributeValueModelUpdatable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PutProductsVariantsAttributeValues($attributeId, $attributeValueId, $requestBody), $fetch);
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
     * @throws \Starweb\Api\Client\Exception\ListProductCategoriesBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\ProductCategoryModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductCategories(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\ListProductCategories($queryParameters), $fetch);
    }
    /**
     * Create a product category. Retrieves the created `ProductCategory` object
     *
     * @param \Starweb\Api\Client\Model\ProductCategoryModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\CreateProductCategoryBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\ProductCategoryModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createProductCategory(\Starweb\Api\Client\Model\ProductCategoryModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\CreateProductCategory($requestBody), $fetch);
    }
    /**
     * Delete a product category permanently
     *
     * @param int $categoryId The product category id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\DeleteProductCategoryNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductCategory(int $categoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\DeleteProductCategory($categoryId), $fetch);
    }
    /**
     * Retrieves a `ProductCategory` object
     *
     * @param int $categoryId The product category id
     * @param array $queryParameters {
     *     @var string $include If you want to include child data in the result. Example: ?include=languages (to include language based data such as category names, description, etc). Available includes: languages
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\GetProductCategoryNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductCategoryModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductCategory(int $categoryId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetProductCategory($categoryId, $queryParameters), $fetch);
    }
    /**
     * Update a product category. Retrieves the updated `ProductCategory` object
     *
     * @param int $categoryId The product category id
     * @param \Starweb\Api\Client\Model\ProductCategoryModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\PatchProductCategoryBadRequestException
     * @throws \Starweb\Api\Client\Exception\PatchProductCategoryNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductCategoryModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductCategory(int $categoryId, \Starweb\Api\Client\Model\ProductCategoryModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PatchProductCategory($categoryId, $requestBody), $fetch);
    }
    /**
     * Update a product category. Retrieves the updated `ProductCategory` object
     *
     * @param int $categoryId The product category id
     * @param \Starweb\Api\Client\Model\ProductCategoryModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\PutProductCategoryBadRequestException
     * @throws \Starweb\Api\Client\Exception\PutProductCategoryNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductCategoryModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putProductCategory(int $categoryId, \Starweb\Api\Client\Model\ProductCategoryModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PutProductCategory($categoryId, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\ListProductManufacturersBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\ProductManufacturerModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductManufacturers(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\ListProductManufacturers(), $fetch);
    }
    /**
     * Creates a product manufacturer.
     *
     * @param \Starweb\Api\Client\Model\ProductManufacturerModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\CreateProductManufacturersBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\ProductManufacturerModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function createProductManufacturers(\Starweb\Api\Client\Model\ProductManufacturerModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\CreateProductManufacturers($requestBody), $fetch);
    }
    /**
     * Deletes the `ProductManufacturer` object.
     *
     * @param int $manufacturerId The manufacturers id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\DeleteProductManufacturerNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductManufacturer(int $manufacturerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\DeleteProductManufacturer($manufacturerId), $fetch);
    }
    /**
     * Retrieves the `ProductManufacturer` object.
     *
     * @param int $manufacturerId The manufacturers id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\GetProductManufacturerNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductManufacturerModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductManufacturer(int $manufacturerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetProductManufacturer($manufacturerId), $fetch);
    }
    /**
     * Updates the `ProductManufacturer` object.
     *
     * @param int $manufacturerId The manufacturers id
     * @param \Starweb\Api\Client\Model\ProductManufacturerModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\PatchProductManufacturerNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductManufacturerModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductManufacturer(int $manufacturerId, \Starweb\Api\Client\Model\ProductManufacturerModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PatchProductManufacturer($manufacturerId, $requestBody), $fetch);
    }
    /**
     * Updates the `ProductManufacturer` object.
     *
     * @param int $manufacturerId The manufacturers id
     * @param \Starweb\Api\Client\Model\ProductManufacturerModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\PutProductManufacturerNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductManufacturerModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putProductManufacturer(int $manufacturerId, \Starweb\Api\Client\Model\ProductManufacturerModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PutProductManufacturer($manufacturerId, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\ListProductUnitsBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\ProductUnitModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductUnits(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\ListProductUnits(), $fetch);
    }
    /**
     * Retrieves the `ProductUnit` object.
     *
     * @param int $unitId The units id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\GetProductUnitNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductUnitModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductUnit(int $unitId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetProductUnit($unitId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\ListProductMetaDataTypesBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\ProductMetaDataTypeModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductMetaDataTypes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\ListProductMetaDataTypes(), $fetch);
    }
    /**
     * Retrieves the `ProductMetaDataType` object.
     *
     * @param int $metaDataTypeId The meta data types id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\GetProductMetaDataTypeNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductMetaDataTypeModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductMetaDataType(int $metaDataTypeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetProductMetaDataType($metaDataTypeId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\ListProductStockStatsesBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\ProductStockStatusModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductStockStatses(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\ListProductStockStatses(), $fetch);
    }
    /**
     * Create a product stock status. Retrieves the created `ProductStockStatus` object.
     *
     * @param \Starweb\Api\Client\Model\ProductStockStatusModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\CreateProductStockStatusBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\ProductStockStatusModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createProductStockStatus(\Starweb\Api\Client\Model\ProductStockStatusModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\CreateProductStockStatus($requestBody), $fetch);
    }
    /**
     * Deletes a product stock status permanently.
     *
     * @param int $stockStatusId The stock status id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\DeleteProductStockStatusNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductStockStatus(int $stockStatusId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\DeleteProductStockStatus($stockStatusId), $fetch);
    }
    /**
     * Retrieves the `ProductStockStatus` object.
     *
     * @param int $stockStatusId The stock status id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\GetProductStockStatusNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductStockStatusModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductStockStatus(int $stockStatusId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetProductStockStatus($stockStatusId), $fetch);
    }
    /**
     * Updates a product stock status. Retrieves the update `ProductStockStatus` object.
     *
     * @param int $stockStatusId The stock status id
     * @param \Starweb\Api\Client\Model\ProductStockStatusModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\PatchProductStockStatusBadRequestException
     * @throws \Starweb\Api\Client\Exception\PatchProductStockStatusNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductStockStatusModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductStockStatus(int $stockStatusId, \Starweb\Api\Client\Model\ProductStockStatusModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PatchProductStockStatus($stockStatusId, $requestBody), $fetch);
    }
    /**
     * Updates a product stock status. Retrieves the update `ProductStockStatus` object.
     *
     * @param int $stockStatusId The stock status id
     * @param \Starweb\Api\Client\Model\ProductStockStatusModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\PutProductStockStatusBadRequestException
     * @throws \Starweb\Api\Client\Exception\PutProductStockStatusNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductStockStatusModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putProductStockStatus(int $stockStatusId, \Starweb\Api\Client\Model\ProductStockStatusModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PutProductStockStatus($stockStatusId, $requestBody), $fetch);
    }
    /**
     * Returns a list of products.
     *
     * @param array $queryParameters {
     *     @var int $page The page of products to return
     *     @var string $createdSince Use this to only fetch products that has been created since a certain time. The time should be formatted using ISO-8601 (url encoded)
     *     @var string $updatedSince Use this to only fetch products that has been modified since a certain time. The time should be formatted using ISO-8601 (url encoded)
     *     @var bool $filterVisible Only fetch products visible to visitors
     *     @var string $include If you want to include child data in the result. Example: ?include=primaryVariant (to include primary product variant);?include=primaryVariant,languages (to include both primary product variant and languages). Available includes: primaryVariant, primaryVariant.prices, primaryVariant.attributes, attributes, mediaFiles, languages, vatRates, categories, unit, metaData. NOTE! Only one variant is included in result for performance reason. To fetch all variants, instead use /products/x/variants(unnecessary if hasSeveralVariants is false)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\ListProductsBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\ProductModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProducts(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\ListProducts($queryParameters), $fetch);
    }
    /**
     * Creates a product. Retrieves the created `Product` object.
     *
     * @param \Starweb\Api\Client\Model\ProductModelUpdatable $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\CreateProductBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\ProductModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createProduct(\Starweb\Api\Client\Model\ProductModelUpdatable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\CreateProduct($requestBody), $fetch);
    }
    /**
     * Deletes a product permanently.
     *
     * @param int $productId The product id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\DeleteProductNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProduct(int $productId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\DeleteProduct($productId), $fetch);
    }
    /**
     * Retrieves the `Product` object.
     *
     * @param int $productId The product id
     * @param array $queryParameters {
     *     @var string $include If you want to include child data in the result. Example: ?include=variants (to include product variants); ?include=variants,languages (to include both product variants and languages). Available includes: primaryVariant, primaryVariant.prices, mediaFiles, languages, vatRates, categories, unit, metaData. NOTE! Only one variant is included in result for performance reason. To fetch all variants, instead use /products/x/variants (unnecessary if hasSeveralVariants is false)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\GetProductNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProduct(int $productId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetProduct($productId, $queryParameters), $fetch);
    }
    /**
     * Updates a product. Retrieves the update `Product` object.
     *
     * @param int $productId The product id
     * @param \Starweb\Api\Client\Model\ProductModelUpdatable $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\PatchProductBadRequestException
     * @throws \Starweb\Api\Client\Exception\PatchProductNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchProduct(int $productId, \Starweb\Api\Client\Model\ProductModelUpdatable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PatchProduct($productId, $requestBody), $fetch);
    }
    /**
     * Updates a product. Retrieves the update `Product` object.
     *
     * @param int $productId The product id
     * @param \Starweb\Api\Client\Model\ProductModelUpdatable $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\PutProductBadRequestException
     * @throws \Starweb\Api\Client\Exception\PutProductNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putProduct(int $productId, \Starweb\Api\Client\Model\ProductModelUpdatable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PutProduct($productId, $requestBody), $fetch);
    }
    /**
     * Return a list of product variants.
     *
     * @param int $productId The products id
     * @param array $queryParameters {
     *     @var int $page The page of customers to return
     *     @var string $include If you want to include child data in the result. Example: ?include=prices (to include variants prices). Available includes: prices, attributes, attributes.attribute
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\ListProductsVariantsBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\ProductVariantModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsVariants(int $productId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\ListProductsVariants($productId, $queryParameters), $fetch);
    }
    /**
     * Creates a product variant. Retrieves the created `ProductVariant` object
     *
     * @param int $productId The products id
     * @param \Starweb\Api\Client\Model\ProductVariantModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\CreateProductVariantBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\ProductVariantModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createProductVariant(int $productId, \Starweb\Api\Client\Model\ProductVariantModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\CreateProductVariant($productId, $requestBody), $fetch);
    }
    /**
     * Deletes a product variant permanently.
     *
     * @param int $productId The product id
     * @param int $variantId The products variants id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\DeleteProductsVariantNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsVariant(int $productId, int $variantId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\DeleteProductsVariant($productId, $variantId), $fetch);
    }
    /**
     * Retrieves the `ProductVariant` object
     *
     * @param int $productId The product id
     * @param int $variantId The products variants id
     * @param array $queryParameters {
     *     @var string $include If you want to include child data in the result. Example: ?include=prices (to include variants prices). Available includes: prices,  attributes, attributes.attribute
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\GetProductsVariantNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductVariantModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsVariant(int $productId, int $variantId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetProductsVariant($productId, $variantId, $queryParameters), $fetch);
    }
    /**
     * Updates a product variant. Retrieves the updated `ProductVariant` object
     *
     * @param int $productId The product id
     * @param int $variantId The products variants id
     * @param \Starweb\Api\Client\Model\ProductVariantModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\PatchProductsVariantBadRequestException
     * @throws \Starweb\Api\Client\Exception\PatchProductsVariantNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductVariantModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductsVariant(int $productId, int $variantId, \Starweb\Api\Client\Model\ProductVariantModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PatchProductsVariant($productId, $variantId, $requestBody), $fetch);
    }
    /**
     * Updates a product variant. Retrieves the updated `ProductVariant` object
     *
     * @param int $productId The product id
     * @param int $variantId The products variants id
     * @param \Starweb\Api\Client\Model\ProductVariantModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\PutProductsVariantBadRequestException
     * @throws \Starweb\Api\Client\Exception\PutProductsVariantNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductVariantModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putProductsVariant(int $productId, int $variantId, \Starweb\Api\Client\Model\ProductVariantModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PutProductsVariant($productId, $variantId, $requestBody), $fetch);
    }
    /**
     * Returns a list of product vat rates.
     *
     * @param int $productId The products id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\ListProductsVatRatesBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\ProductVatRateModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsVatRates(int $productId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\ListProductsVatRates($productId), $fetch);
    }
    /**
     * Creates a product vat rate. Retrieves the create `ProductVatRate` object.
     *
     * @param int $productId The products id
     * @param \Starweb\Api\Client\Model\ProductVatRateModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\CreateProductVatRateBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\ProductVatRateModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createProductVatRate(int $productId, \Starweb\Api\Client\Model\ProductVatRateModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\CreateProductVatRate($productId, $requestBody), $fetch);
    }
    /**
     * Deletes the product vat rate permanently.
     *
     * @param int $productId The product id
     * @param string $countryCode The country code for the vat rate to fetch/manipulate
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\DeleteProductsVatRateNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsVatRate(int $productId, string $countryCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\DeleteProductsVatRate($productId, $countryCode), $fetch);
    }
    /**
     * Retrieves the `ProductVatRate` object.
     *
     * @param int $productId The product id
     * @param string $countryCode The country code for the vat rate to fetch/manipulate
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\GetProductsVatRateNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductVatRateModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsVatRate(int $productId, string $countryCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetProductsVatRate($productId, $countryCode), $fetch);
    }
    /**
     * Updates a product vat rate. Retrieves the update `ProductVatRate` object.
     *
     * @param int $productId The product id
     * @param string $countryCode The country code for the vat rate to fetch/manipulate
     * @param \Starweb\Api\Client\Model\ProductVatRateModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\PatchProductsVatRateBadRequestException
     * @throws \Starweb\Api\Client\Exception\PatchProductsVatRateNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductVatRateModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductsVatRate(int $productId, string $countryCode, \Starweb\Api\Client\Model\ProductVatRateModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PatchProductsVatRate($productId, $countryCode, $requestBody), $fetch);
    }
    /**
     * Updates a product vat rate. Retrieves the update `ProductVatRate` object.
     *
     * @param int $productId The product id
     * @param string $countryCode The country code for the vat rate to fetch/manipulate
     * @param \Starweb\Api\Client\Model\ProductVatRateModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\PutProductsVatRateBadRequestException
     * @throws \Starweb\Api\Client\Exception\PutProductsVatRateNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductVatRateModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putProductsVatRate(int $productId, string $countryCode, \Starweb\Api\Client\Model\ProductVatRateModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PutProductsVatRate($productId, $countryCode, $requestBody), $fetch);
    }
    /**
     * Returns a list of product media file links.
     *
     * @param int $productId The products id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\ListProductsMediaFileLinksBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\ProductMediaFileLinkModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsMediaFileLinks(int $productId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\ListProductsMediaFileLinks($productId), $fetch);
    }
    /**
    * Creates a product media file link. 
                       Retrieves the create `ProductMediaFileLink` object.
    *
    * @param int $productId The products id
    * @param \Starweb\Api\Client\Model\ProductMediaFileLinkModel $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Client\Exception\CreateProductsMediaFileLinkBadRequestException
    *
    * @return null|\Starweb\Api\Client\Model\ProductMediaFileLinkModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function createProductsMediaFileLink(int $productId, \Starweb\Api\Client\Model\ProductMediaFileLinkModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\CreateProductsMediaFileLink($productId, $requestBody), $fetch);
    }
    /**
     * Deletes the product media file link permanently.
     *
     * @param int $productId The product id
     * @param int $mediaFileId The media file id of the link you want to fetch/change
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\DeleteProductsMediaFileLinkNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsMediaFileLink(int $productId, int $mediaFileId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\DeleteProductsMediaFileLink($productId, $mediaFileId), $fetch);
    }
    /**
     * Retrieves the `ProductMediaFileLink` object.
     *
     * @param int $productId The product id
     * @param int $mediaFileId The media file id of the link you want to fetch/change
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\GetProductsMediaFileLinkNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductMediaFileLinkModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsMediaFileLink(int $productId, int $mediaFileId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetProductsMediaFileLink($productId, $mediaFileId), $fetch);
    }
    /**
    * Updates a product media file link. 
                       Retrieves the update `ProductMediaFileLink` object.
    *
    * @param int $productId The product id
    * @param int $mediaFileId The media file id of the link you want to fetch/change
    * @param \Starweb\Api\Client\Model\ProductMediaFileLinkModel $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Client\Exception\PatchProductsMediaFileLinkBadRequestException
    * @throws \Starweb\Api\Client\Exception\PatchProductsMediaFileLinkNotFoundException
    *
    * @return null|\Starweb\Api\Client\Model\ProductMediaFileLinkModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function patchProductsMediaFileLink(int $productId, int $mediaFileId, \Starweb\Api\Client\Model\ProductMediaFileLinkModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PatchProductsMediaFileLink($productId, $mediaFileId, $requestBody), $fetch);
    }
    /**
    * Updates a product media file link. 
                       Retrieves the update `ProductMediaFileLink` object.
    *
    * @param int $productId The product id
    * @param int $mediaFileId The media file id of the link you want to fetch/change
    * @param \Starweb\Api\Client\Model\ProductMediaFileLinkModel $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Client\Exception\PutProductsMediaFileLinkBadRequestException
    * @throws \Starweb\Api\Client\Exception\PutProductsMediaFileLinkNotFoundException
    *
    * @return null|\Starweb\Api\Client\Model\ProductMediaFileLinkModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function putProductsMediaFileLink(int $productId, int $mediaFileId, \Starweb\Api\Client\Model\ProductMediaFileLinkModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PutProductsMediaFileLink($productId, $mediaFileId, $requestBody), $fetch);
    }
    /**
     * Returns a list of product languages.
     *
     * @param int $productId The products id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\ListProductsLanguagesBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\ProductLanguageModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsLanguages(int $productId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\ListProductsLanguages($productId), $fetch);
    }
    /**
     * Create a product language. Retrieves the created `ProductLanguage` object.
     *
     * @param int $productId The products id
     * @param \Starweb\Api\Client\Model\ProductLanguageModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\CreateProductsLanguageBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\ProductLanguageModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createProductsLanguage(int $productId, \Starweb\Api\Client\Model\ProductLanguageModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\CreateProductsLanguage($productId, $requestBody), $fetch);
    }
    /**
     * Delete a product language permanently.
     *
     * @param int $productId The product id
     * @param string $langCode The language code you want to fetch/change. Supported language codes are: sv, en, no, da, fi, de, fr, es
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\DeleteProductsLanguageNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsLanguage(int $productId, string $langCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\DeleteProductsLanguage($productId, $langCode), $fetch);
    }
    /**
     * Retrieves the `ProductLanguage` object.
     *
     * @param int $productId The product id
     * @param string $langCode The language code you want to fetch/change. Supported language codes are: sv, en, no, da, fi, de, fr, es
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\GetProductsLanguageNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductLanguageModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsLanguage(int $productId, string $langCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetProductsLanguage($productId, $langCode), $fetch);
    }
    /**
     * Update a product language. Retrieves the update `ProductLanguage` object.
     *
     * @param int $productId The product id
     * @param string $langCode The language code you want to fetch/change. Supported language codes are: sv, en, no, da, fi, de, fr, es
     * @param \Starweb\Api\Client\Model\ProductLanguageModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\PatchProductsLanguageBadRequestException
     * @throws \Starweb\Api\Client\Exception\PatchProductsLanguageNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductLanguageModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductsLanguage(int $productId, string $langCode, \Starweb\Api\Client\Model\ProductLanguageModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PatchProductsLanguage($productId, $langCode, $requestBody), $fetch);
    }
    /**
     * Update a product language. Retrieves the update `ProductLanguage` object.
     *
     * @param int $productId The product id
     * @param string $langCode The language code you want to fetch/change. Supported language codes are: sv, en, no, da, fi, de, fr, es
     * @param \Starweb\Api\Client\Model\ProductLanguageModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\PutProductsLanguageBadRequestException
     * @throws \Starweb\Api\Client\Exception\PutProductsLanguageNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductLanguageModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putProductsLanguage(int $productId, string $langCode, \Starweb\Api\Client\Model\ProductLanguageModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PutProductsLanguage($productId, $langCode, $requestBody), $fetch);
    }
    /**
     * Returns a list of product category links.
     *
     * @param int $productId The products id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\ListProductsCategoryLinksBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\ProductCategoryLinkModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsCategoryLinks(int $productId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\ListProductsCategoryLinks($productId), $fetch);
    }
    /**
     * Retrieves the created `ProductCategoryLink` object
     *
     * @param int $productId The products id
     * @param \Starweb\Api\Client\Model\ProductCategoryLinkModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\CreateProductsCategoryLinkBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\ProductCategoryLinkModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createProductsCategoryLink(int $productId, \Starweb\Api\Client\Model\ProductCategoryLinkModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\CreateProductsCategoryLink($productId, $requestBody), $fetch);
    }
    /**
     * Delete a product category link permanently.
     *
     * @param int $productId The product id
     * @param int $categoryId The category id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\DeleteProductsCategoryLinkNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsCategoryLink(int $productId, int $categoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\DeleteProductsCategoryLink($productId, $categoryId), $fetch);
    }
    /**
     * Retrieves the `ProductCategoryLink` object
     *
     * @param int $productId The product id
     * @param int $categoryId The category id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\GetProductsCategoryLinkNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductCategoryLinkModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsCategoryLink(int $productId, int $categoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetProductsCategoryLink($productId, $categoryId), $fetch);
    }
    /**
     * Update a product category link. Retrieves the update `ProductCategoryLink` object.
     *
     * @param int $productId The product id
     * @param int $categoryId The category id
     * @param \Starweb\Api\Client\Model\ProductCategoryLinkModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\PatchProductsCategoryLinkBadRequestException
     * @throws \Starweb\Api\Client\Exception\PatchProductsCategoryLinkNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductCategoryLinkModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductsCategoryLink(int $productId, int $categoryId, \Starweb\Api\Client\Model\ProductCategoryLinkModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PatchProductsCategoryLink($productId, $categoryId, $requestBody), $fetch);
    }
    /**
     * Update a product category link. Retrieves the update `ProductCategoryLink` object.
     *
     * @param int $productId The product id
     * @param int $categoryId The category id
     * @param \Starweb\Api\Client\Model\ProductCategoryLinkModel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\PutProductsCategoryLinkBadRequestException
     * @throws \Starweb\Api\Client\Exception\PutProductsCategoryLinkNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductCategoryLinkModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putProductsCategoryLink(int $productId, int $categoryId, \Starweb\Api\Client\Model\ProductCategoryLinkModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PutProductsCategoryLink($productId, $categoryId, $requestBody), $fetch);
    }
    /**
     * Returns a list of product meta data.
     *
     * @param int $productId The products id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\ListProductsMetaDataBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\ProductMetaDataModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsMetaData(int $productId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\ListProductsMetaData($productId), $fetch);
    }
    /**
     * Creates a product meta data. Retrieves the created `ProductMetaData` object.
     *
     * @param int $productId The products id
     * @param \Starweb\Api\Client\Model\ProductMetaDataModelUpdatable $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\CreateProductsMetaDataBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\ProductMetaDataModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createProductsMetaData(int $productId, \Starweb\Api\Client\Model\ProductMetaDataModelUpdatable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\CreateProductsMetaData($productId, $requestBody), $fetch);
    }
    /**
     * Deletes a product meta data permanently.
     *
     * @param int $productId The product id
     * @param int $metaDataTypeId The meta data type id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\DeleteProductsMetaDataNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsMetaData(int $productId, int $metaDataTypeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\DeleteProductsMetaData($productId, $metaDataTypeId), $fetch);
    }
    /**
     * Retrieves the `ProductMetaData` object.
     *
     * @param int $productId The product id
     * @param int $metaDataTypeId The meta data type id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\GetProductsMetaDataNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductMetaDataModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsMetaData(int $productId, int $metaDataTypeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetProductsMetaData($productId, $metaDataTypeId), $fetch);
    }
    /**
     * Updates a product meta data. Retrieves the update `ProductMetaData` object.
     *
     * @param int $productId The product id
     * @param int $metaDataTypeId The meta data type id
     * @param \Starweb\Api\Client\Model\ProductMetaDataModelUpdatable $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\PatchProductsMetaDataBadRequestException
     * @throws \Starweb\Api\Client\Exception\PatchProductsMetaDataNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductMetaDataModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductsMetaData(int $productId, int $metaDataTypeId, \Starweb\Api\Client\Model\ProductMetaDataModelUpdatable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PatchProductsMetaData($productId, $metaDataTypeId, $requestBody), $fetch);
    }
    /**
     * Updates a product meta data. Retrieves the update `ProductMetaData` object.
     *
     * @param int $productId The product id
     * @param int $metaDataTypeId The meta data type id
     * @param \Starweb\Api\Client\Model\ProductMetaDataModelUpdatable $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\PutProductsMetaDataBadRequestException
     * @throws \Starweb\Api\Client\Exception\PutProductsMetaDataNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductMetaDataModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putProductsMetaData(int $productId, int $metaDataTypeId, \Starweb\Api\Client\Model\ProductMetaDataModelUpdatable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PutProductsMetaData($productId, $metaDataTypeId, $requestBody), $fetch);
    }
    /**
     * Returns a list of product attributes.
     *
     * @param int $productId The products id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\ListProductsAttributesNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductVariantAttributeModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsAttributes(int $productId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\ListProductsAttributes($productId), $fetch);
    }
    /**
     * Creates a product attribute. Retrieves the created `ProductAttribute` object.
     *
     * @param int $productId The products id
     * @param \Starweb\Api\Client\Model\ProductsAttributesModelItem $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\AddProductsAttributesNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductVariantAttributeModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function addProductsAttributes(int $productId, \Starweb\Api\Client\Model\ProductsAttributesModelItem $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\AddProductsAttributes($productId, $requestBody), $fetch);
    }
    /**
     * Deletes a product attribute permanently.
     *
     * @param int $productId The product id
     * @param int $attributeId The attribute id you want to fetch.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\DeleteProductsAttributeNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsAttribute(int $productId, int $attributeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\DeleteProductsAttribute($productId, $attributeId), $fetch);
    }
    /**
     * Retrieves the `ProductAttribute` object.
     *
     * @param int $productId The product id
     * @param int $attributeId The attribute id you want to fetch.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\GetProductsAttributeNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductVariantAttributeModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsAttribute(int $productId, int $attributeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetProductsAttribute($productId, $attributeId), $fetch);
    }
    /**
     * Returns a list of product variant pricelist prices
     *
     * @param int $productId The products id
     * @param int $variantId The products variants id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\ListProductsVariantsPricelistPricesBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\ProductVariantPriceModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsVariantsPricelistPrices(int $productId, int $variantId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\ListProductsVariantsPricelistPrices($productId, $variantId), $fetch);
    }
    /**
    * Creates a product variant pricelist price. 
                       Retrieves the created `ProductVariantPricelistPrice` object
    *
    * @param int $productId The products id
    * @param int $variantId The products variants id
    * @param \Starweb\Api\Client\Model\ProductVariantPriceModel $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Client\Exception\CreateProductVariantPricelistPriceBadRequestException
    *
    * @return null|\Starweb\Api\Client\Model\ProductVariantPriceModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function createProductVariantPricelistPrice(int $productId, int $variantId, \Starweb\Api\Client\Model\ProductVariantPriceModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\CreateProductVariantPricelistPrice($productId, $variantId, $requestBody), $fetch);
    }
    /**
     * Deletes a product variant pricelist price permanently.
     *
     * @param int $productId The product id
     * @param int $variantId The products variants id
     * @param int $pricelistId The pricelist id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\DeleteProductsVariantsPricelistPriceNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsVariantsPricelistPrice(int $productId, int $variantId, int $pricelistId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\DeleteProductsVariantsPricelistPrice($productId, $variantId, $pricelistId), $fetch);
    }
    /**
     * Retrieves the `ProductVariantPricelistPrice` object
     *
     * @param int $productId The product id
     * @param int $variantId The products variants id
     * @param int $pricelistId The pricelist id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\GetProductsVariantsPricelistPriceNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductVariantPriceModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsVariantsPricelistPrice(int $productId, int $variantId, int $pricelistId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetProductsVariantsPricelistPrice($productId, $variantId, $pricelistId), $fetch);
    }
    /**
    * Updates a product variant pricelist price. 
                       Retrieves the updated `ProductVariantPricelistPrice` object
    *
    * @param int $productId The product id
    * @param int $variantId The products variants id
    * @param int $pricelistId The pricelist id
    * @param \Starweb\Api\Client\Model\ProductVariantPriceModel $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Client\Exception\PatchProductsVariantsPricelistPriceBadRequestException
    * @throws \Starweb\Api\Client\Exception\PatchProductsVariantsPricelistPriceNotFoundException
    *
    * @return null|\Starweb\Api\Client\Model\ProductVariantPriceModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function patchProductsVariantsPricelistPrice(int $productId, int $variantId, int $pricelistId, \Starweb\Api\Client\Model\ProductVariantPriceModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PatchProductsVariantsPricelistPrice($productId, $variantId, $pricelistId, $requestBody), $fetch);
    }
    /**
    * Updates a product variant pricelist price. 
                       Retrieves the updated `ProductVariantPricelistPrice` object
    *
    * @param int $productId The product id
    * @param int $variantId The products variants id
    * @param int $pricelistId The pricelist id
    * @param \Starweb\Api\Client\Model\ProductVariantPriceModel $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Starweb\Api\Client\Exception\PutProductsVariantsPricelistPriceBadRequestException
    * @throws \Starweb\Api\Client\Exception\PutProductsVariantsPricelistPriceNotFoundException
    *
    * @return null|\Starweb\Api\Client\Model\ProductVariantPriceModelItem|\Psr\Http\Message\ResponseInterface
    */
    public function putProductsVariantsPricelistPrice(int $productId, int $variantId, int $pricelistId, \Starweb\Api\Client\Model\ProductVariantPriceModel $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\PutProductsVariantsPricelistPrice($productId, $variantId, $pricelistId, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Api\Client\Model\ShippingMethodModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getShippingMethods(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetShippingMethods(), $fetch);
    }
    /**
     * Retrieves a `ShippingMethid` object
     *
     * @param int $shippingMethodId The shipping method id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\GetShippingMethodNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ShippingMethodModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getShippingMethod(int $shippingMethodId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetShippingMethod($shippingMethodId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Api\Client\Model\ShippingTrackingTypeModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getShippingTrackingTypes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetShippingTrackingTypes(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Api\Client\Exception\GetShopNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ShopItem|\Psr\Http\Message\ResponseInterface
     */
    public function getShop(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\GetShop(), $fetch);
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
        $serializer = new \Symfony\Component\Serializer\Serializer(\Starweb\Api\Client\Normalizer\NormalizerFactory::create(), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode())));
        return new static($httpClient, $messageFactory, $serializer, $streamFactory);
    }
}