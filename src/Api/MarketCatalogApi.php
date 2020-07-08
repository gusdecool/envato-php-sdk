<?php

namespace Gusdecool\EnvatoSDK\Api;

use Gusdecool\EnvatoSDK\Parameter\SearchItemsParameter;
use Gusdecool\EnvatoSDK\Result\SearchItemsResult;
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
}
