<?php

namespace Gusdecool\EnvatoSDKTest\Result;

use Gusdecool\EnvatoSDK\Result\SearchItemsResult;
use JMS\Serializer\SerializerBuilder;
use PHPUnit\Framework\TestCase;

class SearchItemsResultTest extends TestCase
{

    public function testDeserialization(): void
    {
        $json = file_get_contents(__DIR__ . '/../resources/search_items_result.json');
        $serializer = SerializerBuilder::create()->build();

        /** @var SearchItemsResult $result */
        $result = $serializer->deserialize($json, SearchItemsResult::class, 'json');

        $this->assertEquals(17, $result->took);
    }
}
