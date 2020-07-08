<?php

/** @noinspection PhpUnused */

namespace Gusdecool\EnvatoSDK\Result\Sub;

use Gusdecool\EnvatoSDK\Result\Previews\AllPreviews;
use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\ExclusionPolicy("all")
 */
class Item
{
    /**
     * item id
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    public string $id;

    /**
     * item name
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    public string $name;

    /**
     * item description
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    public string $description;

    /**
     * full html description
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    public string $descriptionHtml;

    /**
     * site item is sold under
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    public string $site;

    /**
     * item category
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    public string $classification;

    /**
     * link to category page
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    public string $classificationUrl;

    /**
     * price of item in cents (if applicable)
     * @Serializer\Expose()
     * @Serializer\Type("int")
     */
    public ?int $priceCents = null;

    /**
     * number of sales made
     * @Serializer\Expose()
     * @Serializer\Type("int")
     */
    public int $numberOfSales;

    /**
     * username of author
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    public string $authorUsername;

    /**
     * link to author profile page
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    public string $authorUrl;

    /**
     * link to author image
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    public string $authorImage;

    /**
     * url of item
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    public string $url;

    /**
     * summary text of item
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    public string $summary;

    /**
     * item rating
     * @Serializer\Expose()
     * @Serializer\Type("float")
     */
    public float $rating;

    /**
     * date item was last updated
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    public string $updatedAt;

    /**
     * date item was published
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    public string $publishedAt;

    /**
     * is the item currently trending?
     * @Serializer\Expose()
     * @Serializer\Type("bool")
     */
    public bool $trending;

    /**
     * Preview image types
     *
     * @var AllPreviews[]
     * TODO to expose
     */
    public array $previews = [];

    /**
     * item attribute details
     *
     * @var Attribute[]
     * TODO to expose
     */
    public array $attributes;

    /**
     * photo attribute details
     *
     * @var Attribute[]
     * TODO to expose
     */
    public array $photoAttributes = [];

    /**
     * item key features
     *
     * @var string[]
     * TODO to expose
     */
    public array $keyFeatures = [];

    /**
     * item image url
     *
     * @var Image[]
     * TODO to expose
     */
    public array $imageUrls = [];

    /**
     * tags for the item
     *
     * @var string[]
     * @Serializer\Expose()
     * @Serializer\Type("array<string>")
     */
    public array $tags = [];
}
