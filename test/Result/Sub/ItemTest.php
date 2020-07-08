<?php

namespace Gusdecool\EnvatoSDKTest\Result\Sub;

use Gusdecool\EnvatoSDK\Result\Sub\Item;
use Gusdecool\EnvatoSDK\Utility\SerializerBuilder;
use PHPUnit\Framework\TestCase;

final class ItemTest extends TestCase
{

    public function testDeserialization(): void
    {
        $json = file_get_contents(__DIR__ . '/../../resources/single_item_result.json');
        $serializer = SerializerBuilder::build();

        /** @var Item $result */
        $item = $serializer->deserialize($json, Item::class, 'json');

        $this->assertEquals(10947944, $item->id);
        $this->assertEquals(
            'https://s3.envato.com/files/284917373/image-preview-wp_03.__large_preview.png',
            $item->previews->iconWithLandscapePreview->landscapeUrl
        );

        foreach ($item->attributes as $attribute) {
            if ($attribute->name === 'demo-url') {
                $this->assertEquals(
                    'http://www.slashdown.net/starhotel-wp/',
                    $attribute->value
                );
            }
        }
    }
}
