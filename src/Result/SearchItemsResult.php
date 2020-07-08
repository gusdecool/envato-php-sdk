<?php

/** @noinspection PhpUnused */

namespace Gusdecool\EnvatoSDK\Result;

use Gusdecool\EnvatoSDK\Result\Links\ResultLinks;
use Gusdecool\EnvatoSDK\Result\Sub\Item;
use Gusdecool\EnvatoSDK\Result\Sub\SearchAggregations;
use JMS\Serializer\Annotation as Serializer;

/**
 * Search items result
 *
 * @see https://build.envato.com/api#search_GET_search_item_json docs
 * @Serializer\ExclusionPolicy("all")
 */
class SearchItemsResult
{

    /**
     * Time taken to execute query.
     * @Serializer\Expose()
     * @Serializer\Type("int")
     */
    public int $took;

    /**
     * List of found items.
     *
     * @var Item[]
     * @Serializer\Expose()
     * @Serializer\Type("array<Gusdecool\EnvatoSDK\Result\Sub\Item>")
     */
    public array $matches = [];

    /**
     * Item that is searched against for similar items.
     */
    public ?Item $item;

    /**
     * If the search timed out during execution.
     */
    public bool $timedOut;

    /**
     * Pagination links.
     */
    public ResultLinks $links;

    /**
     * Does the search term match an author name?
     */
    public bool $authorExists;

    /**
     * Aggregation information.
     */
    public SearchAggregations $aggregations;

    /**
     * Search suggestions.
     */
    public array $suggestions = [];
}
