<?php

namespace Gusdecool\EnvatoSDK\Result\Sub;

class Bucket
{
    /**
     * Bucket key
     */
    public string $key;

    /**
     * Count of items within this bucket
     */
    public int $count;

    /**
     * The description of this bucket
     */
    public ?string $description;
}
