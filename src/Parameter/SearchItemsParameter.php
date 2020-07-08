<?php

/** @noinspection PhpUnused */

namespace Gusdecool\EnvatoSDK\Parameter;

use Gusdecool\EnvatoSDK\Enum\SiteEnum;
use Gusdecool\EnvatoSDK\Enum\SortEnum;

/**
 * Search items parameter
 *
 * @see https://build.envato.com/api#search_GET_search_item_json docs
 */
class SearchItemsParameter
{

    /**
     * The string to search for.
     */
    public ?string $term = null;

    /**
     * The site to match.
     *
     * @see SiteEnum for possible options.
     */
    public ?string $site = null;

    /**
     * Comma separated list of tags to match.
     */
    public ?string $tags = null;

    /**
     * Category code to search for.
     */
    public ?string $category = null;

    /**
     * The platform to match.
     */
    public ?string $platform = null;

    /**
     * Frameworks or compatible software to match.
     */
    public ?string $compatibleWith = null;

    /**
     * Comma separated list of colors to match.
     */
    public ?string $colors = null;

    /**
     * Comma separated list of sizes to match.
     */
    public ?string $sizes = null;

    /**
     * A minimum photo size to match.
     *
     * TODO add photo size enum
     */
    public ?string $size = null;

    /**
     * Name of the sales bucket to filter by (see the aggregation sales result).
     */
    public ?string $sales = null;

    /**
     * Minimum rating to filter by.
     */
    public ?int $ratingMin = null;

    /**
     * Minimum price to include, in whole dollars.
     */
    public ?int $priceMin = null;

    /**
     * Maximum price to include, in whole dollars.
     */
    public ?int $priceMax = null;

    /**
     * Preferred polygon count. Either a single polygon count or a range separated by `-`.
     */
    public ?string $polyCount = null;

    /**
     * The item type to match.
     */
    public ?string $itemType = null;

    /**
     * Whether to include search suggestions.
     */
    public ?bool $suggest = null;

    /**
     * Restrict items by original uploaded date.
     *
     * TODO add possible options enum.
     */
    public ?string $date = null;

    /**
     * Restrict items by updated date.
     *
     * TODO add possible options enum.
     */
    public ?string $dateUpdated = null;

    /**
     * Minimum video or audio length in the form, in seconds.
     */
    public ?int $lengthMin = null;

    /**
     * Maximum video or audio length in the form, in seconds.
     */
    public ?int $lengthMax = null;

    /**
     * One of very-slow, slow, medium, upbeat, fast and very-fast.
     *
     * @TODO add enum
     */
    public ?string $tempo = null;

    /**
     * Does the graphic include an alpha mask.
     */
    public ?bool $alpha = null;

    /**
     * The type of vocal content in audio files, comma separated, valid values: 'background vocals',
     * 'background vocals/harmonies', 'lead vocals', 'instrumental version included', 'vocal samples', 'no vocals'.
     *
     * TODO add enum.
     */
    public ?string $vocalsInAudio = null;

    /**
     * Does the item loop seamlessly.
     */
    public ?bool $looped = null;

    /**
     * Image or video orientation to match.
     *
     * TODO add enum
     */
    public ?string $orientation = null;

    /**
     * Restrict to items that do or don't require plugins.
     */
    public ?string $requiresPlugins = null;

    /**
     * The minimum resolution for video content.
     *
     * TODO add enum
     */
    public ?string $resolutionMin = null;

    /**
     * Match a particular FPS value for video content.
     */
    public ?string $frameRate = null;

    /**
     * Page number (max. 60).
     */
    public ?int $page = null;

    /**
     * Number of items per page (max. 100).
     */
    public ?int $pageSize = null;

    /**
     * The name of the attribute to search by, eg: compatible-with.
     */
    public ?string $attributeKey = null;

    /**
     * The attribute value to match, eg: Wordpress 3.5.
     */
    public ?string $attributeValue = null;

    /**
     * Username to restrict by.
     */
    public ?string $username = null;

    public ?bool $discountedOnly = null;
    public ?int $discountAmountMin = null;
    public ?int $discountPercentMin = null;

    /**
     * Sort by one of the following: relevance, rating, sales, price, date, updated, category, name, trending,
     * featured_until.
     *
     * @see SortEnum for possible value.
     */
    public ?string $sortBy = null;

    /**
     * Sort direction. One of: asc, desc.
     *
     * TODO add enum.
     */
    public ?string $sortDirection = null;

    public ?string $salt = null;
}
