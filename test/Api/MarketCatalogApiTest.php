<?php

namespace Gusdecool\EnvatoSDKTest\Api;

use Gusdecool\EnvatoSDK\Api\MarketCatalogApi;
use Gusdecool\EnvatoSDK\Enum\SiteEnum;
use Gusdecool\EnvatoSDK\Utility\HttpClientBuilder;
use Gusdecool\EnvatoSDKTest\AbstractUnitTestCase;
use GuzzleHttp\Exception\GuzzleException;

final class MarketCatalogApiTest extends AbstractUnitTestCase
{

    private MarketCatalogApi $api;

    protected function setUp(): void
    {
        parent::setUp();

        $this->api = new MarketCatalogApi(HttpClientBuilder::personal($_ENV['PERSONAL_AUTH_TOKEN']));
    }

    /**
     * @throws GuzzleException
     */
    public function testSearchItems(): void
    {
        $result = $this->api->searchItems(
            [
                'term' => 'hotel',
                'site' => SiteEnum::THEME_FOREST
            ]
        );

        $this->assertIsInt($result['took']);
        $this->assertIsArray($result['matches']);
        $this->assertTrue(count($result['matches']) > 0);
    }
}
