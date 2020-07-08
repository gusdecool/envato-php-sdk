<?php /** @noinspection PhpUnused */

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
    public ?string $term;

    /**
     * The site to match.
     *
     * @see SiteEnum for possible options.
     */
    public ?string $site;

    /**
     * Comma separated list of tags to match.
     */
    public ?string $tags;

    /**
     * Category code to search for.
     */
    public ?string $category;

    /**
     * The platform to match.
     */
    public ?string $platform;

    /**
     * Frameworks or compatible software to match.
     */
    public ?string $compatibleWith;

    /**
     * Comma separated list of colors to match.
     */
    public ?string $colors;

    /**
     * Comma separated list of sizes to match.
     */
    public ?string $sizes;

    /**
     * A minimum photo size to match.
     *
     * TODO add photo size enum
     */
    public ?string $size;

    /**
     * Name of the sales bucket to filter by (see the aggregation sales result).
     */
    public ?string $sales;

    /**
     * Minimum rating to filter by.
     */
    public ?int $ratingMin;

    /**
     * Minimum price to include, in whole dollars.
     */
    public ?int $priceMin;

    /**
     * Maximum price to include, in whole dollars.
     */
    public ?int $priceMax;

    /**
     * Preferred polygon count. Either a single polygon count or a range separated by `-`.
     */
    public ?string $polyCount;

    /**
     * The item type to match.
     */
    public ?string $itemType;

    /**
     * Whether to include search suggestions.
     */
    public ?bool $suggest;

    /**
     * Restrict items by original uploaded date.
     *
     * TODO add possible options enum.
     */
    public ?string $date;

    /**
     * Restrict items by updated date.
     *
     * TODO add possible options enum.
     */
    public ?string $dateUpdated;

    /**
     * Minimum video or audio length in the form, in seconds.
     */
    public ?int $lengthMin;

    /**
     * Maximum video or audio length in the form, in seconds.
     */
    public ?int $lengthMax;

    /**
     * One of very-slow, slow, medium, upbeat, fast and very-fast.
     *
     * @TODO add enum
     */
    public ?string $tempo;

    /**
     * Does the graphic include an alpha mask.
     */
    public ?bool $alpha;

    /**
     * The type of vocal content in audio files, comma separated, valid values: 'background vocals',
     * 'background vocals/harmonies', 'lead vocals', 'instrumental version included', 'vocal samples', 'no vocals'.
     *
     * TODO add enum.
     */
    public ?string $vocalsInAudio;

    /**
     * Does the item loop seamlessly.
     */
    public ?bool $looped;

    /**
     * Image or video orientation to match.
     *
     * TODO add enum
     */
    public ?string $orientation;

    /**
     * Restrict to items that do or don't require plugins.
     */
    public ?string $requiresPlugins;

    /**
     * The minimum resolution for video content.
     *
     * TODO add enum
     */
    public ?string $resolutionMin;

    /**
     * Match a particular FPS value for video content.
     */
    public ?string $frameRate;

    /**
     * Page number (max. 60).
     */
    public ?int $page;

    /**
     * Number of items per page (max. 100).
     */
    public ?int $pageSize;

    /**
     * The name of the attribute to search by, eg: compatible-with.
     */
    public ?string $attributeKey;

    /**
     * The attribute value to match, eg: Wordpress 3.5.
     */
    public ?string $attributeValue;

    /**
     * Username to restrict by.
     */
    public ?string $username;

    public ?bool $discountedOnly;
    public ?int $discountAmountMin;
    public ?int $discountPercentMin;

    /**
     * Sort by one of the following: relevance, rating, sales, price, date, updated, category, name, trending,
     * featured_until.
     *
     * @see SortEnum for possible value.
     */
    public ?string $sortBy;

    /**
     * Sort direction. One of: asc, desc.
     *
     * TODO add enum.
     */
    public ?string $sortDirection;

    public ?string $salt;
}
