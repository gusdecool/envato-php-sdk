<?php

namespace Gusdecool\EnvatoSDK\Api;

use Gusdecool\EnvatoSDK\Parameter\SearchItemsParameter;
use Gusdecool\EnvatoSDK\Result\SearchItemsResult;
use Gusdecool\EnvatoSDK\Result\Sub\Item;
use GuzzleHttp\Exception\GuzzleException;

/**
 * Envato Market Catalog API.
 */
class MarketCatalogApi extends AbstractApi
{

    /**
     * Search for items
     *
     * @throws GuzzleException
     * @see https://build.envato.com/api#search_GET_search_item_json docs
     */
    public function searchItems(SearchItemsParameter $param): SearchItemsResult
    {
        $response = $this->getClient()->request(
            'GET',
            '/v1/discovery/search/search/item',
            [
                'query' => $this->toArray($param)
            ]
        );

        /** @var SearchItemsResult $result */
        $result = $this->deserialize((string) $response->getBody(), SearchItemsResult::class);

        return $result;
    }

    /**
     * Returns all details of a particular item on Envato Market.
     * @throws GuzzleException
     * @see https://build.envato.com/api#market_0_Catalog_Item docs
     */
    public function singleItem(string $id): Item
    {
        $response = $this->getClient()->request(
            'GET',
            '/v3/market/catalog/item',
            [
                'query' => ['id' => $id]
            ]
        );

        /** @var Item $result */
        $result = $this->deserialize((string) $response->getBody(), Item::class);

        return $result;
    }
}
