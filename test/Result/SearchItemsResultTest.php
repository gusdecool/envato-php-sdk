<?php

namespace Gusdecool\EnvatoSDKTest\Result;

use Gusdecool\EnvatoSDK\Result\SearchItemsResult;
use Gusdecool\EnvatoSDK\Utility\SerializerBuilder;
use PHPUnit\Framework\TestCase;

class SearchItemsResultTest extends TestCase
{

    public function testDeserialization(): void
    {
        $json = file_get_contents(__DIR__ . '/../resources/search_items_result.json');
        $serializer = SerializerBuilder::build();

        /** @var SearchItemsResult $result */
        $result = $serializer->deserialize($json, SearchItemsResult::class, 'json');
        $item = $result->matches[0];

        $this->assertEquals(17, $result->took);
        $this->assertEquals(
            'https://previews.customer.envatousercontent.com/files/282632194/preview/01_preview.__large_preview.jpg',
            $item->previews->iconWithLandscapePreview->landscapeUrl
        );

        foreach ($item->attributes as $attribute) {
            if ($attribute->name === 'demo-url') {
                $this->assertEquals(
                    'https://preview.eagle-themes.com/zante/intro/',
                    $attribute->value
                );
            }
        }
    }
}
