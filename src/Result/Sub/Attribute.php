<?php

namespace Gusdecool\EnvatoSDK\Result\Sub;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\ExclusionPolicy("all")
 */
class Attribute
{
    /**
     * attribute name
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    public string $name;

    /**
     * attribute value
     *
     * @var string|string[]
     * @Serializer\Expose()
     * @Serializer\Type("EnvatoAttribute")
     */
    public $value;
}
