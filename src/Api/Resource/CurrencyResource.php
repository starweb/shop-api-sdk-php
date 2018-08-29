<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\Currency\Currency;
use Starweb\Api\Model\Currency\CurrencyCollection;
use Starweb\Api\Model\Currency\CurrencyItem;
use Starweb\Api\Operation\Currency\ListCurrencies;
use Starweb\Api\Operation\Currency\RetrieveCurrency;

class CurrencyResource extends Resource
{
    /**
     * @return CurrencyCollection
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function list(): CurrencyCollection
    {
        $response = $this->performOperation(
            new ListCurrencies($this, [], $this->getPathParameters())
        );

        return $response->getContentAsModel(CurrencyCollection::class);
    }
    
    /**
     * @param string $currencyCode
     *
     * @return Currency
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(string $currencyCode): CurrencyItem
    {
        $pathParameters = array_merge($this->getPathParameters(), ['currencyCode' => $currencyCode]);
        $response = $this->performOperation(
            new RetrieveCurrency($this, [], $pathParameters)
        );
        $item = $response->getContentAsModel(CustomerTagItem::class);

        return $item->getData();
    }
}
