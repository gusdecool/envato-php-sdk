<?php

/** @noinspection PhpUnused */

namespace Gusdecool\EnvatoSDK\Result\Sub;

use Gusdecool\EnvatoSDK\Result\Previews\AllPreviews;

class Item
{
    /**
     * item id
     */
    public string $id;

    /**
     * item name
     */
    public string $name;

    /**
     * item description
     */
    public string $description;

    /**
     * full html description
     */
    public string $descriptionHtml;

    /**
     * site item is sold under
     */
    public string $site;

    /**
     * item category
     */
    public string $classification;

    /**
     * link to category page
     */
    public string $classificationUrl;

    /**
     * price of item in cents (if applicable)
     */
    public ?int $priceCents;

    /**
     * number of sales made
     */
    public int $numberOfSales;

    /**
     * username of author
     */
    public string $authorUsername;

    /**
     * link to author profile page
     */
    public string $authorUrl;

    /**
     * link to author image
     */
    public string $authorImage;

    /**
     * url of item
     */
    public string $url;

    /**
     * summary text of item
     */
    public string $summary;

    /**
     * item rating
     */
    public float $rating;

    /**
     * date item was last updated
     */
    public string $updatedAt;

    /**
     * date item was published
     */
    public string $publishedAt;

    /**
     * is the item currently trending?
     */
    public bool $trending;

    /**
     * Preview image types
     *
     * @var AllPreviews[]
     */
    public array $previews = [];

    /**
     * item attribute details
     *
     * @var Attribute[]
     */
    public array $attributes;

    /**
     * photo attribute details
     *
     * @var Attribute[]
     */
    public array $photoAttributes = [];

    /**
     * item key features
     *
     * @var string[]
     */
    public array $keyFeatures = [];

    /**
     * item image url
     *
     * @var Image[]
     */
    public array $imageUrls = [];

    /**
     * tags for the item
     *
     * @var string[]
     */
    public array $tags = [];
}
