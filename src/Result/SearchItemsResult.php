<?php

namespace Gusdecool\EnvatoSDK\Result;

use Gusdecool\EnvatoSDK\Result\Links\ResultLinks;
use Gusdecool\EnvatoSDK\Result\Sub\Item;
use Gusdecool\EnvatoSDK\Result\Sub\SearchAggregations;

/**
 * Search items result
 *
 * @see https://build.envato.com/api#search_GET_search_item_json docs
 */
class SearchItemsResult
{

    /**
     * Time taken to execute query.
     */
    public int $took;

    /**
     * List of found items.
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
