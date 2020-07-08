<?php

/** @noinspection PhpUnused */

namespace Gusdecool\EnvatoSDK\Result\Previews;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\ExclusionPolicy("all")
 */
final class AllPreviews
{
    /**
     * URL to thumbnail preview
     */
    public ?ThumbnailPreview $thumbnailPreview;

    /**
     * URL to icon with thumbnail preview
     */
    public ?IconWithThumbnailPreview $iconWithThumbnailPreview;

    /**
     * URL to landscape preview
     * @Serializer\Expose()
     * @Serializer\Type("Gusdecool\EnvatoSDK\Result\Previews\IconWithLandscapePreview")
     */
    public ?IconWithLandscapePreview $iconWithLandscapePreview;

    /**
     * URL to icon with square preview
     */
    public ?IconWithSquarePreview $iconWithSquarePreview;

    /**
     * URL to icon with audio preview
     */
    public IconWithAudioPreview $iconWithAudioPreview;

    /**
     * URL to icon with video preview
     */
    public ?IconWithVideoPreview $iconWithVideoPreview;

    /**
     * URL to live site
     */
    public ?LiveSite $liveSite;

    /**
     * URL to icon preview
     */
    public ?IconPreview $iconPreview;

    /**
     * URL to landscape preview
     */
    public ?LandscapePreview $landscapePreview;
}
