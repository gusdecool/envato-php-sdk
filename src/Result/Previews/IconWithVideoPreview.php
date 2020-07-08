<?php /** @noinspection PhpUnused */

namespace Gusdecool\EnvatoSDK\Result\Previews;

use Gusdecool\EnvatoSDK\Result\Sub\Image;

class IconWithVideoPreview
{
    /**
     * URL to a preview icon
     */
    public string $icon_url;

    /**
     * URL to landscape preview
     */
    public string $landscape_url;

    /**
     * URL to video preview
     */
    public string $video_url;

    /**
     * URL to download video preview
     */
    public ?string $video_preview_download_url;

    /**
     * preview image variants URLs
     *
     * @var Image[]
     */
    public array $image_urls = [];
}
