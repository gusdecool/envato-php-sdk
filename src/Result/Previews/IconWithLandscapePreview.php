<?php

/** @noinspection PhpUnused */

namespace Gusdecool\EnvatoSDK\Result\Previews;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\ExclusionPolicy("all")
 */
final class IconWithLandscapePreview
{
    /**
     * URL to a preview icon
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    public string $iconUrl;

    /**
     * URL to landscape preview
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    public string $landscapeUrl;
}
