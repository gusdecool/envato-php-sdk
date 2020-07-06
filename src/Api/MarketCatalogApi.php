<?php

namespace Gusdecool\EnvatoSDK\Api;

use GuzzleHttp\Exception\GuzzleException;

/**
 * Envato Market Catalog API.
 */
class MarketCatalogApi extends AbstractApi
{

    /**
     * Search for items
     *
     * @param array $params
     * @return array
     * @throws GuzzleException
     * @see https://build.envato.com/api#search_GET_search_item_json docs
     */
    public function searchItems(array $params): array
    {
        $response = $this->getClient()->request(
            'GET',
            '/v1/discovery/search/search/item',
            [
                'query' => $params
            ]
        );

        return json_decode((string) $response->getBody(), true);
    }
}
