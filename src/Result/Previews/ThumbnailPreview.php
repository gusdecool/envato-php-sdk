<?php

namespace Gusdecool\EnvatoSDK\Result\Previews;

class ThumbnailPreview
{
    /**
     * URL to small preview
     */
    public string $small_url;

    /**
     * URL to large preview
     */
    public string $large_url;

    /**
     * Width of preview
     */
    public int $large_width;

    /**
     * Height of preview
     */
    public int $large_height;
}
