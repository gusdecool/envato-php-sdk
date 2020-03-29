<?php

namespace Gusdecool\EnvatoSDK\Parameter;

use Gusdecool\EnvatoSDK\Enum\SiteEnum;
use JMS\Serializer\Annotation as Serializer;

/**
 * @see https://build.envato.com/api#search_GET_search_item_json
 *
 * @Serializer\ExclusionPolicy("all")
 *
 * TODO complete the possible attributes
 */
abstract class AbstractSearchItemsParam
{

    /**
     * @return string|null
     *
     * @Serializer\Expose()
     * @Serializer\Type("string")
     * @Serializer\Groups({"default"})
     * @Serializer\VirtualProperty()
     */
    abstract public function getTerm(): ?string;

    /**
     * @return SiteEnum|null
     *
     * @Serializer\Expose()
     * @Serializer\Type("string")
     * @Serializer\Groups({"default"})
     * @Serializer\VirtualProperty()
     */
    public function getSite(): ?SiteEnum
    {
        return null;
    }
}
