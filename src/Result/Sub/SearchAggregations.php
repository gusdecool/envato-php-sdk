<?php

/** @noinspection PhpUnused */

namespace Gusdecool\EnvatoSDK\Result\Sub;

class SearchAggregations
{
    /**
     * Count of items in all categories
     */
    public ?Bucket $category_root_count;

    /**
     * Category aggregations
     */
    public ?Bucket $category;

    /**
     * Count of items in all platforms
     */
    public ?Bucket $platform_root_count;

    /**
     * Platform aggregations
     */
    public ?Bucket $platform;

    /**
     * Internal use: software version aggregations
     */
    public ?Bucket $__internal_software_versions;

    /**
     * File format aggregations
     */
    public ?Bucket $file_formats;

    /**
     * Files included aggregations
     */
    public ?Bucket $files_included;

    /**
     * Tags aggregation
     */
    public ?Bucket $tags;

    /**
     * Colors aggregation
     */
    public ?Bucket $colors;

    /**
     * Rating aggregation
     */
    public ?Bucket $rating;

    /**
     * Date aggregation
     */
    public ?Bucket $date;

    /**
     * Date updated aggregation
     */
    public ?Bucket $date_updated;

    /**
     * Size aggregation
     *
     * @deprecated
     */
    public ?Bucket $size;

    /**
     * Sizes aggregation
     */
    public ?Bucket $sizes;

    /**
     * Sales count aggregation
     */
    public ?Bucket $sales_count;

    /**
     * Cost/price aggregation
     */
    public ?StatsAggregation $cost;

    /**
     * Length aggregation
     */
    public ?StatsAggregation $length;

    /**
     * Tempo aggregation
     */
    public ?Bucket $tempo;

    /**
     * Alpha channel aggregation
     */
    public ?Bucket $alpha;

    /**
     * Looped audio aggregation
     */
    public ?Bucket $looped;

    /**
     * Resolution aggregation
     */
    public ?Bucket $resolution;

    /**
     * Vocals in audio aggregation
     */
    public ?Bucket $vocals_in_audio;

    /**
     * Frame rate aggregation
     */
    public ?Bucket $frame_rate;

    /**
     * Compatible with aggregation
     */
    public ?Bucket $compatible_with;

    /**
     * Orientation aggregation
     */
    public ?Bucket $orientation;

    /**
     * Requires plugins aggregation
     */
    public ?Bucket $requires_plugins;

    /**
     * Include P.R.O Affiliation aggregation
     */
    public ?Bucket $include_pro_affiliated;
}
