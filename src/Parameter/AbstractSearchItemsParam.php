<?php

namespace Gusdecool\EnvatoSDK\Parameter;

use Gusdecool\EnvatoSDK\Enum\CategoryEnum;
use Gusdecool\EnvatoSDK\Enum\SiteEnum;
use Gusdecool\EnvatoSDK\Enum\SortEnum;
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

    /**
     * @return bool|null
     *
     * @Serializer\Expose()
     * @Serializer\Type("bool")
     * @Serializer\Groups({"default"})
     * @Serializer\VirtualProperty()
     */
    public function isSuggest(): ?bool
    {
        return null;
    }

    /**
     * @return SortEnum|null
     *
     * @Serializer\Expose()
     * @Serializer\Type("string")
     * @Serializer\Groups({"default"})
     * @Serializer\VirtualProperty()
     */
    public function getSortBy(): ?SortEnum
    {
        return null;
    }

    /**
     * @return CategoryEnum|null
     *
     * @Serializer\Expose()
     * @Serializer\Type("string")
     * @Serializer\Groups({"default"})
     * @Serializer\VirtualProperty()
     */
    public function getCategory(): ?CategoryEnum
    {
        return null;
    }

    /**
     * Page number (max. 60)
     *
     * @return int|null
     *
     * @Serializer\Expose()
     * @Serializer\Type("int")
     * @Serializer\Groups({"default"})
     * @Serializer\VirtualProperty()
     */
    public function getPage(): ?int
    {
        return null;
    }

    /**
     * Number of items per page (max. 100)
     *
     * @return int|null
     *
     * @Serializer\Expose()
     * @Serializer\Type("int")
     * @Serializer\Groups({"default"})
     * @Serializer\VirtualProperty()
     */
    public function getPageSize(): ?int
    {
        return null;
    }
}
