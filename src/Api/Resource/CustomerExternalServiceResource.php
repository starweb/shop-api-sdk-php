<?php declare(strict_types=1);

namespace Starweb\Api\Resource;

use Starweb\Api\Model\CustomerExternalService\CustomerExternalServiceCollection;
use Starweb\Api\Model\CustomerExternalService\CustomerExternalServiceItem;
use Starweb\Api\Operation\CustomerExternalService\ListCustomerExternalServices;
use Starweb\Api\Operation\CustomerExternalService\RetrieveCustomerExternalService;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CustomerExternalServiceResource extends Resource
{
    public function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('customerId');
        $resolver->setAllowedTypes('customerId', 'int');

        return $resolver;
    }

    /**
     * @return CustomerExternalServiceCollection
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function list(): CustomerExternalServiceCollection
    {
        $response = $this->performOperation(
            new ListCustomerExternalServices($this, [], $this->getPathParameters())
        );

        return $response->getContentAsModel(CustomerExternalServiceCollection::class);
    }

    /**
     * @param string $serviceName
     *
     * @return CustomerExternalServiceItem
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(string $serviceName): CustomerExternalServiceItem
    {
        $pathParameters = array_merge($this->getPathParameters(), ['serviceName' => $serviceName]);
        $response = $this->performOperation(
            new RetrieveCustomerExternalService($this, [], $pathParameters)
        );
        $item = $response->getContentAsModel(CustomerExternalServiceItem::class);

        return $item->getData();
    }
}
