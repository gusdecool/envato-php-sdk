<?php

namespace Gusdecool\EnvatoSDKTest\Api;

use Gusdecool\EnvatoSDK\Api\MarketCatalogApi;
use Gusdecool\EnvatoSDK\Result\SearchItemsResult;
use Gusdecool\EnvatoSDKTest\AbstractUnitTestCase;
use Gusdecool\EnvatoSDKTest\Stub\SearchItemsParamStub;
use GuzzleHttp\Exception\GuzzleException;

final class MarketCatalogApiTest extends AbstractUnitTestCase
{

    private MarketCatalogApi $api;

    protected function setUp(): void
    {
        parent::setUp();

        $this->api = new MarketCatalogApi(getenv('AUTH_TOKEN'));
    }

    /**
     * @throws GuzzleException
     */
    public function testSearchItems(): void
    {

        $result = $this->api->searchItems(new SearchItemsParamStub());

        $this->assertInstanceOf(SearchItemsResult::class, $result);
        $this->assertIsInt($result->getTook());
    }
}
