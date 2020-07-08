<?php

namespace Gusdecool\EnvatoSDK\Result\Previews;

use Gusdecool\EnvatoSDK\Result\Sub\Image;

class LandscapePreview
{
    /**
     * URL to landscape preview
     */
    public string $landscape_url;

    /**
     * preview image variants URLs
     *
     * @var Image[]
     */
    public array $image_urls = [];

}
