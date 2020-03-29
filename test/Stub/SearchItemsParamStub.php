<?php

namespace Gusdecool\EnvatoSDKTest\Stub;

use Gusdecool\EnvatoSDK\Enum\SiteEnum;
use Gusdecool\EnvatoSDK\Parameter\AbstractSearchItemsParam;
use JMS\Serializer\Annotation as Serializer;

/**
 * @see https://build.envato.com/api#search_GET_search_item_json
 *
 * @Serializer\ExclusionPolicy("all")
 */
final class SearchItemsParamStub extends AbstractSearchItemsParam
{

    /**
     * @inheritDoc
     */
    public function getTerm(): ?string
    {
        return 'hotel';
    }

    /**
     * @return SiteEnum
     */
    public function getSite(): SiteEnum
    {
        return SiteEnum::THEME_FOREST();
    }
}
