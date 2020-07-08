<?php

namespace Gusdecool\EnvatoSDK\Result\Previews;

class IconWithThumbnailPreview
{
    /**
     * URL to a preview icon
     */
    public string $icon_url;

    /**
     * URL to thumbnail
     */
    public string $thumbnail_url;

    /**
     * thumbnail width
     */
    public int $thumbnail_width;

    /**
     * thumbnail height
     */
    public int $thumbnail_height;
}
