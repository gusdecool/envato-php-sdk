<?php

namespace Gusdecool\EnvatoSDK\Result\Previews;

use Gusdecool\EnvatoSDK\Result\Sub\Image;

class IconWithSquarePreview
{
    /**
     * URL to a preview icon
     */
    public string $icon_url;

    /**
     * URL to square preview icon
     */
    public string $square_url;

    /**
     * preview image variants URLs
     *
     * @var Image[]
     */
    public array $image_urls = [];
}
