<?php

namespace Gusdecool\EnvatoSDK\Result\Previews;

class AllPreviews
{
    /**
     * URL to thumbnail preview
     */
    public ?ThumbnailPreview $thumbnailPreview;

    /**
     * URL to icon with thumbnail preview
     */
    public ?IconWithThumbnailPreview $icon_with_thumbnail_preview;

    /**
     * URL to landscape preview
     */
    public ?IconWithLandscapePreview $icon_with_landscape_preview;

    /**
     * URL to icon with square preview
     */
    public ?IconWithSquarePreview $icon_with_square_preview;

    /**
     * URL to icon with audio preview
     */
    public IconWithAudioPreview $icon_with_audio_preview;

    /**
     * URL to icon with video preview
     */
    public ?IconWithVideoPreview $icon_with_video_preview;

    /**
     * URL to live site
     */
    public ?LiveSite $live_site;

    /**
     * URL to icon preview
     */
    public ?IconPreview $icon_preview;

    /**
     * URL to landscape preview
     */
    public ?LandscapePreview $landscape_preview;
}
