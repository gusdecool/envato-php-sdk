<?php

namespace Gusdecool\EnvatoSDK\Result;

use JMS\Serializer\Annotation as Serializer;

/**
 * @see https://build.envato.com/api#search_GET_search_item_json
 *
 * @Serializer\ExclusionPolicy("all")
 *
 * TODO complete the possible attributes
 */
final class SearchItemsResult
{

    /**
     * Time taken to execute query.
     *
     * @var int
     *
     * @Serializer\Expose()
     * @Serializer\Type("int")
     * @Serializer\Groups({"default"})
     */
    private int $took;

    /**
     * List of found items
     *
     * @var ItemResult[]
     *
     * @Serializer\Expose()
     * @Serializer\Type("array<Gusdecool\EnvatoSDK\Result\ItemResult>")
     * @Serializer\Groups({"default"})
     */
    private array $matches = [];

    /**
     * @return int
     */
    public function getTook(): int
    {
        return $this->took;
    }

    /**
     * @return ItemResult[]
     */
    public function getMatches(): array
    {
        return $this->matches;
    }
}
