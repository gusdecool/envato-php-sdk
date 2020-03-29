<?php

namespace Gusdecool\EnvatoSDK\Api;

use Gusdecool\EnvatoSDK\Parameter\AbstractSearchItemsParam;
use Gusdecool\EnvatoSDK\Result\SearchItemsResult;
use GuzzleHttp\Exception\GuzzleException;

/**
 * Class MarketCatalogApi
 */
class MarketCatalogApi extends AbstractApi
{

    /**
     * Search for items
     *
     * @param AbstractSearchItemsParam $param
     * @return SearchItemsResult
     * @throws GuzzleException
     * @see https://build.envato.com/api#search_GET_search_item_json
     */
    public function searchItems(AbstractSearchItemsParam $param): SearchItemsResult
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
