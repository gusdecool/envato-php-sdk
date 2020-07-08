<?php

namespace Gusdecool\EnvatoSDK\Result\Previews;

use Gusdecool\EnvatoSDK\Result\Sub\Duration;

class IconWithAudioPreview
{
    /**
     * URL to a preview icon
     */
    public string $icon_url;

    /**
     * URL to mp3 preview
     */
    public string $mp3_url;

    /**
     * URL to download mp3 preview
     */
    public ?string $mp3_preview_download_url;

    /**
     * MP3 id
     */
    public string $mp3_id;

    /**
     * MP3 length
     */
    public Duration $length;
}
