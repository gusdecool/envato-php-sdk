<?php

namespace Gusdecool\EnvatoSDK\Result\Sub;

class Image
{
    /**
     * image variant name
     */
    public ?string $name;

    /**
     * image variant url
     */
    public string $url;

    /**
     * image variant width
     */
    public int $width;

    /**
     * image variant height
     */
    public int $height;
}
